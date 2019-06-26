<?php

    session_start();

    if(isset($_SESSION["usuario"])){
        header("location:vistas/home.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CEMENTERIO</title>
    <link rel="shortcut icon" href="vistas\public\images\iconcem1.ico">
    <link rel="stylesheet" href="vistas\public\css\inicio.css">
    <link rel="stylesheet" href="vistas\public\images\icon\iconosybsr\style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vistas/css/sigin.css">
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
    <script src="vistas/js/jquery.js"></script>
    <script src="vistas/css/bootstrap-4.3.1-dist/js/bootstrap.min.js""></script>
    <link rel="stylesheet" href="vistas/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="vistas/css/bootstrap-4.3.1-dist/4.3.1/js/bootstrap.min.js"> -->
    
   


    <!-- Page level plugin CSS-->

    <!-- Custom fonts for this template-->
    <link href="vistas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <!-- <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="vistas/css/sb-admin.css" rel="stylesheet">
    <link href="vistas/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>
<!-- BOTONES PRINCIPALES -->

<body>
    <div class="contedor">
        <div>

            <!-- </table> -->
        </div>

        <!-- Image and text -->
        <nav class="navbar navbar-dark bg-dark" style="color:#13AFA3">

            <a class="navbar-brand" href="#">
                <img src="vistas\public\images\icon\iconosybsr\fonts\cross-solid.svg" width="50px" height="50px"
                    class="d-inline-block align-top" style="color:white" alt="">
                Cementerio
            </a>


            <ul class="nav justify-content-center">
                <li class="nav-item">

                    <a class="nav-link active" href="index.php" style="color:white"><i class="fa fa-home"></i>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exampleModal" style="color:white"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-university"></i>Empresa</a>
                    <!-- <button type="button" class="nav-link" data-toggle="modal" data-target="#exampleModal">
  Empresa
</button> -->
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="vistas/pdf/ordenanza.pdf" target="blank" style="color:white"><i class="fa fa-gavel"></i>Ordenanza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white"><i class="fa fa-map-marker"></i>Mapas</a>
                </li>
            </ul>

        </nav>


        <!-- FORMULARIO -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="card card-login mx-auto mt-3">
                <div class="card-header">Iniciar Sesion </div>
                <div class="card-body">
                    <form class="form-group form-signin" action="action/login.php" method="POST">

                        <img class="mb-4" src="vistas\public\images\logo.png" alt="" width="40%" height="40%">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="user" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <span class="input-group-addon">
                                            <i class="fa fa-key"></i>
                                        </span>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Contrasena"
                                    aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>

                            <input type="submit" class="btn btn-primary btn-block" value="Login">
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="#">Recuperar Cuenta</a>
                        <!-- <a class="d-block small" href="#">Forgot Password?</a> -->
                    </div>
                </div>
                <?php
            
                    if(isset($_GET["error"])):                
            
                ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET["error"]?>
                </div>

                <?php
                        unset($_GET["error"]);
                        endif;
                ?>

            </div>

        </div>

       
      <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Misión</strong><br>
           <p> La misión del Cementerio municipal es  dar sepultura a todas las personas en forma incluyente, sin distinción de procedencia social, género, raza, credo político o religioso; respetando la diversidad de pensamientos y creencias, expresados en los distintos ritos y costumbres que tienen lugar en el interior del Cementerio, entregando a todos, un lugar de reflexión y recogimiento. Todos los servicios del cementerio se realizan con profesionalidad por parte de los trabajadores, mostrando una actitud ética y de respeto hacia las personas usuarias. </p>
 <strong>VISIÓN</strong><br>


<p>Optimizar el mantenimiento y organización  que debe de existir dentro de esta instalación para que la comunidad utilice este servicio de manera más eficiente. Pero sobre todo, brindar la calidad humana en el servicio necesario en estos momentos tan sensibles, al presentarle soluciones integrales que le permitirán enfocarse en el aspecto afectivo de las circunstancias.
 </p>
<strong>OBJETIVO FUNCIONAL</strong>

<p>
Promover y ejecutar d manera eficiente y oportuna la ordenanza municipal de administración y mantenimiento del cementerio municipal y demás leyes estatales y nacionales siendo de nuestra gestión dar cumplimiento las siguientes funciones:
A. La estructura orgánica del servicio, su planificación y ordenamiento.
B. La realización de las obras, servicios y trabajos necesarios para la reparación, conservación, cuidado y limpieza de los cementerios y, en particular, de sus elementos urbanísticos, jardinería, construcciones e instalaciones, así como para el funcionamiento de éstos.
C. La imposición y exacción de tributos, con arreglo a las ordenanzas fiscales, y la regulación de las condiciones de uso y disfrute de las unidades de enterramiento.
D. La administración, inspección y control estadístico.
E. La inhumación, exhumación, traslado e incineración de cadáveres y la reducción de restos.</p>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


        


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1"></script>


</body>

</html>