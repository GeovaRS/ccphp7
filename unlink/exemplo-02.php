<?php
 if(!is_dir("images")) {
  mkdir("images");
 }

 foreach(scandir("images") as $key => $item) {
  if(!in_array($item, array(".", ".."))) {
   unlink("images/" . $item);
  }
 }

 echo "OK!";
?>
