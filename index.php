<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php</title>
    <link rel="icon" href="./img/315884_php_document_file_icon.svg">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php require './Blocks/header.php';
?>
<div class="gol">
<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore fugit minima nulla perferendis saepe,
    sequi. Aut, blanditiis est iusto non omnis quia quis sint? Accusamus, culpa distinctio earum enim, esse est id iusto
    labore laudantium optio pariatur sint soluta sunt unde vero. Ab aliquam, blanditiis debitis iure modi omnis qui
    ratione voluptas? Aliquam architecto delectus dolorum ducimus esse explicabo fugiat illo molestiae non porro quam
    quo quos sed, sequi vitae. Adipisci aliquid asperiores atque consequatur cupiditate dolor earum est eum facere,
    harum in incidunt iste laudantium libero, minima molestias necessitatibus nesciunt officiis omnis quae quisquam quo
    quod tempora vitae!"</p>
    <?php require'./Blocks/aside.php'; ?>
</div>
<?php require './Blocks/footer.php';
?>

<?php
require_once './db/sql.php';

$sql ='SELECT * FROM `comments` ORDER BY `data` DESC';
$quere = $pdo->query($sql);
while($row = $quere->fetch(PDO::FETCH_OBJ)){
    echo "<p>$row->title</p>
<p>$row->avtor</p>
<a href='news.php?id=$row->id'><button>News</button></a>";
};


//$arr = [1,2,3,4,44];
//$i = 0;
//$count = count($arr);
//do {
//    echo $arr[$i];
//    $i++;
//
//
//} while($i < $count);
//
//for($i = 0;$i < $count; $i++){
//    echo $arr[$i]. 'for';
//};
//
//while($i < $count){
//echo $arr[$i].'while';
//$i++;}
//?>

</body>
</html>

