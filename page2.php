<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги - <?php echo $siteName; ?></title>
    <meta name="description" content="Полный спектр услуг по обновлению и модернизации жилых пространств">
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
            <a href="./page2.php" class="text-blue-600 hover:text-blue-700 transition font-medium">Услуги</a>
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
        <a href="./page2.php" class="block text-blue-600 hover:text-blue-700 transition font-medium">Услуги</a>
        <a href="./page3.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Материалы</a>
        <a href="./page4.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Проекты</a>
        <a href="./contacts.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Контакты</a>
    </div>
</header>
<!-- /Header -->

<!-- Services Hero -->
<section class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Наши <span class="text-blue-600">услуги</span> по обновлению жилья
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed">
                Полный комплекс работ по модернизации квартир: от проектирования до финальной отделки. 
                Работаем с объектами любой сложности и площади.
            </p>
        </div>
    </div>
</section>
<!-- /Services Hero -->

<!-- Main Services -->
<section class="py-12 md:py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Дизайн-проект</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Разработка индивидуального дизайн-проекта с 3D-визуализацией, подбором материалов, 
                    мебели и декора. Учитываем ваш стиль жизни и предпочтения.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>3D-визуализация всех помещений</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Чертежи и планировочные решения</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Комплектация и подбор материалов</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Заказать услугу →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Перепланировка</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Изменение планировки квартиры с учётом строительных норм. Согласование перепланировки 
                    в государственных органах под ключ. Полное юридическое сопровождение.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Проектирование новой планировки</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Согласование в БТИ и других органах</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Снос и возведение перегородок</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Заказать услугу →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Инженерные системы</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Замена и модернизация всех инженерных коммуникаций: электрика, водоснабжение, отопление, 
                    вентиляция. Установка современного оборудования.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Замена электропроводки и щитка</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Монтаж систем водоснабжения</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Установка отопления и кондиционеров</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Заказать услугу →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Черновая отделка</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Подготовка всех поверхностей к финишной отделке: выравнивание стен и полов, 
                    штукатурка, шпаклёвка, грунтовка. Создание идеально ровных поверхностей.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Выравнивание стен и потолков</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Стяжка пола и звукоизоляция</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Гидроизоляция санузлов</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Заказать услугу →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Финишная отделка</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Окраска стен, поклейка обоев, укладка напольных покрытий, монтаж плитки, 
                    установка дверей и окон. Работаем с премиальными материалами.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Окраска и декоративная отделка</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Укладка ламината, паркета, плитки</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Монтаж дверей и плинтусов</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Заказать услугу →
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Комплексный ремонт</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Ремонт квартиры под ключ: от демонтажа до финальной уборки. Все работы выполняем 
                    собственными силами с гарантией качества до 3 лет.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Все виды работ в одном заказе</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Личный менеджер и контроль качества</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Гарантия на работы до 3 лет</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
                    Заказать услугу →
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Main Services -->

<!-- Process Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Как мы работаем
            </h2>
            <p class="text-gray-600 leading-relaxed">
                Прозрачный и понятный процесс от первого звонка до сдачи объекта
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="img/professional_team_discussing_renovation__1763961425018.jpg?text=Renovation+Process&font=lato" 
                     alt="Professional team discussing renovation plans with blueprints and materials" 
                     class="w-full h-auto rounded-3xl shadow-2xl">
            </div>

            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">1</div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Консультация и замер</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Бесплатный выезд специалиста, обсуждение ваших пожеланий, точные замеры помещений
                        </p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">2</div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Проектирование</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Разработка дизайн-проекта, 3D-визуализация, смета на материалы и работы
                        </p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">3</div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Закупка материалов</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Помощь в выборе и покупке материалов со скидками от поставщиков до 20%
                        </p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">4</div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Выполнение работ</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Ремонт по утверждённому плану с еженедельными отчётами и фотографиями
                        </p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">5</div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Сдача объекта</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Финальная уборка, устранение замечаний, передача документов с гарантией
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Process Section -->

<!-- Benefits Section -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Почему выбирают нас
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-12">
            <div>
                <img src="img/high_quality_renovation_materials_and_pr_1763961427590.jpg?text=Quality+Materials&font=lato" 
                     alt="High quality renovation materials and professional tools ready for work" 
                     class="w-full h-auto rounded-3xl shadow-2xl">
            </div>

            <div class="space-y-8">
                <div>
                    <div class="flex items-center mb-3">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Фиксированная цена</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed ml-11">
                        Стоимость работ фиксируется в договоре и не меняется в процессе ремонта
                    </p>
                </div>

                <div>
                    <div class="flex items-center mb-3">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Точные сроки</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed ml-11">
                        Соблюдаем все установленные сроки, при задержке компенсируем 1% от суммы за каждый день
                    </p>
                </div>

                <div>
                    <div class="flex items-center mb-3">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Гарантия качества</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed ml-11">
                        Предоставляем гарантию на все виды работ до 3 лет, используем проверенные материалы
                    </p>
                </div>

                <div>
                    <div class="flex items-center mb-3">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Опытная команда</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed ml-11">
                        Все специалисты с опытом работы от 5 лет, прошли обучение и имеют сертификаты
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Benefits Section -->

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl p-12 md:p-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Закажите бесплатную консультацию
            </h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                Наш специалист приедет на объект, проведёт замеры и рассчитает предварительную стоимость работ
            </p>
            <a href="./contacts.php" class="inline-block bg-white text-blue-600 px-10 py-4 rounded-full hover:bg-gray-100 transition font-bold shadow-xl">
                Оставить заявку
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
