<?php
     require '../database.php';
     require '../menu.php';
     require '../sesion.php';
     

    ?>

<htmnl>
    <header>
     <a href="/log/inicio.php";>AvicolaApp</a>
    </header>

    <h1>INVENTARIO</h1>
    <h1> </h1>
    <h1>AVES</h1>
<head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
    <class id="va">
        <a  href="../index.php">Volver</a>
        <a  href="addaves.php">Anadir</a>
    </class>
        
    <form id="as" action="buscar.php" method="POST">
        <input type="text" placeholder="Buscar" name="buscar" > 
        <input  type="submit" value="BUSCAR" id="buscar">
        <link rel="stylesheet" href="style/style.css" >
    </form>
    
    <div id="tabla">
        <table border="3" id="customers">

        
        <tr>
            <thead>
                <th> Id Gallina </th>
                <th> Codigo </th>
                <th> Raza </th>
                <th> Estatus </th>
                <th> Fecha de Nacimiento </th>
                <th > Opciones </th>
            </thead>
           

        </tr>

            <?php
         
             $sql="SELECT * FROM aves ORDER BY fechanac DESC ";
             $result =mysqli_query($conn,$sql );

             while($mostrar= mysqli_fetch_array($result)) {             
            ?>

            <tr>
            <td> <?php echo $mostrar ['id_gallina'] ?> </td>
            <td> <?php echo $mostrar ['codigo'] ?> </td>
            <td> <?php echo $mostrar ['raza'] ?> </td>
            <td> <?php echo $mostrar ['estatus'] ?> </td>
            <td> <?php echo $mostrar ['fechanac'] ?> </td>
            <td> <a href="eliminar.php?id=<?php echo $mostrar ['id_gallina'] ?>">Eliminar</a> </td>     
            </tr>

            <?php
             }
            ?>
            <link rel="stylesheet" href="style/style.css" >
        </table>
    </div>
    
</htmnl>
    