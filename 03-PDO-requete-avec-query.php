<?php

$dataSourceName = 'mysql:dbname=oblog;host=localhost;charset=UTF8';
$username = 'oblog';
$password = 'oblog';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];

$pdoDBConnexion = new PDO($dataSourceName, $username, $password, $options);

$requeteSql = 'SELECT * FROM `author`';

$pdoStatement = $pdoDBConnexion->query($requeteSql);

$results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($results);
echo '<pre>';