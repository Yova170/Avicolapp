
<?php
     require '../database.php';
     require '../menu.php';
     require '../sesion.php';
 
    ?>

<html>
    <header>
        <a href="/log/inicio.php";>AvicolaApp</a>
    </header>

<h1>INVENTARIO</h1>
<head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
</head>
<h1>ENTRADA</h1>

    <h1>
        Inserte Datos del Alimento 
    </h1>
    <class id="va">
        <a  href="alimento.php">Volver</a>
       
    </class>
    <h1> </h1>
    <body >
        <div  id="log">
        <form action="save.php" method="POST"> 
           Seleccine el Alimento <select name="codigo"> 
                <option value="Maiz"> Maiz</option>
                <option value="Trigo"> Trigo </option>
                <option value="Avena"> Avena  </option>
                <option value="Cebada"> Cebada </option>
                <option value="Centeno"> Centeno </option>
                <option value="Soja"> Soja </option>
                <option value="Repollo"> Repollo </option>
                <option value="Lechuga"> Lechuga </option>
                <option value=" Hierba">  Hierba </option>
                <option value="Arroz"> Arroz  </option>
                <option value="Suplemento A"> Suplemento A  </option>
                <option value="Zanahoria"> Zanahoria </option>
                <option value="Col"> Col </option>
            </select>
            <input  type="text" placeholder="Ingrese Cantidad del Alimento (KG) "  name="disp"> 
            <input type="submit" value="REGISTRAR" action="save.php" style="
                outline: none;
                padding: 20px;
                width: 300;
                border-radius: 3px;
                border: 1px solid rgb(0, 0, 0);
                margin: 1px auto;
                ">
            <link rel="stylesheet" href="style/style.css"  >
        </form>
      
        </div>
       
    </body>
</html>