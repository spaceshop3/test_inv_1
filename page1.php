<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио - <?php echo $siteName; ?></title>
    <meta name="description" content="Наши завершённые проекты по обновлению и модернизации жилых пространств">
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
            <a href="./page1.php" class="text-blue-600 hover:text-blue-700 transition font-medium">Портфолио</a>
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
        <a href="./page1.php" class="block text-blue-600 hover:text-blue-700 transition font-medium">Портфолио</a>
        <a href="./page2.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Услуги</a>
        <a href="./page3.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Материалы</a>
        <a href="./page4.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Проекты</a>
        <a href="./contacts.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Контакты</a>
    </div>
</header>
<!-- /Header -->

<!-- Portfolio Hero -->
<section class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Наши <span class="text-blue-600">завершённые проекты</span>
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed">
                Более 250 реализованных проектов по обновлению жилых пространств в Астане. 
                Каждый проект уникален и отражает индивидуальные потребности наших клиентов.
            </p>
        </div>
    </div>
</section>
<!-- /Portfolio Hero -->

<!-- Featured Projects -->
<section class="py-12 md:py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <div class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Проект №1 - ЖК Изумрудный Квартал
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Современная трёхкомнатная квартира с панорамными окнами
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Полная модернизация квартиры площадью 95 м² включала перепланировку, замену всех коммуникаций, 
                    установку современной сантехники и встроенной мебели. Особое внимание уделили созданию открытого 
                    пространства с объединением кухни и гостиной.
                </p>
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="bg-white p-5 rounded-2xl shadow-sm">
                        <div class="text-3xl font-bold text-blue-600 mb-2">95 м²</div>
                        <div class="text-sm text-gray-600">Общая площадь</div>
                    </div>
                    <div class="bg-white p-5 rounded-2xl shadow-sm">
                        <div class="text-3xl font-bold text-blue-600 mb-2">45 дней</div>
                        <div class="text-sm text-gray-600">Срок выполнения</div>
                    </div>
                    <div class="bg-white p-5 rounded-2xl shadow-sm">
                        <div class="text-3xl font-bold text-blue-600 mb-2">3 комнаты</div>
                        <div class="text-sm text-gray-600">Планировка</div>
                    </div>
                    <div class="bg-white p-5 rounded-2xl shadow-sm">
                        <div class="text-3xl font-bold text-blue-600 mb-2">2024</div>
                        <div class="text-sm text-gray-600">Год завершения</div>
                    </div>
                </div>
                <a href="./contacts.php" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-full hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                    Заказать похожий проект
                </a>
            </div>
            
            <div class="relative">
                <img src="img/modern_three_bedroom_apartment_with_pano_1763961418450.jpg?text=Modern+Interior+Design&font=lato" 
                     alt="Modern three-bedroom apartment with panoramic windows in Astana" 
                     class="w-full h-auto rounded-3xl shadow-2xl">
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl hidden md:block">
                    <div class="flex items-center space-x-4">
                        <div class="bg-green-100 p-3 rounded-xl">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Проект завершён</p>
                            <p class="text-lg font-bold text-gray-900">Декабрь 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 relative">
                <img src="img/luxury_kitchen_renovation_with_integrate_1763961422326.jpg?text=Kitchen+Renovation&font=lato" 
                     alt="Luxury kitchen renovation with integrated appliances and marble countertops" 
                     class="w-full h-auto rounded-3xl shadow-2xl">
                <div class="absolute -top-6 -right-6 bg-white p-6 rounded-2xl shadow-xl hidden md:block">
                    <div class="flex items-center space-x-3">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <div>
                            <p class="text-2xl font-bold text-gray-900">5.0</p>
                            <p class="text-xs text-gray-600">Отзыв клиента</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 md:order-2">
                <div class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Проект №2 - ЖК Достык
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Премиальная кухня с интегрированной техникой
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Создание элитного кухонного пространства с использованием натурального мрамора, 
                    встроенной бытовой техники премиум-класса и индивидуальной мебели. Реализована умная 
                    система освещения с возможностью управления через мобильное приложение. Установлены 
                    энергоэффективные приборы класса A+++.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Столешница из натурального мрамора Calacatta</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Встроенная техника премиум-класса Miele</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Система умного освещения Philips Hue</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Индивидуальная мебель из массива дуба</span>
                    </li>
                </ul>
                <a href="./contacts.php" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-full hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                    Получить консультацию
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Featured Projects -->

<!-- Statistics -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 text-center">
                Наши достижения в цифрах
            </h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">250+</div>
                    <div class="text-gray-600">Завершённых проектов</div>
                </div>
                
                <div class="text-center">
                    <div class="bg-blue-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">230+</div>
                    <div class="text-gray-600">Довольных клиентов</div>
                </div>

                <div class="text-center">
                    <div class="bg-blue-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">7 лет</div>
                    <div class="text-gray-600">Опыта на рынке</div>
                </div>

                <div class="text-center">
                    <div class="bg-blue-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">4.9/5</div>
                    <div class="text-gray-600">Средняя оценка</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Statistics -->

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl p-12 md:p-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Готовы начать свой проект?
            </h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                Свяжитесь с нами сегодня, чтобы обсудить ваш проект обновления жилого пространства. 
                Наши специалисты готовы превратить ваши идеи в реальность.
            </p>
            <a href="./contacts.php" class="inline-block bg-white text-blue-600 px-10 py-4 rounded-full hover:bg-gray-100 transition font-bold shadow-xl">
                Связаться с нами
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
