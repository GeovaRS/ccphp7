<?php
 // Para tratamento de Datas é preferível utilizar a Classe DateTime
 $dt = new DateTime();
 $periodo = new DateInterval("P15D");

 echo $dt->format("d/m/Y H:i:s");
 echo "<br />\n";

 $dt->add($periodo);

 echo $dt->format("d/m/Y H:i:s");
 echo "<br />\n";
?>
