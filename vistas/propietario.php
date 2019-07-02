<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar de Propietario</div>
        <div class="card-body">
            <form action="../action/reg_pro.php?id=<?php echo $_GET["id"]?>" method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="cedula" class="form-control" name="cedul_prop"
                            placeholder="Email address" required="required" size="9" autofocus="autofocus">
                        <label for="cedula">Cedula</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="firstName" class="form-control" name="nombr_prop"
                                    placeholder="First name" required="required">
                                <label for="firstName">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" class="form-control" name="apell_prop"
                                    placeholder="Nombre" required="required">
                                <label for="lastName">Apellido</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="tel" id="celular" class="form-control" placeholder="numero telefonico" name="celul_prop">
                        <label for="celular">Celular</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="tel" id="celular" class="form-control" placeholder="numero telefonico" name="telef_prop">
                        <label for="celular">Telefono</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="correo_pro">
                        <label for="inputEmail">Email</label>
                    </div>
                </div>
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

                <div class="form-group">

                    <label for="exampleFormControlTextarea1">Direccion</label>
                    <textarea name="direcc_pro" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

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