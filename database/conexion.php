<?php 

  function conectar(){


      // $user="cementerio";
      // $pass="Ca2O96vv4-r~";
      // $host="den1.mysql6.gear.host";
      // $db="cementerio";

      $user="root";
      $pass="";
      $host="localhost";
      $db="cementerio";
     
      try{

        $con=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        return $con;

      }catch(PDOException $err){

        echo "Ha ocurrido un error " . $err->getMessage();

      }
    

  }
	
 ?>