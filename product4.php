<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSI Claw A1M</title>
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
          <img src="img/MSIClawA1M.jpg">
        </div>
        <div class="description">
          <h2>MSI Claw A1M</h2>
          <h1>78 419 ₽</h1>
          <p>MSI Claw A1M — это портативное игровое устройство, знаменующее новую эру портативных игровых консолей. Консоль оснащена процессорами Intel Core Ultra и технологией Intel XeSS, обеспечивающей плавный игровой процесс даже в AAA играх.</p>
          <button>Add to Cart</button>
          <button onclick="window.location.href='payment.html'">Купить</button>

          <ul class="features">
            <p>Характеристики:</p>
            <li>Процессор: (до) Intel Core Ultra 7 155H.</li>
            <li>ОЗУ: 16 ГБ LPDDR.</li>
            <li>Дисплей: 7 дюймов, Full HD 1920x1080, частота обновления 120 Гц, сенсорный, 500 нит, 100% sRGB.</li>
            <li>Графика: Intel Arc Graphics.</li>
            <li>ПЗУ: твердотельный накопитель NVMe M.2 2230.</li>
            <li>Сеть: Intel Wi-Fi 7 и Bluetooth 5.4 .</li>
            <li>Интерфейсы: порт Thunderbolt 4, 1 устройство для чтения карт памяти microSD, 1 комбинированный аудиоразъем.</li>
            <li>Аккумулятор: 53 Втч.</li>
            <li>Зарядное устройство 65 Вт USB Type-C.</li>
            <li>Система: Windows 11 Домашняя.</li>
            <li>Вес: 675 г.</li>
            </ul>
        </div>
      </div>
</body>
</html>