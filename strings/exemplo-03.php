<?php
 //  ereg() não existem a partir do PHP7 (Foram removidas/depreciadas)
 $empresa = "HCode";
 $empresa = str_replace("o", "0", $empresa);
 $empresa = str_replace("e", "3", $empresa);
 echo $empresa;
?>
