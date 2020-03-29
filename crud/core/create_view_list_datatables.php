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

    <!-- Main navbar -->
    <?php \$this->load->view('header'); ?>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class=\"page-content\">

        <!-- Main sidebar -->
       <?php \$this->load->view('sidebar'); ?>
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
                    <table class=\"table table-bordered table-striped datatable-responsive-row-control\">
                        <thead bgcolor=\"#2E86C1\">
                            <tr>";
                                  foreach ($non_pk as $row) {
                                $string .= "\n\t\t\t\t\t\t\t <th style=\"color: white\">" . label($row['column_name']) . "</th>";
                            }
                    $string .= "\n\t\t\t\t\t\t\t <th style=\"color: white\" width=\"250px\">Tindakan</th>
                        \t</tr>
                     \t</thead>
                        <tbody>
                            <?php foreach (\$".$c_url."Details as \$".$c_url."): ?>";
                            foreach ($non_pk as $row) {
                                $string .= "\n\t\t\t\t\t\t\t <td><center><?php echo \$".$c_url."->".$row['column_name']."; ?></center></td>";
                            }
                    $string .= "\n\t\t\t\t\t\t\t <td class=\"text-center\">
                                    <a href=\"".$c_url."/read/<?php echo \$".$c_url."->".$c_url."_id; ?>\" data-popup=\"tooltip\" title=\"\" data-placement=\"bottom\" data-original-title=\"Lihat Informasi\">
                                        <span class=\"icon-eye\" style=\"color: green\"></span>
                                    </a> 
                                    &nbsp;
                                    |
                                    &nbsp;
                                    <a href=\"".$c_url."/update/<?php echo \$".$c_url."->".$c_url."_id; ?>\" data-popup=\"tooltip\" title=\"\" data-placement=\"bottom\" data-original-title=\"Kemaskini Informasi\">
                                        <span class=\"icon-pencil7\"></span>
                                    </a> 
                                    &nbsp;
                                    |
                                    &nbsp;
                                    <a href=\"".$c_url."/delete/<?php echo \$".$c_url."->".$c_url."_id; ?>\" data-popup=\"tooltip\" title=\"\" data-placement=\"bottom\" data-original-title=\"Padam Informasi\">
                                        <span class=\"icon-bin\" style=\"color: red\"></span>
                                    </a>
                               </td>
                        \t<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /whole row as a control -->

            </div>
            <!-- /content area -->

            <!-- Footer -->
            <?php \$this->load->view('footer');?>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>
</html>";


$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>