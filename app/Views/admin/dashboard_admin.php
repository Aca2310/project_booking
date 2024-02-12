<<<<<<< HEAD
<?= $this->extend('admin/templet/layout'); ?>
<?= $this->section('content'); ?>
<main class="main-content">
  <ul class="box-info">
    <li>
      <i class="fa-solid fa-door-open" style="color: #ffffff;"></i>
      <span class="text">
        <h3 style="text-align: center;">0</h3>
        <p style="text-align: center;">Total Booking Ruangan</p>
      </span>
    </li>
    <li style="background: #BEBFC0;">
      <i class="fa-solid fa-car"></i>
      <span class="text">
        <h3 style="text-align: center;">0</h3>
        <p style="text-align: center;">Total Booking Driver</p>
      </span>
    </li>
    <li style="background: #F06823;">
      <i class="fa-regular fa-file" style="color: #ffffff;"></i>
      <span class="text">
        <h3 style="text-align: center;">0</h3>
        <p style="text-align: center;">Total Aktivitas Booking</p>
      </span>
    </li>
  </ul>
  <div class="halo" style="margin-top: 3%;">
    <h2> Booking Baru Baru Ini </h2>
  </div>
  <form class="styled-box-6">
    <div class="table-responsive">
      <table role="table" aria-busy="false" aria-colcount="6" class="table b-table table-striped table-hover table-borderless border b-table-fixed b-table-stacked-sm custom-table" id="__BVID__56">
        <thead class="thead-blue">
          <thead class="thead-blue">
            <tr>
              <th style="text-align: center;">No.</th>
              <th style="text-align: center;">Tanggal</th>
              <th style="text-align: center;">Jenis</th>
              <th style="text-align: center;">Kode Booking</th>
              <th style="text-align: center;">PIC</th>
              <th style="text-align: center;">Aksi</th>
            </tr>
          </thead>

        </thead>
        <tbody>
          <tr>
            <td style="text-align: center;">1</td>
            <td class="small-text" style="text-align: center;">15 Januari 2024</td>
            <td class="small-text" style="text-align: center;">Meeting Room 2</td>
            <td class="small-text" style="text-align: center;">09.00</td>
            <td class="small-text" style="text-align: center;">Husna Afiqah Y</td>
            <td class="small-text" style="text-align: center;">
              <i class="fa-solid fa-eye m-0" onclick="window.location.href='detail_booking_request'"></i>
            </td>

          </tr>
        </tbody>
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
<?= $this->endSection(); ?>
=======
<?php
echo view('admin/templet/header');
echo view('admin/templet/navbar');
?>
<!-- SIDEBAR -->
<section id="sidebar">
    <div class="profile-tab-nav border-right">
        <ul class="side-menu top">
            <li class="active">
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
                <ul class="submenu">
                    <li><a class="nav-link" href="booking_room">Booking Room</a>
                    </li>
                    <li><a class="nav-link" href="booking_driver">Booking Driver</a></li>
                </ul>
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
    <ul class="box-info">
        <li>
            <i class="fa-solid fa-door-open" style="color: #ffffff;"></i>
            <span class="text">
                <h3 style="text-align: center;">0</h3>
                <p style="text-align: center;">Total Booking Ruangan</p>
            </span>
        </li>
        <li style="background: #BEBFC0;">
            <i class="fa-solid fa-car"></i>
            <span class="text">
                <h3 style="text-align: center;">0</h3>
                <p style="text-align: center;">Total Booking Driver</p>
            </span>
        </li>
        <li style="background: #F06823;">
            <i class="fa-regular fa-file" style="color: #ffffff;"></i>
            <span class="text">
                <h3 style="text-align: center;">0</h3>
                <p style="text-align: center;">Total Aktivitas Booking</p>
            </span>
        </li>
    </ul>
    <div class="halo" style="margin-top: 3%;">
        <h2> Booking Baru Baru Ini </h2>
    </div>
    <form class="styled-box-6">
        <div class="table-responsive">
            <table role="table" aria-busy="false" aria-colcount="6" class="table b-table table-striped table-hover table-borderless border b-table-fixed b-table-stacked-sm custom-table" id="__BVID__56">
                <thead class="thead-blue">
                    <thead class="thead-blue">
                        <tr>
                            <th style="text-align: center;">No.</th>
                            <th style="text-align: center;">Tanggal</th>
                            <th style="text-align: center;">Jenis</th>
                            <th style="text-align: center;">Kode Booking</th>
                            <th style="text-align: center;">PIC</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>

                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td class="small-text" style="text-align: center;">15 Januari 2024</td>
                        <td class="small-text" style="text-align: center;">Meeting Room 2</td>
                        <td class="small-text" style="text-align: center;">09.00</td>
                        <td class="small-text" style="text-align: center;">Husna Afiqah Y</td>
                        <td class="small-text" style="text-align: center;">
                            <button onclick="window.location.href='halaman_detail_booking'" class="detail">
                                Detail
                            </button>
                        </td>

                    </tr>
                </tbody>
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
>>>>>>> 388111ae696d4e49d3781e6d42e3c28534c153a1
