<?php
    require 'database.php';
    session_start();




    if(!isset($_SESSION['usuario'])){
      echo '
              <script>
                  alert("Inicie Sesion");
              </script>
          ';
      header("location: /avicolap");
      session_destroy();
      die();
    
  }
  
?>