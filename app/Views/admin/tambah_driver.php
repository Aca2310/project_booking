<?php
echo view('admin/templet/header');
echo view('admin/templet/navbar');
?>
<!-- SIDEBAR -->
<section id="sidebar">
    <div class="profile-tab-nav border-right">
        <ul class="side-menu top">
            <li>
                <a class="nav-link" id="dashboard-tab" data-toggle="pill" href="dashboard_admin" role="tab" aria-controls="dashboard" aria-selected="false" style="margin-top: 5%; ">
                    <i class="fa-solid fa-chart-column" style="color: #ffffff;"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="nav-link" id="BookingRequest-tab" data-toggle="pill" href="BookingRequest" role="tab" aria-controls="BookingRequests" aria-selected="false">
                    <i class="fa-solid fa-bell" style="color: #ffffff;"></i>
                    <span class="text">Booking Request</span>
                </a>
            </li>
            <li>
                <a class="nav-link" id="User-tab" data-toggle="pill" href="User" role="tab" aria-controls="User" aria-selected="false">
                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                    <span class="text">User</span>
                </a>
            </li>
            <li class="active">
                <a class="nav-link" id="Driver-tab" data-toggle="pill" href="Driver" role="tab" aria-controls="Driver" aria-selected="false">
                    <i class="fa-solid fa-car" style="color: #ffffff;"></i>
                    <span class="text">Driver</span>
                </a>
            </li>
            <li>
                <a class="nav-link" id="driver-tab" data-toggle="pill" href="ruangan" role="tab" aria-controls="driver" aria-selected="false">
                    <i class="fa-solid fa-door-open" style="color: #ffffff;"></i>
                    <span class="text">ruangan</span>
                </a>
            </li>
            <li>
                <a class="nav-link" id="History" data-toggle="pill" href="History" role="tab" aria-controls="History" aria-selected="false">
                    <i class="fa-solid fa-book-open" style="color: #ffffff;"></i>
                    <span class="text">Laporan</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu">
            <li>
            <li>
                <a class="nav-link" id="logout-tab" data-toggle="pill" href="javascript:void(0)" role="tab" aria-controls="logout" aria-selected="false" onclick="logout()">
                    <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</section>

<main class="main-content">
    <div style="margin-left: 35px;">
        <h2>Tambah Data Driver</h2>
        <form action="<?= site_url('admin/simpan_driver'); ?>" method="post">
            <div class="card-body">
            <div class="form-group">
                <div class="col-sm-6 mb-3">
                    <label for="Nama-driver" style="color: #281362; font-weight: 600;">Nama<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" id="Nama-driver" name="nama" style="width: 80%; border-radius: 10px;" placeholder="Nama Driver" required>
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="telp" style="color: #281362; font-weight: 600;">Telp<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" id="telp" name="telp" style="width: 80%; border-radius: 10px;" placeholder="Telp Driver" required>
                </div>
            </div>
            <div class="form-group row justify-content-between text-right">
                <div class="col-sm-6">
                    <a class="btn btn-secondary" style="color: #ffffff;width: 100px; margin-right: 2%; border-radius: 20px;" href="<?= site_url('admin/driver'); ?>">Batal</a>
                    <button type="submit" class="btn btn-success" style="color: #ffffff; margin-right: 20%; border-radius: 20px">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</main>
</body>
