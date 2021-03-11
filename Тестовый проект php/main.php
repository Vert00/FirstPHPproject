<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Резюме</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="header">
        <?php include "main_menu.php" ?>
        <?php include "account_inf.php" ?>
    </div>
</header>
<div class="content" align="center">
    <?php
    $a = 500000000;
    $b = 56676;
    $c = $a + $b;
    $e = "Мои услуги стоят over ";
    $ee = " баксов per second !";
    echo $e, $c, $ee;
    ?>
    <?php include "forms.php"?>
</div>

<footer>
    <hr class="hr">
    <p align="center">AIV&reg;</p>

</footer>

</body>
</html>
