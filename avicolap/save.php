

<?php
    require 'database.php';

     $id=$_POST['id'];
     $name =$_POST['name'];
     $apell =$_POST['apell'];
     $correo= $_POST['correo'];
     $pass= $_POST['password'];


    $verificarid= mysqli_query($conn, "SELECT * FROM user WHERE cedula='$id'") ;
    $verificarcorreo= mysqli_query($conn, "SELECT * FROM user WHERE correo='$correo'") ;

    if(mysqli_num_rows($verificarid)> 0 ){
        echo '
            <script>
                alert("Esta Cedula Ya Esta Registrada");
                window.location = "reg.php";
            </script>
        ';
           exit();
    }

    if(mysqli_num_rows($verificarcorreo)> 0 ){
        echo '
            <script>
                alert("Este Correo Ya Esta Registrada");
                window.location = "reg.php";
            </script>
        ';
           exit();
    }
 
   echo'
        <script>
            alert("Usuario Registrado con Exito");
            window.location = "index.php";
        </script>
    ';

   $ins= " INSERT INTO user (`cedula`, `nombre`, `apellido`, `correo`, `contra`) VALUES ('$id', '$name', '$apell', '$correo', '$pass');";
   $query = mysqli_query($conn, $ins);

   

?>
    
