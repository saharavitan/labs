<?php

$log = array();

$address = simplexml_load_string(trim(file_get_contents('php://input')), "SimpleXMLElement", LIBXML_NOCDATA);
$address = json_encode($address);
$address = json_decode($address, TRUE);
echo $address["name"];

?>