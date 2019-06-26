<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<!-- <div id="wrapper"> -->
<?php include "partials/sidebar.php"; ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">RESTERO</h4>
    <hr>
    <p class="mb-0">Aqui puedes ver los cadaveres que estan en el restero</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>fecha de exhumacion</th>
                        <th>Codigo del sepulcro</th>
                        <th>Cedula del cadaver</th>
                        <th>Descripcion de la exhumacion</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr> 
                       <th>fecha de exhumacion</th>
                        <th>Codigo del sepulcro</th>
                        <th>Cedula del cadaver</th>
                        <th>Descripcion de la exhumacion</th>
                    </tr>
                    
                </tfoot>
                <tbody>


                    <?php

                 include "../database/conexion.php";

                 $con=conectar();

                 $query="select * from tabla_exhu";

                 $result=$con->prepare($query);
                 
                $result->execute();
                 

                $fila=$result->fetchAll();

                for($i=0; $i<sizeof($fila); $i++):
                
                ?>
                    <tr>
                        <td><?php echo $fila[$i]["fecha_exhu"]; $cod=$fila[$i]["fecha_exhu"]; ?></td>
                        <td><?php echo $fila[$i]["cod_sep"] ?></td>
                        <td><?php echo $fila[$i]["cedul_c"] ?></td>
                        <td><?php echo $fila[$i]["descr_exhu"] ?></td>
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