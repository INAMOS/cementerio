<?php include "partials/head.php"; ?>

<?php include "partials/nav.php"; ?>

<?php include "partials/sidebar.php"; ?>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registro de Sepulcro</div>
        <div class="card-body">
            <form action="../action/reg_sep.php" method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="sepulcro" class="form-control" name="codig_sepu"
                            placeholder="Email address" required="required" autofocus="autofocus">
                        <label for="sepulcro">Codigo de Sepulcro</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripcion del Sepulcro</label>
                    <textarea name="descr_sepu" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        required></textarea>
                </div>
                <!-- <div class="form-group">
                    <select class="custom-select" id="tipo" name="descr_tipo" required>
                        <option value="publico">Publico</option>
                        <option value="privado">Privado</option>
                    </select>
                </div> -->

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                    </div>
                    <select class="custom-select" id="tipo" name="descr_tipo" required>
                        <option selected disabled>Elige una opcion...</option>
                        <option value="publico">Publico</option>
                        <option value="privado">Privado</option>
                    </select>
                </div>

                <div class="input-group mb-3" id="boxSelect" style="display:none">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Nro de Sepulcros</label>
                    </div>
                    <select class="custom-select" name="private" id="private" required>
                        <option value="">1</option>
                    </select>
                </div>

                <input type="submit" class="btn btn-primary btn-block" value="Registrar">
            </form>

        </div>
    </div>
</div>

<script>
let select = document.getElementById("tipo");

select.addEventListener("change", function() {


    if (this.value == "privado") {

        let boxSelect=document.getElementById("boxSelect");
        let privateSelect = document.getElementById("private");

        boxSelect.style.display = "flex"

        for (let i = 0; i < 40; i++) {

            // let private=document.getElementById("private")
            let option = document.createElement("option")
            option.appendChild(document.createTextNode(i + 1))
            option.value = i + 1
            privateSelect.appendChild(option);

        }
        // let private=document.getElementById("private")
        // let option=document.createElement("option");
        // option.appendChild( document.createTextNode('New Option Text') );


    } else {
        let boxSelect = document.getElementById("boxSelect");

        boxSelect.style.display = "none"
    }

})
</script>

<?php include "partials/footer.php"; ?>