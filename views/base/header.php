<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="/" class="logo">
                    <img src="<?= $logo; ?>" alt="logo">
                </a>
            </div>
            <div class="col-auto px-2 px-sm-3">
                <ul class="contacts-list d-none d-lg-flex">
                    <li>
                        <a href="tel:<?= phone_link($phone1); ?>">
                            <?= $phone1; ?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?= phone_link($phone2); ?>">
                            <?= $phone2; ?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?= phone_link($phone3); ?>">
                            <?= $phone3; ?>
                        </a>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary d-inline-flex open-sidebar d-lg-none">
                    Заказать воду
                </a>
            </div>
        </div>
    </div>
</header>

<aside id="app-sidebar">
    <div class="close-sidebar d-lg-none">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="sidebar-item">
        <h3 class="sidebar-item__title">
            <?= $sidebar['title']; ?>
        </h3>
        <h4 class="sidebar-item__subtitle">
            <?= $sidebar['subtitle']; ?>
        </h4>
        <form>
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name">
                        <svg width="15" height="15">
                            <use xlink:href="#user-icon"></use>
                        </svg>
                        Ваше имя
                    </label>
                    <input type="text" id="user-name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-phone">
                        <svg width="15" height="15">
                            <use xlink:href="#phone-icon"></use>
                        </svg>
                        Номер вашего телефона
                    </label>
                    <input type="tel" id="user-phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-delivery">
                        <svg width="15" height="15">
                            <use xlink:href="#delivery-icon"></use>
                        </svg>
                        Адрес доставки
                    </label>
                    <input type="text" id="user-delivery" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-bottle">
                        <svg width="15" height="15">
                            <use xlink:href="#bottle-icon"></use>
                        </svg>
                        Количество бутылей
                    </label>
                    <input type="text" id="user-bottle" class="form-control" mask="+{38} (000) 000-00-00">
                </div>
                <div class="form-group">
                    <label for="user-message">
                        <svg width="15" height="15">
                            <use xlink:href="#message-icon"></use>
                        </svg>
                        Комментарий
                    </label>
                    <textarea id="user-message" cols="30" rows="2" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary w-100">
                    Заказать воду
                </button>
            </div>
        </form>
    </div>
</aside>

<!-- Main -->
<main>
