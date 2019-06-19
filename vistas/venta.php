<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Venta</div>
        <div class="card-body">
            <form action="../action/reg_vent.php" method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="codigo" class="form-control" name="codig_vent"
                            placeholder="Email address" required="required" autofocus="autofocus">
                        <label for="codigo">Codigo de venta</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="date" id="fecha" class="form-control" placeholder="Fecha de venta" name="fecha_vent"
                            required="required">
                        <label for="fecha">Fecha de la Venta</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripcion de la venta</label>
                    <textarea name="descr_vent" class="form-control" id="exampleFormControlTextarea1" rows="3"
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
</div>

<?php include "partials/footer.php"; ?>