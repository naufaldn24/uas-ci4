<?= $this->include('layouts/header') ?>

<div class="page-header">
  <div class="container" data-aos="fade-up">
    <h1 class="display-4">Hubungi Kami</h1>
    <p class="lead text-muted col-lg-8 mx-auto">Punya pertanyaan atau ingin memulai proyek? Kami siap membantu.</p>
  </div>
</div>

<div class="container py-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <div data-aos="fade-up" data-aos-delay="100">
        <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
          <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>
      </div>

      <div class="card p-4 p-md-5 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="200">
        <form method="post" action="/contact">
          <?= csrf_field() // Keamanan CodeIgniter 4 ?>

          <div class="mb-4">
            <label for="name" class="form-label fs-5 fw-semibold">Nama</label>
            <input type="text" class="form-control form-control-lg" id="name" name="name" value="<?= old('name') ?>"
              required>
          </div>

          <div class="mb-4">
            <label for="email" class="form-label fs-5 fw-semibold">Email</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?= old('email') ?>"
              required>
          </div>

          <div class="mb-4">
            <label for="message" class="form-label fs-5 fw-semibold">Pesan</label>
            <textarea class="form-control form-control-lg" id="message" name="message" rows="5"
              required><?= old('message') ?></textarea>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-custom btn-lg">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->include('layouts/footer') ?>