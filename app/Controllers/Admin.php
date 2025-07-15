<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ContactModel;

class Admin extends BaseController
{
    public function login()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $model = new AdminModel();
            $admin = $model->where('username', $username)->first();

            if ($admin && password_verify($password, $admin['password'])) {
                session()->set('isLoggedIn', true);
                return redirect()->to('/admin/dashboard');
            }

            return view('admin/login', ['error' => 'Username atau password salah.']);
        }

        return view('admin/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }

    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/admin/login');
        }

        $contactModel = new ContactModel();
        $totalMessages = $contactModel->countAllResults();

        $data = [
            'totalMessages' => $totalMessages,
            // Jika ada UserModel, bisa tambahkan totalUsers juga di sini
        ];

        return view('admin/dashboard', $data);
    }

    public function contacts()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/admin/login');
        }

        $model = new ContactModel();

        $data['contacts'] = $model->orderBy('created_at', 'DESC')
            ->paginate(5);
        $data['pager'] = $model->pager;

        return view('admin/contacts', $data);
    }

    public function show($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/admin/login');
        }

        $model = new ContactModel();
        $contact = $model->find($id);

        if (!$contact) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Pesan tidak ditemukan');
        }

        return view('admin/show', ['contact' => $contact]);
    }

    public function delete($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/admin/login');
        }

        $model = new ContactModel();
        $model->delete($id);

        return redirect()->to('/admin/contacts')->with('success', 'Pesan berhasil dihapus.');
    }
    
    public function register()
    {
        helper(['form']);
        return view('admin/register');
    }

    public function attemptRegister()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        $rules = [
            'username' => 'required|is_unique[admins.username]',
            'email' => 'required|valid_email|is_unique[admins.email]',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new \App\Models\AdminModel();
        $model->save([
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/admin/login')->with('message', 'Registrasi berhasil. Silakan login.');
    }

}
