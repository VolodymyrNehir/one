<?php
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

$error = 'done';
if (strlen($username) <= 3)
    $error = 'error';
else
    if (strlen($pass) <= 3)
        $error = 'error';
if ($error != 'done') {
    echo 'error';
    exit();
};
$hash = 'fdhsd66HJDHO';
$pass = md5($pass);
//$ogi='ogi';
//$noga ='noga';
//$idd = 144;
require_once '../db/sql.php';

//$sql ='UPDATE  `users` SET `logins`= :login WHERE `id` = :id';
//$query = $pdo->prepare($sql);
//$query->execute(['login'=>$noga, 'id'=>$idd]);

//$sql = 'DELETE FROM `users` WHERE `id` = :id ';
//$query = $pdo->prepare($sql);
//$query ->execute(['id'=>143]);


//$sql = 'INSERT INTO users(name,emails,logins,pass) VALUES(:name,:emails,:logins,:pass) ';
//$query = $pdo->prepare($sql);
//$query->execute(['name'=>$ogi,"emails"=>$ogi,"logins"=>$ogi,'pass'=>$ogi]);

$sql = 'SELECT `id` FROM `users` WHERE `name`= :username && `pass` = :pass';
$query = $pdo->prepare($sql);
$query->execute(['username' => $username, 'pass' => $pass]);
$user = $query->fetch(PDO::FETCH_OBJ);

if($user->id != 0){
    setcookie('name', $username, time() + 3600 * 24 * 30,'/');
    $error = 'ok';
    echo $error;
} else
{
    $error = $user->id;
    $error = 'error';
    echo $error;
}
?>