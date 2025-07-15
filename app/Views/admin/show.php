<?= $this->include('layouts/admin_header') ?>

<h1 class="mb-4">Detail Pesan Kontak</h1>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <table class="table table-borderless">
            <tr>
                <th>Nama</th>
                <td><?= esc($contact['name']) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= esc($contact['email']) ?></td>
            </tr>
            <tr>
                <th>Pesan</th>
                <td><?= esc($contact['message']) ?></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?= date('d M Y H:i', strtotime($contact['created_at'])) ?></td>
            </tr>
        </table>
    </div>
</div>

<a href="/admin/contacts" class="btn btn-secondary">
    <i class="bi bi-arrow-left"></i> Kembali
</a>

<?= $this->include('layouts/admin_footer') ?>