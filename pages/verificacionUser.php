<?php
    session_start();
//	$usuario = "id4680574_clientes";
//	$password = "12345678";
	$password = "";
	$usuario="root";
	$servidor = "localhost";
	$basededatos = "id4680574_libres";		
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die (mysql_error());
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die (mysql_error() ); 

	$username=$_POST['nick'];
	$pass=$_POST['password'];
	
	if(($username=="")||($pass=="")){
	    //header('Location: login.html');
	    echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=login.html">
              <SCRIPT LANGUAGE="javascript"> 
                alert("Ingrese Usuario y Contraseña"); 
              </SCRIPT>';
	}else{
	    $consulta = "SELECT * FROM TUsuarios WHERE NombreUser='$username'";
	
	    $sqlAdmin = mysqli_query( $conexion, $consulta ) or die (mysql_error());
	    if($UserAdmin=mysqli_fetch_assoc($sqlAdmin)){
		    if($pass==$UserAdmin['PassAdmin']){
			    $_SESSION['IdUser']=$UserAdmin['IdUser'];
			    $_SESSION['NombreUser']=$UserAdmin['NombreUser'];
			    $_SESSION['Nombres']=$UserAdmin['Nombres'];
			    $_SESSION['Apellidos']=$UserAdmin['Apellidos'];
			    $_SESSION['Rol']=$UserAdmin['Rol'];
			    
			    header('Location: indexAdmin.php');
		    }
		    
	    }
	
	    $sqlUsers = mysqli_query( $conexion, $consulta ) or die (mysql_error());
	    if($Users=mysqli_fetch_assoc($sqlUsers)){
		    if($pass==$Users['PassUser']){
			    $_SESSION['IdUser']=$Users['IdUser'];
			    $_SESSION['NombreUser']=$Users['NombreUser'];
			    $_SESSION['Nombres']=$Users['Nombres'];
			    $_SESSION['Apellidos']=$Users['Apellidos'];
			    $_SESSION['Rol']=$Users['Rol'];
			    
			    header('Location: indexUsers.php');
		    }else{
		        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=login.html">
              <SCRIPT LANGUAGE="javascript"> 
                alert("Usuario o contraseña Incorrecta"); 
              </SCRIPT>';
		    }
	    }else{
	        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=login.html">
              <SCRIPT LANGUAGE="javascript"> 
                alert("Usuario o contraseña Incorrecta");
              </SCRIPT>';
	    }
	}
?>
