<?= $this->include('layouts/header') ?>

<div class="page-header">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4">Tentang Kami</h1>
        <p class="lead text-muted col-lg-8 mx-auto">Mengenal lebih dalam tentang siapa kami, visi, dan misi yang kami
            emban untuk kesuksesan Anda.</p>
    </div>
</div>

<div class="container py-5 my-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1200"
                class="img-fluid rounded-3 shadow-lg" alt="Tim Kami">
        </div>
        <div class="col-lg-6" data-aos="fade-left">
            <h2>Visi Kami</h2>
            <p class="text-muted">Menjadi mitra teknologi terdepan yang paling terpercaya di Indonesia, menginspirasi
                inovasi dan mendorong transformasi digital yang berkelanjutan.</p>
            <h2 class="mt-4">Misi Kami</h2>
            <ul class="list-unstyled text-muted">
                <li class="mb-2"><i class="fas fa-check-circle me-2 text-success"></i>Menghadirkan solusi teknologi yang
                    superior dan custom-fit.</li>
                <li class="mb-2"><i class="fas fa-check-circle me-2 text-success"></i>Membangun hubungan jangka panjang
                    berbasis kepercayaan dengan klien.</li>
                <li class="mb-2"><i class="fas fa-check-circle me-2 text-success"></i>Terus berinovasi dan beradaptasi
                    dengan perkembangan teknologi global.</li>
            </ul>
            <a href="/services" class="btn btn-outline-light mt-3">Lihat Layanan Kami</a>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer') ?>