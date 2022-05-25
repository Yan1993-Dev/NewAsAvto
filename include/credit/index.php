<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/credit.css");
?>

<main>
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
    <div class="background">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/credit__top.php"
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
                "PATH" => "/include/credit__title.php"
            )
        ); ?>
        <div class="choise__container">
            <section class="section__tabs">
                <div class="tabs">
                    <div class="tabs__nav">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__geely.php"
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
                                "PATH" => "/include/credit__haval.php"
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
                                "PATH" => "/include/credit__chery.php"
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
                                "PATH" => "/include/credit__exeed.php"
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
                                "PATH" => "/include/credit__faw.php"
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
                                "PATH" => "/include/credit__changan.php"
                            )
                        ); ?>
                    </div>
                    <div class="model__container">
                        <!-- Tab Container -->
                        <input class="tab-radio" id="main-tab-1" name="main-group" type="radio">
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <label class="sub__tabs__item" for="sub-tab-1">ATLAS PRO</label>
                                <label class="sub__tabs__item" for="sub-tab-101">COOLRAY</label>
                                <label class="sub__tabs__item" for="sub-tab-103">TUGELLA</label>
                            </div>
                            <input class="tab-radio" id="sub-tab-1" name="sub-group" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит ATLAS PRO*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__atlasPro.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <!-- Sub Tab -->
                            <input class="tab-radio" id="sub-tab-101" name="sub-group" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Coolray*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__coolray.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab-103" name="sub-group" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Tugella*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tugella.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-2" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <label class="sub__tabs__item" for="sub-tab-111">F7</label>
                                <label class="sub__tabs__item" for="sub-tab-122">F7X</label>
                                <label class="sub__tabs__item" for="sub-tab-133">JOLION</label>
                            </div>
                            <input class="tab-radio" id="sub-tab-111" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит F7*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__f7.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab-122" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит F7x*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__f7x.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab-133" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Jolion*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__jolion.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-3" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item" for="sub-tab3-1">TIGGO 4</label>
                                <label class="sub__tabs__item" for="sub-tab3-2">TIGGO 7PRO</label>
                                <label class="sub__tabs__item" for="sub-tab3-3">TIGGO 8</label>
                                <label class="sub__tabs__item" for="sub-tab3-4">TIGGO 8PRO</label>
                                <label class="sub__tabs__item" for="sub-tab3-5">TIGGO 8PRO MAX</label>
                            </div>
                            <input class="tab-radio" id="sub-tab3-1" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Tiggo 4*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tiggo4.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab3-2" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Tiggo 7Pro*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tiggo7pro.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab3-3" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Tiggo 8*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tiggo8.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab3-4" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Tiggo 8Pro*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tiggo8pro.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab3-5" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Tiggo 4*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__8promax.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-4" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item" for="sub-tab4-1">LX</label>
                                <label class="sub__tabs__item" for="sub-tab4-2">TXL FL</label>
                                <label class="sub__tabs__item" for="sub-tab4-3">VX</label>
                            </div>
                            <input class="tab-radio" id="sub-tab4-1" name="sub-group2" type="radio">
                            <div class="sub-tab-content"> 
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит LX*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__lx.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab4-2" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит TXL*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__txl.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab4-3" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит VX*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__vx.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-5" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item" for="sub-tab5-2">BESTURN X40</label>
                                <label class="sub__tabs__item" for="sub-tab5-3">BESTUNE T77</label>
                            </div>
                            <input class="tab-radio" id="sub-tab5-1" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит BESTURN X80*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__b80x.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab5-2" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит BESTURN X40*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__b40x.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab5-3" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит BESTUNE T77*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__77t.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-6" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item" for="sub-tab6-1">CS35PLUS</label>
                                <label class="sub__tabs__item" for="sub-tab6-2">CS55</label>
                                <label class="sub__tabs__item" for="sub-tab6-3">CS75FL</label>
                            </div>
                            <input class="tab-radio" id="sub-tab6-1" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит CS35 Plus*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__35.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab6-2" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит CS55*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__55.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab6-3" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="drive__phone" data-validate-field="tel" class="input__traid-in" name="phone" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" name="select-credit" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" name="credit-time" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" name="mounth_pay" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Кредит CS75FL*">
                                            <div class="popup__btn__flex">
                                                <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                            </div>
                                        </form>
                                    </section>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__75.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    <div class="container_site">
        <div class="container__descrip">
            <div class="special__est">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__est.php"
                    )
                ); ?>
                <div class="apply__content">
                    <ul class="apply__list">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__est__time.php"
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
                                "PATH" => "/include/credit__est__cli.php"
                            )
                        ); ?>
                    </ul>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__instruct__desc.php"
                    )
                ); ?>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/credit__instruct.php"
                )
            ); ?>
        </div>
    </div>
    </div>
    </section>
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
                "PATH" => "/include/credit__card.php"
            )
        ); ?>
        <div class="card__container">
            <ul class="card__list">
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__doc.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__age.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__city.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__reg.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__stage.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__inner.php"
                            )
                        ); ?>
                    </li>
                </div>
            </ul>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/credit__small.php"
                )
            ); ?>
        </div>
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
                "PATH" => "/include/credit__bank.php"
            )
        ); ?>
        <ul class="bank__logo__content">
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__vtb.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__zenit.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__sovk.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__uni.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__fast.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__sete.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__loco.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__ural.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__souz.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__opt.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__expo.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__tinkoff.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__euro.php"
                    )
                ); ?>
            </li>
        </ul>
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

<div class="popup_overlay"></div>
<div class="popup__container">
    <form id="popup__form" class="popup  form__js" name="popupIn" enctype="multipart/form-data" method="POST">
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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>