<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Senarai Sekolah | SMK Kinarut Papar</title>
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
                            <a href="#" class="breadcrumb-item">Sekolah</a>
                            <span class="breadcrumb-item active"> Senarai Sekolah</span>
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
                        <h2 class="card-title">SENARAI SEKOLAH</h2>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <!-- <a class="list-icons-item" data-action="remove"></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="header-elements">
                    	<?php echo anchor(site_url('school/create'), '<span class="icon-user-plus"></span> Daftar Sekolah', 'class="btn btn-info ml-3"'); ?>
                    </div>

                    <table class="table table-bordered table-striped datatable-button-html5-columns">
                        <thead bgcolor="#2E86C1">
                            <tr>
                             <th style="color: white">No.</th>
							 <th style="color: white">Nama</th>
							 <th style="color: white">Alamat</th>
							 <th style="color: white">Jenis</th>
							 <th style="color: white">Tahap</th>
							 <th style="color: white">Kelas</th>
							 <th style="color: white" width="150px">Tindakan</th>
                        	</tr>
                     	</thead>
                        <tbody>
                            <?php $i=1; foreach ($schoolDetails as $school): ?>
                            <tr>
	                             <td width="5px" class="text-center"><?= $i; ?></td>
								 <td><?php echo $school->school_name; ?></td>
								 <td>

								 	<?php
								 		// get city name
	                                    $cityID = $school->school_city_id;
	                                    $query = $this->db->query("SELECT * FROM `master_city` WHERE `id` = '$cityID'");
	                                    $row  = $query->row_array();
	                                    $cityName = $row['name'];

	                                    // get state name
	                                    $stateID = $school->school_state_id;
	                                    $query = $this->db->query("SELECT * FROM `master_state` WHERE `id` = '$stateID'");
	                                    $row  = $query->row_array();
	                                    $stateName = $row['name'];

	                                    // get country name
	                                    $countryID = $school->school_country_id;
	                                    $query = $this->db->query("SELECT * FROM `master_country` WHERE `id` = '$countryID'");
	                                    $row  = $query->row_array();
	                                    $countryName = $row['name'];
	                                ?>

								 	<?php echo $school->school_address; ?>, 
								 	<?php echo $school->school_postal_code; ?>,
								 	<?= $cityName; ?>, <?= $stateName; ?> <?= $countryName; ?>
								 </td>
								 <td><?php echo $school->school_type; ?></td>
								 <td><?php echo $school->school_level; ?></td>
								 <td class="text-center" width="180px"><a href="#" class="btn btn-sm btn-info"> Daftar / Lihat </a></td>
								 <td class="text-center" width="150px">
	                                    <a href="school/read/<?php echo $school->school_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Lihat Informasi">
	                                        <span class="icon-eye" style="color: green"></span>
	                                    </a> 
	                                    &nbsp;
	                                    |
	                                    &nbsp;
	                                    <a href="school/update/<?php echo $school->school_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Kemaskini Informasi">
	                                        <span class="icon-pencil7"></span>
	                                    </a> 
	                                    &nbsp;
	                                    |
	                                    &nbsp;
	                                    <a href="school/delete/<?php echo $school->school_id; ?>" id="<?= $school->school_id; ?>" data-popup="tooltip" title="" data-placement="bottom" class="delete_data" data-original-title="Hapus Informasi">
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

<script type="text/javascript">
    $('.delete_data').on('click', function (event) {
        	event.preventDefault();
            // Setup
            var id = $(this).attr('id');

            var notice = new PNotify({
                title: '<b><i class="icon-warning2 mr-2 icon-1x"></i> PENGESAHAN</b>',
                text: '<p>Adakah anda pasti ?</p>',
                hide: true,
                type: 'warning',
                confirm: {
                    confirm: true,
                    buttons: [
                        {
                            text: 'Ya',
                            addClass: 'btn btn-sm btn-primary'
                        },
                        {
                        	text: 'Batal',
                            addClass: 'btn btn-sm btn-danger'
                        }
                    ]
                },
                buttons: {
                    closer: false,
                    sticker: false
                }
            })

            // On confirm
            notice.get().on('pnotify.confirm', function(event) {
            	event.preventDefault();
                $.ajax({
                    url: "<?php echo base_url() ?>school/delete",
                    type: "POST",
                    data: { id : id },
                    success: function(data){
	                   window.location.href = window.location.href.replace( /[\?#].*|$/, "?delete=success" );
                    }
                });
                return false;
            })

            // On cancel
            notice.get().on('pnotify.cancel', function() {

            });
        });
</script>