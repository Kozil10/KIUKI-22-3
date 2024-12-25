<?php
session_start();

$sessionName = $_SESSION['username'] ?? 'Ім\'я не знайдено в сесії';
$cookieName = $_COOKIE['username'] ?? 'Ім\'я не знайдено в куки';
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ласкаво просимо</title>
</head>
<body>
    <h1>Ласкаво просимо!</h1>
    <p><strong>Ім'я із сесії:</strong> <?php echo htmlspecialchars($sessionName); ?></p>
    <p><strong>Ім'я із куки:</strong> <?php echo htmlspecialchars($cookieName); ?></p>

    <a href="page2.php">Перейти на іншу сторінку</a> |
    <a href="index.php">Повернутися на головну сторінку</a>
</body>
</html>