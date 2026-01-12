<?php
/* PRIVACY POLICY — новая версия в стиле Самолёт (светлый UI, карточки, крупные отступы)
 * ТЕКСТ 100% ОСТАЁТСЯ ТАКИМ ЖЕ, КАК У ТЕБЯ!
 */
require_once './extract_sections.php';
require_once __DIR__ . '/config/config.php';

$targetFile = file_exists('w.php') ? 'w.php' : '';
setlocale(LC_TIME, 'ru_RU.UTF-8', 'rus_RUS.UTF-8', 'Russian_Russia.1251');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Политика конфиденциальности - <?= htmlspecialchars($siteName) ?></title>

<meta name="description"
      content="Политика конфиденциальности <?= htmlspecialchars($siteName) ?>. Узнайте, как мы собираем, используем и защищаем ваши данные.">

<link rel="icon" href="./fav.ico" type="image/x-icon">
<script src="https://cdn.tailwindcss.com"></script>

<style>
body {
    background: #F6F8FA;
    color: #1A1A1A;
}

/* Карточки */
.card {
    background: #FFFFFF;
    border-radius: 20px;
    border: 1px solid #E3E6EA;
}

/* Основной заголовок */
.page-title {
    font-size: 42px;
    font-weight: 800;
}

/* Номер секции */
.section-num {
    width: 46px;
    height: 46px;
    border-radius: 14px;
    background: #2563EB;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 700;
}

/* Акцентная плашка заголовка */
.section-title {
    font-size: 22px;
    font-weight: 800;
    color: #111;
}

/* Мягкие списки */
.soft-li li {
    padding-left: 1rem;
    border-left: 3px solid #2563EB33;
}
.backbtn:hover {
    background:#EFF4FF;
}
</style>

</head>

<body class="antialiased">

<?php echo extractHeader($targetFile); ?>
<?php echo extractAllPopups($targetFile); ?>

<main class="max-w-4xl mx-auto px-6 pt-10 pb-20">

    <!-- Хлебные крошки / кнопка назад -->
    <div class="mb-8">
        <a href="mainpage.php"
           class="inline-flex items-center gap-2 text-blue-600 font-semibold px-4 py-2 rounded-lg border border-blue-200 backbtn transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
            Вернуться на главную
        </a>
    </div>

    <!-- Заголовок -->
    <h1 class="page-title mb-3">Политика конфиденциальности</h1>
    <p class="text-gray-600 text-lg mb-10">
        Мы ценим ваше доверие и обязуемся защищать ваши личные данные.
    </p>


    <!-- ===================================== -->
    <!-- 1. Введение -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">1</div>
            <div class="section-title">1. Наше обязательство по защите вашей информации</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg">
            В «<?= htmlspecialchars($siteName) ?>» мы глубоко уважаем вашу конфиденциальность.
            Этот документ подробно и прозрачно объясняет, какую информацию мы собираем,
            как мы ее используем и, что самое важное, как мы ее защищаем.
            Мы действуем в строгом соответствии с законодательством о защите данных.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 2. Что мы собираем -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">2</div>
            <div class="section-title">2. Что мы собираем и с какой целью</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-6">
            Мы собираем данные исключительно для того, чтобы сделать наш сервис лучше для вас.
            Вот как это работает:
        </p>

        <ul class="soft-li space-y-4 text-gray-700 leading-relaxed text-lg">
            <li><strong class="text-black">Данные, которые вы нам доверяете.</strong> Ваше имя, email, номер телефона,
                оставленные в формах.
                <strong class="text-black">Цель:</strong> Чтобы мы могли ответить на ваш запрос, связаться с вами
                и предоставить услугу, которую вы ждете.</li>

            <li><strong class="text-black">Техническая информация.</strong> IP-адрес, тип браузера, файлы cookie.
                <strong class="text-black">Цель:</strong> Это помогает нам обеспечивать безопасность сайта,
                анализировать его работу и находить точки роста для улучшений.</li>

            <li><strong class="text-black">Данные для аналитики и рекламы.</strong>
                Анонимная статистика поведения на сайте (через <strong>Google Analytics</strong>) и рекламные cookie
                (для <strong>Google Ads</strong>).
                <strong class="text-black">Цель:</strong> Понять интересы нашей аудитории, чтобы предлагать актуальный
                контент и показывать рекламу.</li>
        </ul>
    </section>


    <!-- ===================================== -->
    <!-- 3. Согласие -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">3</div>
            <div class="section-title">3. Ваше согласие</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg">
            Когда вы отправляете нам данные через формы на сайте или продолжаете его использовать
            после ознакомления с уведомлением о cookie, вы даете свое осознанное
            <strong class="text-black">согласие</strong> на сбор и обработку данных в рамках этой Политики.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 4. Передача -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">4</div>
            <div class="section-title">4. С кем мы делимся информацией</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Мы никогда не продаем ваши личные данные. Мы делимся информацией только с проверенными партнерами,
            которые помогают нам работать. К ним относятся:
        </p>

        <ul class="list-disc list-inside space-y-3 text-gray-700 text-lg">
            <li>Сервисы аналитики и рекламы, такие как <strong>Google</strong>.
                Передаваемые им данные анонимизированы и не раскрывают вашу личность.</li>
            <li>Государственные органы в случаях, предусмотренных законом.</li>
        </ul>
    </section>


    <!-- ===================================== -->
    <!-- 5. Управление данными -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">5</div>
            <div class="section-title">5. Вы управляете своими данными</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Вы всегда имеете полный контроль над своей информацией и обладаете правом:
        </p>

        <ul class="list-disc list-inside space-y-3 text-gray-700 text-lg mb-6">
            <li>Получать доступ к своим данным.</li>
            <li>Требовать исправления неточностей.</li>
            <li>Запрашивать удаление («право на забвение»).</li>
            <li>Отозвать согласие в любой момент, связавшись с нами.</li>
        </ul>

        <div class="p-6 rounded-xl border border-blue-300 bg-blue-50">
            <h3 class="font-bold text-xl mb-2">Настройте рекламные предпочтения</h3>
            <p class="text-gray-700 leading-relaxed">
                Вы можете управлять тем, какую информацию Google использует для показа рекламы,
                или отключить персонализацию:
                <a class="text-blue-600 underline" target="_blank"
                   href="https://adssettings.google.com/">Настройки рекламных предпочтений Google</a>.
            </p>
        </div>
    </section>


    <!-- ===================================== -->
    <!-- 6. Контакты -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">6</div>
            <div class="section-title">6. Обновления и как с нами связаться</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-6">
            Мы можем вносить изменения в эту Политику. Последняя версия всегда будет здесь.
            Если у вас возникнут вопросы, свяжитесь с нами:
        </p>

        <ul class="space-y-3 text-gray-800 text-lg">
            <li><strong>Email:</strong> <a href="mailto:<?= htmlspecialchars($contactEmail) ?>"
                                          class="text-blue-600 underline"><?= htmlspecialchars($contactEmail) ?></a></li>
            <li><strong>Телефон:</strong> <a href="tel:<?= preg_replace('/[()\s-]/', '', $tel) ?>"
                                             class="text-blue-600 underline"><?= htmlspecialchars($tel) ?></a></li>
            <li><strong>Адрес:</strong> <?= htmlspecialchars($contactAddress) ?></li>
        </ul>

        <p class="text-gray-500 text-sm mt-6">
            Дата последнего обновления: <?php echo strftime('%d %B %Y г.'); ?>
        </p>
    </section>

</main>

</body>
</html>
