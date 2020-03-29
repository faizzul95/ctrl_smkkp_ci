<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Senarai Pengguna | SMK Kinarut Papar</title>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>vendor/assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>vendor/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="<?= base_url(); ?>vendor/assets/css/core.css" rel="stylesheet" type="text/css"> -->
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
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="<?= base_url(); ?>vendor/assets/js/app.js"></script>
    <script src="<?= base_url(); ?>vendor/assets/js/demo_pages/datatables_responsive.js"></script>


    <script type="text/javascript" src="<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>

	<script type="text/javascript" src="<?= base_url(); ?>vendor/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/assets/js/demo_pages/datatables_extension_buttons_html5.js"></script>
    <!-- /theme JS files -->
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
                            <span class="breadcrumb-item active"> Senarai Pengguna</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">

                <!-- Whole row as a control -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h2 class="card-title">SENARAI PENGGUNA</h2>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <!-- <a class="list-icons-item" data-action="remove"></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="header-elements">
                        <?php echo anchor(site_url('user/create'), '<span class="icon-user-plus"></span> Daftar Pengguna', 'class="btn btn-info ml-3"'); ?>
                    </div>

                    <table class="table table-bordered table-striped datatable-button-html5-columns">

							<thead bgcolor="#2E86C1">
	                            <tr>
	                            	<th style="color: white">No.</th>
	                                <th style="color: white">Nama</th>
	                                <th style="color: white">Email</th>
	                                <th style="color: white">Nama Sekolah</th>
	                                <th style="color: white">Peranan</th>
	                                <th style="color: white">Status</th>
	                                <th style="color: white" width="150px">Tindakan</th>
	                            </tr>
	                        </thead>

							<tbody>
							<?php $i=1; foreach ($userDetails as $ud): ?>
								<tr>
									<td width="5px" class="text-center"><?= $i; ?></td>
									<td><?= $ud->user_fullname; ?></td>
									<td><?= $ud->user_email; ?></td>
									<td>
										<?php
                                            
                                            $sID = $ud->school_id;

                                            if (!empty($sID)) {
                                            	$query = $this->db->query("SELECT * FROM `school` WHERE `school_id` = '$sID'");
	                                            $row  = $query->row_array();
	                                            $sName = $row['school_name'];

	                                            echo $sName;
                                            }else{
                                            	echo "";
                                            }
                                           
                                        ?>
									</td>
									<td>
										<?php
                                            
                                            $RoleID = $ud->role_id;

                                            $query = $this->db->query("SELECT * FROM `schema_user_role` WHERE `role_id` = '$RoleID'");
                                            $row  = $query->row_array();
                                            $RoleName = $row['role_name'];

                                            echo $RoleName;
                                        ?>
									</td>
									<td>
										<!-- <center> -->
											<?php if ($ud->user_status == "active") { ?>
												<span class="badge badge-success"><?= $ud->user_status; ?></span>
											<?php } else if ($ud->user_status == "inactive") { ?>
												<span class="badge badge-warning"><?= $ud->user_status; ?></span>
											<?php } else if ($ud->user_status == "block") { ?>
												<span class="badge badge-danger"><?= $ud->user_status; ?></span>
											<?php } ?>
										<!-- </center> -->
									</td>
									<td class="text-center" width="150px">
										 	<!-- <a href="user/read/<?php echo $ud->user_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Lihat Informasi">
		                                        <span class="icon-eye" style="color: green"></span>
		                                    </a> 
		                                    &nbsp;
		                                    | -->
		                                    &nbsp;
		                                    <a href="user/update/<?php echo $ud->user_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Kemaskini Informasi">
		                                        <span class="icon-pencil7"></span>
		                                    </a> 
		                                    &nbsp;
		                                    |
		                                    &nbsp;
		                                    <a href="user/delete/<?php echo $ud->user_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Hapus Informasi">
		                                        <span class="icon-bin" style="color: red"></span>
		                                    </a>
									</td>
								</tr>
							<?php $i++; endforeach; ?>
							</tbody>
					</table>

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
