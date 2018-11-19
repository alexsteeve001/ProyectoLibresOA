<?php
    session_start();    
    
    
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
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
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
                <a class="navbar-brand" href="indexUsers.php">Repositorio de Objetos de Aprendizaje --- Usuario: <?php echo $_SESSION['Nombres'];?></a>
            </div>
             <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="Users/cerrarCesion.php">
                        Cerrar Sesión <i class="fa fa-sign-out fa-fw"></i>
                    </a>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <br>                       
                        <?php
                        if($_SESSION['Rol']=="Profesor"){
                        echo '<li>
                            <a href="tablesUsers.php"><i class="fa fa-table fa-fw"></i> Buscar Objetos</a>
                        </li>';    
                        echo '<li>
                            <a href="formsUser.php"><i class="fa fa-edit fa-fw"></i> Importar OA</a>
                            </li>';    
                        echo '<li>
                            <a href="supportTools.php"><i class="fa fa-wrench"></i> Herramientas de Apoyo</a>
                            </li>';   
                        echo '<li>
                                <a href="exelearning.php"><i class="fa fa-external-link"></i> Exelearning </a>
                              </li>';                                  
                        }
                        if($_SESSION['Rol']=="Administrador"){
                        echo '<li>
                            <a href="#"><i class="fa fa-users"></i> Gestión de Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="portalGestorUsersAdmin.php">Usuarios</a>
                                </li>
                            </ul>
                        </li>';
                        
                        echo '<li>
                            <a href="tablesAdmin.php"><i class="fa fa-table fa-fw"></i> Buscar Objetos</a>
                        </li>';    
                        
                        echo '<li>
                            <a href="formsAdmin.php"><i class="fa fa-edit fa-fw"></i> Importar OA</a>
                            </li>';    
                        echo '<li>
                            <a href="supportTools.php"><i class="fa fa-wrench"></i> Herramientas de Apoyo</a>
                            </li>';   
                        echo '<li>
                                <a href="exelearning.php"><i class="fa fa-external-link"></i> Exelearning </a>
                              </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div align="center">
           <h1 class="animated swing" style="text-align:center; font-family:courier; font-size:300%;" >Exelearning</h1>
           <br>
           <P align="justify">eXeLearning es un programa libre y abierto bajo licencia GPL-2 para ayudar a los docentes en la creación y publicación de contenidos, y que permite a profesores y académicos la publicación de contenidos didácticos en soportes informáticos (CD, memorias USB, en la web, en la nube), sin necesidad de ser ni convertirse en expertos en HTML, XML o HTML5. eXeLearning está disponible en GNU/Linux, Microsoft Windows y Mac OS X.
Los recursos creados en eXeLearning son accesibles en formato XHTML o HTML5. Es posible generar sitios web completos (páginas web navegables). También permite insertar contenidos interactivos en cada página, tales como preguntas y actividades. Ofrece la exportación de los contenidos creados en otros formatos como ePub3 (estándar abierto para libros electrónicos), IMS o SCORM. Estos últimos corresponden a estándares educativos que permiten incorporar los contenidos en herramientas como Moodle o XLIFF (un estándar para la traducción). eXeLearning permite también catalogar los contenidos con diferentes modelos de metadatos: Dublin Core, LOM y LOM-ES.</P>
           <a class="btn btn-outline btn-info animated bounceInUp" href="http://exelearning.net" target=”_blank”> Ir</a>
           </div>
           <div>
               <h3 class="animated fadeInDownBig" style="text-align:left; font-family:courier;" > Características de Exelearning</h3>
               <a class="btn btn-outline btn-danger animated bounceInUp" href="http://exelearning.net/caracteristicas/" target=”_blank”>Caracteristicas</a>
           </div>
           <div>
               <h3 class="animated fadeInDownBig" style="text-align:left; font-family:courier;" > Descarga Exelearning</h3>
               <a class="btn btn-outline btn-warning animated bounceInUp" href="http://exelearning.net/descargas/" target=”_blank”>Descarga</a>
           </div>
        </div>
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>
