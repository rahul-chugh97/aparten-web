<?php
$dbName = "aparten";
$user = "root";
$pwd = "";
$host = "localhost";
// $dbName = "indianethnic";
// $user = "ies_user";
// $pwd = "ies@123";
// $host = "sg2plcpnl0145";
$cnn = new PDO('mysql:dbname='.$dbName.';host='.$host, $user, $pwd);