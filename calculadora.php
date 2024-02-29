<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" class="action">
        <label for="">Numero 1</label>
        <input type="number" name="num1" required><br>
        <label for="">Numero 2</label>
        <input type="number" name="num2" required><br>
        <label for="">Operacion</label>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="calcular">

    </form>
    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        switch ($operacion) {
            case 'sumar':
                # code...
                $resultado = $num1 + $num2;
                break;
                case 'resta':
                    # code...
                    $resultado = $num1 - $num2;
                    break;
                    case 'multiplicar':
                        # code...
                        $resultado = $num1 * $num2;
                        break;
                        case 'dividir':
                            # code...
                            $resultado = $num1 / $num2;
                            break;
           
            default:
                # code...
                $resultado = "Sin resultados";
                break;
        }
        echo "El resultado de la operacion: ".$operacion." es igual a ".$resultado;}
    ?>
</body>
</html>
