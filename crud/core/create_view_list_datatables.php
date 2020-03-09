<?php 

$string = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title> Senarai ".ucfirst(label($table_name))." | SMK Kinarut Papar</title>
    <!-- Global stylesheets -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"<?= base_url(); ?>vendor/assets/css/icons/icomoon/styles.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"<?= base_url(); ?>vendor/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"<?= base_url(); ?>vendor/assets/css/bootstrap_limitless.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"<?= base_url(); ?>vendor/assets/css/layout.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"<?= base_url(); ?>vendor/assets/css/components.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"<?= base_url(); ?>vendor/assets/css/colors.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src=\"<?= base_url(); ?>vendor/assets/js/main/jquery.min.js\"></script>
    <script src=\"<?= base_url(); ?>vendor/assets/js/main/bootstrap.bundle.min.js\"></script>
    <script src=\"<?= base_url(); ?>vendor/assets/js/plugins/loaders/blockui.min.js\"></script>
    <script src=\"<?= base_url(); ?>vendor/assets/js/plugins/ui/ripple.min.js\"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src=\"<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/datatables.min.js\"></script>
    <script src=\"<?= base_url(); ?>vendor/assets/js/plugins/tables/datatables/extensions/responsive.min.js\"></script>
    <script src=\"<?= base_url(); ?>vendor/assets/js/plugins/forms/selects/select2.min.js\"></script>

    <script src=\"<?= base_url(); ?>vendor/assets/js/app.js\"></script>
    <script src=\"<?= base_url(); ?>vendor/assets/js/demo_pages/datatables_responsive.js\"></script>
    <!-- /theme JS files -->
</head>

<body>

    <!-- Page content -->
    <div class=\"page-content\">

        <!-- Main sidebar -->
        <div class=\"sidebar sidebar-light sidebar-main sidebar-expand-md\">

            <!-- Sidebar mobile toggler -->
            <div class=\"sidebar-mobile-toggler text-center\">
                <a href=\"#\" class=\"sidebar-mobile-main-toggle\">
                    <i class=\"icon-arrow-left8\"></i>
                </a>
                SMK Kinarut Papar
                <a href=\"#\" class=\"sidebar-mobile-expand\">
                    <i class=\"icon-screen-full\"></i>
                    <i class=\"icon-screen-normal\"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class=\"sidebar-content\">

                <!-- User menu -->
                <div class=\"sidebar-user-material\">
                    <div class=\"sidebar-user-material-body\">
                        <div class=\"card-body text-center\">
                            <a href=\"#\">
                                <img src=\"<?= base_url(); ?>vendor/assets/images/demo/users/face6.jpg\" class=\"img-fluid rounded-circle shadow-1 mb-3\" width=\"100\" height=\"100\" alt=\"\">
                            </a>
                            <h6 class=\"mb-0 text-white text-shadow-dark\">Mohd Fahmy Izwan Zulkhafri</h6>
                            <span class=\"font-size-sm text-white text-shadow-dark\">Administrator</span>
                        </div>
                                                    
                        <div class=\"sidebar-user-material-footer\">
                            <a href=\"#user-nav\" class=\"d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle\" data-toggle=\"collapse\"><span>Akaun saya</span></a>
                        </div>
                    </div>

                    <div class=\"collapse\" id=\"user-nav\">
                        <ul class=\"nav nav-sidebar\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"icon-user-plus\"></i>
                                    <span>Profil saya</span>
                                </a>
                            </li>
                            <!-- <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"icon-cog5\"></i>
                                    <span>Account settings</span>
                                </a>
                            </li> -->
                            <li class=\"nav-item\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#logout\" class=\"nav-link\">
                                    <i class=\"icon-switch2\"></i>
                                    <span>Log Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class=\"card card-sidebar-mobile\">
                    <ul class=\"nav nav-sidebar\" data-nav-type=\"accordion\">

                        <!-- Main -->
                        <li class=\"nav-item-header\"><div class=\"text-uppercase font-size-xs line-height-xs\">Main</div> <i class=\"icon-menu\" title=\"Main\"></i></li>
                        <li class=\"nav-item\">
                            <a href=\"dashboard\" class=\"nav-link\">
                                <i class=\"icon-home4\"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <!-- /main -->

                        <!-- student -->
                        <li class=\"nav-item-header\"><div class=\"text-uppercase font-size-xs line-height-xs\">General</div> <i class=\"icon-menu\" title=\"Main\"></i></li>

                        <li class=\"nav-item nav-item-submenu nav-item-expanded nav-item-open\">
                            <a href=\"#\" class=\"nav-link\"><i class=\"icon-graduation\"></i> <span>Pelajar</span></a>
                            <ul class=\"nav nav-group-sub\" data-submenu-title=\"Layouts\">
                                <li class=\"nav-item\"><a href=\"student/create\" class=\"nav-link\">Pendaftaran Pelajar Baru</a></li>
                                <li class=\"nav-item\"><a href=\"student\" class=\"nav-link active\">Senarai ".ucfirst(label($table_name))." <span class=\"badge bg-indigo-400 align-self-center ml-auto\">534</span></a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item nav-item-submenu\">
                            <a href=\"#\" class=\"nav-link\"><i class=\"icon-people\"></i> <span>Guru</span></a>
                            <ul class=\"nav nav-group-sub\" data-submenu-title=\"Themes\">
                                <li class=\"nav-item\"><a href=\"teacher/create\" class=\"nav-link\">Pendaftaran Guru</a></li>
                                <li class=\"nav-item\"><a href=\"teacher\" class=\"nav-link active\">Senarai Guru<span class=\"badge bg-green-400 align-self-center ml-auto\">32</span></a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item nav-item-submenu\">
                            <a href=\"#\" class=\"nav-link\"><i class=\"icon-book\"></i> <span>Kelas</span></a>
                            <ul class=\"nav nav-group-sub\" data-submenu-title=\"Starter kit\">
                                <li class=\"nav-item\"><a href=\"register_classroom.php\" class=\"nav-link\">Pendaftaran Kelas</a></li>
                                <li class=\"nav-item\"><a href=\"list_of_classroom.php\" class=\"nav-link\">Senarai Kelas<span class=\"badge bg-blue-400 align-self-center ml-auto\">20</span></a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#logout\" class=\"nav-link\"><i class=\"icon-switch\"></i> <span>Log Keluar</span></a></li>
                        <!-- student -->

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->
            
        </div>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class=\"content-wrapper\">

            <!-- Page header -->
            <div class=\"page-header page-header-light\">
                <div class=\"breadcrumb-line breadcrumb-line-light header-elements-md-inline\">
                    <div class=\"d-flex\">
                        <div class=\"breadcrumb\">
                            <a href=\"<?= base_url(); ?>dashboard\" class=\"breadcrumb-item\"><i class=\"icon-home2 mr-2\"></i> Dashboard</a>
                            <a href=\"#\" class=\"breadcrumb-item\">".ucfirst(label($table_name))."</a>
                            <span class=\"breadcrumb-item active\"> Senarai ".ucfirst(label($table_name))."</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class=\"content\">

            <!-- Whole row as a control -->
                <div class=\"card\">
                    <div class=\"card-header header-elements-inline\">
                        <h2 class=\"card-title\">SENARAI ".strtoupper(label($table_name))."</h2>
                        <div class=\"header-elements\">
                            <div class=\"list-icons\">
                                <a class=\"list-icons-item\" data-action=\"collapse\"></a>
                                <a class=\"list-icons-item\" data-action=\"reload\"></a>
                                <!-- <a class=\"list-icons-item\" data-action=\"remove\"></a> -->
                            </div>
                        </div>
                    </div>

                    <div class=\"header-elements\">

                         <?php echo anchor(site_url('".$c_url."/create'), '<span class=\"icon-user-plus\"></span> Daftar ".ucfirst(label($table_name))."', 'class=\"btn btn-info ml-3\"'); ?>";
                            if ($export_excel == '1') {
                                $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/excel'), '<span class=\"mdi mdi-file-excel\"></span> Export as Excel', 'class=\"btn btn-success\"'); ?>";
                            }
                            if ($export_word == '1') {
                                $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/word'), '<span class=\"mdi mdi-file-word\"></span> Export as Word', 'class=\"btn btn-success\"'); ?>";
                            }
                            if ($export_pdf == '1') {
                                $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/pdf'), 'PDF', 'class=\"btn btn-primary\"'); ?>";
                            }



                   $string .= "</div>

                    <table id=\"mytable\" class=\"table table-bordered table-striped datatable-responsive-row-control\">
                        <thead bgcolor=\"#2E86C1\">

                        <tr>
                            <th width=\"20px\">No</th>";
                            foreach ($non_pk as $row) {
                                $string .= "\n\t\t\t\t\t\t    <th style=\"color: white\">" . label($row['column_name']) . "</th>";
                            }
            $string .= "\n<th style=\"color: white\" width=\"250px\">Tindakan</th>
                        \t\t</tr>
                    \t\t</thead>
                \t\t</table>
                </div>
                <!-- /whole row as a control -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>
</html>";

$column_non_pk = array();
foreach ($non_pk as $row) {
    $column_non_pk[] .= "{\"data\": \"".$row['column_name']."\"}";
}
$col_non_pk = implode(',', $column_non_pk);

$string .= "<script type=\"text/javascript\">
    $(document).ready(function() {
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
        {
            return {
                \"iStart\": oSettings._iDisplayStart,
                \"iEnd\": oSettings.fnDisplayEnd(),
                \"iLength\": oSettings._iDisplayLength,
                \"iTotal\": oSettings.fnRecordsTotal(),
                \"iFilteredTotal\": oSettings.fnRecordsDisplay(),
                \"iPage\": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                \"iTotalPages\": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        var t = $(\"#mytable\").dataTable({
            initComplete: function() {
                var api = this.api();
                $('#mytable_filter input')
                        .off('.DT')
                        .on('keyup.DT', function(e) {
                            if (e.keyCode == 13) {
                                api.search(this.value).draw();
                    }
                });
            },
            oLanguage: {
                sProcessing: \"loading...\"
            },
            processing: true,
            serverSide: true,
            ajax: {\"url\": \"".$c_url."/json\", \"type\": \"POST\"},
            columns: [
                {
                    \"data\": \"$pk\",
                    \"orderable\": false
                },".$col_non_pk.",
                {
                    \"data\" : \"action\",
                    \"orderable\": false,
                    \"className\" : \"text-center\"
                }
            ],
            order: [[0, 'desc']],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });
    });
</script>

<?php if (\$this->session->flashdata('message')) { ?>
     <?php if (\$this->session->flashdata('message') == \"Record Not Found\") { ?>
         <script type=\"text/javascript\">
           swal({
                title: \"ERROR !\",
                text: '<?= \$this->session->flashdata('message')?>',
                timer: 2200,
                showConfirmButton: false,
                allowOutsideClick: true,
                type: 'error'
            });
        </script>
    <?php }else{ ?>
        <script type=\"text/javascript\">
            setTimeout(function () {
                swal({
                    title: \"Success\",
                    text: '<?= \$this->session->flashdata('message')?>',
                    timer: 2200,
                    showConfirmButton: false,
                    allowOutsideClick: true,
                    type: 'success'
                });
                }, 250);
        </script>
    <?php } ?>
<?php } ?>

<script type=\"text/javascript\">
        $('body').on('click', '.delete-btn', function(event){
             event.preventDefault();
        var url = $(this).attr('href');
        swal({
            title: \"Are you sure ?\",
            text: \"Record will permanently deleted !\",
            type: \"warning\",
            showCancelButton: true,
            confirmButtonClass: \"btn-danger\",
            confirmButtonColor: \"#DD6B55\",
            confirmButtonText: \"Yes, delete !\",
            cancelButtonText: \"Cancel\",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true,
            allowEscapeKey: false,
            allowOutsideClick: true  
          },

          function(isConfirm) {
          if (isConfirm) {
             $.ajax({
                 url: url,
                 error: function() {
                     swal(\"Error !\", \"Something is wrong, Try again\", \"error\");
                 },
                 success: function(data) {
                      // swal(\"Deleted!\", \"Your record has been deleted.\", \"success\");
                       swal({
                            title: \"Deleted !\",
                            text: 'Record has been deleted',
                            timer: 1600,
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            type: 'success'
                        });
                      // setTimeout(function(){location.reload();},1600)

                 }
              });
            } 
             $('#mytable').DataTable().ajax.reload();
          });

        })
</script>";


$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>