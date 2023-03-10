<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require './Blocks/header.php';
?>
<form action="" method="post">
    <label for="name">name</label>
    <input type="text" name="name" id="name">

    <label for="email">email</label>
    <input type="email" name="email" id="email">

    <textarea  name="mess" id="mess"></textarea>

    <button type="button" name="send" id="send">send</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $('#send').click(function{
const name =$('name').val();
const email = $('email').val();
const mess =  $('mess').val();
        $.ajax({
            url:'ajax/mail.php';
            type:'POST';
            data: {'name': name, 'email': email, 'mess':mess};

        })
    })
</script>
</body>
</html>
