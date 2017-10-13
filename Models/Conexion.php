<?php

namespace Models;
class Conexion{
	private $datos = array(
		"host" => 'localhost',
		"user" => 'root',
		"pass" => 'root',
		"db"   => 'aafacebookapi');

	private $con;


	public function __construct(){

		//pmysqli es una clase golbal de php, para llamarla cuando usamos namespaces hay que ponerle la barra invertida asi \mysqli
		$this->con = new \mysqli($this->datos['host'],
								$this->datos['user'],
								$this->datos['pass'],
								$this->datos['db']);
	}

	public function consultaSimple($sql){
		$this->con = query($sql);
	}

	public function consultaRetorno($sql){
		$datos = $this->con->query($sql);
		return $datos;
	}

}

?>