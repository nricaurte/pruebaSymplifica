<?php


class ModeloGeneral extends Database{


    private $_db;


  function __construct()
  {
     $this->_db = new Database();
  }

  public function consultarAsignacionEmpleadorEmpleados()
  {


        $consulta = $this->_db->query('SELECT 
                                            empdor.empdor_nombres,
                                            empdor.empdor_apellidos,
                                            empdor.empdor_cedula,
                                            empdor.empdor_direccion,
                                            empdos.empdos_nombres,
                                            empdos.empdos_apellidos,
                                            empdos.empdos_cedula,
                                            contrato.tipoContrato

                                            FROM asignar_empleados_empleador  as asig
                                            INNER JOIN
                                            empleador as empdor ON empdor.empdor_idempleador = asig.empleador
                                            INNER JOIN
                                            empleados as empdos ON empdos.empdos_idempleado = asig.empleado
                                            INNER JOIN
                                            contrato as contrato ON contrato.idcontrato = empdos.empdos_contrato
                                      ');
        return $consulta ->fetchall(); 

  }

  public function consultarContratos()
  {

        $consulta = $this->_db->query('SELECT * FROM contrato');
        return $consulta ->fetchall(); 

  }

  public function consultarEmpleadores()
  {

        $consulta = $this->_db->query('SELECT * FROM empleador');
        return $consulta ->fetchall();


  }

  public function registrarEmpleador($nombre,$apellido,$sexo,$cedula,$telefono
          ,$direccion,$fechanacimiento)
  {
      $consulta="INSERT INTO empleador VALUES  ('', '".$nombre."','".$sexo."','".$apellido."','".$cedula."','".$telefono."','".$direccion."','".$fechanacimiento."')";
               $this->_db->query($consulta);
      return   $this->_db->lastInsertId();
  }

    public function registrarEmpleado($nombre,$apellido,$sexo,$cedula,$telefono
          ,$contrato,$empleador)
  {
      $consulta="INSERT INTO empleados VALUES  ('', '".$nombre."','".$sexo."','".$apellido."','".$cedula."','".$telefono."','".$contrato."')";
      $this->_db->query($consulta);
      $id = $this->_db->lastInsertId();

      $consulta2="INSERT INTO asignar_empleados_empleador VALUES  ('', '".$empleador."','".$id."',CURRENT_TIMESTAMP)";
      $this->_db->query($consulta2);
      return    $id;
  }



}
?>
