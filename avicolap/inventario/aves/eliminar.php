<?php
     require '../database.php';
     require '../sesion.php';
     $id= $_GET["id"];
 
     $ins= " DELETE FROM `inventario`.`aves` WHERE (`id_gallina` = '$id');";
 
     $query = mysqli_query($conn, $ins);
 
    ?>

    <html>
    <link rel="stylesheet" href="style/style.css" >
        <header>
        <a href="/log/inicio.php";>AvicolaApp</a>
    </header>

    <h1>INVENTARIO</h1>
    <head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>

<div>
    <a href="aves.php">Registro Eliminado</a>
</div>
    </html>