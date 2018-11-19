<?php
$db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', '', '');    
if(isset($_POST['age'])){
    $buscar=$_POST['age'];
    $result = $db->query("SELECT * FROM TComentarios WHERE NombreOA like '%$buscar%' ");
            foreach($result as $row){
                echo '<tr>';
                echo '<td>' . $row['autorCommit']. '</td>';
                echo '<td>' . $row['Comentario']. '</td>';
                echo '<tr>';
            }
}else{
    echo 'Sin comentarios';
}

?>
