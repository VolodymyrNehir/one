<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'users';

$dsn = 'mysql:host='.$db_host.';dbname='.$db_db;
$pdo = new PDO($dsn, $db_user, $db_password);
?>

