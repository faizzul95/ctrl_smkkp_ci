<?php 

$string = "<title> View ".ucfirst(label($table_name))." Detail | ARCA System</title>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
 <div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-12 d-flex no-block align-items-center\">
            <h3 class=\"card-title\">View ".ucfirst(label($table_name))." Detail</h3>
            <div class=\"ml-auto text-right\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"<?= base_url(); ?>dashboard\">Dashboard</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">".ucfirst(label($table_name))."</li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Detail of ".ucfirst(label($table_name))."</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class=\"container-fluid\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                        <div class=\"table-responsive\">
                           <table class=\"table table-striped table-bordered table-hover\">";

                           foreach ($non_pk as $row) {
                                $string .= "\n\t\t\t\t\t\t\t\t <tr><td width=\"250px\">".label($row["column_name"])."</td><td><?php echo $".$row["column_name"]."; ?></td></tr>";
                                }

                     $string .= "\n\t\t\t\t\t\t\t</table>
                        </div>
                        <p align=\"center\">
                            <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-danger\"> Back
                            </a>
                        </p>
                </div>
            </div>
        </div>  
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src=\"<?= base_url(); ?>/vendor/assets/libs/jquery/dist/jquery.min.js\"></script>
<!-- sweet alert js -->
<script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.min.js\"></script>";

$hasil_view_read = createFile($string, $target."views/" . $c_url . "/" . $v_read_file);

?>