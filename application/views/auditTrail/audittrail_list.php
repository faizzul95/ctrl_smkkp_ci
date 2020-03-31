<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Audit Trail | SMK Kinarut Papar</title>
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
                            <a href="#" class="breadcrumb-item">Sistem</a>
                            <span class="breadcrumb-item active"> Audit Trail</span>
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
                        <h2 class="card-title">SENARAI AUDIT TRAIL</h2>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <!-- <a class="list-icons-item" data-action="remove"></a> -->
                            </div>
                        </div>
                    </div>

                  <!--   <div class="header-elements">
                        <?php echo anchor(site_url('user/create'), '<span class="icon-user-plus"></span> Daftar Pengguna', 'class="btn btn-info ml-3"'); ?>
                    </div> -->

                    <table class="table table-bordered table-striped datatable-button-html5-columns">

							<thead bgcolor="#2E86C1">
	                            <tr>
	                            	<th style="color: white">No.</th>
	                                <th style="color: white">Nama Pengguna</th>
	                                <th style="color: white">Aktiviti</th>
	                                <th style="color: white">Nama Table</th>
	                                <th style="color: white">Data</th>
	                                <th style="color: white">Timestamp</th>
	                            </tr>
	                        </thead>

							<tbody>
							<?php $i=1; foreach ($userLog as $ul): ?>
								<tr>
									<td width="5px" class="text-center"><?= $i; ?></td>
									<td><?= $ul->user_full_name; ?></td>

									<td>
										<!-- <center> -->
											<?php if ($ul->event == "insert") { ?>
												<span class="badge badge-info"><?= $ul->event; ?></span>
											<?php } else if ($ul->event == "update") { ?>
												<span class="badge badge-success"><?= $ul->event; ?></span>
											<?php } else if ($ul->event == "delete") { ?>
												<span class="badge badge-danger"><?= $ul->event; ?></span>
											<?php } ?>
										<!-- </center> -->
									</td>

									<td><?= $ul->table_name; ?></td>
									<td width="150px" class="text-center">
										<!-- <?= $ul->old_values; ?> -->
										<button id="<?= $ul->id; ?>" class="btn btn-info btn-sm view_old_data">Lihat Data</button>
									</td>
									<td width="180px">
										<?php echo date("d.m.Y h:i A", strtotime($ul->created_at)); ?> 
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

<div class="modal fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Lihat Data Audit Trail</h3>
        <a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
      </div>
      <div class="modal-body">
        <div id="detail"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    // Start jQuery function after page is loaded
    $(document).ready(function(){
          $('.view_old_data').click(function(){
            event.preventDefault();
            var id = $(this).attr('id');
            // console.log(id);
            $.ajax({
                type: "POST",
                 url: "<?php echo base_url() ?>AuditTrail/get_data",
                 data: { id : id },
                success: function(data){
                    $('#detail').html(data);
                    // Display the Bootstrap modal
                    $('#modalMenu').modal('show');
                }

            });
            // End AJAX function
        });
    });     
</script>