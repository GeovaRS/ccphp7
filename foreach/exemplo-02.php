<!DOCTYPE html>
<html lang="pt-BR">
 <head>
  <title>PHP7 - Exemplo-02</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/ico/favicon.ico" />
  <link rel="stylesheet" href="assets/css/index.css" />
 </head>
 <body>
  <form>
   <label for="nome">Nome:</label>
   <input type="text" name="nome" id="nome" placeholder="Digite o Nome" /><br />
   <label for="nascimento">Data de Nascimento:</label>
   <input type="date" name="nascimento" id="nascimento"
   placeholder="Digite a Data de Nascimento" /><br />
   <input type="submit" value="OK" />
  </form>
  <hr />

  <?php
   if(isset($_GET)) {
    foreach($_GET as $key => $value) {
     echo "Nome do Campo: " . $key;
     echo "<br />";
     echo "Valor do Campo: " . $value;
     echo "<hr />";
    }
   }
  ?>

  <script src="assets/js/index.js"></script>
 </body>
</html>
