<?= $this->include('layouts/admin_header', ['title' => 'Dashboard Admin']) ?>



<h1 class="mb-4">Selamat datang, Admin!</h1>



<div class="row g-3">

    <div class="col-md-4">

        <div class="card shadow-sm rounded-3">

            <div class="card-body">

                <h5 class="card-title">Jumlah Pesan</h5>

                <p class="card-text display-6"><?= $totalMessages ?? 0 ?></p>

                </div>

            </div>

        </div>

    <!-- Bisa tambah card lain untuk statistik -->

</div>



<?= $this->include('layouts/admin_footer') ?>