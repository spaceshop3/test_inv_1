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
    <title><?php echo $siteName; ?> - Бизнес-модель</title>
    <meta name="description" content="Наша бизнес-модель - комплексный подход к обновлению жилых пространств">
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

<!-- Hero Business Model -->
<section class="py-16 bg-gradient-to-b from-blue-600 to-blue-700 text-white">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Бизнес-модель</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
            Добро пожаловать на страницу, посвящённую нашей бизнес-модели. Здесь мы подробно расскажем, как организована наша деятельность, какие ключевые направления и ценности лежат в основе нашего бизнеса.
        </p>
    </div>
</section>
<!-- /Hero Business Model -->

<!-- Business Model Content -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-5xl">
        
        <!-- Section I -->
        <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">I</div>
                <h2 class="text-3xl font-bold text-gray-900">Основные компоненты бизнес-модели</h2>
            </div>
            <p class="text-gray-700 leading-relaxed mb-6">
                Наша бизнес-модель строится на трёх ключевых аспектах, которые обеспечивают высокое качество услуг и долгосрочное партнерство с клиентами:
            </p>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 font-bold mr-4 flex-shrink-0 mt-1">1</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Предоставление качественного сервиса</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Мы гарантируем высокий уровень исполнения каждого проекта благодаря команде опытных специалистов, использованию проверенных материалов и современных технологий проектирования интерьеров.
                        </p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 font-bold mr-4 flex-shrink-0 mt-1">2</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Персонализированный подход к клиентам</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Каждый проект уникален. Мы внимательно изучаем потребности клиента, его образ жизни и предпочтения, чтобы создать пространство, которое действительно отражает индивидуальность заказчика.
                        </p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 font-bold mr-4 flex-shrink-0 mt-1">3</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Использование современных технологий и аналитики</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Применение 3D-визуализации, инновационных материалов и аналитических инструментов позволяет нам оптимизировать процессы, снижать сроки реализации и повышать эффективность каждого этапа работы.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section II -->
        <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">II</div>
                <h2 class="text-3xl font-bold text-gray-900">Ценностное предложение</h2>
            </div>
            <p class="text-gray-700 leading-relaxed mb-4">
                Мы предлагаем уникальные решения по обновлению и трансформации жилых пространств, которые сочетают функциональность, эстетику и комфорт. Наши клиенты получают:
            </p>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Комплексный подход — от замера и дизайн-проекта до финального ремонта под ключ</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Прозрачное ценообразование и гарантии качества выполненных работ</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Поддержку на всех этапах — от идеи до реализации и послепродажного обслуживания</span>
                </li>
            </ul>
        </div>

        <!-- Section III -->
        <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">III</div>
                <h2 class="text-3xl font-bold text-gray-900">Клиентские сегменты</h2>
            </div>
            <p class="text-gray-700 leading-relaxed mb-6">
                Мы работаем с различными группами клиентов, включая:
            </p>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-blue-50 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Владельцы квартир</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Люди, желающие обновить свое жилое пространство, улучшить планировку или создать современный интерьер, отвечающий их потребностям и стилю жизни.
                    </p>
                </div>
                <div class="bg-blue-50 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Инвесторы и застройщики</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Профессионалы рынка недвижимости, которым требуется качественная отделка объектов для повышения их рыночной привлекательности и стоимости.
                    </p>
                </div>
                <div class="bg-blue-50 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Молодые семьи</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Семьи, приобретающие первое жилье или расширяющие свое пространство, нуждающиеся в функциональных и бюджетных решениях.
                    </p>
                </div>
                <div class="bg-blue-50 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Корпоративные клиенты</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Компании, стремящиеся создать комфортные офисные пространства или обустроить апартаменты для сотрудников с учетом современных стандартов.
                    </p>
                </div>
            </div>
        </div>

        <!-- Section IV -->
        <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">IV</div>
                <h2 class="text-3xl font-bold text-gray-900">Каналы коммуникации и взаимодействия</h2>
            </div>
            <p class="text-gray-700 leading-relaxed mb-6">
                Для взаимодействия с клиентами мы используем разнообразные каналы, обеспечивая удобство и доступность на каждом этапе сотрудничества:
            </p>
            <div class="space-y-4">
                <div class="flex items-start bg-gray-50 rounded-xl p-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-1">Онлайн-платформа</h3>
                        <p class="text-gray-600 text-sm">Наш сайт предоставляет доступ к портфолио, обучающим материалам, калькулятору стоимости и форме обратной связи для удобной коммуникации.</p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 rounded-xl p-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-1">Персональные консультации и вебинары</h3>
                        <p class="text-gray-600 text-sm">Индивидуальные встречи с дизайнерами и менеджерами проектов, а также образовательные вебинары по дизайну интерьера и выбору материалов.</p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 rounded-xl p-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-1">Социальные сети и рассылки</h3>
                        <p class="text-gray-600 text-sm">Регулярные публикации новых проектов, советов по обустройству дома и специальных предложений через соцсети и email-рассылки для поддержания контакта с клиентами.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section V -->
        <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">V</div>
                <h2 class="text-3xl font-bold text-gray-900">Источники дохода</h2>
            </div>
            <p class="text-gray-700 leading-relaxed mb-4">
                Наш доход формируется за счёт предоставления консультационных услуг, обучающих программ и эксклюзивных материалов по организации комфортного пространства и эргономике. Основные направления включают:
            </p>
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-6">
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                        <span>Дизайн-проекты интерьеров с полной документацией и 3D-визуализацией</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                        <span>Ремонтные работы под ключ с гарантией качества</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                        <span>Консультационные услуги по выбору материалов и оптимизации планировок</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                        <span>Авторский надзор и сопровождение проектов на всех этапах реализации</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Section VI -->
        <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">VI</div>
                <h2 class="text-3xl font-bold text-gray-900">Ключевые партнеры</h2>
            </div>
            <p class="text-gray-700 leading-relaxed mb-6">
                Мы сотрудничаем с профессионалами и надежными поставщиками для обеспечения высокого качества услуг:
            </p>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="border-2 border-blue-100 rounded-xl p-5 text-center hover:border-blue-600 transition">
                    <h4 class="font-semibold text-gray-900 mb-2">Производители материалов</h4>
                    <p class="text-gray-600 text-sm">Ведущие бренды отделочных материалов и мебели</p>
                </div>
                <div class="border-2 border-blue-100 rounded-xl p-5 text-center hover:border-blue-600 transition">
                    <h4 class="font-semibold text-gray-900 mb-2">Строительные бригады</h4>
                    <p class="text-gray-600 text-sm">Проверенные подрядчики с многолетним опытом</p>
                </div>
                <div class="border-2 border-blue-100 rounded-xl p-5 text-center hover:border-blue-600 transition">
                    <h4 class="font-semibold text-gray-900 mb-2">Дизайнеры и архитекторы</h4>
                    <p class="text-gray-600 text-sm">Креативная команда профессионалов</p>
                </div>
            </div>
        </div>

        <!-- Section VII -->
        <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">VII</div>
                <h2 class="text-3xl font-bold text-gray-900">Основные ресурсы и деятельность</h2>
            </div>
            <p class="text-gray-700 leading-relaxed mb-6">
                Наши основные ресурсы включают команду экспертов, обучающие материалы, аналитические инструменты и техническую платформу для взаимодействия с клиентами. Мы постоянно инвестируем в развитие:
            </p>
            <div class="space-y-3">
                <div class="flex items-center bg-blue-50 rounded-xl p-4">
                    <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span class="text-gray-700">Квалифицированная команда дизайнеров, менеджеров и технических специалистов</span>
                </div>
                <div class="flex items-center bg-blue-50 rounded-xl p-4">
                    <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    <span class="text-gray-700">Современные программы для 3D-моделирования и визуализации проектов</span>
                </div>
                <div class="flex items-center bg-blue-50 rounded-xl p-4">
                    <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span class="text-gray-700">Аналитические инструменты для мониторинга эффективности и контроля качества</span>
                </div>
            </div>
        </div>

        <!-- Section VIII -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl shadow-lg p-8 md:p-12 text-white">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-blue-600 font-bold text-xl mr-4">VIII</div>
                <h2 class="text-3xl font-bold">Контактная информация</h2>
            </div>
            <p class="text-blue-100 leading-relaxed mb-6">
                Если у вас есть вопросы по нашей бизнес-модели или вы хотите обсудить возможности сотрудничества, свяжитесь с нами:
            </p>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                    <div class="flex items-center mb-3">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="font-semibold">Email</span>
                    </div>
                    <a href="mailto:<?php echo $contactEmail; ?>" class="text-white hover:text-blue-200 transition break-all"><?php echo $contactEmail; ?></a>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                    <div class="flex items-center mb-3">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="font-semibold">Телефон</span>
                    </div>
                    <a href="tel:<?php echo $tel; ?>" class="text-white hover:text-blue-200 transition"><?php echo $tel; ?></a>
                </div>
            </div>
            <div class="mt-8 text-center">
                <a href="./contacts.php" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-50 transition">
                    Связаться с нами
                </a>
            </div>
        </div>

    </div>
</section>
<!-- /Business Model Content -->

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
