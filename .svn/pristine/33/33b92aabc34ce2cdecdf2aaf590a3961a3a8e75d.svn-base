<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Try increasing memory available, mostly for PDF generation
 */
//ini_set("memory_limit","32M");

function pdf_create($html, $filename, $stream=TRUE)
{

	//die();
    //include_once("C:\wamp\www\aplikacija\system\plugins\dompdf\dompdf_config.inc.php");

    $dompdf = new DOMPDF();
    $dompdf->set_paper("a4", "portrait");
    $dompdf->load_html($html);

    $dompdf->render();
    if ($stream) { //open only  
        $dompdf->stream($filename.".pdf");
    }else{
        return $dompdf->output();
    }
    // save to file only, your going to load the file helper for this one
       // write_file("pdf/$filename.pdf", $dompdf->output());
   // }
}
function pdf_outputdata($html,$type="portrait"){
    require_once("dompdf/dompdf_config.inc.php");
    $dompdf = new DOMPDF();
    $dompdf->set_paper("a4",$type );

    $dompdf->load_html($html);

    $dompdf->render();

    echo $dompdf->output();
}

