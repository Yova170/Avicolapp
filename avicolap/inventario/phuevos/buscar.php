<?php
     require '../database.php';
     require '../menu.php';
     require '../sesion.php';
     $buscar=$_POST['buscar'];

    ?>

<htmnl>
    <header>
     <a href="/log/inicio.php";>AvicolaApp</a>
    </header>

    <h1>INVENTARIO</h1>
    <H1> </H1>
    <h1>PRODUCCION DE HUEVOS</h1>
<head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
    <class id="va">
        <a  href="../index.php">Volver</a>
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
                <th> Id Gallina </th>
                <th> Id Huevo </th>
                <th> color </th>
                <th> Peso </th>
                <th> Fecha </th>
            </thead>
           

        </tr>

            <?php
         
             $sql="SELECT * FROM phuevos where id_gallina like '%$buscar%' or id_huevo like '%$buscar%' or color like '%$buscar%' or peso like '%$buscar%' or fecha like '%$buscar%' ";
             $result =mysqli_query($conn,$sql );

             while($mostrar= mysqli_fetch_array($result)) {             
            ?>

            <tr>
            <td> <?php echo $mostrar ['id_gallina'] ?> </td>
            <td> <?php echo $mostrar ['id_huevo'] ?> </td>
            <td> <?php echo $mostrar ['color'] ?> </td>
            <td> <?php echo $mostrar ['peso'] ?> </td>
            <td> <?php echo $mostrar ['fecha'] ?> </td>
            </tr>

            <?php
             }
            ?>
            <link rel="stylesheet" href="style/style.css" >
        </table>
    </div>
    
</htmnl>
    