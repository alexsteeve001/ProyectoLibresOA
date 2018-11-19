<?php
session_start();
$usuarioNombre=$_SESSION['Nombres'];
$fileName=$_GET['nameFile'];
$nombreObjeto=$_GET['OA'];
$autor=$_GET['autor'];

function agregar_zip($dir, $zip) {
  //verificamos si $dir es un directorio
  if (is_dir($dir)) {
    //abrimos el directorio y lo asignamos a $da
    if ($da = opendir($dir)) {
      //leemos del directorio hasta que termine
      while (($archivo = readdir($da)) !== false) {
        /*Si es un directorio imprimimos la ruta
         * y llamamos recursivamente esta función
         * para que verifique dentro del nuevo directorio
         * por mas directorios o archivos
         */
        if (is_dir($dir . $archivo) && $archivo != "." && $archivo != "..") {
          agregar_zip($dir . $archivo . "/", $zip);

        } elseif (is_file($dir . $archivo) && $archivo != "." && $archivo != "..") {
          $zip->addFile($dir . $archivo, $dir . $archivo);
        }
      }
      //cerramos el directorio abierto en el momento
      closedir($da);
    }
  }
} //fin de la función

//creamos una instancia de ZipArchive
$zip = new ZipArchive();
/*directorio a comprimir
 * la barra inclinada al final es importante
 * la ruta debe ser relativa no absoluta
 '../Users/ArchivosUsuariosOA/'.$usuarioNombre.'/'.$nombreOA.''
 */
$dir = '../Users/ArchivosUsuariosOA/'.$autor.'/'.$nombreObjeto.'/';
//$dir = '../'.$nombreObjeto.'/'; 
//ruta donde guardar los archivos zip, ya debe existir
//$rutaFinal = "/home/kevin/Descargas";

$archivoZip = "$fileName"; //nombre del zip
//echo $archivoZip;
 
if ($zip->open($archivoZip, ZIPARCHIVE::CREATE) === true) {
  agregar_zip($dir, $zip);
  $zip->close();
  
header("Content-type: application/octet-stream");
header("Content-disposition: attachment; filename=$archivoZip");
readfile("$archivoZip");
//sleep(1000);
unlink("$archivoZip");//Destruye el archivo temporal
}
?>