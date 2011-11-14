<html>
<head>
<meta http-equiv="refresh" content="30" />
<title>ServPHP</title>
<SCRIPT TYPE="text/javascript" LANGUAGE="javascript">
<!-- PreLoad Wait - Script -->
<!-- This script and more from http://www.rainbow.arch.scriptmania.com 
function waitPreloadPage() { //DOM
if (document.getElementById){
document.getElementById('prepage').style.visibility='hidden';
}else{
if (document.layers){ //NS4
document.prepage.visibility = 'hidden';
}
else { //IE4
document.all.prepage.style.visibility = 'hidden';
}
}
}
// End -->
</SCRIPT>

</head><body onLoad="waitPreloadPage();" style="margin: 0pt; padding: 0pt;">
<DIV id="prepage" style="position:absolute; font-family:arial; font-size:16; background-color:white; layer-background-color:white; height:100%; width:100%; z-index:1;"> 
<div style="position:absolute; top:50%; left:50%; vertical-align:middle; text-align: center; ">
<img src="icons/loading.gif" style="position:relative;left:-16px;top:-16px;"></div>
</DIV>
<div style="position:relative; width:420px; height: 360px; margin-left:auto; margin-right:auto; top: 20%; background-image:url('square.png'); background-repeat:no-repeat; ">
<div style="position:relative; left: 14px; top:8px;"><center><h3>ServPHP - Server Monitor</h3></center>
<?php
//Need to have this functions (and make other functions) and move then to a separate file
function get_memory() {
  foreach(file('/proc/meminfo') as $ri)
    $m[strtok($ri, ':')] = strtok('');
  return 100 - round(($m['MemFree'] + $m['Buffers'] + $m['Cached']) / $m['MemTotal'] * 100);
}

function GetPing($ip=NULL) {
$ip = $_SERVER['REMOTE_ADDR'];
$exec = exec("ping -c 3 -s 64 -t 64 ".$ip);
$array = explode("/", end(explode("=", $exec )) );
return ceil($array[1]) . 'ms';
}
echo "<img src='icons/up-alt-icon.png' alt='Uptime' /> <font size = '3'> Server Uptime: ";
exec("uptime",$uptime);
if ($end=strpos($uptime[0], ',')) {
$b = substr($uptime[0], 0, $end);
echo $b;
unset ($a, $b);
}
else
echo "Error getting uptime";
echo "</font><br>";
echo "<img src='icons/loaded-truck.png' alt='Load' /> <font size = '3'> Average Load: ";
exec("uptime",$load);
if ($start=strpos($load[0], 'age:')) {
$end=strlen($load[0])-$start;
$b = substr($load[0], $start+5, $end);
echo $b;
unset ($a, $b);
}
else
echo "Error getting load";
?>
</font><br>

<img src="icons/intel-2-icon.png" alt="CPU" /> <font size = "3"> Server CPU Info: </font>
<?php 
exec("cat /proc/cpuinfo | grep 'model name'",$a);
if ($start=strpos($a[0], ':')) {
$end=strlen($a[0])-$start;
$b = substr($a[0], $start+1, $end);
echo $b;
unset ($a, $b);
}
else
echo 'Error getting cpuinfo';
?>
<br>
<img src="icons/Ekisho-Deep-Ocean-HD-1-icon.png" alt="HDD"/> <font size = "3"> Server Disk Usage: 
<?php 
exec("df -h",$a);
if ($start=strpos($a[1], '%')) {
$b = substr($a[1], $start-2, 3);
echo $b;
unset ($a, $b);
}
else
echo 'Error getting HDD space';
?>
</font><br>
<img src="icons/monitor-icon.png" alt="HDD" /> <font size = "3"> Memory Usage: 
<?php
echo get_memory(); 
?>
%</font><br>
<img src="icons/Globe-icon.png" alt="Ping"/> <font size = "3">Your ping to this server: 
<?php 
echo GetPing();
?>
</font><br>
<img src="icons/Globe-icon.png" alt="Ping"/> <font size = "3">Speed Test :
<iframe src="http://backup.neto.mx/speedtest.php" width="100px" height="18px" frameborder="0" scrolling="no" style="position:relative; top:3px;"></iframe>
</font><br><br>
<?php 
echo "Page generated in ". number_format(microtime(true) - $_SERVER['REQUEST_TIME']) ." seconds"; ?> 
</div></div></body>
</html>
