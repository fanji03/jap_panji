<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .sidebar {
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        background: linear-gradient(#088DA0, #03333A);
        padding-top: 100px; /* Increased padding at the top for spacing */
        padding-left: 15px; /* Adjusted padding */
        padding-right: 15px; /* Optional: Add right padding */
        color: #fff;
    }
    .sidebar .profile {
        display: flex; /* Align items in a row */
        align-items: center; /* Center vertically */
        margin-bottom: 30px; /* Space below the profile */
    }
    .sidebar .profile img {
        border-radius: 50%; /* Round the profile image */
        margin-right: 10px; /* Space between the image and text */
        width: 50px; /* Set a specific width for the image */
        height: 50px; /* Set a specific height for the image */
    }
    .sidebar .profile-text h4 {
        margin: 0; /* Remove default margin */
        font-size: 1.5em; /* Increase font size */
    }
    .sidebar a {
        color: #fff;
        padding: 10px;
        display: block;
        text-decoration: none;
        margin-bottom: 15px; /* Increased space between features */
    }
    .sidebar a:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
    }
    /* Main content styling */
    .content {
        margin-left: 250px;
        padding: 20px;
    }
    .navbar {
        background-color: #f8f9fa;
    }
    
    /* Align "Home / Dashboard" text to the right */
    .navbar .navbar-text {
        margin-left: auto;
        font-weight: bold;
    }
    
    /* Card styling */
    .card {
        text-align: center;
        color: #fff;
        cursor: pointer;
        position: relative;
    }
    .card .card-body {
        padding-bottom: 30px; /* Make room for the info overlay */
    }
    .card .info-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.2); /* Overlay color */
        padding: 10px 0;
        font-size: 0.9em;
        border-radius: 0 0 5px 5px;
        text-align: center;
    }
    
    /* Card background colors and overlay */
    .card.bg-cyan { background-color: #00C4CC; }
    .card.bg-cyan .info-overlay { background-color: rgba(59, 130, 134, 0.8);}
    .card.bg-red { background-color: #dc3545; }
    .card.bg-red .info-overlay { background-color: rgba(150, 0, 20, 0.8); }
    .card.bg-yellow { background-color: #ffc107; }
    .card.bg-yellow .info-overlay { background-color: rgba(180, 130, 0, 0.8); }
    .card.bg-green { background-color: #28a745; }
    .card.bg-green .info-overlay { background-color: rgba(20, 100, 35, 0.8); }
</style>

</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
            <div class="profile">
            <img src="{{ asset('img/user-profil.png') }}" alt="Admin" class="img-fluid">
            <div class="profile-text">
                <h4>Admin</h4>
            </div>
        </div>
        <a href="{{ url('admin/dashboard') }}"><i class="bi bi-house-door"></i> Dashboard</a>
        <a href="#laporanSubmenu" class="dropdown-toggle" data-bs-toggle="collapse"><i class="bi bi-envelope"></i> Seluruh Laporan</a>
        <div id="laporanSubmenu" class="collapse">
            <a href="{{ url('/laporanpublik') }}">Laporan Publik</a>
            <a href="#">Laporan Privat</a>
        </div>
        <a href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </div>

    <div class="content">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <span class="navbar-text">
                    Home / Verifikasi-Laporan
                </span>
            </div>

            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
