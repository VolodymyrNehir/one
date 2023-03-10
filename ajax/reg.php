<?php
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = 'done';
if (strlen($username) <= 3)
    $error = 'error';
else
    if (strlen($email) <= 3)
        $error = 'error';

    else
        if (strlen($login) <= 3)
            $error = 'error';

        else
            if (strlen($pass) <= 3)
                $error = 'error';


if ($error != 'done') {
    echo $error;
    exit();
}
echo $error;


$hash = 'fdhsd66HJDHO';
$pass = md5($pass);
//$us = [$username, $email, $login, $pass];

//$link = mysqli_connect('localhost:8889', 'root', 'root', 'users');
//
//if (mysqli_connect_errno()) {
//    echo mysqli_connect_errno();
//}
//
////
////
//function get_categories($us)
//{
//    $link = mysqli_connect('localhost', 'root', 'root', 'users');
//
//    $sql = "INSERT INTO users (name, emails, logins, pass)
//VALUES ('$us[0]', '$us[1]', '$us[2]', '$us[3]')";
//    if (mysqli_query($link, $sql)) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . mysqli_error($link);
//    }
//
//    $sql = "SELECT * FROM `users`";
//    $result = mysqli_query($link, $sql);
//
//    $categoris = mysqli_fetch_all($result);
//
//}

//get_categories($us);
//
//
//function

//
//
require_once '../db/sql.php';
$sql = 'INSERT INTO users(name, emails, logins,pass) VALUES(?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $email, $login, $pass]);


//
//  $queryFrom = $pdo->query('SELECT * FROM `users` WHERE `name`= "john" ');
//  $users =$queryFrom->fetchAll(PDO::FETCH_OBJ);
//  foreach($users as $user){
//      echo $user->emails;
//  }
//  while ($rew = $queryFrom->fetch(PDO::FETCH_OBJ)){
//      echo $rew->email.'<br>';
//  }
//
//
//two
?>



