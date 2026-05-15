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
            --nav-bg: rgba(255, 255, 255, 0.7);
            --accent: #6366f1;
            --text-dark: #0f172a;
            --text-gray: #64748b;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            /* Градиент на фоне, чтобы увидеть эффект прозрачности меню */
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(168, 85, 247, 0.15) 0px, transparent 50%);
            height: 200vh; /* Чтобы можно было поскроллить */
        }

        /* Контейнер навигации */
        /* .header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            z-index: 1000;
        } */
        /*.main{
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 1000000px;
            z-index: 1000;
        }*/

        .navbar {
            width: 100%;
            max-width: 1100px;
            background: var(--nav-bg);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            padding: 12px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.05);
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
            background: rgba(99, 102, 241, 0.08);
        }

        .nav-link.active {
            color: var(--accent);
            background: rgba(99, 102, 241, 0.12);
        }

        /* Кнопка действия */
        .cta-button {
            background: var(--text-dark);
            color: white;
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
            transform: translateY(-2px);
            box-shadow: 0 8px 20px -6px rgba(99, 102, 241, 0.5);
        }

        /* Эффект при скролле (можно добавить через JS, но здесь сделаем статично красиво) */
        .navbar:hover {
            border-color: rgba(99, 102, 241, 0.2);
        }

        .article-table-container {
        overflow-x: auto; /* Прокрутка на мобильных */
        margin: 25px 0;
    }

    .article-table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        min-width: 600px; /* Чтобы колонки не слипались */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .article-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .article-table th,
    .article-table td {
        padding: 12px 15px;
        border: 1px solid #dddddd;
    }

    .article-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    /* Чередование цветов строк */
    .article-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    /* Последняя строка с акцентом */
    .article-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    /* Подсветка при наведении */
    .article-table tbody tr:hover {
        background-color: #f1f1f1;
        cursor: default;
    }
    /* Группы полей ввода */
.form-group {
    margin-bottom: 20px;
    position: relative;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #666666;
    font-size: 14px;
    font-weight: 500;
    font-family: sans-serif;
}

.form-group input {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    font-size: 15px;
    color: #333333;
    outline: none;
    box-sizing: border-box;
    transition: all 0.3s ease;
}

/* Эффект при клике на поле */
.form-group input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.15);
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
    accent-color: #667eea;
    cursor: pointer;
}

.form-checkbox span {
    font-size: 13px;
    color: #666666;
}

.form-checkbox a {
    color: #667eea;
    text-decoration: none;
}

.form-checkbox a:hover {
    text-decoration: underline;
}

/* Кнопка отправки */
.submit-btn {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
    opacity: 0.95;
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
                <li><a href="\Simakov\FrameWork\www\index.php" class="nav-link active">Главная</a></li>
                <li><a href="../www/hello/vlad" class="nav-link">Hello.php</a></li>
                <li><a href="../www/bye/user" class="nav-link">bye.php</a></li>
                <li><a href="article/create" class="nav-link">Зарегистрироваться</a></li>
            </ul>

            <div class="nav-actions">
                <a href="#" class="cta-button">Начать проект</a>
            </div>


        </nav>
    </header>
    <main>