<?php 

require "../server.php";


$_post = $_POST;

print_r($_post);

$_nombres = $_post['nombres'];
$_email = $_post['email'];
$_dominio = $_post['dominio'];
$_url = $_post['url'];
$_direccion = $_post['direccion'];
$_comentario = $_post['comentario'];

$_fecha = date('Y-m-d');
$_ip = '127.0.0.1';

$_query = "INSERT INTO `clientes`(`nombre`, `email`, `dominio`, `url`, `direccion`, `fecha`, `ip`, `comentario`) VALUES ('$_nombres','$_email','$_dominio','$_url','$_direccion','$_fecha','$_ip','$_comentario');";

 

$result = $mysqli->query($_query);

if ($result ===TRUE) {
	header('location:form_list.php');
}else{
	exit(json_encode(array('status' => FALSE,'message'=>'Error al registrar' )));
}



 




