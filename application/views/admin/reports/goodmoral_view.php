<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pdfreport
 *
 * @author TOHIBA
 */tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, array(210, 297), true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Good Moral";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage('P');
ob_start();

foreach ($user as $u) {
 $data = '<div class = "row" align="center"><p align = "center">
    Republic of the Philippines<br>
   <img src="/good_moral_img/kagawaran.png" style="width:25px;"/>DEPARTMENT OF EDUCATION <img src="/good_moral_img/logo.png" style="width:25px; " />
   <br> Region XI
   <br> Division of Davao del Norte
   <br> District of Carmen
   <br> CARMEN CENTRAL ELEMENTARY SCHOOL 
   <br><strong>CERTIFICATION</strong>
   </p>
   <p align ="left">TO WHOM IT MAY CONCERN:</p>
   <p align ="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <strong>'.$u->firstname.' '.$u->lastname.'</strong> is a bonafide Grade TWO- MAALAGA pupil of Ms. Liza C. Daragosa has been enrolled for SY 2014 – 2015. </p>
   <p align ="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify further that the above mentioned pupil possessed good moral values and was not involve in any bullying incidents in school.</p>
   <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This certification is given to <strong>'.$u->firstname.' '.$u->lastname.'</strong> for whatever purpose it may serve her best.<p>

   <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Done this 5th day of Nov. 2015 at Carmen Central Elementary School, Ising, Carmen, Davao del Norte.
</p>
<p align="right"><strong>NOREEN P. CAHILIG</strong> <br>ESP – II &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

 



</div>


    ';
}






$content = $data;
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');

$obj_pdf->Output('output.pdf', 'I');
?>
