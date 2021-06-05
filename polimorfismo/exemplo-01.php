<?php
 // Polimorfismo
 // Quando a Sobrescrita de Atributos e Métodos
 // da Classe Pai na Classe Extendida
 // Muito utilizado em Classes com Herança
 // Do Grego Muitas Formas

 abstract class Animal {
  public function falar() {
   return "Som";
  }

  public function mover() {
   return "Anda";
  }
 }

 class Cachorro extends Animal {
  public function falar() {
   return "Late";
  }
 }

 class Gato extends Animal {
  public function falar() {
   return "Mia";
  }
 }

 class Passaro extends Animal {
  public function falar() {
   return "Canta";
  }

  public function mover() {
   return "Voa e " . parent::mover();
  }
 }

 $pluto = new Cachorro();
 echo $pluto->falar() . "<br />\n";
 echo $pluto->mover() . "<br />\n";

 echo "-------------" . "<br />\n";

 $garfield = new Gato();
 echo $garfield->falar() . "<br />\n";
 echo $garfield->mover() . "<br />\n";

 echo "-------------" . "<br />\n";

 $ave = new Passaro();
 echo $ave->falar() . "<br />\n";
 echo $ave->mover() . "<br />\n";
?>
