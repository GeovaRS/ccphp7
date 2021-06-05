<?php
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
?>
