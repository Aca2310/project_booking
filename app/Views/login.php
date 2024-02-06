    <?php
    echo view('templet/admin/head');
    echo view('templet/admin/navbar');
    ?>
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6 order-md-1">
                <h2 class="selamat-text">Selamat Datang</h2>
                <h5 class="text-meet"> Meeting room and Driver Booking System </h5>
            </div>

            <div class="col-md-6 order-md-2">
                <form class="login-form" method="POST" action="#" onsubmit="return loginapi()">
                    <h2 class="login-text">Login</h2>
                    <div class="form-group">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>