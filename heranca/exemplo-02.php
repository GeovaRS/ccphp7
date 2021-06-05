<?php
 // Herança
 // Um dos Pilares do Paradigma da Programação Orientada a Objetos.
 // Ocorre Quando Classe(s) herda(m) Atributo(s) e Método(s),
 // desde que seja(m) public/protected, de uma Classe Pai, por extensão.
 // Abstração
 // Generalização/Especificação.
 // Agregação/Composição
 // UML - Unified Modeling Language
 // Código Limpo - Clean Code
 // Padrões de Projeto - Design Patterns
 // Fazer o melhor que se pode, na condição que se tem.
 // Documentos possuem regras de validação de dados e partes em comum.
 // Sempre o Filho que acessa informações do Pai

 class Documento {
  private $numero;

  public function getNumero() {
   return $this->numero;
  }

  public function setNumero($numero) {
   $this->numero = $numero;
  }
 }

 class CPF extends Documento {
  public function validar($cpf): bool {
   $numeroCPF = $this->getNumero();
   // Validação do CPF
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

 $doc = new CPF();
 $doc->setNumero("11122233344");
 $cpf = $doc->getNumero();
 echo "CPF: " . $doc->getNumero();
 var_dump($doc->validar($cpf));
?>
