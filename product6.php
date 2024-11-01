<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RingConn Gen 2</title>
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
          <img src="img/RingConnGen2.jpg">
        </div>
        <div class="description">
          <h2>RingConn Gen 2</h2>
          <h1>224 999 ₽</h1>
          <p>Ноутбук LG Gram 2in1 - это устройство, которое сочетает в себе стиль, производительность и функциональность.</p>
          <button>Add to Cart</button>
          <button onclick="window.location.href='payment.html'">Купить</button>

          <ul class="features">
            <p>Характеристики:</p>
            <li>Вес: 2–3 грамма.</li>
            <li>Толщина: 2 мм.</li>
            <li>Доступные размеры: 6–14.</li>
            <li>Время автономной работы: до 10–12 дней.</li>
            <li>Датчики: четыре датчика PPG, два датчика температуры и трёхмерный акселерометр.</li>
            <li>Защита: от воды и пыли по стандартам IP68.</li>
            <li>Цвета: будущее серебро, розовое золото, королевское золото (глянцевая отделка), матовый чёрный (матовая отделка).</li>
            </ul>
        </div>
      </div>
</body>
</html>