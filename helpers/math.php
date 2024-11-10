<?php
function hRoundNum($value, $end){
    $result = hRound($value,$end);
    if(!is_numeric($result)){
        $result = 0;
    }
    return $result;
}
function hRound($value,$end){
	if($value <> '--'){
		$value = Round($value,$end);
		$value = number_format($value, $end, '.', '');
	}
	return $value;
	
}

function dates_info($start_date, $end_date) {
    $begin = new DateTime($start_date);
    $end = new DateTime($end_date);
    $end = $end->modify('+1 day');

    $interval = new DateInterval('P1D');
	$daterange = new DatePeriod($begin, $interval ,$end);

    // Khởi tạo đối tượng stdClass
    $result = new stdClass();
    $result->dates = []; // format Ymd
    $result->_dates = []; // format Y-m-d
    $result->day_count = 0; // mốc thời gian tối đa
    
	foreach($daterange as $date){
		$result->_dates[] = $date->format("Y-m-d");
		$result->dates[] = $date->format("Ymd");
		$result->day_count++;
	}
    
    return $result;

    /*
        $result = dates_info("2023-01-01", "2023-01-05");
        print_r($result->dates);     // Kết quả: ["20230101", "20230102", "20230103", "20230104", "20230105"]
        print_r($result->_dates);    // Kết quả: ["2023-01-01", "2023-01-02", "2023-01-03", "2023-01-04", "2023-01-05"]
        echo $result->day_count;     // Kết quả: 5 (số ngày trong khoảng thời gian)
    */
}
?>
