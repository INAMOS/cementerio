<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<!-- <div id="wrapper"> -->

<!-- Sidebar -->
<?php include "partials/sidebar.php"; ?>


<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Estos son los registros del cementerio!</h4>
    <hr>
    <p class="mb-0">Aqui puedes ver todas los sepulcros que hay</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<!-- <div class="container">
</div>

<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
   
    <div id="carouselExampleIndicators" class="carousel slide container-fluid" data-ride="carousel" style="padding:30px">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/images/imagenc.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/images/imagen1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/images/imagenc.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <hr class="my-4">
    <div class="card-deck">
        <div class="card">
            <img src="public/images/logo2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Plaza Bolivar</h5>
                <p class="card-text">La Plaza del Libertador.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="public/images/cascada.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cascada Azul</h5>
                <p class="card-text">La cascada de cordero.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="public/images/imagenc.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>

</div>

<div class="jumbotron">




</div> -->

<script>
$('.alert').alert()
</script>

<!-- <div id="content-wrapper">

        <div class="container-fluid"> -->

<!-- Breadcrumbs-->
<!-- <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol> -->

<!-- Icon Cards-->
<!-- <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">26 New Messages!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">11 New Tasks!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">123 New Orders!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-life-ring"></i>
                            </div>
                            <div class="mr-5">13 New Tickets!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div> -->

<!-- Area Chart Example-->
<!-- <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-chart-area"></i>
                    Area Chart Example</div>
                <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div> -->

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data de Ejemplo</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Fosa Nro</th>
                       
                        <!-- <th>Apellido</th> -->
                        <th>Estado</th>
                        <th>Accion</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <tr>
                    <th>Fosa Nro</th>
                       
                       <!-- <th>Apellido</th> -->
                       <th>Estado</th>
                       <th>Accion</th>

                    </tr>
                    </tr>
                </tfoot>
                <tbody>


                    <?php

                 include "../database/conexion.php";

                 $con=conectar();

                 $query="select cedul_cadv, nombr_cadv,apell_cadv,fech_inhum from tabla_cadv";

                 $result=$con->prepare($query);
                 
                $result->execute();
                 

                $fila=$result->fetchAll();

                for($i=0; $i<$_GET["cdn"]; $i++):
                
                ?>
                    <!-- <tr>
                        <td><?php echo $fila[$i]["cedul_cadv"] ?></td>
                        <td><?php echo $fila[$i]["nombr_cadv"] ?></td>
                        <td><?php echo $fila[$i]["apell_cadv"] ?></td>
                        <td><?php echo $fila[$i]["fech_inhum"] ?></td>
                    </tr> -->

                    <tr>
                        <td><?php echo $i+1 ?></td>
                        <td><?php echo "En uso" ?></td>
                        <td><button type="button" class="btn btn-outline-success" onclick="location.href='cadaver.php'">Registrar Cadaver</button></td>
                       
                    </tr>

               
                <?php
                 
                   


                endfor;
                ?>
             
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>



</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->

<?php include "partials/footer.php"; ?>