<?php
     require 'database.php';
     require 'sesion.php';
     require '../menu.php';
    
   
    ?>

<html>
<a style="color: white;">.</a>

<h1>PROVEDORES</h1>
<head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
    <h1>
        INSERTE DATOS DE PROOVEDOR
    </h1>
    <class id="a1">
        <a  href="./">Volver</a>
       
    </class>
    <body >
        <div >
       
        <form action="save.php" method="POST"> 

            <input  type="text" placeholder="Ingrese Nombree del Proovedor" name="nombre">  
            <input  type="text" placeholder="Ingrese Telefono del Proovedor" name="telefono">
            <input  type="text" placeholder="Ingrese Direccion del Proovedor" name="direccion">
            <input type="submit" value="REGISTRAR" action="save.php">
            <link rel="stylesheet" href="style/style.css" >
        </form>
      
        </div>
       

    </body>
</html>