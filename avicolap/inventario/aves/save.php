<?php
    require '../database.php';
    require '../sesion.php';
    require '../menu.php';

     $codigo=$_POST['codigo'];
     $raza =$_POST['raza'];
     $viva= $_POST['viva'];
     $fecha= date("Y-m-d H:i:s");
 
     $ins= " INSERT INTO aves (`codigo`, `raza`, `estatus`, `fechanac`) VALUES ('$codigo', '$raza', '$viva', '$fecha');";
 
     $query = mysqli_query($conn, $ins);
 
     if($query){
         echo("Salio bien");
     } else {
        echo("F");
     }
?>

<html>
<header>
    <a href="/log/inicio.php";>AvicolaApp</a>
</header>

<h1>INVENTARIO</h1>
<h1>AVES</h1>
<head>
        <meta charset="utf-8">
        <title>Aves</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
       

     <div class="botones">
        <form id="bo" action="aves.php"> <input type="submit" value="AVE REGISTRADA CON EXITO">  </form>
        <link rel="stylesheet" href="style/style.css" >
        
    </div>
   
      

</html>
