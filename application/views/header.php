<!-- GLobal script use -->

<script src="<?= base_url(); ?>vendor/assets/js/plugins/notifications/pnotify.min.js"></script>
<!-- <script src="<?= base_url(); ?>vendor/assets/js/plugins/notifications/sweet_alert.min.js"></script> -->
<!-- <script src="<?= base_url(); ?>vendor/assets/js/demo_pages/extra_sweetalert.js"></script> -->
<!-- /theme JS files -->

<!-- GLobal script use -->

<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
	<div class="navbar-brand">
		<a href="index.php" class="d-inline-block">
			<img src="<?= base_url(); ?>vendor/assets/images/logo_light.png" alt="">
		</a>
	</div>

	<div class="d-md-none">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
			<i class="icon-tree5"></i>
		</button>
		<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
			<i class="icon-paragraph-justify3"></i>
		</button>
	</div>

	<div class="collapse navbar-collapse" id="navbar-mobile">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
					<i class="icon-paragraph-justify3"></i>
				</a>
			</li>
		</ul>

		<span class="navbar-text ml-md-3">
			<span class="badge badge-mark border-orange-300 mr-2"></span>

			<?php 
				$dateTime = new DateTime('now', new DateTimeZone('asia/kuala_lumpur')); 
				//echo $dateTime->format("d/m/y  H:i A"); 

				if ($dateTime->format("A") == "AM") {
					echo "Selamat Pagi, ".ucwords($this->session->userdata('userfname'))." !";
				}else{
					echo "Selamat Petang, ".ucwords($this->session->userdata('userfname'))." !";
				}
			?>

		</span>

		<ul class="navbar-nav ml-md-auto">
			<li class="nav-item">
				<a href="#" data-toggle="modal" data-target="#logout" class="navbar-nav-link">
					Log Keluar &nbsp;
					<i class="icon-switch2"></i>
				</a>
			</li>
		</ul>
	</div>
</div>