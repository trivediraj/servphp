<?php 
session_start();
include 'functions.php'; 
    $ch1 = $_SESSION['ch1'];
	$ch2 = $_SESSION['ch2'];
	$ch3 = $_SESSION['ch3'];
	$ch4 = $_SESSION['ch4'];
	$ch5 = $_SESSION['ch5'];
	$ch6 = $_SESSION['ch6'];
	$ch7 = $_SESSION['ch7'];
	$ch8 = $_SESSION['ch8'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
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
<style type="text/css">
<!--
body {
	background-image: url(icons/background.png);
	background-repeat: repeat-x;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.submenu {
	color: #69F;
}
.submenu {
	font-style: italic;
}
-->
</style>
</head>

<body onLoad="waitPreloadPage();" style="margin: 0pt; padding: 0pt;">
<DIV id="prepage" style="position:absolute; font-family:Trebuchet MS; font-size:20; background-image: url(icons/background.png); background-repeat: repeat-x;  height:100%; width:100%; z-index:1;"> 
<div style="position:absolute; top:50%; left:50%; vertical-align:middle; text-align: center; ">
<img src="icons/loading.gif" style="position:relative;left:-16px;top:-16px;"></div>
</DIV>
<div id="container">
		<div id="header">
        	<h1>Serv<span class="off">PHP</span></h1>
  </div>      
        <div class="submenu" id="menu"> The Open Source Server Montior</div> 
        
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main"> 
   
          <table width="600" border="1">
            <tr>
              <th colspan="2" scope="col">This Server's Statistics -</th>
            </tr>
            <tr>
              <td><img src='icons/network-icon.png' alt='Load' />Server IP Address :</td>
              <td><?php
			  if(isset($ch1) &&
               $ch1 == 'selected')
{
    echo get_ip();
}
else
{
    echo "Not selected";
}

?></td>
            </tr>
            <tr>
              <td><img src='icons/up-alt-icon.png' alt='Uptime' />Server Uptime :</td>
              <td><?php
			  if(isset($ch2) &&
   $ch2 == 'selected')
{
echo get_uptime();
}
else
{
    echo "Not selected";
}

?></td>
            </tr>
            <tr>
              <td><img src='icons/loaded-truck.png' alt='Load' />Average Load :</td>
              <td><?php
			  if(isset($ch3) &&
   $ch3 == 'selected')
{
echo get_load();
}
else
{
    echo "Not selected";
}

?></td>
            </tr>
            <tr>
              <td><img src="icons/intel-2-icon.png" alt="CPU" />Server CPU Info :</td>
              <td><?php 
			  if(isset($ch4) &&
   $ch4 == 'selected')
{
echo get_cpuinfo();
}
else
{
    echo "Not selected";
}
?></td>
            </tr>
            <tr>
              <td><img src="icons/Ekisho-Deep-Ocean-HD-1-icon.png" alt="HDD"/>Server Disk Usage :</td>
              <td><?php 
			  if(isset($ch5) &&
   $ch5 == 'selected')
{
echo get_hdd();
}
else
{
    echo "Not selected";
}
?></td>
            </tr>
            <tr>
              <td><img src="icons/monitor-icon.png" alt="HDD" />Memory Usage :</td>
              <td><?php
			  if(isset($ch6) &&
   $ch6 == 'selected')
{
echo get_memory();
echo '%';
}
else
{
    echo "Not selected";
}
?></td>
            </tr>
            <tr>
              <td><img src="icons/Globe-icon.png" alt="Ping"/>Your ping to this server :</td>
              <td><?php 
			  if(isset($ch7) &&
   $ch7 == 'selected')
{
echo get_ping();
}
else
{
    echo "Not selected";
}
?></td>
            </tr>
            <tr>
              <td><img src="icons/down-alt-icon.png" alt="Ping"/>Server Download Speed Test :</td>
              <td><?php
			  if(isset($ch8) &&
   $ch8 == 'selected')
{
    echo get_speedtest(); 
}
else
{
    echo "Not selected";
}
?></td>
            </tr>
            <tr>
              <td colspan="2"><input name="Refresh" type=button id="Refresh" onclick="history.go()" value="Refresh" />
                              <input name="Change" type=button id="change" onclick="window.location.href='index.php'" value="Change Test Options" /></td>
            </tr>
          </table>
        </div>
        
        <div id="content_bottom"></div>
           
            <div id="footer">
              <a href="http://www.servphp.org">Credits : http://code.google.com/p/servphp/wiki/Credits</a>
                </br>
                <?php 
                echo "Page generated in ". number_format(microtime(true) - $_SERVER['REQUEST_TIME']) ." seconds"; 
				?> 
          </div>
  </div>
</div>
</body>
</html>
