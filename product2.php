<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple iPhone 16</title>
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
          <img src="img/phone16.jpg">
        </div>
        <div class="description">
          <h2>Apple iPhone 16</h2>
          <h1>104 000 ₽</h1>
          <p>iPhone 16 создан вместе с Apple Intelligence, персональной интеллектуальной системой, которая помогает вам писать, выражать себя и выполнять задачи без усилий. Благодаря новаторской защите конфиденциальности вы можете быть уверены, что никто другой не сможет получить доступ к вашим данным — даже Apple.</p>
          <button>Add to Cart</button>
          <button onclick="window.location.href='payment.html'">Купить</button>

          <ul class="features">
            <p>Характеристики:</p>
            <li>Процессор: Apple A18 Bionic</li>
            <li>Дисплей: 6,1 дюйма, Super Retina XDR OLED, разрешение 2556×1179 пикселей, частота обновления 60 Гц, пиковая яркость 2000 нит или более, защитное стекло Ceramic Shield нового поколения</li>
            <li>Оперативная память: 6 или 8 ГБ</li>
            <li>Накопитель: 128, 256, 512 ГБ, возможно, 1 ТБ</li>
            <li>Тыльная камера: главный датчик на 48 МП, «ширик» на 12 МП</li>
            <li>Батарея: не меньше 3349 мА·ч</li>
            <li>Быстрая зарядка: по проводу не менее 27 Вт, беспроводная MagSafe не менее 15 Вт, беспроводная Qi не менее 7,5 Вт</li>
            <li>Модули: Bluetooth 5.3, Wi-Fi 7, NFC</li>
            </ul>
        </div>
      </div>
</body>
</html>