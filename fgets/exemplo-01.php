<?php
 $fileName = "usuarios.csv";
 if(file_exists($fileName)) {
  $file = fopen($fileName, "r");
  // $headers = fgets($file);
  $headers = explode(",", fgets($file));
  // var_dump($headers);

  $data = array();

  while($row = fgets($file)) {
   // var_dump($row);
   $rowData = (explode(",", $row));
   $linha = array();
   for($i = 0; $i < count($headers); $i++) {
    $linha[$headers[$i]] = $rowData[$i];
   }

   array_push($data, $linha);
  }
  fclose($file);

  echo json_encode($data);
 }
?>
