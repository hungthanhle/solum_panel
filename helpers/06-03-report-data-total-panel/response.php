<?php
function html_loading_data($months, $area_machine_tags)
{
    $html = <<<HTML
        <caption style="display: none">
            <b style="background-color: #8FE40F; text-align:center" ><h3>MONTHLY REPORT</h3></b> 
        </caption>
        <tbody>
            <tr>
                <td>AREA</td>
                <td style="background: linear-gradient(to bottom left, white, white 49%, black 49%, black 51%, white 51%, white);position: relative;">
                    <span style="
                        position: absolute;
                        top: 5px;
                        right: 10px;
                        z-index: 1;
                    ">DATE</span>
                    <br />
                    <span style="
                        position: absolute;
                        bottom: 5px;
                        left: 10px;
                        z-index: 1;
                    ">PANEL</span>
                </td>
HTML;
    foreach ($months as $month) { 
        $html .= "<td>{$month}</td>";
    }

    $html .= <<<HTML
                <td>
                    Total by panel <br>
                    kWh
                </td>
                <td>
                    Total by area<br>
                    kWh
                </td>
                <td>
                    Total by area<br>
                    kgC02
                </td>
            </tr>
HTML;
    $final_total = [];
    $final_total["total_area"] = 0;
    $final_total["total_CO2"] = 0;
    foreach ($area_machine_tags as $area => $key_names) {
        // Each area
        $key_names_count = count($key_names);
        $html_area = "";


        // Each key_name in area
        $total_area = 0;
        $isFirst = true;
        $final = array_fill_keys($months, 0);
        foreach ($key_names as $key_name => $values) {
            $html_area .= <<<HTML
                <tr>
HTML;
            // Nếu là thẻ tr đầu tiên của Area cần có tên Area
            if ($isFirst) {
                $html_area .= "(area_name_td_tag)";
            }
            $html_area .= "<td>{$key_name}</td>";
            $total_keyname = 0;
            foreach ($months as $month) {
                $value = $values[$month];
                $html_area .= "<td>{$value}</td>";
                $total_keyname += $value;
                $final[$month] += $value;
            }
            $html_area .= "<td>{$total_keyname}</td>";
            $total_area += $total_keyname;
            // Nếu là thẻ tr đầu tiên của Area cần có tên Total
            if ($isFirst) {
                $html_area .= "(total_td_tags)";
            }
            $html_area .= <<<HTML
                </tr>
HTML;
            $isFirst = false;
        }
        
        $area_name_td_tag = "<td rowspan='{$key_names_count}'>{$area}</td>";
        $total_td_tags = "<td rowspan='{$key_names_count}'>{$total_area}</td>";
        $total_CO2 = $total_area*0.667; // CO2 = kWh * 0.667
        $total_td_tags .= "<td rowspan='{$key_names_count}'>{$total_CO2}</td>";
        $html_area = preg_replace('(area_name_td_tag)', $area_name_td_tag, $html_area);
        $html_area = preg_replace('(total_td_tags)', $total_td_tags, $html_area);
        $final_total["total_area"] += $total_area;
        $final_total["total_CO2"] += $total_CO2;
     
        $html .= $html_area;
    }

    $html .= <<<HTML
        <tr>
            <td colspan="2">TOTAL</td>
HTML;
    foreach ($months as $month) {
        $value = $final[$month];
        $html .= "<td>{$value}</td>";
    }
    $html .= "<td>{$final_total["total_area"]}</td>";
    $html .= "<td>{$final_total["total_area"]}</td>";
    $html .= "<td>{$final_total["total_CO2"]}</td>";
    $html .= <<<HTML
        </tr>
HTML;
    $html .= <<<HTML
    </tbody>
HTML;
    
    return $html;
}

?>
