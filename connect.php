<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 16-04-18
 * Time: 12:30
 */

$servername = "localhost";
$dbname = "garage";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "verbinding gelukt <br>";
}
catch (PDOException $e){
    echo "verbinding mislukt: " . $e->getMessage();
}
