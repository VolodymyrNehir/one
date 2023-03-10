<?php
if ($_POST['file'] != ''){
    $mess = $_POST['file'];
    $name =$_POST['name'];
    $file = fopen("./text/$name.text", a);
    fwrite($file, $mess);
    fclose($file);
    rename('text/IMG_1294.RAW','text/IMG_1294.PDE');
}
?>
