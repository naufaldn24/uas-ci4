<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            // Aturan validasi
            $rules = [
                'name' => 'required|min_length[3]',
                'email' => 'required|valid_email',
                'message' => 'required|min_length[10]',
            ];

            if (!$this->validate($rules)) {
                return view('contact/index', [
                    'validation' => $this->validator,
                ]);
            }

            // Ambil data
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'message' => $this->request->getPost('message'),
            ];

            // Simpan ke database
            $contactModel = new ContactModel();
            $contactModel->insert($data);

            // Kirim email
            $email = \Config\Services::email();

            $email->setTo('maufura87@gmail.com');
            $email->setFrom('maufura87@gmail.com', 'Website Company');
            $email->setSubject('Pesan Baru dari Form Kontak');
            $email->setMessage("
                <h3>Pesan Baru dari Website</h3>
                <p><strong>Nama:</strong> " . esc($data['name']) . "</p>
                <p><strong>Email:</strong> " . esc($data['email']) . "</p>
                <p><strong>Pesan:</strong><br>" . nl2br(esc($data['message'])) . "</p>
            ");

            if (!$email->send()) {
                return redirect()->to('/contact')->with('error', 'Pesan berhasil disimpan, tapi email gagal dikirim.');
            }

            return redirect()->to('/contact')->with('success', 'Pesan berhasil dikirim dan email terkirim!');
        }

        return view('contact/index');
    }
}
