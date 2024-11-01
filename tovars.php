<?php
session_start(); // Начинаем сессию в начале страницы
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <link rel="stylesheet" href="tovars.css">
</head>
<header class="header-container">
    <div class="logo" onclick="window.location.href='index.php'">XON</div>
    <div class="search-container">
        <div class="search-bar">
            <input type="text" id="searchInput" class="search-input" placeholder="Поиск по товарам...">
            <button id="searchButton" class="search-button">Поиск</button>
        </div>
        


    </div>
     

    <div class="header-icons">
    <div class="cart-icon" onclick="window.location.href='tovars.php'">Товары</div>
    <?php if (isset($_SESSION['user_id'])): ?>
            <div class="profile-icon" onclick="window.location.href='profile.php'">
                <?php echo htmlspecialchars($_SESSION['user_name']); ?>
            </div>
        <?php else: ?>
            <div class="profile-icon" onclick="window.location.href='auth.php'">Профиль</div>
        <?php endif; ?>
        <div class="cart-icon">Корзина (<span id="cart-count">0</span>)</div>
    </div>
</header>

    <main>
        <section class="products-section">
            <h2 class="section-title">Наши товары</h2>
            <div class="products-container">
                <!-- Product Item Template -->
                <div class="product-item">
                    <img src="tovar/Смартфон Xiaomi Redmi 14C 4128GB Blac.jpg" alt="Смартфон Xiaomi Redmi 14C 4/128GB Blac" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Смартфон Xiaomi Redmi 14C</h3>
                        <p class="product-price">₽11,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                
                <!-- Repeat Product Items -->
                <div class="product-item">
                    <img src="tovar/Телевизор Sber SDX-32H2124.jpg" alt="Телевизор Sber SDX-32H2124" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Телевизор Sber SDX-32H2124</h3>
                        <p class="product-price">₽9,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/HONORX7128GBMidnight Black.jpg" alt="Смартфон HONOR X7c 6/128GB Midnight Black" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Смартфон HONOR X7c 6/128GB Midnight Black</h3>
                        <p class="product-price">₽14,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Смарт-часы HUAWEI FIT 2 Active Edition Sakura Pink.jpg" alt="Смарт-часы HUAWEI FIT 2 Active Edition Sakura Pink" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Смарт-часы HUAWEI FIT 2 Active Edition Sakura Pink</h3>
                        <p class="product-price">₽5,499</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Игровая клавиатура Red Square Keyrox TKL Hyperion RSQ-20039.jpg" alt="Игровая клавиатура Red Square Keyrox TKL Hyperion RSQ-20039" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Игровая клавиатура Red Square Keyrox TKL Hyperion RSQ-20039</h3>
                        <p class="product-price">₽4,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Планшет HONOR Pad X9 4128GB LTE Gray +клавиатура 5301AGTR.jpg" alt="Планшет HONOR Pad X9 4/128GB LTE Gray +клавиатура 5301AGTR" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Планшет HONOR Pad X9 4/128GB LTE Gray +клавиатура 5301AGTR</h3>
                        <p class="product-price">₽25,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Смартфон POCO M6 Pro 12512 Gb Black.jpg" alt="Смартфон POCO M6 Pro 12/512 Gb Black" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Смартфон POCO M6 Pro 12/512 Gb Black</h3>
                        <p class="product-price">₽23,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Холодильник Gorenje NRK6202AW4 белый.jpg" alt="Холодильник Gorenje NRK6202AW4 белый" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Холодильник Gorenje NRK6202AW4 белый</h3>
                        <p class="product-price">₽46,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Телевизор Sber SDX-43U4128.jpg" alt="Телевизор Sber SDX-43U4128" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Телевизор Sber SDX-43U4128</h3>
                        <p class="product-price">₽17,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Смартфон Samsung Galaxy S24 FE 8256GB серый.jpg" alt="Смартфон Samsung Galaxy S24 FE 8/256GB серый" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Смартфон Samsung Galaxy S24 FE 8/256GB серый</h3>
                        <p class="product-price">₽64,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Телевизор Samsung UE43DU8000UXRU.jpg" alt="Телевизор Samsung UE43DU8000UXRU" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Телевизор Samsung UE43DU8000UXRU</h3>
                        <p class="product-price">₽35,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Телевизор Hisense 43E7NQ.jpg" alt="Телевизор Hisense 43E7NQ" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Телевизор Hisense 43E7NQ</h3>
                        <p class="product-price">₽27,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/Xiaomi Robot Vacuum S12 EU.jpg" alt="Робот-пылесос Xiaomi Robot Vacuum S12 EU" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Робот-пылесос Xiaomi Robot Vacuum S12 EU</h3>
                        <p class="product-price">₽13,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="tovar/SamsungGalaxyTabA9Wi-Fi128GBGray.jpg" alt="Планшет Samsung Galaxy Tab A9 Wi-Fi 128GB Gray" class="product-image">
                    <div class="product-details">
                        <h3 class="product-title">Планшет Samsung Galaxy Tab A9 Wi-Fi 128GB Gray </h3>
                        <p class="product-price">₽12,999</p>
                        <button class="buy-button" onclick="window.location.href='payment.html'">Купить</button>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <script>
    // Добавляем событие на кнопку поиска
    document.getElementById("searchButton").addEventListener("click", function() {
        filterProducts(); // Вызов функции фильтрации при нажатии на кнопку
    });

    // Функция фильтрации товаров
    function filterProducts() {
        // Получаем значение из поля поиска и приводим к нижнему регистру
        let filter = document.getElementById("searchInput").value.toLowerCase();
        // Получаем все элементы с классом "product-item" (товары)
        let products = document.querySelectorAll(".product-item");

        // Перебираем товары и проверяем соответствие названия фильтру
        products.forEach(function(product) {
            // Получаем текст заголовка товара и приводим к нижнему регистру
            let title = product.querySelector(".product-title").textContent.toLowerCase();
            // Проверяем, если заголовок содержит текст фильтра
            if (title.includes(filter)) {
                product.style.display = ""; // Показываем товар
            } else {
                product.style.display = "none"; // Скрываем товар
            }
        });
    }
</script>


</body>
</html>
