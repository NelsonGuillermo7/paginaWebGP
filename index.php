<?php 
	class Persona{
		//atributos
		public $nombre= array();
		public $apellido=array();
		public $edad= array();
		public $comparacion=array();
		//metodos
		public function guardar($nombre,$apellido,$edad){
			$this->nombre[]=$nombre;
			$this->apellido[]=$apellido;
			$this->edad[]=$edad;

		}
		public function mostrar(){
			for ($i=0; $i <count($this->nombre) ; $i++) { 
				$this->formato($this->nombre[$i], $this->apellido[$i],$this->edad[$i]);
			}
		}
		public function formato($nombre,$apellido,$edad){
			//comaparacion par o impar
			$comp;
			if($edad%2==0){
				$this->comaparacion[]=0;
				$comp="Es Par";
			}else{

				$this->comaparacion[]=1;
				$comp="Es Impar";
			}
			echo "<td>NOMBRE:</td>  ". $nombre . "/APELLIDO:  ". $apellido."// EDAD: ".	$edad."///".$comp. "<br>";

		}
	}
	$persona = new Persona();
	$persona->guardar("Carlos","Sanmartin",20);
	$persona->guardar("Gonzalo","Sanmartin",18);
	$persona->guardar("Brayan","Hidalgo",5);
	$persona->mostrar();
	$persona->gua
 ?>