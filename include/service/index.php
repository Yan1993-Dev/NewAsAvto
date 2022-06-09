<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/service.css");
?>
<main>
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
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/service__title.php"
        )
    ); ?>
    <nav class="nav__bar">
        <ul class="nav__bar__ul">
            <li class="nav__bar__li"><a href="/servis/index.php" class="nav__bar__item color__target">Техническое обслуживание</a></li>
            <li class="nav__bar__li"><a href="/remont-avtomobilya/index.php" class="nav__bar__item color__notarget">Ремонт автомобиля</a></li>
            <li class="nav__bar__li"><a href="/aktsii-servisa/index.php" class="nav__bar__item color__notarget">Акции сервиса</a></li>
            <li class="nav__bar__li"><a href="/skhema-proezda/index.php" class="nav__bar__item color__notarget">Схема проезда</a></li>
        </ul>
    </nav>
    <section class="section__tabs">
    </section>
    </div>
    </div>
    <div class="container_site">
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
                            "PATH" => "/include/service__geely.php"
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
                            "PATH" => "/include/service__haval.php"
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
                            "PATH" => "/include/service__chery.php"
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
                            "PATH" => "/include/service__exeed.php"
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
                            "PATH" => "/include/service__changan.php"
                        )
                    ); ?>
                </div>
                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-1" name="main-group" type="radio" checked="checked">
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <label class="sub__tabs__item" for="sub-tab-1">ATLAS 2.0 2WD MT</label>
                        <label class="sub__tabs__item" for="sub-tab-2">ATLAS 2.4 2WD AT</label>
                        <label class="sub__tabs__item" for="sub-tab-3">ATLAS 2.4 4WD AT</label>
                        <label class="sub__tabs__item" for="sub-tab-4">ATLAS 1.8 2WD AT</label>
                        <label class="sub__tabs__item" for="sub-tab-5">ATLAS 1.8 4WD AT</label>
                        <label class="sub__tabs__item" for="sub-tab-6">COOLRAY 1.5 DCT</label>
                        <label class="sub__tabs__item" for="sub-tab-7">TUGELLA 2.0 4WD AT</label>
                        <label class="sub__tabs__item" for="sub-tab-8">ATLAS PRO 1.5 2WD AT</label>
                        <label class="sub__tabs__item" for="sub-tab-9">ATLAS PRO 1.5 4WD DCT</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab-1" name="sub-group" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">12 723</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 545</td>
                                <td class="price__item">2 545</td>
                                <td class="price__item">10 178</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 333</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 067</td>
                                <td class="price__item">4 067</td>
                                <td class="price__item">16 266</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">17 362</td>
                                <td class="price__item">673</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 338</td>
                                <td class="price__item">4 011</td>
                                <td class="price__item">13 351</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">44 945</td>
                                <td class="price__item">1 001</td>
                                <td class="price__item">-</td>
                                <td class="price__item">8 789</td>
                                <td class="price__item">9 790</td>
                                <td class="price__item">35 155</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">12 723</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 288</td>
                                <td class="price__item">3 570</td>
                                <td class="price__item">9 153</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">24 972</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 901</td>
                                <td class="price__item">4 614</td>
                                <td class="price__item">6 515</td>
                                <td class="price__item">18 457</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">12 723</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 288</td>
                                <td class="price__item">3 570</td>
                                <td class="price__item">9 153</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">44 945</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 431</td>
                                <td class="price__item">8 503</td>
                                <td class="price__item">10 934</td>
                                <td class="price__item">34 011</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">17 362</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 635</td>
                                <td class="price__item">3 145</td>
                                <td class="price__item">4 781</td>
                                <td class="price__item">12 581</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">45 811</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 652</td>
                                <td class="price__item">8 632</td>
                                <td class="price__item">11 284</td>
                                <td class="price__item">34 527</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">53 740</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 006</td>
                                <td class="price__item">10 147</td>
                                <td class="price__item">13 152</td>
                                <td class="price__item">40 587</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">53 740</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 006</td>
                                <td class="price__item">10 147</td>
                                <td class="price__item">13 152</td>
                                <td class="price__item">40 587</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">12 723</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 288</td>
                                <td class="price__item">3 570</td>
                                <td class="price__item">9 153</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">20 333</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 547</td>
                                <td class="price__item">3 757</td>
                                <td class="price__item">5 304</td>
                                <td class="price__item">15 029</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">17 362</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 635</td>
                                <td class="price__item">3 145</td>
                                <td class="price__item">4 781</td>
                                <td class="price__item">12 581</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab-2" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0(2000 км/3 мес)</td>
                                <td class="price__item">7 794</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 559</td>
                                <td class="price__item">1 559</td>
                                <td class="price__item">6 235</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 559</td>
                                <td class="price__item">1 559</td>
                                <td class="price__item">6 235</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 439</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 088</td>
                                <td class="price__item">4 088</td>
                                <td class="price__item">16 351</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">18 948</td>
                                <td class="price__item">710</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 648</td>
                                <td class="price__item">4 357</td>
                                <td class="price__item">14 591</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">27 398</td>
                                <td class="price__item">1 001</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 279</td>
                                <td class="price__item">6 280</td>
                                <td class="price__item">21 117</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 075</td>
                                <td class="price__item">4 666</td>
                                <td class="price__item">12 299</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">23 238</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 077</td>
                                <td class="price__item">4 232</td>
                                <td class="price__item">6 310</td>
                                <td class="price__item">16 929</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 075</td>
                                <td class="price__item">4 666</td>
                                <td class="price__item">12 299</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">27 398</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 431</td>
                                <td class="price__item">4 993</td>
                                <td class="price__item">7 424</td>
                                <td class="price__item">19 973</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">18 948</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 445</td>
                                <td class="price__item">5 169</td>
                                <td class="price__item">13 779</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">20 439</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 075</td>
                                <td class="price__item">4 666</td>
                                <td class="price__item">12 299</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 075</td>
                                <td class="price__item">4 666</td>
                                <td class="price__item">12 299</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">29 864</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 723</td>
                                <td class="price__item">5 228</td>
                                <td class="price__item">8 951</td>
                                <td class="price__item">20 913</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">30 843</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">5 850</td>
                                <td class="price__item">7 442</td>
                                <td class="price__item">23 401</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">20 439</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">3 725</td>
                                <td class="price__item">5 538</td>
                                <td class="price__item">14 901</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">18 948</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 445</td>
                                <td class="price__item">5 169</td>
                                <td class="price__item">13 779</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-3" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">7 794</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 559</td>
                                <td class="price__item">1 559</td>
                                <td class="price__item">6 235</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 393</td>
                                <td class="price__item">3 393</td>
                                <td class="price__item">13 572</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 439</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 088</td>
                                <td class="price__item">4 088</td>
                                <td class="price__item">16 351</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">18 948</td>
                                <td class="price__item">710</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 648</td>
                                <td class="price__item">4 357</td>
                                <td class="price__item">14 591</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">27 398</td>
                                <td class="price__item">1 001</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 279</td>
                                <td class="price__item">6 280</td>
                                <td class="price__item">21 117</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 075</td>
                                <td class="price__item">4 666</td>
                                <td class="price__item">12 299</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">23 238</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 077</td>
                                <td class="price__item">4 232</td>
                                <td class="price__item">6 310</td>
                                <td class="price__item">16 929</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 075</td>
                                <td class="price__item">4 666</td>
                                <td class="price__item">12 299</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">27 398</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 431</td>
                                <td class="price__item">4 993</td>
                                <td class="price__item">7 424</td>
                                <td class="price__item">19 973</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">18 948</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 445</td>
                                <td class="price__item">5 169</td>
                                <td class="price__item">13 779</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">20 439</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">3 725</td>
                                <td class="price__item">5 538</td>
                                <td class="price__item">14 901</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 075</td>
                                <td class="price__item">4 666</td>
                                <td class="price__item">12 299</td>
                            </tr>

                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">40 784</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 315</td>
                                <td class="price__item">7 494</td>
                                <td class="price__item">10 809</td>
                                <td class="price__item">29 975</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">16 965</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 075</td>
                                <td class="price__item">4 666</td>
                                <td class="price__item">12 299</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">20 439</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">3 725</td>
                                <td class="price__item">5 538</td>
                                <td class="price__item">14 901</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">18 948</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 445</td>
                                <td class="price__item">5 169</td>
                                <td class="price__item">13 779</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-4" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 540</td>
                                <td class="price__item">3 540</td>
                                <td class="price__item">14 160</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">22 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 457</td>
                                <td class="price__item">4 457</td>
                                <td class="price__item">17 830</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">19 682</td>
                                <td class="price__item">710</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 794</td>
                                <td class="price__item">4 504</td>
                                <td class="price__item">15 178</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">29 246</td>
                                <td class="price__item">1 001</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 649</td>
                                <td class="price__item">6 650</td>
                                <td class="price__item">22 596</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 222</td>
                                <td class="price__item">4 813</td>
                                <td class="price__item">12 887</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">32 204</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 254</td>
                                <td class="price__item">5 990</td>
                                <td class="price__item">8 244</td>
                                <td class="price__item">23 960</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 222</td>
                                <td class="price__item">4 813</td>
                                <td class="price__item">12 887</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">29 246</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 431</td>
                                <td class="price__item">5 363</td>
                                <td class="price__item">7 794</td>
                                <td class="price__item">21 452</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">19 682</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 592</td>
                                <td class="price__item">5 316</td>
                                <td class="price__item">14 367</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">22 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">4 095</td>
                                <td class="price__item">5 907</td>
                                <td class="price__item">16 380</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 222</td>
                                <td class="price__item">4 813</td>
                                <td class="price__item">12 887</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">39 162</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 873</td>
                                <td class="price__item">7 258</td>
                                <td class="price__item">10 131</td>
                                <td class="price__item">29 031</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 222</td>
                                <td class="price__item">4 813</td>
                                <td class="price__item">12 887</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">22 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">4 095</td>
                                <td class="price__item">5 907</td>
                                <td class="price__item">16 380</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">19 683</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 592</td>
                                <td class="price__item">5 316</td>
                                <td class="price__item">14 367</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-5" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 540</td>
                                <td class="price__item">3 540</td>
                                <td class="price__item">14 160</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">22 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 457</td>
                                <td class="price__item">4 457</td>
                                <td class="price__item">17 830</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">19 682</td>
                                <td class="price__item">710</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 794</td>
                                <td class="price__item">4 504</td>
                                <td class="price__item">15 178</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">29 246</td>
                                <td class="price__item">1 001</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 649</td>
                                <td class="price__item">6 650</td>
                                <td class="price__item">22 596</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 222</td>
                                <td class="price__item">4 813</td>
                                <td class="price__item">12 887</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">32 204</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 254</td>
                                <td class="price__item">5 990</td>
                                <td class="price__item">8 244</td>
                                <td class="price__item">23 960</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 222</td>
                                <td class="price__item">4 813</td>
                                <td class="price__item">12 887</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">29 246</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 431</td>
                                <td class="price__item">5 363</td>
                                <td class="price__item">7 794</td>
                                <td class="price__item">21 452</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">19 683</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 592</td>
                                <td class="price__item">5 316</td>
                                <td class="price__item">14 367</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">22 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">4 095</td>
                                <td class="price__item">5 907</td>
                                <td class="price__item">16 380</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 222</td>
                                <td class="price__item">4 813</td>
                                <td class="price__item">12 887</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">39 162</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 873</td>
                                <td class="price__item">7 258</td>
                                <td class="price__item">10 131</td>
                                <td class="price__item">29 031</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">17 700</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 591</td>
                                <td class="price__item">3 222</td>
                                <td class="price__item">4 813</td>
                                <td class="price__item">12 887</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">22 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">4 095</td>
                                <td class="price__item">5 907</td>
                                <td class="price__item">16 380</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">19 683</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 592</td>
                                <td class="price__item">5 316</td>
                                <td class="price__item">14 367</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-6" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">12 417</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 483</td>
                                <td class="price__item">2 483</td>
                                <td class="price__item">9 934</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">18 299</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 660</td>
                                <td class="price__item">3 660</td>
                                <td class="price__item">14 640</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">15 325</td>
                                <td class="price__item">601</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 945</td>
                                <td class="price__item">3 546</td>
                                <td class="price__item">11 780</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">29 948</td>
                                <td class="price__item">983</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 793</td>
                                <td class="price__item">6 776</td>
                                <td class="price__item">23 172</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">12 417</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 227</td>
                                <td class="price__item">3 509</td>
                                <td class="price__item">8 908</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">21 207</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 724</td>
                                <td class="price__item">3 897</td>
                                <td class="price__item">5 621</td>
                                <td class="price__item">15 587</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">12 417</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 227</td>
                                <td class="price__item">3 509</td>
                                <td class="price__item">8 908</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">29 948</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 387</td>
                                <td class="price__item">5 512</td>
                                <td class="price__item">7 899</td>
                                <td class="price__item">22 049</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">26 433</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 856</td>
                                <td class="price__item">4 915</td>
                                <td class="price__item">6 772</td>
                                <td class="price__item">19 662</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">44 422</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 359</td>
                                <td class="price__item">8 213</td>
                                <td class="price__item">11 572</td>
                                <td class="price__item">32 850</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">12 417</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 227</td>
                                <td class="price__item">3 509</td>
                                <td class="price__item">8 908</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">36 704</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 652</td>
                                <td class="price__item">6 810</td>
                                <td class="price__item">9 462</td>
                                <td class="price__item">27 241</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">12 417</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 227</td>
                                <td class="price__item">3 509</td>
                                <td class="price__item">8 908</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">18 299</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 547</td>
                                <td class="price__item">3 350</td>
                                <td class="price__item">4 897</td>
                                <td class="price__item">13 402</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">15 325</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 459</td>
                                <td class="price__item">2 773</td>
                                <td class="price__item">4 232</td>
                                <td class="price__item">11 093</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-7" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">12 723</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 545</td>
                                <td class="price__item">2 545</td>
                                <td class="price__item">10 178</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 333</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 067</td>
                                <td class="price__item">4 067</td>
                                <td class="price__item">16 266</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">17 362</td>
                                <td class="price__item">673</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 338</td>
                                <td class="price__item">4 011</td>
                                <td class="price__item">13 351</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">44 945</td>
                                <td class="price__item">1 001</td>
                                <td class="price__item">-</td>
                                <td class="price__item">8 789</td>
                                <td class="price__item">9 790</td>
                                <td class="price__item">35 155</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">12 723</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 288</td>
                                <td class="price__item">3 570</td>
                                <td class="price__item">9 153</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">24 972</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 901</td>
                                <td class="price__item">4 614</td>
                                <td class="price__item">6 515</td>
                                <td class="price__item">18 457</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">12 723</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 288</td>
                                <td class="price__item">3 570</td>
                                <td class="price__item">9 153</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">44 945</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 431</td>
                                <td class="price__item">8 503</td>
                                <td class="price__item">10 934</td>
                                <td class="price__item">34 011</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">17 362</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 635</td>
                                <td class="price__item">3 145</td>
                                <td class="price__item">4 781</td>
                                <td class="price__item">12 581</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">45 811</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 652</td>
                                <td class="price__item">8 632</td>
                                <td class="price__item">11 284</td>
                                <td class="price__item">34 527</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">53 740</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 006</td>
                                <td class="price__item">10 147</td>
                                <td class="price__item">13 152</td>
                                <td class="price__item">40 587</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">53 740</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 006</td>
                                <td class="price__item">10 147</td>
                                <td class="price__item">13 152</td>
                                <td class="price__item">40 587</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">12 723</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 282</td>
                                <td class="price__item">2 288</td>
                                <td class="price__item">3 570</td>
                                <td class="price__item">9 153</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">20 333</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 547</td>
                                <td class="price__item">3 757</td>
                                <td class="price__item">5 304</td>
                                <td class="price__item">15 029</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">17 362</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 635</td>
                                <td class="price__item">3 145</td>
                                <td class="price__item">4 781</td>
                                <td class="price__item">12 581</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-8" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">9 427</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 885</td>
                                <td class="price__item">1 885</td>
                                <td class="price__item">7 542</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 457</td>
                                <td class="price__item">2 457</td>
                                <td class="price__item">9 830</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 146</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 029</td>
                                <td class="price__item">4 029</td>
                                <td class="price__item">16 116</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">582</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 060</td>
                                <td class="price__item">3 643</td>
                                <td class="price__item">12 241</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">30 413</td>
                                <td class="price__item">1 056</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 871</td>
                                <td class="price__item">6 927</td>
                                <td class="price__item">23 486</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">23 742</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">4 386</td>
                                <td class="price__item">6 198</td>
                                <td class="price__item">17 543</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">31 434</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 475</td>
                                <td class="price__item">5 792</td>
                                <td class="price__item">8 267</td>
                                <td class="price__item">23 167</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 414</td>
                                <td class="price__item">2 894</td>
                                <td class="price__item">4 308</td>
                                <td class="price__item">11 575</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">43 408</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 475</td>
                                <td class="price__item">8 187</td>
                                <td class="price__item">10 662</td>
                                <td class="price__item">32 746</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">45 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 050</td>
                                <td class="price__item">8 410</td>
                                <td class="price__item">11 460</td>
                                <td class="price__item">33 640</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">20 146</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 635</td>
                                <td class="price__item">3 702</td>
                                <td class="price__item">5 337</td>
                                <td class="price__item">14 808</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 414</td>
                                <td class="price__item">2 894</td>
                                <td class="price__item">4 308</td>
                                <td class="price__item">11 575</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-9" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">9 427</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 885</td>
                                <td class="price__item">1 885</td>
                                <td class="price__item">7 542</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 457</td>
                                <td class="price__item">2 457</td>
                                <td class="price__item">9 830</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 146</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 029</td>
                                <td class="price__item">4 029</td>
                                <td class="price__item">16 116</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">582</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 060</td>
                                <td class="price__item">3 643</td>
                                <td class="price__item">12 241</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">31 434</td>
                                <td class="price__item">1 019</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 083</td>
                                <td class="price__item">7 102</td>
                                <td class="price__item">24 332</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">23 742</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">4 386</td>
                                <td class="price__item">6 198</td>
                                <td class="price__item">17 543</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">31 434</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 475</td>
                                <td class="price__item">5 792</td>
                                <td class="price__item">8 267</td>
                                <td class="price__item">23 167</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 414</td>
                                <td class="price__item">2 894</td>
                                <td class="price__item">4 308</td>
                                <td class="price__item">11 575</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">45 228</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 094</td>
                                <td class="price__item">8 427</td>
                                <td class="price__item">11 521</td>
                                <td class="price__item">33 707</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">45 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 050</td>
                                <td class="price__item">8 410</td>
                                <td class="price__item">11 460</td>
                                <td class="price__item">33 640</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">20 146</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 635</td>
                                <td class="price__item">3 702</td>
                                <td class="price__item">5 337</td>
                                <td class="price__item">14 808</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 414</td>
                                <td class="price__item">2 894</td>
                                <td class="price__item">4 308</td>
                                <td class="price__item">11 575</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <input class="tab-radio" id="main-tab-2" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <label class="sub__tabs__item" for="sub-tab2-1">F7/F7X 1.5 2WD</label>
                        <label class="sub__tabs__item" for="sub-tab2-2">F7/F7X 1.5 4WD</label>
                        <label class="sub__tabs__item" for="sub-tab2-3">F7/F7X 2.0 2WD</label>
                        <label class="sub__tabs__item" for="sub-tab2-4">F7/F7X 2.0 4WD</label>
                        <label class="sub__tabs__item" for="sub-tab2-5">JOLION 2WD MT</label>
                        <label class="sub__tabs__item" for="sub-tab2-6">JOLION 2WD AT</label>
                        <label class="sub__tabs__item" for="sub-tab2-7">JOLION 4WD AT</label>
                    </div>
                    <input class="tab-radio" id="sub-tab2-1" name="sub-group2" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">17 993</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 599</td>
                                <td class="price__item">3 599</td>
                                <td class="price__item">14 394</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">21 748</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 350</td>
                                <td class="price__item">4 350</td>
                                <td class="price__item">17 398</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">21 067</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 485</td>
                                <td class="price__item">7 125</td>
                                <td class="price__item">13 941</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">23 712</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 728</td>
                                <td class="price__item">8 798</td>
                                <td class="price__item">14 913</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">43 203</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 050</td>
                                <td class="price__item">6 431</td>
                                <td class="price__item">17 481</td>
                                <td class="price__item">25 722</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">29 763</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">4 939</td>
                                <td class="price__item">10 009</td>
                                <td class="price__item">19 754</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">17 993</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">2 871</td>
                                <td class="price__item">6 511</td>
                                <td class="price__item">11 482</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">23 712</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">3 728</td>
                                <td class="price__item">8 798</td>
                                <td class="price__item">14 913</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">25 391</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 160</td>
                                <td class="price__item">4 246</td>
                                <td class="price__item">8 406</td>
                                <td class="price__item">16 985</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">46 958</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 830</td>
                                <td class="price__item">7 026</td>
                                <td class="price__item">18 856</td>
                                <td class="price__item">28 102</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">17 993</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">2 871</td>
                                <td class="price__item">6 511</td>
                                <td class="price__item">11 482</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">31 727</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 720</td>
                                <td class="price__item">5 201</td>
                                <td class="price__item">10 921</td>
                                <td class="price__item">20 805</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">17 993</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">2 871</td>
                                <td class="price__item">6 511</td>
                                <td class="price__item">11 482</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">21 748</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 420</td>
                                <td class="price__item">3 466</td>
                                <td class="price__item">7 886</td>
                                <td class="price__item">13 862</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">46 277</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 050</td>
                                <td class="price__item">7 045</td>
                                <td class="price__item">18 095</td>
                                <td class="price__item">28 182</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab2-2" name="sub-group2" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">17 993</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 599</td>
                                <td class="price__item">3 599</td>
                                <td class="price__item">14 394</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">21 748</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 350</td>
                                <td class="price__item">4 350</td>
                                <td class="price__item">17 398</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">21 067</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 485</td>
                                <td class="price__item">7 125</td>
                                <td class="price__item">13 941</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">23 712</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 728</td>
                                <td class="price__item">8 798</td>
                                <td class="price__item">14 913</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">43 203</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 050</td>
                                <td class="price__item">6 431</td>
                                <td class="price__item">17 481</td>
                                <td class="price__item">25 722</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">29 763</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">4 939</td>
                                <td class="price__item">10 009</td>
                                <td class="price__item">19 754</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">17 993</td>
                                <td class="price__item">- </td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">2 871</td>
                                <td class="price__item">6 511</td>
                                <td class="price__item">11 482</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">23 712</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">3 728</td>
                                <td class="price__item">8 798</td>
                                <td class="price__item">14 913</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">25 391</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 160</td>
                                <td class="price__item">4 246</td>
                                <td class="price__item">8 406</td>
                                <td class="price__item">16 985</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">46 958</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 830</td>
                                <td class="price__item">7 026</td>
                                <td class="price__item">18 856</td>
                                <td class="price__item">28 102</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">17 993</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">2 871</td>
                                <td class="price__item">6 511</td>
                                <td class="price__item">11 482</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">31 727</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 720</td>
                                <td class="price__item">5 201</td>
                                <td class="price__item">10 921</td>
                                <td class="price__item">20 805</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">17 993</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">2 871</td>
                                <td class="price__item">6 511</td>
                                <td class="price__item">11 482</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">21 748</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 420</td>
                                <td class="price__item">3 466</td>
                                <td class="price__item">7 886</td>
                                <td class="price__item">13 862</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">46 277</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 050</td>
                                <td class="price__item">7 045</td>
                                <td class="price__item">18 095</td>
                                <td class="price__item">28 182</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab2-3" name="sub-group2" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">11 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 220</td>
                                <td class="price__item">2 220</td>
                                <td class="price__item">8 880</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">14 855</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 971</td>
                                <td class="price__item">2 971</td>
                                <td class="price__item">11 884</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">14 174</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 107</td>
                                <td class="price__item">5 747</td>
                                <td class="price__item">8 427</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">16 819</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 350</td>
                                <td class="price__item">7 420</td>
                                <td class="price__item">9 399</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">36 311</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 050</td>
                                <td class="price__item">5 052</td>
                                <td class="price__item">16 102</td>
                                <td class="price__item">20 208</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">51 021</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">9 190</td>
                                <td class="price__item">14 260</td>
                                <td class="price__item">36 760</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">11 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">1 492</td>
                                <td class="price__item">5 132</td>
                                <td class="price__item">5 968</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">16 819</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">2 350</td>
                                <td class="price__item">7 420</td>
                                <td class="price__item">9 399</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">21 204</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 680</td>
                                <td class="price__item">3 305</td>
                                <td class="price__item">7 985</td>
                                <td class="price__item">13 219</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">40 066</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 830</td>
                                <td class="price__item">5 647</td>
                                <td class="price__item">17 477</td>
                                <td class="price__item">22 588</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">11 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">1 492</td>
                                <td class="price__item">5 132</td>
                                <td class="price__item">5 968</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">27 724</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 720</td>
                                <td class="price__item">4 401</td>
                                <td class="price__item">10 121</td>
                                <td class="price__item">17 603</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">11 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">1 492</td>
                                <td class="price__item">5 132</td>
                                <td class="price__item">5 968</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">14 855</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 420</td>
                                <td class="price__item">2 087</td>
                                <td class="price__item">6 507</td>
                                <td class="price__item">8 348</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">39 385</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 050</td>
                                <td class="price__item">5 667</td>
                                <td class="price__item">16 717</td>
                                <td class="price__item">22 668</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab2-4" name="sub-group2" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">11 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 220</td>
                                <td class="price__item">2 220</td>
                                <td class="price__item">8 880</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">14 855</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 971</td>
                                <td class="price__item">2 971</td>
                                <td class="price__item">11 884</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">14 174</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 107</td>
                                <td class="price__item">5 747</td>
                                <td class="price__item">8 427</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">16 819</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 350</td>
                                <td class="price__item">7 420</td>
                                <td class="price__item">9 399</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">36 311</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 050</td>
                                <td class="price__item">5 052</td>
                                <td class="price__item">16 102</td>
                                <td class="price__item">20 208</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">51 021</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">9 190</td>
                                <td class="price__item">14 260</td>
                                <td class="price__item">36 760</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">11 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">1 492</td>
                                <td class="price__item">5 132</td>
                                <td class="price__item">5 968</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">16 819</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 070</td>
                                <td class="price__item">2 350</td>
                                <td class="price__item">7 420</td>
                                <td class="price__item">9 399</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">21 204</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 680</td>
                                <td class="price__item">3 305</td>
                                <td class="price__item">7 985</td>
                                <td class="price__item">13 219</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">40 066</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 830</td>
                                <td class="price__item">5 647</td>
                                <td class="price__item">17 477</td>
                                <td class="price__item">22 588</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">11 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">1 492</td>
                                <td class="price__item">5 132</td>
                                <td class="price__item">5 968</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">27 724</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 720</td>
                                <td class="price__item">4 401</td>
                                <td class="price__item">10 121</td>
                                <td class="price__item">17 603</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">11 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">1 492</td>
                                <td class="price__item">5 132</td>
                                <td class="price__item">5 968</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">14 855</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 420</td>
                                <td class="price__item">2 087</td>
                                <td class="price__item">6 507</td>
                                <td class="price__item">8 348</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">39 385</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 050</td>
                                <td class="price__item">5 667</td>
                                <td class="price__item">16 717</td>
                                <td class="price__item">22 668</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab2-5" name="sub-group2" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">22 661</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 532</td>
                                <td class="price__item">4 532</td>
                                <td class="price__item">18 129</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">23 213</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 643</td>
                                <td class="price__item">4 643</td>
                                <td class="price__item">18 571</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">21 064</td>
                                <td class="price__item">4 420</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 329</td>
                                <td class="price__item">7 749</td>
                                <td class="price__item">13 315</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">26 774</td>
                                <td class="price__item">5 200</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 315</td>
                                <td class="price__item">9 515</td>
                                <td class="price__item">17 259</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">28 884</td>
                                <td class="price__item">-</td>
                                <td class="price__item">9 750</td>
                                <td class="price__item">3 827</td>
                                <td class="price__item">13 577</td>
                                <td class="price__item">15 307</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">25 177</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">3 943</td>
                                <td class="price__item">9 403</td>
                                <td class="price__item">15 774</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">23 777</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 160</td>
                                <td class="price__item">3 923</td>
                                <td class="price__item">8 083</td>
                                <td class="price__item">15 693</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">23 213</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 810</td>
                                <td class="price__item">3 681</td>
                                <td class="price__item">8 491</td>
                                <td class="price__item">14 723</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">21 064</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 420</td>
                                <td class="price__item">3 329</td>
                                <td class="price__item">7 749</td>
                                <td class="price__item">13 315</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">36 558</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 180</td>
                                <td class="price__item">5 076</td>
                                <td class="price__item">16 256</td>
                                <td class="price__item">20 303</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab2-6" name="sub-group2" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">19 400</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 880</td>
                                <td class="price__item">3 880</td>
                                <td class="price__item">15 520</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">23 213</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 643</td>
                                <td class="price__item">4 643</td>
                                <td class="price__item">18 571</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">21 064</td>
                                <td class="price__item">4 420</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 329</td>
                                <td class="price__item">7 749</td>
                                <td class="price__item">13 315</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">23 213</td>
                                <td class="price__item">4 810</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 681</td>
                                <td class="price__item">8 491</td>
                                <td class="price__item">14 723</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">47 464</td>
                                <td class="price__item">-</td>
                                <td class="price__item">10 530</td>
                                <td class="price__item">7 387</td>
                                <td class="price__item">17 917</td>
                                <td class="price__item">29 547</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">25 177</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">3 943</td>
                                <td class="price__item">9 403</td>
                                <td class="price__item">15 774</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">20 736</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 290</td>
                                <td class="price__item">3 289</td>
                                <td class="price__item">7 579</td>
                                <td class="price__item">13 157</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">23 213</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 810</td>
                                <td class="price__item">3 681</td>
                                <td class="price__item">8 491</td>
                                <td class="price__item">14 723</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">21 064</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 420</td>
                                <td class="price__item">3 329</td>
                                <td class="price__item">7 749</td>
                                <td class="price__item">13 315</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">51 578</td>
                                <td class="price__item">-</td>
                                <td class="price__item">11 570</td>
                                <td class="price__item">8 002</td>
                                <td class="price__item">19 572</td>
                                <td class="price__item">32 006</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab2-7" name="sub-group2" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">9 427</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 885</td>
                                <td class="price__item">1 885</td>
                                <td class="price__item">7 542</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 457</td>
                                <td class="price__item">2 457</td>
                                <td class="price__item">9 830</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 146</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 029</td>
                                <td class="price__item">4 029</td>
                                <td class="price__item">16 116</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">582</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 060</td>
                                <td class="price__item">3 643</td>
                                <td class="price__item">12 241</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">31 434</td>
                                <td class="price__item">1 019</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 083</td>
                                <td class="price__item">7 102</td>
                                <td class="price__item">24 332</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">23 742</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 812</td>
                                <td class="price__item">4 386</td>
                                <td class="price__item">6 198</td>
                                <td class="price__item">17 543</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">31 434</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 475</td>
                                <td class="price__item">5 792</td>
                                <td class="price__item">8 267</td>
                                <td class="price__item">23 167</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 414</td>
                                <td class="price__item">2 894</td>
                                <td class="price__item">4 308</td>
                                <td class="price__item">11 575</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">45 228</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 094</td>
                                <td class="price__item">8 427</td>
                                <td class="price__item">11 521</td>
                                <td class="price__item">33 707</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-11 (110000 км/132 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-12 (120000 км/144 мес)</td>
                                <td class="price__item">45 100</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 050</td>
                                <td class="price__item">8 410</td>
                                <td class="price__item">11 460</td>
                                <td class="price__item">33 640</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-13 (130000 км/156 мес)</td>
                                <td class="price__item">12 287</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 238</td>
                                <td class="price__item">2 210</td>
                                <td class="price__item">3 448</td>
                                <td class="price__item">8 840</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-14 (140000 км/168 мес)</td>
                                <td class="price__item">20 146</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 635</td>
                                <td class="price__item">3 702</td>
                                <td class="price__item">5 337</td>
                                <td class="price__item">14 808</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-15 (150000 км/180 мес)</td>
                                <td class="price__item">15 883</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 414</td>
                                <td class="price__item">2 894</td>
                                <td class="price__item">4 308</td>
                                <td class="price__item">11 575</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-3" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item" for="sub-tab3-1">Tiggo 4 MT</label>
                        <label class="sub__tabs__item" for="sub-tab3-2">Tiggo 4 CVT</label>
                        <label class="sub__tabs__item" for="sub-tab3-3">Tiggo 4 DCT</label>
                        <label class="sub__tabs__item" for="sub-tab3-4">Tiggo 7 PRO 1.5 CVT</label>
                        <label class="sub__tabs__item" for="sub-tab3-5">Tiggo 8 PRO 2.0 CVT</label>
                        <label class="sub__tabs__item" for="sub-tab3-6">Tiggo 8 PRO 1.6 DCT</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-1" name="sub-group3" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">6 388</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 278</td>
                                <td class="price__item">1 278</td>
                                <td class="price__item">5 110</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">10 732</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 146</td>
                                <td class="price__item">2 146</td>
                                <td class="price__item">8 586</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">15 571</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 114</td>
                                <td class="price__item">3 114</td>
                                <td class="price__item">12 457</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">40 545</td>
                                <td class="price__item">7 540</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 601</td>
                                <td class="price__item">14 141</td>
                                <td class="price__item">26 404</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">22 098</td>
                                <td class="price__item">5 590</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 302</td>
                                <td class="price__item">8 892</td>
                                <td class="price__item">13 206</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">12 936</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 380</td>
                                <td class="price__item">1 911</td>
                                <td class="price__item">5 291</td>
                                <td class="price__item">7 645</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">45 384</td>
                                <td class="price__item">-</td>
                                <td class="price__item">9 620</td>
                                <td class="price__item">7 153</td>
                                <td class="price__item">16 773</td>
                                <td class="price__item">28 611</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">10 732</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 860</td>
                                <td class="price__item">1 574</td>
                                <td class="price__item">4 434</td>
                                <td class="price__item">6 298</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">22 098</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 590</td>
                                <td class="price__item">3 302</td>
                                <td class="price__item">8 892</td>
                                <td class="price__item">13 206</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">40 545</td>
                                <td class="price__item">-</td>
                                <td class="price__item">7 540</td>
                                <td class="price__item">6 601</td>
                                <td class="price__item">14 141</td>
                                <td class="price__item">26 404</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">17 775</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">2 463</td>
                                <td class="price__item">7 923</td>
                                <td class="price__item">9 852</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-2" name="sub-group3" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">7 489</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 498</td>
                                <td class="price__item">1 498</td>
                                <td class="price__item">5 991</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">11 833</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 367</td>
                                <td class="price__item">2 367</td>
                                <td class="price__item">9 466</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">16 245</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 249</td>
                                <td class="price__item">3 249</td>
                                <td class="price__item">12 996</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">41 646</td>
                                <td class="price__item">8 060</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 717</td>
                                <td class="price__item">14 777</td>
                                <td class="price__item">26 869</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">25 787</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 065</td>
                                <td class="price__item">9 525</td>
                                <td class="price__item">16 262</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">14 037</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 900</td>
                                <td class="price__item">2 027</td>
                                <td class="price__item">5 927</td>
                                <td class="price__item">8 110</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">46 485</td>
                                <td class="price__item">-</td>
                                <td class="price__item">10 140</td>
                                <td class="price__item">7 269</td>
                                <td class="price__item">17 409</td>
                                <td class="price__item">29 076</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">11 833</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 380</td>
                                <td class="price__item">1 691</td>
                                <td class="price__item">5 071</td>
                                <td class="price__item">6 762</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">25 787</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">4 065</td>
                                <td class="price__item">9 525</td>
                                <td class="price__item">16 262</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">41 646</td>
                                <td class="price__item">-</td>
                                <td class="price__item">8 060</td>
                                <td class="price__item">6 717</td>
                                <td class="price__item">14 777</td>
                                <td class="price__item">26 869</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">18 876</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 980</td>
                                <td class="price__item">2 579</td>
                                <td class="price__item">8 559</td>
                                <td class="price__item">10 317</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-3" name="sub-group3" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">6 388</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 278</td>
                                <td class="price__item">1 278</td>
                                <td class="price__item">5 110</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">10 732</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 146</td>
                                <td class="price__item">2 146</td>
                                <td class="price__item">8 586</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">19 753</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 951</td>
                                <td class="price__item">3 951</td>
                                <td class="price__item">15 802</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">20 542</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 380</td>
                                <td class="price__item">7 020</td>
                                <td class="price__item">13 522</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">24 249</td>
                                <td class="price__item">6 240</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 602</td>
                                <td class="price__item">9 842</td>
                                <td class="price__item">14 407</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">43 441</td>
                                <td class="price__item">-</td>
                                <td class="price__item">12 610</td>
                                <td class="price__item">6 166</td>
                                <td class="price__item">18 776</td>
                                <td class="price__item">24 665</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">29 563</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 370</td>
                                <td class="price__item">4 639</td>
                                <td class="price__item">11 009</td>
                                <td class="price__item">18 554</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">10 732</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 860</td>
                                <td class="price__item">1 574</td>
                                <td class="price__item">4 434</td>
                                <td class="price__item">6 298</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">24 249</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 240</td>
                                <td class="price__item">3 602</td>
                                <td class="price__item">9 842</td>
                                <td class="price__item">14 407</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">20 542</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 640</td>
                                <td class="price__item">3 380</td>
                                <td class="price__item">7 020</td>
                                <td class="price__item">13 522</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">52 462</td>
                                <td class="price__item">-</td>
                                <td class="price__item">15 340</td>
                                <td class="price__item">7 424</td>
                                <td class="price__item">22 764</td>
                                <td class="price__item">29 698</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-4" name="sub-group3" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">6 746</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 349</td>
                                <td class="price__item">1 349</td>
                                <td class="price__item">5 397</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">11 155</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 231</td>
                                <td class="price__item">2 231</td>
                                <td class="price__item">8 924</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">18 122</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 624</td>
                                <td class="price__item">3 624</td>
                                <td class="price__item">14 498</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">19 880</td>
                                <td class="price__item">3 445</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 287</td>
                                <td class="price__item">6 732</td>
                                <td class="price__item">13 148</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">35 997</td>
                                <td class="price__item">5 590</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 081</td>
                                <td class="price__item">11 671</td>
                                <td class="price__item">24 326</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">11 155</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 120</td>
                                <td class="price__item">1 607</td>
                                <td class="price__item">4 727</td>
                                <td class="price__item">6 428</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">26 847</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 525</td>
                                <td class="price__item">4 264</td>
                                <td class="price__item">9 789</td>
                                <td class="price__item">17 058</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">11 155</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 120</td>
                                <td class="price__item">1 607</td>
                                <td class="price__item">4 727</td>
                                <td class="price__item">6 428</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">35 997</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 590</td>
                                <td class="price__item">6 081</td>
                                <td class="price__item">11 671</td>
                                <td class="price__item">24 326</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">19 880</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 445</td>
                                <td class="price__item">3 287</td>
                                <td class="price__item">6 732</td>
                                <td class="price__item">13 148</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">18 122</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 200</td>
                                <td class="price__item">2 584</td>
                                <td class="price__item">7 784</td>
                                <td class="price__item">10 338</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-5" name="sub-group3" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">10 256</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 051</td>
                                <td class="price__item">2 051</td>
                                <td class="price__item">8 205</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">12 923</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 585</td>
                                <td class="price__item">2 585</td>
                                <td class="price__item">10 338</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">21 910</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 382</td>
                                <td class="price__item">4 382</td>
                                <td class="price__item">17 528</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">41 651</td>
                                <td class="price__item">7 605</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 809</td>
                                <td class="price__item">14 414</td>
                                <td class="price__item">27 237</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">39 785</td>
                                <td class="price__item">5 850</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 787</td>
                                <td class="price__item">12 637</td>
                                <td class="price__item">27 148</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">14 045</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 900</td>
                                <td class="price__item">2 029</td>
                                <td class="price__item">5 929</td>
                                <td class="price__item">8 116</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">50 638</td>
                                <td class="price__item">-</td>
                                <td class="price__item">9 685</td>
                                <td class="price__item">8 191</td>
                                <td class="price__item">17 876</td>
                                <td class="price__item">32 762</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">12 923</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 380</td>
                                <td class="price__item">1 909</td>
                                <td class="price__item">5 289</td>
                                <td class="price__item">7 634</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">39 785</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 850</td>
                                <td class="price__item">6 787</td>
                                <td class="price__item">12 637</td>
                                <td class="price__item">27 148</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">41 716</td>
                                <td class="price__item">-</td>
                                <td class="price__item">7 670</td>
                                <td class="price__item">6 809</td>
                                <td class="price__item">14 479</td>
                                <td class="price__item">27 237</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">22 992</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 980</td>
                                <td class="price__item">3 402</td>
                                <td class="price__item">9 382</td>
                                <td class="price__item">13 609</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-6" name="sub-group3" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">10 256</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 051</td>
                                <td class="price__item">2 051</td>
                                <td class="price__item">8 205</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">12 923</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 585</td>
                                <td class="price__item">2 585</td>
                                <td class="price__item">10 338</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">21 910</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 382</td>
                                <td class="price__item">4 382</td>
                                <td class="price__item">17 528</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">41 651</td>
                                <td class="price__item">7 605</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 809</td>
                                <td class="price__item">14 414</td>
                                <td class="price__item">27 237</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">39 785</td>
                                <td class="price__item">5 850</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 787</td>
                                <td class="price__item">12 637</td>
                                <td class="price__item">27 148</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">14 045</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 900</td>
                                <td class="price__item">2 029</td>
                                <td class="price__item">5 929</td>
                                <td class="price__item">8 116</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">50 638</td>
                                <td class="price__item">-</td>
                                <td class="price__item">9 685</td>
                                <td class="price__item">8 191</td>
                                <td class="price__item">17 876</td>
                                <td class="price__item">32 762</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">12 923</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 380</td>
                                <td class="price__item">1 909</td>
                                <td class="price__item">5 289</td>
                                <td class="price__item">7 634</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">39 785</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 850</td>
                                <td class="price__item">6 787</td>
                                <td class="price__item">12 637</td>
                                <td class="price__item">27 148</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">41 716</td>
                                <td class="price__item">-</td>
                                <td class="price__item">7 670</td>
                                <td class="price__item">6 809</td>
                                <td class="price__item">14 479</td>
                                <td class="price__item">27 237</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">22 992</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 980</td>
                                <td class="price__item">3 402</td>
                                <td class="price__item">9 382</td>
                                <td class="price__item">13 609</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-4" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item" for="sub-tab4-1">TXL 1.6 DCT</label>
                        <label class="sub__tabs__item" for="sub-tab4-2">VX 2.0 DCT</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab4-1" name="sub-group4" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">10 256</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 051</td>
                                <td class="price__item">2 051</td>
                                <td class="price__item">8 205</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">15 659</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 132</td>
                                <td class="price__item">3 132</td>
                                <td class="price__item">12 527</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">24 030</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 806</td>
                                <td class="price__item">4 806</td>
                                <td class="price__item">19 224</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">24 944</td>
                                <td class="price__item">3 705</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 248</td>
                                <td class="price__item">7 953</td>
                                <td class="price__item">16 991</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">39 720</td>
                                <td class="price__item">5 980</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 748</td>
                                <td class="price__item">12 728</td>
                                <td class="price__item">26 992</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">16 611</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 770</td>
                                <td class="price__item">2 568</td>
                                <td class="price__item">6 338</td>
                                <td class="price__item">10 272</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">33 315</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 785</td>
                                <td class="price__item">5 506</td>
                                <td class="price__item">11 291</td>
                                <td class="price__item">22 024</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">15 659</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 380</td>
                                <td class="price__item">2 456</td>
                                <td class="price__item">5 836</td>
                                <td class="price__item">9 823</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">39 720</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 980</td>
                                <td class="price__item">6 748</td>
                                <td class="price__item">12 728</td>
                                <td class="price__item">26 992</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">24 944</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 705</td>
                                <td class="price__item">4 248</td>
                                <td class="price__item">7 953</td>
                                <td class="price__item">16 991</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">24 982</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 850</td>
                                <td class="price__item">3 826</td>
                                <td class="price__item">9 676</td>
                                <td class="price__item">15 305</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab4-2" name="sub-group4" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">10 004</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 001</td>
                                <td class="price__item">2 001</td>
                                <td class="price__item">8 003</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">10 004</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 001</td>
                                <td class="price__item">2 001</td>
                                <td class="price__item">8 003</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">18 078</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 616</td>
                                <td class="price__item">3 616</td>
                                <td class="price__item">14 462</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">24 646</td>
                                <td class="price__item">3 770</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 175</td>
                                <td class="price__item">7 945</td>
                                <td class="price__item">16 701</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">32 863</td>
                                <td class="price__item">5 330</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 507</td>
                                <td class="price__item">10 837</td>
                                <td class="price__item">22 026</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-5" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item" for="sub-tab5-1">BESTURN X80</label>
                        <label class="sub__tabs__item" for="sub-tab5-2">BESTURN X40</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab5-1" name="sub-group5" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab5-2" name="sub-group5" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-6" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-1">CS35PLUS</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-2">CS55</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-3">CS75FL 2WD AT</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-4">CS75FL 4WD AT</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab6-1" name="sub-group6" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">8 731</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 746</td>
                                <td class="price__item">1 746</td>
                                <td class="price__item">6 985</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">8 341</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 668</td>
                                <td class="price__item">1 668</td>
                                <td class="price__item">6 673</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 903</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 181</td>
                                <td class="price__item">4 181</td>
                                <td class="price__item">16 722</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">44 701</td>
                                <td class="price__item">3 900</td>
                                <td class="price__item">-</td>
                                <td class="price__item">8 160</td>
                                <td class="price__item">12 060</td>
                                <td class="price__item">32 641</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">20 903</td>
                                <td class="price__item">500</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 081</td>
                                <td class="price__item">4 581</td>
                                <td class="price__item">16 322</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">8 341</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 600</td>
                                <td class="price__item">1 148</td>
                                <td class="price__item">3 748</td>
                                <td class="price__item">4 593</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">55 025</td>
                                <td class="price__item">-</td>
                                <td class="price__item">7 280</td>
                                <td class="price__item">9 549</td>
                                <td class="price__item">16 829</td>
                                <td class="price__item">38 196</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">8 341</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 600</td>
                                <td class="price__item">1 148</td>
                                <td class="price__item">3 748</td>
                                <td class="price__item">4 593</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">20 903</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 200</td>
                                <td class="price__item">3 141</td>
                                <td class="price__item">8 341</td>
                                <td class="price__item">12 562</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">21 311</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 500</td>
                                <td class="price__item">2 962</td>
                                <td class="price__item">9 462</td>
                                <td class="price__item">11 849</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">20 903</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 200</td>
                                <td class="price__item">3 141</td>
                                <td class="price__item">8 341</td>
                                <td class="price__item">12 562</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab6-2" name="sub-group6" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">8 675</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 735</td>
                                <td class="price__item">1 735</td>
                                <td class="price__item">6 940</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">8 285</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 657</td>
                                <td class="price__item">1 657</td>
                                <td class="price__item">6 628</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">19 885</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 977</td>
                                <td class="price__item">3 977</td>
                                <td class="price__item">15 908</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">50 957</td>
                                <td class="price__item">3 900</td>
                                <td class="price__item">-</td>
                                <td class="price__item">9 411</td>
                                <td class="price__item">13 311</td>
                                <td class="price__item">37 646</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">19 885</td>
                                <td class="price__item">5 200</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 937</td>
                                <td class="price__item">8 137</td>
                                <td class="price__item">11 748</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">8 285</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 600</td>
                                <td class="price__item">1 137</td>
                                <td class="price__item">3 737</td>
                                <td class="price__item">4 548</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">63 680</td>
                                <td class="price__item">-</td>
                                <td class="price__item">7 280</td>
                                <td class="price__item">11 280</td>
                                <td class="price__item">18 560</td>
                                <td class="price__item">45 120</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">8 285</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 600</td>
                                <td class="price__item">1 137</td>
                                <td class="price__item">3 737</td>
                                <td class="price__item">4 548</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">20 470</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 200</td>
                                <td class="price__item">3 054</td>
                                <td class="price__item">8 254</td>
                                <td class="price__item">12 216</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">63 680</td>
                                <td class="price__item">-</td>
                                <td class="price__item">7 280</td>
                                <td class="price__item">11 280</td>
                                <td class="price__item">18 560</td>
                                <td class="price__item">45 120</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-10 (100000 км/120 мес)</td>
                                <td class="price__item">23 654</td>
                                <td class="price__item">-</td>
                                <td class="price__item">6 500</td>
                                <td class="price__item">3 431</td>
                                <td class="price__item">9 931</td>
                                <td class="price__item">13 723</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab6-3" name="sub-group6" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">9 564</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 913</td>
                                <td class="price__item">1 913</td>
                                <td class="price__item">7 651</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">9 174</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 835</td>
                                <td class="price__item">1 835</td>
                                <td class="price__item">7 339</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 903</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 181</td>
                                <td class="price__item">4 181</td>
                                <td class="price__item">16 722</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">52 477</td>
                                <td class="price__item">4 160</td>
                                <td class="price__item">-</td>
                                <td class="price__item">9 663</td>
                                <td class="price__item">13 823</td>
                                <td class="price__item">38 654</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">24 242</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 756</td>
                                <td class="price__item">9 216</td>
                                <td class="price__item">15 026</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">9 174</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 860</td>
                                <td class="price__item">1 263</td>
                                <td class="price__item">4 123</td>
                                <td class="price__item">5 051</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">66 503</td>
                                <td class="price__item">-</td>
                                <td class="price__item">7 280</td>
                                <td class="price__item">11 845</td>
                                <td class="price__item">19 125</td>
                                <td class="price__item">47 378</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">9 174</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 860</td>
                                <td class="price__item">1 263</td>
                                <td class="price__item">4 123</td>
                                <td class="price__item">5 051</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">22 337</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">3 375</td>
                                <td class="price__item">8 835</td>
                                <td class="price__item">13 502</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">52 893</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 160</td>
                                <td class="price__item">9 747</td>
                                <td class="price__item">13 907</td>
                                <td class="price__item">38 986</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab6-4" name="sub-group6" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость ₽*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                                <td class="top__title">Максимальный размер скидок ₽*</td>
                                <td class="top__title">Минимальная цена ₽*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-0 (2000 км/3 мес)</td>
                                <td class="price__item">9 564</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 913</td>
                                <td class="price__item">1 913</td>
                                <td class="price__item">7 651</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-1 (10000 км/12 мес)</td>
                                <td class="price__item">9 174</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">1 835</td>
                                <td class="price__item">1 835</td>
                                <td class="price__item">7 339</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-2 (20000 км/24 мес)</td>
                                <td class="price__item">20 903</td>
                                <td class="price__item">-</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 181</td>
                                <td class="price__item">4 181</td>
                                <td class="price__item">16 722</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-3 (30000 км/36 мес)</td>
                                <td class="price__item">53 739</td>
                                <td class="price__item">4 160</td>
                                <td class="price__item">-</td>
                                <td class="price__item">9 916</td>
                                <td class="price__item">14 076</td>
                                <td class="price__item">39 663</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-4 (40000 км/48 мес)</td>
                                <td class="price__item">24 242</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">-</td>
                                <td class="price__item">3 756</td>
                                <td class="price__item">9 216</td>
                                <td class="price__item">15 026</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-5 (50000 км/60 мес)</td>
                                <td class="price__item">9 174</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 860</td>
                                <td class="price__item">1 263</td>
                                <td class="price__item">4 123</td>
                                <td class="price__item">5 051</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-6 (60000 км/72 мес)</td>
                                <td class="price__item">67 765</td>
                                <td class="price__item">-</td>
                                <td class="price__item">7 280</td>
                                <td class="price__item">12 097</td>
                                <td class="price__item">19 377</td>
                                <td class="price__item">48 388</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-7 (70000 км/84 мес)</td>
                                <td class="price__item">9 174</td>
                                <td class="price__item">-</td>
                                <td class="price__item">2 860</td>
                                <td class="price__item">1 263</td>
                                <td class="price__item">4 123</td>
                                <td class="price__item">5 051</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-8 (80000 км/96 мес)</td>
                                <td class="price__item">22 337</td>
                                <td class="price__item">-</td>
                                <td class="price__item">5 460</td>
                                <td class="price__item">3 375</td>
                                <td class="price__item">8 835</td>
                                <td class="price__item">13 502</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">ТО-9 (90000 км/108 мес)</td>
                                <td class="price__item">54 156</td>
                                <td class="price__item">-</td>
                                <td class="price__item">4 160</td>
                                <td class="price__item">9 999</td>
                                <td class="price__item">14 159</td>
                                <td class="price__item">39 997</td>
                            </tr>
                        </table>
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
                    "PATH" => "/include/service__inner.php"
                )
            ); ?>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="background__fos">
    <div class="container_site"> 
        <div class="flex__cont">
            <div class="middle">
                <div class="repair__li">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/service__text.php"
                        )
                    ); ?>
                </div>
            </div>
            <section class="form_traid-in">
                <h2 class="sub_title" id="calculator">
                    Заявка на ТО
                </h2>
                <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                    <div class="field">
                        <label for="calc__name" class="label__traid-in">Имя*</label>
                        <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                    </div>
                    <div class="field__wrapper">
                        <div class="field">
                            <label for="calc__phone" class="label__traid-in">Телефон*</label>
                            <input type="phone" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                        </div>
                        <div class="field">
                            <label for="input__manufacturer" class="label__traid-in">Марка</label>
                            <input type="text" id="input__manufacturer" name="marka-to" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Модель</label>
                            <input type="text" id="input_traid" name="model-to" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
                        </div>
                        <div class="field">
                            <label for="input__manufacturer" class="label__traid-in">Дата записи</label>
                            <input type="date" id="input__manufacturer" name="datepicker" class="input__traid-in" data-validate-field="man__traid" placeholder="Нажмите">
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Время записи</label>
                            <select name="time-picker" class="input__traid-in">
                                <option value="08:00" class="input__traid-in">08:00</option>
                                <option value="09:00" class="input__traid-in">09:00</option>
                                <option value="10:00" class="input__traid-in">10:00</option>
                                <option value="11:00" class="input__traid-in">11:00</option>
                                <option value="12:00" class="input__traid-in">12:00</option>
                                <option value="13:00" class="input__traid-in">13:00</option>
                                <option value="14:00" class="input__traid-in">14:00</option>
                                <option value="15:00" class="input__traid-in">15:00</option>
                                <option value="16:00" class="input__traid-in">16:00</option>
                                <option value="17:00" class="input__traid-in">17:00</option>
                                <option value="18:00" class="input__traid-in">18:00</option>
                                <option value="19:00" class="input__traid-in">19:00</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="calc__phone" class="label__traid-in">Дилерский центр</label>
                            <select name="choose_dc" class="input__traid-in">
                                <option value="г. Самара, Аэропортовское шоссе, 1Ж" class="input__traid-in">г. Самара, Аэропортовское шоссе, 1Ж</option>
                                <option value="г. Самара, Южное шоссе 12А, строение 4" class="input__traid-in">г. Самара, Южное шоссе 12А, строение 4</option>
                                <option value="г. Самара, Алма-Атинская, 87" class="input__traid-in">г. Самара, Алма-Атинская, 87</option>
                                <option value="пос. Тимофеевка (г.Тольятти), ул. Солнечная, 1А" class="input__traid-in">пос. Тимофеевка (г.Тольятти), ул. Солнечная, 1А</option>
                                <option value="г. Саратов, Соколовая гора, 4" class="input__traid-in">г. Саратов, Соколовая гора, 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="checkbox_popup">
                        Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                    </div>
                    <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="SUBJECT" value=" Заявка на ТО*">
                    <div class="popup__btn__flex">
                        <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                    </div>
                </form>
            </section>
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
            "PATH" => "/include/service__seo.php"
        )
    ); ?>
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
            <div class="popup__btm__submit open_thanks_js">
                <button class="btn popup__btn open_thanks_js" type="submit">Отправить</button>
            </div>
        </form>
    </div>
</main>
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