<?php
$iplogfile = 'tblip.php';
$ipaddress = $_SERVER['REMOTE_ADDR'];
$webpage = $_SERVER['SCRIPT_NAME'];
$timestamp = date('d/m/Y h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen($iplogfile, 'a+');
chmod($iplogfile, 0777);
fwrite( $fp, "<tr><td>" . htmlentities($timestamp).  "</td><td>"  . htmlentities($ipaddress) . "</td><td>" . htmlentities($webpage) . "</td><td>" . $browser . "</td></tr> \n");

fclose($fp); 
?>