<title><?php echo $pagename ?> | ARCA System</title>

<script src="<?= base_url(); ?>/vendor/assets/js/input_restriction.js"></script>

<link href="<?= base_url(); ?>/vendor/dist/css/style.min.css" rel="stylesheet">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
<div class="row">
    <div class="col-12 d-flex no-block align-items-center">
        <h3 class="page-title">Teacher</h3>
        <div class="ml-auto text-right">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Teacher</li>
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
                                    $id = 'id="tch_religion" class="form-control"';
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
                                     <a href="<?php echo site_url('teacher') ?>" class="btn btn-danger">Cancel</a>
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