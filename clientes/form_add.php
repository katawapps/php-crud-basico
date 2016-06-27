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
			<form action="action_add.php" method="POST" role="form">
				<legend>Datos del Cliente</legend>
			
				<div class="form-group">
					<label for="">Nombres</label>
					<input type="text" name="nombres" class="form-control" id="" placeholder="Nombre" required>
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name="email" class="form-control" id="" placeholder="Email" required>
				</div>
				<div class="form-group">
					<label for="">Dominio</label>
					<input type="text" name="dominio" class="form-control" id="" placeholder="Domunio" required>
				</div>
				<div class="form-group">
					<label for="">Url</label>
					<input type="text" name="url" class="form-control" id="" placeholder="Url" required>
				</div>
				<div class="form-group">
					<label for="">Direcci&oacute;n</label>
					<input type="text" name="direccion" class="form-control" id="" placeholder="Direccion" required>
				</div>
				<div class="form-group">
					<label for="">Comentario</label>
					<textarea   name="comentario" id="input" class="form-control" rows="3" placeholder="Ingresar comentario..." required></textarea>
				</div>
				 
			
				
			
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Registrar</button>
				<a href="form_list.php" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Cancelar</a>
			</form>
		</div>


	</div>


</body>
</html>