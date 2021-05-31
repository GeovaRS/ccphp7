<?php
 $json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';
 // JSON para Array
 $data = json_decode($json, true);
 var_dump($data);

 // JSON para Object
 $data = json_decode($json);
 var_dump($data);
?>
