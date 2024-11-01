<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
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



    <main>
        <!-- Новинки Section -->
        <section class="new-products">
            <h2 class="section-title">Новинки</h2>
            <div class="new-products-container">
                <!-- Новинки карточки -->
                <div class="new-product-item" onclick="window.location.href='product1.php'">
                    <img src="img/rtx4080.jpg" alt="Новинка 1" class="product-image">
                    <p class="product-description">RTX 4080 Super EXPERT</p>
                </div>
                <div class="new-product-item" onclick="window.location.href='product2.php'">
                    <img src="img/phone16.jpg" alt="Новинка 2" class="product-image">
                    <p class="product-description">Apple iPhone 16</p>
                </div>
                <div class="new-product-item" onclick="window.location.href='product3.php'">
                    <img src="img/LGOLEDT.jpg" alt="Новинка 3" class="product-image">
                    <p class="product-description">LG OLED T</p>
                </div>
                <div class="new-product-item" onclick="window.location.href='product4.php'">
                    <img src="img/MSIClawA1M.jpg" alt="Новинка 4" class="product-image">
                    <p class="product-description">MSI Claw A1M</p>
                </div>
                <div class="new-product-item" onclick="window.location.href='product5.php'">
                    <img src="img/LGGramPro2-in-1.jpg" alt="Новинка 4" class="product-image">
                    <p class="product-description">LG Gram Pro 2-in-1</p>
                </div>
                <div class="new-product-item" onclick="window.location.href='product6.php'">
                    <img src="img/RingConnGen2.jpg" alt="Новинка 4" class="product-image">
                    <p class="product-description">RingConn Gen 2</p>
                </div>
                <div class="new-product-item" onclick="window.location.href='product7.php'">
                    <img src="img/HonorMagicBookArt14.jpg" alt="Новинка 4" class="product-image">
                    <p class="product-description">Honor MagicBook Art 14</p>
                </div>
            </div>
        </section>

        <!-- Категории Section -->
        <section class="categories-section">
            <h2 class="section-title">Категории</h2>
            <div class="categories-container">
                <div class="category-item">
                    <p class="category-description" onclick="window.location.href='smartphones.php'">Смартфоны</p>
                </div>
                <div class="category-item">
                    <p class="category-description" onclick="window.location.href='laptops.php'">Ноутбуки</p>
                </div>
                <div class="category-item">
                    <p class="category-description" onclick="window.location.href='monitors.php'">Мониторы</p>
                </div>
                <div class="category-item">
                    <p class="category-description" onclick="window.location.href='cameras.php'">Фототехника</p>
                </div>
                <div class="category-item">
                    <p class="category-description" onclick="window.location.href='pc-components.php'">Комплектующие для ПК</p>
                </div>
            </div>
        </section> 
    <script src="script.js"></script>


<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Первый столбец -->
        <div class="footer-column">
            <h3>Покупателям</h3>
            <ul>
                <li><a href="#">Акции и Скидки</a></li>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Публичная оферта</a></li>
                <li><a href="#">Подарочные карты</a></li>
            </ul>
        </div>
        <!-- Второй столбец -->
        <div class="footer-column">
            <h3>Бизнесу</h3>
            <ul>
                <li><a href="#">Тренды</a></li>
                <li><a href="#">Поставщики</a></li>
                <li><a href="#">Аренда торговых помещений</a></li>
            </ul>
        </div>
        <!-- Третий столбец -->
        <div class="footer-column">
            <h3>О компании</h3>
            <ul>
                <li><a href="#">Вакансии</a></li>
                <li><a href="#">Политика компании</a></li>
                <li><a href="#">Экологические инициативы</a></li>
            </ul>
        </div>
        <!-- Четвертый столбец -->
        <div class="footer-column">
            <h3>Контакты</h3>
            <ul>
                <li><a href="#">Telegram</a></li>
                <li><a href="#">Viber</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
