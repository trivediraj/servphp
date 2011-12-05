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
        <div id="invisiblebox">
          <p><em><strong>  
          What tests would you like to run?</strong></em></p>
          <p><em>(Less tests will decrease script load time)</em></p>
          <FORM NAME ="form1" METHOD ="POST" ACTION ="results.php">
            <p>&nbsp;</p>
            <p>Server IP Address
              <Input type = 'Checkbox' Name ='ch1' value ="selected" checked ="checked"
> 
            </p>
            <P>
              Server Uptime
  <Input type = 'Checkbox' Name ='ch2' value="selected" checked ="checked"
>
<P>
Average Load
<Input type = 'Checkbox' Name ='ch3' value="selected" checked ="checked"
>
<P>
Server CPU Info
<Input type = 'Checkbox' Name ='ch4' value="selected" checked ="checked"
>
<P>
Server Disk Usage
<Input type = 'Checkbox' Name ='ch5' value="selected" checked ="checked"
>
<P>
Memory Usage
<Input type = 'Checkbox' Name ='ch6' value="selected" checked ="checked"
>
<P>
Your Ping to this Server
<Input type = 'Checkbox' Name ='ch7' value="selected" checked ="checked"
>
<P>
Server Download Speed Test
<Input type = 'Checkbox' Name ='ch8' value="selected" checked ="checked"
>
<P>
<P>
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Run the tests">
</FORM>
</div>
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
