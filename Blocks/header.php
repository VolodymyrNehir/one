
<div class="header">
<h5>logo</h5>
<nav>
    <?php if($_COOKIE['name'] ==''){
     echo  ' <a href="auth.php">Login</a>
    <a href="reg.php">registration</a>';
    }

    ?>

    <?php
if ($_COOKIE['name'] != ''){
    echo '<a href="article.php">article</a>
<a href="ajax/exit.php"><button id="exit">exit</button></a>
';
}

 ?>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->

<!--    <script>-->
<!--        $('#exit').click(function () {-->
<!--            $.ajax({-->
<!--                url: 'ajax/exit.php',-->
<!--                type: 'POST',-->
<!--                data: {},-->
<!--                dataType: 'html',-->
<!--                success: function () {-->
<!--                    document.location.reload(true);-->
<!--                }-->
<!--            })-->
<!--        })-->
<!--    </script>-->

</nav>
</div>

