<?php

$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "webshop";

try{
    $conn = mysqli_connect($server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}?>