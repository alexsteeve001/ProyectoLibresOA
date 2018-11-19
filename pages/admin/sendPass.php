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
	
	$usuario=$_GET['id'];
	
	@$idUsuario=$_POST['id-send'];
	@$nickUsuario=$_POST['nick-send'];
	@$passAdministrador=$_POST['pass-send-admin'];
	@$passUsuario=$_POST['pass-send'];
	@$correoUsuario=$_POST['correo-send'];
	
	if($usuario=="user"){
	    //***************************** envio de mail
    $subject = "Usuario y contraseña para acceder al repositorio de Objetos de aprendizajes";
    $txt = "Usuario: $nickUsuario \n Password: $passUsuario";
    $headers = "From: repositoriooa.000webhostapp.com" . "\r\n";

    mail($correoUsuario,$subject,$txt,$headers);
    //************************************************
    $consulta = "UPDATE TUsuarios SET NombreUser = '$nickUsuario', PassUser = '$passUsuario' WHERE IdUser =$idUsuario";
    $resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error());
	}else{
	    $subject = "Usuario y contraseña para acceder al repositorio de Objetos de aprendizajes como Administrador";
    $txt = "Usuario: $nickUsuario \n Password: $passAdministrador";
    $headers = "From: repositoriooa.000webhostapp.com" . "\r\n";

    mail($correoUsuario,$subject,$txt,$headers);
    //************************************************
    $consulta = "UPDATE TUsuarios SET NombreUser = '$nickUsuario', PassAdmin = '$passAdministrador' WHERE IdUser =$idUsuario";
    $resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error());
	}
	


	

	

	header('Location: ../portalGestorUsersAdmin.php');
			
?>
