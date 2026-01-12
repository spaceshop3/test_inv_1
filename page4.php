<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проекты - <?php echo $siteName; ?></title>
    <meta name="description" content="Наши текущие и завершённые проекты по обновлению жилых пространств">
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
            <a href="./page3.php" class="text-gray-700 hover:text-blue-600 transition font-medium">Материалы</a>
            <a href="./page4.php" class="text-blue-600 hover:text-blue-700 transition font-medium">Проекты</a>
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
        <a href="./page4.php" class="block text-blue-600 hover:text-blue-700 transition font-medium">Проекты</a>
        <a href="./contacts.php" class="block text-gray-700 hover:text-blue-600 transition font-medium">Контакты</a>
    </div>
</header>
<!-- /Header -->

<!-- Projects Hero -->
<section class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Наши <span class="text-blue-600">текущие проекты</span>
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed">
                Прозрачность и открытость — наши главные принципы. Следите за ходом реализации проектов 
                и смотрите, как преображаются жилые пространства наших клиентов.
            </p>
        </div>
    </div>
</section>
<!-- /Projects Hero -->

<!-- Active Projects -->
<section class="py-12 md:py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Проекты в работе
            </h2>
            <p class="text-gray-600">
                Сейчас мы работаем над обновлением 12 квартир в различных районах Астаны
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition">
                <div class="relative">
                    <img src="img/modern_apartment_renovation_in_progress__1763961435605.jpg?text=Project+Alpha&font=lato" 
                         alt="Modern apartment renovation in progress with new flooring installation" 
                         class="w-full h-64 object-cover">
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                        В работе
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm text-gray-500">ЖК Северное Сияние</span>
                        <span class="text-sm font-semibold text-blue-600">65% готово</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Двухкомнатная квартира 68 м²</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Комплексный ремонт с перепланировкой. Объединение кухни с гостиной, 
                        замена всех коммуникаций, современная отделка.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="text-sm">
                            <span class="text-gray-500">Срок сдачи:</span>
                            <span class="font-semibold text-gray-900 ml-1">15 марта</span>
                        </div>
                        <a href="./contacts.php" class="text-blue-600 font-semibold text-sm hover:text-blue-700 transition">
                            Подробнее →
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition">
                <div class="relative">
                    <img src="img/luxury_bathroom_renovation_with_marble_t_1763961439233.jpg?text=Project+Beta&font=lato" 
                         alt="Luxury bathroom renovation with marble tiles and modern fixtures" 
                         class="w-full h-64 object-cover">
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                        В работе
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm text-gray-500">ЖК Изумрудный</span>
                        <span class="text-sm font-semibold text-blue-600">40% готово</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Трёхкомнатная квартира 95 м²</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Премиальный ремонт с использованием натуральных материалов. 
                        Мраморная отделка санузлов, паркет из массива дуба.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="text-sm">
                            <span class="text-gray-500">Срок сдачи:</span>
                            <span class="font-semibold text-gray-900 ml-1">28 марта</span>
                        </div>
                        <a href="./contacts.php" class="text-blue-600 font-semibold text-sm hover:text-blue-700 transition">
                            Подробнее →
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition">
                <div class="relative">
                    <img src="img/kitchen_renovation_with_custom_cabinets__1763961441517.jpg?text=Project+Gamma&font=lato" 
                         alt="Kitchen renovation with custom cabinets and integrated appliances" 
                         class="w-full h-64 object-cover">
                    <div class="absolute top-4 right-4 bg-yellow-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                        Начало работ
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm text-gray-500">ЖК Достык</span>
                        <span class="text-sm font-semibold text-blue-600">15% готово</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Однокомнатная квартира 42 м²</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Современный ремонт для молодой семьи. Функциональная планировка, 
                        встроенная мебель, система умного дома.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="text-sm">
                            <span class="text-gray-500">Срок сдачи:</span>
                            <span class="font-semibold text-gray-900 ml-1">10 апреля</span>
                        </div>
                        <a href="./contacts.php" class="text-blue-600 font-semibold text-sm hover:text-blue-700 transition">
                            Подробнее →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Active Projects -->

<!-- Project Process -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Этапы реализации проекта
            </h2>
            <p class="text-gray-600 leading-relaxed">
                Каждый проект проходит строгий контроль качества на всех этапах выполнения работ
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="img/professional_construction_team_working_o_1763961443793.jpg?text=Construction+Process&font=lato" 
                     alt="Professional construction team working on apartment renovation project" 
                     class="w-full h-auto rounded-3xl shadow-2xl">
            </div>

            <div class="space-y-6">
                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-start">
                        <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">1</div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Подготовительный этап</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Демонтаж старых конструкций, вывоз мусора, подготовка помещений к ремонту. 
                                Защита общих зон дома.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-start">
                        <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">2</div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Черновые работы</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Возведение перегородок, прокладка коммуникаций, электрика, сантехника. 
                                Выравнивание стен и полов.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-start">
                        <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">3</div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Чистовая отделка</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Укладка напольных покрытий, окраска стен, монтаж потолков. 
                                Установка дверей и плинтусов.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-start">
                        <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold flex-shrink-0 mr-4">4</div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Финальный этап</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Установка сантехники и светильников, монтаж мебели. 
                                Генеральная уборка и сдача объекта.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Project Process -->

<!-- Statistics -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 text-center">
                Статистика наших проектов
            </h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">12</div>
                    <div class="text-gray-600">Проектов в работе</div>
                </div>
                
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">250+</div>
                    <div class="text-gray-600">Завершённых проектов</div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">98%</div>
                    <div class="text-gray-600">Сдано в срок</div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">4.9/5</div>
                    <div class="text-gray-600">Средняя оценка</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Statistics -->

<!-- Testimonials -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Отзывы наших клиентов
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="bg-gray-50 p-8 rounded-3xl">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    "Отличная работа! Ремонт сделали точно в срок, качество на высоте. 
                    Особенно понравилось, что менеджер был всегда на связи и присылал фотоотчёты."
                </p>
                <div class="flex items-center">
                    <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mr-3">
                        <span class="text-blue-600 font-bold">АК</span>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Алия Касымова</div>
                        <div class="text-sm text-gray-500">ЖК Северное Сияние</div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-8 rounded-3xl">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    "Профессиональный подход на всех этапах. Помогли с выбором материалов, 
                    предложили интересные дизайнерские решения. Результат превзошёл ожидания!"
                </p>
                <div class="flex items-center">
                    <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mr-3">
                        <span class="text-blue-600 font-bold">ДН</span>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Дмитрий Новиков</div>
                        <div class="text-sm text-gray-500">ЖК Изумрудный</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Testimonials -->

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl p-12 md:p-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Хотите начать свой проект?
            </h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                Свяжитесь с нами для бесплатной консультации и расчёта стоимости вашего проекта
            </p>
            <a href="./contacts.php" class="inline-block bg-white text-blue-600 px-10 py-4 rounded-full hover:bg-gray-100 transition font-bold shadow-xl">
                Начать проект
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
