<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar de Cadaver</div>
        <div class="card-body">
            <form action="../action/reg_cdv.php" method="POST">
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
                        <input type="date" id="fecha" class="form-control" placeholder="Fecha de Inhumacion" name="fecha_inhum"
                            required="required">
                        <label for="celular">Fecha de Inhumacion</label>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="correo_pro"
                            required="required">
                        <label for="inputEmail">Email</label>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                                    required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control"
                                    placeholder="Confirm password" required="required">
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div> -->

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