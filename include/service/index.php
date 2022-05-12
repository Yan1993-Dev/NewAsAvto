<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/service.css");
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
                        <li class="nav__nav__item"><a href="/jac/index.php" class="nav__nav__link">JAC</a></li>
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
                            "PATH" => "/include/service__faw.php"
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
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                    <input class="tab-radio" id="sub-tab-6" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title"> для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                    <input class="tab-radio" id="sub-tab-7" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title"> для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                    <input class="tab-radio" id="sub-tab-8" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title"> для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                    <input class="tab-radio" id="sub-tab-9" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title"> для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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

                <input class="tab-radio" id="main-tab-2" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <label class="sub__tabs__item" for="sub-tab2-1">F7</label>
                        <label class="sub__tabs__item" for="sub-tab2-2">F7X</label>
                        <label class="sub__tabs__item" for="sub-tab2-3">JOLION</label>
                    </div>
                    <input class="tab-radio" id="sub-tab2-1" name="sub-group2" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                    <input class="tab-radio" id="sub-tab2-2" name="sub-group2" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                <input class="tab-radio" id="main-tab-3" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item" for="sub-tab3-1">TIGGO 4</label>
                        <label class="sub__tabs__item" for="sub-tab3-2">TIGGO 7PRO</label>
                        <label class="sub__tabs__item" for="sub-tab3-3">TIGGO 8</label>
                        <label class="sub__tabs__item" for="sub-tab3-4">TIGGO 8PRO</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-1" name="sub-group3" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диа Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                    <input class="tab-radio" id="sub-tab3-2" name="sub-group3" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                <input class="tab-radio" id="main-tab-4" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item" for="sub-tab4-1">TXL</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab4-1" name="sub-group4" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-1">S3</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-2">S5</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-3">J7</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-4">S7</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-5">T6</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab6-1" name="sub-group6" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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
                    <input class="tab-radio" id="sub-tab6-2" name="sub-group6" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
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