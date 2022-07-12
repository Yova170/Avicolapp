<?php
session_start();
    require 'database.php';

    $id=$_POST['id'];
    $pass= $_POST['password'];

    $validar = mysqli_query($conn, "SELECT * FROM user WHERE cedula='$id' and contra='$pass' ");

    if(mysqli_num_rows($validar)> 0 ){
        $_SESSION['usuario']=$id ;
        header("location: /avicolap/inicio.php");
    }else {
       
            echo '
                <script>
                    alert("Usuario no Encontrado, Verifique los Datos Introducidos");
                    window.location = "index.php";
                </script>
            ';
               exit();
        
    }
?>