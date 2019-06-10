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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vistas/css/sigin.css">
</head>
<!-- BOTONES PRINCIPALES -->

<body>
    <div class="contedor">
        <div>
            <!-- <img src="..\images\logo.png" style="width:150px; height:130px; margin:30px; float:left" id="logo"> -->
            <!-- <div class="menu" style="width:100%;height:100%;" align="center">
	
	<img src="vistas\public\images\logo.png" style="width:7%; height:7%; margin:30px; float:left" id="logo">
	<table style="color:#13AFA3;float:right; width:30%">
	<a href="../index.html" class="button" align="center">  <span class="icon-home" onClick="sistema_menu(1)"></span> Inicio</a>
	<a href="#2" class="button" align="center"> <span class="icon-institution" onClick="sistema_menu(2)"></span>Empresa</a>
	<a href="#2" class="button" align="center"> <span class="icon-legal" onClick="sistema_menu(3)"></span>Ordenanza</a></td>
	<a href="#4" class="button" align="center"> <span class="icon-map-marker" onClick="sistema_menu(4)"></span>Mapa</a>
</div> -->
            <!-- </table> -->
        </div>

        <!-- Image and text -->
        <nav class="navbar navbar-dark bg-dark" style="color:#13AFA3">
            <a class="navbar-brand" href="#">
                <img src="vistas\public\images\logo.png" width="20%" height="20%" class="d-inline-block align-top"
                    alt="">
            </a>


            <ul class="nav justify-content-center" >
                <li class="nav-item">
                
                    <a class="nav-link active" href="index.php" style="color:white"><i class="fa fa-home"></i>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white"><i class="fa fa-university"></i>Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white"><i class="fa fa-gavel" ></i>Ordenanza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white"><i class="fa fa-map-marker"></i>Mapas</a>
                </li>
            </ul>

        </nav>

<!-- 

        <nav class="navbar navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" href="#">
                <img src="vistas\public\images\logo.png" width="20%" height="20%" class="d-inline-block align-top"
                    alt="cementerio">
                    <i class="fa fa-cross"></i>
            </a>

            
            <ul class="navbar-nav ml-auto ml-md-0">
                
                <li class="nav-item">
                    <a class="nav-link active" href="index.php"><i class="fa fa-home"></i>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-university"></i>Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-gavel"></i>Ordenanza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-map-marker"></i>Mapas</a>
                </li>
            </ul>

        </nav> -->


        <!-- <nav>

<img src="vistas\public\images\logo.png" style="width:150px; height:130px; margin:30px; float:left" id="logo">
    
</nav> -->
        <!-- 
        <div style="margin-left:100px; margin-right: 100px; ">
            <marquee style="font-family:Comic Sans MS, Helvetica, sans-serif;" align="center">
                <p>CEMENTERIO MUNICIPAL "ANDRES BELLO"</p>
            </marquee>
        </div> -->



        <!-- FORMULARIO -->

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
                        <a class="d-block small mt-3" href="#">Register an Account</a>
                        <a class="d-block small" href="#">Forgot Password?</a>
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



        <!-- 
        <form class="form-signin">
            <img class="mb-4" src="vistas\public\images\logo.png" alt="" width="40%" height="40%">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required=""
                autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""> -->
        <!-- <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <span class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </span>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Contrasena" aria-label="Username" aria-describedby="basic-addon1" required>
                </div> -->

        <!-- <img class="mb-4" src="vistas\public\images\logo.png" alt="" width="40%" height="40%">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="user" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <span class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </span>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Contrasena" aria-label="Username" aria-describedby="basic-addon1" required>
                </div> -->
        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button> -->
        <!-- <p class="mt-5 mb-3 text-muted">© 2017-2019</p> -->
        <!-- </form> -->




        
        <!-- </div> -->




        <!-- <div class="button_emergentes" style="display:none; text-align:justify;" >
			<table style="width:100%;"><tr>
            <td style="color:#e5dd4e;" align="right"><strong style="cursor:pointer;" onClick="class='button'";>Cerrar</strong></td>
            </tr></table>
            <strong style="color:#e5dd4e;">Misión</strong><br>La misión del Cementerio municipal es  dar sepultura a todas las personas en forma incluyente, sin distinción de procedencia social, género, raza, credo político o religioso; respetando la diversidad de pensamientos y creencias, expresados en los distintos ritos y costumbres que tienen lugar en el interior del Cementerio, entregando a todos, un lugar de reflexión y recogimiento. Todos los servicios del cementerio se realizan con profesionalidad por parte de los trabajadores, mostrando una actitud ética y de respeto hacia las personas usuarias.<br><br>
            <strong style="color:#e5dd4e;">Visión</strong><br>Optimizar el mantenimiento y organización  que debe de existir dentro de esta instalación para que la comunidad utilice este servicio de manera más eficiente. Pero sobre todo, brindar la calidad humana en el servicio necesario en estos momentos tan sensibles, al presentarle soluciones integrales que le permitirán enfocarse en el aspecto afectivo de las circunstancias.<br><br>
            <strong style="color:#e5dd4e;">Objetivo Funcional</strong><br>Promover y ejecutar d manera eficiente y oportuna la ordenanza municipal de administración y mantenimiento del cementerio municipal y demás leyes estatales y nacionales siendo de nuestra gestión dar cumplimiento las siguientes funciones:
            <br><br> A. La estructura orgánica del servicio, su planificación y ordenamiento.<br>B. La realización de las obras, servicios y trabajos necesarios para la reparación, conservación, cuidado y limpieza de los cementerios y, en particular, de sus elementos urbanísticos, jardinería, construcciones e instalaciones, así como para el funcionamiento de éstos.<br>C. La imposición y exacción de tributos, con arreglo a las ordenanzas fiscales, y la regulación de las condiciones de uso y disfrute de las unidades de enterramiento.<br>D. La administración, inspección y control estadístico.<br>E. La inhumación, exhumación, traslado e incineración de cadáveres y la reducción de restos.<br>
        </div> -->
</body>

</html>