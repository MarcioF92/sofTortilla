<?php
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','B',16);
        $this->pdf->Cell(40,10, utf8_decode('PDF2 ' . $nombre . ' ' . $apellido));
        $this->pdf->Output();
?>