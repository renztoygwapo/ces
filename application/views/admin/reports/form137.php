<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
    td {
        padding: 5px 10px 5px 10px;
    }

    </style>
    <body>
      <?php foreach ($students as $student) { ?>
     
        <div class="container">
            <div>
                <p style="text-align:center;">
                    <em>(Republic of the Philippines)</em></br>
                    Kagawaran ng Edukasyon</br>
                    <em>(Department of Education)</em></br>
                    <strong>KAWANIHAN NG EDUKASYONG ELEMENTARY</strong></br>
                    (BUREAU OF ELEMENTARY EDUCATION)</br>
                    Rehiyon XI</br>
                    (Region XI)</br>
                    DIVISION OF DAVAO DEL NORTE</br>
                    <strong>PALAGIANG TALAAN SA MABABANG PAARALAN</strong></br>
                    (ELEMENTARY SCHOOL PERMANENT RECORD)</br>
                </p></br>
                <p style="text-align:center;">Pangalan : <u><?php echo $student->firstname; ?> <?php echo $student->lastname; ?> </u>Paaralan : <u>Carmen Elementary School </u></p>
                <pre style="text-align:left;">                      (Name)  Apelyido        Unang Pangalan      M.I       (Division)                                  (School)</pre>
                <p style="text-align:center;">Kasarian <u><?php echo $student->gender; ?></u> Petsa ng Kapanganakan _________________ Pook _____________________________ Petsa ng Pagpasok ____________________</p>
                <pre style="text-align:left;">                      (Sex)                      (Date of Birth)               (Place) Bayan / Lalawigan / Lungsod    (Date of Entrance)</pre></br>
                <p style="text-align:center;">Magulang/Tapag-alaga ________________________________________________________________________________________________________________</p>
                <pre style="text-align:left;">                      (Parent/Gardian)           Panganlan                      Tirahan                                        Hanapbuhay</pre>
                <pre style="text-align:left;">                                                  (Name)                   (Address)                                      (Occupation)</pre></br>
                <p style="text-align:center;"><strong>PAG-UNLAD SA MABABANG PAARALAN</strong></br><em>(ELEMENTARY SCHOOL PROGRESS)</em></p>
            </div>

            <div style="margin:50px 200px;">
                <table style="witdh:50%; float:left;">
                      <tr>
                        <td colspan="6"><b>Grade I - School</b> ___Mansanas____________________________</td>
                      </tr>
                      <tr>
                        <td colspan="6">School Year _______________</td>
                      </tr>
                      <tr>
                        <th rowspan="2" style="padding: 0px 40px;">Learning Areas</th>
                        <th colspan="4" style="padding: 10px 15px;">Periodic Rating</th>
                        <th rowspan="2" style="padding: 0px 35px 0px 35px;">Remarks</th>
                      </tr>
                      <tr>
                        <td style="padding: 0px 10px 0px 10px;">1</td>
                        <td style="padding: 0px 10px 0px 10px;">2</td>
                        <td style="padding: 0px 10px 0px 10px;">3</td>
                        <td style="padding: 0px 10px 0px 10px;">4</td>
                      </tr>
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
                        <td>MAKABAYAN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Sibika at Kultura</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Character Education</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="6">Eligible for Admission to Grade _______________</td>
                      </tr>
                </table>
                
                <table style="witdh:50%;">
                      <tr>
                        <td colspan="6"><b>Grade II - School</b> _______________________________</td>
                      </tr>
                      <tr>
                        <td colspan="6">School Year _______________</td>
                      </tr>
                      <tr>
                        <th rowspan="2" style="padding: 0px 40px;">Learning Areas</th>
                        <th colspan="4" style="padding: 10px 15px;">Periodic Rating</th>
                        <th rowspan="2" style="padding: 0px 35px 0px 35px;">Remarks</th>
                      </tr>
                      <tr>
                        <td style="padding: 0px 10px 0px 10px;">1</td>
                        <td style="padding: 0px 10px 0px 10px;">2</td>
                        <td style="padding: 0px 10px 0px 10px;">3</td>
                        <td style="padding: 0px 10px 0px 10px;">4</td>
                      </tr>
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
                        <td>MAKABAYAN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Sibika at Kultura</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Character Education</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="6">Eligible for Admission to Grade _______________</td>
                      </tr>
                </table>
                </br>
                <table style="witdh:50%; float:left;">
                      <tr>
                        <td colspan="6"><b>Grade III - School</b> _______________________________</td>
                      </tr>
                      <tr>
                        <td colspan="6">School Year _______________</td>
                      </tr>
                      <tr>
                        <th rowspan="2" style="padding: 0px 40px;">Learning Areas</th>
                        <th colspan="4" style="padding: 10px 15px;">Periodic Rating</th>
                        <th rowspan="2" style="padding: 0px 35px 0px 35px;">Remarks</th>
                      </tr>
                      <tr>
                        <td style="padding: 0px 10px 0px 10px;">1</td>
                        <td style="padding: 0px 10px 0px 10px;">2</td>
                        <td style="padding: 0px 10px 0px 10px;">3</td>
                        <td style="padding: 0px 10px 0px 10px;">4</td>
                      </tr>
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
                        <td>MAKABAYAN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Sibika at Kultura</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Character Education</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="6">Eligible for Admission to Grade _______________</td>
                      </tr>
                </table>
                <table style="witdh:50%;">
                      <tr>
                        <td colspan="6"><b>Grade IV - School</b> _______________________________</td>
                      </tr>
                      <tr>
                        <td colspan="6">School Year _______________</td>
                      </tr>
                      <tr>
                        <th rowspan="2" style="padding: 0px 40px;">Learning Areas</th>
                        <th colspan="4" style="padding: 10px 15px;">Periodic Rating</th>
                        <th rowspan="2" style="padding: 0px 35px 0px 35px;">Remarks</th>
                      </tr>
                      <tr>
                        <td style="padding: 0px 10px 0px 10px;">1</td>
                        <td style="padding: 0px 10px 0px 10px;">2</td>
                        <td style="padding: 0px 10px 0px 10px;">3</td>
                        <td style="padding: 0px 10px 0px 10px;">4</td>
                      </tr>
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
                        <td>MAKABAYAN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*HEKASI</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*EPP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*MSEP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Character Education</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="6">Eligible for Admission to Grade _______________</td>
                      </tr>
                </table>
                </br>
                <table style="witdh:50%; float:left;">
                      <tr>
                        <td colspan="6"><b>Grade V - School</b> _______________________________</td>
                      </tr>
                      <tr>
                        <td colspan="6">School Year _______________</td>
                      </tr>
                      <tr>
                        <th rowspan="2" style="padding: 0px 40px;">Learning Areas</th>
                        <th colspan="4" style="padding: 10px 15px;">Periodic Rating</th>
                        <th rowspan="2" style="padding: 0px 35px 0px 35px;">Remarks</th>
                      </tr>
                      <tr>
                        <td style="padding: 0px 10px 0px 10px;">1</td>
                        <td style="padding: 0px 10px 0px 10px;">2</td>
                        <td style="padding: 0px 10px 0px 10px;">3</td>
                        <td style="padding: 0px 10px 0px 10px;">4</td>
                      </tr>
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
                        <td>MAKABAYAN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*HEKASI</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*EPP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*MSEP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Character Education</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="6">Eligible for Admission to Grade _______________</td>
                      </tr>
                </table>
                <table style="witdh:50%;">
                      <tr>
                        <td colspan="6"><b>Grade VI - School</b> _______________________________</td>
                      </tr>
                      <tr>
                        <td colspan="6">School Year _______________</td>
                      </tr>
                      <tr>
                        <th rowspan="2" style="padding: 0px 40px;">Learning Areas</th>
                        <th colspan="4" style="padding: 10px 15px;">Periodic Rating</th>
                        <th rowspan="2" style="padding: 0px 35px 0px 35px;">Remarks</th>
                      </tr>
                      <tr>
                        <td style="padding: 0px 10px 0px 10px;">1</td>
                        <td style="padding: 0px 10px 0px 10px;">2</td>
                        <td style="padding: 0px 10px 0px 10px;">3</td>
                        <td style="padding: 0px 10px 0px 10px;">4</td>
                      </tr>
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
                        <td>MAKABAYAN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*HEKASI</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*EPP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*MSEP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>*Character Education</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="6">Eligible for Admission to Grade _______________</td>
                      </tr>
                </table>
            </div>
            <div style="margin:0px 200px;">
                <table style="witdh:100%;"> 
                      <tr>
                        <td></td>
                        <td colspan="2">Gr.____</td>
                        <td colspan="3">Sch. Yr. _____</td>
                        <td colspan="2">Gr.____</td>
                        <td colspan="3">Sch. Yr. _____</td>
                        <td colspan="2">Gr.____</td>
                        <td colspan="3">Sch. Yr. _____</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <th>F.R</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <th>F.R</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <th>F.R</th>
                      </tr>
                      <tr>
                        <th style="text-align: left; padding-right:105px;">1. Honesty</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">2. Courtesy</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;padding-right:125px;">3. Helpfulness and Cooperation</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;left;padding-right:115px;">4. Resourcefulness and Creativity</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">5. Consideration for Others</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">6. Sportsmanship</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">7. Obedience</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">8. Self-Reliance</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">9. Industry</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">10. Cleanliness and Orderliness</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">11. Promptness and Punctuality</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">12. Sense of Responsibility</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">13. Love of God</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">14. Patriotism & Love of Country</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">Average</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                </table>
                </br>
                <table style="witdh:100%;"> 
                      <tr>
                        <td></td>
                        <td colspan="2">Gr.____</td>
                        <td colspan="3">Sch. Yr. _____</td>
                        <td colspan="2">Gr.____</td>
                        <td colspan="3">Sch. Yr. _____</td>
                        <td colspan="2">Gr.____</td>
                        <td colspan="3">Sch. Yr. _____</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <th>F.R</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <th>F.R</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <th>F.R</th>
                      </tr>
                      <tr>
                        <th style="text-align: left;">1. Honesty</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">2. Courtesy</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">3. Helpfulness and Cooperation</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;left;left;padding-right:115px;">4. Resourcefulness and Creativity</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">5. Consideration for Others</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">6. Sportsmanship</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">7. Obedience</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">8. Self-Reliance</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">9. Industry</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">10. Cleanliness and Orderliness</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">11. Promptness and Punctuality</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">12. Sense of Responsibility</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">13. Love of God</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">14. Patriotism & Love of Country</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="text-align: left;">Average</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <th colspan="5" style="text-align:left;">A - Outstanding</th>
                        <th colspan="5" style="text-align:left;">C - Good</th>
                        <th colspan="5" style="text-align:left;">E - Poor</th>
                      </tr>
                      <tr>
                        <td></td>
                        <th colspan="5" style="text-align:left;">B - Very Good</th>
                        <th colspan="5" style="text-align:left;">D - Fair</th>
                        <th colspan="5" style="text-align:left;"></th>
                      </tr>
                </table>
                </br>
                <p><strong>IV. ATTENDANCE RECORD</strong></p>
                <table style="witdh:100%;">
                    <tr>
                        <td style="text-align:center;padding: 0px 25px;">Grade</td>
                        <td style="text-align:center; padding: 0px 30px;">No. of</br>School</br>Days</td>
                        <td style="text-align:center;padding: 0px 25px;">No. of School</br>Days</br>Absent</td>
                        <td style="text-align:center;padding: 0px 75px;">Cause</td>
                        <td style="text-align:center;padding: 0px 25px;">No. of</br>Times</br>Tardy</td>
                        <td style="text-align:center;padding: 0px 75px;">Cause</td>
                        <td style="text-align:center;">No. of School</br>Days</br>Present</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                </br>
                <p style="text-align:center;"><strong>CERTIFICATE OF TRANSFER</strong></p>
                <pre>
        <b>TO WHOM IT MAY CONCERN:</b>
            This is to certify that this is a true record of the Elementary School Record of

        _______________________________. He/She is eligible for transfer and admission to

        Grade/Year ____________________________.



        _______________________________                               _____________________________
                    Date                                                        Signature
                </pre>
            </div>
        </div>
        <?php } ?>
    </body>
</html>
<script type="text/javascript">
    window.print();
</script>