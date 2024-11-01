<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="register-style.css">
</head>
<body>
    <header class="logo-container">
        <div class="logo" onclick="window.location.href='index.php'">XON</div>
    </header>
    <div class="register-container">
        <div class="register-card">
            <h2 class="register-title">Создать аккаунт</h2>
            <form class="register-form" action="register.php" method="POST">
                <input type="text" name="name" class="register-input" placeholder="Имя" required>
                <input type="email" name="email" class="register-input" placeholder="Email" required>
                <input type="password" name="password" class="register-input" placeholder="Пароль" required>
                <button type="submit" class="register-button">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Хэшируем пароль

    // Проверка, существует ли пользователь с таким email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    if ($stmt->fetch()) {
        echo "<p>Email уже зарегистрирован. Пожалуйста, войдите или используйте другой email.</p>";
    } else {
        // Добавление нового пользователя в базу данных
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);

        // Установка сессии для нового пользователя
        $_SESSION['user_id'] = $pdo->lastInsertId(); // Получаем ID нового пользователя
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;

        // Перенаправление на главную страницу после успешной регистрации
        header("Location: index.php");
        exit();
    }
}
?>


