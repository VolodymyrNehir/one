
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
<?php require './Blocks/header.php' ?>

<div class="gol">
    <form action="" method="post">
        <div class="go"></div>
        <label for="username">Name <input type="text" name="username" id="username"></label>

        <label for="email">Email
            <input type="email" name="email" id="email">
        </label>

        <label for="login">Login
            <input type="text" name="login" id="login">
        </label>

        <label for="pass">Password
            <input type="password" name="pass" id="pass">
        </label>

        <button type="button" id="reg_user">click</button>

    </form>

    <?php require './Blocks/aside.php' ?>
</div>
<?php require './Blocks/footer.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
$('#reg_user').click(function(){
    const name = $('#username').val();
    const email = $('#email').val();
    const login = $('#login').val();
    const pass = $('#pass').val();

    $.ajax({
        url: 'ajax/reg.php',
        type: 'POST',
        cache: false,
        data: {'username': name, 'email': email, 'login':login, 'pass': pass},
        dataType: 'html',
        success: function (data) {
if(data = 'done'){
    $('.go').text('Done');
    $('.go').show();
    $('.go').css({'background':'green'});
    $('form')[0].reset();

} else {
    $('.go').text('error');
    $('.go').show();
    $('.go').css({'background':'red'});
    console.log(data);

}

        }
    })
})

</script>
</body>
<link rel="stylesheet" href="./css/main.css">
</html>