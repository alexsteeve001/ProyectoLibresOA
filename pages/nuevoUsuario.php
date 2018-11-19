<?php
//	$usuario = "id4680574_clientes";
//	$password = "12345678";
	$password = "";
	$usuario="root";
	$servidor = "localhost";
	$basededatos = "id4680574_libres";		
    
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die (mysql_error());
    $db = mysqli_select_db( $conexion, $basededatos ) or die (mysql_error()); 

    $tipoUsuario=$_GET['user'];
    
    @$passAdmin=$_POST['PasswordAdmin'];
    
	@$nickName=$_POST['Nick'];
	@$passUsuario=$_POST['Password'];
	@$cedula=$_POST['CI'];
	@$nombre=$_POST['Nombre'];
	@$apellido=$_POST['Apellido'];
	@$departamento=$_POST['Departamento'];
	@$facultad=$_POST['Facultad'];
	@$correo=$_POST['Correo'];
	@$rol=$_POST['Rol'];

    if(($cedula=="")||($nombre=="")||($apellido=="")||($departamento=="")||($facultad=="")||($correo=="")||($rol=="")){
        if($tipoUsuario=="student"){
            echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=registroEstudiante.php">
              <SCRIPT LANGUAGE="javascript"> 
                alert("Falta Ingresar Campos"); 
              </SCRIPT>';    
        }
        if($tipoUsuario=="teacher"){
            echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=registroProfesor.php">
              <SCRIPT LANGUAGE="javascript"> 
                alert("Falta Ingresar Campos"); 
              </SCRIPT>';
        }
    }else{
        if($tipoUsuario=="teacher"||$tipoUsuario=="student"){
            $consulta = "INSERT INTO TUsuarios (IdUser, NombreUser, PassUser, PassAdmin, Cedula, Nombres, Apellidos, Departamento, Facultad, Correo, Rol) VALUES (NULL, '$nickName', '$passUsuario', '', '$cedula', '$nombre', '$apellido', '$departamento', '$facultad', '$correo', '$rol')";

	    $resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error($consulta)); 
        
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=login.html">
              <SCRIPT LANGUAGE="javascript"> 
                alert("Ingresado con exito"); 
              </SCRIPT>';
        }else{
            $consulta = "INSERT INTO TUsuarios (IdUser, NombreUser, PassUser, PassAdmin, Cedula, Nombres, Apellidos, Departamento, Facultad, Correo, Rol) VALUES (NULL, '$nickName', '', '$passAdmin', '$cedula', '$nombre', '$apellido', '$departamento', '$facultad', '$correo', '$rol')";

	    $resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error($consulta)); 
	    
	    echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=portalGestorUsersAdmin.php">
              <SCRIPT LANGUAGE="javascript"> 
                alert("Ingresado con exito"); 
              </SCRIPT>';
       
        }
        
    }

	
	


?>
