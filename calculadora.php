<!DOCTYPE html>
<?php session_start();

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
    <link rel="stylesheet" href="assets/css/calc.css">
    <title>Calculadora</title>
</head>
<body>
    <!-- Botão para sair -->
    <input type="button" value="Sair" id="btn-sair" onclick="location.href='logout.php'">

    <!-- Formulário da calculadora  -->
    <form action="result.php" method="post" autocomplete="off">
        <div class="form-container">
            <img
            src="assets/images/calculadora-logo.png"
            alt="Logo Calculadora"
            width="300px"
            />
            <div class="numbers">
                <input type="number" name="n1" id="n1" step="any" required />
                <input type="number" name="n2" id="n2" step="any" required />
            </div>
            <!-- Opções dos Operadores -->
            <div class="operators">
                <div>
                <input type="radio" name="operator" value="plus" required>
                <label for="plus">+</label>
            </div>
            <div>
                <input type="radio" name="operator" value="minus" required>
                <label for="minus">-</label>
            </div>
            <div>
                <input type="radio" name="operator" value="times" required>
                <label for="times">x</label>
            </div>
            <div>
                <input type="radio" name="operator" value="divide" required>
                <label for="divide">/</label>
            </div>
        </div>
        <input type="submit" value="Calcular" id="btn-calc"/>
      </div>
    </form>
</body>
</html>