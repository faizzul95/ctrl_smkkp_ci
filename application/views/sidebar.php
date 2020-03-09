
 <?php $currentPage = $this->session->flashdata('current_page')?>

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
                        <img src="<?= base_url(); ?>vendor/assets/images/demo/users/face6.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="100" height="100" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark"><?php echo ucwords($this->session->userdata('userfname')); ?></h6>
                    <span class="font-size-sm text-white text-shadow-dark"><?php echo ucwords($this->session->userdata('role_name')); ?></span>
                </div>
                                            
                <div class="sidebar-user-material-footer">
                    <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>Akaun saya</span></a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-user-plus"></i>
                            <span>Profil saya</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-cog5"></i>
                            <span>Account settings</span>
                        </a>
                    </li> -->
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
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>dashboard" <?php echo ($currentPage == "dashboard") ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <!-- /main -->

                <!-- student -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">General</div> <i class="icon-menu" title="Main"></i></li>

                <li <?php echo ($currentPage == "pendaftaran pelajar" || $currentPage == "senarai pelajar") ? 'class="nav-item nav-item-submenu nav-item-expanded nav-item-open" ' : 'class="nav-item nav-item-submenu"' ?>>
                    <a href="#" class="nav-link"><i class="icon-graduation"></i> <span>Pelajar</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?= base_url(); ?>student/create" <?php echo ($currentPage == "pendaftaran pelajar") ? 'class="nav-link active"' : 'class="nav-link"' ?>>Pendaftaran Pelajar Baru</a></li>
                        <li class="nav-item"><a href="student" <?php echo ($currentPage == "senarai pelajar") ? 'class="nav-link active"' : 'class="nav-link"' ?> >Senarai Pelajar <span class="badge bg-indigo-400 align-self-center ml-auto">534</span></a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-people"></i> <span>Guru</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Themes">
                        <li class="nav-item"><a href="<?= base_url(); ?>teacher/create" class="nav-link">Pendaftaran Guru</a></li>
                        <li class="nav-item"><a href="teacher" class="nav-link active">Senarai Guru<span class="badge bg-green-400 align-self-center ml-auto">32</span></a></li>
                    </ul>
                </li>

                 <li <?php echo ($currentPage == "pendaftaran pengguna" || $currentPage == "senarai pengguna") ? 'class="nav-item nav-item-submenu nav-item-expanded nav-item-open" ' : 'class="nav-item nav-item-submenu"' ?>>
                    <a href="#" class="nav-link"><i class="icon-graduation"></i> <span>Pengguna</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?= base_url(); ?>user/create" <?php echo ($currentPage == "pendaftaran pengguna") ? 'class="nav-link active"' : 'class="nav-link"' ?>>Pendaftaran Pengguna Baru</a></li>
                        <li class="nav-item"><a href="<?= base_url(); ?>user" <?php echo ($currentPage == "senarai pengguna") ? 'class="nav-link active"' : 'class="nav-link"' ?>>Senarai Pengguna <span class="badge bg-indigo-400 align-self-center ml-auto">534</span></a></li>
                    </ul>
                </li>

                <li <?php echo ($currentPage == "pendaftaran kelas" || $currentPage == "senarai kelas") ? 'class="nav-item nav-item-submenu nav-item-expanded nav-item-open" ' : 'class="nav-item nav-item-submenu"' ?>>
                    <a href="#" class="nav-link"><i class="icon-book"></i> <span>Kelas</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="register_classroom.php" class="nav-link">Pendaftaran Kelas</a></li>
                        <li class="nav-item"><a href="list_of_classroom.php" class="nav-link">Senarai Kelas<span class="badge bg-blue-400 align-self-center ml-auto">20</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" data-toggle="modal" data-target="#logout" class="nav-link"><i class="icon-switch"></i> <span>Log Keluar</span></a></li>
                <!-- student -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>