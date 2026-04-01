<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmacao = $_POST['confirmacao'];

    echo "Nome: " . $nome . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Senha: " . $senha . "<br>";
    echo "Confirmação de senha: " . $confirmacao ."<br>";
?>