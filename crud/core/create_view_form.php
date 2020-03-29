<?php 

$string = "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title><?php echo \$pagename ?> | SMK Kinarut Papar</title>

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
    <script src=\"<?= base_url(); ?>vendor/assets/js/plugins/extensions/jquery_ui/interactions.min.js\"></script>
    <script src=\"<?= base_url(); ?>vendor/assets/js/plugins/forms/selects/select2.min.js\"></script>

    <script src=\"<?= base_url(); ?>vendor/assets/js/app.js\"></script>
    <script src=\"<?= base_url(); ?>vendor/assets/js/demo_pages/form_select2.js\"></script>
    <!-- /theme JS files -->

    <script src=\"<?= base_url(); ?>/vendor/<?= base_url(); ?>vendor/assets/js/input_restriction.js\"></script>

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
                            <a href=\"#\" class=\"breadcrumb-item\"> ".ucfirst(label($table_name))."</a>
                            <span class=\"breadcrumb-item active\"> <?php echo \$pagename ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class=\"content\">

            <div class=\"alert alert-warning alert-styled-left\">
                <!-- <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span>×</span></button> -->
                <span class=\"font-weight-semibold\">Peringatan !</span> Semua bertanda dengan asterisk (<font color=\"red\">*</font>) adalah wajib diisi.
            </div>

            <!-- Whole row as a control -->
            <div class=\"card\">
                <div class=\"card-header header-elements-inline\">
                    <h2 class=\"card-title\"><?php echo \$pagename ?></h2>
                    <div class=\"header-elements\">
                        <div class=\"list-icons\">
                            <!-- <a class=\"list-icons-item\" data-action=\"collapse\"></a> -->
                            <a class=\"list-icons-item\" data-action=\"reload\"></a>
                            <!-- <a class=\"list-icons-item\" data-action=\"remove\"></a> -->
                        </div>
                    </div>
                </div>

                 <form action=\"<?php echo \$action; ?>\" method=\"post\">
                    <div class=\"card-body\">";

                    foreach ($non_pk as $row) {
                        if ($row["data_type"] == 'text')
                        {
                        $string .= "\n\t\t\t\t\t\t    
                        <div class=\"form-group row\">
                            <label for=\"".$row["data_type"]."\" class=\"col-sm-2 text-right control-label col-form-label\">".label($row["column_name"])." <span class=\"text-danger\">*</span></label>
                            <div class=\"col-sm-10\">
                                <textarea <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control is-invalid\"'; } else { echo 'class=\"form-control\"'; }  ?> rows=\"4\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
                                <?php echo form_error('".$row["column_name"]."') ?>
                            </div>
                        </div>\n";

                        }else if ($row["data_type"] == 'date')
                        {
                        $string .= "\n\t\t\t\t\t\t    
                        <div class=\"form-group row\">
                            <label for=\"".$row["data_type"]."\" class=\"col-sm-2 text-right control-label col-form-label\">".label($row["column_name"])." <span class=\"text-danger\">*</span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"date\" <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control is-invalid\"'; } else { echo 'class=\"form-control\"'; }  ?> name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"Please Enter ".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" /><?php echo form_error('".$row["column_name"]."') ?>
                            </div>
                        </div>\n";

                        }else if ($row["data_type"] == 'time')
                        {
                        $string .= "\n\t\t\t\t\t\t    
                        <div class=\"form-group row\">
                            <label for=\"".$row["data_type"]."\" class=\"col-sm-2 text-right control-label col-form-label\">".label($row["column_name"])." <span class=\"text-danger\">*</span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"time\" <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control is-invalid\"'; } else { echo 'class=\"form-control\"'; }  ?> name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"Please Enter ".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" /><?php echo form_error('".$row["column_name"]."') ?>
                            </div>
                        </div>\n";
                        }else if ($row["data_type"] == 'int')
                        {
                        $string .= "\n\t\t\t\t\t\t    
                        <div class=\"form-group row\">
                            <label for=\"".$row["data_type"]."\" class=\"col-sm-2 text-right control-label col-form-label\">".label($row["column_name"])." <span class=\"text-danger\">*</span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control is-invalid\"'; } else { echo 'class=\"form-control\"'; }  ?> name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" onkeypress=\"return isNumeric(event)\" oninput=\"maxLengthCheck(this)\" maxlength = \"11\" autocomplete=\"off\" placeholder=\"Please Enter ".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                                <?php echo (form_error('".$row["column_name"]."')) ?>
                            </div>
                        </div>\n";
                        }else if ($row["data_type"] == 'enum')
                        {

                        $string .= "\n\t\t\t\t\t\t    
                        <div class=\"form-group row\">
                            <label for=\"".$row["data_type"]."\" class=\"col-sm-2 text-right control-label col-form-label\">".label($row["column_name"])." <span class=\"text-danger\">*</span></label>
                            <div class=\"col-sm-10\">
                                <?php 
                                    \$id = 'id=\"".$row["column_name"]."\" class=\"form-control select-search\"';
                                    echo form_dropdown(\"".$row["column_name"]."\", \$this->db->enum_select(\"".$table_name."\",\"".$row["column_name"]."\"),'',\$id); 
                                ?><?php echo form_error('".$row["column_name"]."') ?>
                            </div>
                        </div>\n";
                        }else
                        {
                        $string .= "\n\t\t\t\t\t\t    
                        <div class=\"form-group row\">
                            <label for=\"".$row["data_type"]."\" class=\"col-sm-2 text-right control-label col-form-label\">".label($row["column_name"])." <span class=\"text-danger\">*</span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control is-invalid\"'; } else { echo 'class=\"form-control\"'; }  ?> name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" autocomplete=\"off\" maxlength = \"200\" placeholder=\"Please Enter ".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" /><?php echo form_error('".$row["column_name"]."') ?>
                            </div>
                        </div>\n";
                        }
                    }

                     $string .= "\n\n\t\t\t\t\t\t<div class=\"border-top\">
                            <div class=\"card-body\">
                                <p align=\"center\">
                                     <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> 
                                     <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-danger\">Batal</a>
                                     <button type=\"submit\" class=\"btn btn-info\"><?php echo \$button ?></button> 
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
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

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>