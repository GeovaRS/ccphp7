<?php
 $images = scandir("images");
 // var_dump($images);

 $data = array();

 foreach($images as $img) {
  if(!in_array($img, array(".", ".."))) {
   $fileName = "images".DIRECTORY_SEPARATOR.$img;
   $info = pathinfo($fileName);
   // var_dump($info);

   $info["size"] = filesize($fileName);
   $info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
   $info["url"] = "http://www.grams.lan.br/hcode/ccphp7/s014/a001/aulas/dir/" .str_replace("\\", "/", $fileName);
   array_push($data, $info);
  }
 }

 echo json_encode($data);
?>
