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
                            <a href="#" class="breadcrumb-item"> Teacher</a>
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

                 <form action="<?php echo $action; ?>" method="post">
                    <div class="card-body">
						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Staff No <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_staff_no')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_staff_no" id="tch_staff_no" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Staff No" value="<?php echo $tch_staff_no; ?>" /><?php echo form_error('tch_staff_no') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Fullname <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_fullname')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_fullname" id="tch_fullname" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Fullname" value="<?php echo $tch_fullname; ?>" /><?php echo form_error('tch_fullname') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Nric No <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_nric_no')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_nric_no" id="tch_nric_no" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Nric No" value="<?php echo $tch_nric_no; ?>" /><?php echo form_error('tch_nric_no') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Contact No <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_contact_no')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_contact_no" id="tch_contact_no" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Contact No" value="<?php echo $tch_contact_no; ?>" /><?php echo form_error('tch_contact_no') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Gender <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_gender')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_gender" id="tch_gender" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Gender" value="<?php echo $tch_gender; ?>" /><?php echo form_error('tch_gender') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Phone No <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_phone_no')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_phone_no" id="tch_phone_no" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Phone No" value="<?php echo $tch_phone_no; ?>" /><?php echo form_error('tch_phone_no') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Email <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_email')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_email" id="tch_email" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Email" value="<?php echo $tch_email; ?>" /><?php echo form_error('tch_email') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Race <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_race')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_race" id="tch_race" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Race" value="<?php echo $tch_race; ?>" /><?php echo form_error('tch_race') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Tch Religion <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <?php 
                                    $id = 'id="tch_religion" class="form-control select-search"';
                                    echo form_dropdown("tch_religion", $this->db->enum_select("teacher","tch_religion"),'',$id); 
                                ?><?php echo form_error('tch_religion') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Tch Address <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_address')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_address" id="tch_address" autocomplete="off" maxlength = "200" placeholder="Please Enter Tch Address" value="<?php echo $tch_address; ?>" /><?php echo form_error('tch_address') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Tch Postal Code <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_postal_code')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_postal_code" id="tch_postal_code" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter Tch Postal Code" value="<?php echo $tch_postal_code; ?>" />
                                <?php echo (form_error('tch_postal_code')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Tch City Id <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_city_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_city_id" id="tch_city_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter Tch City Id" value="<?php echo $tch_city_id; ?>" />
                                <?php echo (form_error('tch_city_id')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Tch State Id <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_state_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_state_id" id="tch_state_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter Tch State Id" value="<?php echo $tch_state_id; ?>" />
                                <?php echo (form_error('tch_state_id')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Tch Country Id <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('tch_country_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="tch_country_id" id="tch_country_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter Tch Country Id" value="<?php echo $tch_country_id; ?>" />
                                <?php echo (form_error('tch_country_id')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">School Id <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_id" id="school_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter School Id" value="<?php echo $school_id; ?>" />
                                <?php echo (form_error('school_id')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="timestamp" class="col-sm-2 text-right control-label col-form-label">Create At <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('create_at')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="create_at" id="create_at" autocomplete="off" maxlength = "200" placeholder="Please Enter Create At" value="<?php echo $create_at; ?>" /><?php echo form_error('create_at') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="timestamp" class="col-sm-2 text-right control-label col-form-label">Update At <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('update_at')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="update_at" id="update_at" autocomplete="off" maxlength = "200" placeholder="Please Enter Update At" value="<?php echo $update_at; ?>" /><?php echo form_error('update_at') ?>
                            </div>
                        </div>


						<div class="border-top">
                            <div class="card-body">
                                <p align="center">
                                     <input type="hidden" name="tch_id" value="<?php echo $tch_id; ?>" /> 
                                     <a href="<?php echo site_url('teacher') ?>" class="btn btn-danger">Batal</a>
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