<?php

header('Content-Type: text/plain; version=0.0.4; charset=utf-8');
$powersocket_ips = ["192.168.100.199"];

function get_api_data($ip, $path) {

  # Create curl object
  $ch = curl_init();
  $timeout = 5;
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

  # Get most recent telegram
  curl_setopt($ch, CURLOPT_URL, "http://".$ip.$path);
  $data = curl_exec($ch);
  curl_close($ch);

  return json_decode($data, true);
}

function parse_data($json_data) {
  echo "# HELP wifi_strength Wifi strenght\n";
  echo "# TYPE wifi_strength gauge\n";
  echo 'wifi_strength{powersocket="'.$json_data['serial'].'"} '.$json_data['wifi_strength']."\n";

  echo "# HELP total_liter_m3 Total water consumption m3\n";
  echo "# TYPE total_liter_m3 gauge\n";
  echo 'total_liter_m3{powersocket="'.$json_data['serial'].'"} '.$json_data['total_liter_m3']."\n";

  echo "# HELP active_liter_lpm active water consumption lpm\n";
  echo "# TYPE active_liter_lpm gauge\n";
  echo 'active_liter_lpm{powersocket="'.$json_data['serial'].'"} '.$json_data['active_liter_lpm']."\n";
}

foreach ($powersocket_ips as $ip) {
  $data = get_api_data($ip, "/api");
  $data += get_api_data($ip, "/api/v1/data");
  parse_data($data);
}

?>
