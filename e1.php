<!--********************************************************************************************************************************************** -->
<!-- EJERCICIO 1 - imprimir en el navegador -->
<?php
// primera forma de imprimir
echo "Hola bryan ";
// segunda forma de imprimir
print_r("Hola Bryan ");
// tercera forma de imprimir
print("Hola Bryan ");
?>


<!--********************************************************************************************************************************************** -->
<!-- EJERCICIO 2 -incluir codigo html -->
<!-- recibir informacion del formulario creado lineas abajo  -->

<?php
// preguntamos con la condicional si existe algun envio , si es asi recibimos y mandamos lo que se escribio en la caja de texto
if ($_POST) {
    $nombre = $_POST['TxtNombre'];
    echo "Este es mi nombre " . $nombre;
}
?>
<!-- aqui se muestra el codigo HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bryan Meza</title>
</head>

<body>

    <form action="e1.php" method="POST">
        <fieldset>
            <legend>[METODO POST] Formulario 1 :Por favor, ingresa los siguientes campos</legend>
            <label for="">Nombre:</label>
            <input type="text" name="TxtNombre" id="">

            <input type="submit" value="ENVIAR DATO">
        </fieldset>
    </form>
</body>

</html>
<!--********************************************************************************************************************************************** -->
<!-- EJERCICIO 2 -incluir codigo html -->
<!-- recibimos lo que manda el formulario POST -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frr</title>
</head>

<body>
    <form action="">
        <fieldset>
            <legend> [METODO POST] Formulario 2 : Por favor, ingresa los siguientes campos</legend>
            <form action="e1.php" method="POST">
                <label for="">Nombre:</label>
                <input type="text" name="TextBox" id="">
                <input type="submit" value="ENVIAR DATO">
        </fieldset>
    </form>

    <?php
    // preguntamos si recibimos el archivo con if
    if ($_POST) {
        $name = $_POST['TextBox'];
        // y si  lo imprimimos sino no
        echo 'Este es el nombre del segundo formulario: ' . $name;
    }
    ?>
</body>

</html>

<!--********************************************************************************************************************************************** -->
<!-- EJERCICIO 3 -envio por el metodo GET de un co HTML a un documento PHP-->
<!-- recibimos lo que manda el formulario GET -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo HTML</title>
</head>

<body>
    <form action="">
        <fieldset>
            <legend>[METODO GET] Formulario 3: Por favor, ingresa los siguientes campos</legend>
            <form action="Archivo.php" method="POST">
                <label for="">Nombre:</label>
                <input type="text" name="TextBox" id="">
                <input type="submit" value="ENVIAR DATO">
        </fieldset>
    </form>

    <?php
    // preguntamos si recibimos el archivo con if
    if ($_GET) {
        $name = $_GET['TextBox'];
        // y si  lo imprimimos sino no
        echo 'Este es el nombre del segundo formulario: ' . $name;
    }
    ?>
</body>

</html>

<!--********************************************************************************************************************************************** -->
<!-- EJERCICIO 5 -envio por el metodo GET de un co HTML a un documento PHP-->
<!-- recibimos lo que manda el formulario GET -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo HTML</title>
</head>

<body>
    <!-- en action ponemos el nombre a donde queremos que se envie los datos del formulario -->
    <form action="e1.php" method="POST">
        <fieldset>
            <legend>[METODO POST] Formulario 5: Por favor, ingresa los siguientes campos</legend>
            <label for="">Nombre:</label>
            <input type="text" name="TxtNombre_" id="">
            <label for="">Apellido:</label>
            <input type="text" name="TxtApellido_" id="">
            <input type="submit" value="SEND">
        </fieldset>
    </form>

    <?php
    // preguntamos si recibimos el archivo con if
    if ($_POST) {
        $Name = $_POST['TxtNombre_'];
        $Ape = $_POST['TxtApellido_'];
        // y si  lo imprimimos sino no
        echo 'El nombre es : ' . $name . ' ' . $Ape;
    }
    ?>
</body>

</html>

<!--********************************************************************************************************************************************** -->
<!-- EJERCICIO 6 -constantes-->
<?php

$nombre_ = 'Bryan'; // valor string
$edad_ = 29; // valor entero
$altura_ = 1.6; // valor flotante
$programador_ = null; // valor nulo

echo 'Mi nombre es ' . $nombre_ . ' , tengo ' . $edad_ . ' años , mi altura apróximada es de ' . $altura_ . 'm. y estoy aprendiendo desarrollo web.';

?>

<!--********************************************************************************************************************************************** -->
<!-- EJERCICIO 7 -constantes-->
<?php

$nombre_ = 'Bryan'; // valor string
$edad = 29; // valor entero
echo '<br/>' . $edad . '<br/>';
$edad = 40; // valor entero
echo $edad;

// NOTAS: las constantes no cambian de valor por más que se les asigne nuevos valores
// definimos una constante
// define(nombe_de_la_constante, valor)
define('nombre', 'bryan');
echo nombre;
?>
<!-- <!--********************************************************************************************************************************************** --> -->
<!-- EJERCICIO 8 -una operacion matematica-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO MATEMATICO</title>
</head>

<body>
    <!-- formulario -->
    <form action="e1.php" method="POST">
        <fieldset>
            <legend>[CALCULADORA] Formulario 8: Por favor, ingresa los siguientes campos</legend>
            <label for="">Valor A: </label>
            <input type="text" name="VA" id=""> <br />
            <label for="">Valor B: </label>
            <input type="text" name="VB" id="">
            <input type="submit" value="CALCULAR">

            <div>
                <?php
                if ($_POST) {
                    $valorA = $_POST['VA'];
                    $valorB = $_POST['VB'];
                    echo 'La suma es ' . $R = $valorA + $valorB . '<br/>';
                    echo 'La resta es ' . $R = $valorA - $valorB . '<br/>';
                    echo 'El producto es ' . $R = $valorA * $valorB . '<br/>';
                    echo 'La division es ' . $R = $valorA / $valorB . '<br/>';
                }
                ?>
            </div>
        </fieldset>
    </form>

</body>

</html>

<!-- <!--********************************************************************************************************************************************** --> -->
<!-- EJERCICIO 9 -una operacion matematica-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO MATEMATICO</title>
</head>

<body>
    <!-- formulario -->
    <form action="e1.php" method="POST">
        <fieldset>
            <legend>[CALCULADORA] Formulario 8: Por favor, ingresa los siguientes campos</legend>
            <label for="">Valor A: </label>
            <input type="text" name="VA" id=""> <br />
            <label for="">Valor B: </label>
            <input type="text" name="VB" id="">
            <input type="submit" value="CALCULAR">

            <div>
                <?php
                if ($_POST and $valorA > $valorB and $valorA != $valorB) {
                    $valorA = $_POST['VA'];
                    $valorB = $_POST['VB'];
                    echo 'el valor de A es mayor que el valor de B' . '<br/>';
                    echo 'A y B con valores diferentes' . '<br/>';

                } else {
                    echo 'el valor de B es mayor que el valor de A ' . '<br/>';
                }
                ?>
            </div>
        </fieldset>
    </form>

</body>

</html>