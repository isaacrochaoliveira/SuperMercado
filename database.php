<?php

include_once('settings.php');

try {
    $pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset".CHARSET.";port=".PORT, USER, PASS);
    return $pdo;
} catch (PDOException $ex) {
    echo "Something wrong about your system: ".$ex->getMessage();
}