<?php

$conexion=new mysqli('localhost','root','','continua03');
class Conexion
{
	private $con;
	function __construct()
	{
		$this->con=new mysqli('localhost','root','','continua03');

	}

	public function getUsers(){
		$query=$this->con->query('SELECT * FROM usuarios');
		$retorno=[];
		$i=0;
		while($fila = $query->fetch_assoc()){
			$retorno[$i]=$fila;
			$i++;
		}
		return $retorno;
	}
}

?>
