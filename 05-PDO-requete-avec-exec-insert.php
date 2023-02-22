<?php

$dataSourceName = 'mysql:dbname=oblog;host=localhost;charset=UTF8';
$username = 'oblog';
$password = 'oblog';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];

$pdoDBConnexion = new PDO($dataSourceName, $username, $password, $options);

$name = 'Emile';
$image = 'emile_et_image.jpg';
$email = 'emile@images.com';

$requeteSql = "INSERT INTO `author` (`name`, `image`, `email`)
VALUES ('$name', '$image','$email')" ;


$nbInsertedRows = $pdoDBConnexion->exec($requeteSql);


if($nbInsertedRows === 1){
    echo 'auteur ajouté à la BDD';
} else {
    echo 'auteur non ajouté à la BDD';
}
