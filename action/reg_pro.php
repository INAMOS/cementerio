<?php

include "../database/conexion.php";

$con=conectar();

$cedpro=$_POST['cedul_prop'];
$nombpro=$_POST["nombr_prop"];
$apellpro=$_POST['apell_prop'];
$celpro=$_POST["celul_prop"];
// $telefpro=$_POST['telef_prop'];
$correopro=$_POST["correo_pro"];
$direccpro=$_POST["direcc_pro"];


// $query="INSERT INTO tabla_prop  (cedul_prop,nombr_prop,apell_prop,celul_prop,telef_prop,correo_pro,direcc_pro) VALUES (:cedul_prop,:nombr_prop,:apell_prop,:celul_prop,:telef_prop,:correo_pro,:direcc_pro)";
$query="INSERT INTO tabla_prop  (cedul_prop,nombr_prop,apell_prop,celul_prop,correo_pro,direcc_pro) VALUES (:cedul_prop,:nombr_prop,:apell_prop,:celul_prop,:correo_pro,:direcc_pro)";


$resultado=$con->prepare($query);

$resultado->bindParam(":cedul_prop",$cedpro);
$resultado->bindParam(":nombr_prop",$nombpro);
$resultado->bindParam(":apell_prop",$apellpro);
$resultado->bindParam(":celul_prop",$celpro);
// $resultado->bindParam(":telef_prop",$telefpro);
$resultado->bindParam(":correo_pro",$correopro);
$resultado->bindParam(":direcc_pro",$direccpro);


if($resultado->execute()){

  header('location:../vistas/propietario.php?exi=Insertado correctamente');

}else {

  header('location:../vistas/propietario..php?err=Hubo un error al insertar, vuelve a intentarlo');

}


// $con=mysqli_connect('localhost','root','cementerio') or die('error en la conexion servidor');
 
    // $sql "INSERT INTO tabla_prop" 
    // values(
    // $cedpro=$_POST['cedul_prop'];
    // $nombpro=$_POST["nombr_prop"];
    // $apellpro=$_POST['apell_prop'];
    // $celpro=$_POST["celul_prop"];
    // $telefpro=$_POST['telef_prop'];
    // $correopro=$_POST["correo_pro"];
    // $direccpro=$_POST["direcc_pro"];)
    
    // $resultado=mysql_query($con,$sql) or die('error con el query database');
    // mysql_close($con);

    // // verifica cedula, nombre y apellido
    // if(empty ($cedpro)){
    // die ('ERROR: Por favor proporcione cedula del propietario.');
    //  }
    //  if(empty ($nombpro)){
    // die ('ERROR: Por favor proporcione nombre del propietario.');
    //  }
    //   if(empty ($nombpro)){
    // die ('ERROR: Por favor proporcione apellido del propietario.');
    //  }
       
    // $conexion=new PDO("mysql:host=localhost;dbname=cementerio", $cedpro, $nombpro, $apellpro,$celpro,$telefpro,$correopro, $direccpro);


    //  $query = "INSERT INTO tabla_prop";

    
    //   if ($conexion->query($query) === TRUE) {
    
    //  header("location:registro_sep.php");
 
    //     }

    //   else{
    //     header("location:pantalla.php?error=datos_incorrectos");
    // }


?>