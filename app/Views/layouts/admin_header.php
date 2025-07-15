<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'Admin Dashboard' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 260px;
        }

        body {
            display: flex;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            background-color: #f4f7fc;
        }

        #sidebar {
            width: var(--sidebar-width);
            background-color: #ffffff;
            border-right: 1px solid #e0e0e0;
            flex-shrink: 0;
            transition: width 0.3s ease;
        }

        .sidebar-header {
            padding: 1.2rem 1.5rem;
            font-size: 1.25rem;
            font-weight: 700;
            color: #0d6efd;
            border-bottom: 1px solid #e0e0e0;
        }

        #sidebar .nav-link {
            display: flex;
            align-items: center;
            color: #555;
            font-weight: 500;
            padding: 0.8rem 1.5rem;
            margin: 0.2rem 0;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        #sidebar .nav-link .fa-fw {
            width: 1.5rem;
            margin-right: 0.75rem;
        }

        #sidebar .nav-link.active,
        #sidebar .nav-link:hover {
            background-color: #e9f2ff;
            color: #0d6efd;
        }

        #content-wrapper {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        #top-navbar {
            height: 60px;
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
            flex-shrink: 0;
        }

        #sidebarToggle {
            background: none;
            border: none;
            font-size: 1.25rem;
            color: #555;
            cursor: pointer;
        }

        #content {
            padding: 2rem;
            flex-grow: 1;
            overflow-y: auto;
        }

        body.sidebar-collapsed #sidebar {
            width: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <div id="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-shield-alt"></i> Admin Panel
        </div>
        <nav class="nav flex-column p-3">
            <a class="nav-link <?= uri_string() == 'admin/dashboard' ? 'active' : '' ?>" href="/admin/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard
            </a>
            <a class="nav-link <?= uri_string() == 'admin/contacts' ? 'active' : '' ?>" href="/admin/contacts">
                <i class="fas fa-fw fa-envelope"></i> Pesan Masuk
            </a>
            <a class="nav-link" href="/admin/logout">
                <i class="fas fa-fw fa-sign-out-alt"></i> Logout
            </a>
        </nav>
    </div>

    <div id="content-wrapper">
        <nav id="top-navbar">
            <button id="sidebarToggle" aria-label="Toggle Sidebar">
                <i class="fas fa-bars"></i>
            </button>

            <div class="ms-auto d-flex align-items-center">
                <span class="me-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <i class="fas fa-user-circle fa-2x text-gray-400"></i>
            </div>
        </nav>

        <main id="content">