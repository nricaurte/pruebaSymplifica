<?php



define('ROOT', __DIR__);


require_once ROOT.'/app/Config.php';
require_once ROOT.'/app/Controller.php';
require_once ROOT.'/app/DataBase.php';
require_once ROOT.'/ModeloGeneral.php';
require_once ROOT.'/controladorGeneral.php';

$URL = isset($_GET['url']) ? $_GET['url']  : 'index'; 

$controlador = new ControladorGeneral();

switch ($URL) {

	case 'index': case 'index/': 
	 $controlador->indexAction();
	break;

// Reportes
	case 'reporte': case 'reporte/':
	 $controlador->reportesAction();
	break;

//Empleador

	case 'nuevoEmpleador': case 'nuevoEmpleador/':
	 $controlador->nuevoEmpleadorAction();
	break;

	case 'registrarEmpleador/':
	 $controlador->registrarEmpleadorAction();
	break;


///Empleados

	case 'nuevoEmpleado': case 'nuevoEmpleado/':
	 $controlador->nuevoEmpleadoAction();
	break;

	case 'registrarEmpleado/':

	 $controlador->registrarEmpleadoAction();
	break;






	
	default:
			 $controlador->indexAction();
		break;
}

	
