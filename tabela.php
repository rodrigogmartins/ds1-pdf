<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> PDF </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php

            session_start();

            $nomesArquivos = explode(';', $_SESSION['arquivos-nome']);
            $tamanhosArquivos = explode(';', $_SESSION['arquivos-tamanho']);

            echo '<table>
                    <tr>
                        <th> Nome </th>
                        <th> Tamanho </th>
                    </tr>';

                        for ($i = 0; $i < count($nomesArquivos) - 1; $i++) {
                            echo '<tr>
                                    <td>' . $nomesArquivos[$i] . '</td>
                                    <td>' . $tamanhosArquivos[$i] . ' bytes </td>
                                </tr>';
                        }
            echo  '</table>';

        ?>

        <div>
            <form action="gerar_pdf.php" method="post">
                <button type="submit"> Gerar Relatório </button>
            </form>
        </div>

        <div>
            <form action="sessao/logout.php" method="post">
                <button type="submit"> Sair </button>
            </form>
        </div>

    </body>
</html>