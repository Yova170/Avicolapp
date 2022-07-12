
<?php
  $conn = new mysqli("localhost:1700", "root", "Bryan17.", "inventario");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 




?>