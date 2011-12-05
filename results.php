<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ServPHP</title>
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
<?php 
include 'functions.php'; 
?>
</head>

<body>
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
			  if(isset($_POST['ch1']) &&
   $_POST['ch1'] == 'selected')
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
			  if(isset($_POST['ch2']) &&
   $_POST['ch2'] == 'selected')
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
			  if(isset($_POST['ch3']) &&
   $_POST['ch3'] == 'selected')
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
			  if(isset($_POST['ch4']) &&
   $_POST['ch4'] == 'selected')
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
			  if(isset($_POST['ch5']) &&
   $_POST['ch5'] == 'selected')
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
			  if(isset($_POST['ch6']) &&
   $_POST['ch6'] == 'selected')
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
			  if(isset($_POST['ch7']) &&
   $_POST['ch7'] == 'selected')
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
			  if(isset($_POST['ch8']) &&
   $_POST['ch8'] == 'selected')
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
              <td colspan="2"><input name="Refresh" type=button id="Refresh" onclick="history.go()" value="Refresh" /></td>
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
