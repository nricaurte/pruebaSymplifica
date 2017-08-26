<?php


class ControladorGeneral extends Controller
{
	private $model;
	function __construct()
	{
		
     $this->model = new ModeloGeneral();
	}


	public function  indexAction()
	{


	 $this->renderView('index.php',array('Titulo'   => 'Menu'
				     	                ));

	}




	public function  reportesAction()
	{


	 $this->renderView('reporte.php',array('Titulo'   => 'Reportes',
					     	              'asignacionEmpleadorEmpleadores' => $this->model->consultarAsignacionEmpleadorEmpleados(),
				     	                ));

	}

	public function nuevoEmpleadorAction()
	{

  
     $this->renderView('nuevoEmpleador.php',array('Titulo'   => 'Nuevo Empleador'));

	}



	public function nuevoEmpleadoAction()
	{

  
     $this->renderView('nuevoEmpleado.php',array('Titulo'   => 'Nuevo Empleado',
     	                                         'contratos' => $this->model->consultarContratos(),
     	                                         'empleadores' => $this->model->consultarEmpleadores(),

     	                                         )
                                                );

	}

	public function registrarEmpleadorAction()
	{



		  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			   
			  $resultado =  $this->model->registrarEmpleador($_POST['nombre'],$_POST['apellido'],$_POST['sexo'],$_POST['cedula'],$_POST['telefono']
			  	,$_POST['direccion'],$_POST['fechanacimiento']);

			  if ($resultado != NULL) {
			  	 $this->redirect('index');
			  }

		   }

        

	}

	public function registrarEmpleadoAction()
	{

			  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			   
			  $resultado =  $this->model->registrarEmpleado($_POST['nombre'],$_POST['apellido'],$_POST['sexo'],$_POST['cedula'],$_POST['telefono']
			  	,$_POST['contrato'],$_POST['empleador']);

			  if ($resultado != NULL) {
			  	 $this->redirect('index');
			  }

		   }



	}








}

