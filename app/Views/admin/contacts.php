<?= $this->include('layouts/admin_header', ['title' => 'Daftar Pesan']) ?>

<h2 class="mb-4">Daftar Pesan Masuk</h2>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<?php if (empty($contacts)): ?>
    <div class="alert alert-warning">Belum ada pesan masuk.</div>
<?php else: ?>
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $index => $contact): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($contact['name']) ?></td>
                        <td><?= esc($contact['email']) ?></td>
                        <td><?= esc(strlen($contact['message']) > 50 ? substr($contact['message'], 0, 50) . '...' : $contact['message']) ?>
                        </td>
                        <td><?= date('d M Y H:i', strtotime($contact['created_at'])) ?></td>
                        <td>
                            <a href="/admin/contact/<?= $contact['id'] ?>" class="btn btn-sm btn-info">Lihat</a>
                            <a href="/admin/delete/<?= $contact['id'] ?>" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus pesan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= $pager->links('default', 'bootstrap_pagination') ?>
<?php endif; ?>

<?= $this->include('layouts/admin_footer') ?>