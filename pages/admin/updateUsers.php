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
	
	$idUsuario=$_POST['id'];
	$cedulaUsuario=$_POST['cedula'];
	$nombresUsuario=$_POST['nombres'];
	$apellidosUsuarios=$_POST['apellidos'];
	$departamentoUsuario=$_POST['Departamento'];
	$facultadUsuario=$_POST['Facultad'];
	$correoUsuario=$_POST['correo'];
	$rolUsuario=$_POST['rol'];

	$consulta = "UPDATE TUsuarios SET Cedula='$cedulaUsuario',Nombres = '$nombresUsuario', Apellidos = '$apellidosUsuarios', Departamento='$departamentoUsuario' ,Facultad = '$facultadUsuario' , Correo = '$correoUsuario', Rol = '$rolUsuario' WHERE IdUser =$idUsuario";

	$resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error());

	
	header('Location: ../portalGestorUsersAdmin.php');
			
?>
