<?php
require '../database.php';
require '../menu.php';
require '../titulo.php';
require '../sesion.php';

    
     
?>

<html>
    <h1>MEDICAMENTOS</h1>
</head>
    <class id="va">
        <a  href="../index.php">Volver</a>
        <a  href="registro.php">Registro</a>
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
                <th> Id Medicamento </th>
                <th> Codigo </th>
                <th> Nombre </th>
                <th> Cantidad Dosponible (Unidad) </th>
            </thead>
           

        </tr>

            <?php
         
             $sql="SELECT * FROM medicamento ";
             $result =mysqli_query($conn,$sql );

             while($mostrar= mysqli_fetch_array($result)) {             
            ?>

            <tr>
            <td> <?php echo $mostrar ['id_medicamento'] ?> </td>
            <td> <?php echo $mostrar ['codigo'] ?> </td>
            <td> <?php echo $mostrar ['nombre'] ?> </td>
            <td> <?php echo $mostrar ['disp'] ?> </td>
            
            </tr>

            <?php
             }
            ?>
            <link rel="stylesheet" href="style/style.css" >
        </table>
    </div>
    <class id="va">
        <a href="entrada.php">Entrada</a>
        <a href="salida.php">Salida</a>
    </class>
</htmnl>
    
</html>