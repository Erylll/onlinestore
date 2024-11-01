<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="auth.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-container">
        <div class="logo" onclick="window.location.href='index.php'">XON</div>
    </header>
    <div class="login-container">
        <h2 class="login-title">Войти</h2>
        <form class="login-form" action="auth.php" method="POST">
            <input type="email" name="email" class="login-input" placeholder="Email" required>
            <input type="password" name="password" class="login-input" placeholder="Пароль" required>
            <button type="submit" class="login-button">Войти</button>
        </form>

        <!-- Link to registration page -->
        <a href="register.php" class="register-link">Зарегестироваться?</a>
    </div>
</body>
</html>


<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Проверка наличия пользователя в базе данных
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Установка сессии при успешном входе
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];  // Установка email в сессии
        
        header("Location: index.php");  // Перенаправляем на главную страницу
        exit();
    } else {
        // Сообщение об ошибке при неправильном пароле
        echo "<p>Неверный email или пароль</p>";
    }
}
?>




 


