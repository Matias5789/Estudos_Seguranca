<?php
    if (isset($_POST["usuario"])) {
        echo "o usuario possui valor";
        echo "<p>Bem-vindo Sr. ". $_POST['usuario'];
        echo "<br>";
        echo "<br>";
    }
    else {
        echo "o ususario não possui valor<br>";
    }
    if (isset($_POST["senha"])) {
        echo "a senha possui valor <br>";
        echo "<p>sua senha é: ". $_POST['senha'];
    }
    else {
        echo "a senha não possui valor";
        echo "<p>Bem-vindo Sr. Visitante</p>";
        echo "<p>sua senha não foi localizada</p>";
    }
?>
