<!doctype html>
<html lang="en">
<!--<label>-->
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<?php
require_once './db/sql.php';

$sql = 'SELECT * FROM `comments` WHERE `id`=:id';
$query = $pdo->prepare($sql);
$query->execute(['id' => $_GET['id']]);

$articl = $query->fetch(PDO::FETCH_OBJ);
$data = date('d:', $articl->data);
$data .= date('H:i', $articl->data);
$arr = ["січень", "лютий", "березень", "квітень", "травень", "червень", "липень", "серпень", "вересень", "жовтень", "листопад", "грудень"];
$data .= $arr[date('n', $articl->data) - 1];
$art = $articl->title;

?>
<mark><?= $articl->intro ?></mark>
<p><u><?= $data ?></u></p>
<h3>Comments</h3>

<form action="/one/news.php?id=<?= $_GET['id'] ?>" method="post">

    <label for="username">Name</label>
    <input type="text" id="username" name="username" value="<?= $_COOKIE['name'] ?>">
    <label for="mass" name="mass">mess</label>
    <textarea type="text" id="mess" name="mass"></textarea>
    <button type="submit" id="send_mess">send</button>
</form>

</head>
<body>
<?php
session_start();
$_SESSION['username'] = $_POST['username'];
echo 'good'. $_SESSION['username'];
?>

<?php
require_once './db/sql.php';

if ($_POST['username'] != '' && $_POST['mass'] != '') {
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $mass = trim(filter_var($_POST['mass'], FILTER_SANITIZE_STRING));
    require './db/sql.php';

    $sql = 'INSERT INTO comment(username, mass, article_id) VALUES(?,?,?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $mass, $_GET['id']]);
}
?>
<?php
require_once './db/sql.php';
$sql = 'SELECT * FROM `comment` WHERE `article_id` = :id';
$query = $pdo->prepare($sql);
$query->execute(['id' => $_GET['id']]);
while ($comment = $query->fetch(PDO::FETCH_OBJ)) {
    echo "<h5>$comment->username</h5>
<p>$comment->mass </p>";
}
?>

<?php
require './Blocks/header.php';
?>
<div class="gol">
    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore fugit minima nulla perferendis saepe,
        sequi. Aut, blanditiis est iusto non omnis quia quis sint? Accusamus, culpa distinctio earum enim, esse est id
        iusto
        labore laudantium optio pariatur sint soluta sunt unde vero. Ab aliquam, blanditiis debitis iure modi omnis qui
        ratione voluptas? Aliquam architecto delectus dolorum ducimus esse explicabo fugiat illo molestiae non porro
        quam
        quo quos sed, sequi vitae. Adipisci aliquid asperiores atque consequatur cupiditate dolor earum est eum facere,
        harum in incidunt iste laudantium libero, minima molestias necessitatibus nesciunt officiis omnis quae quisquam
        quo
        quod tempora vitae!"</p>
    <?php
    require './Blocks/footer.php';
    ?>

</div>
</body>
</html>
