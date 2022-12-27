<?php

$myfile = fopen("stored3Text.txt", "w") or die("Unable to open file!");
$txt = "";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("stored6Text.txt", "w") or die("Unable to open file!");
$txt = "";
fwrite($myfile, $txt);
fclose($myfile);

?>