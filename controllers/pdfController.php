<?php

class pdfController extends Controller
{
    private $pdf;

    public function __construct(){
        parent::__construct();
        $this->pdf = new FPDF();
    }

    public function index(){

    }

    public function pdf1($nombre, $apellido){
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','B',16);
        $this->pdf->Cell(40,10, utf8_decode($nombre . ' ' . $apellido));
        $this->pdf->Output();
    }

    public function pdf2($nombre, $apellido){
        require_once ROOT . 'public' . DS . 'files' . DS . 'pdf2.php';
    }

}

?>