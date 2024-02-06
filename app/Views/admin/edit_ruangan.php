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
            <li>
                <a class="nav-link" id="Driver-tab" data-toggle="pill" href="Driver" role="tab" aria-controls="Driver" aria-selected="false">
                    <i class="fa-solid fa-car" style="color: #ffffff;"></i>
                    <span class="text">Driver</span>
                </a>
            </li>
            <li class="active">
                <a class="nav-link" id="ruangan-tab" data-toggle="pill" href="ruangan" role="tab" aria-controls="ruangan" aria-selected="false">
                    <i class="fa-solid fa-door-open" style="color: #ffffff;"></i>
                    <span class="text">Ruangan</span>
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
        <h2>Edit Data Ruangan</h2>
        <div class="card-body">
            <div class="form-group row">
                <div class="col-sm-6 mb-3">
                    <label for="Nama-ruangan" style="color: #281362; font-weight: 600;">Nama Ruangan <sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" id="Nama-ruangan" name="Nama-ruangan" style="width: 80%; border-radius: 10px;">
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="Kapasitas" style="color: #281362; font-weight: 600;">Kapasitas <sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" id="Kapasitas" name="Kapasitas" style="width: 80%; border-radius: 10px;">
                </div>
                <div class="col-sm-12 mb-3">
                    <label for="Keterangan" style="color: #281362; font-weight: 600;">Keterangan <sup class="text-danger">*</sup></label>
                    <textarea class="form-control" id="Keterangan" name="Keterangan" rows="3" style="width: 90%; border-radius: 10px;"></textarea>
                </div>
            </div>

            <div class="form-group row justify-content-between text-right">
                <div class="col-sm-6">
                    <!-- <button class="btn btn-outline-primary" style="color: #281362; box-shadow: 2px 2px 5px #888888; border-radius: 20px;">Batal</button> -->
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-secondary" style="color: #ffffff;width: 100px; margin-right: 2%; border-radius: 20px;">Batal</button>
                    <button class="btn btn-success" style="color: #ffffff; margin-right: 20%; border-radius: 20px">Simpan Perubahan</button>
                </div>

            </div>
        </div>
    </div>
</main>



</body>

</html>