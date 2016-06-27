<?php 

require "../server.php";
$_post = $_POST;




$_cliente_id = $_post['cliente_id'];

$_nombres = $_post['nombres'];
$_email = $_post['email'];
$_dominio = $_post['dominio'];
$_url = $_post['url'];
$_direccion = $_post['direccion'];
$_comentario = $_post['comentario'];

$_fecha = date('Y-m-d');
$_ip = '127.0.0.1';

$_query = "";

 UPDATE `clientes` SET `nombre`=[value-2],`email`=[value-3],`dominio`=[value-4],`url`=[value-5],`direccion`=[value-6],`fecha`=[value-7],`ip`=[value-8],`comentario`=[value-9] WHERE  `id` = $_cliente_id;

$result = $mysqli->query($_query);

if ($result ===TRUE) {
	header('location:form_list.php');
}else{
	exit(json_encode(array('status' => FALSE,'message'=>'Error al registrar' )));
}



 




