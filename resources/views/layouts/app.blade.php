<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sacco ERP')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #00bcd4;
            color: white;
        }

        .navbar-custom .nav-link,
        .navbar-custom .navbar-brand {
            color: white;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background-color: #ffffff;
            border-right: 1px solid #dee2e6;
            position: fixed;
            top: 56px; /* matches navbar height */
            bottom: 0;
            overflow-y: auto;
            padding-top: 1rem;
        }

        .sidebar a {
            color: #333;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #e9ecef;
        }

        /* Main content area */
        .content {
            margin-left: 240px;
            margin-top: 56px; /* same as navbar height */
            padding: 20px;
            flex: 1;
        }

        /* Footer */
        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #dee2e6;
        }

        /* Scrollbar styling (optional) */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: #ccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sacco ERP</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Account</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#"><i class="bi bi-house"></i> Dashboard</a>
        <a href="#">System Admin</a>
        <a href="#">Master Data</a>
        <a href="#">Members</a>
        <a href="#">Loans</a>
        <a href="#">Shares</a>
        <a href="#">Savings</a>
        <a href="#">Front Office</a>
        <a href="#">Financials</a>
        <a href="#">Banking</a>
        <a href="#">Bulk SMS</a>
    </div>

    <!-- Main Content -->
    <main class="content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <small>&copy; {{ date('Y') }} Sacco ERP. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
