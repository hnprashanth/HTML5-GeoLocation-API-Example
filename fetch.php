<?php
$jsonurl = "http://maps.googleapis.com/maps/api/geocode/json?latlng=".$_REQUEST[lat].",".$_REQUEST[long]."&sensor=true";
$json = file_get_contents($jsonurl,0,null,null);
$json_output = json_decode($json);
echo "<h2>Your address is </h2>";
echo $json_output->results[0]->formatted_address;
?>
