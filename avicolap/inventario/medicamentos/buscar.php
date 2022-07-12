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
    <h1>MEDICAMENTOS</h1>
<head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
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
         
             $sql="SELECT * FROM medicamento WHERE id_medicamento LIKE '%$buscar%' or codigo  LIKE '%$buscar%' or nombre LIKE '%$buscar%' OR disp LIKE '%$buscar%' ";
             $result =mysqli_query($conn,$sql );

             while($mostrar= mysqli_fetch_array($result)) {             
            ?>

            <tr>
                <td> <?php echo $mostrar ['id_medicamento'] ?> </td>
                <td> <?php echo $mostrar ['codigo'] ?> </td>
                <td> <?php echo $mostrar ['nombre'] ?> </td>
                <td> <?php echo $mostrar ['disp'] ?> </td>
            
            </tr>
            
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
    