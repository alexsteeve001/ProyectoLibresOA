<?php

$db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'id4680574_clientes', '12345678'); 
$buscar=$_GET['NombreOA'];
$result = $db->query("SELECT * FROM TComentarios WHERE NombreOA like '%$buscar%' ");
$k=mysqli_fetch_object($result);
echo json_encode($k);

/*
if(isset($_POST["employee_id"]))  
 {
     $buscar=$_POST["employee_id"];
     $output = ''; 
     $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'id4680574_clientes', '12345678'); 
     $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">'; 
     $result = $db->query("SELECT * FROM TComentarios WHERE NombreOA like '%$buscar%' ");
        foreach($result as $row){
            $output .= '<tr>
                            <td>'.$row["autorCommit"].'</td>
                            <td>' . $row['Comentario']. '</td>
                        <tr>';
        }
    echo $output;    
 }else{
     echo 'esta mal';
 }
 
/*echo $consultaBusqueda;
echo '<label>Comentarios</label>
      <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Comentario</th>
            </tr>
        </thead>
        <tbody>';
        if(isset($consultaBusqueda)){
        $buscar = $consultaBusqueda;
        $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'id4680574_clientes', '12345678');    
        $result = $db->query("SELECT * FROM TComentarios WHERE NombreOA like '%$buscar%' ");
            foreach($result as $row){
                echo '<tr>';
                echo '<td>' . $row['autorCommit']. '</td>';
                echo '<td>' . $row['Comentario']. '</td>';
                echo '<tr>';
            }
        }else{
            echo 'sin comentarios';
        }
        echo  '</tbody>
               </table>';            */
?>                