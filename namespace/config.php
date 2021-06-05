<?php
 spl_autoload_register(function($nameClass) {
  // var_dump($nameClass);

  $dirClass = "class";
  // $fileName = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";
  // var_dump($fileName);
  $path = $dirClass.DIRECTORY_SEPARATOR.$nameClass;
  $fileName = str_replace("\\", "/", $path . ".php");
  // var_dump($fileName);
  if(file_exists($fileName)) {
   require_once($fileName);
  }
 });
?>
