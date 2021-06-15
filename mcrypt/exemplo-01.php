<?php
 $data = [
  "nome"=>"HCode"
 ];

 define("SECRET", pack("a16", "senha"));

 $mcrypt = mcrypt_encrypt(
  MCRYPT_RIJNDAEL_128,
  SECRET,
  json_encode($data),
  MCRYPT_MODE_ECB
 );
 
 // var_dump(base64_encode($mcrypt));

 $final = base64_encode($mcrypt);

 var_dump($final);

 $string = mcrypt_decrypt(
  MCRYPT_RIJNDAEL_128,
  SECRET,
  base64_decode($final),
  MCRYPT_MODE_ECB
 );

 // echo $string;
 // var_dump($string);
 var_dump(json_decode($string, true));

 var_dump(PHP_VERSION);
?>