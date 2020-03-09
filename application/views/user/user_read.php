<title> View User Detail | ARCA System</title>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h3 class="card-title">View User Detail</h3>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
                        <li class="breadcrumb-item active" aria-current="page">Detail of User</li>
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
								 <tr><td width="250px">User Username</td><td><?php echo $user_username; ?></td></tr>
								 <tr><td width="250px">User Email</td><td><?php echo $user_email; ?></td></tr>
								 <tr><td width="250px">Email Verified At</td><td><?php echo $email_verified_at; ?></td></tr>
								 <tr><td width="250px">User Password</td><td><?php echo $user_password; ?></td></tr>
								 <tr><td width="250px">User Remember Token</td><td><?php echo $user_remember_token; ?></td></tr>
								 <tr><td width="250px">Role Id</td><td><?php echo $role_id; ?></td></tr>
								 <tr><td width="250px">School Id</td><td><?php echo $school_id; ?></td></tr>
								 <tr><td width="250px">User Avatar</td><td><?php echo $user_avatar; ?></td></tr>
								 <tr><td width="250px">Created At</td><td><?php echo $created_at; ?></td></tr>
								 <tr><td width="250px">Updated At</td><td><?php echo $updated_at; ?></td></tr>
							</table>
                        </div>
                        <p align="center">
                            <a href="<?php echo site_url('user') ?>" class="btn btn-danger"> Back
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