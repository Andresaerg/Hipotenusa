<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Hipotenusa</title>
</head>
<body>

    <style>
    body {
        background-image: url(../background-stain-shadow-color-wallpaper-preview.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color: white;
    }

    table{

    background-color: rgb(35, 121, 121);
    border-radius: 5px;
    color: white;

    }
    </style>
    
    <h1 align="center">Cálculo de la Hipotenusa de un triángulo rectángulo</h1>
    <br>
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">

    <table align="left" border="2">
    <caption align="top"> Cálculo Predeterminado </caption>
    <tr>
            <td align="center">Cateto Adyacente:</td> 
            <td><input type="number" name="cap" placeholder="3" disabled="disabled"></td>
        </tr>
        <tr>
            <td align="center">Cateto Opuesto:</td>
            <td><input type="number" name="cop" placeholder="4" disabled="disabled"></td>
        </tr>
        <tr>
            <td colspan=2 align="center"><input type="submit" name="btnp" value="Calcular"></td>
        </tr>

    </table>

    <table align="right" border="2">
    <caption align="top"> Cálculo por Entradas </caption>
        <tr>
            <td align="center">Cateto Adyacente:</td>
            <td><input type="number" name="ca"></td>
        </tr>
        <tr>
            <td align="center">Cateto Opuesto:</td>
            <td><input type="number" name="co"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" value="Calcular"></td>
            <td><input type="submit" name="btn" value="Limpiar"></td>
        </tr>

    </table>
    </form>

    <?php 

    // Realice un programa en PHP que permita calcular la hipotenusa del
    // triangulo rectángulo de lados 3 cm y 4 cm

    //Para calcular por medio de entradas:
    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular'){

        $ca = $_POST['ca'];
        $co = $_POST['co'];
        $h = null;

        if(!empty($ca) && !empty($co) && $ca>0 && $co>0){

                $h = sqrt(pow($ca,2) + pow($co,2));
                echo "<table align='center' border='2'>";
                echo "<caption align='top'> Datos Ingresados: </caption>";
                echo "<tr><td align='center'> Cateto Adyacente = ".$ca."</tr>";
                echo "<tr><td align='center'> Cateto Opuesto = " .$co."</tr>";
                echo "<tr><td align='center'> Por lo tanto la Hipotenusa es = ".$h."</tr>";
                echo "</table>";

        } elseif(!empty($ca) && !empty($co) && ($ca<0 || $co<0)){

            echo "<h2 align='Center'> Ambos datos deben ser positivos </h2>";
            }

         else

        echo "<h2 align='center'> Por favor ingrese ambos datos </h2>";
        
        

    }

    //Para calcular con los valores predeterminados:
    elseif(isset ($_POST['btnp']) && $_POST['btnp'] == 'Calcular'){

        $cap = 3;
        $cop = 4;
        $hp = null;

        $hp = sqrt(pow($cap,2) + pow($cop,2));
        echo "<table align='center' border='2'>";
        echo "<caption align='top'> Datos: </caption>";
        echo "<tr><td align='center'> Cateto Adyacente = ".$cap."</tr>";
        echo "<tr><td align='center'> Cateto Opuesto = " .$cop."</tr>";
        echo "<tr><td align='center'> Por lo tanto la Hipotenusa es = ".$hp."</tr>";
        echo "</table>";

    }

    ?>

</body>
</html>