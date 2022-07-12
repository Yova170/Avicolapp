
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
        Inserte Datos de la Ave 
    </h1>
    <class id="va">
        <a  href="aves.php">Volver</a>
       
    </class>
    <body >
        <div  id="log">
       
        <form action="save.php" method="POST"> 

            <input  type="text" placeholder="Ingrese Codigo del ave" name="codigo">  
                <select name="raza"> 
                <option value="Padua" > Padua </option>
                <option value="Marans"> Marans </option>
                <option value="Borbonesa"> Borbonesa </option>
                <option value="Alsaciana"> Alsaciana </option>                    
            </select>
            Estatus 
            <select name="viva"> 
                <option value="VIVA"> Viva </option>
                <option value="MUERTA"> Muerta </option>
            </select>
            <input type="submit" value="REGISTRAR" action="save.php">
            <link rel="stylesheet" href="style/style.css" >
        </form>
      
        </div>
       

    </body>
</html>