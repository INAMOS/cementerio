<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<!-- <div id="wrapper"> -->

<!-- Sidebar -->
<?php include "partials/sidebar.php"; ?>

<?php if(isset($_GET["msj"])): ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading"><?php echo $_GET["msj"]; ?></h4>
    <hr>
    <!-- <p class="mb-0">Aqui puedes ver todas los sepulcros que hay</p> -->
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php endif; ?>




<script>
$('.alert').alert()
</script>


<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data de Ejemplo</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>cantidad sepulcro</th>
                        <th>cedula propietario</th>
                        <th>actividad</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>cantidad de fosas</th>
                        <th>cedula propietario</th>
                        <th>actividad</th>
                    </tr>
                    
                </tfoot>
                <tbody>


                    <?php

                 include "../database/conexion.php";

                 $con=conectar();

                 $query="select * from tabla_sepu";

                 $result=$con->prepare($query);
                 
                $result->execute();
                 

                $fila=$result->fetchAll();

                for($i=0; $i<sizeof($fila); $i++):
                
                ?>
                    <tr>
                        <td><?php echo $fila[$i]["codig_sepu"]; $cod=$fila[$i]["codig_sepu"]; ?></td>
                        <td><?php echo $fila[$i]["descr_sepu"] ?></td>
                        <td><?php echo $fila[$i]["descr_tipo"] ?></td>
                        <td><?php echo $fila[$i]["can_sepu"] ?></td>
                        <td><?php echo $fila[$i]["cedul_prop"] == null ? "Sin Propietario" :  $fila[$i]["cedul_prop"]; $cdn=$fila[$i]["can_sepu"]; ?></td>
                        <td style="text-align:center"><button type="button" class="btn btn-outline-success" onclick="location.href='cadaveres.php?id=<?php echo $cod ?>'">Administrar Sepulcro</button></td>
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