<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>


<?php

include "../database/conexion.php";

$con=conectar();

$query="SELECT cedul_prop FROM tabla_sepu WHERE codig_sepu=:codig";
$resultado=$con->prepare($query);
$cod=$_GET["id"];
$resultado->bindParam(":codig",$cod);

if($resultado->execute()){

    
    $filas=$resultado->fetchAll();

    $query="SELECT cedul_prop,nombr_prop,apell_prop,direcc_pro FROM tabla_prop WHERE cedul_prop=:cedu";
    $resultado=$con->prepare($query);
    $ced=$filas[0]["cedul_prop"];
    $resultado->bindParam(":cedu",$ced);

    $resultado->execute();

    $filas=$resultado->fetchAll();
}

?>

<div class="container">

    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Antiguo Propietario</div>
        <div class="card-body">
            <form action="../action/reg_vent.php" method="POST">

                <fieldset disabled>
                    <div class="form-group">
                        <label for="disabledTextInput">Cedula</label>
                        <input type="text" id="disabledTextInput" class="form-control"
                            placeholder="<?php echo $filas[0]["cedul_prop"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="disabledTextInput">Nombres</label>
                        <input type="text" id="disabledTextInput" class="form-control"
                            placeholder="<?php echo $filas[0]["nombr_prop"]. " " . $filas[0]["apell_prop"] ; ?>">
                    </div>
                    <div class="form-group">
                        <label for="disabledTextInput">Direccion</label>
                        <input type="text" id="disabledTextInput" class="form-control"
                            placeholder="<?php echo $filas[0]["direcc_pro"];  ?>">
                    </div>
                </fieldset>

            </form>

        </div>
    </div>

    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Venta</div>
        <div class="card-body">
            <form action="../action/reg_vent.php?id=<?php echo $_GET['id']?>&ced=<?php echo $filas[0]["cedul_prop"] ?>" method="POST">

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="cedula" class="form-control" name="cedul_comp"
                            placeholder="Email address" required="required" autofocus="autofocus">
                        <label for="cedula">Cedula</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="firstName" class="form-control" name="nombr_comp"
                                    placeholder="First name" required="required">
                                <label for="firstName">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" class="form-control" name="apell_comp"
                                    placeholder="Nombre" required="required">
                                <label for="lastName">Apellido</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="tel" id="celular" class="form-control" placeholder="Email address"
                            name="celul_comp" required>
                        <label for="celular">Celular</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="tel" id="telefono" class="form-control" placeholder="Email address"
                            name="telef_comp" required>
                        <label for="telefono">Telefono</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                            name="correo_com" required>
                        <label for="inputEmail">Email</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Direccion</label>
                    <textarea name="direcc_com" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        required></textarea>

                </div>

                <input type="submit" class="btn btn-primary btn-block" value="Registrar">
            </form>
            <!-- <div class="text-center">
                <a class="d-block small mt-3" href="login.html">Login Page</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div> -->
        </div>
    </div>
    <br>
    <br>
</div>

<?php include "partials/footer.php"; ?>