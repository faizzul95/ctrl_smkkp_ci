<title> View Classroom Detail | ARCA System</title>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h3 class="card-title">View Classroom Detail</h3>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Classroom</li>
                        <li class="breadcrumb-item active" aria-current="page">Detail of Classroom</li>
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
								 <tr><td width="250px">Class Name</td><td><?php echo $class_name; ?></td></tr>
								 <tr><td width="250px">Class Type</td><td><?php echo $class_type; ?></td></tr>
								 <tr><td width="250px">Class Status</td><td><?php echo $class_status; ?></td></tr>
								 <tr><td width="250px">School Id</td><td><?php echo $school_id; ?></td></tr>
							</table>
                        </div>
                        <p align="center">
                            <a href="<?php echo site_url('classroom') ?>" class="btn btn-danger"> Back
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