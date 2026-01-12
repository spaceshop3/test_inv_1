<?php
/* TERMS OF SERVICE — новая версия в светлом стиле Самолёт
 * ТЕКСТ ПОЛНОСТЬЮ ОСТАЁТСЯ ТАКИМ, КАК ТЫ ДАЛ.
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

<title>Пользовательское соглашение - <?= htmlspecialchars($siteName) ?></title>

<meta name="description"
      content="Пользовательское соглашение <?= htmlspecialchars($siteName) ?>. Ознакомьтесь с правилами и условиями использования нашего сервиса.">

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

/* Заголовок секции */
.section-title {
    font-size: 22px;
    font-weight: 800;
    color: #111;
}

.backbtn:hover {
    background:#EFF4FF;
}
</style>

</head>

<body class="antialiased">

<?php echo extractHeader($targetFile); ?>
<?php echo extractAllPopups($targetFile); ?>

<main class="max-w-4xl mx-auto px-6 pt-10 pb-24">

    <!-- Кнопка назад -->
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
    <h1 class="page-title mb-3">Пользовательское соглашение</h1>
    <p class="text-gray-600 text-lg mb-10">
        Правила, которые помогают нам работать честно и эффективно.
    </p>


    <!-- ===================================== -->
    <!-- 1. Основные понятия -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">1</div>
            <div class="section-title">1. Основные понятия: договоримся о терминах</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Чтобы мы говорили на одном языке, давайте определим ключевые понятия:
        </p>

        <ul class="space-y-3 text-gray-800 text-lg">
            <li><strong class="text-black">Сервис</strong> — это наш сайт «<?= htmlspecialchars($siteName) ?>» со всем его содержимым и функциями.</li>
            <li><strong class="text-black">Администрация</strong> — это мы, команда, которая управляет Сервисом.</li>
            <li><strong class="text-black">Пользователь</strong> — это вы, любой человек, который пользуется нашим Сервисом.</li>
        </ul>

        <p class="mt-4 text-gray-700 leading-relaxed text-lg">
            Используя наш Сервис, вы автоматически соглашаетесь с правилами, изложенными в этом документе.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 2. Ваши права и обязанности -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">2</div>
            <div class="section-title">2. Ваши права и обязанности</div>
        </div>

        <p class="text-black font-semibold leading-relaxed text-lg mb-4">
            Вы обязуетесь:
        </p>

        <ul class="list-disc list-inside space-y-3 text-gray-700 text-lg leading-relaxed">
            <li>Предоставлять правдивую информацию при регистрации.</li>
            <li>Хранить свои логин и пароль в безопасности и нести за это ответственность.</li>
            <li>Не использовать наш Сервис для незаконных действий: мошенничества, спама, распространения вирусов или любых материалов, разжигающих рознь.</li>
            <li>Не пытаться нарушить работу Сервиса (взламывать, атаковать или искать уязвимости).</li>
            <li>Относиться с уважением к другим пользователям и к нам, Администрации.</li>
        </ul>
    </section>


    <!-- ===================================== -->
    <!-- 3. Авторские права -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">3</div>
            <div class="section-title">3. Авторские права</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg">
            Все материалы на сайте — дизайн, тексты, код, графика — принадлежат нам или другим правообладателям.
            Пожалуйста, не копируйте, не распространяйте и не изменяйте их без нашего письменного разрешения.
            Это важно для защиты интеллектуального труда.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 4. Отказ от гарантий -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">4</div>
            <div class="section-title">4. Отказ от гарантий</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg">
            Мы предоставляем Сервис «как есть». Это значит, что мы не можем гарантировать его идеальную,
            бесперебойную и безошибочную работу, а также полное соответствие вашим ожиданиям.
            Мы не несем ответственности за возможные убытки, которые могут возникнуть при использовании Сервиса.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 5. Прекращение доступа -->
    <!-- ===================================== -->
    <section class="mb-10 card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">5</div>
            <div class="section-title">5. Прекращение доступа к Сервису</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg">
            Если Пользователь нарушает правила этого Соглашения, мы оставляем за собой право приостановить
            или полностью заблокировать его доступ к Сервису без предварительного уведомления.
        </p>
    </section>


    <!-- ===================================== -->
    <!-- 6. Финальные положения -->
    <!-- ===================================== -->
    <section class="card p-8">
        <div class="flex items-start gap-4 mb-4">
            <div class="section-num">6</div>
            <div class="section-title">6. Финальные положения</div>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Мы можем изменять это Соглашение. Новая версия всегда будет опубликована на этой странице
            и вступает в силу с момента публикации.
        </p>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Вопросы, связанные с вашими личными данными, регулирует наша
            <a href="./privacypolicy.php"
               class="text-blue-600 underline font-semibold">Политика конфиденциальности</a>,
            которая является частью этого Соглашения.
        </p>

        <p class="text-gray-700 leading-relaxed text-lg mb-4">
            Мы всегда открыты к диалогу. Если у вас есть вопросы, свяжитесь с нами:
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
        </ul>

        <p class="text-gray-500 text-sm mt-6">
            Дата последнего обновления: <?php echo strftime('%d %B %Y г.'); ?>
        </p>

    </section>

</main>

</body>
</html>
