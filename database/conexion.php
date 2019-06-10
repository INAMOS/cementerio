<?php 

  function conectar(){


      $user="root";
      $pass="";
      $host="localhost";
      $db="cementerio";
      // $con=mysqli_connect($server,$user,$pass) or die ("ERROR AL CONECTAR LA BASE DE DATOS".mysql_error());


      try{

        $con=new PDO("mysql:host=localhost;dbname=cementerio",$user,$pass);
        return $con;

      }catch(PDOException $err){

        echo "Ha ocurrido un error " . $err->getMessage();

      }
    

  }
	
 ?>