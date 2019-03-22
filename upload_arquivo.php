<?php

	session_start();

    $tamanhoMaximo = 1000000;
    $extensoes = array('.jpg', '.png', '.gif');
    $_UP['pasta'] = "uploads/";
    $substituir = false;

	$nomeArquivo = $_FILES["arquivo"]["name"];
	$tamanhoArquivo = $_FILES["arquivo"]["size"];
	$nomeTemporario = $_FILES["arquivo"]["tmp_name"];

	if (!empty($nomeArquivo)) {

		$erro = false;

		if ($tamanhoArquivo > $tamanhoMaximo) {
			$erro = "O arquivo " . $nomeArquivo . " não deve ultrapassar " . $tamanhoMaximo. " bytes";
		}
		else if (!in_array(strrchr($nomeArquivo, "."), $extensoes)) {
			$erro = "A extensão do arquivo <b>" . $nomeArquivo . "</b> não é válida";
		}
		else if (file_exists($_UP['pasta'] . $nomeArquivo) and !$substituir) {
			$erro = "O arquivo <b>" . $nomeArquivo . "</b> já existe";
		}

		if (!$erro) {
			move_uploaded_file($nomeTemporario, ($_UP['pasta'] . $nomeArquivo));
			$_SESSION['arquivos-nome'] = $_SESSION['arquivos-nome'] . $nomeArquivo . ';';
			$_SESSION['arquivos-tamanho'] = $_SESSION['arquivos-tamanho'] . $tamanhoArquivo . ';';
            header('Location: adicionar_arquivo.php');
            exit();
		} else {
			echo $erro . "<br/>";
		}
    }

?>
