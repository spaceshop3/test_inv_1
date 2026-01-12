<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Материалы - <?php echo $siteName; ?></title>
    <meta name="description" content="Качественные материалы для ремонта и отделки квартир">
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
            <a href="./mainpage.php" class="hover:text-blue-700 transition"><?php echo $siteName; ?></a>
        </div>
        
        <nav class="hidden md:flex space-x-8 items-center">
            <a href="./page1.php" class="text-gray-700 hover:text-blue-600 transition font-medium">Портфолио</a>
            <a href="./page2.php" class="text-gray-700 hover:text-blue-600 transition font-medium">Услуги</a>
            <a href="./page3.php" class="text-blue-600 hover:text-blue-700 transition font-medium">Материалы</a>
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
        <a href="./page3.php" class="block text-blue-600 hover:text-blue-700 transition font-medium">Материалы</a>
        <a href="./page4.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Проекты</a>
        <a href="./contacts.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Контакты</a>
    </div>
</header>
<!-- /Header -->

<!-- Materials Hero -->
<section class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Качественные <span class="text-blue-600">материалы</span> для вашего дома
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed">
                Работаем только с проверенными производителями и предлагаем широкий ассортимент материалов 
                для любого бюджета. Скидки до 20% от партнёров.
            </p>
        </div>
    </div>
</section>
<!-- /Materials Hero -->

<!-- Materials Categories -->
<section class="py-12 md:py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Отделочные материалы</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Краски, декоративные штукатурки, обои, стеновые панели от ведущих производителей
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Tikkurila, Dulux, Benjamin Moore</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Обои A.S. Création, Erismann</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Декоративная штукатурка Oikos</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Подобрать материалы →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Напольные покрытия</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Ламинат, паркет, инженерная доска, виниловые полы премиум-класса
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Ламинат Quick-Step, Pergo</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Паркет Barlinek, Tarkett</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Виниловые полы Arbiton</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Подобрать материалы →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Керамическая плитка</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Керамогранит, кафель, мозаика для ванных комнат и кухонь
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Керамогранит Italon, Atlas Concorde</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Плитка Cerasarda, FAP Ceramiche</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Мозаика Bisazza, Ezarri</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Подобрать материалы →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Сантехника</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Ванны, душевые кабины, смесители, раковины европейских брендов
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Grohe, Hansgrohe, Hansa</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Villeroy & Boch, Duravit</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Ravak, Roca, Cersanit</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Подобрать материалы →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Освещение</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Люстры, светильники, LED-подсветка, системы умного освещения
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Люстры Favourite, Odeon Light</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>LED-светильники Philips, Osram</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Умное освещение Xiaomi, Yeelight</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Подобрать материалы →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Двери и фурнитура</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Межкомнатные и входные двери, замки, ручки, доводчики
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Межкомнатные двери Porta Prima</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Входные двери Torex, Гардиан</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Фурнитура Armadillo, Morelli</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Подобрать материалы →
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Materials Categories -->

<!-- Materials Showcase -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <div class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Премиум-класс
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Работаем с лучшими мировыми брендами
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Мы сотрудничаем напрямую с производителями и официальными дистрибьюторами, 
                    что позволяет нам гарантировать подлинность продукции и предлагать выгодные цены. 
                    Получаете скидки до 20% на материалы при заказе комплексного ремонта.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">100% оригинальная продукция</h3>
                            <p class="text-sm text-gray-600">Все материалы с сертификатами и гарантией производителя</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Скидки до 20%</h3>
                            <p class="text-sm text-gray-600">Специальные цены для клиентов при заказе ремонта</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Бесплатная доставка</h3>
                            <p class="text-sm text-gray-600">Привозим материалы на объект за свой счёт</p>
                        </div>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-full hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                    Получить каталог
                </a>
            </div>

            <div class="relative">
                <img src="img/showcase_of_premium_renovation_materials_1763961430257.jpg?text=Premium+Materials&font=lato" 
                     alt="Showcase of premium renovation materials including tiles and flooring samples" 
                     class="w-full h-auto rounded-3xl shadow-2xl">
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 relative">
                <img src="img/interior_designer_helping_client_choose__1763961432941.jpg?text=Design+Selection&font=lato" 
                     alt="Interior designer helping client choose materials and color schemes" 
                     class="w-full h-auto rounded-3xl shadow-2xl">
            </div>

            <div class="order-1 md:order-2">
                <div class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Индивидуальный подход
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Поможем подобрать материалы под ваш бюджет
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Наши специалисты составят несколько вариантов комплектации: эконом, стандарт и премиум. 
                    Вы сможете выбрать оптимальное соотношение цены и качества для вашего проекта. 
                    Покажем образцы материалов прямо у вас дома.
                </p>
                <div class="bg-gray-50 rounded-2xl p-6 mb-6">
                    <h3 class="font-bold text-gray-900 mb-4">Примеры бюджетов на материалы:</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Эконом-класс (1-комн.)</span>
                            <span class="font-bold text-gray-900">от 800 000 ₸</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Стандарт (2-комн.)</span>
                            <span class="font-bold text-blue-600">от 1 500 000 ₸</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Премиум (3-комн.)</span>
                            <span class="font-bold text-gray-900">от 3 000 000 ₸</span>
                        </div>
                    </div>
                </div>
                <a href="./contacts.php" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-full hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                    Рассчитать стоимость
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Materials Showcase -->

<!-- Benefits -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 text-center">
            Преимущества работы с нами
        </h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-sm">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Гарантия качества</h3>
                <p class="text-gray-600 text-sm">Все материалы с сертификатами и официальной гарантией</p>
            </div>

            <div class="text-center">
                <div class="bg-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-sm">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Выгодные цены</h3>
                <p class="text-gray-600 text-sm">Работаем без наценок, цены от производителя</p>
            </div>

            <div class="text-center">
                <div class="bg-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-sm">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Быстрая доставка</h3>
                <p class="text-gray-600 text-sm">Доставка материалов на объект в течение 1-2 дней</p>
            </div>

            <div class="text-center">
                <div class="bg-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-sm">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Помощь в выборе</h3>
                <p class="text-gray-600 text-sm">Бесплатная консультация дизайнера по подбору</p>
            </div>
        </div>
    </div>
</section>
<!-- /Benefits -->

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl p-12 md:p-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Нужна помощь в выборе материалов?
            </h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                Наши специалисты бесплатно подберут оптимальный вариант материалов под ваш бюджет и стиль
            </p>
            <a href="./contacts.php" class="inline-block bg-white text-blue-600 px-10 py-4 rounded-full hover:bg-gray-100 transition font-bold shadow-xl">
                Получить консультацию
            </a>
        </div>
    </div>
</section>
<!-- /CTA Section -->

<!-- Footer -->
<footer class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
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
