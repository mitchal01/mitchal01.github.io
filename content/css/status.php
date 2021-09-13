<?php // Need Any Help Read ReadMe.txt Or Message us at: https://discord.gg/qqVBb53 //
/*———————–[ SETTINGS ]——————————*/
$server_settings[‘server.worldwiderp.com’] = “YOUR IP GOES HERE”; // localhost for local servers / IP or domain name for VDS/VPS
$url1=$_SERVER[‘REQUEST_URI’]; // Dont Change Any Lines Below
header(“Refresh: 5; URL=$url1”);
/*—————————————————————-*/
$content = json_decode(@file_get_contents(“http://”.$server_settings[‘ip’].”/info.json”), true);
if($content):
$SRV_STATUS = “Online”;
else:
$SRV_STATUS = “Offline”;
endif;
print ” $SRV_STATUS”;
?>
