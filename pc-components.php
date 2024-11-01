<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="smartphonestyle.css">
    <title>Смартфоны</title>
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
    
<div class="main-content">
    <div class="filters">
        <h2>Фильтры</h2>
        <div class="filter">
            <h3>Производитель</h3>
            <label><input type="checkbox" class="brand-filter" value="Samsung"> Samsung</label>
            <label><input type="checkbox" class="brand-filter" value="iPhone"> iPhone</label>
            <label><input type="checkbox" class="brand-filter" value="Realme"> Realme</label>
            <label><input type="checkbox" class="brand-filter" value="Redmi"> Redmi</label>
            <label><input type="checkbox" class="brand-filter" value="Tecno"> Tecno</label>
        </div>
        
        <div class="filter">
            <h3>Цена</h3>
            <label for="min-price">Минимум: </label>
            <input type="number" id="min-price" placeholder="0">
            <label for="max-price">Максимум: </label>
            <input type="number" id="max-price" placeholder="100000">
        </div>
        
        <button id="apply-filters">Применить фильтры</button>
    </div>

    <div class="product-grid">
        <div class="product-card" data-brand="Samsung" data-price="60000">
            <img src="img/SamsungGalaxyS21.jpg" alt="Samsung Galaxy S21">
            <h3>Samsung Galaxy S21</h3>
            <p class="price">Цена: 60,000 ₽</p>
            <button>Купить</button>
        </div>
        <div class="product-card" data-brand="iPhone" data-price="70000">
            <img src="img/iPhone12.jpg" alt="iPhone 12">
            <h3>iPhone 12</h3>
            <p class="price">Цена: 70,000 ₽</p>
            <button>Купить</button>
        </div>
        <div class="product-card" data-brand="Realme" data-price="25000">
            <img src="img/Realme8.jpg" alt="Realme 8">
            <h3>Realme 8</h3>
            <p class="price">Цена: 25,000 ₽</p>
            <button>Купить</button>
        </div>
        <div class="product-card" data-brand="Redmi" data-price="20000">
            <img src="img/Realme8.jpg" alt="Redmi Note 10">
            <h3>Redmi Note 10</h3>
            <p class="price">Цена: 20,000 ₽</p>
            <button>Купить</button>
        </div>
        <div class="product-card" data-brand="Tecno" data-price="18000">
            <img src="img/TecnoSPARK20Pro.jpg" alt="Tecno SPARK 20 Pro">
            <h3>Tecno SPARK 20 Pro</h3>
            <p class="price">Цена: 18,000 ₽</p>
            <button>Купить</button>
        </div>
        
    </div>
</div>
    <script src="script.js"></script>
</body>
</html>
