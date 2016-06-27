<?php

require "../server.php";

$_cliente_id = $_GET['id'];

$query = "SELECT * FROM `clientes` WHERE id = $_cliente_id";
$result = $mysqli->query($query);
$_array=array();
if ($result->num_rows > 0) {
    $_array = $result->fetch_object();  
    
}

 

?>

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
		<div class="wrapper">
			<form action="action_update.php" method="POST" role="form">
				<legend>Datos del Cliente</legend>
				<input value="<?php echo $_array->id  ?>" type="hidden" name="cliente_id">
				<div class="form-group">
					<label for="">Nombres</label>
					<input value="<?php echo $_array->nombre  ?>" type="text" name="nombres" class="form-control" id="" placeholder="Nombre" required>
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<input value="<?php echo $_array->email  ?>" type="email" name="email" class="form-control" id="" placeholder="Email" required>
				</div>
				<div class="form-group">
					<label for="">Dominio</label>
					<input value="<?php echo $_array->dominio  ?>" type="text" name="dominio" class="form-control" id="" placeholder="Domunio" required>
				</div>
				<div class="form-group">
					<label for="">Url</label>
					<input value="<?php echo $_array->url  ?>" type="text" name="url" class="form-control" id="" placeholder="Url" required>
				</div>
				<div class="form-group">
					<label for="">Direcci&oacute;n</label>
					<input value="<?php echo $_array->direccion  ?>" type="text" name="direccion" class="form-control" id="" placeholder="Direccion" required>
				</div>
				<div class="form-group">
					<label for="">Comentario</label>
					<textarea   name="comentario" id="input" class="form-control" rows="3" placeholder="Ingresar comentario..." required><?php echo $_array->comentario  ?></textarea>
				</div>
				 
			
				
			
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Registrar</button>
				<a href="form_list.php" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Cancelar</a>
			</form>
		</div>


	</div>


</body>
</html>