<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteName; ?> - Комплексное обновление жилья в Астане</title>
    <meta name="description" content="Модернизация квартир, подбор материалов, улучшение планировки, создание функциональных интерьеров">
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

<!-- Hero Section -->
<section class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Старую на новую со <span class="text-blue-600">скидкой до 8%</span>
                </h1>
                <div class="space-y-4 mb-8 text-gray-700">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="leading-relaxed">Обновление квартир от 2 до 7 дней — экспресс ремонт без потери качества</p>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="leading-relaxed">Комплексное интерьерное решение: планировка, дизайн, материалы, контроль</p>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="leading-relaxed">Прозрачные цены без скрытых платежей и полная отчётность на всех этапах</p>
                    </div>
                </div>
                <a href="#contacts" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-full hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                    Узнать цену
                </a>
            </div>
            
            <div class="relative">
                <img src="img/_________________________________________1763961408665.jpg?height=600&width=800" 
                     alt="Современный интерьер квартиры с семьёй и домашним питомцем" 
                     class="w-full h-auto rounded-3xl shadow-2xl">
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl hidden md:block">
                    <div class="flex items-center space-x-4">
                        <div class="bg-blue-100 p-3 rounded-xl">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-gray-900">250+</p>
                            <p class="text-sm text-gray-600">Завершённых проектов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<!-- Trade-in Section -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">
            Кому подойдёт Trade-in
        </h2>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="md:col-span-1 md:row-span-2 bg-gradient-to-br from-gray-900 to-gray-800 rounded-3xl overflow-hidden relative h-full min-h-[400px] cursor-pointer transform transition hover:scale-[1.02] hover:shadow-2xl group" data-flip-card>
                <img src="img/___________________________________1763961411125.jpg?height=600&width=400" 
                     alt="Старая квартира требует обновления" 
                     class="w-full h-full object-cover opacity-80 group-hover:opacity-90 transition">
                <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-2xl font-bold text-white mb-2">Хотите квартиру в новом ЖК</h3>
                    <p class="text-gray-200 leading-relaxed">Обменяем вашу старую квартиру на новую с доплатой. Берём на себя всю организацию сделки</p>
                </div>
                <div class="flip-card-back">
                    <div class="bg-blue-600 p-8 rounded-3xl h-full flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-white mb-4">Преимущества Trade-in</h3>
                        <ul class="space-y-3 text-white">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                <span>Быстрая сделка за 7-14 дней</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                <span>Юридическое сопровождение включено</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                <span>Рыночная оценка квартиры</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-sm hover:shadow-lg transition text-center cursor-pointer transform hover:-translate-y-1" data-expand-card>
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Ищете квартиру побольше</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Старая квартира мала? Обменяем на просторную с учётом ваших потребностей</p>
                <div class="card-expanded-content">
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-700 mb-3">Что входит в услугу:</p>
                        <ul class="space-y-2 text-left text-sm text-gray-600">
                            <li>• Оценка текущей квартиры</li>
                            <li>• Подбор нового жилья</li>
                            <li>• Помощь с ипотекой</li>
                            <li>• Оформление документов</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-sm hover:shadow-lg transition text-center cursor-pointer transform hover:-translate-y-1" data-expand-card>
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Переезжаете в другой район или город</h3>
                <p class="text-gray-600 text-sm leading-relaxed">С Trade-in от Самолёт можно продать жильё в одном городе и приобрести в другом</p>
                <div class="card-expanded-content">
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-700 mb-3">Доступные города:</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Астана</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Алматы</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Шымкент</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Караганда</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-sm hover:shadow-lg transition text-center cursor-pointer transform hover:-translate-y-1" data-expand-card>
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Инвестируете в недвижимость</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Получите профессиональную консультацию по инвестиционной стратегии</p>
                <div class="card-expanded-content">
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-700 mb-3">Инвестиционные возможности:</p>
                        <ul class="space-y-2 text-left text-sm text-gray-600">
                            <li>• Покупка на стадии строительства</li>
                            <li>• Анализ доходности объектов</li>
                            <li>• Консультации по рынку</li>
                            <li>• Помощь с документами</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-sm hover:shadow-lg transition text-center cursor-pointer transform hover:-translate-y-1" data-expand-card>
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Думаете обновить свою квартиру на офис</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Обменяйте жилую недвижимость на коммерческую для вашего бизнеса</p>
                <div class="card-expanded-content">
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-700 mb-3">Варианты коммерческой недвижимости:</p>
                        <ul class="space-y-2 text-left text-sm text-gray-600">
                            <li>• Офисные помещения в БЦ</li>
                            <li>• Торговые площади</li>
                            <li>• Коворкинг-пространства</li>
                            <li>• Помощь с перепланировкой</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-sm hover:shadow-lg transition text-center cursor-pointer transform hover:-translate-y-1" data-expand-card>
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Планируете повысить ликвидность на офис</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Обменяйте квартиру на объект с более высокой доходностью</p>
                <div class="card-expanded-content">
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-700 mb-3">Расчёт доходности:</p>
                        <div class="space-y-2 text-left text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Средняя доходность жилья:</span>
                                <span class="font-semibold text-gray-900">5-7%</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Доходность коммерции:</span>
                                <span class="font-semibold text-blue-600">8-12%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Trade-in Section -->

<!-- Calculator Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">
            Оцените стоимость своей квартиры за пару минут
        </h2>
        <p class="text-gray-600 mb-8 max-w-3xl">
            Сделаем расчёт с учётом текущего положения объекта, планировки и состояния. 
            Учитываем инфраструктуру района и динамику цен рынка. Точность прогноза до 96%.
        </p>

        <div class="bg-gray-50 rounded-3xl p-8 md:p-12 max-w-4xl">
            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Количество комнат</label>
                    <div class="relative">
                        <select class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl text-gray-900 font-medium focus:outline-none focus:ring-2 focus:ring-blue-600 appearance-none cursor-pointer">
                            <option>1-комнатная</option>
                            <option>2-комнатная</option>
                            <option selected>3-комнатная</option>
                            <option>4-комнатная</option>
                            <option>Студия</option>
                        </select>
                        <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Площадь, м²</label>
                    <div class="relative">
                        <input type="number" value="65" class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl text-gray-900 font-medium focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Район</label>
                    <div class="relative">
                        <select class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl text-gray-900 font-medium focus:outline-none focus:ring-2 focus:ring-blue-600 appearance-none cursor-pointer">
                            <option>Алматинский</option>
                            <option selected>Есильский</option>
                            <option>Сарыаркинский</option>
                            <option>Байконурский</option>
                        </select>
                        <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between mb-8 pb-6 border-b border-gray-200">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Примерная стоимость</p>
                    <p class="text-4xl font-bold text-gray-900">28,6 млн ₸</p>
                </div>
                <div class="text-right">
                    <p class="text-sm text-gray-600 mb-1">Старая</p>
                    <div class="flex items-center space-x-3">
                        <button class="w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-xl hover:border-blue-600 transition">1</button>
                        <button class="w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-xl hover:border-blue-600 transition">2</button>
                        <button class="w-10 h-10 flex items-center justify-center border-2 border-blue-600 bg-blue-50 rounded-xl font-semibold text-blue-600">3</button>
                        <button class="w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-xl hover:border-blue-600 transition">4</button>
                        <button class="w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-xl hover:border-blue-600 transition">></button>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Выберите этаж</label>
                    <div class="relative">
                        <select class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl text-gray-900 font-medium focus:outline-none focus:ring-2 focus:ring-blue-600 appearance-none cursor-pointer">
                            <option>1 этаж</option>
                            <option selected>5 этаж</option>
                            <option>10 этаж</option>
                            <option>Последний</option>
                        </select>
                        <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Выберите тип</label>
                    <div class="relative">
                        <select class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl text-gray-900 font-medium focus:outline-none focus:ring-2 focus:ring-blue-600 appearance-none cursor-pointer">
                            <option>Вторичное жильё</option>
                            <option selected>Новостройка</option>
                            <option>Элитное жильё</option>
                        </select>
                        <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <a href="#contacts" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-full hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                    Получить точную оценку
                </a>
        </div>
    </div>
</section>
<!-- /Calculator Section -->

<!-- Programs Section -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">
            Доступные программы Trade-in
        </h2>

        <div class="space-y-6">
            <div class="grid md:grid-cols-2 gap-8 items-center bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition">
                <div class="p-8 md:p-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Быстрый выкуп со скидкой на новую</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Выкупаем вашу квартиру и предоставляем скидку до 8% на новую квартиру в наших ЖК. Срок — от 7 рабочих дней. 
                        Профессиональная оценка имущества, юридическое сопровождение и быстрое оформление всех документов.
                    </p>
                    <a href="./page2.php" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition">
                        Узнать подробнее
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="relative h-80 md:h-full">
                    <img src="img/_________________________________________1763961408665.jpg?height=600&width=800" 
                         alt="Семья переезжает в новую квартиру" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 to-transparent md:hidden"></div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition">
                <div class="relative h-80 md:h-full order-2 md:order-1">
                    <img src="img/_________________________________________1763961408665.jpg?height=600&width=800" 
                         alt="Продажа квартиры по рыночной цене" 
                         class="w-full h-full object-cover">
                </div>
                <div class="p-8 md:p-12 order-1 md:order-2">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Продажа по рыночной без спешки</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Продаём вашу квартиру по рыночной стоимости без спешки через наших риелторов. 
                        Помогаем найти покупателя с максимальной выгодой для вас. Полный комплекс услуг 
                        по оформлению документации и проведению сделки. Прозрачные условия, оплата после продажи.
                    </p>
                    <a href="./page2.php" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition">
                        Узнать подробнее
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition">
                <div class="p-8 md:p-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Авто в счёт новой квартиры</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Продаём ваш автомобиль и засчитываем стоимость в оплату за новую квартиру. 
                        Работаем с любыми марками и моделями авто. Профессиональная оценка автомобиля, 
                        помощь с документами и быстрое оформление. Прозрачные условия сделки без скрытых комиссий.
                    </p>
                    <a href="./page2.php" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition">
                        Узнать подробнее
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="relative h-80 md:h-full">
                    <img src="img/_________________________________________1763961408665.jpg?height=600&width=800" 
                         alt="Обмен автомобиля на квартиру" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Programs Section -->

<!-- Benefits Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">
            Преимущества Trade-in в Homify Studio KZ
        </h2>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-3xl shadow-sm hover:shadow-lg transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-600 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Экономия времени</h3>
                <p class="text-gray-600 leading-relaxed">
                    Комплексный подход сокращает время поиска, продажи и покупки квартиры. Весь цикл — от 7 до 14 дней.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-3xl shadow-sm hover:shadow-lg transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-600 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Выгодные условия</h3>
                <p class="text-gray-600 leading-relaxed">
                    Скидки до 8% на новую квартиру при обмене. Специальные ипотечные программы с минимальной ставкой.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-3xl shadow-sm hover:shadow-lg transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-600 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Гарантия и безопасность</h3>
                <p class="text-gray-600 leading-relaxed">
                    Полное юридическое сопровождение сделки. Проверяем документы и историю каждой квартиры.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-3xl shadow-sm hover:shadow-lg transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-600 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Комфорт ожидания</h3>
                <p class="text-gray-600 leading-relaxed">
                    Можете жить в старой квартире до получения ключей от новой. Без лишних хлопот с переездом.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-3xl shadow-sm hover:shadow-lg transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-600 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Персональный менеджер</h3>
                <p class="text-gray-600 leading-relaxed">
                    Опытный специалист сопровождает сделку от начала до конца. Помогает на каждом этапе.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-3xl shadow-sm hover:shadow-lg transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-600 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Точный расчёт</h3>
                <p class="text-gray-600 leading-relaxed">
                    Профессиональная оценка недвижимости с учётом всех факторов. Прозрачные расчёты без скрытых комиссий.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-3xl shadow-sm hover:shadow-lg transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-600 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Гибкие условия</h3>
                <p class="text-gray-600 leading-relaxed">
                    Индивидуальные решения для каждого клиента. Подберём оптимальный вариант под ваши потребности.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-3xl shadow-sm hover:shadow-lg transition cursor-pointer transform hover:-translate-y-1">
                <div class="bg-blue-600 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Быстрое решение</h3>
                <p class="text-gray-600 leading-relaxed">
                    Оперативное рассмотрение заявки и принятие решения. Первый ответ — в течение 24 часов.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /Benefits Section -->



<!-- Team Section -->
<section id="team" class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Наша команда
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Профессионалы с многолетним опытом в создании комфортных пространств
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-gray-50 rounded-3xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Айгерим Касым</h3>
                    <p class="text-blue-600 font-semibold mb-3">Главный дизайнер</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Более 8 лет опыта в дизайне жилых пространств. Создаёт уникальные интерьерные концепции.
                    </p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-3xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Нурлан Тулеген</h3>
                    <p class="text-blue-600 font-semibold mb-3">Архитектор-планировщик</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Специалист по перепланировкам и оптимизации пространства. Согласование документации.
                    </p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-3xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Марина Сейдахмет</h3>
                    <p class="text-blue-600 font-semibold mb-3">Менеджер проектов</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Координирует этапы реализации, контролирует сроки и бюджет. Ваш главный контакт.
                    </p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-3xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Руслан Амантаев</h3>
                    <p class="text-blue-600 font-semibold mb-3">Технический директор</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Контролирует качество работ, координирует подрядчиков. Гарантия соблюдения стандартов.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Team Section -->

<!-- Contacts Section -->
<section id="contacts" class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Свяжитесь с нами
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Онлайн-консультации и разработка проектов обновления вашего жилья
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-sm">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Оставьте заявку</h3>
                
                <form id="contactForm" action="submit.php" method="POST" novalidate>
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-semibold mb-3">Ваше имя *</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            required
                            class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl focus:border-blue-600 focus:outline-none transition">
                    </div>

                    <div class="mb-6">
                        <label for="phone" class="block text-gray-700 font-semibold mb-3">Телефон</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone"
                            placeholder="+7 (___) ___-__-__"
                            class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl focus:border-blue-600 focus:outline-none transition">
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-semibold mb-3">Email *</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl focus:border-blue-600 focus:outline-none transition">
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-3">Сообщение *</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="5" 
                            required
                            class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl focus:border-blue-600 focus:outline-none transition resize-none"></textarea>
                    </div>

                    <div class="mb-8">
                        <label class="flex items-start cursor-pointer">
                            <input 
                                type="checkbox" 
                                name="policy" 
                                required
                                class="mt-1 mr-3 w-5 h-5 text-blue-600 border-2 border-gray-300 rounded focus:ring-blue-600 cursor-pointer">
                            <span class="text-sm text-gray-600">
                                Я согласен с условиями обработки персональных данных и <a href="./privacypolicy.php" class="text-blue-600 hover:underline">политикой конфиденциальности</a>
                            </span>
                        </label>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 text-white px-8 py-5 rounded-2xl hover:bg-blue-700 transition font-semibold text-lg shadow-lg hover:shadow-xl">
                        Отправить заявку
                    </button>
                </form>
            </div>

            <div class="space-y-6">
                <div class="bg-white p-8 rounded-3xl shadow-sm">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Контактная информация</h3>
                    
                    <div class="space-y-5">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-xl mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 mb-1">Адрес</p>
                                <p class="text-gray-600"><?php echo $contactAddress; ?></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-xl mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 mb-1">Телефон</p>
                                <a href="tel:<?php echo $tel; ?>" class="text-blue-600 hover:underline"><?php echo $tel; ?></a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-xl mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 mb-1">Email</p>
                                <a href="mailto:<?php echo $contactEmail; ?>" class="text-blue-600 hover:underline"><?php echo $contactEmail; ?></a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-xl mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 mb-1">Формат работы</p>
                                <p class="text-gray-600">Онлайн-консультации и встречи по записи</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-2 rounded-3xl shadow-sm overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.446936784785!2d71.4286!3d51.1282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424585a605525605%3A0x4dff4a1f17aefbb3!2z0L_RgC4g0KLRg9GA0LDQvSAxMywg0JDRgdGC0LDQvdCwIDAxMDAwMCwg0JrQsNC30LDRhdGB0YLQsNC9!5e0!3m2!1sru!2s!4v1234567890!5m2!1sru!2s&z=15" 
                        width="100%" 
                        height="280" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-2xl">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Contacts Section -->

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

<!-- Cookie Popup -->
<div id="cookiePopup" class="fixed bottom-6 left-6 right-6 md:left-auto md:right-6 md:max-w-md bg-white rounded-3xl shadow-2xl z-50 transform translate-y-full transition-transform duration-500 border border-gray-100">
    <div class="p-6">
        <div class="flex items-start mb-4">
            <div class="bg-blue-100 p-3 rounded-xl mr-4">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="flex-1">
                <h4 class="font-bold text-gray-900 mb-2">Мы используем cookies</h4>
                <p class="text-sm text-gray-600 mb-4">
                    Мы используем cookies для улучшения работы сайта. Продолжая использовать сайт, вы соглашаетесь с нашей политикой конфиденциальности.
                </p>
                <button id="acceptCookies" class="w-full bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                    Принять
                </button>
            </div>
        </div>
    </div>
</div>
<!-- /Cookie Popup -->

<script src="js/script.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const internalAnchors = document.querySelectorAll('a[href^="#"]');
  internalAnchors.forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = anchor.getAttribute('href');
      const onMainPage = window.location.pathname.endsWith('mainpage.php') || window.location.pathname === '/';
      if (!onMainPage) {
        e.preventDefault();
        window.location.href = 'mainpage.php' + target;
      }
    });
  });

  // FAQ Accordion
  const faqTriggers = document.querySelectorAll('[data-faq-trigger]');
  faqTriggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
      const item = trigger.closest('[data-faq-item]');
      const content = item.querySelector('.faq-content');
      const icon = trigger.querySelector('svg');

      if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(45deg)';
      } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
      }
    });
  });

  // Flip Card Animation
  const flipCardContainers = document.querySelectorAll('[data-flip-card]');
  flipCardContainers.forEach(container => {
    container.addEventListener('click', () => {
      container.classList.toggle('flipped');
    });
  });

  // Expandable Card
  const expandCardButtons = document.querySelectorAll('[data-expand-card]');
  expandCardButtons.forEach(button => {
    button.addEventListener('click', () => {
      const content = button.querySelector('.card-expanded-content');
      content.classList.toggle('hidden');
      button.classList.toggle('expanded');
    });
  });

  // Cookie Popup
  const cookiePopup = document.getElementById('cookiePopup');
  const acceptCookiesBtn = document.getElementById('acceptCookies');

  if (cookiePopup && acceptCookiesBtn) {
    if (localStorage.getItem('cookiesAccepted')) {
      cookiePopup.classList.add('hidden');
    } else {
      cookiePopup.classList.remove('translate-y-full');
      cookiePopup.classList.add('translate-y-0');
    }

    acceptCookiesBtn.addEventListener('click', () => {
      localStorage.setItem('cookiesAccepted', 'true');
      cookiePopup.classList.add('translate-y-full');
      cookiePopup.classList.remove('translate-y-0');
      cookiePopup.classList.add('hidden');
    });
  }

  // Mobile Menu Toggle
  const burgerBtn = document.getElementById('burgerBtn');
  const mobileMenu = document.getElementById('mobileMenu');

  if (burgerBtn && mobileMenu) {
    burgerBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }
});
</script>

</body>
</html>
