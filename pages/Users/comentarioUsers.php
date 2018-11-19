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
	
	$nameObjeto=$_POST['nombre'];
	$autorCommit=$_POST['autor-commint'];
	$comentarioOA=$_POST['comentario'];
	
	//INSERT INTO `TComentarios` (`IdCommit`, `NombreOA`, `autorCommit`, `Comentario`) VALUES ('', '$nameObjeto', '$autorCommit', '$comentarioOA');
	
	
	$consulta = "INSERT INTO `TComentarios` (`IdCommit`, `NombreOA`, `autorCommit`, `Comentario`) VALUES ('', '$nameObjeto', '$autorCommit', '$comentarioOA')";
	$resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error());

	header('Location: ../tablesUsers.php');		
?>
<!--SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=tables.php"-->
