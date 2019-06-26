<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>

<?php

include "../database/conexion.php";

$con=conectar();

$query="SELECT descr_tipo FROM tabla_sepu WHERE codig_sepu=:codig";
$resultado=$con->prepare($query);
$cod=$_GET["id"];
$resultado->bindParam(":codig",$cod);

if($resultado->execute()){
    
    $filas=$resultado->fetchAll();
}

?>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar de Cadaver</div>
        <div class="card-body">
            <form action="../action/reg_cdv.php?nro=<?php echo $_GET['nro'] ?>" method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="cedula" class="form-control" name="cedul_cadv"
                            placeholder="Email address" required="required" autofocus="autofocus">
                        <label for="cedula">Cedula</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="firstName" class="form-control" name="nombr_cdv"
                                    placeholder="First name" required="required">
                                <label for="firstName">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" class="form-control" name="apell_cadv"
                                    placeholder="Nombre" required="required">
                                <label for="lastName">Apellido</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="date" id="fecha" class="form-control" placeholder="Fecha de Inhumacion"
                            name="fecha_inhum" required="required">
                        <label for="celular">Fecha de Inhumacion</label>
                    </div>
                </div>

                <?php if($filas[0]["descr_tipo"]=="publico"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="mensaje"
                    style="display:none">
                    <h4 class="alert-heading">Este cadaver ya tiene 7 años</h4>
                    <hr>
                    <!-- <p class="mb-0">Aqui puedes ver todas los sepulcros que hay</p> -->
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif;?>


                <input type="hidden" name="cod_fosa" value="<?php echo $_GET['id']?>">

                <input type="submit" class="btn btn-primary btn-block" value="Registrar">
            </form>
            <!-- <div class="text-center">
                <a class="d-block small mt-3" href="login.html">Login Page</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div> -->
        </div>
    </div>
</div>

<script>
var fecha = document.getElementById("fecha")
var notific = document.getElementById("mensaje")

fecha.addEventListener("change", function(e) {

    var vals = fecha.value.split('-');
    var year = vals[0];
    let date = new Date()
    // console.log(date.getFullYear())
    // console.log(year)

    let result = date.getFullYear() - year;
    // console.log(result)

    if (result >= 7) {

        notific.style.display = "block"
        // notific.appendChild(document.createTextNode("ya cumplio el cadaver los 7 años debe exhumarse"))
    } else {
        notific.style.display = "none"
    }


})

// console.log(fecha.value) 
</script>


<?php include "partials/footer.php"; ?>