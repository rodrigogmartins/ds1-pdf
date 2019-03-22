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
        <title> Trabalho - PDF </title>
    </head>
    <body>
        
        <form action="sessao/criar.php" method="post">
            <div>
                <label for="login">
                    <input id="login" name="login" type="text" placeholder="Login">
                </label>
            </div>

            <div>
                <label for="senha">
                    <input id="senha" name="senha" type="password" placeholder="Senha">
                </label>
            </div>

            <div>
                <button type="submit"> Salvar Sessão</button>
            </div>
        </form>

    </body>
</html>