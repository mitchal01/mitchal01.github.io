<?php // Need Any Help Read ReadMe.txt Or Message us at: https://discord.gg/qqVBb53 //
/*———————–[ SETTINGS ]——————————*/
$server_settings[‘ip’] = “69.174.154.177”; // localhost for local servers / IP or domain name for VDS/VPS
$server_settings[‘port’] = “30120”; // basically 30120
$server_settings[‘max_slots’] = “64”; // maximum slots. By default 24
$url1=$_SERVER[‘REQUEST_URI’]; // Dont Change Any Lines Below
header(“Refresh: 5; URL=$url1”);
/*—————————————————————-*/

$content = json_decode(file_get_contents(“http://”.$server_settings[‘ip’].”:”.$server_settings[‘port’].”/info.json”), true);
if($content):
$gta5_players = file_get_contents(“http://”.$server_settings[‘ip’].”:”.$server_settings[‘port’].”/players.json”);
$content = json_decode($gta5_players, true);
$pl_count = count($content);
$SRV_STATUS = “<font style=’color: green;’>Online</font>”;
print ” $pl_count / $server_settings[max_slots] “;
endif;
?>
