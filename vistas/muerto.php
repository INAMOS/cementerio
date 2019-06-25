<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>


<?php

    include "../database/conexion.php";

    $con=conectar();

    $query="SELECT cedul_cadv,nombr_cadv,apell_cadv,fech_inhum FROM tabla_cadv WHERE codig_fosa=:id AND nro_fosa=:nro";
    $resultado=$con->prepare($query);
    $id=$_GET["id"];
    $nro=$_GET["nro"];
    $resultado->bindParam(":id",$id); 
    $resultado->bindParam(":nro",$nro);
    $resultado->execute();
    $filas=$resultado->fetchAll();

?>
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Datos del cadaver</div>
        <div class="card-body">
            <form action="../action/reg_rest.php?ced=26289114&id=<?php echo $_GET['id']?>" method="POST">
                <fieldset disabled>
                    <div class="form-group">
                        <label for="disabledTextInput">Cedula</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $filas[0]["cedul_cadv"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="disabledTextInput">Nombres</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $filas[0]["nombr_cadv"]. " " . $filas[0]["apell_cadv"] ; ?>">
                    </div>
                    <div class="form-group">
                        <label for="disabledTextInput">Fecha de Inhumacion</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $filas[0]["fech_inhum"];  ?>">
                    </div>
                </fieldset>
                <!-- <div class="form-group">
                    <div class="form-label-group">
                        <input type="date" id="fecha" class="form-control" placeholder="Fecha de Exhumacion"
                            name="fecha_exhu" required="required">
                        <label for="celular">Fecha de Exhumacion</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripcion</label>
                    <textarea name="descr_exhu" class="form-control" id="exampleFormControlTextarea1"
                        rows="2"></textarea>
                </div> -->
                <!-- <input type="submit" class="btn btn-primary btn-block" value="Ingresar"> -->
            </form>

            <input type="submit" class="btn btn-primary btn-block" value="Volver" onclick="location.href='cadaveres.php?id=<?php echo $_GET['id'] ?>'">
            <!-- <div class="text-center">
                <a class="d-block small mt-3" href="login.html">Login Page</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div> -->
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>