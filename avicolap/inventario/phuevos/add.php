<?php
     require '../database.php';
     require '../menu.php';
     require '../sesion.php';
   
    ?>

<html>
    <header>
        <a href="/log/inicio.php";>AvicolaApp</a>
    </header>

<h1>INVENTARIO</h1>
<head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
    <h1>
        Inserte Datos del Huevo 
    </h1>
    <class id="va">
        <a  href="phuevos.php">Volver</a>
       
    </class>
    <body >
        <div  id="log">
       
        <form action="save.php" method="POST"> 

            <input  type="text" placeholder="Ingrese Id de la Gallina" name="idgallina">
            <b>Ingrese Color del Huevo</b> 
            <select name="color"> 
                <option value="BLANCO" > Blanco </option>
                <option value="MARRON"> Marron </option>                  
            </select>
            <input  type="text" placeholder="Ingrese Peso del Huevo (gr)" name="peso">   
            <input type="submit" value="REGISTRAR" action="save.php">
            <link rel="stylesheet" href="style/style.css" >
        </form>
      
        </div>
       

    </body>
</html>