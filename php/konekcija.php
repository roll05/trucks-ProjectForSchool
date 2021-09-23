<?php
$serverBaze="localhost";
$username="root";
$password="";
$dbName="truckshop";
//$dbName="testPHP";

try {
    $konekcija = new PDO("mysql:host=$serverBaze;dbname=$dbName; charset=utf8", $username, $password);
    $konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (PDOException $e) {
    echo $e -> getMessage();
}
