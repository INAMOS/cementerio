<?php

include "../database/conexion.php";

$con=conectar();

$cedpro=$_POST['cedul_cadv'];
$nombpro=$_POST["nombr_cdv"];
$apellpro=$_POST['apell_cadv'];
$fecha=$_POST['fecha_inhum'];
$emp="";

// $query="INSERT INTO tabla_cadv (cedul_cadv,nombr_cad,apell_cadv,fech_inhum,estatus_cd,tabla_sepu_tabla_sepu,tabla_sepu_tabla_prop_cedul_prop,tabla_exhu_fecha_exhu) VALUES (cedul_cadv,nombr_cad,apell_cadv,fech_inhum);";
$query="INSERT INTO tabla_cadv (cedul_cadv,nombr_cad,apell_cadv,fech_inhum,estatus_cd,tabla_sepu_tabla_sepu,tabla_sepu_tabla_prop_cedul_prop,tabla_exhu_fecha_exhu) VALUES (:cedul_cadv,:nombr_cad,:apell_cadv,:fech_inhum,:estatus_cd,:tabla_sepu_tabla_sepu,:tabla_sepu_tabla_prop_cedul_prop,:tabla_exhu_fecha_exhu);";


$resultado=$con->prepare($query);

$resultado->bindParam(":cedul_cadv",$cedpro);
$resultado->bindParam(":nombr_cad",$nombpro);
$resultado->bindParam(":apell_cadv",$apellpro);
$resultado->bindParam(":fech_inhum",$celpro);
$resultado->bindParam(":estatus_cd",$emp);
$resultado->bindParam(":tabla_sepu_tabla_sepu",$emp);
$resultado->bindParam(":tabla_sepu_tabla_prop_cedul_prop",$emp);
$resultado->bindParam(":tabla_exhu_fecha_exhu",$emp);

$resultado->execute();

try {
    $resultado->execute();

} catch (PDOException $err) {
    echo $err->getMessage();
}

// if($resultado->execute()){

//   header('location:../vistas/cadaver.php?exi=Insertado correctamente');

// }else {

//   header('location:../vistas/cadaver.php?err=Hubo un error al insertar, vuelve a intentarlo');

// }


?>