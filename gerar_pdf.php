<?php

    session_start();

    include_once('pdf.class.php');



    $pdf = new PDF();
    $header = array('Nome', 'Tamanho (Bytes)');
    $data = loadData();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',14);
    $pdf->BasicTable($header,$data);
    $pdf->Output();


    function loadData() {
        $nomesArquivos = explode(';', $_SESSION['arquivos-nome']);
        $tamanhosArquivos = explode(';', $_SESSION['arquivos-tamanho']);
        $data = [];

        for ($i = 0; $i < count($nomesArquivos) - 1; $i++) {
            $linha = [$nomesArquivos[$i], $tamanhosArquivos[$i]];
            array_push($data, $linha);
        }

        return $data;
    }

?>