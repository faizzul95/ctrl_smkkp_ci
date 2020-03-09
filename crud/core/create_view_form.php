<?php 

$string = "<title><?php echo \$pagename ?> | ARCA System</title>

<script src=\"<?= base_url(); ?>/vendor/assets/js/input_restriction.js\"></script>

<link href=\"<?= base_url(); ?>/vendor/dist/css/style.min.css\" rel=\"stylesheet\">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class=\"page-breadcrumb\">
<div class=\"row\">
    <div class=\"col-12 d-flex no-block align-items-center\">
        <h3 class=\"page-title\">".ucfirst(label($table_name))."</h3>
        <div class=\"ml-auto text-right\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"<?= base_url(); ?>dashboard\">Dashboard</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">List ".ucfirst(label($table_name))."</li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><?php echo \$pagename ?></li>
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

<div class=\"alert alert-danger\" role=\"alert\">
  <!-- <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a> -->
  <i class=\"mdi mdi-alert\"></i> <strong>Reminder !</strong> All marked with asterisk (<font color=\"red\">*</font>) are required to fill. 
</div>

<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <form action=\"<?php echo \$action; ?>\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\"><u><?php echo \$pagename ?></u></h3>";

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
                                    \$id = 'id=\"".$row["column_name"]."\" class=\"form-control\"';
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
                                     <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-danger\">Cancel</a>
                                     <button type=\"submit\" class=\"btn btn-info\"><?php echo \$button ?></button> 
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
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
<script src=\"<?= base_url(); ?>/vendor/assets/libs/jquery/dist/jquery.min.js\"></script>";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>