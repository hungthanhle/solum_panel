<?php
//================ connect database ===================//
include "../../connect_string.php";
//================ tính thời gian ===================//
include "../../helpers/math.php";
//================ response data html ===================//
include "../../helpers/06-01-report-data-monthly-panel/response.php";

$act = "";

if (isset($_REQUEST['act']))
	$act = $_REQUEST['act'];

switch($act){
	
	//================ thông số min max của 1 ngày ===================//
	case 'select':
		
		$factory 			= $_REQUEST['factory'];
		$machine 			= $_REQUEST['machine'];
		$start_date 		= $_REQUEST['start_date'];
		$end_date 			= $_REQUEST['end_date'];

		$dates_info = dates_info($start_date, $end_date);
		// $dates_info = dates_info("2023-01-01", "2023-01-05");
		$dates = $dates_info->dates;
		// $dates = ["20230101", "20230102", "20230103", "20230104", "20230105"]
		$_dates = $dates_info->_dates;
		// $_dates = ["2023-01-01", "2023-01-02", "2023-01-03", "2023-01-04", "2023-01-05"]
		$day_count = $dates_info->day_count;
		// $day_count = 5
		
		//---------------------------lấy dữ liệu trong bảng -------------------------------// 
		if($machine == 'ELECTRIC_PANEL')
		{
			$KEYNAME_AREA = [
				"MSDESSEMBLY13" => "ADT",
				"MSDESSEMBLY45" => "ADT",
				"COMPLETE1" => "ADT",
				"ADT1" => "ADT",
				"DBHUMP2" => "ADT",
				"MPAC02" => "ADT",
				"LP07" => "ADT",
				"SMT2202" => "ADT",
				"LP06" => "ADT",
				"BURNINRACK" => "ADT",
				"BURNCHAMBER380" => "ADT",
				"BURNIN190" => "ADT",
				"BURNCHAMBER220V" => "ADT",
				"2FPANEL" => "SMPS",
				"TDLP26" => "SMPS",
				"TDMPAC05" => "SMPS",
				"TDMPFAN2" => "SMPS",
				"TDPP21" => "SMPS",
				"TDP190V1" => "SMPS",
				"TDPP29" => "SMPS",
				"TDLP25" => "SMPS",
				"FAN2F" => "SMPS",
				"PP03" => "SMPS",
				"TDMPAC07" => "LIGHT",
				"TDPP279" => "LIGHT",
				"TDPP26" => "LIGHT",
				"TDPP25" => "LIGHT",
				"AHUF1" => "ELS",
				"FORMLASERMARKING" => "ELS",
				"LP02" => "ELS",
				"ELS2" => "ELS",
				"ELS1" => "ELS",
				"MPTEST02" => "ELS",
				"LP01" => "ELS",
				"FAN1F" => "3 IN 1 POWER",
				"SMT220V3" => "3 IN 1 POWER",
				"TDLP27" => "3 IN 1 POWER",
				"TDMPAC06" => "3 IN 1 POWER",
				"DP22" => "HYBRID",
				"LP01A" => "HYBRID",
				"SMT220V1" => "HYBRID",
				"PP21" => "HYBRID",
				"PPTP1" => "HYBRID",
				"PANELOCQ" => "HYBRID",
				"LP1PANEL" => "POWER MODULE",
				"PPS1PANEL" => "POWER MODULE",
				"PPM1PANEL" => "POWER MODULE",
				"PANEL" => "POWER MODULE",
				"LPST02" => "POWER MODULE",
				"DPACPANEL" => "POWER MODULE",
				"MPSTAC02" => "POWER MODULE",
				"MPBURN380V" => "SERVER",
				"MPBURN380" => "SERVER",
				"LIGHTINGBURN" => "SERVER",
				"MORMALBURN380" => "SERVER",
				"MORMALBURN220V" => "SERVER",
				"SMTF21113" => "SMD A",
				"SMT220V2" => "SMD A",
				"SMTF23" => "SMD A",
				"SMT710" => "SMD A",
				"LP05" => "SMD A",
				"SMT46" => "SMD A",
				"SMT13" => "SMD A",
				"F2FANSMT" => "SMD A",
				"SMT2201" => "SMD A",
				"SMTF21415" => "SMD A",
				"LPOFF" => "SMD A",
				"TDPP13" => "SMD B",
				"PANEL01" => "SMD B",
				"PANEL02" => "SMD B",
				"LP14" => "SMD B",
				"SMDB" => "SMD B",
				"SMD2" => "SMD B",
				"SMD1" => "SMD B",
				"PP12" => "SMD B",
				"LP13" => "SMD B",
				"PP24" => "SMD C",
				"LP01B" => "SMD C",
				"PP23" => "SMD C",
				"MAINPANEL" => "SMD C",
				"PAIF1" => "AI-A",
				"PLASERMARKING" => "AI-A",
				"SMT220V4" => "AI-A",
				"PN2AI380V" => "AI-A",
				"MPAC1" => "AI-A",
				"LP12" => "AI-B",
				"LP11" => "AI-B",
				"MPAC01" => "AI-B",
				"PP11" => "AI-B",
				"MPAC03" => "AI-B",
				"AIB" => "AI-B",
				"LP03" => "WH-A",
				"LP04" => "WH-A",
				"LP16" => "WH-B",
				"MPAC02" => "WH-B",
				"LP18" => "WH-B",
				"LP17" => "WH-B",
				"PP14" => "WH-B",
				"LP15" => "WH-B",
				"MPSTAC01" => "WH-C",
				"LPST01" => "WH-C",
				"PPCOMP2PL" => "AIR COMP A",
				"PPCOMP01" => "AIR COMP A",
				"MPCOMPA" => "AIR COMP A",
				"MPCOMPB" => "AIR COMP B",
				"MPEF01" => "AIR COMP B",
				"PPCOMP" => "AIR COMP C",
				"CANTEEN1" => "CANTEEN",
				"CANTEEN2" => "CANTEEN",
				// "LPGUARD" => ,
			];
			
			/* //-- Dùng VIEW - View_data_kwh_total_2 ----------//

			$sql = "SELECT [key_name], [ymd], [total] FROM [KangWoon].[dbo].[View_data_kwh_total_2]
					WHERE [factory] = '$factory'
					AND [machine] = '$machine'
					AND  [key_name] IN ('$key_names_str')
					AND [ymd] >= '$start_date' and [ymd] <= '$end_date'";
			// echo($sql);
			$stmt = sqlsrv_query( $conn, $sql );
			while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ) {
				$x 		= $KEYNAMES[$row['key_name']];
				$ymd	= $row['ymd'];
				$string_value[$x][$ymd][0] = $row['total'];
				// echo json_encode($row);
			}
			sqlsrv_free_stmt($stmt);

			*/
			

			//-- Dùng VIEW - View_data_kwh_total_2 ----------//
			//-- Biến kết quả ----------//
			$area_machine_tags = [];
			//-- Biến kết quả ----------//
			
			$sql = "SELECT
						table_main.area,
						table_main.factory,
						table_main.machine,
						table_main.machine_group,
						table_main.key_name,
						table_main.KeyGateway,
						table_main.Machine_Description,
						table_main.Tags_Description
					FROM dbo.View_Sys_Area_Machine_Tags AS table_main
					WHERE table_main.key_data = '1' AND table_main.Area_Status = '1' AND table_main.Factory_Status = '1' AND table_main.Machine_Status = '1' AND table_main.Group_Status = '1' AND table_main.Tags_Status = '1'
					AND [factory] = '$factory'
					AND [machine] = '$machine'";
			$stmt = sqlsrv_query( $conn, $sql );
			$join_conditions = [];
			while( $area_machine_tag = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ) {
				$key_name = $area_machine_tag['key_name'];
				$area = isset($KEYNAME_AREA[$key_name]) ? $KEYNAME_AREA[$key_name] : "OTHER AREA";
				$area_machine_tags[$area][$key_name] = array_fill_keys($dates, "--");
				
				// hash key = key_name, area, factory, machine, machine_group
				$hash_key = implode('|', [
					$area_machine_tag['key_name'],
					$area_machine_tag['area'],
					$area_machine_tag['factory'],
					$area_machine_tag['machine'],
					$area_machine_tag['machine_group']
				]);
				// Gán vào mảng hash để kiểm tra sau này
				$join_conditions[$hash_key] = 1;
			}
			sqlsrv_free_stmt($stmt);


			$sql = "SELECT
						table_b.area,
						table_b.factory,
						table_b.machine,
						table_b.machine_group,
						table_b.key_name,
						table_b.Max_Value - table_b.Min_Value AS total,
						table_b.ymd,
						table_b.date_time
					FROM dbo.View_Data_KeyData_1KWH_IIOT_1 AS table_b
					WHERE table_b.ymd <> ''
					AND [factory] = '$factory'
					AND [machine] = '$machine'
					AND [ymd] >= '$start_date' and [ymd] <= '$end_date';";
			$stmt = sqlsrv_query( $conn, $sql );
			while( $area_machine_tag = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ) {
				$key_name = $area_machine_tag['key_name'];
				$area = isset($KEYNAME_AREA[$key_name]) ? $KEYNAME_AREA[$key_name] : "OTHER AREA";
				$ymd = $area_machine_tag['ymd'];
				$total = $area_machine_tag['total'];
				// join condition
				$hash_key = implode('|', [
					$area_machine_tag['key_name'],
					$area_machine_tag['area'],
					$area_machine_tag['factory'],
					$area_machine_tag['machine'],
					$area_machine_tag['machine_group']
				]);
				if (isset($join_conditions[$hash_key])) {
					$area_machine_tags[$area][$key_name][$ymd] = $total;
				}
			}
			sqlsrv_free_stmt($stmt);

			/*
				echo json_encode($area_machine_tags);
				exit;
				break;
			*/

			//--------------------------- response html data -------------------------------//
			$html = html_loading_data($_dates, $dates, $area_machine_tags);
			//--------------------------- response html data -------------------------------//
			
			echo($html);
			exit;
			break;
		}
	
}

?>
