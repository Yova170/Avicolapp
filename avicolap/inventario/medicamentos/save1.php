<?php
    require '../database.php';
    require '../menu.php';
    require '../sesion.php';

     $codigo=$_POST['codigo'];
     $disp=$_POST['disp'];
     $fecha= date("Y-m-d H:i:s");
     
     

     $ins2= " SELECT disp FROM medicamento WHERE nombre = '$codigo' ";
     $query2 = mysqli_query($conn, $ins2);

     $row = mysqli_fetch_array( $query2 );

     $in_div1 = (int) $row['disp'];

     $tot1=(int)$disp;

     
    

     $total=( $in_div1 - $tot1);


     $ins1= "INSERT INTO`registrob` ( `nombre`, `tipo`, `cantidad`, `fecha`) VALUES ('$codigo', 'ENTRADA','$disp', '$fecha');";
     $ins= " UPDATE medicamento SET disp = '$total' WHERE nombre = '$codigo' ";
 
     $query = mysqli_query($conn, $ins);
     $query1 = mysqli_query($conn, $ins1);
 
?>

<html>
<header>
    <a href="/log/inicio.php";>AvicolaApp</a>
</header>

<h1>INVENTARIO</h1>
<h1> MEDICAMENTOS</h1>
<head>
        <meta charset="utf-8">
        <title>Aves</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
       

        <form id="bo" action="medicamentos.php"> 
            <input type="submit" value="ENTRADA DE MEDICAMENTO REGISTRADA CON EXITO"> 
    </form>
        <link rel="stylesheet" href="style/style.css" >
    

      

</html>
