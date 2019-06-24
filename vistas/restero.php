<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Ingresar cadaver al restero</div>
        <div class="card-body">
            <form action="../action/reg_rest.php" method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="date" id="fecha" class="form-control" placeholder="Fecha de Exhumacion" name="fecha_exhu"
                            required="required">
                        <label for="celular">Fecha de Exhumacion</label>
                    </div>
                </div>
                <div class="form-group">

                    <label for="exampleFormControlTextarea1">Descripcion</label>
                    <textarea name="descr_exhu" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Ingresar">
            </form>
            <!-- <div class="text-center">
                <a class="d-block small mt-3" href="login.html">Login Page</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div> -->
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>