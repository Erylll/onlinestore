<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG OLED T</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>
<header class="header-container">
    <div class="logo" onclick="window.location.href='index.php'">XON</div>
    <div class="search-container">
        <div class="search-bar">
            <input type="text" placeholder="Поиск товаров..." class="search-input">
            <button class="search-button">Поиск</button>
        </div>
    </div>
     

    <div class="header-icons">
    <div class="cart-icon" onclick="window.location.href='tovars.php'">Товары</div>
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Если пользователь авторизован, показываем ссылку на профиль -->
            <div class="profile-icon" onclick="window.location.href='profile.php'">
                <?php echo htmlspecialchars($_SESSION['user_name']); ?>
            </div>
        <?php else: ?>
            <!-- Если пользователь не авторизован, перенаправляем на страницу авторизации -->
            <div class="profile-icon" onclick="window.location.href='auth.php'">Профиль</div>
        <?php endif; ?>
        <div class="cart-icon">Корзина (<span id="cart-count">0</span>)</div>
    </div>
</header>
    <div class="card">
        <nav>

        </nav>
        <div class="photo">
          <img src="img/LGOLEDT.jpg">
        </div>
        <div class="description">
          <h2>LG OLED T</h2>
          <h1>110 000 ₽</h1>
          <p>Телевизор OLED LG OLED48C4RLA оборудован 48-дюймовым экраном с панелью OLED стандарта 4K, что обеспечивает передачу детализированного изображения. Технология Dolby Vision обеспечивает натуральность и глубину оттенков. Телевизор оснащен акустической системой 40 Вт. Громкие динамики с чистым и объемным звучанием погружают в происходящее на экране.</p>
          <button>Add to Cart</button>
          <button onclick="window.location.href='payment.html'">Купить</button>

          <ul class="features">
            <p>Характеристики:</p>
            <li>Дисплей. Тип экрана: OLED. Разрешение: 4K Ultra HD (3840 x 2160 пикселей). Частота обновления: 120 Гц. Поддержка HDR: Dolby Vision, HDR10, HLG. </li>
            <li>Звук. Аудиосистема: встроенные динамики с поддержкой Dolby Atmos. Мощность: 60 Вт (4,2 канала).</li>
            <li>Процессор. Модель: α9 Gen 4 AI Processor 4K.</li>
            <li>Операционная система. Платформа: webOS.</li>
            <li>Подключения. HDMI: 4 порта HDMI 2.1. USB: 3 порта USB 3.0. Ethernet: 1 порт. Wi-Fi: встроенный модуль Wi-Fi 6. Bluetooth: поддержка Bluetooth 5.0.</li>
            <li>Дизайн. Толщина: ультратонкий профиль, менее 4 мм в самой тонкой части. Рамка: безрамочный дизайн. Подставка: возможность настенного крепления и стильная подставка. </li>
            </ul>
        </div>
      </div>
</body>
</html>