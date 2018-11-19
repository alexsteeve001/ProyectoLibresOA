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
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand animated jello" href="indexAdmin.php">Repositorio de Objetos de Aprendizaje --- Usuario: <?php echo $_SESSION['Nombres']." ".$_SESSION['Apellidos']; ?></a>
            </div>
             <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="admin/cerrarCesion.php">
                        Cerrar Sesión <i class="fa fa-sign-out fa-fw"></i>
                    </a>
                </li>
            </ul>
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
            </div>
        </nav>

        <div id="page-wrapper">
           <div>
               <IMG class="animated rollIn" SRC="imagenes/LOGO_EPN.jpg" width="200" height="120"  ALT="logo EPN" ALIGN=LEFT>
               <IMG class="animated slideInRight" SRC="imagenes/exe.jpg" width="150" height="100"  ALT="logo EPN" ALIGN=RIGHT>   
           </div>
           <br>
           <h1 class="animated bounce" style="font-size:500%;text-align:center;">Bienvenido</h1>
           <br>
           <div><h2>Repositorio de Objetos de Aprendizaje</h2></div>
           <br>
           <div>
           <h3>Usuario</h3>
           <h3><?php echo $_SESSION['Rol'];?>: <?php echo $_SESSION['Nombres']." ".$_SESSION['Apellidos'];?> </h3>
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
