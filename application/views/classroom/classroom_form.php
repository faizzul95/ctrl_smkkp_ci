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
                            <a href="#" class="breadcrumb-item"> Classroom</a>
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
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Nama Kelas <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('class_name')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="class_name" id="class_name"  oninput="maxLengthCheck(this)" maxlength = "30" autocomplete="off" placeholder="Sila masukkan nama kelas" value="<?php echo $class_name; ?>" />
                                <?php echo (form_error('class_name')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Jenis Kelas <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <?php 
                                    $id = 'id="class_type" class="form-control select-search"';
                                    echo form_dropdown("class_type", $this->db->enum_select("classroom","class_type"),'',$id); 
                                ?><?php echo form_error('class_type') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Status <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <?php 
                                    $id = 'id="class_status" class="form-control select-search"';
                                    echo form_dropdown("class_status", $this->db->enum_select("classroom","class_status"),'',$id); 
                                ?>
                                <?php echo form_error('class_status') ?>

	                            <!-- <select name="school_id" data-placeholder="- Sila Pilih Sekolah -" class="form-control select-search" >
	                                <?php
	                                    $schoolSelect = $this->db->get('school')->result();
	                                    echo "<option value=''> - Sila Pilih Sekolah - </option>";
	                                    foreach ($schoolSelect as $sc){
	                                        echo "<option value='$sc->school_id' ";
	                                        echo $sc->school_id==$school_id?'selected':'';
	                                        echo ">".strtoupper($sc->school_name)."</option>";
	                                    }
	                                ?>
	                            </select> -->
	                            
                            </div>
                        </div>


						<div class="border-top">
                            <div class="card-body">
                                <p align="center">
                                     <input type="hidden" name="class_id" value="<?php echo $class_id; ?>" /> 
                                     <a href="<?php echo site_url('classroom') ?>" class="btn btn-danger">Batal</a>
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