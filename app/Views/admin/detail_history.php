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
            <li>
                <a class="nav-link" id="ruangan-tab" data-toggle="pill" href="ruangan" role="tab" aria-controls="ruangan" aria-selected="false">
                    <i class="fa-solid fa-door-open" style="color: #ffffff;"></i>
                    <span class="text">Ruangan</span>
                </a>
            </li>
            <li class="active">
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
        <h2>Detail Booking </h2>
        <form class="styled-box-6">
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="PIC" style="color: #281362; font-weight: 600;">PIC</label>
                        <input type="text" class="form-control" id="pic" name="pic" style="width: 80%; border-radius: 10px;" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="Section" style="color: #281362; font-weight: 600;">Section</label>
                        <input type="text" class="form-control" id="section" name="section" style="width: 80%; border-radius: 10px;" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="Agenda" style="color: #281362; font-weight: 600;">Agenda</label>
                        <input type="text" class="form-control" id="agenda" name="agenda" style="width: 80%; border-radius: 10px;" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="Tanggal" style="color: #281362; font-weight: 600;">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal" style="width: 80%; border-radius: 10px;" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="JamMulai" style="color: #281362; font-weight: 600;">Jam Mulai</label>
                        <input type="text" class="form-control" id="JamMulai" name="JamMulai" style="width: 80%; border-radius: 10px;" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="JamSelesai" style="color: #281362; font-weight: 600;">Jam Selesai</label>
                        <input type="text" class="form-control" id="jamSelesai" name="jamSelesai" style="width: 80%; border-radius: 10px;" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="Keterangan" style="color: #281362; font-weight: 600;">Keterangan</label>
                        <textarea type="text" class="form-control" id="keterangan" name="keterangan" style="width: 80%; border-radius: 10px; height: 100px;" readonly></textarea>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="meetRoom" style="color: #281362; font-weight: 600;">Meeting Room</label>
                        <input class="form-control" id="meetRoom" name="meetRoom" style="width: 80%; border-radius: 10px;" readonly>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>



</body>

</html>