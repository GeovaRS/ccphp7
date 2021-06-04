<?php
// Parâmetros Escaláveis
 function somar(float ...$valores):string {
  return array_sum($valores);
 }

 var_dump(somar(2, 2));

 echo somar(2, 2);
 echo "<br />\n";
 echo somar(25, 33);
 echo "<br />\n";
 echo somar(1.5, 3.2);
 echo "<br />\n";
 echo somar(1.5, 3.2, 45, 78);
 echo "<br />\n";

 // O operador SpaceShip <=> é utilizado para fazer comparações combinadas.
 //  Retorna -1 se o valor à direita é maior.
 //  Retorna 0 se os valores de ambos os lados são iguais.
 //  Retorna 1 se o valor à esquerda é maior.

// Exemplo:
 echo 1 <=> 1; // 0
 echo "<br />\n";
 echo 1 <=> 2; // -1
 echo "<br />\n";
 echo 2 <=> 1; // 1
 echo "<br />\n";

 // A vantagem em usar o operador <=> é que ele não se restringe
 // a um determinado tipo, enquanto a função strcmp() limita-se a strings.

 // Em linguagens como Ruby, Perl e Groovy esse operador também está presente.

 // Null Coalescing Operator ?? em PHP
 // Operador de coalescência nula ?? em PHP
 // O operador de coalescência nula (??)
 // Operador lógico que retorna o seu operando do lado direito
 // quando o seu operador do lado esquerdo é null.
 // Caso contrário, ele retorna o seu operando do lado esquerdo.

 // Ao contrário do operador lógico OR (||),
 // o operando esquerdo é retornado se houver um valor falsy (falso)
 // que não seja null.
 // Em outras palavras, se usar || para obter algum valor padrão
 // para outra variável foo, pode enfrentar comportamentos inesperados
 // se considerar algum valor falseável como utilizável
 // (eg. '' ou 0). Veja abaixo alguns exemplos:

 // Este operador já existia em outras linguagens, como C# e Pearl.
 // Parce muito interessante como ele melhora a legibilidade do código
 // ao verificar variáveis.

// A lógica do operador é a seguinte:
// retornar o primeiro valor que exista
// e não seja nulo dentre os valores passados.
// Em alguns casos, para pegar o valor de GET,
// por exemplo, utilizamos a seguinte sintaxe:
$valor = (isset($_GET['id']))? $_GET['id'] : 1;

// O trecho acima verifica se o índice ‘id’ está setado em GET,
// e caso esteja, ele seta na variável $valor,
// caso contrário, é informado o valor 1.

// Já com o operador null coalesce, este trecho fica muito mais claro
// e fácil de entender.
$valor = $_GET['id'] ?? 1;

// O operador ?? (null coalesce) ficará responsável
// por retornar o primeiro valor que existe e não nulo.
// Então, se caso não seja passado um ‘id’ via GET, o valor 1 será setado em $valor.

// Agora, vamos imaginar que temos o seguinte cenário:
// setar um valor na variável $valor, só que este valor pode vir de diversos lugares e há uma ordem a ser seguida de verificação. Como você faria?

// Com o null coalesce isso torna-se muito simples:
$valor = $_GET['id']  ?? $_POST['id'] ?? 1;

// Primeiro, o operador verifica GET,
// caso não exista ou seja nulo, ele irá verificar POST.
// Caso também não exista ou seja nulo, ele irá retornar 1.
?>
