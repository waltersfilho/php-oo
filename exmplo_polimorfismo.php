<!DOCTYPE HTML>
<html>
  <head>
    <title>PHP</title>
    <meta charset="UTF-8"><!-- essa tag seleciona tabela de caracteres para suportar acentos -->
    
  </head>
  <body>
    <?php
	
		abstract class Funcionario {
      private $salario_base = 1000;
      
      public function getSalario(){
        return $this->salario_base;
      }
      
      public function setSalario($salario){
        $this->salario_base = $salario;
      }
      	
			//forca a classe que estende a classe abstrata a definir o metodo
			abstract protected function calcular_salario();
			
		}
	  
		class Efetivado extends Funcionario {
			
      //Override
			public function calcular_salario() {
        $salario_final = getSalario() * 1.15;
				return $salario_final;
			}
			
		}

		class Estagiario extends Funcionario {
			
      //Override
			public function calcular_salario() {
        $salario_final = getSalario() * 0.9;
				return $salario_final;
			}
			
		}
    
    class Gerente extends Funcionario {
			
      //Override
			public function calcular_salario() {
        $salario_final = parent::getSalario() * 1.5;
				return $salario_final;
			}
			
		}
    
    class GerenteSenior extends Gerente{
      
      //Override
      public function calcular_salario() {
        $salario_final = parent::getSalario() * 1.7;
				return $salario_final;
			}
    }
		
    
    
		$gerente = new Gerente();
    $gerenteSenior = new GerenteSenior();
    
    echo ("O salário base do gerente é:" . $funcionario->salario_base()) . "<br>";
    echo ("O salário final do gerente é:" + $gerente->calcular_salario()) . "<br>";
    echo ("O salário final do gerente é:" . $gerente->calcular_salario()) . "<br>";
    echo ("O salário final do gerente é:" . $gerenteSenior->calcular_salario());
    //a concatenação de strings pode ser feito por "+" ou "."
	  
    ?>
  </body>
</html>