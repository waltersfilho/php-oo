<!DOCTYPE HTML>
<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
    <?php
	
		abstract class Operacao{
			
			//forca a classe que estende a classe abstrata a definir o metodo
			abstract protected function calcular($x, $y);
			
			//metodo comum
			public function imprimir($x, $y){
				return "O calculo teve o valor de {calcular($x, $y)} <br>";
			}
		}
	  
		class Soma extends Operacao{
			
			public function calcular($x, $y) {
				return $x + $y;
			}
			
		}

		class Subtracao extends Operacao{
			
			public function calcular($x, $y) {
				return $x - $y;
			}
			
			public function imprimir($x, $y){
				return "Subtracao teve o valor de {calcular($x, $y)} <br>";
			}
			
		}
		
		$soma = new Soma;
		echo $soma->imprimir(3, 2);
		
		$subtracao = new Subtracao;
		echo $subtracao->imprimir(3, 2);
	  
    ?>
  </body>
</html>