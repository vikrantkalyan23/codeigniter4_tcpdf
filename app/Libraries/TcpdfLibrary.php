<?php

namespace App\Libraries;

require_once APPPATH . 'ThirdParty/tcpdf/tcpdf.php'; // Load TCPDF

class TcpdfLibrary extends \TCPDF
{
    public function __construct()
    {
        parent::__construct();
        // Optionally, configure default settings like font, margins, etc.
        $this->SetAutoPageBreak(TRUE, 15);
        $this->SetMargins(15, 15, 15);
    }

    public function createPDF($content)
    {
        // Add a page
        $this->AddPage();
        
        // Set some content to display
        $this->writeHTML($content, true, false, true, false, '');

        // Output the PDF to the browser
        $this->Output('example.pdf', 'I');
    }
}
