<title> View Teacher Detail | ARCA System</title>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h3 class="card-title">View Teacher Detail</h3>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Teacher</li>
                        <li class="breadcrumb-item active" aria-current="page">Detail of Teacher</li>
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-striped table-bordered table-hover">
								 <tr><td width="250px">Tch Staff No</td><td><?php echo $tch_staff_no; ?></td></tr>
								 <tr><td width="250px">Tch Fullname</td><td><?php echo $tch_fullname; ?></td></tr>
								 <tr><td width="250px">Tch Nric No</td><td><?php echo $tch_nric_no; ?></td></tr>
								 <tr><td width="250px">Tch Contact No</td><td><?php echo $tch_contact_no; ?></td></tr>
								 <tr><td width="250px">Tch Gender</td><td><?php echo $tch_gender; ?></td></tr>
								 <tr><td width="250px">Tch Phone No</td><td><?php echo $tch_phone_no; ?></td></tr>
								 <tr><td width="250px">Tch Email</td><td><?php echo $tch_email; ?></td></tr>
								 <tr><td width="250px">Tch Race</td><td><?php echo $tch_race; ?></td></tr>
								 <tr><td width="250px">Tch Religion</td><td><?php echo $tch_religion; ?></td></tr>
								 <tr><td width="250px">Tch Address</td><td><?php echo $tch_address; ?></td></tr>
								 <tr><td width="250px">Tch Postal Code</td><td><?php echo $tch_postal_code; ?></td></tr>
								 <tr><td width="250px">Tch City Id</td><td><?php echo $tch_city_id; ?></td></tr>
								 <tr><td width="250px">Tch State Id</td><td><?php echo $tch_state_id; ?></td></tr>
								 <tr><td width="250px">Tch Country Id</td><td><?php echo $tch_country_id; ?></td></tr>
								 <tr><td width="250px">School Id</td><td><?php echo $school_id; ?></td></tr>
								 <tr><td width="250px">Create At</td><td><?php echo $create_at; ?></td></tr>
								 <tr><td width="250px">Update At</td><td><?php echo $update_at; ?></td></tr>
							</table>
                        </div>
                        <p align="center">
                            <a href="<?php echo site_url('teacher') ?>" class="btn btn-danger"> Back
                            </a>
                        </p>
                </div>
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
<!-- sweet alert js -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>