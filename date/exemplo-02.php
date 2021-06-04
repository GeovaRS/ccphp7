<?php
 // echo strtotime("2001-09-11 09:20:01");
 $ts = strtotime("2001-09-11 09:20:01");
 echo date("l, d/m/Y H:i:s", $ts);
 echo "<br />\n";
 $ts = strtotime("now");
 echo date("l, d/m/Y H:i:s", $ts);
 echo "<br />\n";
 $ts = strtotime("+1 day");
 echo date("l, d/m/Y H:i:s", $ts);
 echo "<br />\n";
 $ts = strtotime("+1 week");
 echo date("l, d/m/Y H:i:s", $ts);
 echo "<br />\n";
?>
