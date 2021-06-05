<?php
 // Interface
 // Organizar o seu próprio código ao desenvolver de forma individual/equipe.
 // Facilitar integração das estruturas de dados e métodos das Classes.
 // Steve Jobs - CEO da Apple Computers
 // Cada programador do iPhone se encarregava de implementar as funcionalidades
 // individualmente e depois integrar no projeto.
 // Na interface não se diz o que os métodos faz.
 // Como uma forma de contrato, que obriga os programadores
 // seguirem regras de implementação definidas para cada funcionalidade.
 // O Desenvolvedor Senior que determina as Interfaces do Projeto.
 // Programador Implementa as Interfaces.
 // Uma Classe pode Implementar Várias Interfaces.
 // Interface Login
 // Interface Segurança
 // Interface Banco de Dados
 // Classe(s) implementará(ão) Interface(s) da forma com foram declaradas.

 interface Veiculo {
  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
 }

 class Civic implements Veiculo {
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

 $carro = new Civic();
 $carro->trocarMarcha(1);
 $carro->acelerar(10);
 $carro->trocarMarcha(2);
 $carro->acelerar(30);
 $carro->trocarMarcha(3);
 $carro->acelerar(55);
 $carro->frenar(10);
?>
