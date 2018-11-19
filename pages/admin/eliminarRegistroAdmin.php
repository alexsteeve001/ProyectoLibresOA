<?php 
session_start();
	
//	$usuario = "id4680574_clientes";
//	$password = "12345678";
	$password = "";
	$usuario="root";
	$servidor = "localhost";
	$basededatos = "id4680574_libres";		
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die (mysql_error());
	$db = mysqli_select_db( $conexion, $basededatos ) or die (mysql_error());
	
	$idObjeto=$_GET['id'];
	
	$consulta = "DELETE FROM TObjetosAprendizaje WHERE IdOA=$idObjeto";
	$resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error());
	
	header('Location: ../tablesAdmin.php');		
?>
