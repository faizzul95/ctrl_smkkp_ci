<?php
error_reporting(0);
require_once 'core/harviacode.php';
require_once 'core/helper.php';
require_once 'core/process.php';
?>
         
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>C.R.U.D | SMK Kinarut Papar</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../vendor/assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="../vendor/assets/js/main/jquery.min.js"></script>
    <script src="../vendor/assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="../vendor/assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="../vendor/assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="../vendor/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="../vendor/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="../vendor/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="../vendor/assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="../vendor/assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="../vendor/assets/js/app.js"></script>

    <!-- <script src="vendor/assets/js/demo_pages/dashboard.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/lines.js"></script>    
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="vendor/assets/js/demo_charts/pages/dashboard/light/bullets.js"></script> -->
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
        <div class="navbar-brand">
            <a href="index.php" class="d-inline-block">
                <img src="../vendor/assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>

            <span class="navbar-text ml-md-3">
                <span class="badge badge-mark border-orange-300 mr-2"></span>

                <?php 
                    $dateTime = new DateTime('now', new DateTimeZone('asia/kuala_lumpur')); 
                    //echo $dateTime->format("d/m/y  H:i A"); 

                    if ($dateTime->format("A") == "AM") {
                        echo "Selamat Pagi, Mohd Fahmy Izwan Zulkhafri !";
                    }else{
                        echo "Selamat Petang, Mohd Fahmy Izwan Zulkhafri !";
                    }
                ?>

                
            </span>

            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    <a href="#" data-toggle="modal" data-target="#logout" class="navbar-nav-link">
                        Log Keluar &nbsp;
                        <i class="icon-switch2"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">SMK Kinarut Papar</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="sidebar-user-material-body">
                        <div class="card-body text-center">
                            <a href="#">
                                <img src="vendor/assets/images/demo/users/face6.jpg" class="img-fluid rounded-circle shadow-1 mb-1" width="120" height="120" alt="">
                            </a>
                            <h6 class="mb-0 text-white text-shadow-dark">Mohd Fahmy Izwan Zulkhafri</h6>
                            <span class="font-size-sm text-white text-shadow-dark">Super Administrator</span>
                        </div>
                                                    
                        <div class="sidebar-user-material-footer">
                            <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>Akaun saya</span></a>
                        </div>
                    </div>

                    <div class="collapse" id="user-nav">
                        <ul class="nav nav-sidebar">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-user-plus"></i>
                                    <span>Profil Saya</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-cog5"></i>
                                    <span>Account settings</span>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a href="#" data-toggle="modal" data-target="#logout" class="nav-link">
                                    <i class="icon-switch2"></i>
                                    <span>Log Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                        <li class="nav-item">
                            <a href="../dashboard" class="nav-link">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <!-- /main -->

                        <!-- student -->
                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">General</div> <i class="icon-menu" title="Main"></i></li>

                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">
                                <i class="icon-home4"></i>
                                <span>
                                    C.R.U.D Generator
                                </span>
                            </a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="modal" data-target="#logout" class="nav-link"><i class="icon-switch"></i> <span>Log Keluar</span></a></li>
                        <!-- student -->

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->
            
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <!-- <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-bars-alt text-pink-300"></i>
                                <span>Student Data</span>
                            </a>
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-calculator text-pink-300"></i>
                                <span>Invoices</span>
                            </a>
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-calendar5 text-pink-300"></i>
                                <span>Schedule</span>
                            </a>
                        </div>
                    </div>
                </div> -->

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Dashboard</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Progress bars</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" style="">

                    <form action="index.php" method="POST">
                    <div class="form-group">
                        <label>Select Table - <a class="btn btn-info btn-sm" href="<?php echo $_SERVER['PHP_SELF'] ?>">Refresh</a></label>
                        <select id="table_name" name="table_name" class="form-control" onchange="setname()">
                            <option value="">Please Select</option>
                            <?php
                            $table_list = $hc->table_list();
                            $table_list_selected = isset($_POST['table_name']) ? $_POST['table_name'] : '';
                            foreach ($table_list as $table) {
                                ?>
                                <option value="<?php echo $table['table_name'] ?>" <?php echo $table_list_selected == $table['table_name'] ? 'selected="selected"' : ''; ?>><?php echo $table['table_name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="radio" style="margin-bottom: 0px; margin-top: 0px">
                                    <label>
                                        <input type="radio" name="jenis_tabel" value="datatables" checked="checked">
                                        Serverside Datatables
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <?php $export_excel = isset($_POST['export_excel']) ? $_POST['export_excel'] : ''; ?>
                            <label>
                                <input type="checkbox" name="export_excel" value="1" <?php echo $export_excel == '1' ? 'checked' : '' ?>>
                                Export Excel
                            </label>
                        </div>
                    </div>    

                    <div class="form-group">
                        <div class="checkbox">
                            <?php $export_word = isset($_POST['export_word']) ? $_POST['export_word'] : ''; ?>
                            <label>
                                <input type="checkbox" name="export_word" value="1" <?php echo $export_word == '1' ? 'checked' : '' ?>>
                                Export Word
                            </label>
                        </div>
                    </div>    

                    <!--                    <div class="form-group">
                                            <div class="checkbox  <?php // echo file_exists('../application/third_party/mpdf/mpdf.php') ? '' : 'disabled';   ?>">
                    <?php // $export_pdf = isset($_POST['export_pdf']) ? $_POST['export_pdf'] : ''; ?>
                                                <label>
                                                    <input type="checkbox" name="export_pdf" value="1" <?php // echo $export_pdf == '1' ? 'checked' : ''   ?>
                    <?php // echo file_exists('../application/third_party/mpdf/mpdf.php') ? '' : 'disabled'; ?>>
                                                    Export PDF
                                                </label>
                    <?php // echo file_exists('../application/third_party/mpdf/mpdf.php') ? '' : '<small class="text-danger">mpdf required, download <a href="http://harviacode.com">here</a></small>'; ?>
                                            </div>
                                        </div>-->


                    <div class="form-group">
                        <label>Custom Controller Name</label>
                        <input type="text" id="controller" name="controller" value="<?php echo isset($_POST['controller']) ? $_POST['controller'] : '' ?>" class="form-control" placeholder="Controller Name" />
                    </div>
                    <div class="form-group">
                        <label>Custom Model Name</label>
                        <input type="text" id="model" name="model" value="<?php echo isset($_POST['model']) ? $_POST['model'] : '' ?>" class="form-control" placeholder="Controller Name" />
                    </div>
                    <input type="submit" value="Generate" name="generate" class="btn btn-primary" onclick="javascript: return confirm('This will overwrite the existing files. Continue ?')" />
                    <input type="submit" value="Generate All" name="generateall" class="btn btn-danger" onclick="javascript: return confirm('WARNING !! This will generate code for ALL TABLE and overwrite the existing files\
                    \nPlease double check before continue. Continue ?')" />
                    </form>
                    <br>

                    <?php
                        foreach ($hasil as $h) {
                            echo '<p>' . $h . '</p>';
                        }
                    ?>
                    </div>
                </div>
            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text ml-lg-auto">
                        Copyright &copy; 2020. Sekolah Menengah Kebangsaan Kinarut Papar
                    </span>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>
</html>

<script type="text/javascript">
    function capitalize(s) {
        return s && s[0].toUpperCase() + s.slice(1);
    }

    function setname() {
        var table_name = document.getElementById('table_name').value.toLowerCase();
        if (table_name != '') {
            document.getElementById('controller').value = capitalize(table_name);
            document.getElementById('model').value = capitalize(table_name) + '_model';
        } else {
            document.getElementById('controller').value = '';
            document.getElementById('model').value = '';
        }
    }
</script>

 <!-- Modal Logout -->
  <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered"><!-- modal-dialog-centered -->
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title"><b>Anda pasti ?</b></h4>
        </div>
        <div class="modal-body">
          <h6>Sila tekan "Log Keluar" di bawah jika anda sudah bersedia untuk menamatkan sesi semasa anda.</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <a href="auth/logout" type="button" class="btn btn-info">Log Keluar</a>
        </div>
      </div>
    </div>
  </div>
</div>