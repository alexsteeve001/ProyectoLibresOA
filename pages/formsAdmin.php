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
                <a class="navbar-brand" href="indexAdmin.php">Repositorio de Objetos de Aprendizaje --- Usuario: <?php echo $_SESSION['Nombres'];?> </a>
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
                        <br>                                                
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
                            <a href="formsAdmin.php"><i class="fa fa-edit fa-fw"></i> Importar OA </a>
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
                    <h1 class="page-header animated zoomIn">Importar y Categorizar </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="admin/datosObjetoAdmin.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Objeto de Aprendizaje</label>
                                            <input type="file" id="file" name="subir" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre OA</label>
                                            <input class="form-control" id="nombreOA" placeholder="Nombre OA" name="nameOA" type="text"  title="Solo letras nada de caracteres especiales" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input class="form-control" id="descripcionOA" placeholder="Desscripcion" name="descriptionOA" type="text"  title="Solo letras nada de caracteres especiales" required>
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Institución a la que pertenece</label>
                                            <input class="form-control" id="institucionAutor" placeholder="Institucion" name="institutionOA" type="text"  title="Solo letras nada de caracteres especiales" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Autor</label>
                                            <input class="form-control" id="autorOA" placeholder="Autor" name="authorOA" type="text"  title="Solo letras nada de caracteres especiales" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de creación</label>
                                            <input class="form-control" id="fechaOA" placeholder="Fecha" name="dateOA" type="date" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input class="form-control" id="keywordsOA" placeholder="Keywords" name="keywordsOA" type="text"  title="Solo letras nada de caracteres especiales" required>
                                        </div>
                                        <script>            
                                        document.getElementById('file').addEventListener('change', unzipFile);
                                        function unzipFile(event) {
                                            var eTarget = event.target;
                                            var file = eTarget.files[0];
                                            JSZip.loadAsync(file) // 1) read the Blob
                                            .then(function (zip) {
                                            Object.keys(zip.files).forEach(function (filename) {
                                            if (filename == "contentv3.xml") {
                                                zip.files[filename].async('string').then(function (fileData) {
                                                console.log(fileData) // These are your file contents      
                                                parser = new DOMParser();
                                                xmlDoc = parser.parseFromString(fileData, "text/xml");
                                                dublincore = xmlDoc.children[0].children[0];
                                                for (i = 0; i < dublincore.children.length; i++) {
                                                    if (dublincore.children[i].className=="exe.engine.package.DublinCore") {
                                                        dublincore = dublincore.children[i].children[0];
                                                        break;
                                                    }
                                                }
                                                autor = dublincore.children[5].attributes.value.nodeValue;
                                                fecha = dublincore.children[7].attributes.value.nodeValue;
                                                descripcion = dublincore.children[9].attributes.value.nodeValue;
                                                institucion = dublincore.children[17].attributes.value.nodeValue;
                                                palabrasclave = dublincore.children[25].attributes.value.nodeValue;
                                                titulo = dublincore.children[27].attributes.value.nodeValue;
                                                
                                                document.getElementById("nombreOA").value = titulo;
                                                document.getElementById("descripcionOA").value = descripcion;
                                                document.getElementById("institucionAutor").value = institucion;
                                                document.getElementById("autorOA").value = autor;
                                                document.getElementById("fechaOA").value = fecha;
                                                document.getElementById("keywordsOA").value = palabrasclave;
                                    
                                                })
                                                }
                                                })
                                                });
                                            }
                                        </script>
                                        <button type="submit" class="btn btn-outline btn-success" name="submit">Aceptar</button>
                                        <button type="reset" class="btn btn-outline btn-warning">Cancelar</button>
                                    </form>
                                    
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
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>

</body>

</html>
