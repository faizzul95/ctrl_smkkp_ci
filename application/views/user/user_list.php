<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Senarai User | SMK Kinarut Papar</title>
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
                            <a href="#" class="breadcrumb-item">User</a>
                            <span class="breadcrumb-item active"> Senarai User</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">

            <!-- Whole row as a control -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h2 class="card-title">SENARAI USER</h2>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <!-- <a class="list-icons-item" data-action="remove"></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="header-elements">
                        <?php echo anchor(site_url('user/create'), '<span class="icon-user-plus"></span> Daftar User', 'class="btn btn-info ml-3"'); ?>
                    </div>

                    <table class="table table-bordered table-striped datatable-responsive-row-control">
                        <thead bgcolor="#2E86C1">
                            <tr>
                                <th style="color: white">ID Pengguna</th>
                                <th style="color: white">Email</th>
                                <th style="color: white">Pengesahan Email</th>
                                <th style="color: white">Kata laluan</th>
                                <!-- <th style="color: white">User Remember Token</th> -->
                                <th style="color: white">Role Name</th>
                                <th style="color: white">School Id</th>
                                <th style="color: white">User Avatar</th>
                                <th style="color: white" width="250px">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($userDetails as $ud): ?>
                                <td><center><?php echo $ud->user_username; ?></center>
                                <td><center><?php echo $ud->user_email; ?></center>
                                <td><center><?php echo $ud->email_verified_at; ?></center>
                                <td><center><?php echo $ud->user_password; ?></center>
                                <!-- <td><center><?php echo $ud->user_remember_token; ?></center> -->
                                <td><center><?php echo $ud->role_id; ?></center>
                                <td><center><?php echo $ud->school_id; ?></center>
                                <td><center><?php echo $ud->user_avatar; ?></center>
                                <td class="text-center">
                                    <a href="user/read/<?php echo $ud->user_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Lihat Informasi">
                                        <span class="icon-eye" style="color: green"></span>
                                    </a> 
                                    &nbsp;
                                    |
                                    &nbsp;
                                    <a href="user/update/<?php echo $ud->user_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Kemaskini Informasi">
                                        <span class="icon-pencil7"></span>
                                    </a> 
                                    &nbsp;
                                    |
                                    &nbsp;
                                    <a href="user/delete/<?php echo $ud->user_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Padam Informasi">
                                        <span class="icon-bin" style="color: red"></span>
                                    </a>
                                </td>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
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
