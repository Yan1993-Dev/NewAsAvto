<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
?><?
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
    $APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/card__auto.css");
    ?>

<nav class="nav">
    <ul class="navigation">
        <li class="nav__item"><a href="/novye-avto/index.php" class="nav__item__link checked__link">Новые авто</a>
            <ul class="nav__nav">
                <li class="nav__nav__item"><a href="/geely/index.php" class="nav__nav__link">GEELY</a></li>
                <li class="nav__nav__item"><a href="/haval/index.php" class="nav__nav__link">HAVAL</a></li>
                <li class="nav__nav__item"><a href="/pages/catalogPageChery.html" class="nav__nav__link">CHERY</a></li>
                <li class="nav__nav__item"><a href="/pages/catalogPageExeed.html" class="nav__nav__link">EXEED</a></li>
                <li class="nav__nav__item"><a href="/pages/catalogPageChangan.html" class="nav__nav__link">CHANGAN</a></li>
                <li class="nav__nav__item"><a href="/pages/catalogPageFaw.html" class="nav__nav__link">FAW</a></li>
                <li class="nav__nav__item"><a href="/pages/catalogPageJac.html" class="nav__nav__link">JAC</a></li>
                <li class="nav__nav__item"><a href="/pages/catalogPageGWM.html" class="nav__nav__link">GWM Pickup</a></li>
                <li class="nav__nav__item"><a href="/pages/catalogCars.html" class="nav__nav__link">Все автомобили</a></li>
            </ul>
        </li>
        <li class="nav__item"><a href="/servis/index.php" class="nav__item__link">Сервис</a></li>
        <li class="nav__item"><a href="/aktsii/index.php" class="nav__item__link">Акции</a></li>
        <li class="nav__item"><a href="/kredit/index.php" class="nav__item__link">Кредит</a></li>
        <li class="nav__item"><a href="/treyd-in/index.php" class="nav__item__link">Трейд-ин</a></li>
        <li class="nav__item"><a href="/novosti/index.php" class="nav__item__link">Новости</a></li>
        <li class="nav__item"><a href="/otzyvy/index.php" class="nav__item__link">Отзывы</a></li>
        <li class="nav__item"><a href="/o-nas/index.php" class="nav__item__link">О нас</a></li>
        <li class="nav__item"><a href="/kontakty/index.php" class="nav__item__link">Контакты</a></li>
    </ul>
</nav>
<main>
    <div class="container_site">
        <ul class="cat__list">
            <li class="cat__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/arrowL.svg" alt=""><img src="../static/icons/arrowL.svg" alt="" class="ar__right"><a href="../pages/catalogCars.html" class="cat__list__inner">Назад в каталог</a></li>
        </ul>
        <section class="title">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/tiggo8__title.php"
                )
            ); ?>
        </section>
        <div class="slider_wrapper">
            <div class="slider-container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/platinum_tiggo4.jpg" src="#" alt="">
                        </div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/w_tiggo4.jpg" alt=""></div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/white_tiggo4.jpg" alt=""></div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/red_tiggo4.jpg" alt=""></div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/w_tiggo4.jpg" alt=""></div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/white_tiggo4.jpg" alt=""></div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/red_tiggo4.jpg" alt=""></div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/w_tiggo4.jpg" alt=""></div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/white_tiggo4.jpg" alt=""></div>

                    </div>
                    <div class="swiper_pagination">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_black.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_grey.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_red.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_black.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_grey.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_red.svg" alt="" class="slider_img_title">
                    </div>
                </div>
            </div>
        </div>
        <div class="form_wrapper">
            <section class="form_traid-in">
                <h2 class="sub_title" id="calculator">
                    Заявка на Trade-in
                </h2>
                <form class="traid-in_calc form__js" action="" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                    <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                    <div class="field">
                        <label for="calc__name" class="label__traid-in">Имя*</label>
                        <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                    </div>
                    <div class="field__wrapper">
                        <div class="field">
                            <label for="calc__phone" class="label__traid-in">Телефон*</label>
                            <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                        </div>
                        <div class="field">
                            <label for="input__manufacturer" class="label__traid-in">Марка</label>
                            <input type="text" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Модель</label>
                            <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
                        </div>
                    </div>
                    <div class="checkbox__personal">
                        <input id="calc__personal__inf" type="checkbox" class="checkbox__input " checked value="Receipt" data-validate-field="traid__personal">
                        <label for="calc__personal__inf" class="checkbox__label">Согласие на обработку ПД</label>
                    </div>
                    <div class="popup__btn__flex">
                        <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                    </div>
                </form>
            </section>
            <section class="credit_calc">
                <h2 class="sub_title" id="">
                    Заявка на расчёт кредита
                </h2>
                <form class="credit_calc_wp  form__js" action="" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                    <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                    <div class="field">
                        <label for="credit__name" class="label__traid-in">Имя*</label>
                        <input type="text" id="credit__name" name="name" class="input__traid-in" data-validate-field="credit__name" placeholder="Ваше имя">
                    </div>
                    <div class="field__wrapper">
                        <div class="field">
                            <label for="credit__form__phone" class="label__traid-in">Телефон*</label>
                            <input type="tel" id="credit__form__phone" name="tel" class="input__traid-in" data-validate-field="tel__credit" placeholder="Ваш телефон">
                        </div>
                        <div class="field">
                            <label for="input__initial" class="label__traid-in">Первый взнос</label>
                            <input type="text" id="input__initial" class="input__traid-in" placeholder="Сумма первого взноса">
                        </div>
                        <div class="field">
                            <label for="credit__time" class="label__traid-in">Срок</label>
                            <input type="text" id="credit__time" class="input__traid-in" placeholder="Срок кредита">
                        </div>
                    </div>
                    <div class="checkbox__personal">
                        <input id="credit__personal__inf" type="checkbox" class="checkbox__input " checked value="Receipt" data-validate-field="credit__personal">
                        <label for="credit__personal__inf" class="checkbox__label">Согласие на обработку ПД</label>
                    </div>
                    <div class="popup__btn__flex">
                        <button class="btn traid__btn open_thanks_js" type="submit">Отправить</button>
                    </div>
                </form>
            </section>
        </div>
        </section>
    </div>
    <div class="container_site">
        <div class="exterier" id="exterier"></div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/tiggo8__sl1.php"
            )
        ); ?>
    </div>
    <div class="container_site">
        <div class="interier" id="interier"></div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/tiggo8__sl2.php"
            )
        ); ?>
    </div>

    <div class="container_site">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/tiggo8__sl3.php"
            )
        ); ?>
    </div>
    <div class="container_site">
        <div id="complictation"></div>
        <div class="equip">
            <div class="equipment_wrapper">
                <ul class="equipment_to_title">
                    <li class="equipment_item_comp">Комплектации</li>
                    <li class="equipment_item_price">Цена</li>
                    <li class="equipment_item_final">Финальная цена</li>
                </ul>
            </div>
            <div class="ex ex-3">
                <ul class="accordion__list">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/tiggo8__prem.php"
                        )
                    ); ?>
                </ul>
            </div>
        </div>
        <div class="wrapper__est">
            <button class="btn estimate_btn__js">
                Оставить заявку
            </button>
        </div>
        </section>
    </div>
    <div class="container_site">
        <div class="line__sale">
            <h2 class="slider_title_sale">акции</h2>
        </div>
        <div class="slider-container_one">
            <div class="swiper-container_one">
                <div class="swiper-wrapper_one">
                    <div class="swiper-slide_one card_one"><img data-src="../static/images/trade-in.png" src="#" alt="" class="img_slider_one swiper-lazy">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                    </div>
                    <div class="swiper-slide_one card_one"><img data-src="../static/images/trade-in.png" src="#" alt="" class="img_slider_one swiper-lazy">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                    </div>
                    <div class="swiper-slide_one card_one"><img data-src="../static/images/trade-in.png" src="#" alt="" class="img_slider_one swiper-lazy">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                    </div>
                    <div class="swiper-slide_one card_one"><img data-src="../static/images/trade-in.png" src="#" alt="" class="img_slider_one swiper-lazy">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                    </div>
                </div>
                <div class="swiper-pagination_one"></div>
            </div>
        </div>
    </div>
    <div class="container_site">
        <section class="news">
            <div class="line">
                <h2 class="slider_title_news">Новости</h2>
            </div>
            <div class="slider-container_news">
                <div class="swiper-container_news">
                    <div class="swiper-wrapper_news">
                        <div class="swiper-slide_news">
                            <a href="../pages/news__card.html" class="category__image"><img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt="">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                            </a>
                            <div class="news_content">
                                <a href="../pages/news__card.html">
                                    <div class="news__sub__title">Chery и iFlytek углубили всестороннее
                                        стратегическое сотрудничество</div>
                                </a>
                                <p class="news__cont">24 мая 2021 года компании Chery Automobile Co., Ltd.
                                    и iFlytek CO., LTD. подписали рамочное соглашение об углублении
                                    стратегического взаимодействия в области разработки решений систем
                                    искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе
                                    над беспилотными автомобилями и доведением их автономности до четвертого
                                    уровня.</p>
                                <a href="../pages/news__card.html" class="category__info">Читать больше</a>
                            </div>
                        </div>
                        <div class="swiper-slide_news">
                            <a href="../pages/news__card.html" class="category__image"><img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt="">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                            </a>
                            <div class="news_content">
                                <a href="./pages/news__card.html" class="category__info">
                                    <div class="news__sub__title">Chery и iFlytek углубили всестороннее
                                        стратегическое сотрудничество</div>
                                </a>
                                <p class="news__cont">24 мая 2021 года компании Chery Automobile Co., Ltd.
                                    и iFlytek CO., LTD. подписали рамочное соглашение об углублении
                                    стратегического взаимодействия в области разработки решений систем
                                    искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе
                                    над беспилотными автомобилями и доведением их автономности до четвертого
                                    уровня.</p>
                                <a href="./pages/news__card.html" class="category__info">Читать больше</a>
                            </div>
                        </div>
                        <div class="swiper-slide_news">
                            <a href="./pages/news__card.html" class="category__image"><img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt="">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                            </a>
                            <div class="news_content">
                                <a href="./pages/news__card.html">
                                    <div class="news__sub__title">Chery и iFlytek углубили всестороннее
                                        стратегическое сотрудничество</div>
                                </a>
                                <p class="news__cont">24 мая 2021 года компании Chery Automobile Co., Ltd.
                                    и iFlytek CO., LTD. подписали рамочное соглашение об углублении
                                    стратегического взаимодействия в области разработки решений систем
                                    искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе
                                    над беспилотными автомобилями и доведением их автономности до четвертого
                                    уровня.</p>
                                <a href="./pages/news__card.html" class="category__info">Читать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <div class="container_site">
        <section class="feedback">
            <div class="line__feedback">
                <h2 class="slider_title_feedback">Отзывы</h2>
            </div>
            <div class="slider-container_feedback">
                <div class="swiper-container_feedback">
                    <div class="swiper-wrapper_feedback">
                        <div class="swiper-slide_feedback">
                            <img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                            <div class="feedback_head">
                                <div class="feedback_sub-title">
                                    Роман Лесной
                                </div>
                            </div>
                            <p class="feedback_text">
                                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное соглашение
                                об углублении стратегического взаимодействия в области разработки решений систем искусственного интеллекта
                                (ИИ) для серийных автомобилей,
                                совместной работе над беспилотными автомобилями и доведением их автономности до четвертого уровня.
                            </p>
                        </div>
                        <div class="swiper-slide_feedback">
                            <img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                            <div class="feedback_head">
                                <div class="feedback_sub-title">
                                    Роман Лесной
                                </div>
                            </div>
                            <p class="feedback_text">
                                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное соглашение
                                об углублении стратегического взаимодействия в области разработки решений систем искусственного интеллекта
                                (ИИ) для серийных автомобилей,
                                совместной работе над беспилотными автомобилями и доведением их автономности до четвертого уровня.
                            </p>
                        </div>
                        <div class="swiper-slide_feedback">
                            <img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                            <div class="feedback_head">
                                <div class="feedback_sub-title">
                                    Роман Лесной
                                </div>
                            </div>
                            <p class="feedback_text">
                                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное соглашение
                                об углублении стратегического взаимодействия в области разработки решений систем искусственного интеллекта
                                (ИИ) для серийных автомобилей,
                                совместной работе над беспилотными автомобилями и доведением их автономности до четвертого уровня.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="popup_overlay"></div>
    <div class="popup__container">
        <form action="" id="popup__form" class="popup  form__js" name="popupIn" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
            <button class="popup_drive__btn" type="button" aria-label="Close button"></button>
            <h2 class="popup_drive">Тест драйв</h2>
            <div class="popup_cont">
                <div class="field_name">
                    <label for="drive__name" class="label__popup">Имя*</label>
                    <input type="text" id="drive__name" class="input__popup _req" data-validate-field="name" name="name" placeholder="Ваше имя">
                </div>
                <div class="field__wrapper">
                    <div class="field_phone">
                        <label for="drive__phone" class="label__popup">Телефон*</label>
                        <input type="tel" id="drive__phone" data-validate-field="tel" class="input__popup" name="tel" placeholder="Ваш телефон">
                    </div>
                </div>
                <div class="field__wrapper">
                    <div class="field_calendar">
                        <label for="drive__calendar" class="label__popup">Выберите день*</label>
                        <input type="date" id="drive__datapicker" class="input__popup _req" placeholder="Нажмите">
                    </div>
                </div>
            </div>
            <div class="checkbox_popup">
                <input id="drive__personal-inf" type="checkbox" class="checkbox__input _req" checked value="drive" data-validate-field="personal">
                <label for="drive__personal-inf" class="checkbox__drive">Согласие на обработку ПД</label>
            </div>
            <div class="popup__btm__submit open_thanks_js">
                <button class="btn popup__btn open_thanks_js" type="submit">Отправить</button>
            </div>
        </form>
    </div>
    <div class="popup__container">
        <form action="" id="popup__form" class="title__popup__js  title__popup" name="popupIn" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
            <button class="popup_drive__btn popup_drive__btn__js" type="button" aria-label="Close button"></button>
            <h2 class="popup_drive">Заявка на обратный звонок</h2>
            <div class="popup_cont">
                <div class="field_name">
                    <label for="drive__name" class="label__popup">Имя*</label>
                    <input type="text" id="drive__name" class="input__popup _req" data-validate-field="name" name="name" placeholder="Ваше имя">
                </div>
                <div class="field__wrapper">
                    <div class="field_phone">
                        <label for="drive__phone" class="label__popup">Телефон*</label>
                        <input type="tel" id="drive__phone" data-validate-field="tel" class="input__popup" name="tel" placeholder="Ваш телефон">
                    </div>
                </div>
                <div class="field__wrapper">
                    <div class="field_calendar">
                        <label for="drive__calendar" class="label__popup">Выберите день*</label>
                        <input type="date" id="drive__datapicker" class="input__popup _req" placeholder="Нажмите">
                    </div>
                </div>
            </div>
            <div class="checkbox_popup">
                <input id="drive__personal-inf" type="checkbox" class="checkbox__input _req" checked value="drive" data-validate-field="personal">
                <label for="drive__personal-inf" class="checkbox__drive">Согласие на обработку ПД</label>
            </div>
            <div class="popup__btm__submit">
                <button class="btn popup__btn open_thanks_js" type="submit">Отправить</button>
            </div>
        </form>
    </div>

    <!-- заявка -->
    <div class="estimate__container">
        <form action="" class="estimate  form__js" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
            <button class="popup_request__btn" type="button" aria-label="Close button"></button>
            <h2 class="popup_request">Оставить заявку</h2>
            <div class="popup_cont">
                <div class="field_name">
                    <label for="estimate__name" class="label__popup">Имя*</label>
                    <input type="text" id="estimate__name" name="name" class="input__popup" data-validate-field="name__est" placeholder="Ваше имя">
                </div>
                <div class="field__wrapper">
                    <div class="field_phone">
                        <label for="estimate__phone" class="label__popup">Телефон*</label>
                        <input type="tel" id="estimate__phone" name="tel" class="input__popup" data-validate-field="telephone" placeholder="Ваш телефон">
                    </div>
                </div>
                <div class="field_est">
                    <label for="input__text" class="label__popup">Ваш вопрос</label>
                    <textarea class="input__est" id="input__text" cols="5" rows="5" placeholder="Опишите Ваш вопрос"></textarea>
                </div>
            </div>
            <div class="checkbox_popup">
                <input id="check-drive" type="checkbox" class="checkbox__input " checked value="drive" data-validate-field="estimate__personal">
                <label for="check-drive" class="checkbox__drive">Согласие на обработку ПД</label>
            </div>
            <div class="wrapper__submit-est">
                <button class="btn popup_req__js open_thanks_js" type="submit">Отправить</button>
            </div>
        </form>
    </div>
    <div class="thanks__container">
        <section class="thanks__popup thanks">
            <button class="thanks_request__btn" type="button" aria-label="Close button"></button>
            <div class="thanks__content">
                <p class="thanks_title">Заявка успешно отправлена</p>
                <p class="thanks_app">Мы получили Вашу заявку,
                    наши сотрудники скоро свяжуться с вами.
                    Будьте на связи!</p>
            </div>
        </section>
    </div>
</main>
<section class="map">
    <div class="container">
        <div class="contacts_block">
            <div class="title">Дилерские центры «АсАвто»</div>
            <ul class="list_unstyled">
                <li class="visible" data-coordinates='{"lat": 53.263619542243866, "lng": 50.26215135698404}' data-center='{"lat": 53.263619542243866, "lng": 50.25}' data-zoom="14">
                    <div class="name">АсАвто на Алма-Атинской</div>
                    <div class="items">
                        <div class="item addr">г. Самара, Алма-Атинская, 87</div>
                        <div class="item tel"><a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a></div>
                        <div class="item clock">Автосалон: 9:00 - 21:00</div>
                        <div class="item clock">СТО: 8:00 - 20:00</div>
                        <div class="item site"><a href="email:asavtomotors.ru@yandex.ru">asavtomotors.ru@yandex.ru</a></div>
                    </div>
                </li>
                <li data-coordinates='{"lat": 53.25195107740439, "lng": 50.36005176768642}' data-center='{"lat": 53.25195107740439, "lng": 50.346}' data-zoom="14">
                    <div class="name">АсАвто на Аэропортовском шоссе</div>
                    <div class="items">
                        <div class="item addr">г. Самара, Аэропортовское шоссе, 1Ж</div>
                        <div class="item tel"><a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a></div>
                        <div class="item clock">Автосалон: 9:00 - 21:00</div>
                        <div class="item clock">СТО: 8:00 - 20:00</div>
                        <div class="item site"><a href="email:asavtomotors.ru@yandex.ru">asavtomotors.ru@yandex.ru</a></div>
                    </div>
                </li>
                <li data-coordinates='{"lat": 53.137290, "lng": 50.179647}' data-center='{"lat": 53.139475, "lng": 50.167675}' data-zoom="14">
                    <div class="name">АсАвто на Южном шоссе</div>
                    <div class="items">
                        <div class="item addr">г. Самара, Южное шоссе 12А, строение 4</div>
                        <div class="item tel"><a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a></div>
                        <div class="item clock">Автосалон: 9:00 - 20:00</div>
                        <div class="item clock">СТО: 8:00 - 20:00</div>
                        <div class="item site"><a href="email:asavtomotors.ru@yandex.ru">asavtomotors.ru@yandex.ru</a></div>
                    </div>
                </li>
                <li data-coordinates='{"lat": 53.578003950614864, "lng": 49.41344120138184}' data-center='{"lat": 53.578003950614864, "lng": 49.40}' data-zoom="14">
                    <div class="name">АсАвто в пос.Тимофеевка (г. Тольятти)</div>
                    <div class="items">
                        <div class="item addr">пос. Тимофеевка (г.Тольятти), ул. Солнечная, 1А</div>
                        <div class="item tel"><a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a></div>
                        <div class="item clock">Автосалон: 9:00 - 21:00</div>
                        <div class="item clock">СТО: 8:00 - 20:00</div>
                        <div class="item site"><a href="email:asavtomotors.ru@yandex.ru">asavtomotors.ru@yandex.ru</a></div>
                    </div>
                </li>
                <li data-coordinates='{"lat": 51.557420, "lng": 46.066993}' data-center='{"lat": 51.557420, "lng": 46.052}' data-zoom="14">
                    <div class="name">ГК АсАвто, г. Саратов</div>
                    <div class="items">
                        <div class="item addr">г. Саратов, Соколовая гора, 4</div>
                        <div class="item tel"><a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a></div>
                        <div class="item clock">Автосалон: 9:00 - 20:00</div>
                        <div class="item clock">СТО: 8:00 - 20:00</div>
                        <div class="item site"><a href="email:asavtomotors.ru@yandex.ru">asavtomotors.ru@yandex.ru</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="yamap"></div>
</section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>