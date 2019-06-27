<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<!-- <div id="wrapper"> -->

<!-- Sidebar -->
<?php include "partials/sidebar.php"; ?>

<?php if(isset($_GET["exi"])): ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading"><?php echo $_GET["exi"]; ?></h4>
    <hr>
    <!-- <p class="mb-0">Aqui puedes ver todas los sepulcros que hay</p>  -->
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php endif; ?>


<script>
$('.alert').alert()
</script>
<!-- <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Estos son los registros del cementerio!</h4>
    <hr>
    <p class="mb-0">Este sepulcro aun no posee propietario, desea asignarle uno?</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> -->

<!-- 
<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div> -->


<?php
 include "../database/conexion.php";

    
$con=conectar();

//  $query="SELECT cedul_cadv,nombr_cadv,apell_cadv,fech_inhum FROM tabla_cadv ";
$id=$_GET["id"];
$query="SELECT cedul_prop FROM tabla_sepu WHERE codig_sepu=:id";

$result=$con->prepare($query);
$result->bindParam(":id",$id);
$result->execute();
 

$fila=$result->fetchAll();


if($fila[0]["cedul_prop"]==null){

?>
<div class="jumbotron">
    <h1 class="display-4">Este sepulcro aun no posee propietario, desea agregarle uno?</h1>
    <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
    <hr class="my-4">
    <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
    <a class="btn btn-primary btn-lg" href="propietario.php?id=<?php echo $_GET["id"]?>" role="button">Agregar</a>
</div>

<?php

}else{

?>


<div class="card">
    <h5 class="card-header">Traspasar Sepulcro</h5>
    <div class="card-body">
        <h5 class="card-title">Sepulcro <?php echo $_GET["id"]?></h5>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <a href="venta.php?id=<?php echo $_GET["id"]?>" class="btn btn-primary">Venta</a>
    </div>
</div>

<hr>

<?php 

}
?>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Fosas</div>
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

                
                $con=conectar();
                // $query="SELECT cedul_cadv,nombr_cadv,apell_cadv,fech_inhum FROM tabla_cadv ";
                $id=$_GET["id"];
                $query="SELECT can_sepu FROM tabla_sepu WHERE codig_sepu=:id";
                // $query="SELECT * FROM tabla_cadv INNER JOIN tabla_sepu ON tabla_cadv.codig_fosa=:id";

                $result=$con->prepare($query);
                $result->bindParam(":id",$id);
                $result->execute();
                 

                $fila=$result->fetchAll();

               

                if(isset($fila[0]["can_sepu"])){
                    
                    $can=$fila[0]["can_sepu"];
                    $res=0;
                    // $query="SELECT * FROM tabla_sepu INNER JOIN tabla_cadv ON tabla_sepu.codig_sepu=:id";
                    // $query="SELECT * FROM tabla_sepu INNER JOIN tabla_cadv ON tabla_sepu.codig_sepu=:id WHERE tabla_sepu.codig_sepu=:id";
                    // $query="SELECT * FROM tabla_sepu INNER JOIN tabla_cadv ON tabla_cadv.codig_fosa=:id";
                    $query="SELECT * FROM tabla_cadv WHERE codig_fosa=:id AND restero=:res ORDER BY nro_fosa";

                    $result=$con->prepare($query);
                    $result->bindParam(":id",$id);
                    $result->bindParam(":res",$res);
                    $result->execute();
                    

                    $fila=$result->fetchAll();
                     $data= array();

                    for($i=0; $i<sizeof($fila); $i++){
                        // $data[$fila[$i]["nro_fosa"]]=$fila[$i]["nro_fosa"];
                        $data[$fila[$i]["nro_fosa"]]=array(
                            
                            "nro" => $fila[$i]["nro_fosa"], 
                            "restero"=>$fila[$i]["restero"]
                        
                        );
                    }

                for($i=0; $i<$can; $i++):
                
                ?>
                    <!-- <tr>
                        <td><?php //echo $fila[$i]["cedul_cadv"] ?></td>
                        <td><?php //echo $fila[$i]["nombr_cadv"] ?></td>
                        <td><?php //echo $fila[$i]["apell_cadv"] ?></td>
                        <td><?php //echo $fila[$i]["fech_inhum"] ?></td>
                    </tr> -->

                    <tr>
                        <td><?php echo $i+1 ?></td>
                        <td><?php 

                            if(isset($data[$i+1])){

                                $n=$i+1;
                                if($data[$n]["nro"]==$n && $data[$n]["restero"] != 1){
                                    
                                    echo "En Uso";             

                                }else{
                                    echo "Disponible";        
                                }
                           
                                // echo  $data[$n]["nro"] == $n ? "En uso":"Disponible" ;

                            }else{
                                echo "Disponible";
                            }
                            // echo  isset($fila[$i]["nro_fosa"]) ? "En uso":"Disponible" 
                            
                            
                        ?></td>
                        <td style="text-align:center">


                            <?php 

                                if(!isset($data[$i+1])){ 

                                    // if($data[$i+1]["restero"] != 1){
                            
                            ?>
                            <button type="button" class="btn btn-outline-success"
                                onclick="location.href='cadaver.php?id=<?php echo $_GET['id'] ?>&nro=<?php echo $i+1 ?>'">Registrar
                                Cadaver</button>
                            <?php 

                                    // }

                            }else if(isset($data[$i+1])){

                                if($data[$i+1]["nro"]==$i+1 && $data[$i+1]["restero"] == 1){
    
                            ?>
                            <button type="button" class="btn btn-outline-success"
                                onclick="location.href='cadaver.php?id=<?php echo $_GET['id'] ?>&nro=<?php echo $i+1 ?>'">Registrar
                                Cadaver</button>

                            <?php
                            } 
                            
                            else{?>


                            <button type="button" class="btn btn-outline-danger"
                                onclick="location.href='muerto.php?id=<?php echo $_GET['id'] ?>&nro=<?php echo $i+1 ?>'">Data
                                del Cadaver</button>
                            <button type="button" class="btn btn-outline-primary"
                                onclick="location.href='restero.php?id=<?php echo $_GET['id'];?>&nro=<?php echo $i+1 ?>'">Restero
                                Cadaver</button>

                            <?php }} ?>

                        </td>

                    </tr>


                    <?php
                 
                endfor;
            
            }
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