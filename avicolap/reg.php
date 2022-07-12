<html>
    <hi style="color:white;">.</hi>
    

<head>
        <meta charset="utf-8">
        <title>Avicolapp</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="style.css" >
      
</head>
<div class="reg">
<body >
        <h1>REGISTRARSE</h1>
        <div>
        <form action="save.php" method="POST"> 
            <input  type="text" placeholder="Ingrese su Cedula" name="id">  
            <input  type="text" placeholder="Ingrese su Nombre" name="name"> 
            <input  type="text" placeholder="Ingrese su Apellido" name="apell"> 
            <input  type="text" placeholder="Ingrese su Correo Electronico" name="correo"> 
            <input  type="password" placeholder="Ingrese su Contrasena" name="password">  
            <input  type="submit" value="REGISTRARSE" action="save.php">
        </form>
        </div>
    </body>
    <a href="index.php" style="text-decoration: none; color:black ">Inicar Sesion</a>
</div>

</html>