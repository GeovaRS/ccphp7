<?php
 // for($i=date("Y"); $i > date("Y")-100; $i--) {
 //  echo $i . "<br />";
 // }

 echo "<select>\n";
 for($i=date("Y"); $i > date("Y")-100; $i--) {
  echo '<option value="'.$i.'">'.$i.'</option>'."\n";
 }
 echo "</select>";
?>
