<?php 
session_start();
if($_SESSION['NombreUser']){	
	session_destroy();
	header("location: ../index.html");
}
else{
	header("location: ../index.html");
}
?>