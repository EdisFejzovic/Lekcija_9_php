<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lekcija9db';

try {
    $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
}
catch (Exception $e) {
    echo "Something went wrong";
}

?>