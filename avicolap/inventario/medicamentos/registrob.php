<?php
require '../menu.php';
require '../titulo.php';
require '../sesion.php';
require '../database.php';
$buscar=$_POST['buscar'];
?>

<html>
</head>
<class id="va">
        <a  href="alimento.php">Volver</a>
       
    </class>
<div id="ali">
    <form id="as" action="registrob.php" method="POST">
        <input type="text" placeholder="Buscar" name="buscar" > 
        <input  type="submit" value="BUSCAR" id="buscar">
        <link rel="stylesheet" href="style/style.css" >
    </form>

</div>
<div id="tabla">
        <table border="3" id="customers">

        
        <tr>
            <thead>
                <th> Id Registro </th>
                <th> Nombre </th>
                <th> Tipo </th>
                <th> Cantidad </th>
                <th> Fecha </th>
            </thead>
           

        </tr>

            <?php
         
             $sql="SELECT * FROM registrob WHERE id_registro LIKE '%$buscar%' or nombre LIKE '%$buscar%' or tipo LIKE '%$buscar%' OR fecha LIKE '%$buscar%' ORDER BY fecha desc";
             $result =mysqli_query($conn,$sql );

             while($mostrar= mysqli_fetch_array($result)) {             
            ?>

            <tr>
            <td> <?php echo $mostrar ['id_registro'] ?> </td>
            <td> <?php echo $mostrar ['nombre'] ?> </td>
            <td> <?php echo $mostrar ['tipo'] ?> </td>
            <td> <?php echo $mostrar ['cantidad'] ?> </td>
            <td> <?php echo $mostrar ['fecha'] ?> </td>   
            </tr>

            <?php
             }
            ?>
            <link rel="stylesheet" href="style/style.css" >
        </table>
    </div>

</html>