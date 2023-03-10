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
require './blocks/header.php';
?>
<?php
if($_COOKIE['name'] == '')
{header('Location: /one/reg.php');
    exit();
};
?>
<div class="gol">
    <div class="go"></div>
    <form>
        <label for="title">title</label>
        <input type="text" name="title" id="title">

        <label for="intro">intro</label>
        <textarea name="intro" id="intro"></textarea>

        <labl for="text">text</labl>
        <textarea name="text" id="text"></textarea>

        <button type="button" id="send">send</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $('#send').click(function(){
        const title = $('#title').val();
        const intro = $('#intro').val();
        const text = $('#text').val();
        $.ajax({
            url:'ajax/article.php',
            type:'POST',
            data:{'title':title, 'intro':intro, 'text':text},
            dataType:'html',
            success: function(data){
if (data == 'error'){
    $('.go').text('error');
    $('.go').show();
    $('.go').css('background','red')
} else{
    document.location.reload(true);
}
            }
        })
    })
</script>
</body>
</html>