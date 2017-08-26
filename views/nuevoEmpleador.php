<!DOCTYPE html>


<?php include ROOT.'/templates/header.php'; ?>




<div class="container">



<div class="panel-group">
    <div class="card">
		    <div class="card-header">
		    Crear Empleador
		  </div>
        <div class="card-body">

        		<form action="<?php echo URL.'registrarEmpleador/'; ?>" method="POST">


      <div class="row">

<div class="col-sm-6">

        
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombre" placeholder="" required>

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
    <label for="exampleInputEmail1">Dirección</label>
    <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="direccion" placeholder="" required>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" aria-describedby="fechanacimiento" placeholder="" required>

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



