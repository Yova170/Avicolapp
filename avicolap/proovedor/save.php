<?php
    require './database.php';
    require 'sesion.php';
    require '../menu.php';

     $nombre       = $_POST['nombre'];
     $tel      = $_POST['telefono'];
     $direccion   = $_POST['direccion'];
     
 
     $ins= " INSERT INTO proovedor (`nombre`, `telefono`, `direccion`) VALUES ('$nombre', '$tel', '$direccion');";
 
     $query = mysqli_query($conn, $ins);
 

?>

<html>
<a style="color: white;">.</a>


<h1>CLIENTES</h1>
<head>
        <meta charset="utf-8">
        <title>Aves</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
       

     <div class="botones">
        <form id="bo" action="index.php"> <input type="submit" value="PROOVEDOR REGISTRADO CON EXITO">  </form>
        <link rel="stylesheet" href="style/style.css" >
        
    </div>
   
      

</html>
