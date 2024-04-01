<?php

header('Content-Type: text/plain; version=0.0.4; charset=utf-8');
$powersocket_ips = ["192.168.100.153","192.168.100.157","192.168.100.163"];

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

  echo "# HELP total_power_import_t1_kwh Wifi strenght\n";
  echo "# TYPE total_power_import_t1_kwh gauge\n";
  echo 'total_power_import_t1_kwh{powersocket="'.$json_data['serial'].'"} '.$json_data['total_power_import_t1_kwh']."\n";

  echo "# HELP total_power_export_t1_kwh Wifi strenght\n";
  echo "# TYPE total_power_export_t1_kwh gauge\n";
  echo 'total_power_export_t1_kwh{powersocket="'.$json_data['serial'].'"} '.$json_data['total_power_export_t1_kwh']."\n";

  echo "# HELP active_power_w Wifi strenght\n";
  echo "# TYPE active_power_w gauge\n";
  echo 'active_power_w{powersocket="'.$json_data['serial'].'"} '.$json_data['active_power_w']."\n";

  echo "# HELP active_power_l1_w Wifi strenght\n";
  echo "# TYPE active_power_l1_w gauge\n";
  echo 'active_power_l1_w{powersocket="'.$json_data['serial'].'"} '.$json_data['active_power_l1_w']."\n";
}

foreach ($powersocket_ips as $ip) {
  $data = get_api_data($ip, "/api");
  $data += get_api_data($ip, "/api/v1/data");
  parse_data($data);
}

?>
