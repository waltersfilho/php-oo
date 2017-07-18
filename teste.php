<!DOCTYPE HTML>
<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
    <?php 
  
      class Operacao {
        
        public $x, $y;
        
        function __construct($a, $b){
          $this->x = $a;
          $this->y = $b;
        }
        
        public function calcular(){
          
        }
        public function imprimir(){
          return "A soma teve o valor de:" .calcular() . "<br>";
        }
      }
      class Soma extends Operacao{

        public function calcular(){
          return $this->x + $this->y;
        }
        
         public function imprimir(){
          return "A soma teve o valor de: " . $this->calcular() . "<br>";
        }
      }
    
      class Subtracao extends Operacao{

        public function calcular(){
          return $this->x - $this->y;          
        }
        
        public function imprimir(){
          return "A subtracao teve o valor de:" .$this->calcular() . "<br>";
        }
        
      }
    
      $soma = new Soma(5, 2);
      $subtracao = new Subtracao(5, 2);

      
      echo $soma->:imprimir() . "<br>";
      echo $subtracao->imprimir() . "<br>";

      
    ?>
  </body>
</html>