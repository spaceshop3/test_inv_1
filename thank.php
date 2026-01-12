<?php
$siteName = 'Homify Studio KZ';
$tel = '+7 7172 44 91 08';
$contactAddress = 'г. Астана, пр. Туран, 13';
$contactEmail = 'support@homifystudiokz.com';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteName; ?> - Спасибо за обращение</title>
    <meta name="description" content="Благодарим за обращение. Мы свяжемся с вами в ближайшее время">
    <link rel="icon" href="./fav.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com/3.3.5"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="font-sans antialiased bg-gray-50">

<!-- Header -->
<header class="bg-white text-gray-900 sticky top-0 z-50 shadow-sm border-b border-gray-100">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="text-2xl font-bold text-blue-600 flex items-center">
            <svg class="w-8 h-8 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
            </svg>
            <a href="mainpage.php" class="hover:text-blue-700 transition"><?php echo $siteName; ?></a>
        </div>
        
        <nav class="hidden md:flex space-x-8 items-center">
            <a href="./page1.php" class="text-gray-700 hover:text-blue-600 transition font-medium">Портфолио</a>
            <a href="./page2.php" class="text-gray-700 hover:text-blue-600 transition font-medium">Услуги</a>
            <a href="./page3.php" class="text-gray-700 hover:text-blue-600 transition font-medium">Материалы</a>
            <a href="./page4.php" class="text-gray-700 hover:text-blue-600 transition font-medium">Проекты</a>
            <a href="./contacts.php" class="bg-blue-600 text-white px-6 py-2.5 rounded-full hover:bg-blue-700 transition font-medium">Контакты</a>
        </nav>

        <button id="burgerBtn" class="md:hidden text-gray-900 focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <div id="mobileMenu" class="hidden md:hidden bg-white px-6 py-6 space-y-4 border-t border-gray-100">
        <a href="./page1.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Портфолио</a>
        <a href="./page2.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Услуги</a>
        <a href="./page3.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Материалы</a>
        <a href="./page4.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Проекты</a>
        <a href="./contacts.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Контакты</a>
    </div>
</header>
<!-- /Header -->

<!-- Thank You Section -->
<section class="py-20 bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-6 max-w-3xl text-center">
        <div class="bg-white rounded-3xl shadow-lg p-12">
            <div class="flex justify-center mb-6">
                <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Спасибо за обращение!</h1>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                Ваша заявка успешно отправлена. Наши специалисты свяжутся с вами в ближайшее время для обсуждения деталей проекта.
            </p>

            <div class="bg-blue-50 rounded-2xl p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Что дальше?</h3>
                <ul class="space-y-3 text-left text-gray-700">
                    <li class="flex items-start">
                        <span class="text-blue-600 font-bold mr-3">1.</span>
                        <span>Мы изучим ваш запрос и подготовим предварительные рекомендации</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 font-bold mr-3">2.</span>
                        <span>Наш менеджер свяжется с вами для уточнения деталей проекта</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 font-bold mr-3">3.</span>
                        <span>Мы составим индивидуальное коммерческое предложение и план работ</span>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mainpage.php" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition font-medium">
                    Вернуться на главную
                </a>
                <a href="./page1.php" class="inline-block bg-gray-100 text-gray-900 px-8 py-3 rounded-full hover:bg-gray-200 transition font-medium">
                    Посмотреть портфолио
                </a>
            </div>
        </div>

        <div class="mt-12 grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="text-blue-600 mb-3">
                    <svg class="w-8 h-8 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Позвоните нам</h4>
                <a href="tel:<?php echo $tel; ?>" class="text-blue-600 hover:text-blue-700"><?php echo $tel; ?></a>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="text-blue-600 mb-3">
                    <svg class="w-8 h-8 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Напишите нам</h4>
                <a href="mailto:<?php echo $contactEmail; ?>" class="text-blue-600 hover:text-blue-700 break-all"><?php echo $contactEmail; ?></a>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="text-blue-600 mb-3">
                    <svg class="w-8 h-8 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Приезжайте к нам</h4>
                <p class="text-gray-600 text-sm"><?php echo $contactAddress; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- /Thank You Section -->

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 mb-10">
            <div>
                <div class="flex items-center mb-4">
                    <svg class="w-8 h-8 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold"><?php echo $siteName; ?></h3>
                </div>
                <p class="text-gray-400 leading-relaxed text-sm">
                    Профессиональное обновление жилых пространств и создание функциональных интерьеров в Астане
                </p>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4">Навигация</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="./page1.php" class="text-gray-400 hover:text-blue-500 transition">Портфолио</a></li>
                    <li><a href="./page2.php" class="text-gray-400 hover:text-blue-500 transition">Услуги</a></li>
                    <li><a href="./page3.php" class="text-gray-400 hover:text-blue-500 transition">Материалы</a></li>
                    <li><a href="./page4.php" class="text-gray-400 hover:text-blue-500 transition">Проекты</a></li>
                    <li><a href="./contacts.php" class="text-gray-400 hover:text-blue-500 transition">Контакты</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4">Информация</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="./privacypolicy.php" class="text-gray-400 hover:text-blue-500 transition">Политика конфиденциальности</a></li>
                    <li><a href="./cookiespolicy.php" class="text-gray-400 hover:text-blue-500 transition">Политика cookies</a></li>
                    <li><a href="./termsofservice.php" class="text-gray-400 hover:text-blue-500 transition">Условия использования</a></li>
                    <li><a href="./businessmodel.php" class="text-gray-400 hover:text-blue-500 transition">Бизнес-модель</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4">Контакты</h4>
                <ul class="space-y-3 text-gray-400 text-sm">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span><?php echo $contactAddress; ?></span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:<?php echo $tel; ?>" class="hover:text-blue-500 transition"><?php echo $tel; ?></a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:<?php echo $contactEmail; ?>" class="hover:text-blue-500 transition"><?php echo $contactEmail; ?></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 text-center text-gray-400 text-sm">
            <p>&copy; 2025 <?php echo $siteName; ?>. Все права защищены.</p>
        </div>
    </div>
</footer>
<!-- /Footer -->

<script src="js/script.js"></script>
</body>
</html>
