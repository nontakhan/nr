<?php
include "../_db/connect_db.php";
$home='class="active"';
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
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/logo.png" width="50" height="50" alt="User" />
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
<?php	
			
$query1 = "SELECT count(*) c_all, (select count(*) from user where status = 'Y' and employment_type_id = '4') c_month, (select count(*) from user where status = 'Y' and employment_type_id = '3') c_day, (select count(*) from user where status = 'Y' and employment_type_id in ('1','2','5')) c_other from user where status = 'Y' ";
include_once "../_db/connect_db.php";
$result1 = mysqli_query($conn, $query1);
$dbarr1 = mysqli_fetch_array($result1) ;
$c_all = $dbarr1['c_all'] ;
$c_month = $dbarr1['c_month'] ;
$c_day = $dbarr1['c_day'] ;
$c_other = $dbarr1['c_other'] ;

?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-gray hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text">จำนวนพนักงานทั้งหมด</div>
                            <div class="number count-to" data-from="0" data-to="<?= $c_all; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">จำนวนพนักงานรายเดือน</div>
                            <div class="number count-to" data-from="0" data-to="<?= $c_month; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_2</i>
                        </div>
                        <div class="content">
                            <div class="text">จำนวนพนักงานรายวัน</div>
                            <div class="number count-to" data-from="0" data-to="<?= $c_day; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_4</i>
                        </div>
                        <div class="content">
                            <div class="text">จำนวนพนักงานอื่นๆ</div>
                            <div class="number count-to" data-from="0" data-to="<?= $c_other; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <?php
                $sql2 = "SELECT * from company";
                $res2 = mysqli_query($conn, $sql2);
                while ($row2 = mysqli_fetch_array($res2)) { $c_id = $row2['company_id'] ?>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                      <div class="card">
                        <div class="body bg-<?= $row2['company_color'] ?>">
                          <div class="h5"><?= $row2['company_name'] ?></div>
                          <?php
                          $sql3 = "SELECT count(*) all_branch from branch where company_id = $c_id ";
                          $res3 = mysqli_query($conn, $sql3);
                          $data3 = mysqli_fetch_array($res3);
                          ?>
                          <div class="h6">จำนวนสาขาทั้งหมด : <?= $data3['all_branch'] ?> สาขา</div>
                          <hr>
                          <?php
                          $sql3 = "SELECT count(*) c, p.position_name
                          from user u
                          left join position p on p.position_id = u.position_id
                          where u.company_id = $c_id
                          group by u.position_id";
                          $res3 = mysqli_query($conn, $sql3);
                          while ($row3 = mysqli_fetch_array($res3)) { ?>
                            <p><?= $row3['position_name']; ?><span class="pull-right"><?= $row3['c']; ?></span></p>
                          <?php
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                <?php
                }
                ?>
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
