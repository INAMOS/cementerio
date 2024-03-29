<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Comprador</div>
        <div class="card-body">
            <form action="../action/reg_comp.php" method="POST">
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
                            name="celul_comp">
                        <label for="celular">Celular</label>
                    </div>
                </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="tel" id="telefono" class="form-control" placeholder="Email address"
                                name="telef_comp">
                            <label for="telefono">Telefono</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                                name="correo_com" >
                            <label for="inputEmail">Email</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Direccion</label>
                        <textarea name="direcc_com" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            required></textarea>

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