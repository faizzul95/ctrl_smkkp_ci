<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $pagename ?> | SMK Kinarut Papar</title>

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
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="<?= base_url(); ?>vendor/assets/js/app.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/demo_pages/form_select2.js"></script>
    <!-- /theme JS files -->

    <script src="<?= base_url(); ?>/vendor/<?= base_url(); ?>vendor/assets/js/input_restriction.js"></script>

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
                            <span class="breadcrumb-item active"> <?php echo $pagename ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">

            <div class="alert alert-warning alert-styled-left">
                <!-- <button type="button" class="close" data-dismiss="alert"><span>×</span></button> -->
                <span class="font-weight-semibold">Peringatan !</span> Semua bertanda dengan asterisk (<font color="red">*</font>) adalah wajib diisi.
            </div>

            <!-- Whole row as a control -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h2 class="card-title"><?php echo $pagename ?></h2>
                    <div class="header-elements">
                        <div class="list-icons">
                            <!-- <a class="list-icons-item" data-action="collapse"></a> -->
                            <a class="list-icons-item" data-action="reload"></a>
                            <!-- <a class="list-icons-item" data-action="remove"></a> -->
                        </div>
                    </div>
                </div>

                 <form action="<?php echo $action; ?>" method="post" class="form-horizontal">
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Nama Pengguna <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('user_username')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="user_username" id="user_username" autocomplete="off" maxlength = "200" placeholder="Please Enter User Username" value="<?php echo $user_username; ?>" /><?php echo form_error('user_username') ?>
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('user_email')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="user_email" id="user_email" autocomplete="off" maxlength = "200" placeholder="Please Enter User Email" value="<?php echo $user_email; ?>" /><?php echo form_error('user_email') ?>
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Katalaluan <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('user_password')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="user_password" id="user_password" autocomplete="off" maxlength = "200" placeholder="Please Enter User Password" value="<?php echo $user_password; ?>" /><?php echo form_error('user_password') ?>
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Peranan <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <!-- <select name="role_id" id="semester_status" class="form-control"> -->
                                <select name="role_id" <?php if (form_error('role_id')) { echo 'class="form-control select-search is-invalid"'; } else { echo 'class="form-control select-search"'; }  ?> >
                                    <?php
                                        $roleSelect = $this->db->get('schema_user_role')->result();
                                        echo "<option value=''> - Sila Pilih Peranan - </option>";
                                        foreach ($roleSelect as $rs){
                                            echo "<option value='$rs->role_id' ";
                                            echo $rs->role_id==$role_id?'selected':'';
                                            echo ">".strtoupper($rs->role_name)."</option>";
                                        }
                                    ?>
                                </select>
                                <!-- <input type="text" <?php if (form_error('role_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="role_id" id="role_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter Role Id" value="<?php echo $role_id; ?>" /> -->
                                <?php echo (form_error('role_id')) ?>
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Nama Sekolah <span class="text-danger">*</span></label>
                            <div class="col-sm-10">

                            <select name="school_id" data-placeholder="- Sila Pilih Sekolah -" class="form-control select-search" >
                                <?php
                                    $schoolSelect = $this->db->get('school')->result();
                                    echo "<option value=''> - Sila Pilih Sekolah - </option>";
                                    foreach ($schoolSelect as $sc){
                                        echo "<option value='$sc->school_id' ";
                                        echo $sc->school_id==$school_id?'selected':'';
                                        echo ">".strtoupper($sc->school_name)."</option>";
                                    }
                                ?>
                            </select>

                            <!-- <input type="text" <?php if (form_error('school_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_id" id="school_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter School Id" value="<?php echo $school_id; ?>" /> -->
                                <?php echo (form_error('school_id')) ?>
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">User Avatar <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="file" <?php if (form_error('user_avatar')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="user_avatar" id="user_avatar" autocomplete="off" placeholder="Please Enter User Avatar" value="<?php echo $user_avatar; ?>" /><?php echo form_error('user_avatar') ?>
                            </div>
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <p align="center">
                                     <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" /> 
                                     <a href="<?php echo site_url('user') ?>" class="btn btn-danger">Batal</a>
                                     <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
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
