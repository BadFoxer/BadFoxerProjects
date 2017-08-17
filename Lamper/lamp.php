<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wifi Lamp</title>
<link rel="stylesheet" type="text/css" href="buttonOn.css">
<link rel="stylesheet" type="text/css" href="buttonOff.css">
<link rel="stylesheet" type="text/css" href="StateOn.css">
<link rel="stylesheet" type="text/css" href="StateOff.css">
</head>
<?php

$State2 = "Lamp is Off";

if (isset($_POST["On"])) {

	$getData= file_get_contents("Device Ip here");

   echo '<div class="StateOn">'.$getData.'</div>';
}

if (isset($_POST["Off"])) {
	
	$getData= file_get_contents("Device Ip here");

   echo '<div class="StateOff">'.$getData.'</div>';

}

?>
<body bgcolor="#DCDCDC">
<center>
<form action="lamp.php" method="post"/>
<input type="submit" name="On" value="Lamp On" class="buttonOn" />
<input type="submit" name="Off" value="Lamp Off" class="buttonOff" />
</form>


<center>
</body>
</html>

