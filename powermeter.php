<?php

header('Content-Type: text/plain; version=0.0.4; charset=utf-8');
$powersocket_ips = ["192.168.100.142","192.168.100.113"];

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

  echo "# HELP active_power_l2_w Wifi strenght\n";
  echo "# TYPE active_power_l2_w gauge\n";
  echo 'active_power_l2_w{powersocket="'.$json_data['serial'].'"} '.$json_data['active_power_l2_w']."\n";

  echo "# HELP active_power_l3_w Wifi strenght\n";
  echo "# TYPE active_power_l3_w gauge\n";
  echo 'active_power_l3_w{powersocket="'.$json_data['serial'].'"} '.$json_data['active_power_l3_w']."\n";

  echo "# HELP active_voltage_l1_v Wifi strenght\n";
  echo "# TYPE active_voltage_l1_v gauge\n";
  echo 'active_voltage_l1_v{powersocket="'.$json_data['serial'].'"} '.$json_data['active_voltage_l1_v']."\n";

  echo "# HELP active_voltage_l2_v Wifi strenght\n";
  echo "# TYPE active_voltage_l2_v gauge\n";
  echo 'active_voltage_l2_v{powersocket="'.$json_data['serial'].'"} '.$json_data['active_voltage_l2_v']."\n";

  echo "# HELP active_voltage_l3_v Wifi strenght\n";
  echo "# TYPE active_voltage_l3_v gauge\n";
  echo 'active_voltage_l3_v{powersocket="'.$json_data['serial'].'"} '.$json_data['active_voltage_l3_v']."\n";

  echo "# HELP active_current_a Wifi strenght\n";
  echo "# TYPE active_current_a gauge\n";
  echo 'active_current_a{powersocket="'.$json_data['serial'].'"} '.$json_data['active_current_a']."\n";

  echo "# HELP active_current_l1_a Wifi strenght\n";
  echo "# TYPE active_current_l1_a gauge\n";
  echo 'active_current_l1_a{powersocket="'.$json_data['serial'].'"} '.$json_data['active_current_l1_a']."\n";

  echo "# HELP active_current_l2_a Wifi strenght\n";
  echo "# TYPE active_current_l2_a gauge\n";
  echo 'active_current_l2_a{powersocket="'.$json_data['serial'].'"} '.$json_data['active_current_l2_a']."\n";

  echo "# HELP active_current_l3_a Wifi strenght\n";
  echo "# TYPE active_current_l3_a gauge\n";
  echo 'active_current_l3_a{powersocket="'.$json_data['serial'].'"} '.$json_data['active_current_l3_a']."\n";
}

foreach ($powersocket_ips as $ip) {
  $data = get_api_data($ip, "/api");
  $data += get_api_data($ip, "/api/v1/data");
  parse_data($data);
}

?>
