<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', 'http://localhost:8888/PHPModerno/');

	require_once 'Config/Autoload.php';
	Config\Autoload::run();
	Config\Enrutador::run(new Config\Request());
	//Accedo a la clase desde el namespace

	Models\Persona::Hola();
	Controllers\PersonaControllers::Hola();




?>