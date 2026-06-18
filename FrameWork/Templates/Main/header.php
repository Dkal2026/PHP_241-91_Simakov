<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<style>
    :root {
        --nav-bg: rgba(15, 23, 42, 0.7); /* Тёмный полупрозрачный фон */
        --accent: #6366f1;
        --text-dark: #f8fafc; /* Теперь это светлый текст для контраста */
        --text-gray: #94a3b8; /* Мягкий серый для второстепенного текста */
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background-color: #0f172a; /* Глубокий тёмный фон */
        /* Градиент на фоне адаптирован под темноту */
        background-image: 
            radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.2) 0px, transparent 50%),
            radial-gradient(at 100% 100%, rgba(168, 85, 247, 0.2) 0px, transparent 50%);
        color: var(--text-dark);
        height: 200vh; /* Чтобы можно было поскроллить */
    }

    /* Контейнер навигации */
    .navbar {
        width: 100%;
        max-width: 1100px;
        background: var(--nav-bg);
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        border: 1px solid rgba(255, 255, 255, 0.1); /* Тонкая светлая граница для glassmorphism */
        border-radius: 24px;
        padding: 12px 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.5);
    }

    /* Логотип */
    .logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-dark);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .logo-dot {
        width: 8px;
        height: 8px;
        background: var(--accent);
        border-radius: 50%;
    }

    /* Ссылки */
    .nav-menu {
        display: flex;
        list-style: none;
        gap: 8px;
    }

    .nav-link {
        text-decoration: none;
        color: var(--text-gray);
        font-size: 0.95rem;
        font-weight: 500;
        padding: 10px 18px;
        border-radius: 14px;
        transition: var(--transition);
    }

    .nav-link:hover {
        color: var(--accent);
        background: rgba(99, 102, 241, 0.15);
    }

    .nav-link.active {
        color: var(--accent);
        background: rgba(99, 102, 241, 0.2);
    }

    /* Кнопка действия */
    .cta-button {
        background: #ffffff;
        color: #0f172a; /* Инверсия: темный текст на белой кнопке */
        text-decoration: none;
        padding: 12px 24px;
        border-radius: 16px;
        font-size: 0.9rem;
        font-weight: 600;
        transition: var(--transition);
        border: 1px solid transparent;
    }

    .cta-button:hover {
        background: var(--accent);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px -6px rgba(99, 102, 241, 0.5);
    }

    .navbar:hover {
        border-color: rgba(99, 102, 241, 0.4);
    }

    /* ТАБЛИЦА */
    .article-table-container {
        overflow-x: auto;
        margin: 25px 0;
    }

    .article-table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        min-width: 600px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        background-color: #1e293b; /* Тёмный фон таблицы */
    }

    .my-button {
    background-color: rgb(34, 42, 61);
    border: 3px solid rgb(68, 66, 66);
    color: rgb(31, 216, 147);
    padding: 3px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 17px;
    margin: 4px 2px;
    cursor: pointer;
    }
    .dancing-script-uniquifier{
        font-family: "Dancing Script", cursive;
        font-optical-sizing: auto;
        font-weight: weight;
        font-style: normal;
    }

    .article-table thead tr {
        background-color: #0d9488; /* Более мягкий изумрудный для тёмной темы */
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .article-table th,
    .article-table td {
        padding: 12px 15px;
        border: 1px solid #334155; /* Тёмные границы */
    }

    .article-table tbody tr {
        border-bottom: 1px solid #334155;
    }

    /* Чередование цветов строк */
    .article-table tbody tr:nth-of-type(even) {
        background-color: #1e293b;
    }
    .article-table tbody tr:nth-of-type(odd) {
        background-color: #172554; /* Лёгкий синеватый оттенок для зебры */
    }
    /* Последняя строка с акцентом */
        .article-table tbody tr:last-of-type {
            border-bottom: 2px solid #0d9488;
        }

        /* Подсветка при наведении */
        .article-table tbody tr:hover {
            background-color: #334155;
            cursor: default;
        }

        /* ФОРМА */
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-gray);
            font-size: 14px;
            font-weight: 500;
            font-family: sans-serif;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #334155;
            background-color: #1e293b; /* Тёмное поле ввода */
            border-radius: 8px;
            font-size: 15px;
            color: #f8fafc;
            outline: none;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        /* Эффект при клике на поле */
        .form-group input:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
        }

        /* Чекбокс (Согласие) */
        .form-checkbox {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            cursor: pointer;
            user-select: none;
            font-family: sans-serif;
        }

        .form-checkbox input {
            margin-right: 10px;
            width: 16px;
            height: 16px;
            accent-color: #6366f1;
            cursor: pointer;
        }

        .form-checkbox span {
            font-size: 13px;
            color: var(--text-gray);
        }

        .form-checkbox a {
            color: #818cf8; /* Чуть более светлая ссылка для читаемости */
            text-decoration: none;
        }

        .form-checkbox a:hover {
            text-decoration: underline;
        }

        /* Кнопка отправки */
        .submit-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            font-family: sans-serif;
            cursor: pointer;
            transition: transform 0.1s ease, opacity 0.3s ease;
        }

        .submit-btn:hover {
            opacity: 0.9;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4);
        }

        .submit-btn:active {
            transform: scale(0.98);
        }
</style>
<body>

    <header class="header">
        <nav class="navbar">
            <a href="#" class="logo">
                <div class="logo-dot"></div>
                Test<span style="color: var(--accent);">Lab</span>
            </a>
            <ul class="nav-menu">
                <?php if($user != null):?>
                    <li><a href="\Simakov\FrameWork\www\index.php" class="nav-link active">Главная</a></li>
                    <li><a href="/Simakov/FrameWork/www/www/hello/vlad" class="nav-link">Hello.php</a></li>
                    <li><a href="/Simakov/FrameWork/www/bye/user" class="nav-link">bye.php</a></li>
                    <li><a href="/Simakov/FrameWork/www/article/create" class="nav-link">Создать запись</a></li>
                    <li><a href="/Simakov/FrameWork/www/users/logout" class="nav-link">Выйти</a></li>
                <?php endif;?>
                <?php if($user === null):?>
                    <li><a href="/Simakov/FrameWork/www/users/register" class="nav-link">Зарегестрироваться</a></li>
                    <li><a href="/Simakov/FrameWork/www/users/login" class="nav-link">Войти</a></li>
                <?php endif;?>
                <li><?=!empty($user) ? 'ПРивет '.$user->getNickname() : 'Войдите на сайт' ?></li>
            </ul>
        </nav>
    </header>
    <main>