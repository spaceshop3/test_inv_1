<?php
/* COOKIES POLICY — новая версия в стиле Самолёт (светлый UI, карточки, крупные отступы)
 * ТЕКСТ 100% ТВОЙ, БЕЗ СОКРАЩЕНИЙ.
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

<title>Политика Cookie - <?= htmlspecialchars($siteName) ?></title>

<meta name="description"
      content="Политика использования файлов cookie <?= htmlspecialchars($siteName) ?>. Узнайте, как мы используем cookie для улучшения вашего опыта на сайте.">

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

/* Акцентная плашка */
.section-title {
    font-size: 22px;
    font-weight: 800;
    color: #1A1A1A;
}

/* Списки */
.soft-li li {
    padding-left: 1rem;
    border-left: 3px solid #2563EB33;
}

.tbl thead {
    background: #EFF4FF;
    color:#1A1A1A;
}

.tbl tbody tr:nth-child(odd){
    background: #FAFBFD;
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

    <!-- Назад -->
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
    <h1 class="page-title mb-3">Политика в отношении файлов Cookie</h1>
    <p class="text-gray-600 text-lg mb-10">
        Ваше доверие — наш главный приоритет. Здесь мы просто и понятно объясняем, как мы работаем с данными.
    </p>


    <!-- ===================================== -->
    <!-- 1. Что такое Cookie -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8" id="what-are-cookies">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">1</div>
            <div class="section-title">1. Что такое Cookie и почему они важны?</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg">
            Файлы cookie — это крошечные текстовые файлы, которые наш сайт сохраняет на вашем устройстве,
            когда вы его посещаете. Представьте их как цифровую «память» сайта: они помогают ему узнавать вас
            при следующем визите и помнить ваши настройки (например, выбранный язык или товары в корзине).
            Это делает ваше взаимодействие с сайтом быстрым, удобным и персонализированным.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 2. Для чего мы используем cookie -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8" id="how-we-use">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">2</div>
            <div class="section-title">2. Для чего мы используем файлы cookie</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-5">
            Мы используем cookie для трёх главных целей, каждая из которых направлена на улучшение вашего опыта:
        </p>

        <ul class="soft-li space-y-4 text-gray-700 leading-relaxed text-lg">
            <li><strong class="text-black">Стабильная работа сайта.</strong>
                Эти cookie необходимы, чтобы вы могли легко перемещаться по страницам,
                а важные функции, такие как вход в аккаунт, работали без сбоев.</li>

            <li><strong class="text-black">Аналитика и развитие.</strong>
                С помощью анонимных данных от сервисов, таких как <strong>Google Analytics</strong>,
                мы видим, какие разделы сайта вам интересны — и развиваем сервис правильно.</li>

            <li><strong class="text-black">Полезная и актуальная реклама.</strong>
                Cookie от <strong>Google Ads</strong> позволяют показывать релевантную рекламу
                и анализировать эффективность кампаний.</li>
        </ul>
    </section>


    <!-- ===================================== -->
    <!-- 3. Типы cookie -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8" id="cookie-types">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">3</div>
            <div class="section-title">3. Типы используемых cookie</div>
        </div>

        <div class="overflow-x-auto rounded-xl border border-gray-200 tbl">
            <table class="w-full text-left">
                <thead>
                    <tr>
                        <th class="p-4 font-semibold">Категория</th>
                        <th class="p-4 font-semibold">Назначение</th>
                        <th class="p-4 font-semibold whitespace-nowrap">Срок жизни*</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="p-4 font-medium text-black">Обязательные</td>
                        <td class="p-4 text-gray-700">Навигация, безопасность, доступ к личным функциям.</td>
                        <td class="p-4 text-gray-700">Сессия / до 1 года</td>
                    </tr>

                    <tr>
                        <td class="p-4 font-medium text-black">Аналитические</td>
                        <td class="p-4 text-gray-700">Анонимная статистика поведения (например Google Analytics).</td>
                        <td class="p-4 text-gray-700">до 2 лет</td>
                    </tr>

                    <tr>
                        <td class="p-4 font-medium text-black">Рекламные</td>
                        <td class="p-4 text-gray-700">Релевантная реклама на других сайтах (Google Ads).</td>
                        <td class="p-4 text-gray-700">до 18 месяцев</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="text-sm text-gray-500 mt-4">
            * Срок хранения зависит от конкретного cookie и настроек браузера.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 4. Ваше согласие -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8" id="consent">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">4</div>
            <div class="section-title">4. Ваше согласие и право выбора</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg">
            При первом визите сайт запрашивает согласие на аналитические и рекламные cookie.
            Вы можете принять или отказаться. Продолжая пользоваться сайтом, вы принимаете обязательные cookie.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 5. Управление cookie -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8" id="manage-cookies">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">5</div>
            <div class="section-title">5. Как управлять файлами cookie</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Вы можете в любой момент заблокировать или удалить cookie в настройках браузера.
            Отключение обязательных cookie может нарушить работу отдельных функций.
        </p>

        <p class="text-black font-semibold text-lg mb-2">Инструкции для браузеров:</p>

        <ul class="list-disc list-inside space-y-2 text-gray-700 text-lg mb-6">
            <li><a class="text-blue-600 underline" target="_blank"
                   href="https://support.google.com/chrome/answer/95647">Google Chrome</a></li>
            <li><a class="text-blue-600 underline" target="_blank"
                   href="https://support.mozilla.org/ru/kb/kuki-informaciya-kotoruyu-veb-sajty-hranyat-na-vas">Mozilla Firefox</a></li>
            <li><a class="text-blue-600 underline" target="_blank"
                   href="https://support.apple.com/ru-ru/guide/safari/sfri11471/mac">Apple Safari</a></li>
            <li><a class="text-blue-600 underline" target="_blank"
                   href="https://support.microsoft.com/ru-ru/windows/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d">Microsoft Edge</a></li>
        </ul>

        <p class="text-black font-semibold text-lg mb-2">Как отказаться от персонализации рекламы:</p>

        <p class="text-gray-700 leading-relaxed text-lg">
            Используйте <a class="text-blue-600 underline" target="_blank"
            href="https://adssettings.google.com/">Настройки рекламных предпочтений Google</a>.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 6. Актуальность документа -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8" id="updates">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">6</div>
            <div class="section-title">6. Актуальность документа</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Мы можем обновлять Политику, чтобы она оставалась точной и актуальной.
            Рекомендуем периодически проверять страницу.
        </p>

        <p class="text-gray-500 text-sm">
            Дата последнего обновления: <?php echo strftime('%d %B %Y г.'); ?>
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 7. Контакты -->
    <!-- ===================================== -->
    <section class="card p-8" id="contacts">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">7</div>
            <div class="section-title">7. Остались вопросы?</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Если у вас есть вопросы или предложения, свяжитесь с нами:
        </p>

        <ul class="space-y-3 text-gray-800 text-lg">
            <li><strong>Email:</strong>
                <a href="mailto:<?= htmlspecialchars($contactEmail) ?>" class="text-blue-600 underline">
                    <?= htmlspecialchars($contactEmail) ?>
                </a></li>

            <li><strong>Телефон:</strong>
                <a href="tel:<?= preg_replace('/[()\s-]/', '', $tel) ?>" class="text-blue-600 underline">
                    <?= htmlspecialchars($tel) ?>
                </a></li>

            <li><strong>Адрес:</strong> <?= htmlspecialchars($contactAddress) ?></li>
        </ul>

    </section>

</main>

</body>
</html>
