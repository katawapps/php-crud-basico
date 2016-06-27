<?php 

require "../server.php";
 
$_cliente_id = $_GET['id'];


$_query = "DELETE FROM clientes WHERE id = '$_cliente_id' ";

$result = $mysqli->query($_query);

if ($result ===TRUE) {
	header('location:form_list.php');
}else{
	exit(json_encode(array('status' => FALSE,'message'=>'Error al registrar' )));
}


