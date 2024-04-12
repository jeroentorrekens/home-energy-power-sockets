<?php

header('Content-Type: text/plain; version=0.0.4; charset=utf-8');
$inverter_ips = ["192.168.1.8"];

function get_api_data($ip, $path, $username, $password) {

  # Create curl object
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

  # Get most recent telegram
  curl_setopt($ch, CURLOPT_URL, "http://".$ip.$path);
  curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
  $data = curl_exec($ch);
  curl_close($ch);

  $lines = explode("\n", $data);
  $matches = [];
  foreach( $lines as $line ) {
    preg_match('/^var (.*) = \"(.*)\";.*$/', $line, $var);
    if ( count($var) > 0 ) {
      $matches[$var[1]] = trim($var[2]);
    }
  }

  return $matches;
}

function parse_data($data) {
  echo "# HELP solis_power_now Solis current power (W)\n";
  echo "# TYPE solis_power_now gauge\n";
  if (array_key_exists('webdata_now_p', $data) && intval($data['webdata_now_p'] > 0) && intval($data['webdata_now_p'] < 12000)) {
    echo 'solis_power_now '.$data['webdata_now_p']."\n";
  } else {
    echo "solis_power_now 0\n";
  }

  echo "# HELP solis_power_today Solis power generated today (kWh)\n";
  echo "# TYPE solis_power_today gauge\n";
  if (array_key_exists('webdata_today_e', $data) && floatval($data['webdata_today_e'] > 0) && floatval($data['webdata_today_e'] < 100)) {
    echo 'solis_power_today '.$data['webdata_today_e']."\n";
  } else {
    echo "solis_power_today 0\n";
  }

  echo "# HELP solis_power_total_e Solis power generated total (kWh)\n";
  echo "# TYPE solis_power_total_e counter\n";
  if (array_key_exists('webdata_total_e', $data)) {
    echo 'solis_power_total_e '.$data['webdata_total_e']."\n";
  } else {
    echo "solis_power_total_e 0\n";
  }

}

foreach ($inverter_ips as $ip) {
  $data = get_api_data($ip, "/status.html", "admin", "admin");
  parse_data($data);
}

?>
