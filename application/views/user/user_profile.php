
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Profil Pengguna | SMK Kinarut Papar</title>

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
	<script src="<?= base_url(); ?>vendor/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/plugins/ui/fullcalendar/core/main.min.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/plugins/ui/fullcalendar/daygrid/main.min.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/plugins/ui/fullcalendar/timegrid/main.min.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/plugins/ui/fullcalendar/interaction/main.min.js"></script>

	<script src="<?= base_url(); ?>vendor/assets/js/app.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/demo_pages/user_pages_profile_tabbed.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/demo_charts/echarts/light/bars/tornado_negative_stack.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/demo_charts/pages/profile/light/balance_stats.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/demo_charts/pages/profile/light/available_hours.js"></script>
	<script src="<?= base_url(); ?>vendor/assets/js/plugins/notifications/pnotify.min.js"></script>
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
                            <span class="breadcrumb-item active"> Profil Pengguna</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">

	            <!-- Whole row as a control -->
	                
	            <!-- Inner container -->
				<div class="d-md-flex align-items-md-start">

					<!-- Left sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

						<?php 

							$userID = $user_id;
							$userfname = $user_fullname;
							$userEmail = $user_email;

							$userUname = $user_username;
							$userPassword =$user_password;

							$schoolID =$school_id;

							$sID = $school_id;

                            if (!empty($sID)) {
                            	$query = $this->db->query("SELECT * FROM `school` WHERE `school_id` = '$sID'");
                                $row  = $query->row_array();
                                $sName = $row['school_name'];

                            	$userSchoolName = $sName;
                            }

                            $RoleID = $role_id;

                            $query = $this->db->query("SELECT * FROM `schema_user_role` WHERE `role_id` = '$RoleID'");
                            $row  = $query->row_array();
                            $RoleName = $row['role_name'];

                            $userRoleName = $RoleName;

                            $userStatus = $user_status;

						?>

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Navigation -->
							<div class="card">
								<?php $tab = (isset($tabNo)) ? $tabNo : "tab1"; ?> 
								<div class="card-body p-0">
									<ul class="nav nav-sidebar mb-2">
										<li class="nav-item-header">Navigasi</li>
										<li class="nav-item">
											<a href="#profile" class="nav-link <?php echo ($tab == 'tab1') ? 'active' : ''; ?>" data-toggle="tab">
												<i class="icon-user"></i>
												 Profil Saya
											</a>
										</li>
										<li class="nav-item">
											<a href="#account" class="nav-link <?php echo ($tab == 'tab2') ? 'active' : ''; ?>" data-toggle="tab">
												<i class="icon-cog5"></i>
												 Tatapan Akaun
											</a>
										</li>
										<li class="nav-item">
											<a href="#schedule" class="nav-link <?php echo ($tab == 'tab3') ? 'active' : ''; ?>" data-toggle="tab">
												<i class="icon-calendar3"></i>
												Jadual
												<span class="font-size-sm font-weight-normal opacity-75 ml-auto">[akan datang]</span>
											</a>
										</li>
										<!-- <li class="nav-item-divider"></li>
										<li class="nav-item">
											<a href="login_advanced.html" class="nav-link" data-toggle="tab">
												<i class="icon-switch2"></i>
												Log Keluar
											</a>
										</li> -->
									</ul>
								</div>
							</div>
							<!-- /navigation -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /left sidebar component -->


					<!-- Right content -->
					<div class="tab-content w-100">
						<div class="tab-pane fade <?php echo ($tab == 'tab1') ? 'active show' : ''; ?>" id="profile">

							<!-- Profile info -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">Maklumat Profil</h5>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="row">
												<div class="col-md-12">
													<label>Nama Penuh</label>
													<input type="text" name="" value="<?= $userfname; ?>" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Alamat 1</label>
													<input type="text" value=" - Can't be update -" readonly  class="form-control">
												</div>
												<div class="col-md-6">
													<label>Alamat 2</label>
													<input type="text" value=" - Can't be update -" readonly  class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label>Bandar</label>
													<input type="text" value=" - Can't be update -" readonly  class="form-control">
												</div>
												<div class="col-md-4">
													<label>Negeri</label>
													<input type="text" value=" - Can't be update -" readonly  class="form-control">
												</div>
												<div class="col-md-4">
													<label>Poskod</label>
													<input type="text" value=" - Can't be update -" readonly  class="form-control">
												</div>
											</div>
										</div>

				                        <div class="form-group">
				                        	<div class="row">
				                        		<div class="col-md-6">
													<label>Email</label>
													<input type="text" name="" value="<?= $userEmail; ?>" class="form-control">
				                        		</div>

												<div class="col-md-6">
													<label>Telefon</label>
													<input type="text" value=" - Can't be update -" readonly class="form-control">
												</div>
				                        	</div>
				                        </div>

				                        <div class="text-right">
				                        	<button type="submit" class="btn btn-primary">Kemaskini Profil</button>
				                        </div>
									</form>
								</div>
							</div>
							<!-- /profile info -->

							<!-- image upload -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">Kemaskini Gambar Profil</h5>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<form action="<?= base_url('user/update_user_profile'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

				                        <div class="form-group">
				                        	<div class="row">
												<div class="col-md-12">
													<!-- <label>Muat Naik Gambar</label> -->
				                                    <input type="file" name="user_avatar" accept="image/png,image/jpeg"  class="form-input-styled <?php echo form_error('user_avatar')?'is-invalid':''?>" data-fouc>
				                                    <span class="form-text text-muted">Format dibenarkan : png, jpg. Saiz fail maksimum 2Mb</span>
				                                    <?php echo form_error('user_avatar')?'<span class="text-danger">'.form_error('user_avatar').'</span> ':''?>
												</div>
				                        	</div>
				                        </div>

				                        <div class="text-right">
				                        	<button type="submit" id="pnotify-dynamic" class="btn btn-primary">Kemaskini Gambar</button>
				                        </div>
									</form>
								</div>
							</div>
							<!-- image upload -->

					    </div>

					    <div class="tab-pane fade <?php echo ($tab == 'tab2') ? 'active show' : ''; ?>" id="account">

							<!-- Account settings -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">Maklumat Akaun</h5>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label>ID Pengguna</label>
												<input type="text" value="<?= $userUname; ?>" class="form-control" readonly="readonly">
											</div>
											<div class="col-md-4">
												<label>Jenis Akaun</label>
												<input type="text" value="<?= $userRoleName; ?>" class="form-control" readonly="readonly">
												<input type="hidden" name="<?= $RoleID; ?>" value="" class="form-control">
											</div>
											<div class="col-md-4">
												<label>Status Akaun</label>
												<!-- <span class="badge badge-success">Aktif</span> -->
												<input type="text" name="" value="<?= $userStatus; ?>" class="form-control" readonly>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">Tetapan Log Masuk</h5>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<form action="<?= base_url('user/update_user_id_password'); ?>" method="post">

										<div class="form-group ">
											<div class="row">
												<div class="col-md-12">
													<label>ID Pengguna</label>
													<input type="text" name="user_username" value="<?= $userUname; ?>" class="form-control <?php echo form_error('user_username')?'is-invalid':''?>" >
													<?php echo form_error('user_username')?'<span class="text-danger">'.form_error('user_username').'</span> ':''?>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Kata laluan baharu</label>
													<input type="password" name="user_new_password" placeholder="Masukkan kata laluan baharu" class="form-control">
												</div>
												<div class="col-md-6">
													<label>Ulang kata laluan</label>
													<input type="password" name="confirm_password" placeholder="Masukkan ulang kata laluan" class="form-control <?php echo form_error('confirm_password')?'is-invalid':''?>">
													<?php echo form_error('confirm_password')?'<span class="text-danger">'.form_error('confirm_password').'</span> ':''?>
												</div>
											</div>
										</div>

				                        <div class="text-right">
				                        	<button type="submit" class="btn btn-primary">Kemaskini Akaun</button>
				                        </div>
			                        </form>
								</div>
							</div>
							<!-- /account settings -->

					    </div>

					    <div class="tab-pane fade <?php echo ($tab == 'tab3') ? 'active show' : ''; ?>" id="schedule">

							<!-- Schedule -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">My schedule</h5>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="my-schedule"></div>
								</div>
							</div>
							<!-- /schedule -->

				    	</div>

					</div>
					<!-- /right content -->

				</div>
				<!-- /inner container -->



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


	$('#pnotify-dynamic').on('click', function () {
            var percent = 0;
            var notice = new PNotify({
                text: "Sila tunggu",
                addclass: 'bg-primary border-primary',
                type: 'info',
                icon: 'icon-spinner4 spinner',
                hide: false,
                buttons: {
                    closer: false,
                    sticker: false
                },
                opacity: .9,
                width: "170px"
            });

            // setTimeout(function() {
            // notice.update({
            //     title: false
            // });
            // var interval = setInterval(function() {
            //     percent += 2;
            //     var options = {
            //         text: percent + "% lengkap."
            //     };
            //     if (percent == 80) options.title = "Hampir selesai";
            //     if (percent >= 100) {
            //         window.clearInterval(interval);
            //         options.title = "Done!";
            //         options.addclass = "bg-success border-success";
            //         options.type = "success";
            //         options.hide = true;
            //         options.buttons = {
            //             closer: true,
            //             sticker: true
            //         };
            //         options.icon = 'icon-checkmark3';
            //         options.opacity = 1;
            //         options.width = PNotify.prototype.options.width;
            //     }
            //     notice.update(options);
            //     }, 120);
            // }, 2000);
        });


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
                    url: "<?php echo base_url() ?>user/delete",
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