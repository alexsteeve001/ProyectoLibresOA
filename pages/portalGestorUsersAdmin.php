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
            <!-- /.navbar-toFp-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <hr>
                        <li>
                            <a href="#"><i class="fa fa-users"></i>  Gestión de Usuarios<span class="fa arrow"></span></a>
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
                    <h1 class="page-header animated zoomIn"> Ingresar Nuevo Administrador</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newAdmin">
                        Nuevo Administardor
                    </button> 
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header animated zoomIn"> Búsqueda de Usuarios</h1>
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
                                                    <th>Nombre Usuario</th>
                                                    <th>Password</th>
                                                    <th>Cedula</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Departamento</th>
                                                    <th>Facultad</th>
                                                    <th>Correo</th>
                                                    <th>Rol</th>
                                                                      
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                   
                                                <?php                                                    
                                                    if (isset($_POST['datoBuscar'])){
                                                        $buscarDato = $_POST['datoBuscar'];
                                                        $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'root', '');    
                                                    $result = $db->query("SELECT * FROM TUsuarios WHERE Nombres like '%$buscarDato%' ");
                                                    foreach($result as $row){
                                   
                                                        echo '<tr>';
                                                        echo '<td>' . $row['NombreUser']. '</td>';
                                                        echo '<td>' . $row['PassUser']. '</td>';
                                                        echo '<td>' . $row['Cedula']. '</td>';
                                                        echo '<td>' . $row['Nombres']. '</td>';
                                                        echo '<td>' . $row['Apellidos']. '</td>';
                                                        echo '<td>' . $row['Departamento']. '</td>';
                                                        echo '<td>' . $row['Facultad']. '</td>';
                                                        echo '<td>' . $row['Correo']. '</td>';
                                                        echo '<td>' . $row['Rol']. '</td>';
                                                        
                                                        echo "<td><a data-toggle='modal' data-target='#editarUser' data-id=".$row['IdUser']." data-cedula=".$row['Cedula']." data-nombres=".$row['Nombres']." data-apellidos=".$row['Apellidos']." data-departamento=".$row['Departamento']." data-facultad=".$row['Facultad']." data-correo=".$row['Correo']." data-rol=".$row['Rol']." class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a></td>"; 
                                                        
                                                        
                                                        
                                                        if($row['PassAdmin']==""){
                                                        echo "<td><a data-toggle='modal' data-target='#enviarUserPass' data-id-send=".$row['IdUser']." data-nick-send=".$row['NombreUser']." data-pass-send=".$row['PassUser']." data-correo-send=".$row['Correo']." class='btn btn-info'><span class='glyphicon glyphicon-envelope'></span>Usuario y Contraseña</a></td>"; 
                                                        }else{
                                                            echo "<td><a data-toggle='modal' data-target='#enviarUserAdmin' data-id-send=".$row['IdUser']." data-nick-send=".$row['NombreUser']." data-pass-send-admin=".$row['PassAdmin']." data-correo-send=".$row['Correo']." class='btn btn-outline btn-info'><span class='glyphicon glyphicon-envelope'></span>Usuario y Contraseña</a></td>"; 
                                                            
                                                        }
                                                        
                                                        
                                                                                                                       
                                                        echo "<td><a class='btn btn-danger' href='admin/eliminarUsuario.php?id=".$row["IdUser"]."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a></td>";
                                                        




                                                        echo '</tr>'; 
                                
                                                        }
                                                        
                                                    }else{
                                                    $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'root', '');    
                                                    $result = $db->query("SELECT * FROM TUsuarios");
                                                    foreach($result as $row){
                                   
                                                        echo '<tr>';
                                                        echo '<td>' . $row['NombreUser']. '</td>';
                                                        echo '<td>' . $row['PassUser']. '</td>';
                                                        echo '<td>' . $row['Cedula']. '</td>';
                                                        echo '<td>' . $row['Nombres']. '</td>';
                                                        echo '<td>' . $row['Apellidos']. '</td>';
                                                        echo '<td>' . $row['Departamento']. '</td>';
                                                        echo '<td>' . $row['Facultad']. '</td>';
                                                        echo '<td>' . $row['Correo']. '</td>';
                                                        echo '<td>' . $row['Rol']. '</td>';

                                                        echo "<td><a data-toggle='modal' data-target='#editarUser' data-id=".$row['IdUser']." data-cedula=".$row['Cedula']." data-nombres=".$row['Nombres']." data-apellidos=".$row['Apellidos']." data-departamento=".$row['Departamento']." data-facultad=".$row['Facultad']." data-correo=".$row['Correo']." data-rol=".$row['Rol']." class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a></td>";
                                                        
                                                        
                                                        
                                                        
                                                        if($row['PassAdmin']==""){
                                                        echo "<td><a data-toggle='modal' data-target='#enviarUserPass' data-id-send=".$row['IdUser']." data-nick-send=".$row['NombreUser']." data-pass-send=".$row['PassUser']." data-correo-send=".$row['Correo']." class='btn btn-info'><span class='glyphicon glyphicon-envelope'></span>Usuario y Contraseña</a></td>"; 
                                                        }else{
                                                            echo "<td><a data-toggle='modal' data-target='#enviarUserAdmin' data-id-send=".$row['IdUser']." data-nick-send=".$row['NombreUser']." data-pass-send-admin=".$row['PassAdmin']." data-correo-send=".$row['Correo']." class='btn btn-outline btn-info'><span class='glyphicon glyphicon-envelope'></span>Usuario y Contraseña</a></td>"; 
                                                            
                                                        }
                                                        
                                                        
                                                        
                                                       
                                                       echo "<td><a class='btn btn-danger' href='admin/eliminarUsuario.php?id=".$row["IdUser"]."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a></td>";      
                                                        

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

            <div class="modal fade" id="editarUser" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Editar</h4>
                        </div>
                        <div class="modal-body">    
                            <form action="admin/updateUsers.php" method="post">
                                <div class="form-group">
                                    <input class="form-control " type="text" id="id" name="id" placeholder="id Usuario" readonly>
                                </div>
                                <div class="form-group">
                                    <label>C.I</label>
                                    <input class="form-control " type="number" id="cedula" name="cedula" placeholder="C.I" required>
                                </div>
                                <div class="form-group">
                                    <label>Nombres:</label>
                                    <input class="form-control " type="text" id="nombres" name="nombres" placeholder="Nombres"  title="Solo letras nada de caracteres especiales" required>
                                </div>
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input class="form-control " type="text" id="apellidos" name="apellidos" placeholder="Apellidos"  title="Solo letras nada de caracteres especiales" required>
                                </div>
                                <div class="form-group">
                                    <label>Departamento: </label>
                                    <select multiple class="form-control" name="Departamento">
                                    <?php
                                        $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'root', '');    
                                            $result = $db->query("SELECT * FROM TDepartamentos");
                                                foreach($result as $row){
                                                    echo '<option>' . $row['NombreDepartamento']. '</option>';
                                                }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Facultad: </label>
                                    <select multiple class="form-control" name="Facultad">
                                    <?php
                                        $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'root', '');    
                                            $result = $db->query("SELECT * FROM TFacultades");
                                            foreach($result as $row){
                                                echo '<option>' . $row['NombreFacultad']. '</option>';
                                            }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input class="form-control " type="text" id="correo" name="correo" placeholder="E-mail" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control " type="text" id="rol" name="rol" placeholder="Rol" readonly>
                                </div>
                                <button type="submit" class="btn btn-outline btn-warning" name="submit">Aceptar</button>                                
                            </form>
                        </div>
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>                                                       
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!--Funcion de asignar Usuario y contraseña-->
            <div class="modal fade" id="enviarUserPass" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Asignar Usuario y Contraseña</h4>
                        </div>
                        <div class="modal-body">    
                            <form action="admin/sendPass.php?id=user" method="post">
                                <div class="form-group">
                                    <input class="form-control " type="text" id="id-send" name="id-send" placeholder="id Usuario" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nick:</label>
                                    <input class="form-control " type="text" id="nick-send" name="nick-send" placeholder="Nick name" required>
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input class="form-control " type="text" id="pass-send" name="pass-send" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label>Correo:</label>
                                    <input class="form-control " type="text" id="correo-send" name="correo-send" placeholder="E-mail" readonly>
                                </div>
                                <button type="submit" class="btn btn-outline btn-warning" name="submit">Enviar!</button>                                
                            </form>
                        </div>
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>                                                       
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Nuevo admin-->
            <div class="modal fade" id="newAdmin" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Ingresar Datos</h4>
                        </div>
                        <div class="modal-body">    
                            <form role="form" method="post" action="nuevoUsuario.php?user=admin">
                            <fieldset>
                                <div class="form-group">
                                    <label>Nombres: </label>
                                    <input class="form-control" placeholder="Nombre.." name="Nombre" type="text" pattern="[A-Za-z ]*" title="Solo letras nada de caracteres especiales" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label>Apellidos: </label>
                                    <input class="form-control" placeholder="Apellido.." name="Apellido" type="text" pattern="[A-Za-z ]*" title="Solo letras nada de caracteres especiales" required>
                                </div>
                                <div class="form-group">
                                    <label>Nombre de Usuario: </label>
                                    <input class="form-control" placeholder="Nick.." name="Nick" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña: </label>
                                    <input class="form-control" placeholder="Contraseña.." name="PasswordAdmin" type="password" required>
                                </div>

                                <div class="form-group">
                                    <label>C.I: </label>
                                    <input class="form-control" placeholder="Cedula.." name="CI" type="number" required>
                                </div>
                                <div class="form-group">
                                    <label>Departamento: </label>
                                    <select multiple class="form-control" name="Departamento">
                                    <?php
                                        $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'root', '');    
                                            $result = $db->query("SELECT * FROM TDepartamentos");
                                                foreach($result as $row){
                                                    echo '<option>' . $row['NombreDepartamento']. '</option>';
                                                }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Facultad: </label>
                                    <select multiple class="form-control" name="Facultad">
                                    <?php
                                        $db = new PDO('mysql:host=localhost;dbname=id4680574_libres;charset=utf8', 'root', '');    
                                            $result = $db->query("SELECT * FROM TFacultades");
                                            foreach($result as $row){
                                                echo '<option>' . $row['NombreFacultad']. '</option>';
                                            }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Correo: </label>
                                    <input class="form-control" placeholder="Correo.." name="Correo" type="email" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Rol.." name="Rol" type="text" value="Administrador" readonly>
                                </div>                                        
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-outline btn-success btn-block" name="submit">Regístrar</button>
                            </fieldset>
                        </form>
                        </div>
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>                                                       
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="modal fade" id="enviarUserAdmin" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Asignar Usuario y Contraseña Administrador</h4>
                        </div>
                        <div class="modal-body">    
                            <form action="admin/sendPass.php?id=admin" method="post">
                                <div class="form-group">
                                    <input class="form-control " type="text" id="id-send" name="id-send" placeholder="id Usuario" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nick:</label>
                                    <input class="form-control " type="text" id="nick-send" name="nick-send" placeholder="Nick name" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control " type="text" id="pass-send-admin" name="pass-send-admin" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label>Correo:</label>
                                    <input class="form-control " type="text" id="correo-send" name="correo-send" placeholder="E-mail" readonly>
                                </div>
                                <button type="submit" class="btn btn-outline btn-warning" name="submit">Enviar!</button>                                
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
          $('#editarUser').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient0 = button.data('id')
          var recipient3 = button.data('cedula')
          var recipient4 = button.data('nombres')
          var recipient5 = button.data('apellidos')
          var recipient6 = button.data('departamento')
          var recipient7 = button.data('facultad')
          var recipient8 = button.data('correo')
          var recipient9 = button.data('rol')

           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
         
          var modal = $(this)        
          modal.find('.modal-body #id').val(recipient0)
          modal.find('.modal-body #cedula').val(recipient3)
          modal.find('.modal-body #nombres').val(recipient4)
          modal.find('.modal-body #apellidos').val(recipient5)
          modal.find('.modal-body #departamento').val(recipient6)
          modal.find('.modal-body #facultad').val(recipient7)       
          modal.find('.modal-body #correo').val(recipient8)
          modal.find('.modal-body #rol').val(recipient9)
        });
        
    </script>  
    
    <script>             
          $('#enviarUserPass').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient10 = button.data('id-send')
          var recipient11 = button.data('nick-send')
          var recipient12 = button.data('pass-send')
          var recipient13 = button.data('correo-send')
          
          var modal = $(this)        
          modal.find('.modal-body #id-send').val(recipient10)
          modal.find('.modal-body #nick-send').val(recipient11)
          modal.find('.modal-body #pass-send').val(recipient12)
          modal.find('.modal-body #correo-send').val(recipient13)
          
        });
        
    </script>  
    <script>             
          $('#enviarUserAdmin').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient14 = button.data('id-send')
          var recipient15 = button.data('nick-send')
          var recipient16 = button.data('pass-send-admin')
          var recipient17 = button.data('correo-send')
          
          var modal = $(this)        
          modal.find('.modal-body #id-send').val(recipient14)
          modal.find('.modal-body #nick-send').val(recipient15)
          modal.find('.modal-body #pass-send-admin').val(recipient16)
          modal.find('.modal-body #correo-send').val(recipient17)
          
        });
        
    </script>  
    



</body>

</html>
