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
require './blocks/header.php'; ?>
<?php
if ($_COOKIE['name'] == ''):
    ?>
    <div class="gol">
        <form>
            <div class="go"></div>
            <labl>
                username <input type="text" name="username" id="username">
            </labl>
            <labl>
                password <input type="password" name="password" id="password"
            </labl>

            <button type="button" id="sig_in">sig in</button>
        </form>
        <?php
        require './blocks/aside.php' ?>
    </div>
<?php
else:
    ?>
    <h2><? $_COOKIE['name'] ?>
        <button id="exit">exit</button>
    </h2>
<?php
endif ?>
<form action="write.php" method="post">
    <textarea name="file"></textarea>
    <input type="text" name="name">
    <button type="submit">ok</button>
</form>
<?php
require './blocks/footer.php';
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $('#exit').click(function () {
        $.ajax({
            url: 'ajax/exit.php',
            type: 'POST',
            data: {},
            dataType: 'html',
            success: function () {
                document.location.reload(true);
            }
        })
    })
    $('#sig_in').click(function () {
        const username = $('#username').val();
        const password = $('#password').val();


        $.ajax({
            url: 'ajax/auth.php',
            type: 'POST',
            data: {'username': username, 'password': password},
            dataType: 'html',
            success: function (data) {



                if (data == 'error') {

                    console.log('error')
                    $('.go').text('error');
                    $('.go').show();
                    $('.go').css('background','red');
                    console.log(data)
                } else {

                    console.log('ok');
                    document.location.reload(true);
                }

            }

            // if (data != 'error') {
            //
            //     console.log(data)


            //     if (data !== 'ok') {
            //         console.log(data)
            //         const go = $('.go');
            //         go.show();
            //         go.text('not find user');
            //         go.css({'background': 'red'});
            //         $('form')[0].reset();
            //
            //     }
            //      else {
            //     if (data != 'bad' ) {
            //         console.log(data)
            //         document.location.reload(true);
            //     }
            // } }else {
            //     $('.go').text('error');
            //     $('.go').show();
            //     $('.go').css({'background': 'red'});
            //     console.log(data)
            //
            // }


        })
    })
</script>


</body>
<link rel="stylesheet" href="css/main.css">
</html>
