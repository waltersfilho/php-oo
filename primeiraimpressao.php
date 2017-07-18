<!DOCTYPE HTML>
<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
    <?php
	
		abstract class Operacao {
			
			//forca a classe que estende a classe abstrata a definir o metodo
			abstract protected function calcular($x, $y);
			
		}
	  
		class Soma extends Operacao {
			
			public function calcular($x, $y) {
				return $x + $y;
			}
			
		}

		class Subtracao extends Operacao {
			
			public function calcular($x, $y) {
				return $x - $y;
			}
			
		}
		
		class Conta{
			
			public function mostrarCalculo(Operacao $operacao, $x, $y ){
				return "O calculo teve o valor de: {$operacao->calcular($x, $y)}";
			}
			
		}
		
		$conta = new Conta;
		echo $conta->mostrarCalculo(new Soma,3, 2) . "<br>";
		echo $conta->mostrarCalculo(new Subtracao,3, 2);
	  
    ?>
  </body>
</html>