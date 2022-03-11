<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    use \Bitrix\Main\Page\Asset;

    $APPLICATION->ShowHead();
    ?>
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/common.css");
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="https://stoavtos.ru/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93">
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>

<body>
    <? $APPLICATION->ShowPanel(); ?>
    <div class="container_site">
        <header class="header">
            <button class="header__mobile_btn">
                <svg width="79" height="69" viewBox="0 0 79 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="79" height="69" fill="#47A0ED" />
                    <line x1="14" y1="14.5" x2="64" y2="14.5" stroke="black" />
                    <line x1="14.012" y1="33.5" x2="64.012" y2="33.5" stroke="white" stroke-width="5" />
                    <line x1="14.012" y1="50.5" x2="64.012" y2="50.5" stroke="white" stroke-width="5" />
                    <line x1="14" y1="16.5" x2="64" y2="16.5" stroke="white" stroke-width="5" />
                </svg>
            </button>
            <div class="mobile__header">
                <div class="mobile__header__container">
                    <nav class="nav__mobile">
                        <ul class="navigation__mobile">
                            <li class="nav__item__mobile"><a href="../kredit/index.php" class="nav__item__link__mobile">Кредит</a></li>
                            <li class="nav__item__mobile"><a href="../treyd-in/index.php" class="nav__item__link__mobile">Traid-in</a></li>
                            <li class="nav__item__mobile"><a href="../aktsii/index.php" class="nav__item__link__mobile">Акции</a></li>
                            <li class="nav__item__mobile"><a href="../novosti/index.php" class="nav__item__link__mobile">Новости</a></li>
                            <li class="nav__item__mobile"><a href="../servis/index.php" class="nav__item__link__mobile">Сервис</a></li>
                            <li class="nav__item__mobile"><a href="../otzyvy/index.php" class="nav__item__link__mobile">Отзывы</a></li>
                            <li class="nav__item__mobile"><a href="../o-nas/index.php" class="nav__item__link__mobile">О нас</a></li>
                            <li class="nav__item__mobile"><a href="../kontakty/index.php" class="nav__item__link__mobile">Контакты</a></li>
                        </ul>
                        <div class="mobile__desc">
                            <a href="tel:+7(8846)215-00-07" class="phone__mobile"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/phoneMobile.svg" alt="phone" class="phone__icon">8 (846) 215 00 07</a>
                            <div class="work__detail__mobile">
                                <p class="work__title__mobile">График работы (без выходных)</p>
                                <p class="work__saloon__mobile">Автосалон: пн-вс 09:00-21:00</p>
                                <p class="work__tech__mobile">СТО: пн-вс 08:00-20:00</p>
                            </div>
                        </div>
                    </nav>
                    <button class="header__close__btn">
                        <svg width="58" height="43" viewBox="0 0 58 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="58" height="43" fill="#47A0ED" />
                            <line y1="-2.5" x2="34.7626" y2="-2.5" transform="matrix(0.69484 0.719164 -0.69484 0.719164 15 9)" stroke="white" stroke-width="5" />
                            <line y1="-2.5" x2="34.7512" y2="-2.5" transform="matrix(0.694846 -0.719159 0.694835 0.719169 18.0918 33.9917)" stroke="white" stroke-width="5" />
                        </svg>
                    </button>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/logo.php"
                )
            ); ?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/adress.php"
                )
            ); ?>
            <div class="wrapper__phone">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/phone.php"
                    )
                ); ?>
            </div>
        </header>
    </div>

    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/menu.php"
        )
    ); ?>