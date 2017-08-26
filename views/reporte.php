<?php include ROOT.'/templates/header.php'; ?>




<div class="container">

	

<div class="row">
	<div class="col-sm-12">
	<div class="table-responsive">
		<table id="myTable" class="table">
	<thead>
		<tr>
			<th>NOMBRE EMPLEADOR</th>
			<th>CEDULA EMPLEADOR</th>
			<th>DIRECCIÓN EMPLEADOR</th>
			<th>NOMBRE EMPLEADO</th>
            <th>CEDULA EMPLEADO</th>
            <th>TIPO CONTRATO</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($asignacionEmpleadorEmpleadores as $item): ?>

			 <tr id=""> 

				<td><?php echo $item['empdor_nombres'].' '.$item['empdor_apellidos']; ?></td>
				<td><?php echo $item['empdor_cedula']; ?></td>
				<td><?php echo $item['empdor_direccion']; ?></td>
				<td><?php echo $item['empdos_nombres'].' '.$item['empdos_apellidos']; ?></td>
				<td><?php echo $item['empdos_cedula']; ?></td>
				<td><?php echo $item['tipoContrato']; ?></td>
			

			
		   </tr>
	

			
		<?php endforeach ?>
		   
	</tbody>
</table>

	</div>
</div>
</div>



	
</div>





<?php include ROOT.'/templates/footer.php'; ?>



