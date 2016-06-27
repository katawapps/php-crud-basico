<?php require "../server.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../public/css/bootstrap.css">
	<link rel="stylesheet" href="../public/css/style.css">

</head>
<body>
	
	<div class="container">+
		
		<div class="row">

			<div class="col-md-12">
			<h3>Listado de Clientes</h3>
				<div class="pull-right">
				<a href="form_add.php" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Cliente</a>	
				</div>
			</div>
			

		</div>


	 	<table class="table table-hover">
	 		<thead>
	 			<tr>
	 				<th>#</th>
	 				<th>Nombres</th>
	 				<th>Email</th>+
	 				<th>Dominio</th>
	 				<th>Url</th>
	 				<th>Direcci&oacute;n</th>
	 				<th>Ip</th>
	 				<th>Fecha</th>
	 				<th>Comentario</th>
	 				<th width="150"></th>

	 			</tr>
	 		</thead>
	 		<tbody>
	 			<?php 
	 				$query = "SELECT * FROM `clientes` order by id desc limit 10 ";
					$result = $mysqli->query($query);

	 				if ($result->num_rows > 0) {
	 					while ($_row = $result->fetch_object()) { 
	 			?>
	 			<tr>
	 				<td>1</td>
	 				<td><?php echo $_row->nombre ?></td>
	 				<td><?php echo $_row->email ?></td>
	 				<td><?php echo $_row->dominio ?></td>
	 				<td><?php echo $_row->url ?></td>
	 				<td><?php echo $_row->direccion ?></td>
	 				<td><?php echo $_row->fecha ?></td>
	 				<td><?php echo $_row->ip ?></td>
	 				<td><?php echo $_row->comentario ?></td>
	 				<td>
	 				<a href="action_delete.php?id=<?php echo $_row->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	 				<a href="form_update.php?id=<?php echo $_row->id ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	 				</td>
	 				
	 			</tr>
	 			<?php

	 			 }
	 			}

	 			  ?>
	 		</tbody>
	 	</table>


	</div>


</body>
</html>