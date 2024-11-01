<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honor MagicBook Art 14</title>
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
          <img src="img/HonorMagicBookArt14.jpg">
        </div>
        <div class="description">
          <h2>Honor MagicBook Art 14</h2>
          <h1>154 700 ₽</h1>
          <p>Ноутбук Honor MagicBook Art 14 MRA-521 с 14.6-дюймовым OLED-экраном отображает четкую и красочную картинку в разрешении 3120x2080 dpi.</p>
          <button>Add to Cart</button>
          <button onclick="window.location.href='payment.html'">Купить</button>

          <ul class="features">
            <p>Характеристики:</p>
            <li>Дисплей: 14,6 дюйма, OLED-экран с цветовым охватом 100% P3, разрешение 3180x2080 (3,1K), соотношение 3:2, яркость 700 нит, частота 60/120 Гц.</li>
            <li>Процессор: Intel Core Ultra 5 (125H) или Intel Core Core 7 (155H). </li>
            <li>Графика: Intel Arc.</li>
            <li>Оперативная память: 32 ГБ LPDDR5X.</li>
            <li>Накопитель: 1 ТБ M.2 PCIe.</li>
            <li>Батарея: 60 Вт·ч, быстрая зарядка 65 Вт.</li>
            <li>Разъёмы: USB-C (Thunderbolt 4), USB-C, USB-A (USB 3.2 Gen1), HDMI 2,1, аудиоразъём 3,5 мм.</li>
            <li>Интерфейсы: Wi-Fi 6E, Bluetooth 5.3, NFC, сканер отпечатков пальцев.</li>
            <li>Габариты и вес: 316×223x11,5 мм / 1,03 кг.</li>
            </ul>
        </div>
      </div>
</body>
</html>