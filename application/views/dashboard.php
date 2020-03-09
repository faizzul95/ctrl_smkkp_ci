<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Halaman Utama | SMK Kinarut Papar</title>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>vendor/assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>vendor/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>vendor/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>vendor/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>vendor/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>vendor/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?= base_url(); ?>vendor/assets/js/main/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="<?= base_url(); ?>vendor/assets/js/app.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/demo_pages/datatables_responsive.js"></script>
    <!-- /theme JS files -->
</head>

<body>

    <!-- Main navbar -->
    <?php $this->load->view('header'); ?>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
       <?php $this->load->view('sidebar'); ?>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="<?= base_url(); ?>dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">

            <!-- Whole row as a control -->
            <div class="card">
                <!-- <div class="card-header header-elements-inline">
                    <h2 class="card-title">SENARAI USER</h2>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div> -->






                
            </div>
            <!-- /whole row as a control -->

            </div>
            <!-- /content area -->

            <!-- Footer -->
            <?php $this->load->view('footer');?>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>
</html>
