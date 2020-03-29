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
                            <a href="#" class="breadcrumb-item">Pengguna</a>
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
                            <a class="list-icons-item" data-action="collapse"></a>
                            <!-- <a class="list-icons-item" data-action="reload"></a> -->
                            <!-- <a class="list-icons-item" data-action="remove"></a> -->
                        </div>
                    </div>
                </div>

                 <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Nama Pengguna <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('user_fullname')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="user_fullname" id="user_fullname" autocomplete="off" maxlength = "200" placeholder="Sila masukkan nama penuh pengguna" value="<?php echo $user_fullname; ?>" /><?php echo form_error('user_fullname') ?>
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('user_email')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="user_email" id="user_email" autocomplete="off" maxlength = "200" placeholder="Sila masukkan alamat e-mail pengguna" value="<?php echo $user_email; ?>" /><?php echo form_error('user_email') ?>
                            </div>
                        </div>
                            
                        <!-- Hide from view, Password already auto generate -->
                        <div class="form-group row" style="display : none">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Katalaluan </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control is-valid" name="user_password" id="user_password" autocomplete="off" maxlength = "200" placeholder="Sila masukkan katalaluan pengguna" value="<?php echo $user_password; ?>" readonly />
                                <?php echo form_error('user_password') ?>
                            </div>
                        </div>
                        <!-- Hide from view, Password already auto generate -->
                            
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Peranan <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select id="selectPeranan" name="role_id" <?php if (form_error('role_id')) { echo 'class="form-control select-search is-invalid"'; } else { echo 'class="form-control select-search"'; }  ?> >
                                    <?php
                                    	$params = array('role_id !='=>5);
   										$roleSelect = $this->db->get_where('schema_user_role',$params)->result();
                                        // $roleSelect = $this->db->get('schema_user_role')->result();
                                        echo "<option value=''> - Sila Pilih Peranan - </option>";
                                        foreach ($roleSelect as $rs){
                                            echo "<option value='$rs->role_id' ";
                                            echo $rs->role_id==$role_id?'selected':'';
                                            echo ">".strtoupper($rs->role_name)."</option>";
                                        }
                                    ?>
                                </select>
                                <?php echo (form_error('role_id')) ?>
                            </div>
                        </div>
                            
                        <div id="sekolahselect" class="form-group row" <?php echo form_error('school_id') || !empty($school_id) ? '':'style="display : none" '?>>
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
                            <?php echo (form_error('school_id')) ?>
                            </div>
                        </div>

                       <?php if (!empty($user_status)) { ?>
                       <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Status <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <?php 
                                if (form_error('user_status')) {
                                    $classerror = 'form-control select-search is-invalid';
                                }else{
                                    $classerror = 'form-control select-search';
                                }
                                echo form_dropdown('user_status',array('active'=>'ACTIVE','inactive'=>'INACTIVE'),$user_status,array('class'=>$classerror))?>
                                <?php echo form_error('user_status') ?>
                            </div>
                        </div>
                        <?php  } ?>

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


<script>
$(document).ready(function(){

    $('#selectPeranan').on('change',function(){
        var value = $(this).val();
        if(value != "" && value != "1"){
            $( "#sekolahselect" ).fadeIn( "fast", function() {});
            // $( "#sekolahselect" ).show();

        }else {
            $( "#sekolahselect" ).fadeOut( "fast", function() {});
            // $( "#sekolahselects" ).hide();
        }

    });

});
</script>