<?php
include_once '../_db/connect_db.php';
include "info.php";
$emoney='class="active"';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login Services Thephahospital</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <?php include_once 'style.php' ?>
</head>

<body  <?php echo $skin  ; ?>>
    <!-- Page Loader -->
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
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">Login Services Thephahospital</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/thepha_logo.png" width="50" height="50" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN</div>
                    <div class="email">โรงพยาบาลเทพา</div>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <?php include_once 'mainmenu.php' ?>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">Login Services Thephahospital</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 2.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  <?php
$query3 = "SELECT m.*,s.*
FROM  message m
LEFT JOIN sys_year_contorl s on s.w_id=m.sys_id 
where m.MessageID='3' ";
$result3 = mysqli_query($conn, $query3);
$dbarr3 = mysqli_fetch_array($result3) ;
$n_web3 = $dbarr3['w_name'] ;
$v3 = $dbarr3['w_version'] ;
$status3 = $dbarr3['status'] ;
$w_copy3 = $dbarr3['w_copy'] ;
$Subject3 = $dbarr3['Subject'] ;
$Description3 = $dbarr3['Description'] ;
$dupdate3 = $dbarr3['dupdate'] ;
$newDate3 = date("d-m-Y H:i:s", strtotime($dupdate3));
?>
                  <?php echo $n_web3; ?></h2>
          </div>


   
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>ประชาสัมพันธ์ </h2>
<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
<div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <td><span class="style3">
                                              <?php if( $status3 == "1"){ echo "".$Subject3."";}  else{ echo "";} ?>
                                            </span></td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="style2">
                                              <?php if( $status3 == "1"){ echo "".$Description3."";}  else{ echo "";} ?>
                                            </span></td>
                                      </tr>
                                        <tr>
                                            <td><span class="text-success">
                                              <?php if( $status3 == "1"){ echo "ประกาศ ณ.วันที่  ".$newDate3."";}  else{ echo "";} ?>
                                            </span></td>
                                      </tr>
                                    </tbody>
                                </table>
            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">LOGIN<br>
                              <span class="style4 font-16">(สำหรับเจ้าหน้าที่ งานการเงิน)</span></h2>
<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <div class="body">
                          <form role="form" method="post" action="../e-money/check_login.php">
            <fieldset>
                            <div class="form-group"  >
                              <input class="form-control" placeholder="ชื่อผู้ใช้งานระบบ" autocomplete=off name="username2" autofocus required="required" id="username">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="รหัสผ่าน" autocomplete=off name="password2" type="password" value="" required="required" id="password">
                            </div>


                            <p>
                              <input class="btn btn-md btn-success btn-block" type="submit" value="login" name="login" >
                            </p>
                            <div class="text-center p-t-20">
                              </p>
สถิติ Login วันนี้ 
                        <?php					
$query11 = "SELECT COUNT(*) as c1  from log_in WHERE date_d ='$dd1' and login_sse<>'' and  name_web ='E-Money' ";
$result11 = mysqli_query($conn, $query11);
$dbarr11 = mysqli_fetch_array($result11) ;
$c3 = $dbarr11['c1'] ;
?>
                        <span class="style4"><?php echo $c3 ;?></span>&nbsp;ครั้ง</div>
              <!-- Change this to a button or input when using this as a form -->
              <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
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
