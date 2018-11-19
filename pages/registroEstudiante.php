<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Objetos de Aprendizaje</title>

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

<body background="img/Wood-Background-1-1024x700.jpg">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success ">
                    <div class="panel-heading">
                        <h4>ESTUDIANTE</h4>
                        <h3 class="panel-title">Ingrese los siguientes campos</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="nuevoUsuario.php?user=student">
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
                                    <input class="form-control" placeholder="Contraseña.." name="Password" type="password" required>
                                </div>

                                <div class="form-group">
                                    <label>C.I: </label>
                                    <input class="form-control" placeholder="Cedula.." name="CI" type="number" minlength="10" required>
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
                                    <input class="form-control" placeholder="Rol.." name="Rol" type="text" value="Estudiante" readonly>
                                </div>                                        
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-outline btn-success btn-block" name="submit">Regístrate</button>
                                <a type="button" href="login.html" class="btn btn-lg btn-success btn-block">Cancelar!</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>          



    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
