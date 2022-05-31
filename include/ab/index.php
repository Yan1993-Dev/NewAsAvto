<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/about.css");
?>
<nav class="nav">
    <ul class="navigation">
        <li class="nav__item"><a href="/novye-avto/index.php" class="nav__item__link">Новые авто</a>
            <ul class="nav__nav">
                <li class="nav__nav__item"><a href="/geely/index.php" class="nav__nav__link">GEELY</a></li>
                <li class="nav__nav__item"><a href="/haval/index.php" class="nav__nav__link">HAVAL</a></li>
                <li class="nav__nav__item"><a href="/chery/index.php" class="nav__nav__link">CHERY</a></li>
                <li class="nav__nav__item"><a href="/exeed/index.php" class="nav__nav__link">EXEED</a></li>
                <li class="nav__nav__item"><a href="/changan/index.php" class="nav__nav__link">CHANGAN</a></li>
                <li class="nav__nav__item"><a href="/faw/index.php" class="nav__nav__link">FAW</a></li>
                <li class="nav__nav__item"><a href="/gwm/index.php" class="nav__nav__link">GWM Pickup</a></li>
                <li class="nav__nav__item"><a href="/novye-avto/index.php" class="nav__nav__link">Все автомобили</a></li>
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
                <label class="tabs__nav-btn active" for="main-tab-1">О компании</label>
                <label class="tabs__nav-btn" for="main-tab-2">Наши сотрудники</label>
                <label class="tabs__nav-btn" for="main-tab-3">Сертификаты</label>
                <label class="tabs__nav-btn" for="main-tab-4">Достижения</label>
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
                        ); ?>
                    </label>
                </div>
            </div>
        </div>
        <input class="tab-radio" id="main-tab-2" name="main-group" type="radio" />
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
                                        "PATH" => "/include/about__reg.php"
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
                                        "PATH" => "/include/about__grou.php"
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
                                        "PATH" => "/include/about__finance.php"
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
                    ); ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/about__north.php"
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
                            "PATH" => "/include/about__east.php"
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
                            "PATH" => "/include/about__south.php"
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
                            "PATH" => "/include/about__saratov.php"
                        )
                    ); ?>
                </label>

            </div>
        </div>
</div>
</div>
<input class="tab-radio" id="main-tab-3" name="main-group" type="radio" />
<div class="tab-content">
    <div class="sub-tabs-container">
        <!-- NOTE: due to id note below, remember to match the for-->
        <label class="sub__tabs__item__about" for="sub-tab3-1">
            <div class="category">
                <ul class="category__list">
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif.jpg" alt="feedback">
                        </div>
                        <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif___chery.jpg" alt="feedback">
                        </div>
                        <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                    </li>
                    <!-- <li class="category__item content__lead__block">
                            <div class="image__wrapper">
                                <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif__jac.jpg" alt="feedback">
                            </div>
                            <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                        </li> -->
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif__geely.jpg" alt="feedback">
                        </div>
                        <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/tm__chery.jpg" alt="feedback">
                        </div>
                        <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/best__chery__sale.jpeg" alt="feedback">
                        </div>
                        <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif__d.jpeg" alt="feedback">
                        </div>
                        <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif__haval.jpg" alt="feedback">
                        </div>
                        <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                    </li>
                    <li class="category__item content__lead__block">
                        <div class="image__wrapper">
                            <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/changan__sertif.jpg" alt="feedback">
                        </div>
                        <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                    </li>
                </ul>
            </div>
        </label>
    </div>
</div>
<div class="container_site">
    <input class="tab-radio" id="main-tab-4" name="main-group" type="radio" />
    <div class="tab-content">
        <div class="sub-tabs-container">
            <!-- NOTE: due to id note below, remember to match the for-->
            <label class="sub__tabs__item__about" for="sub-tab4-1">
                <p class="seo__title">Достижения компании</p>
                <p class="seo__sub_title">2010 - 2013 гг. – «АсАвто» является ключевым партнёром Украинского автомобилей бренда Bogdan. Региональные склады компании расположены в Тольятти, Краснодаре, Уфе и Перми. Две трети объема продаж автомобилей данного бренда в РФ приходилось на ГК «АсАвто»;</p>
                <p class="seo__sub_title">2013 г. – «АсАвто» становится третьим официальным дилером Lifan в городе Тольятти. В последствии став единственным и самым крупным оф. дилером Lifan в городе, доказав свое преимущество в честной конкурентной борьбе;</p>
                <p class="seo__sub_title">2014 г. – «АсАвто» становится региональным дилером автомобилей марки JAC в Приволжском федеральном округе. Менее чем за 6 месяцев общий объём продаж в регионе увеличивается в несколько раз.</p>
                <p class="seo__sub_title">2015 г. – «АсАвто» вошел в пятерку лучших дилеров по продажам Lifan в России. Ежегодные продажи автомобилей Lifan перевалили за 500 автомобилей в месяц;</p>
                <p class="seo__sub_title">2016 г. – «АсАвто» занимает лидирующие позиции в России по объему продаж Lifan;</p>
                <p class="seo__sub_title">2017 г. – «АсАвто» становится лучшим дилером по продаже автомобилей Lifan в России.</p>
                <p class="seo__sub_title">2018 г. – «АсАвто» получает награду «Лучший дилер по продажам» Chery в России.</p>
                <p class="seo__sub_title">2019 г. – «АсАвто» получает награду «Лучший дилер по продажам» и «Лучший дилерский Маркетинг» Chery в России.</p>
                <p class="seo__sub_title">2020 г. – «АсАвто» становится Лидером среди дилеров FAW по объему продаж, с долей в 12%, в России.</p>
                <p class="seo__sub_title">2020 г. – «АсАвто» занимает Третье место по объему продаж Chery, вслед за Московскими дилерам, в России.</p>
                <p class="seo__sub_title">2021 г. – «АсАвто» (ДЦ Самара, Аэропортовское ш.1ж) побеждает в номинации «Лучший Дилерский центр Geely 2020» в России.</p>
                <p class="seo__sub_title">Дальше – больше! Вперёд к Новым вершинам!</p>
            </label>
        </div>
    </div>
</div>
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