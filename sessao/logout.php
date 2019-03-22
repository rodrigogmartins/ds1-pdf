<?php

    session_start();

    session_unset();
    session_destroy();

    setcookie('usuario', null, -1, "/");

    header('Location: ../index.php');
    exit();

?>
