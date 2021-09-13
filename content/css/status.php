<?php // Need Any Help Read ReadMe.txt Or Message us at: https://discord.gg/qqVBb53 //
/*-----------------------[ SETTINGS ]------------------------------*/
$server_settings['ip'] = "69.174.154.177"; // localhost for local servers / IP or domain name for VDS/VPS
$server_settings['port'] = "30120"; // basically 30120
$url1=$_SERVER[‘REQUEST_URI’];    // Dont Change Any Lines Below
header("Refresh: 5; URL=$url1");
/*----------------------------------------------------------------*/
$content = json_decode(@file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
if($content):
    $SRV_STATUS = "Online";
else:
	$SRV_STATUS = "Offline";
endif;
print " $SRV_STATUS";
?>
