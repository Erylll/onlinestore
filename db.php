<?php
$host = 'localhost';       // Хост, на котором работает база данных
$dbname = 'xon_store';      // Название вашей базы данных
$username = 'root';         // Имя пользователя для базы данных (по умолчанию для XAMPP — 'root')
$password = '';             // Пароль для базы данных (по умолчанию для XAMPP — пустая строка)

try {
    // Создаем объект PDO для подключения к базе данных
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Настраиваем PDO на вывод ошибок для отладки
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>
