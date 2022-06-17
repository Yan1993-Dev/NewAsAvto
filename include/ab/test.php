<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/about.css");
?> <nav class="nav">
    <ul class="navigation">
        <li class="nav__item">
            <div class="nav__item__link" style="text-transform: uppercase;">
                Новые авто
            </div>
            <ul class="nav__nav">
                <li class="nav__nav__item"><a href="/novye-avto/index.php" class="nav__nav__link">Все автомобили</a> </li>
                <li class="nav__nav__item"><a href="/geely/index.php" class="nav__nav__link">GEELY</a></li>
                <li class="nav__nav__item"><a href="/haval/index.php" class="nav__nav__link">HAVAL</a></li>
                <li class="nav__nav__item"><a href="/chery/index.php" class="nav__nav__link">CHERY</a></li>
                <li class="nav__nav__item"><a href="/exeed/index.php" class="nav__nav__link">EXEED</a></li>
                <li class="nav__nav__item"><a href="/changan/index.php" class="nav__nav__link">CHANGAN</a></li>
                <li class="nav__nav__item"><a href="/faw/index.php" class="nav__nav__link">FAW</a></li>
                <li class="nav__nav__item"><a href="/gwm/index.php" class="nav__nav__link">GWM Pickup</a></li>
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
<div class="container_site">
    <section class="section__tabs">
        <div class="tabs">
            <div class="tabs__nav">
                <label class="tabs__nav-btn active" for="main-tab-1">О компании</label> <label class="tabs__nav-btn" for="main-tab-2">Наши сотрудники</label> <label class="tabs__nav-btn" for="main-tab-3">Сертификаты</label> <label class="tabs__nav-btn" for="main-tab-4">Достижения</label>
            </div>
            <input class="tab-radio" id="main-tab-1" name="main-group" type="radio" checked="checked">
            <div class="tab-content">
                <div class="sub-tabs-container">
                    <label class="sub__tabs__item__about" for="sub-tab-1">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about__text.php"
                            )
                        ); ?> </label>
                </div>
            </div>
        </div>
        <input class="tab-radio" id="main-tab-2" name="main-group" type="radio">
        <div class="tab-content">
            <div class="sub-tabs-container">
                <label class="sub__tabs__item__about" for="sub-tab-111">
                    <ul class="lead">
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__general.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__asist.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__cli.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__digital.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__event.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__grou__dir.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__credit.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__teh.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__after__sale.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                        <li class="lead__list">
                            <div class="lead__photo__list">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about__repair.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                    </ul>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/about__tlt.php"
                        )
                    ); ?> <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/about__north.php"
            )
        ); ?> <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/about__east.php"
            )
        ); ?> <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/about__south.php"
            )
        ); ?> <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/about__saratov.php"
            )
        ); ?>
                </label>
            </div>
        </div>
    </section>
</div>
<input class="tab-radio" id="main-tab-3" name="main-group" type="radio">
<div class="tab-content">
    <div class="sub-tabs-container">
        <!-- NOTE: due to id note below, remember to match the for--> <label class="sub__tabs__item__about" for="sub-tab3-1">
            <div class="category">
                <ul class="category__list">
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img alt="feedback" src="/local/templates/NewAsAvto/static/images/sertif___chery.jpg" class="category__image minimized">
                        </div>
                        <div class="category__title__wrap lead__title__block">
                            Сертификат дилера Chery в Саратове
                        </div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img alt="feedback" src="/local/templates/NewAsAvto/static/images/sertif__geely.jpg" class="category__image minimized">
                        </div>
                        <div class="category__title__wrap lead__title__block">
                            Сертификат дилера Geely в Самаре
                        </div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img alt="feedback" src="/local/templates/NewAsAvto/static/images/tm__chery.jpg" class="category__image minimized">
                        </div>
                        <div class="category__title__wrap lead__title__block">
                            Сертификат дилера Chery в Самаре и Тольятти
                        </div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img alt="feedback" src="/local/templates/NewAsAvto/static/images/haval_aeroport.jpg" class="category__image minimized">
                        </div>
                        <div class="category__title__wrap lead__title__block">
                            Сертификат дилера Haval в Самаре
                        </div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img alt="feedback" src="/local/templates/NewAsAvto/static/images/changan__sertif.jpg" class="category__image minimized">
                        </div>
                        <div class="category__title__wrap lead__title__block">
                            Сертификат дилера Changan в Самаре, Тольятти и Саратове
                        </div>
                    </li>
                </ul>
            </div>
        </label>
    </div>
</div>
<div class="container_site">
    <input class="tab-radio" id="main-tab-4" name="main-group" type="radio">
    <div class="tab-content">
        <div class="sub-tabs-container">
            <!-- NOTE: due to id note below, remember to match the for--> <label class="sub__tabs__item__about" for="sub-tab4-1">
                <p class="seo__title">
                    Достижения компании
                </p>
                <p class="seo__sub_title">
                    2010 - 2013 гг. – «АсАвто» является ключевым партнёром Украинского автомобилей бренда Bogdan. Региональные склады компании расположены в Тольятти, Краснодаре, Уфе и Перми. Две трети объема продаж автомобилей данного бренда в РФ приходилось на ГК «АсАвто»;
                </p>
                <p class="seo__sub_title">
                    2013 г. – «АсАвто» становится третьим официальным дилером Lifan в городе Тольятти. В последствии став единственным и самым крупным оф. дилером Lifan в городе, доказав свое преимущество в честной конкурентной борьбе;
                </p>
                <p class="seo__sub_title">
                    2014 г. – «АсАвто» становится региональным дилером автомобилей марки JAC в Приволжском федеральном округе. Менее чем за 6 месяцев общий объём продаж в регионе увеличивается в несколько раз.
                </p>
                <p class="seo__sub_title">
                    2015 г. – «АсАвто» вошел в пятерку лучших дилеров по продажам Lifan в России. Ежегодные продажи автомобилей Lifan перевалили за 500 автомобилей в месяц;
                </p>
                <p class="seo__sub_title">
                    2016 г. – «АсАвто» занимает лидирующие позиции в России по объему продаж Lifan;
                </p>
                <p class="seo__sub_title">
                    2017 г. – «АсАвто» становится лучшим дилером по продаже автомобилей Lifan в России.
                </p>
                <p class="seo__sub_title">
                    2018 г. – «АсАвто» получает награду «Лучший дилер по продажам» Chery в России.
                </p>
                <p class="seo__sub_title">
                    2019 г. – «АсАвто» получает награду «Лучший дилер по продажам» и «Лучший дилерский Маркетинг» Chery в России.
                </p>
                <p class="seo__sub_title">
                    2020 г. – «АсАвто» становится Лидером среди дилеров FAW по объему продаж, с долей в 12%, в России.
                </p>
                <p class="seo__sub_title">
                    2020 г. – «АсАвто» занимает Третье место по объему продаж Chery, вслед за Московскими дилерам, в России.
                </p>
                <p class="seo__sub_title">
                    2021 г. – «АсАвто» (ДЦ Самара, Аэропортовское ш.1ж) побеждает в номинации «Лучший Дилерский центр Geely 2020» в России.
                </p>
                <p class="seo__sub_title">
                    Дальше – больше! Вперёд к Новым вершинам!
                </p>
            </label>
        </div>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>