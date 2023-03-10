<?php
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'],FILTER_SANITIZE_STRING));
$mess = trim(filter_var($_POST['mess'],FILTER_SANITIZE_STRING));

$error = 'done';
if (strlen($name) <= 3){
    $error = 'error';
} else
    if(strlen($email)<= 3){
        $error = 'error';
    }else
        if(strlen($mess) <= 3){
            $error = 'error';
        }
if ($error != 'done'){
    echo $error;
    exit();
}
$my_email = 'vpochtaua@gmail.com';
$subject = "=?utf-8?B?".base64_encode('new mess')."?=";
$header =  "From:  $email\r\n\Reply-to: $email \r\nContent-type: text/html; charset=utf-8\r\n";
mail($my_email,$subject,$mess,$header);
?>
