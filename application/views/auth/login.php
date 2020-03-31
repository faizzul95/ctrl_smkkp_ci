<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Log Masuk | SMK Kinarut Papar </title>

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
	<script src="<?= base_url(); ?>vendor/assets/js/app.js"></script>
	<!-- /theme JS files -->

	 <style type="text/css">
        body {
        	/*background-color: #E6E6E2;*/
          	background-image: url('<?= base_url(); ?>/vendor/assets/images/background_login/5.jpg');
            background-repeat: round;
        }
        input:focus{
                background-color:#F2FF93;
        }
       /* input[type=text] {
              background-color: #FEE9EA;
              color: white;
        }
        input[type=password] {
              background-color: #FEE9EA;
              color: white;
        }*/
    </style>

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form class="login-form" action="<?= base_url(); ?>auth/checkAuthorization" method="POST">
					<div class="card mb-4">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Log Masuk ke akaun anda</h5>
								<!-- <span class="d-block text-muted">Enter your credentials below</span> -->
							</div>

							<?php
			                    if($this->session->flashdata('login_error_message'))
			                    {
			                 ?>
			                    <div class="alert alert-danger text-center" style="margin-top:25px;">
			                        <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
			                       	<?= $this->session->flashdata('login_error_message'); ?>
			                     </div>
			                 <?php
			                    }
			                ?>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" class="form-control <?php echo form_error('username')?'is-invalid':''?>" name="username" id="username" value="<?php echo $username; ?>" placeholder="ID atau Email Pengguna" autocomplete="off">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
								<?php echo form_error('username') ?>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" name="password" value="<?php echo $password; ?>" class="form-control <?php echo form_error('password')?'is-invalid':''?>" placeholder="Katalaluan">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								<?php echo form_error('password') ?>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Log Masuk <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="text-center">
								<a href="<?= base_url(); ?>auth/forgot_password">Lupa katalaluan ?</a>
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
