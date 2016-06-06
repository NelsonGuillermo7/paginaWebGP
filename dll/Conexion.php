<?php 
	class Conexion{
		public $user="root";
		public $password="";
		public $server="localhost";
		public $db="mydb";

		public function conectar(){
			$conexion=mysql_connect($this->server,$this->user,$this->password);
			mysql_select_db($this->db);
			if(!$conexion){
				die("No hay conexion".mysql_error());
			}else{
				echo "Conexion exitosa";
			}
		}
		
	}
	$conex= new Conexion;
	$conex->conectar();
	echo "conexion exitosa";
 ?>
