<?php

include "../database/conexion.php";

$con=conectar();

$codig=$_POST["codig_sepu"];
$descrsep=$_POST["descr_sepu"];
$descrtip=$_POST["descr_tipo"];
$cantidad=$descrtip =="publico" ? 1 : $_POST["private"];
// $cedu=$_POST["cedu_prop"];

// $query="INSERT INTO tabla_sepu (codig_sepu, descr_sepu,descr_tipo, ced_prop) VALUES (:codig_sepu,:descr_sepu,:descr_tipo,:cedu_prop)";

$query="INSERT INTO tabla_sepu (codig_sepu,descr_sepu,descr_tipo,can_sepu) VALUES (:codig_sepu,:descr_sepu,:descr_tipo,:can_sepu)";

$result=$con->prepare($query);

$result->bindParam(":codig_sepu",$codig);
$result->bindParam(":descr_sepu",$descrsep);
$result->bindParam(":descr_tipo",$descrtip);
$result->bindParam(":can_sepu",$cantidad);
// $result->bindParam(":cedu_prop",$cedu);


if($result->execute()){

    header("location:../vistas/sepulcros.php?msj=sepulcro insertado correctamente");

}else {
    
    header("location:../vistas/sepulcro.php?err=Error al insertar sepulcro ");
}

?>



