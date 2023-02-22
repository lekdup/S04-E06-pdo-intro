<?php

$dataSourceName = 'mysql:dbname=oblog;host=localhost;charset=UTF8';
$username = 'oblog';
$password = 'oblog';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];

$pdoDBConnexion = new PDO($dataSourceName, $username, $password, $options);

$requeteSql = 'SELECT * FROM `post` WHERE `id` =1 ';

$pdoStatement = $pdoDBConnexion->query($requeteSql);

$result = $pdoStatement->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($result);
echo '<pre>';