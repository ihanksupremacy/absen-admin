<div class="sidebar bg-dark">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active text-white" href="/">
                <i class="bi bi-house-door-fill"></i>
                <span class="ms-2">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/export-users">
                <i class="bi bi-people-fill"></i>
                <span class="ms-2">EKSPOR ABSEN</span>
            </a>
        </li>
       
    </ul>
</div>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #eef7ff;
    }
    .navbar-custom {
        background-color: #ffffff;
        border-bottom: 2px solid #00008B;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
        color: #00008B;
    }
    .navbar-custom .navbar-brand {
        font-weight: bold;
    }
    .navbar-custom .navbar-nav .nav-link.active {
        font-weight: bold;
        color: #00008B;
    }
    /* CSS Sidebar */
    .sidebar {
        height: 100vh;
        position: sticky;
        top: 0;
        background-color: #343a40;
        padding-top: 20px;
        width: 200px;
    }
    .sidebar .nav-link {
        color: #fff;
        padding: 10px 15px;
        display: flex;
        align-items: center;
    }
    .sidebar .nav-link.active {
        background-color: #007bff;
        color: white;
    }
    .sidebar .nav-link i {
        font-size: 20px;
        margin-right: 10px;
    }
    .main-content {
        margin-left: 250px;
        padding: 20px;
    }
    /* CSS Konten */
    .card-custom {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 20px;
    }
    .table td, .table th {
        vertical-align: middle;
    }
    .badge-status {
        padding: 5px 10px;
        border-radius: 20px;
        color: #fff;
    }
    .badge-status.hadir {
        background-color: #28a745;
    }
    .badge-status.tidak-hadir {
        background-color: #dc3545;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

