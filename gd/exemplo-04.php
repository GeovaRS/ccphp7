<?php
 // header("Content-Type: image/jpeg");

 header("Content-Type: image/jpeg");

 $file = "wallpaper.jpg";

 $new_width = 256;
 $new_height = 256;

 // var_dump(getimagesize($file));

 $data = getimagesize($file);

 $width = $data[0];
 $height = $data[1];

 list($old_width, $old_height) = $data = getimagesize($file);

 $new_image = imagecreatetruecolor($new_width, $new_height);
 $old_image = imagecreatefromjpeg($file);

 imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

 imagejpeg($new_image);

 imagedestroy($old_image);
 imagedestroy($new_image);
?>
