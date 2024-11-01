<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTX 4080 Super EXPERT </title>
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
          <img src="img/rtx4080.jpg">
        </div>
        <div class="description">
          <h2>RTX 4080 Super EXPERT</h2>
          <h1>38 700 ₽</h1>
          <p>Видеокарта MSI GeForce RTX 4080 SUPER EXPERT гарантирует высочайшую производительность при обработке сложной графики в любых видеоиграх. Устройство предназначено для оснащения мощных игровых компьютеров.</p>
          <button>Add to Cart</button>
          <button onclick="window.location.href='payment.html'">Купить</button>

          <ul class="features">
            <p>Характеристики:</p>
            <li>Графический процессор: NVIDIA AD103-400-A1.</li>
            <li>Техпроцесс: 5-нм, TSMC EUV.</li>
            <li>Частота GPU Boost: 2610 МГц.</li>
            <li>Число вычислительных блоков: 80.</li>
            <li>Видеопамять: 16 Гб GDDR6X.</li>
            <li>Разрядность шины видеопамяти: 256 бит.</li>
            <li>Частота видеопамяти: 23000 МГц.</li>
            <li>Порты: 3 × DisplayPort 1.4a, 1 × HDMI 2.1a.</li>
            <li>Разъём дополнительного питания: 1 х 16-pin.</li>
            <li>Габариты: 312 × 141 × 61 мм.</li>
            <li>TDP: 320 Вт.</li>
            </ul>
        </div>
      </div>
</body>
</html>