<?php
 // Classe Abstrata
 // Semelhante a Interface
 // Um Objeto nunca instancia uma Classe Abstrata
 // Forma de Organização
 // Uma Classe só pode herdar de somente uma Classe Abstrata

 interface Veiculo {
  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
 }

 abstract class Automovel implements Veiculo {
  public function acelerar($velocidade) {
   echo "Veículo acelerou até " . $velocidade . " km/h<br />\n";
  }

  public function frenar($velocidade) {
   echo "Veículo frenou até " . $velocidade . " km/h<br />\n";
  }

  public function trocarMarcha($marcha) {
   echo "Veículo engatou a marcha: " . $marcha . "<br />\n";
  }
 }

 class DelRey extends Automovel {
  public function empurrar($velocidade) {
   echo "Veículo empurrado por " . $velocidade . " m/s<br />\n";
  }
 }

 // $carro = new Automovel();
 $carro = new DelRey();
 $carro->acelerar(200);
 $carro->empurrar(1);
?>
