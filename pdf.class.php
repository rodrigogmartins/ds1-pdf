<?php
    require('/home/rodrigo/fpdf181/fpdf.php');

    class PDF extends FPDF {

        function BasicTable($header, $data) {
            foreach($header as $col)
                $this->Cell(40,7,$col,1);
            $this->Ln();
            foreach($data as $row) {
                foreach($row as $col)
                    $this->Cell(40,6,$col,1);
                $this->Ln();
            }
        }
    }
?>