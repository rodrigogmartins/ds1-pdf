<?php

    session_start();

    if(isset($_SESSION['login'])) {
        header('Location: adicionar_arquivo.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Upload </title>
    </head>
    <body>

        <form action="upload_arquivo.php" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo" id="arquivo">
            <button type="submit"> Fazer upload </button>
        </form>


        <form action="sessao/logout.php" method="post">
            <div>
                <button type="submit"> Sair da sessão </button>
            </div>
        </form>

        <div>
            <a href="tabela.php"> Ver Tabela </a>
        </div>

    </body>
</html>