<?php
 $link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";
 $content = file_get_contents($link);
 // var_dump($content);
 $parse = parse_url($link);
 // var_dump($parse);
 // var_dump(basename($parse["path"]));
 $baseName = basename($parse["path"]);
 $file = fopen($baseName, "w+");
 fwrite($file, $content);
 fclose($file);
?>

<img src="<?=$baseName?>" />
