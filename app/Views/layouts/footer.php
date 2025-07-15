<footer class="footer-custom border-top border-secondary">
  <div class="container pb-4">
    <div class="row">
      <div class="col-lg-5 col-md-12 mb-4">
        <h5 class="text-uppercase" style="font-family: 'Playfair Display', serif; color: var(--accent-gold);">MyCompany
        </h5>
        <p>Mitra terpercaya untuk solusi digital premium yang mendorong pertumbuhan bisnis Anda ke level berikutnya.</p>
      </div>
      <div class="col-lg-2 col-md-4 mb-4">
        <h5 class="text-uppercase small">Menu</h5>
        <ul class="list-unstyled mb-0">
          <li><a href="/">Beranda</a></li>
          <li><a href="/about">Tentang</a></li>
          <li><a href="/services">Layanan</a></li>
          <li><a href="/contact">Kontak</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4 mb-4">
        <h5 class="text-uppercase small">Kontak</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-envelope fa-fw me-2"></i> info@mycompany.com</li>
          <li><i class="fas fa-phone fa-fw me-2"></i> +62 812-3456-7890</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-4 mb-4">
        <h5 class="text-uppercase small">Ikuti Kami</h5>
        <a href="#" class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
        <a href="#" class="me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
        <a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom text-center">
    &copy; <?= date('Y') ?> MyCompany. All Rights Reserved.
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  // Inisialisasi AOS
  AOS.init({
    duration: 800,
    once: true
  });

  // Script untuk Navbar Transparan
  const navbar = document.querySelector('.navbar-custom');
  if (navbar.classList.contains('navbar-transparent')) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.remove('navbar-transparent');
        navbar.classList.add('navbar-solid');
      } else {
        navbar.classList.add('navbar-transparent');
        navbar.classList.remove('navbar-solid');
      }
    });
  }
</script>
</body>

</html>