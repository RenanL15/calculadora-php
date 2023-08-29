<!DOCTYPE html>
<?php
    session_start();
    // Verificar se o usuário está logado
    if ($_SESSION['loggedIn'] != 1) {
        header('location: index.html');
    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/result.css">
    <title>Calculadora</title>
</head>

<body>
    <input type="button" value="Sair" id="btn-sair" onclick="location.href='logout.php'">
    <div class="card">
        <div class="result">
            <img src="assets/images/calculadora-logo.png" alt="Logo Calculadora" width="300px" />
            <h1>Resultado</h1>
            <?php
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $operator = $_POST['operator'];

                function somar($value1, $value2) {
                    return round($value1 + $value2, 2);
                }
                function subtrair($value1, $value2) {
                    return round($value1 - $value2, 2);
                }
                function multi($value1, $value2) {
                    return round($value1 * $value2, 2);
                }
                function dividir($value1, $value2) {
                    return round($value1 / $value2, 2);
                }
    
                switch ($operator) {
                    case 'plus':
                        echo "<h2>" . somar($n1, $n2) . "</h2>";
                        break;
                    case 'minus':
                        echo "<h2>" . subtrair($n1, $n2) . "</h2>";
                        break;
                    case 'times':
                        echo "<h2>" . multi($n1, $n2) . "</h2>";
                        break;
                default:
                        echo "<h2>" . dividir($n1, $n2) . "</h2>";
                    break;
                }
                ?>
                <input type="button" value="Voltar" onclick="location.href='calculadora.php'" id="btn-voltar">
                <?php 
                    echo "<span>".date('l jS \of F Y h:i:s A')."</span>"; 
                ?>
        </div>
    </div>
</body>

</html>