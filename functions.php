<?php

//ServPHP Functions File - Contains all the required functions for the script to work.

//Free RAM Fuction
function get_memory() {
  foreach(file('/proc/meminfo') as $ri)
    $m[strtok($ri, ':')] = strtok('');
  return 100 - round(($m['MemFree'] + $m['Buffers'] + $m['Cached']) / $m['MemTotal'] * 100);
}

//Ping Function
function get_ping($ip=NULL) {
$ip = $_SERVER['REMOTE_ADDR'];
$exec = exec("ping -c 3 -s 64 -t 64 ".$ip);
$array = explode("/", end(explode("=", $exec )) );
return ceil($array[1]) . 'ms';
}

//Server IP Function
function get_ip() {
  echo $_SERVER['SERVER_ADDR'];
}

//HDD Free Space Function
function get_hdd() {
	exec("df -h",$a);
if ($start=strpos($a[1], '%')) {
$b = substr($a[1], $start-2, 3);
echo $b;
unset ($a, $b);
}
else
echo 'Error getting HDD space';
}

//CPU Model Info Function
function get_cpuinfo() {
	exec("cat /proc/cpuinfo | grep 'model name'",$a);
if ($start=strpos($a[0], ':')) {
$end=strlen($a[0])-$start;
$b = substr($a[0], $start+1, $end);
echo $b;
unset ($a, $b);
}
else
echo 'Error getting cpuinfo';
}

//Load test Function
function get_load() {
	exec("uptime",$load);
if ($start=strpos($load[0], 'age:')) {
$end=strlen($load[0])-$start;
$b = substr($load[0], $start+5, $end);
echo $b;
unset ($a, $b);
}
else
echo "Error getting load";
}

//Uptime Function
function get_uptime() {	
$uptime = shell_exec("cut -d. -f1 /proc/uptime");
$days = floor($uptime/60/60/24);
$hours = $uptime/60/60%24;
$mins = $uptime/60%60;
$secs = $uptime%60;
echo "$days days $hours hours $mins minutes and $secs seconds";
}

//Speedtest Function
function get_speedtest() {
exec("/usr/bin/wget -O /dev/null http://cachefly.cachefly.net/1mb.test 2>&1",$output);
end($output);
$a=prev($output);
if ($start=strpos($a, '(')) 
if ($end=strpos(substr($a,$start+1), ')')) {
$b = substr($a, $start+1, $end);
echo $b;
unset ($a, $b);
}
else
echo 'Error running speedtest';
}
?>