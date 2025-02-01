<?php

namespace App\Controllers;

use App\Libraries\TcpdfLibrary;

class GeneratePDF extends BaseController
{
    public function index()
    {
        $pdf = new TcpdfLibrary();

        // Define some content for the PDF
        $htmlContent = '
            <h1>Welcome to TCPDF</h1>
            <p>This is a simple example of generating a PDF in CodeIgniter 4.</p>
        ';
        $this->response->setHeader('Content-Type', 'application/pdf');
        // Call the method to create and output the PDF
        $pdf->createPDF($htmlContent);
    }
}
