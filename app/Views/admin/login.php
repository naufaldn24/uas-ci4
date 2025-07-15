<?= $this->include('layouts/auth_header') ?>

<div class="container">
    <div class="login-container">
        <h2 class="text-center">Login Admin</h2>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= esc($error) ?></div>
        <?php endif; ?>

        <form method="post" action="/admin/login">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>

<?= $this->include('layouts/auth_footer') ?>