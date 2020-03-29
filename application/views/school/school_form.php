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
                            <a href="#" class="breadcrumb-item"> Sekolah</a>
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
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Nama Sekolah <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_name')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_name" id="school_name" autocomplete="off" maxlength = "200" placeholder="Please Enter School Name" value="<?php echo $school_name; ?>" /><?php echo form_error('school_name') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Alamat Sekolah <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_address')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_address" id="school_address" autocomplete="off" maxlength = "200" placeholder="Please Enter School Address" value="<?php echo $school_address; ?>" /><?php echo form_error('school_address') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Poskod <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_postal_code')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_postal_code" id="school_postal_code" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter School Postal Code" value="<?php echo $school_postal_code; ?>" />
                                <?php echo (form_error('school_postal_code')) ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Negara <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                
                                <select name="school_country_id" id="country" class="form-control select-search">
								    <option value="">- Pilih Negara -</option>
								    <!-- <option value="132" selected>Malaysia</option> -->
								    <?php
									    foreach($country as $row)
										    {	
										      echo '<option value="'.$row->id.'">'.$row->name.'</option>';	
										    }
								    ?>
							   </select>
							   <?php echo form_error('school_country_id') ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Negeri <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
	                        	<select name="school_state_id" id="state" class="form-control select-search">
								    <option value="">- Pilih Negeri -</option>
								</select>
								 <?php echo (form_error('school_state_id')) ?> 
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">Bandar <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                            	<select name="school_city_id" id="city" class="form-control select-search">
								    <option value="">- Pilih Bandar -</option>
								 </select>
                                <?php echo (form_error('school_city_id')) ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Telefon <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_contact_no')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_contact_no" id="school_contact_no" autocomplete="off" maxlength = "200" placeholder="Please Enter School Contact No" value="<?php echo $school_contact_no; ?>" /><?php echo form_error('school_contact_no') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">Fax <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_fax_no')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_fax_no" id="school_fax_no" autocomplete="off" maxlength = "200" placeholder="Please Enter School Fax No" value="<?php echo $school_fax_no; ?>" /><?php echo form_error('school_fax_no') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label"> Laman Web Rasmi <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_website')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_website" id="school_website" autocomplete="off" maxlength = "200" placeholder="Please Enter School Website" value="<?php echo $school_website; ?>" /><?php echo form_error('school_website') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Jenis Sekolah <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <?php 
                                    $id = 'id="school_type" class="form-control select-search"';
                                    echo form_dropdown("school_type", $this->db->enum_select("school","school_type"),'',$id); 
                                ?><?php echo form_error('school_type') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">Tahap Pendidikan <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <?php 
                                    $id = 'id="school_level" class="form-control select-search"';
                                    echo form_dropdown("school_level", $this->db->enum_select("school","school_level"),'',$id); 
                                ?><?php echo form_error('school_level') ?>
                            </div>
                        </div>

						<div class="border-top">
                            <div class="card-body">
                                <p align="center">
                                     <input type="hidden" name="school_id" value="<?php echo $school_id; ?>" /> 
                                     <a href="<?php echo site_url('school') ?>" class="btn btn-danger">Batal</a>
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

    <script>
		$(document).ready(function(){
		 $('#country').change(function(){
		  var country_id = $('#country').val();
		  // console.log(country_id);
		  if(country_id != '')
		  {
			   $.ajax({
			    url:"<?php echo base_url(); ?>school/fetch_state",
			    method:"POST",
			    data:{country_id:country_id},
			    success:function(data)
			    {
			     $('#state').html(data);
			     $('#city').html('<option value="">- Pilih Bandar -</option>');
			    }
			   });
		  }
		  else
		  {
			   $('#state').html('<option value="">- Pilih Negeri -</option>');
			   $('#city').html('<option value="">- Pilih Bandar -</option>');
		  }
		 });

		 $('#state').change(function(){
		  var state_id = $('#state').val();
		  if(state_id != '')
		  {
			   $.ajax({
			    url:"<?php echo base_url(); ?>school/fetch_city",
			    method:"POST",
			    data:{state_id:state_id},
			    success:function(data)
			    {
			     $('#city').html(data);
			    }
			   });
		  }
		  else
		  {
		   	$('#city').html('<option value="">Select City</option>');
		  }
		 });
		 
		});
	</script>

</body>
</html>