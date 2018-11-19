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

	$idObjeto=$_POST['id'];
	$nombreOA=$_POST['nombre'];
	$descripcionOA=$_POST['descripcion'];
	$institucionAutorOA=$_POST['institution'];
	$autorOA=$_POST['autor'];
	$fechaCreacionOA=$_POST['date'];
	$palabrasClaves=$_POST['keywords'];


	
	$consulta = "UPDATE TObjetosAprendizaje SET NombreOA='$nombreOA',Descripcion='$descripcionOA',Institucion='$institucionAutorOA',Autor='$autorOA', Fecha='$fechaCreacionOA', Keywords='$palabrasClaves' WHERE IdOA=$idObjeto";

	$resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error());

	header('Location: ../tablesAdmin.php');		
?>
<!--SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=tables.php"-->
