
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
        Selecciones el Medicamento 
    </h1>
    <class id="va">
        <a  href="medicamentos.php">Volver</a>
       
    </class>
    <h1> </h1>
    <body >
        <div  id="log">
        <form action="save.php" method="POST"> 
           Seleccine el Medicamento <select name="codigo"> 
                <option value="Agrogenta"> Agrogenta</option>
                <option value="Agromicyn"> Agromicyn </option>
                <option value="Aureomycin"> Aureomycin  </option>
                <option value="Aureomycin"> Aureomycin </option>
                <option value="Coverflox"> Coverflox </option>
                <option value="Diflovet"> Diflovet </option>
                <option value="Doximutin"> Doximutin </option>
                <option value="Enoroflox"> Enoroflox </option>
                <option value=" Spectomix">  Spectomix </option>
                <option value="Tylvax"> Tylvax  </option>
                <option value="Catofos"> Catofos  </option>
                <option value="Hematofos"> Hematofos </option>
                <option value="Modivitasan"> Modivitasan </option>
                <option value="Kinodil">Kinodil </option>
            </select>
            <input  type="text" placeholder="Ingrese Unidades del Medicamento "  name="disp"> 
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