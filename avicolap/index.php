<?php
    require 'database.php';
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: hola.php");
    }
       
    
?>

<html>
    <hi style="color:white;">.</hi>

<head>
        <meta charset="utf-8">
        <title>Avicolapp</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="style.css" >
      
</head>
<div class="login">
<body >
        <h1>INICIAR SESION</h1>
        <div>
        <form action="log.php" action='inicio.php'  method="POST"> 
            <input  type="text" placeholder="Ingrese su Usuario" name="id">  
            <input  type="password" placeholder="Ingrese su Contrasena" name="password">  
            <input  type="submit" value="INICAR SESION" action="log.php" action='inicio.php'>
        </form>
        </div>
    </body>
    <a href="reg.php" style="text-decoration: none; color:black ">Registrarse</a>
</div>

</html>