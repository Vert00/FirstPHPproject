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
    <?php echo "Приветствую заинтересованный! " . "<br>". "Меня зовут ", $name," ",  $surname," ", "и мне ",  $age," " ,"лет"; ?>
</div>

<footer>

</footer>

</body>
</html>
