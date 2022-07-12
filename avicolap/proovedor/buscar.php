<?php
    require 'database.php';
    require 'sesion.php';
    require '../menu.php';

    $buscar=$_POST['buscar'];
?>

<htmnl>
<a style="color: white;">.</a>
    

    <h1>PROOVEDORES</h1>
<head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
    <class id="va">
        <a  href="../inicio.php">Volver</a>
        <a  href="add.php">Anadir</a>
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
            <th> Id Proovedor </th>
                <th> Nombre </th>
                <th> Telefono </th>
                <th> Direccion </th>
            </thead>
           

        </tr>

            <?php
         
             $sql="SELECT * FROM proovedor WHERE id_proovedor LIKE '%$buscar%' or  nombre LIKE '%$buscar%' OR telefono LIKE '%$buscar%' OR direccion LIKE '%$buscar%' ";
             $result =mysqli_query($conn,$sql );

             while($mostrar= mysqli_fetch_array($result)) {             
            ?>

            <tr>
            <td> <?php echo $mostrar ['id_proovedor'] ?> </td>
            <td> <?php echo $mostrar ['nombre'] ?> </td>
            <td> <?php echo $mostrar ['telefono'] ?> </td>
            <td> <?php echo $mostrar ['direccion'] ?> </td>
            </tr>
            </tr>

            <?php
             }
            ?>
            <link rel="stylesheet" href="style/style.css" >
        </table>
    </div>
    
</htmnl>