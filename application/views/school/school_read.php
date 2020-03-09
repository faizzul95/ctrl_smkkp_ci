<title> View School Detail | ARCA System</title>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h3 class="card-title">View School Detail</h3>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">School</li>
                        <li class="breadcrumb-item active" aria-current="page">Detail of School</li>
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
								 <tr><td width="250px">School Name</td><td><?php echo $school_name; ?></td></tr>
								 <tr><td width="250px">School Address</td><td><?php echo $school_address; ?></td></tr>
								 <tr><td width="250px">School Postal Code</td><td><?php echo $school_postal_code; ?></td></tr>
								 <tr><td width="250px">School City Id</td><td><?php echo $school_city_id; ?></td></tr>
								 <tr><td width="250px">School State Id</td><td><?php echo $school_state_id; ?></td></tr>
								 <tr><td width="250px">School Country Id</td><td><?php echo $school_country_id; ?></td></tr>
								 <tr><td width="250px">School Type</td><td><?php echo $school_type; ?></td></tr>
								 <tr><td width="250px">School Level</td><td><?php echo $school_level; ?></td></tr>
								 <tr><td width="250px">Create At</td><td><?php echo $create_at; ?></td></tr>
								 <tr><td width="250px">Update At</td><td><?php echo $update_at; ?></td></tr>
							</table>
                        </div>
                        <p align="center">
                            <a href="<?php echo site_url('school') ?>" class="btn btn-danger"> Back
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