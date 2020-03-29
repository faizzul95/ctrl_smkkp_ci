<?php
    foreach ($audit as $e) {

        echo "<div class='table-responsive'>";
	       echo "<table class='table table-striped table-bordered table-hover'>";

              echo "<tr><td width='180px'><b>Nama Table </b></td><td>$e->table_name</td></tr>";

              echo "<tr><td width='180px'><b>Data Lama</b></td><td><textarea rows='8' cols='50' class='form-control'>";
              $OriginaloldString = $e->old_values;
              print_r(explode(",",$OriginaloldString)); 
              echo "</textarea></td></tr>"; 

              echo "<tr><td width='180px'><b>Data Baru</b></td><td><textarea rows='8' cols='50' class='form-control'>";
              $OriginalnewString = $e->new_values;
              print_r(explode(",",$OriginalnewString)); 
              echo "</textarea></td></tr>"; 

	            echo "<tr><td width='180px'><b>Tarikh</b></td><td>"; 
                   echo date("d.m.Y", strtotime($e->created_at));
              echo "</td></tr>"; 

              echo "<tr><td width='180px'><b>Masa</b></td><td>";
                   echo date("h:i A", strtotime($e->created_at));
              echo "</td></tr>";

	        echo "</table>";
	    echo "</div>";
    }
?>