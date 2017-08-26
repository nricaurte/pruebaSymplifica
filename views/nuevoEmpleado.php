<!DOCTYPE html>


<?php include ROOT.'/templates/header.php'; ?>




<div class="container">



<div class="panel-group">
    <div class="card">
		    <div class="card-header">
		    Crear Empleado
		  </div>
        <div class="card-body">

        		<form action="<?php echo URL.'registrarEmpleado/'; ?>" method="POST">


      <div class="row">

<div class="col-sm-6">

        
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombre" placeholder="" required="">

  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="apellido" placeholder="" required>

  </div>



    <div class="form-group">
    <label for="exampleInputEmail1">Sexo</label>
        <select class="chosen-select form-control" name="sexo" id="sexo" required="">
                           <option selected disabled="" value="">Seleccione una opción</option>
                           <option           value="M">Masculino</option>
                           <option           value="F">Femenino</option>
                         
                        </select>

  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Cedula</label>
    <input type="text" class="form-control" name="cedula" id="cedula" aria-describedby="cedula" placeholder="" required>

  </div>
</div>
<div class="col-sm-6">
 <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="telefono" placeholder="" required>

  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Contrato</label>
        <select class="chosen-select form-control" name="contrato" id="contrato" required="">
 <option selected disabled="" value="">Seleccione una opción</option>
        <?php foreach ($contratos as $row): ?>
                   <option           value="<?php echo $row['idcontrato'] ; ?>"><?php echo $row['tipoContrato'] ; ?></option>
          
        <?php endforeach ?>
                          
                  
                 
                         
            </select>

  </div>



    <div class="form-group">
    <label for="exampleInputEmail1">Empleador</label>
        <select class="chosen-select form-control" name="empleador" id="empleador" required="">
 <option selected disabled="" value="">Seleccione una opción</option>
        <?php foreach ($empleadores as $row): ?>
                   <option           value="<?php echo $row['empdor_idempleador'] ; ?>"><?php echo $row['empdor_nombres'].' '.$row['empdor_apellidos']; ?></option>
          
        <?php endforeach ?>
                          
                  
                 
                         
            </select>

  </div>



</div>

           <div class="row">
            <div class="col-sm-12">
              <center>
                 <div class="form-group">
                            
                       <button type="submit" style="margin-left: 20px" class="btn btn-primary">Registrar</button>
                   <button type="reset" class="btn btn-danger">Cancelar</button>
                           
                           </div>
              </center>
            </div>
           </div>


</form>


       
    </div>
</div>





</div>		
		
	</div>
</div>


<br>
<br>
<br>
<br>
<br>





<?php include ROOT.'/templates/footer.php'; ?>



