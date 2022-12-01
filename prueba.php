<!-- EJERCICIO 13 -una operacion matematica-->
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
    <form action="prueba.php" method="POST">
        <fieldset>
            <legend>[CALCULADORA] Formulario 13: presiona el boton</legend>

            <input type="submit" name="btnValor" value="valor1">
            <input type="submit" name="btnValor" value="valor2">
            <input type="submit" name="btnValor" value="valor3">

            <div>
                <?php
                if ($_POST) {
                    $boton = $_POST['btnValor'];
                    switch ($boton) {
                        case 'valor1':
                            echo '🟢se presiono el boton 1';
                            break;

                        case 'valor2':
                            echo 'se presiono el boton 2';
                            break;

                        case 'valor3':
                            echo 'se presiono el boton 3';
                            break;

                        default:
                            # code...
                            break;
                    }
                }
                ?>
            </div>
        </fieldset>
    </form>

</body>