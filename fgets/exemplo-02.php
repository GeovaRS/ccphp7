<?php
 $fileName = "logo.png";
 $base64 = base64_encode(file_get_contents($fileName));
 $fileInfo = new finfo(FILEINFO_MIME_TYPE);
 $mimeType = $fileInfo->file($fileName);
 // echo "data:image/png;base64," . $base64;
 // echo "data:" . $mimeType . ";base64," . $base64;
 $base64encode = "data:" . $mimeType . ";base64," . $base64;
?>

<a href="<?=$base64encode?>" target="_blank">
 Link para Imagem
</a>

<img src="<?=$base64encode?>" />
