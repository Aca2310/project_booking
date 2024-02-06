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
    <h2 style="margin-left: 35px;">List Driver</h2>

    <div class="haloa" style="display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center;">

            <div class="search-container" style="margin-left: 10px;">
                <i class="fas fa-search"></i>
                <input type="text" id="search" placeholder="Ketik kata kunci..." style="height: 10%; font-size: small;">
            </div>
        </div>
        <div class="border-right" style="margin-right: 10%;">
            <a href="tambah_driver" class="btn-tambah-akun">
                <i class="fas fa-plus"></i> Add Driver
            </a>
        </div>
    </div>

    <form class="styled-box-6">
        <div class="table-responsive">
            <table role="table" aria-busy="false" aria-colcount="6" class="table b-table table-striped table-hover table-borderless border b-table-fixed b-table-stacked-sm custom-table" id="__BVID__56">
                <thead class="thead-blue">
                    <tr>
                        <th style="text-align: center;">No.</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Telp</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($driver as $D) : ?>
                        <tr>
                            <td style="text-align: center;"><?= $counter++; ?></td>
                            <td class="small-text"><?= $D['nama']; ?></td>
                            <td class="small-text"><?= $D['telp']; ?></td>
                            <td class="small-text">
                                <div class="icon-container" style="margin-left: 35%;">
                                    <i class="fa-solid fa-pen-to-square" onclick="window.location.href='edit_ruangan'"></i>
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>
        <div class="pagination-container">
            <div class="" id="">
                <ul class="pagination">
                    <li class="sebelumnya" id=""><a href="#" aria-controls="" data-dt-idx="0" tabindex="0">Sebelumnya</a></li>
                    <li class="angka"><a href="#" aria-controls="" data-dt-idx="1" tabindex="0" style="color: #fff;">1</a></li>
                    <li class="selanjutnya" id=""><a href="#" aria-controls="" data-dt-idx="8" tabindex="0">Selanjutnya</a></li>
                </ul>
            </div>
        </div>
        </div>
    </form>
    </div>
</main>

</body>

</html>