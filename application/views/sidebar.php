<?php 
    
    $schoolCount = $this->db->query("SELECT * FROM school"); // kira semua sekolah

	if ($this->session->userdata('roleid') == 1) // for superadmin view
    {
    	$userCount = $this->db->query("SELECT * FROM user WHERE `role_id` = '1' OR `role_id` = '2'"); // kira semua superadmin and admin
    }
    
    // $studentCount = $this->db->query("SELECT * FROM student WHERE school_id == '$this->session->userdata('schoolID'))' "); // kira semua student

    // dummy data
    $studentCount = 0;

    $currentPage = $this->session->flashdata('current_page');

?>  

 <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        SMK Kinarut Papar
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="<?= base_url(); ?>vendor/user_avatar/<?php echo $this->session->userdata('useravatar'); ?>" class="img-fluid rounded-circle shadow-1 mb-3" width="100" height="100" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark"><?php echo ucwords($this->session->userdata('userfname')); ?></h6>
                    <span class="font-size-sm text-white text-shadow-dark"><?php echo ucwords($this->session->userdata('rolename')); ?></span>
                </div>
                                            
                <div class="sidebar-user-material-footer">
                    <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>Akaun saya</span></a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>user/profile" <?php echo ($currentPage == "profile") ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                            <i class="icon-user"></i>
                            <span>Maklumat Profil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>user/profile/account_settings" class="nav-link">
                            <i class="icon-cog5"></i>
                            <span>Tetapan Akaun</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="modal" data-target="#logout" class="nav-link">
                            <i class="icon-switch2"></i>
                            <span>Log Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Menu Utama</div> <i class="icon-menu" title="Main"></i></li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>dashboard" <?php echo ($currentPage == "dashboard") ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <!-- /main -->

                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">General</div> <i class="icon-menu" title="Main"></i></li>

                <!-- FOR SUPERADMIN -->

                <!-- start:pengguna -->
                <?php if ($this->session->userdata('roleid') == 1): ?>
                 <li <?php echo ($currentPage == "pendaftaran pengguna" || $currentPage == "senarai pengguna") ? 'class="nav-item nav-item-submenu nav-item-expanded nav-item-open" ' : 'class="nav-item nav-item-submenu"' ?>>
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span>Pengguna</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?= base_url(); ?>user/create" <?php echo ($currentPage == "pendaftaran pengguna") ? 'class="nav-link active"' : 'class="nav-link"' ?>>Pendaftaran Pengguna Baru</a></li>
                        <li class="nav-item"><a href="<?= base_url(); ?>user" <?php echo ($currentPage == "senarai pengguna") ? 'class="nav-link active"' : 'class="nav-link"' ?>>Senarai Pengguna <span class="badge bg-blue-400 align-self-center ml-auto"><?= $userCount->num_rows(); ?></span></a></li>
                    </ul>
                </li>
                <!-- end:pengguna -->

                <!-- start:School -->
                <li <?php echo ($currentPage == "pendaftaran School" || $currentPage == "senarai School") ? 'class="nav-item nav-item-submenu nav-item-expanded nav-item-open" ' : 'class="nav-item nav-item-submenu"' ?>>
                    <a href="#" class="nav-link"><i class="icon-office"></i> <span>Sekolah</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="<?= base_url(); ?>school/create" <?php echo ($currentPage == "pendaftaran School") ? 'class="nav-link active"' : 'class="nav-link"' ?>>Pendaftaran Sekolah</a></li>
                        <li class="nav-item"><a href="<?= base_url(); ?>school" <?php echo ($currentPage == "senarai School") ? 'class="nav-link active"' : 'class="nav-link"' ?>>Senarai Sekolah<span class="badge bg-blue-400 align-self-center ml-auto"><?= $schoolCount->num_rows(); ?></span></a></li>
                    </ul>
                </li>
                <!-- end:School -->

                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Sistem</div> <i class="icon-menu" title="Main"></i></li>

                <!-- start:systemlog -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>AuditTrail" <?php echo ($currentPage == "audittrail") ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="icon-history"></i>
                        <span>
                            Audit Trail
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>AuditTrail/systemLog" <?php echo ($currentPage == "systemlog") ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="icon-history"></i>
                        <span>
                            Log Ralat System
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>AuditTrail/userlog" <?php echo ($currentPage == "userlog") ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="icon-history"></i>
                        <span>
                            Log Aktiviti Pengguna
                        </span>
                    </a>
                </li>
                <!-- end:systemlog -->

            	<?php endif;?>
            	<!-- FOR SUPERADMIN -->

            	<!-- FOR ADMIN -->
            	<?php if ($this->session->userdata('roleid') == 2): ?>

            	<!-- start:Kerani -->
                <li <?php echo ($currentPage == "pendaftaran Kerani" || $currentPage == "senarai Kerani") ? 'class="nav-item nav-item-submenu nav-item-expanded nav-item-open" ' : 'class="nav-item nav-item-submenu"' ?>>
                    <a href="#" class="nav-link"><i class="icon-book"></i> <span>Kerani</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="register_classroom.php" class="nav-link">Pendaftaran Kerani</a></li>
                        <li class="nav-item"><a href="list_of_classroom.php" class="nav-link">Senarai Kerani<span class="badge bg-blue-400 align-self-center ml-auto">20</span></a></li>
                    </ul>
                </li>
                <!-- end:Kerani -->

            	<!-- start:teacher -->
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-people"></i> <span>Guru</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Themes">
                        <li class="nav-item"><a href="<?= base_url(); ?>teacher/create" class="nav-link">Pendaftaran Guru</a></li>
                        <li class="nav-item"><a href="teacher" class="nav-link active">Senarai Guru<span class="badge bg-green-400 align-self-center ml-auto">32</span></a></li>
                    </ul>
                </li>
                <!-- end:teacher -->

                <!-- start:kelas -->
                <li <?php echo ($currentPage == "pendaftaran kelas" || $currentPage == "senarai kelas") ? 'class="nav-item nav-item-submenu nav-item-expanded nav-item-open" ' : 'class="nav-item nav-item-submenu"' ?>> 
                    <a href="#" class="nav-link"><i class="icon-book"></i> <span>Kelas</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="<?= base_url(); ?>classroom/create" class="nav-link <?php echo $currentPage == "pendaftaran kelas" ?'active':''?>">Pendaftaran Kelas</a></li>
                        <li class="nav-item"><a href="<?= base_url(); ?>classroom" class="nav-link <?php echo $currentPage == "senarai kelas" ?'active':''?>">Senarai Kelas<span class="badge bg-blue-400 align-self-center ml-auto">20</span></a></li>
                    </ul>
                </li>
                <!-- end:kelas -->


            	<?php endif;?>
            	<!-- FOR ADMIN -->

            	<?php if ($this->session->userdata('roleid') == 3): ?>
                <!-- start:student -->
                <li <?php echo ($currentPage == "pendaftaran pelajar" || $currentPage == "senarai pelajar") ? 'class="nav-item nav-item-submenu nav-item-expanded nav-item-open" ' : 'class="nav-item nav-item-submenu"' ?>>
                    <a href="#" class="nav-link"><i class="icon-graduation"></i> <span>Pelajar</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?= base_url(); ?>student/create" <?php echo ($currentPage == "pendaftaran pelajar") ? 'class="nav-link active"' : 'class="nav-link"' ?>>Pendaftaran Pelajar Baru</a></li>
                        <li class="nav-item"><a href="student" <?php echo ($currentPage == "senarai pelajar") ? 'class="nav-link active"' : 'class="nav-link"' ?> >Senarai Pelajar <span class="badge bg-indigo-400 align-self-center ml-auto"><?= $studentCount; ?></span></a></li>
                    </ul>
                </li>
                <!-- end:student -->
                <?php endif;?>

                
                <!-- <li class="nav-item"><a href="#" data-toggle="modal" data-target="#logout" class="nav-link"><i class="icon-switch"></i> <span>Log Keluar</span></a></li> -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>