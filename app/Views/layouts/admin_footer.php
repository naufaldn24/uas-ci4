</main>
<footer class="text-center text-muted p-3 mt-auto" style="font-size: 0.9rem;">
    Copyright &copy; Website Kamu <?= date('Y') ?>
</footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Menangani klik pada tombol toggle sidebar
    const sidebarToggle = document.getElementById('sidebarToggle');
    const body = document.body;

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', () => {
            // Menambah/menghapus kelas 'sidebar-collapsed' pada body
            body.classList.toggle('sidebar-collapsed');

            // Menyimpan status sidebar (terbuka/tertutup) ke localStorage
            localStorage.setItem('sidebar-collapsed', body.classList.contains('sidebar-collapsed'));
        });
    }

    // Memeriksa status sidebar dari localStorage saat halaman dimuat
    const isSidebarCollapsed = localStorage.getItem('sidebar-collapsed') === 'true';
    if (isSidebarCollapsed) {
        body.classList.add('sidebar-collapsed');
    }
</script>

</body>

</html>