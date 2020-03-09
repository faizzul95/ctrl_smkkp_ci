<title><?php echo $pagename ?> | ARCA System</title>

<script src="<?= base_url(); ?>/vendor/assets/js/input_restriction.js"></script>

<link href="<?= base_url(); ?>/vendor/dist/css/style.min.css" rel="stylesheet">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
<div class="row">
    <div class="col-12 d-flex no-block align-items-center">
        <h3 class="page-title">School</h3>
        <div class="ml-auto text-right">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List School</li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $pagename ?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<div class="alert alert-danger" role="alert">
  <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
  <i class="mdi mdi-alert"></i> <strong>Reminder !</strong> All marked with asterisk (<font color="red">*</font>) are required to fill. 
</div>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?php echo $action; ?>" method="post" class="form-horizontal">
                    <div class="card-body">
                        <h3 class="card-title"><u><?php echo $pagename ?></u></h3>
						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">School Name <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_name')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_name" id="school_name" autocomplete="off" maxlength = "200" placeholder="Please Enter School Name" value="<?php echo $school_name; ?>" /><?php echo form_error('school_name') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="varchar" class="col-sm-2 text-right control-label col-form-label">School Address <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_address')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_address" id="school_address" autocomplete="off" maxlength = "200" placeholder="Please Enter School Address" value="<?php echo $school_address; ?>" /><?php echo form_error('school_address') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">School Postal Code <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_postal_code')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_postal_code" id="school_postal_code" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter School Postal Code" value="<?php echo $school_postal_code; ?>" />
                                <?php echo (form_error('school_postal_code')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">School City Id <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_city_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_city_id" id="school_city_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter School City Id" value="<?php echo $school_city_id; ?>" />
                                <?php echo (form_error('school_city_id')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">School State Id <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_state_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_state_id" id="school_state_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter School State Id" value="<?php echo $school_state_id; ?>" />
                                <?php echo (form_error('school_state_id')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="int" class="col-sm-2 text-right control-label col-form-label">School Country Id <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" <?php if (form_error('school_country_id')) { echo 'class="form-control is-invalid"'; } else { echo 'class="form-control"'; }  ?> name="school_country_id" id="school_country_id" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "11" autocomplete="off" placeholder="Please Enter School Country Id" value="<?php echo $school_country_id; ?>" />
                                <?php echo (form_error('school_country_id')) ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">School Type <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <?php 
                                    $id = 'id="school_type" class="form-control"';
                                    echo form_dropdown("school_type", $this->db->enum_select("school","school_type"),'',$id); 
                                ?><?php echo form_error('school_type') ?>
                            </div>
                        </div>

						    
                        <div class="form-group row">
                            <label for="enum" class="col-sm-2 text-right control-label col-form-label">School Level <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <?php 
                                    $id = 'id="school_level" class="form-control"';
                                    echo form_dropdown("school_level", $this->db->enum_select("school","school_level"),'',$id); 
                                ?><?php echo form_error('school_level') ?>
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
                                     <input type="hidden" name="school_id" value="<?php echo $school_id; ?>" /> 
                                     <a href="<?php echo site_url('school') ?>" class="btn btn-danger">Cancel</a>
                                     <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url(); ?>/vendor/assets/libs/jquery/dist/jquery.min.js"></script>