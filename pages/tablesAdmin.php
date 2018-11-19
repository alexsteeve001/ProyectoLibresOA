<?php
    session_start();
    if (@$_SESSION['Rol']=="") {
        header("Location:login.html");
    }
    if (@$_SESSION['Rol']=="Estudiante") {
        header("Location:login.html");
    }
    if (@$_SESSION['Rol']=="Profesor") {
        header("Location:login.html");
    }    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Objetos de Aprendizaje</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexAdmin.php">Repositorio de Objetos de Aprendizaje --- Usuario: <?php echo $_SESSION['Nombres'];?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                
                <li>
                    <a href="admin/cerrarCesion.php">
                        Cerrar Sesión <i class="fa fa-sign-out fa-fw"></i>
                    </a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <hr>
                        <li>
                            <a href="#"><i class="fa fa-users"></i> Gestión de Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="portalGestorUsersAdmin.php">Usuarios</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tablesAdmin.php"><i class="fa fa-search"></i> Buscar Objetos</a>
                        </li>
                        <li>
                            <a href="formsAdmin.php"><i class="fa fa-edit fa-fw"></i> Importar OA</a>
                        </li>
                       <li>
                            <a href="supportTools.php"><i class="fa fa-wrench"></i> Herramientas de Apoyo</a>
                          </li>
                        <li>
                            <a href="exelearning.php"><i class="fa fa-external-link"></i> Exelearning </a>
                        </li> 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header animated zoomIn"> Búsqueda </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-15">
                                    <form role="form" method="post" action="">
                                        <div class="input-group custom-search-form col-lg-6">
                                            <input type="text" name="datoBuscar" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default"  name="btnBuscar">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>

                                        </div>      
                                        <br>
                                        <br>
                                        <div class="table table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nombre OA</th>
                                                    <th>Descripcion</th>
                                                    <th>Institucion</th>
                                                    <th>Autor</th>
                                                    <th>Fecha</th>
                                                    <th>Keywords</th>
                                                    <th>Nombre del Archivo</th>
                                                    <th>Tamaño del Archivo</th>
                                                    <th>Tipo del Archivo</th>
                                                                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                   
                                                <?php                                                    
                                                    if (isset($_POST['datoBuscar'])){
                                                        $buscarDato = $_POST['datoBuscar'];
                                                        $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'root', '');    
                                                    $result = $db->query("SELECT * FROM TObjetosAprendizaje WHERE NombreOA like '%$buscarDato%' OR Institucion like '%$buscarDato%' OR Autor like '%$buscarDato%' OR Fecha like '%$buscarDato%' OR Keywords like '%$buscarDato%'");
                                                    foreach($result as $row){
                                   
                                                        echo '<tr>';
                                                        echo '<td>' . $row['NombreOA']. '</td>';
                                                        echo '<td>' . $row['Descripcion']. '</td>';
                                                        echo '<td>' . $row['Institucion']. '</td>';
                                                        echo '<td>' . $row['Autor']. '</td>';
                                                        echo '<td>' . $row['Fecha']. '</td>';
                                                        echo '<td>' . $row['Keywords']. '</td>';
                                                        echo '<td>' . $row['nombreArchivo']. '</td>';
                                                        echo '<td>' . $row['tamanioArchivo']. '</td>';
                                                        echo '<td>' . $row['tipoArchivo']. '</td>';
                                                        
                                                        echo "<td><a class='btn btn-success btn-circle btn-lg' href='admin/descargaAdmin.php?nameFile=".$row['nombreArchivo']."&OA=".$row['NombreOA']."&autor=".$row['Autor']."'><i class='fa fa-download'></i></a></td>";
                                                        
                                                        echo "<td><a data-toggle='modal' data-target='#editarOA' data-id=".$row['IdOA']." data-nombre=".$row['NombreOA']." data-descripcion=".$row['Descripcion']." data-institution=".$row['Institucion']." data-autor=".$row['Autor']." data-date=".$row['Fecha']." data-keywords=".$row['Keywords']." class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a></td>"; 
                                                        
                                                        /*echo '<td><button type="button" class="btn btn-info">Desempacar</button></td>';*/
                                                        
                                                        

                                                        


                                                        echo "<td><a class='btn btn-danger' href='admin/eliminarRegistroAdmin.php?id=".$row["IdOA"]."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a></td>";
                                                        




                                                        echo '</tr>'; 
                                
                                                        }
                                                        
                                                    }else{
                                                    $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'root', '');    
                                                    $result = $db->query("SELECT * FROM TObjetosAprendizaje");
                                                    foreach($result as $row){
                                   
                                                        echo '<tr>';
                                                        echo '<td>' . $row['NombreOA']. '</td>';
                                                        echo '<td>' . $row['Descripcion']. '</td>';
                                                        echo '<td>' . $row['Institucion']. '</td>';
                                                        echo '<td>' . $row['Autor']. '</td>';
                                                        echo '<td>' . $row['Fecha']. '</td>';
                                                        echo '<td>' . $row['Keywords']. '</td>';
                                                        echo '<td>' . $row['nombreArchivo']. '</td>';
                                                        echo '<td>' . $row['tamanioArchivo']. '</td>';
                                                        echo '<td>' . $row['tipoArchivo']. '</td>';

                                                        
                                                        echo "<td><a class='btn btn-success btn-circle btn-lg' href='admin/descargaAdmin.php?nameFile=".$row['nombreArchivo']."&OA=".$row['NombreOA']."&autor=".$row['Autor']."'><i class='fa fa-download'></i></a></td>";
                                                        
                                                        
                                                        echo "<td><a data-toggle='modal' data-target='#editarOA' data-id=".$row['IdOA']." data-nombre=".$row['NombreOA']." data-descripcion=".$row['Descripcion']." data-institution=".$row['Institucion']." data-autor=".$row['Autor']." data-date=".$row['Fecha']." data-keywords=".$row['Keywords']." class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a></td>";


                                                        /*echo '<td><button type="button" class="btn btn-info">Desempacar</button></td>';*/

                                                        
                                                        
                                                       echo "<td><a class='btn btn-danger' href='admin/eliminarRegistroAdmin.php?id=".$row["IdOA"]."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a></td>";      
                                                        

                                                        echo '</tr>';


                                                        }
                                                    }                                                     
                                                                                                        
                                                ?>                                                    
                                            </tbody>
                                            </table> 

                                        </div>
                                                                        
                                    </form>
                                    <br>
                                </div>  
                                 
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div> 
            <!--funcion de Editar-->
            <div class="modal fade" id="editarOA" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Editar</h4>
                        </div>
                        <div class="modal-body">    
                            <form action="admin/actualizarDatosAdmin.php" method="post">
                                <div class="form-group">
                                    <input class="form-control " type="text" id="id" name="id" placeholder="idObjetoA" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nombre del OA:</label>
                                    <input class="form-control " type="text" id="nombre" name="nombre" placeholder="Nombre"  pattern="[A-Za-z ]*" title="Solo letras nada de caracteres especiales" required>
                                </div>
                                <div class="form-group">
                                    <label>Descripcion:</label>
                                    <input class="form-control " type="text" id="descripcion" name="descripcion" placeholder="Descripcion" pattern="[A-Za-z ]*" title="Solo letras nada de caracteres especiales" required>
                                </div>
                                <div class="form-group">
                                    <label>Institucion:</label>
                                    <input class="form-control " type="text" id="institution" name="institution" placeholder="Institucion" pattern="[A-Za-z ]*" title="Solo letras nada de caracteres especiales" required>
                                </div>
                                <div class="form-group">
                                    <label>Autor:</label>
                                    <input class="form-control " type="text" id="autor" name="autor" placeholder="Autor" pattern="[A-Za-z ]*" title="Solo letras nada de caracteres especiales" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha:</label>
                                    <input class="form-control " type="date" id="date" name="date" placeholder="Fecha" required>
                                </div>
                                <div class="form-group">
                                    <label>Keywords:</label>
                                    <input class="form-control " type="text" id="keywords" name="keywords" placeholder="Keywords" pattern="[A-Za-z ,-]*" title="Solo letras nada de caracteres especiales" required>
                                </div>
                                <button type="submit" class="btn btn-outline btn-success" name="submit">Aceptar!</button>                                
                            </form>
                        </div>
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>                                                       
                        </div>
                    </div>
                </div>
            </div>
            
            

    </div>
    <!-- /#wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

    <script>             
          $('#editarOA').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient0 = button.data('id')
          var recipient1 = button.data('nombre')
          var recipient2 = button.data('descripcion')
          var recipient3 = button.data('institution')
          var recipient4 = button.data('autor')
          var recipient5 = button.data('date')
          var recipient6 = button.data('keywords')

           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
         
          var modal = $(this)        
          modal.find('.modal-body #id').val(recipient0)
          modal.find('.modal-body #nombre').val(recipient1)
          modal.find('.modal-body #descripcion').val(recipient2)
          modal.find('.modal-body #institution').val(recipient3)
          modal.find('.modal-body #autor').val(recipient4)
          modal.find('.modal-body #date').val(recipient5)
          modal.find('.modal-body #keywords').val(recipient6)       
        });
        
    </script>   
    



</body>

</html>
