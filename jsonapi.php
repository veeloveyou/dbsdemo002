<?php

$items = array();
for($i = 0; <10; $i++){ $items[$i] =" This is message $i"}
header('Content-Type: application/json');
$jsonOutput = json_encode($items);
echo $jsonOutput;
