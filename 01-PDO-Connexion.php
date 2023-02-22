<?php

$dataSourceName = 'mysql:dbname=oblog;host=localhost;charset=UTF8';
$username = 'oblog';
$password = 'oblog';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];

$pdoDBConnexion = new PDO($dataSourceName, $username, $password, $options);

var_dump($pdoDBConnexion);