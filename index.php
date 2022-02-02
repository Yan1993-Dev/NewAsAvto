<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
?>
        <nav class="nav">
            <ul class="navigation">
                <li class="nav__item"><a href="../novye-avto/index.php" class="nav__item__link">Новые авто</a>
                    <ul class="nav__nav">
                        <li class="nav__nav__item"><a href="../geely/index.php" class="nav__nav__link">GEELY</a></li>
                        <li class="nav__nav__item"><a href="../haval/index.php" class="nav__nav__link">HAVAL</a></li>
                        <li class="nav__nav__item"><a href="../chery/index.php" class="nav__nav__link">CHERY</a></li>
                        <li class="nav__nav__item"><a href="../exeed/index.php" class="nav__nav__link">EXEED</a></li>
                        <li class="nav__nav__item"><a href="../changan/index.php" class="nav__nav__link">CHANGAN</a></li>
                        <li class="nav__nav__item"><a href="../faw/index.php" class="nav__nav__link">FAW</a></li>
                        <li class="nav__nav__item"><a href="../jac/index.php" class="nav__nav__link">JAC</a></li>
                        <li class="nav__nav__item"><a href="../gwm/index.php" class="nav__nav__link">GWM Pickup</a></li>
                        <li class="nav__nav__item"><a href="../novye-avto/index.php" class="nav__nav__link">Все автомобили</a></li>
                    </ul>
                    </li>
                <li class="nav__item"><a href="../servis/index.php" class="nav__item__link">Сервис</a></li>
                <li class="nav__item"><a href="../aktsii/index.php" class="nav__item__link">Акции</a></li>
                <li class="nav__item"><a href="../kredit/index.php" class="nav__item__link">Кредит</a></li>
                <li class="nav__item"><a href="../treyd-in/index.php" class="nav__item__link">Трейд-ин</a></li>
                <li class="nav__item"><a href="../novosti/index.php" class="nav__item__link">Новости</a></li>
                <li class="nav__item"><a href="../otzyvy/index.php" class="nav__item__link">Отзывы</a></li>
                <li class="nav__item"><a href="../o-nas/index.php" class="nav__item__link">О нас</a></li>
                <li class="nav__item"><a href="../kontakty/index.php" class="nav__item__link">Контакты</a></li>
            </ul>
        </nav>
<main>
    <div class="container_site">
        <div class="slider_wrapper">
            <div class="slider-container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" class="category__image" alt="poster"></a>
                        </div>
                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" class="category__image" alt="poster"></a>
                        </div>
                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" class="category__image" alt="poster"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <div class="tabs__central">
                    <div class="tabs__nav">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/geely__btn.php"
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
                                "PATH" => "/include/haval__btn.php"
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
                                "PATH" => "/include/chery__btn.php"
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
                                "PATH" => "/include/exeed__btn.php"
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
                                "PATH" => "/include/changan__btn.php"
                            )
                        ); ?>
                    </div>
                    <div class="tabs__nav__second tabs__nav">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/faw__btn.php"
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
                                "PATH" => "/include/jac__btn.php"
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
                                "PATH" => "/include/gwm__btn.php"
                            )
                        ); ?>
                    </div>
                </div>
                <div class="tabs__content">
                    <div class="tabs__item active" id="tab_1">
                        <div class="tabs__item__fl">
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/atlas.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">Atlas</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/coolray.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">coolray</h3>
                                    <p class="model_catalog__price">от 1 361 990 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/GS.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">GS</h3>
                                    <p class="model_catalog__price">от 1 219 990 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tugella.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tugella</h3>
                                    <p class="model_catalog__price">от 2 699 990 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/atlasPro.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">atlas Pro</h3>
                                    <p class="model_catalog__price">от 2 119 990 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_2">
                        <div class="tabs__item__fl">
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/f7.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">f7</h3>
                                    <p class="model_catalog__price">от 1 604 000 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/f7x.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">f7x</h3>
                                    <p class="model_catalog__price">от 1 654 000 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion__car.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">jolion</h3>
                                    <p class="model_catalog__price">от 1 259 000 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_3">
                        <div class="tabs__item__fl">
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tiggo4__tabs.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 4</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/7pro.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 7pro</h3>
                                    <p class="model_catalog__price">от 1 719 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/8pro.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 8</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/ultimate.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 8pro</h3>
                                    <p class="model_catalog__price">от 1 609 900 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_4">
                        <div class="tabs__item__fl">
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/TXL.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">CHERYEXEED</h3>
                                    <p class="model_catalog__price">от 2 149 900 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_5">
                        <div class="tabs__item__fl">
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/35+.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">CHANGAN CS35PLUS</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/changanCs55.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">CHANGAN CS55</h3>
                                    <p class="model_catalog__price">от 1 719 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/75FL.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">CHANGAN CS75FL</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_6">
                        <div class="tabs__item__fl">
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/40.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">BESTURN X40</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/80.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">BESTURN X80</h3>
                                    <p class="model_catalog__price">от 1 719 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/T77.jpg" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">BESTUNE T77</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_7">
                        <div class="tabs__item__fl">
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/s3.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC S3</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/j7.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC J7</h3>
                                    <p class="model_catalog__price">от 1 719 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/s7.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC S7</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/t6.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC T6</h3>
                                    <p class="model_catalog__price">от 1 609 900 руб.</p>
                                </div>
                            </a>
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/s5.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC S5</h3>
                                    <p class="model_catalog__price">от 1 609 900 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_8">
                        <div class="tabs__item__fl">
                            <a href="./pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/wingle.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">GWM Wingle 7</h3>
                                    <p class="model_catalog__price">от 1 749 000 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="background">
        <div class="container_site">
            <div class="flex__cont">
                <div class="middle">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/text__form.php"
                        )
                    ); ?>
                </div>
                <section class="form_traid-in">
                    <h2 class="sub_title" id="calculator">
                        Заявка на Trade-in
                    </h2>
                    <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
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
                                <label for="input__manufacturer" class="label__traid-in">Марка вашего автомобиля</label>
                                <input type="text" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                            </div>
                            <div class="field">
                                <label for="input_traid" class="label__traid-in">Модель вашего автомобиля</label>
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
            </div>
        </div>
    </div>
    <h2 class="title" id="exterier">Акции</h2>
    <div class="container_site">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/text__sale.php"
            )
        ); ?> <ul class="flex">
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="#" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
        </ul>
        <a href="#" id="loadMore">Посмотреть ещё</a>
    </div>
    <div class="background__credit">
        <div class="container_site">
            <div class="flex__cont">
                <section class="credit_calc">
                    <h2 class="sub_title" id="">
                        Заявка на расчёт кредита
                    </h2>
                    <form class="credit_calc_wp  form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                        <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                        <div class="field__credit">
                            <label for="credit__name" class="credit__name">Имя*</label>
                            <input type="text" id="credit__name" name="name" class="input__credit" data-validate-field="credit__name" placeholder="Ваше имя">
                        </div>
                        <div class="field__wrapper">
                            <div class="field__credit">
                                <label for="credit__form__phone" class="credit__name">Телефон*</label>
                                <input type="tel" id="credit__form__phone" name="tel" class="input__credit" data-validate-field="tel__credit" placeholder="Ваш телефон">
                            </div>
                            <div class="field__credit">
                                <label for="input__initial" class="credit__name">Первый взнос</label>
                                <input type="text" id="input__initial" class="input__credit" placeholder="Сумма первого взноса">
                            </div>
                            <div class="field__credit">
                                <label for="credit__time" class="credit__name">Срок</label>
                                <input type="text" id="credit__time" class="input__credit" placeholder="Срок кредита">
                            </div>
                        </div>
                        <div class="checkbox__credit">
                            <input id="credit__personal__inf" type="checkbox" class="credit__radio" checked value="Receipt" data-validate-field="credit__personal">
                            <label for="credit__personal__inf" class="credit__label">Согласие на обработку ПД</label>
                        </div>
                        <div class="popup__btn__flex">
                            <button class="btn traid__btn open_thanks_js" type="submit">Отправить</button>
                        </div>
                    </form>
                </section>
                <div class="middle">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/text__credit.php"
                        )
                    ); ?>
                </div>
            </div>
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
            "PATH" => "/include/seo__main.php"
        )
    ); ?>
    <div class="popup_overlay"></div>
    <div class="popup__container">
        <form action="mail.php" id="popup__form" class="popup  form__js" name="popupIn" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
            <button class="popup_drive__btn" type="button" aria-label="Close button"></button>
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

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>