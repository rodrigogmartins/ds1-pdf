<?php

    session_start();

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $_SESSION['login'] = $login;
    $_SESSION['arquivos-nome'] = '';
    $_SESSION['arquivos-tamanho'] = '';

    setcookie('usuario', $login, time() + 300, "/");

    header('Location: ../index.php');
    exit();

?>