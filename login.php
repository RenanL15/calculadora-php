<!DOCTYPE html>
<?php session_start();
    $_SESSION = $_POST;
    $_SESSION['loggedIn'];


    if ($_SESSION['password'] == "123") {
        $_SESSION['loggedIn'] = 1;
        header('location: calculadora.php');
      }
    else {
        header('location: index.html');
    }

?>
</body>
</html>
