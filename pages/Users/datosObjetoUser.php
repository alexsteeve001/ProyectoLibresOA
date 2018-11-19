<?php 
session_start();
	$usuarioNombre=$_SESSION['Nombres'];
	$carpeta = '../Users/ArchivosUsuariosOA/'.$usuarioNombre.'';
		if (!file_exists($carpeta)) {
    		mkdir($carpeta, 0777, true);
    		chmod($carpeta, 0777);
		}
	
	if (empty($_FILES['subir']['name'])){
		header("location: ../formsUser.php");
		exit;
	}
	
//	$usuario = "id4680574_clientes";
//	$password = "12345678";
	$password = "";
	$usuario="root";
	$servidor = "localhost";
	$basededatos = "id4680574_libres";		
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die (mysql_error());
	$db = mysqli_select_db( $conexion, $basededatos ) or die (mysql_error());

	

	$nombreOA=$_POST['nameOA'];
	$descripcionOA=$_POST['descriptionOA'];
	$institucionAutorOA=$_POST['institutionOA'];
	$autorOA=$_POST['authorOA'];
	$fechaCreacionOA=$_POST['dateOA'];
	$palabrasClaves=$_POST['keywordsOA'];

	
	$carpetaZip = '../Users/ArchivosUsuariosOA/'.$usuarioNombre.'/'.$nombreOA.'';
		if (!file_exists($carpetaZip)) {
    		mkdir($carpetaZip, 0777, true);
    		chmod($carpetaZip, 0777);
		}
		
	$binario_nombre=$_FILES['subir']['name'];
	$ruta=$_FILES['subir']['tmp_name']; //$binario_nombre_tempora
	$binario_peso=$_FILES['subir']['size'];
	$binario_tipo=$_FILES['subir']['type'];

	
	$zip = new ZipArchive;
	if ($zip->open($ruta) === TRUE) 
		{
			$zip->extractTo('../Users/ArchivosUsuariosOA/'.$usuarioNombre.'/'.$nombreOA.'');
			$zip->close();
		}

	$consulta = "INSERT INTO  TObjetosAprendizaje (`IdOA`, `NombreOA`, `Descripcion`, `Institucion`, `Autor`, `Fecha`, `Keywords` , `nombreArchivo` , `tamanioArchivo` , `tipoArchivo`, `Comentario`) VALUES ('','$nombreOA','$descripcionOA','$institucionAutorOA','$autorOA','$fechaCreacionOA','$palabrasClaves', '$binario_nombre','$binario_peso','$binario_tipo', '')";

	$resultado = mysqli_query( $conexion, $consulta ) or die (mysql_error($consulta)); 
	
	header('Location: ../formsUser.php');
		
?>
