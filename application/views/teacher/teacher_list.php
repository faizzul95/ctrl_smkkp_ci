<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Senarai Teacher | SMK Kinarut Papar</title>
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
                            <a href="#" class="breadcrumb-item">Teacher</a>
                            <span class="breadcrumb-item active"> Senarai Teacher</span>
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
                        <h2 class="card-title">SENARAI TEACHER</h2>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <!-- <a class="list-icons-item" data-action="remove"></a> -->
                            </div>
                        </div>
                    </div>

                     <div class="header-elements">

                         <?php echo anchor(site_url('teacher/create'), '<span class="icon-user-plus"></span> Daftar Teacher', 'class="btn btn-info ml-3"'); ?></div>

                    <table class="table table-bordered table-striped datatable-button-html5-columns">
                        <thead bgcolor="#2E86C1">
                            <tr>
							 <th style="color: white">Tch Staff No</th>
							 <th style="color: white">Tch Fullname</th>
							 <th style="color: white">Tch Nric No</th>
							 <th style="color: white">Tch Contact No</th>
							 <th style="color: white">Tch Gender</th>
							 <th style="color: white">Tch Phone No</th>
							 <th style="color: white">Tch Email</th>
							 <th style="color: white">Tch Race</th>
							 <th style="color: white">Tch Religion</th>
							 <th style="color: white">Tch Address</th>
							 <th style="color: white">Tch Postal Code</th>
							 <th style="color: white">Tch City Id</th>
							 <th style="color: white">Tch State Id</th>
							 <th style="color: white">Tch Country Id</th>
							 <th style="color: white">School Id</th>
							 <th style="color: white">Create At</th>
							 <th style="color: white">Update At</th>
							 <th style="color: white" width="250px">Tindakan</th>
                        	</tr>
                     	</thead>
                        <tbody>
                            <?php foreach ($teacherDetails as $teacher): ?>
							 <td><center><?php echo $teacher->tch_staff_no; ?></center></td>
							 <td><center><?php echo $teacher->tch_fullname; ?></center></td>
							 <td><center><?php echo $teacher->tch_nric_no; ?></center></td>
							 <td><center><?php echo $teacher->tch_contact_no; ?></center></td>
							 <td><center><?php echo $teacher->tch_gender; ?></center></td>
							 <td><center><?php echo $teacher->tch_phone_no; ?></center></td>
							 <td><center><?php echo $teacher->tch_email; ?></center></td>
							 <td><center><?php echo $teacher->tch_race; ?></center></td>
							 <td><center><?php echo $teacher->tch_religion; ?></center></td>
							 <td><center><?php echo $teacher->tch_address; ?></center></td>
							 <td><center><?php echo $teacher->tch_postal_code; ?></center></td>
							 <td><center><?php echo $teacher->tch_city_id; ?></center></td>
							 <td><center><?php echo $teacher->tch_state_id; ?></center></td>
							 <td><center><?php echo $teacher->tch_country_id; ?></center></td>
							 <td><center><?php echo $teacher->school_id; ?></center></td>
							 <td><center><?php echo $teacher->create_at; ?></center></td>
							 <td><center><?php echo $teacher->update_at; ?></center></td>
							 <td class="text-center">
                                    <a href="teacher/read/<?php echo $teacher->teacher_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Lihat Informasi">
                                        <span class="icon-eye" style="color: green"></span>
                                    </a> 
                                    &nbsp;
                                    |
                                    &nbsp;
                                    <a href="teacher/update/<?php echo $teacher->teacher_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Kemaskini Informasi">
                                        <span class="icon-pencil7"></span>
                                    </a> 
                                    &nbsp;
                                    |
                                    &nbsp;
                                    <a href="teacher/delete/<?php echo $teacher->teacher_id; ?>" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Padam Informasi">
                                        <span class="icon-bin" style="color: red"></span>
                                    </a>
                               </td>
                        	<?php endforeach; ?>
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