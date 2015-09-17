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

foreach ($students as $u) {
 $data = '<div class = "row" align="center"><p align = "center">
    Republic of the Philippines<br>
   DEPARTMENT OF EDUCATION 
   <br> Region XI
   <br> Division of Davao del Norte
   <br> District of Carmen
   <br> CARMEN CENTRAL ELEMENTARY SCHOOL 
   <br /><br /><br />
   <strong>PROGRESS REPORT CARD</strong><br />
   <strong>GRADES 1V - V - V1</strong><br />
   school Year: ________________________
   </p>
   <p align ="left">Name: <u><strong>'.$u->firstname.' '.$u->lastname.'</strong></u></p>
   <p align ="left">Age: <u><strong>23</strong></u></p>
     <p align ="right">Sex: <u><strong>23</strong></u></p>
   <p align ="right">Section: <u><strong>Boongon</strong></u></p>
   <p align ="left">Grade: <u><strong>85</strong></u></p>
   <p align ="left">Dear Parent: </p>
   
   <p align ="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This report card shows the record of your childs progress in the different thing and learning process</p>
   <p align ="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify further that the above mentioned pupil possessed good moral values and was not involve in any bullying incidents in school.</p>
  <p align ="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The school affirms  and recognizes your important your important role in the development of your child character and well - being </p>
  
   <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Done this 5th day of Nov. 2015 at Carmen Central Elementary School, Ising, Carmen, Davao del Norte.
</p>
<p align="right">_______________________________</p>
<p align="right">Teacher</p>
 
<div class="row" align="center">
<h4>Certificate of Adminssion</h4>

<p align="left">Admitted to Grade:_________Section:_______________Room_____________</p>
<p align="left"> Eligible for Admission to Grade:_______________________________________</p>
<p align="left"><strong>Approved:</strong></p>
<p align="right">________________________________</p>
<p align="right">Teacher</p>
<p align="left">________________________________</p>
<p align="left">Principal</p>
<p align="left">Cancellation of Eligibility to Transfer</p>
<p align="left">Admitted in_____________________________</p>
<p align="left">Date:__________________________________</p>

<p align="right">________________________________</p>
<p align="right">Principal</p>

<div aign="center">
<h4 style="font-size:16px;">Periodic Rating</h4>
<table class="table table-striped table-bordered table-hover" border="1">
                                    <thead>
                                        <tr>
                                            <th>Learning Areas</th>   
                                            <th>1</th>   
                                            <th>2</th>   
                                            <th>3</th>   
                                            <th>4</th>   
                                            <th>Final Rating</th>                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>Filipino</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>English</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Mathematics</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Science $ Health</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>MAKABAYAN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Heograpiya Kasaysayan/Sibika (HKS)</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Edukasyong Pantahanan (EPP)</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Musika,Sining at Edukasyon sa Pagpalakas ng Katawan (MSEP)</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Character Education</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                     <tr>
                                    <td>Average</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                    </tbody>
                                </table>
</div>

<div aign="center">
<h4 style="font-size:16px;">Attendance Record</h4>
<table class="table table-striped table-bordered table-hover" border="1">
                                    <thead>
                                        <tr>
                                            <th></th>   
                                            <th>Jun.</th>   
                                            <th>Jul.</th>   
                                            <th>Aug.</th>   
                                            <th>Sept.</th>   
                                            <th>Oct.</th>
                                            <th>Dec.</th>
                                            <th>Jan.</th> 
                                            <th>Feb.</th> 
                                            <th>Mar.</th> 
                                            <th>Apr.</th> 
                                            <th>Total</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>No. of School Days</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>No. of School Days</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>No. of School Days Absent</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>No. of Times Tardy</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                    </tbody>
                                </table>
</div>


<div align="center">
<h4 style="font-size:16px;">Character Building Activities</h4>
<table class="table table-striped table-bordered table-hover" border="1">
                                    <thead>
                                        <tr>
                                            <th>Learning Areas</th>   
                                            <th>1</th>   
                                            <th>2</th>   
                                            <th>3</th>   
                                            <th>4</th>   
                                            <th>Final Rating</th>                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>Filipino</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>English</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Mathematics</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Science $ Health</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>MAKABAYAN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Heograpiya Kasaysayan/Sibika (HKS)</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Edukasyong Pantahanan (EPP)</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Musika,Sining at Edukasyon sa Pagpalakas ng Katawan (MSEP)</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                       <tr>
                                    <td>Character Education</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                     <tr>
                                    <td>Average</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                                    </tbody>
                                </table>
</div>
<div class="row">
<p style="align-center">
<h3>Guidelines for Rating</h3>
</p><strong>
A - Outstanding<br />
B - Very Good<br />
C - Good<br />
D - Fair<br />
E - Poor<br />
</strong>

</div>

<div class="row">
<p style="align-center">
<h4 style="font-size:16px;">Narrative Report</h4>
</p>
<p align="left">First Grading __________________________________________________</p>
<p align="left">____________________________________________________________________________</p>
<br />
<p align="left">Second Grading __________________________________________________</p>
<p align="left">____________________________________________________________________________</p>
<br />
<p align="left">Third Grading __________________________________________________</p>
<p align="left">____________________________________________________________________________</p>
<br />
<p align="left">Fourth Grading __________________________________________________</p>
<p align="left">____________________________________________________________________________</p>
<br />

<p style="align-center">
<h4 style="font-size:16px;">Parents Comment / Sigature</h4>
</p>
<p align="left">First Grading __________________________________________________</p>
<p align="left">____________________________________________________________________________</p>
<br />
<p align="left">Second Grading __________________________________________________</p>
<p align="left">____________________________________________________________________________</p>
<br />
<p align="left">Third Grading __________________________________________________</p>
<p align="left">____________________________________________________________________________</p>
<br />
<p align="left">Fourth Grading __________________________________________________</p>
<p align="left">____________________________________________________________________________</p>
<br />

</div>



</div>


    ';
}



$content = $data;
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');

$obj_pdf->Output('output.pdf', 'I');
?>
