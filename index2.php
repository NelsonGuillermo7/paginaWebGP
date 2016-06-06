<?php
	 class Figura{
			//atributos
			public $lado1=array();
			public $lado2=array();
			public $resultado=array();
			
			//metodos 
			public function figuraCuadrado($lado1,$lado2){
				$this->lado1[]=$lado1;
				$this->lado2[]=$lado2;
			}
			public function mostrarCuadrado(){
				$resultado;
				$cont;
					for ($i=0; $i <count($this->lado1) ; $i++) { 
						$resultado=$this->lado1[$i]*$this->lado2[$i];
						$this->resultado[$i]=$resultado;
						echo "LADO 1 = ".$this->lado1[$i]."<br>";
						echo "LADO 2 = ".$this->lado2[$i]."<br>";
						echo "RESULTADO = ".$this->resultado[$i]."<br>";
						echo "<br>";
						$cont=$i+1;
					}
					echo "TOTAL PROCESOS INGRESADOS = ".$cont;
			}
	}
		
		$figura = new Figura();
		$figura->figuraCuadrado(8,12);
		$figura->figuraCuadrado(5,8);
		$figura->figuraCuadrado(6,9);
		$figura->figuraCuadrado(4,20);
		$figura->figuraCuadrado(4,19);
		$figura->mostrarCuadrado();

?>