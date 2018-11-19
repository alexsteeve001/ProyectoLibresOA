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

    <title>Objetos de Aprendizajes</title>
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
                <a class="navbar-brand" href="indexUsers.php">Repositorio de objetos de aprendizajes --- Usuario: <?php echo $_SESSION['Nombres'];?></a>
            </div>
             <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="Users/cerrarCesion.php">
                        cerrar cesion <i class="fa fa-sign-out fa-fw"></i>
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
           <h1 class="animated swing" style="text-align:center; font-family:courier; font-size:300%;" >Herramientas de Apoyo</h1>
           <div>
               <h3 class="animated fadeInDownBig" style="text-align:left; font-family:courier;" > GoConqr </h3>
               <p class="animated slideInRight" align="justify">Convertirnos en la plataforma líder en aprendizaje digital a nivel global para así ayudar a educadores y estudiantes a alcanzar su máximo potencial.</p>
               <a class="btn btn-outline btn-danger animated bounceInUp" href="https://www.goconqr.com/es/mapas-mentales/" target=”_blank”> GoConqr </a>
           </div>
           <div>
               <h3 class="animated fadeInLeftBig" style="text-align:left; font-family:courier;" > Audacity </h3>
               <p class="animated slideInRight" align="justify"> Audacity es una aplicación informática multiplataforma libre, que se puede usar para grabación y edición de audio, distribuido bajo la licencia GPL. </p>
               <a class="btn btn-outline btn-success animated bounceInDown" href="https://www.audacityteam.org/download/windows/" target=”_blank”> Audacity </a>
           </div>
           <div>
               <h3 class="animated fadeInUpBig" style="text-align:left; font-family:courier;" > RenderForest </h3>
               <p class="animated slideInRight" align="justify"> Renderforest es un editor de videos basado en la nube para crear videos introductorios para youtube, videos explicativos, tipografía cinética, videos promocionales de productos y servicios, audiovisuales, presentaciones de bodas o viajes, promociones de aplicaciones móviles, invitaciones a eventos, presentaciones corporativas, infografías y mucho más.  </p>
               <a class="btn btn-outline btn-info animated bounceIn" href="https://www.renderforest.com/es/Slideshow" target=”_blank”> RenderForest </a>
           </div>
           <div>
               <h3 class="animated fadeInUpBig" style="text-align:left; font-family:courier;" > Kizoa </h3>
               <p class="animated slideInRight" align="justify"> Kizoa es una herramienta 2.0 muy vistosa para presentar nuestras fotografías, retocarlas, elaborar pases de diapositivas o realizar collages. Es una aplicación fantástica para mostrar en el blog fotos y reportajes de actividades realizadas por los alumnos. La versión gratuita de la herramienta ofrece posibilidades interesantes aunque si queremos ampliar dichas posibilidades también cuentan con Kizoa Premium, un servicio que ofrece más espacio y muchos más efectos y detalles para poner en nuestras fotos. Como es habitual en las herramientas 2.0, los trabajos creados en Kizoa se comparten en redes sociales y se incrustan fácilmente en blogs y páginas web. </p>
               <a class="btn btn-outline btn-info animated bounceIn" href="https://www.kizoa.es/" target=”_blank”> Kizoa </a>
           </div>
	   <div>
               <h3 class="animated fadeInUpBig" style="text-align:left; font-family:courier;" > Hot Potatoes </h3>
               <p class="animated slideInRight" align="justify">  Hot Potatoes es un software para crear ejercicios educativos que posteriormente se pueden realizar a través de la web.

                   Fue desarrollado por el equipo de University of Victoria, CALL Laboratory Research and Development.

                   Este software está diseñado para poder personalizar muchas de las características de las páginas. Por tanto, si el usuario sabe algo de código HTML o de JavaScript, podrá hacer los cambios deseados en la forma de trabajar de los ejercicios o en el formato de las páginas web. </p>
               <a class="btn btn-outline btn-info animated bounceIn" href="https://hotpot.uvic.ca/" target=”_blank”> Hot Potatoes </a>
           </div>
<div>
               <h3 class="animated fadeInUpBig" style="text-align:left; font-family:courier;" > Befunky </h3>
               <p class="animated slideInRight" align="justify">  Editor de Foto en Línea de BeFunky te permite aplicar efectos a las fotos, editarlas y crear collages de fotos con el diseñador de Collage. La edición de fotos y creación de collage de fotos en línea nunca ha sido tan fácil </p>
               <a class="btn btn-outline btn-info animated bounceIn" href="https://www.befunky.com/es/" target=”_blank”> Befunky </a> 
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
