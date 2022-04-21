<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");
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
                            <a href="../aktsii/tri-novye-kreditnye-programmy-dlya-chery-i-exeed/index.php" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/zik1vkx0kw7rmp5hc3721z9uda1olo0j.jpg" class="category__image" alt="poster"></a>
                        </div>
                        <div class="swiper-slide card">
                            <a href="../aktsii/avtorassrochka-0-0-18/index.php" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/1tpdq781f9y5q0es84ej3k4xmf86zzed.jpg" class="category__image" alt="poster"></a>
                        </div>
                        <div class="swiper-slide card">
                            <a href="../aktsii/kredit-bez-pervogo-vznosa/index.php" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/d947f551af6e9f725b5e8a9e7f3130c5.jpg" class="category__image" alt="poster"></a>
                        </div>
                        <div class="swiper-slide card">
                            <a href="../aktsii/trade-in-vygodno-i-udobno/index.php" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/4cf6a20f5f6d76ccb2bb8e03890e2b3e.jpg" class="category__image" alt="poster"></a>
                        </div>
                        <!-- <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/LXnew.jpg" class="category__image" alt="poster"></a>
                        </div>
                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/TXLnew.jpg" class="category__image" alt="poster"></a>
                        </div>
                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="news__card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/testactii.jpg" class="category__image" alt="poster"></a>
                        </div> -->
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
                            <a href="/geely/atlaspro/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/atlasPro.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">atlas Pro</h3>
                                    <p class="model_catalog__price">от 2 119 990 руб.</p>
                                </div>
                            </a>
                            <a href="/geely/coolray/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/coolray.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">coolray</h3>
                                    <p class="model_catalog__price">от 1 361 990 руб.</p>
                                </div>
                            </a>
                            <a href="/geely/tugella/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tugella.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tugella</h3>
                                    <p class="model_catalog__price">от 2 699 990 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_2">
                        <div class="tabs__item__fl">
                            <a href="/haval/f7/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/f7.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">f7</h3>
                                    <p class="model_catalog__price">от 1 604 000 руб.</p>
                                </div>
                            </a>
                            <a href="/haval/f7x/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/f7x.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">f7x</h3>
                                    <p class="model_catalog__price">от 1 654 000 руб.</p>
                                </div>
                            </a>
                            <a href="/haval/jolion/index.php" class="tabs__link__fl">
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
                            <a href="/chery/tiggo4/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tiggo4__tabs.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 4</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                            <a href="/chery/tiggo7/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/7pro.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 7pro</h3>
                                    <p class="model_catalog__price">от 1 719 900 руб.</p>
                                </div>
                            </a>
                            <a href="/chery/tiggo8/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/8NEW.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 8new</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                            <a href="/chery/tiggo8pro/index.php" class="tabs__link__fl">
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
                            <a href="/exeed/lx/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/LX.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">LX</h3>
                                    <p class="model_catalog__price">от 2 149 900 руб.</p>
                                </div>
                            </a>
                            <a href="/exeed/txl/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/TXL__perview.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">TXL FL</h3>
                                    <p class="model_catalog__price">от 2 149 900 руб.</p>
                                </div>
                            </a>
                            <a href="/exeed/vx/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/VX.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">VX</h3>
                                    <p class="model_catalog__price">от 2 149 900 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_5">
                        <div class="tabs__item__fl">
                            <a href="/changan/35/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/35+.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">CHANGAN CS35PLUS</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                            <a href="/changan/55/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/changanCs55.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">CHANGAN CS55</h3>
                                    <p class="model_catalog__price">от 1 719 900 руб.</p>
                                </div>
                            </a>
                            <a href="/changan/75/index.php" class="tabs__link__fl">
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
                            <a href="/faw/x40/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/x40__perview.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">BESTURN X40</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                            <a href="/faw/t77/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/t77preview.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">BESTUNE T77</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_7">
                        <div class="tabs__item__fl">
                            <a href="/jac/s3/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/s3.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC S3</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                            <a href="/jac/j7/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/j7.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC J7</h3>
                                    <p class="model_catalog__price">от 1 719 900 руб.</p>
                                </div>
                            </a>
                            <a href="/jac/s7/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/s7.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC S7</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                            <a href="/jac/t6/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/t6.png" alt="model"></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">JAC T6</h3>
                                    <p class="model_catalog__price">от 1 609 900 руб.</p>
                                </div>
                            </a>
                            <a href="/jac/s5/index.php" class="tabs__link__fl">
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
                            <a href="/gwm/wingle/index.php" class="tabs__link__fl">
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
                    <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                        <div class="field">
                            <label for="calc__name" class="label__traid-in">Имя*</label>
                            <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя" required>
                        </div>
                        <div class="field__wrapper">
                            <div class="field">
                                <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                <input type="tel" id="calc__phone" name="phone" class="input__traid-in " data-validate-field="tel" placeholder="Ваш телефон" required>
                            </div>
                            <div class="field">
                                <label for="input__manufacturer" class="label__traid-in">Марка вашего автомобиля</label>
                                <input type="text" name="td-model" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                            </div>
                            <div class="field">
                                <label for="input_traid" class="label__traid-in">Модель вашего автомобиля</label>
                                <input type="text" id="input_traid" name="select-model" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
                            </div>
                        </div>
                        <div class="checkbox_popup">
                            Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                        </div>
                        <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                        <input type="hidden" name="SUBJECT" value=" Заявка на Trade-in">
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
                <a href="../aktsii/tri-novye-kreditnye-programmy-dlya-chery-i-exeed/index.php">
                    <p class="content__title">ТРИ новые кредитные программы для CHERY и EXEED</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/testactii.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="../aktsii/tri-novye-kreditnye-programmy-dlya-chery-i-exeed/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="../aktsii/avtorassrochka-0-0-18/index.php">
                    <p class="content__title">Авторассрочка 0/0/18</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/3u207yu1h6sh9p2mbba2bc4j4mblftpm.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="../aktsii/avtorassrochka-0-0-18/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="../aktsii/kredit-bez-pervogo-vznosa/index.php">
                    <p class="content__title">Кредит без первого взноса</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/p3g2vmyndsnje2kyrygycayt9lgbffuv.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="../aktsii/kredit-bez-pervogo-vznosa/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="../aktsii/trade-in-vygodno-i-udobno/index.php">
                    <p class="content__title">Trade-in. Выгодно и удобно.</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/d947f551af6e9f725b5e8a9e7f3130c5.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="../aktsii/trade-in-vygodno-i-udobno/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="../aktsii/chery-pomoshch-na-dorogakh/index.php">
                    <p class="content__title">Chery Помощь на дорогах</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/bfc5c3d3191209628aea6bdb125d405a.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="../aktsii/chery-pomoshch-na-dorogakh/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="../aktsii/exeed-pomoshch-na-dorogakh/index.php">
                    <p class="content__title">EXEED Помощь на дорогах</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/d95bded6a8e557b6aa249353248f0c74.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="../aktsii/exeed-pomoshch-na-dorogakh/index.php" class="btn__info">Узнать больше</a>
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
                    <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                        <div class="field__credit">
                            <label for="credit__name" class="credit__name">Имя*</label>
                            <input type="text" id="credit__name" name="name" class="input__credit" data-validate-field="credit__name" placeholder="Ваше имя">
                        </div>
                        <div class="field__wrapper">
                            <div class="field__credit">
                                <label for="credit__form__phone" class="credit__name">Телефон*</label>
                                <input type="tel" id="credit__form__phone" name="phone" class="input__credit" data-validate-field="tel__credit" placeholder="Ваш телефон">
                            </div>
                            <div class="field__credit">
                                <label for="input__initial" class="credit__name">Первый взнос</label>
                                <input type="text" id="input__initial" name="select-credit" class="input__credit" placeholder="Сумма первого взноса">
                            </div>
                            <div class="field__credit">
                                <label for="credit__time" class="credit__name">Срок</label>
                                <input type="text" id="credit__time" name="credit-time" class="input__credit" placeholder="Срок кредита">
                            </div>
                        </div>
                        <div class="checkbox_popup">
                            Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                        </div>
                        <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                        <input type="hidden" name="SUBJECT" value=" Заявка на Кредит*">
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
        <form id="popup__form" class="popup  form__js" name="popupIn" enctype="multipart/form-data" method="POST">
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
                        <input type="date" id="drive__datapicker" class="input__popup _req" placeholder="Нажмите" name="schedule">
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

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
$APPLICATION->SetAdditionalJs(SITE_TEMPLATE_PATH . "/script/index.js");
?>