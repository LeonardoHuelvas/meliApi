<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'meli_db';

$dbConnection = mysqli_connect($host, $user, $password, $dbName);

if (!$dbConnection) {
    die("Error en la conexión: " . mysqli_connect_error());
}
