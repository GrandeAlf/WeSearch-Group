<?php include("conexao.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
    	session_start();
    	echo $_SESSION['login'];
    ?>

</body>
</html>