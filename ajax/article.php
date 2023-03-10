<?php
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$intro = trim(filter_var($_POST['intro'], FILTER_SANITIZE_STRING));
$text = trim(filter_var($_POST['text'],FILTER_SANITIZE_STRING));

$error = 'done';
if (strlen($title) <= 3)
    $error = 'error';
else if (strlen($intro) <= 3)
    $error = 'error';

if ($error != 'done') {
    echo 'error';
exit();
}

require_once '../db/sql.php';

$sql = 'INSERT INTO comments(title,intro,text,data,avtor) VALUES(?,?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$title,$intro,$text,time(),$_COOKIE['name']]);
?>