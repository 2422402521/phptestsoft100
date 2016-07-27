<?php
require "vendor/autoload.php";

$data = [
	'name' => 'zs',
	'age' => 18
];

$jsonData = \phptestsoft100\Json::encode($data);
print_r($jsonData);

$arrayData = \phptestsoft100\Json::decode($jsonData);
print_r($arrayData);