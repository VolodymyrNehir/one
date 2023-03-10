
<?php
header('Location:/one/auth.php');
setcookie('name', '',time() - 3600 * 24 *30,'/');
unset($_COOKIE['name']);
?>