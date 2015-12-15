<?php

$dsn = 'mysql:dbname=adopt_1;host=localhost;charset=utf8';
$user = 'root';
$password = 'Passw0rd';

$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);