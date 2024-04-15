<?php

$values = array(
                "96.1.4"=> array("name"=> "version", "unit"=> "String", "value"=> "", "type"=> "untyped", "help" => "Version of software on meter", "multiplication"=>1.0),
                "96.1.1"=> array("name"=> "serial_number", "unit"=> "String", "value"=> "", "type"=> "untyped", "help" => "Serial number of meter", "multiplication"=>1.0),
                "1.0.0"=> array("name"=> "current_date", "unit"=> "Date YYMMDDHHMMSS W=winter time, S=summer time", "value"=> "", "type"=> "untyped", "help" => "Current date on the meter", "multiplication"=>1.0),
                "1.8.0"=> array("name"=> "power_import_total", "unit"=> "kWh", "value"=> 0, "type"=> "counter", "help" => "Imported/consumed power day+night", "multiplication"=>1.0),
                "1.8.1"=> array("name"=> "power_import_day", "unit"=> "kWh", "value"=> 0, "type"=> "counter", "help" => "Imported/consumed power during the day", "multiplication"=>1.0),
                "1.8.2"=> array("name"=> "power_import_night", "unit"=> "kWh", "value"=> 0, "type"=> "counter", "help" => "Imported/consumed power during the night/weekend", "multiplication"=>1.0),
                "2.8.0"=> array("name"=> "power_export_total", "unit"=> "kWh", "value"=> 0, "type"=> "counter", "help" => "Exported power day+night", "multiplication"=>1.0),
                "2.8.1"=> array("name"=> "power_export_day", "unit"=> "kWh", "value"=> 0, "type"=> "counter", "help" => "Exported power during the day", "multiplication"=>1.0),
                "2.8.2"=> array("name"=> "power_export_night", "unit"=> "kWh", "value"=> 0, "type"=> "counter", "help" => "Exporter power during the night/weekend", "multiplication"=>1.0),
                "96.14.0"=> array("name"=> "tarrif_schedule", "unit"=> "1=day, 2=night", "value"=> 0, "type"=> "gauge", "help" => "Current active tarrif 1=day, 2=night", "multiplication"=>1.0),
                "1.7.0"=> array("name"=> "power_import_current", "unit"=> "kW", "value"=> 0, "type"=> "gauge", "help" => "Current power import/consumption", "multiplication"=>1.0),
                "2.7.0"=> array("name"=> "power_export_current", "unit"=> "kW", "value"=> 0, "type"=> "gauge", "help" => "Current power export", "multiplication"=>1.0),
                "21.7.0"=> array("name"=> "current_active_power_l1", "unit"=> "W", "value"=> 0, "type"=> "gauge", "help" => "Current power import on L1", "multiplication"=>1000.0),
                "41.7.0"=> array("name"=> "current_active_power_l2", "unit"=> "W", "value"=> 0, "type"=> "gauge", "help" => "Current power import on L2", "multiplication"=>1000.0),
                "61.7.0"=> array("name"=> "current_active_power_l3", "unit"=> "W", "value"=> 0, "type"=> "gauge", "help" => "Current power import on L3", "multiplication"=>1000.0),
                "22.7.0"=> array("name"=> "power_l1_export_current", "unit"=> "W", "value"=> 0, "type"=> "gauge", "help" => "Current power export on L1", "multiplication"=>1000.0),
                "42.7.0"=> array("name"=> "power_l2_export_current", "unit"=> "W", "value"=> 0, "type"=> "gauge", "help" => "Current power export on L2", "multiplication"=>1000.0),
                "62.7.0"=> array("name"=> "power_l3_export_current", "unit"=> "W", "value"=> 0, "type"=> "gauge", "help" => "Current power export on L3", "multiplication"=>1000.0),
                "32.7.0"=> array("name"=> "voltage_l1_current", "unit"=> "V", "value"=> 0, "type"=> "gauge", "help" => "Voltage on L1", "multiplication"=>1.0),
                "52.7.0"=> array("name"=> "voltage_l2_current", "unit"=> "V", "value"=> 0, "type"=> "gauge", "help" => "Voltage on L2", "multiplication"=>1.0),
                "72.7.0"=> array("name"=> "voltage_l3_current", "unit"=> "V", "value"=> 0, "type"=> "gauge", "help" => "Voltage on L3", "multiplication"=>1.0),
                "31.7.0"=> array("name"=> "current_l1_current", "unit"=> "A", "value"=> 0, "type"=> "gauge", "help" => "Current on L1", "multiplication"=>1.0),
                "51.7.0"=> array("name"=> "current_l2_current", "unit"=> "A", "value"=> 0, "type"=> "gauge", "help" => "Current on L2", "multiplication"=>1.0),
                "71.7.0"=> array("name"=> "current_l3_current", "unit"=> "A", "value"=> 0, "type"=> "gauge", "help" => "Current on L3", "multiplication"=>1.0),
                "96.3.10"=> array("name"=> "disconnected_status", "unit"=> "0=no,1=yes,2=ready for reconnect", "value"=> "", "type"=> "gauge", "help" => "Reports if your meter is disconnected from the grid", "multiplication"=>1.0),
                "17.0.0"=> array("name"=> "power_limiter", "unit"=> "kW", "value"=> 0, "type"=> "gauge", "help" => "Reports if there is a power limitation active. 999 = not active", "multiplication"=>1.0),
                "31.4.0"=> array("name"=> "current_limiter", "unit"=> "A", "value"=> 0, "type"=> "gauge", "help" => "Reports if there is current limitation active. 999 = not active", "multiplication"=>1.0),
                "96.13.0"=> array("name"=> "message_from_fluvius", "unit"=> "String", "value"=> "", "type"=> "untyped", "help" => "Future use - messages from Fluvius", "multiplication"=>1.0),
                "1.4.0"=> array("name"=> "peak_power_now", "unit"=> "kW", "value"=> "0", "type"=> "gauge", "help" => "Peak power consumption of current 15 minutes", "multiplication"=>1.0),
                "1.6.0"=> array("name"=> "peak_power_current_month", "unit"=> "kW", "value"=> "0", "type"=> "gauge", "help" => "Peak power of the current month: date and peak value", "multiplication"=>1.0),
                "98.1.0"=> array("name"=> "peak_power_last_13_months", "unit"=> "String", "value"=> "", "type"=> "untyped", "help" => "Peak power of the last 13 months: end date, peak date, peak value", "multiplication"=>1.0),
                );

function parse_as_info($line, $values) {
        preg_match('/([0-9]*-[0-9]*):([0-9]*\.[0-9]*\.[0-9]*)\(([0-9.]*)/', $line, $matches, PREG_OFFSET_CAPTURE);
        if ( count($matches) > 1 ) {
                $code = $matches[2][0];
                if ( substr_count($line, "(") > 1) {
                        # More than 1 data field for this code
                        $line = str_replace(')', '', $line);
                        $pieces = explode('(', $line);
                        if ( $code == "1.6.0" ) {
                                echo "# HELP peak_power_current_month ".$code." Peak power for the current month\n";
                                echo "# TYPE peak_power_current_month gauge\n";
                                $value = floatval(explode('*', $pieces[2])[0]);
                                echo "peak_power_current_month ".$value*1000.0."\n";
                                echo "# HELP peak_date_current_month ".$code." Peak date for the current month\n";
                                echo "# TYPE peak_date_current_month untyped\n";
                                $telegramdate = $pieces[1];
                                preg_match('/[0-9]*/', $telegramdate, $datematches, PREG_OFFSET_CAPTURE);
                                $epoch = strtotime("20".$datematches[0][0]);
                                echo "peak_date_current_month ".$epoch."\n";
                        }
                        if ( $code == "98.1.0" ) {
                                echo "# HELP peak_power_last_13_months ".$code." Peak power for the last 13 months\n";
                                echo "# TYPE peak_power_last_13_months gauge\n";
                                $value = floatval(explode('*', $pieces[6])[0]);
                                echo "peak_power_last_13_months ".$value*1000.0."\n";
                                echo "# HELP peak_date_last_13_months ".$code." Peak date for the last 13 months\n";
                                echo "# TYPE peak_date_last_13_months untyped\n";
                                $telegramdate = $pieces[5];
                                preg_match('/[0-9]*/', $telegramdate, $datematches, PREG_OFFSET_CAPTURE);
                                $epoch = strtotime("20".$datematches[0][0]);
                                echo "peak_date_last_13_months ".$epoch."\n";
                        }

                } else {
                        if ( $code == "1.6.0" ) {
                                return;
                        }
                        # Only 1 data field for this code
                        echo "# HELP ".$values[$code]["name"]." ".$code." ".$values[$code]["help"]."\n";
                        echo "# TYPE ".$values[$code]["name"]." ".$values[$code]["type"]."\n";
                        if ( $values[$code]["type"] == "gauge" || $values[$code]["type"] == "counter" ) {
                                echo $values[$code]["name"]." ".floatval($matches[3][0]*$values[$code]["multiplication"])."\n";
                        } else {
                                echo $values[$code]["name"]." ".floatval($matches[3][0])."\n";

                        }
                }
        }
}

function parse_as_data($line, $values) {
        preg_match('/([0-9]*-[0-9]*):([0-9]*\.[0-9]*\.[0-9]*)\(([0-9.]*)/', $line, $matches, PREG_OFFSET_CAPTURE);
        if ( count($matches) > 1 ) {
                $code = $matches[2][0];
                        if ( $code == "1.6.0" ) {
                                return;
                        }
                echo "# HELP ".$values[$code]["name"]." ".$code." ".$values[$code]["help"]."\n";
                echo "# TYPE ".$values[$code]["name"]." ".$values[$code]["type"]."\n";
                echo $values[$code]["name"]." ".floatval($matches[3][0])."\n";
        }
}

function parse_telegram($telegram, $values) {

        foreach(preg_split("/((\r?\n)|(\r\n?))/", $telegram) as $line){
                if ( substr($line, 0, 3) == "0-0" || substr_count($line, "(") > 1 ) {
                        parse_as_info($line, $values);
                }
                if ( substr($line, 0, 3) == "1-0" ) {
                        parse_as_data($line, $values);
                }
        }
}

header('Content-Type: text/plain; version=0.0.4; charset=utf-8');

# Create curl object
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

# Get most recent telegram
curl_setopt($ch, CURLOPT_URL, "http://192.168.100.12/api/v1/telegram");
$telegram = curl_exec($ch);
curl_close($ch);

parse_telegram($telegram, $values);

?>
