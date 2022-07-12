<?php
    require 'sesion.php';
    require 'menu.php';
    require 'database.php';
      

?>

<html>
    <H1 style="COLOR: white">.</H1>
    <h1>
        SELECCIONE UN MODULO
    </h1>

    <div class="botones">
        <form id="bo" action="inventario/"> <input type="submit" value="INVENTARIO">  </form>
        <form id="bo" action="cliente/"> <input type="submit" value="CLIENTES">  </form>
        <form id="bo" action="proovedor/"> <input type="submit" value="PROOVEDORES">  </form>
        <form id="bo" action="compra_venta/"> <input type="submit" value="COMPRA Y VENTA">  </form>
        <form id="bo" action=""> <input type="submit" value="CONTABILIAD">  </form>
        <link rel="stylesheet" href="estilo.css" >
        
    </div>

</html>