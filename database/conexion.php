<?php 

  function conectar(){


      $user="cementerio";
      $pass="Ca2O96vv4-r~";
      $host="den1.mysql6.gear.host";
      $db="cementerio";
      // $con=mysqli_connect($server,$user,$pass) or die ("ERROR AL CONECTAR LA BASE DE DATOS".mysql_error());

      try{

        $con=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        return $con;

      }catch(PDOException $err){

        echo "Ha ocurrido un error " . $err->getMessage();

      }
    

  }
	
 ?>