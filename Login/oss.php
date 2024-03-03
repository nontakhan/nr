<?php
include_once '../_db/connect_db.php';
$oss='class="active"';
?>

<!DOCTYPE html>
<html>

<head>
    <?php include_once 'style.php' ?>
</head>

<body  <?= $skin; ?>>
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">NR Backoffice | เครือนำรุ่ง</a>
            </div>
        </div>
    </nav>
    <section>
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/thepha_logo.png" width="50" height="50" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN</div>
                    <div class="email">เครือนำรุ่ง</div>
                    
                </div>
            </div>
            <?php include_once 'mainmenu.php' ?>
            <div class="legal">
                <div class="copyright">
                    &copy; 2024 <a href="javascript:void(0);">Numrung group</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.1
                </div>
            </div>
        </aside>
    </section>

<section class="content">
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="header">
                    <h2>ประชาสัมพันธ์ </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr><td><span class="style3">...</span></td></tr>
                            </thead>
                            <tbody>
                                <tr><td><span class="style2">...</span></td></tr>
                                <tr><td><span class="text-success">...</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="header">
                    <h2 align="center">LOGIN<br><span class="style4 font-16">(สำหรับเจ้าหน้าที่เครือนำรุ่ง)</span></h2>
                </div>
                <div class="body">
                    <form role="form" method="post" action="../OSS/check_login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="ชื่อผู้ใช้งานระบบ" autocomplete=off name="username" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="รหัสผ่านเลขบัตรประชาชน" autocomplete=off name="password" type="password" required>
                            </div>
                            <p><input class="btn btn-md btn-success btn-block" type="submit" value="login" name="login"></p>
                            <div class="text-center p-t-20">
                                <p><a class="btn btn-md btn-info btn-block"  href="javascript:popup('../D-Time/register2.php','',1000,650)"> ลงทะเบียนขอใช้งานระบบ <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> <br></a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
  </div>
</div>
</section>

<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="plugins/flot-charts/jquery.flot.js"></script>
<script src="plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/index.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>
</body>

</html>
