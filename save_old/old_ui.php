<?php
//================ làm tròn số ===================//
function html_loading_data($_dates, $dates, $string_value)
{
    $html_data = '';
    $html_data .= '<tr>';
    $html_data .= '<td nowrap rowspan="2" colspan="1"><center>' . $_date . '</center></td>';
    $html_data .= '<td nowrap rowspan="1" colspan="1" style="background-color:#ddd;"><center>&nbsp;Max</center></td>';

    // Các giá trị trong ngày
    // Chạy từ 1 đến 110
    for ($x = 1; $x < 111; $x++) {
        $html_data .= '<td nowrap rowspan="2"><center>' . hRound($string_value[$x][$date][0], 1) . '</center></td>';
    }

    $html_data .= '</tr>';
    $html_data .= '<tr>';
    $html_data .= '<td nowrap rowspan="1" colspan="1" style="background-color:#ddd;"><center>Min</center></td>';
    $html_data .= '</tr>';

    return <<<HTML
        <thead>
            <tr>
                <th nowrap rowspan="1" colspan= "2" style="width:20%;background-color:#e7eaef;"><h4><center>Date</center> </h4></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MSD-ESSEMBLY-1-3 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MSD-ESSEMBLY-4-5 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>COMPLETE-1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>ADT-1 <br>(kw)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>DB HUMP-2 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP-AC-02 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-07 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-220-2 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-06 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>BURN IN RACK <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>BURN CHAMBER 380 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>BURN IN 190 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>BURN CHAMBER 220V <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>2F-PANEL <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD LP-2.6 <br>(kw)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD MP-AC-05 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD-MP-FAN2<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD-PP-2.1<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD P-190V-1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD PP-2.9 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD LP-2.5 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>BFAN-2F <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP-03 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD-MP-AC-07 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD-PP 2.7-9 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD-PP 2.6 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD-PP 2.5 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>AHU F1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>FORM LASER MARKING <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP 02 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>ELS 2 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>ELS 1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP TEST 02 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP 01 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>FAN 1F <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-220V-3 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD LP 2.7 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD MP-AC-06 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>DP-2.2 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-01A <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-220V-1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP-2.1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP-TP-1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PANEL OCQ <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP1-PANEL <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP-S1-PANEL <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP-M1-PANEL <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PANEL <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-ST-02 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>DP-AC-PANEL <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP-ST-AC-02 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP-BURN-380V <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP-BURN-380 <<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LIGHTING-BURN <<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MORMAL BURN-380 <<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MORMAL BURN-220V <<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-F2-11-13 <<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-220V-2 <<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-F2-3 <<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-7-10 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-05 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-4-6 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-1-3 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>F2-FAN-SMT <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-220-1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-F2-14-15 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-OFF <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>TD PP1.3 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PANEL 01 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PANEL 02 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP 1.4 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMDB <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMD 2 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMD1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP1.2 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-1.3 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP-2.4 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-01B <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP2.3 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MAIN PANEL<br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>P-AI-F1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LASER MARKING <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>SMT-220V-4 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PN-2-AI-280V <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP-AC-1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP 1.2 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP 1.1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP-AC-01L <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP-1.1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP-AC-03 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>AIB <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-03 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-04 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP 1.6 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP-AC-02 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-1.8 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP1.7 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP-1.4 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-1.5 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MPST-AC-01 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-ST-01 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP COMP 2PL <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP COMP 01 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP COMP A <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP COMP B  <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>MP EF 01 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>PP COMP  <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>CANTEEN 1 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>CANTEEN 2 <br>(kwh)</h4></center></th>
                <th nowrap rowspan="1" colspan= "1" style='background-color:#e7eaef;'><h4><center>LP-GUARD <br>(kwh)</h4></center></th>
            </tr>
        </thead>
        <caption style="display: none">
            <b style="background-color: #8FE40F; text-align:right" ><h3>ELECTRIC PANEL - Report by Day, Monthly</h3></b> 
        </caption>
        <tbody id ='table_data'>
        </tbody>
    HTML;
}

?>
