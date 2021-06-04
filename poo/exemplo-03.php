<?php
 class Documento {
  private $numero;

  public function getNumero() {
   return $this->numero;
  }

  public function setNumero($numero) {
   $resultado = Documento::validarCPF($numero);
   if($resultado === false) {
    throw new Exception("CPF informado não é válido.", 1);
   }
   $this->numero = $numero;
  }

  public static function validarCPF($cpf): bool {
   // Verificar se um número foi informado
   if(empty($cpf)) return false;

   // Eliminar possível máscara
   $cpf = preg_replace('[^0-9]', '', $cpf);
   $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

   // Verificar se o número de dígitos informados é igual a 11
   if(strlen($cpf) != 11) {
    return false;
    // Verificar se nenhuma das sequências inválidas abaixo
    // foi digitada.
    // Caso afirmativo, retornar falso
   } else if($cpf == '00000000000' ||
   $cpf == '11111111111' ||
   $cpf == '22222222222' ||
   $cpf == '33333333333' ||
   $cpf == '44444444444' ||
   $cpf == '55555555555' ||
   $cpf == '66666666666' ||
   $cpf == '77777777777' ||
   $cpf == '88888888888' ||
   $cpf == '99999999999') {
    return false;
   } else {
    // Calcular os dígitos verificadores para saber se o CPF é válido
    for($t = 9; $t < 11; $t++) {
     for($d = 0, $c= 0; $c < $t; $c++) {
      $d += $cpf[$c] * (($t + 1) - $c);
     }
     $d = ((10 * $d) % 11) % 10;
     if($cpf[$c] != $d) {
      return false;
     }
    }
    return true;
   }
  }
 }

 // $cpf1 = new Documento();
 // $cpf1->setNumero("32165498712");
 // $cpf->setNumero("61581021135");
 // var_dump($cpf1->getNumero());

 var_dump(Documento::validarCPF("32165498712"));
 var_dump(Documento::validarCPF("61581021135"));
?>
