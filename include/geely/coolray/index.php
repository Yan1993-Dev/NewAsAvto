<?
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
                <li class="nav__nav__item"><a href="/chery/index.php" class="nav__nav__link">CHERY</a></li>
                <li class="nav__nav__item"><a href="/exeed/index.php" class="nav__nav__link">EXEED</a></li>
                <li class="nav__nav__item"><a href="/changan/index.php" class="nav__nav__link">CHANGAN</a></li>
                <li class="nav__nav__item"><a href="/faw/index.php" class="nav__nav__link">FAW</a></li>
                <li class="nav__nav__item"><a href="/gwm/index.php" class="nav__nav__link">GWM Pickup</a></li>
                <li class="nav__nav__item"><a href="/novye-avto/index.php" class="nav__nav__link">Все автомобили</a>
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
            <li class="cat__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/arrowL.svg" alt=""><img src="../static/icons/arrowL.svg" alt="" class="ar__right"><a href="/novye-avto/index.php" class="cat__list__inner">Назад в каталог</a></li>
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
                    "PATH" => "/include/coolray__title.php"
                )
            ); ?>
        </section>
        <div class="slider_wrapper">
            <div class="slider-container">
                <div class="swiper-container__title">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/coolrayRed.png" src="#" alt=""></div>
                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/coolrayBlue.png" alt=""></div>
                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/coolrayOrange.png" alt=""></div>
                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/coolrayGrey.png" alt=""></div>
                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/coolrayWhite.png" alt=""></div>
                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/coolrayBlack.png" alt=""></div>
                    </div>
                    <div class="swiper_pagination">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/coolrayRed.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/coolrayBlue.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/coolrayOrange.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/coolrayGrey.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/coolrayWhite.svg" alt="" class="slider_img_title">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/coolrayBlack.svg" alt="" class="slider_img_title">
                    </div>
                </div>
            </div>
        </div>
        <div class="form_wrapper">
            <section class="form_traid-in">
                <h2 class="sub_title" id="calculator">
                    Заявка на Trade-in
                </h2>
                <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                    <div class="field">
                        <label for="calc__name" class="label__traid-in">Имя*</label>
                        <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                    </div>
                    <div class="field__wrapper">
                        <div class="field">
                            <label for="calc__phone" class="label__traid-in">Телефон*</label>
                            <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                        </div>
                        <div class="field">
                            <label for="input__manufacturer" class="label__traid-in">Марка</label>
                            <input type="text" id="input__manufacturer" name="td-model" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Модель</label>
                            <input type="text" name="select-model" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
                        </div>
                    </div>
                    <div class="checkbox_popup">
                        Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                    </div>
                    <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="SUBJECT" value=" Заявка на Тест-драйв Coolray*">
                    <div class="popup__btn__flex">
                        <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                    </div>
                </form>
            </section>
            <section class="credit_calc">
                <h2 class="sub_title" id="">
                    Заявка на расчёт кредита
                </h2>
                <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                    <div class="field">
                        <label for="credit__name" class="label__traid-in">Имя*</label>
                        <input type="text" id="credit__name" name="name" class="input__traid-in" data-validate-field="credit__name" placeholder="Ваше имя">
                    </div>
                    <div class="field__wrapper">
                        <div class="field">
                            <label for="credit__form__phone" class="label__traid-in">Телефон*</label>
                            <input type="tel" id="credit__form__phone" name="phone" class="input__traid-in" data-validate-field="tel__credit" placeholder="Ваш телефон">
                        </div>
                        <div class="field">
                            <label for="input__initial" class="label__traid-in">Первый взнос</label>
                            <input type="text" id="input__initial" name="select-credit" class="input__traid-in" placeholder="Сумма первого взноса">
                        </div>
                        <div class="field">
                            <label for="credit__time" class="label__traid-in">Срок</label>
                            <input type="text" id="credit__time" name="credit-time" class="input__traid-in" placeholder="Срок кредита">
                        </div>
                    </div>
                    <div class="checkbox_popup">
                        Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                    </div>
                    <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Coolray*">
                    <div class="popup__btn__flex">
                        <button class="btn traid__btn open_thanks_js" type="submit">Отправить</button>
                    </div>
                </form>
            </section>
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
                "PATH" => "/include/coolray__exterier.php"
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
                "PATH" => "/include/coolray__interier.php"
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
                "PATH" => "/include/coolray__option.php"
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
                "PATH" => "/include/coolray__technologies.php"
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
                "PATH" => "/include/coolray__safe.php"
            )
        ); ?>
    </div>
    <div class="container_complictation">
        <table class="fold-table">
            <thead>
                <tr>
                    <th>Комплектации</th>
                    <th>Цена</th>
                    <th class="final__price">Финальная цена</th>
                </tr>
            </thead>
            <tbody>
                <tr class="view">
                    <td>1.5 DCT COMFORT (AT)</td>
                    <td class="pcs equipment_item_old_price">2 299 990 руб.</td>
                    <td class="cur equipment_item_new_price">1 779 990 руб.</td>
                    <td>в кредит за 11 990 руб/мес <br> или меньше!</td>
                    <td class="per"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></td>
                </tr>
                <tr class="fold">
                    <td colspan="7">
                        <div class="fold-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Экстерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Хромированные молдинги на стеклах</td>
                                    </tr>
                                    <tr>
                                        <td>Рейлинги на крыше</td>
                                    </tr>
                                    <tr>
                                        <td>Наружные зеркала заднего вида окрашенные в цвет кузова</td>
                                    </tr>
                                    <tr>
                                        <td>Декоративная отделка в стиле карбон (нижние накладки переднего и заднего бамперов, боковые накладки)</td>
                                    </tr>
                                    <tr>
                                        <td>Задний спойлер</td>
                                    </tr>
                                    <tr>
                                        <td>Спортивная окантовка радиаторной решетки (красного цвета)</td>
                                    </tr>
                                    <tr>
                                        <td>Легкосплавные колёсные диски 17" (215/60 R17)</td>
                                    </tr>
                                    <tr>
                                        <td>Компактное запасное колесо</td>
                                    </tr>
                                    <tr>
                                        <td>Галогеновые фары головного света</td>
                                    </tr>
                                    <tr>
                                        <td>Светодиодные задние комбинированные фонари и противотуманный фонарь</td>
                                    </tr>
                                    <tr>
                                        <td>Светодиодные дневные ходовые огни и противотуманные фары (с функцией подсветки поворотов)</td>
                                    </tr>
                                    <tr>
                                        <td>Бескаркасные щетки стеклоочистителей</td>
                                    </tr>
                                    <tr>
                                        <td>Стеклоочиститель заднего стекла</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Интерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Козырек приборной панели с отделкой из экокожи</td>
                                    </tr>
                                    <tr>
                                        <td>Высококачественная отделка приборной панели и накладок дверей из экокожи</td>
                                    </tr>
                                    <tr>
                                        <td>Бортовой компьютер с дисплеем 3,5"</td>
                                    </tr>
                                    <tr>
                                        <td>Механическая регулировка яркости панели приборов</td>
                                    </tr>
                                    <tr>
                                        <td>Регулируемый передний центральный подлокотник с боксом</td>
                                    </tr>
                                    <tr>
                                        <td>Электрическая розетка 12в</td>
                                    </tr>
                                    <tr>
                                        <td>Подстаканники в центральной консоли</td>
                                    </tr>
                                    <tr>
                                        <td>Карманы для хранения в спинках передних сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Тканевая обивка сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Полка в багажном отделении</td>
                                    </tr>
                                    <tr>
                                        <td>Отсеки с сетками для вещей в багажном отделении</td>
                                    </tr>
                                    <tr>
                                        <td>Органайзер в багажном отделении (под полом)</td>
                                    </tr>
                                    <tr>
                                        <td>Крючок для вещей в центральной стойке</td>
                                    </tr>
                                    <tr>
                                        <td>Накладки на пороги (черный пластик)</td>
                                    </tr>
                                    <tr>
                                        <td>Внутреннее зеркало заднего вида с ручной функцией затемнения</td>
                                    </tr>
                                    <tr>
                                        <td>Мультифункциональное рулевое колесо с кожаной отделкой и кнопками управления мультимедиа и круиз-контролем</td>
                                    </tr>
                                    <tr>
                                        <td>Задний центральный фонарь освещения салона</td>
                                    </tr>
                                    <tr>
                                        <td>Подсветка зоны ног переднего ряда сидений</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Безопасность</td>
                                    </tr>
                                    <tr>
                                        <td>Система вызова экстренных оперативных служб ЭРА-ГЛОНАСС</td>
                                    </tr>
                                    <tr>
                                        <td>Антиблокировочная система тормозов (ABS) с функцией электронного распределения тормозных усилий (EBD)</td>
                                    </tr>
                                    <tr>
                                        <td>Гидравлическая система помощи при экстренном торможении (HBA)</td>
                                    </tr>
                                    <tr>
                                        <td>Антипробуксовочная система (TCS)</td>
                                    </tr>
                                    <tr>
                                        <td>Система курсовой устойчивости (ESC)</td>
                                    </tr>
                                    <tr>
                                        <td>Система удержания автомобиля при подъеме (HHC)</td>
                                    </tr>
                                    <tr>
                                        <td>Система помощи при движении под уклон (HDC)</td>
                                    </tr>
                                    <tr>
                                        <td>Задние датчики парковки (4)</td>
                                    </tr>
                                    <tr>
                                        <td>Камера заднего вида</td>
                                    </tr>
                                    <tr>
                                        <td>Иммобилайзер</td>
                                    </tr>
                                    <tr>
                                        <td>Центральный замок</td>
                                    </tr>
                                    <tr>
                                        <td>Автоматическая блокировка дверей на скорости</td>
                                    </tr>
                                    <tr>
                                        <td>Охранная сигнализация</td>
                                    </tr>
                                    <tr>
                                        <td>Травмобезопасная рулевая колонка</td>
                                    </tr>
                                    <tr>
                                        <td>Фронтальные подушки безопасности водителя и переднего пассажира</td>
                                    </tr>
                                    <tr>
                                        <td>Механизм блокировки открывания задних боковых дверей изнутри («Детский замок»)</td>
                                    </tr>
                                    <tr>
                                        <td>Крепление для детского кресла сзади стандарта ISOFIX</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Интеллектуальные системы</td>
                                    </tr>
                                    <tr>
                                        <td>Электромеханический стояночный тормоз (EPB)</td>
                                    </tr>
                                    <tr>
                                        <td>Функция удержания автомобиля на месте (AUTOHOLD)</td>
                                    </tr>
                                    <tr>
                                        <td>USB (2 спереди, 1 сзади)</td>
                                    </tr>
                                    <tr>
                                        <td>QDlink - дублирование экрана смартфона на экране мультимедиa через USB, с поддержкой Android, iOS</td>
                                    </tr>
                                    <tr>
                                        <td>Мультимедийная система c цветным сенсорным дисплеем 10,25", Bluetooth, с 6 динамиками</td>
                                    </tr>
                                    <tr>
                                        <td>Дистанционный запуск двигателя</td>
                                    </tr>
                                    <tr>
                                        <td>Система контроля давления и температуры в шинах (TPMS)</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Комфорт</td>
                                    </tr>
                                    <tr>
                                        <td>Регулировка руля по высоте и по вылету</td>
                                    </tr>
                                    <tr>
                                        <td>Кондиционер</td>
                                    </tr>
                                    <tr>
                                        <td>Сиденье водителя с механической регулировкой в 6 направлениях</td>
                                    </tr>
                                    <tr>
                                        <td>Сиденье переднего пассажира с механической регулировкой в 4 направлениях</td>
                                    </tr>
                                    <tr>
                                        <td>Подогрев передних сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Подогрев форсунок стеклоомывателя</td>
                                    </tr>
                                    <tr>
                                        <td>Подогрев лобового стекла в зоне покоя щёток стеклоочистителя</td>
                                    </tr>
                                    <tr>
                                        <td>Функция обогрева стекла пятой двери</td>
                                    </tr>
                                    <tr>
                                        <td>Наружные зеркала заднего вида с функцией обогрева</td>
                                    </tr>
                                    <tr>
                                        <td>Спинки задних сидений, складывающиеся в пропорции 60/40</td>
                                    </tr>
                                    <tr>
                                        <td>Функция автоматического закрывания окон при закрывании автомобиля</td>
                                    </tr>
                                    <tr>
                                        <td>Функция открывания / закрывания всех окон при однократном нажатии на кнопку управления стеклоподъемником</td>
                                    </tr>
                                    <tr>
                                        <td>Электростеклоподъемники всех дверей с функцией предотвращения защемления</td>
                                    </tr>
                                    <tr>
                                        <td>Круиз-контроль</td>
                                    </tr>
                                    <tr>
                                        <td>Запуск двигателя кнопкой</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr class="view">
                    <td>1.5 DCT LUXURY (AT)</td>
                    <td class="pcs equipment_item_old_price">2 469 990 руб.</td>
                    <td class="cur equipment_item_new_price">1 949 990 руб.</td>
                    <td>в кредит за 11 990 руб/мес <br> или меньше!</td>
                    <td class="per"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></td>
                </tr>
                <tr class="fold">
                    <td colspan="7">
                        <div class="fold-content">
                            <p class="save_title_additionally">В дополнение к комплектации 1.5 DCT (AT) COMFORT:</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Экстерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Легкосплавные колёсные диски 18" (215/55 R18)</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Интерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Электрическая розетка в багажном отделении 12в</td>
                                    </tr>
                                    <tr>
                                        <td>Подсветка макияжных зеркал в солнцезащитных козырьках для водителя и переднего пассажира</td>
                                    </tr>
                                    <tr>
                                        <td>Раздельные лампы освещения второго ряда (по бокам)</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Безопасность</td>
                                    </tr>
                                    <tr>
                                        <td>Боковые подушки безопасности водителя и переднего пассажира</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Комфорт</td>
                                    </tr>
                                    <tr>
                                        <td>Панорамная крыша с люком</td>
                                    </tr>
                                    <tr>
                                        <td>Однозонный климат-контроль</td>
                                    </tr>
                                    <tr>
                                        <td>Подогрев сидений заднего ряда</td>
                                    </tr>
                                    <tr>
                                        <td>Подогрев руля</td>
                                    </tr>
                                    <tr>
                                        <td>Датчик света</td>
                                    </tr>
                                    <tr>
                                        <td>Центральный подголовник второго ряда сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Задний центральный подлокотник с подстаканниками</td>
                                    </tr>
                                    <tr>
                                        <td>Система бесключевого доступа</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr class="view">
                    <td>1.5 DCT FLAGSHIP (AT)</td>
                    <td class="pcs equipment_item_old_price">2 659 990 руб.</td>
                    <td class="cur equipment_item_new_price">2 109 990 руб.</td>
                    <td>в кредит за 11 990 руб/мес <br> или меньше!</td>
                    <td class="per"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></td>
                </tr>
                <tr class="fold">
                    <td colspan="7">
                        <div class="fold-content">
                            <p class="save_title_additionally">В дополнение к комплектации 1.5 DCT LUXURY (AT):</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Экстерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Спортивные тормозные суппорты (красного цвета)</td>
                                    </tr>
                                    <tr>
                                        <td>Светодиодные фары головного света</td>
                                    </tr>
                                    <tr>
                                        <td>Подсветка при открывании дверей первого ряда (в наружных зеркалах заднего вида)</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Интерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Металлические накладки на педали</td>
                                    </tr>
                                    <tr>
                                        <td>Спортивный интерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Цифровая панель приборов с ЖК дисплеем 7"</td>
                                    </tr>
                                    <tr>
                                        <td>Комбинированная спортивная обивка сидений (ткань и экокожа)</td>
                                    </tr>
                                    <tr>
                                        <td>Темная отделка салона (Потолок и стойки)</td>
                                    </tr>
                                    <tr>
                                        <td>Металлические накладки на пороги</td>
                                    </tr>
                                    <tr>
                                        <td>Атмосферная подсветка салона с возможностью изменения цвета</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Безопасность</td>
                                    </tr>
                                    <tr>
                                        <td>Передние датчики парковки</td>
                                    </tr>
                                    <tr>
                                        <td>Система камер кругового обзора 360°</td>
                                    </tr>
                                    <tr>
                                        <td>Блокираторы капота</td>
                                    </tr>
                                    <tr>
                                        <td>Функция предупреждения об открытом капота</td>
                                    </tr>
                                    <tr>
                                        <td>Шторки безопасности для пассажиров 1-го и 2-го ряда</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Интеллектуальные системы</td>
                                    </tr>
                                    <tr>
                                        <td>Видеорегистратор (функция встроена в переднюю камеру)</td>
                                    </tr>
                                    <tr>
                                        <td>Система контроля слепых зон (BSD)</td>
                                    </tr>
                                    <tr>
                                        <td>Система автоматической парковки (APA)</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Комфорт</td>
                                    </tr>
                                    <tr>
                                        <td>Сиденье водителя с электрорегулировкой в 6 направлениях</td>
                                    </tr>
                                    <tr>
                                        <td>Электропривод регулировки и складывания наружных зеркал заднего вида</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr class="view">
                    <td>1.5 DCT FLAGSHIP SPORT (AT)</td>
                    <td class="pcs equipment_item_old_price">2 709 990 руб.</td>
                    <td class="cur equipment_item_new_price">2 189 990 руб.</td>
                    <td>в кредит за 11 990 руб/мес <br> или меньше!</td>
                    <td class="per"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></td>
                </tr>
                <tr class="fold">
                    <td colspan="7">
                        <div class="fold-content">
                            <p class="save_title_additionally">В дополнение к комплектации 1.5 DCT FLAGSHIP (AT):</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Экстерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Двухцветная окраска кузова</td>
                                    </tr>
                                    <tr>
                                        <td>Корпуса зеркал заднего вида с отделкой под карбон</td>
                                    </tr>
                                    <tr>
                                        <td>Спортивный спойлер с красной эмблемой «S»</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr class="view">
                    <td>1.5 DCT NERO (AT)</td>
                    <td class="pcs equipment_item_old_price">2 749 990 руб.</td>
                    <td class="cur equipment_item_new_price">2 229 990 руб.</td>
                    <td>в кредит за 11 990 руб/мес <br> или меньше!</td>
                    <td class="per"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></td>
                </tr>
                <tr class="fold">
                    <td colspan="7">
                        <div class="fold-content">
                            <p class="save_title_additionally">В дополнение к комплектации 1.5 DCT FLAGSHIP SPORT (AT):</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Экстерьер</td>
                                    </tr>
                                    <tr>
                                        <td>18-дюймовые черныe легкосплавные диски особого дизайна</td>
                                    </tr>
                                    <tr>
                                        <td>Тонировка задних стекол</td>
                                    </tr>
                                    <tr>
                                        <td>Спортивный спойлер с красной эмблемой «S» и лого NERO на двери багажника</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Интерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Эксклюзивные коврики салона с вышивкой Coolray NERO</td>
                                    </tr>
                                    <tr>
                                        <td>Металлическая накладка с логотипом на задний бампер</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="save_title_additionally">За исключением из комплектации 1.5 DCT FLAGSHIP SPORT (AT):</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Экстерьер</td>
                                    </tr>
                                    <tr>
                                        <td>Двухцветная окраска кузова</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="wrapper__est">
            <button class="btn estimate_btn__js">
                Оставить заявку
            </button>
        </div>
    </div>
    <div class="container_site">
        <div class="line__sale">
            <h2 class="slider_title_sale"><a href="/aktsii/index.php" class="title__desc__inner">акции</a></h2>
        </div>
        <ul class="flex">
            <li class="content__stock">
                <a href="/aktsii/tri-novye-kreditnye-programmy-dlya-chery-i-exeed/index.php">
                    <p class="content__title">ТРИ новые кредитные программы для CHERY и EXEED</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/fkpwne6m0lvb9dahewvjvx2eftt52k3s.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="/aktsii/tri-novye-kreditnye-programmy-dlya-chery-i-exeed/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="/aktsii/avtorassrochka-0-0-18/index.php">
                    <p class="content__title">Авторассрочка 0/0/30</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/RassrochkaZero30.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="/aktsii/avtorassrochka-0-0-18/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="container_site">
        <section class="news">
            <div class="line">
                <h2 class="slider_title_news"><a href="/novosti/index.php" class="title__desc__inner">Новости</a></h2>

            </div>
            <div class="category">
                <ul class="category__list">
                    <li class="category__item">
                        <a href="/novosti/prezentatsiya-chery-tiggo-8-pro-max-v-dts-asavto-tolyatti/index.php"><img src="/local/templates/NewAsAvto/static/images/cherytiggopromaxDCtltlprev.jpg" class="category__image" alt=""></a>
                        <div class="date__info">
                            <p class="date__info-item">
                                15.04.2022
                            </p>
                        </div>
                        <div class="category__title__wrap">
                            <a href="/novosti/prezentatsiya-chery-tiggo-8-pro-max-v-dts-asavto-tolyatti/index.php" class="category__title auto_desc_under">Презентация Chery Tiggo 8 PRO MAX в ДЦ «АсАвто Тольятти»</a>
                        </div>
                        <p class="category__desc">
                            Презентация нового CHERY TIGGO 8 PRO MAX в «АсАвто» в г. Тольятти прошла ярко и интересно и необычно. Долгожданное событие состоялось 19 мая.
                        </p>
                        <a href="/novosti/prezentatsiya-chery-tiggo-8-pro-max-v-dts-asavto-tolyatti/index.php" class="category__info">Читать далее</a>
                    </li>
                    <li class="category__item"> <a href="/novosti/geely-coolray-nero/index.php"><img src="/local/templates/NewAsAvto/static/images/coolrayNero.jpg" class="category__image" alt=""></a>
                        <div class="date__info">
                            <p class="date__info-item">
                                01.04.2022
                            </p>
                        </div>
                        <div class="category__title__wrap">
                            <a href="/novosti/geely-coolray-nero/index.php" class="category__title auto_desc_under">Geely Coolray новая комплектация NERO</a>
                        </div>
                        <p class="category__desc">
                            Компания Geely объявляет о выходе на российский рынок новой специальной серии кроссовера - Geely Coolray NERO
                        </p>
                        <a href="/novosti/geely-coolray-nero/index.php" class="category__info">Читать далее</a>
                    </li>
                    <li class="category__item"> <a href="/novosti/prezentatsiya-chery-tiggo-8-pro-max/index.php"><img src="/local/templates/NewAsAvto/static/images/exeedPromo.jpg" class="category__image" alt=""></a>
                        <div class="date__info">
                            <p class="date__info-item">
                                01.04.2022
                            </p>
                        </div>
                        <div class="category__title__wrap">
                            <a href="/novosti/prezentatsiya-chery-tiggo-8-pro-max/index.php" class="category__title auto_desc_under">Презентация Chery Tiggo 8 PRO MAX в ДЦ «Самара Восток»</a>
                        </div>
                        <p class="category__desc">
                            28 апреля в нашем дилерском центре «Самара Восток» прошла презентация долгожданного CHERY TIGGO 8 PRO MAX
                        </p>
                        <a href="/novosti/prezentatsiya-chery-tiggo-8-pro-max/index.php" class="category__info">Читать далее</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="container_site">
        <section class="feedback">
            <div class="line__feedback">
                <h2 class="slider_title_feedback"><a href="/otzyvy/index.php" class="title__desc__inner">Отзывы</a></h2>
            </div>
            <div class="category">
                <ul class="category__list">
                    <li class="category__item">
                        <div class="image__wrapper">
                            <img alt="feedback" src="/local/templates/NewAsAvto/static/images/lps6h3ckt3wd7xsletxzc0434ytr8uxo.jpg" class="category__image minimized">
                        </div>
                        <div class="date__info">
                            <p class="date__info-item">
                                31.05.2022
                            </p>
                        </div>
                        <div class="auto__desc">
                            <span class="auto_desc_under">Дилерский центр:</span> Самара
                        </div>
                        <p class="auto__desc">
                            <span class="auto_desc_under">Автомобиль:</span> GEELY COOLRAY
                        </p>
                        <p class="category__desc">
                            Понравилась хорошая атмосфера и работа менеджера
                        </p>
                    </li>
                    <li class="category__item">
                        <div class="image__wrapper">
                            <img alt="feedback" src="/local/templates/NewAsAvto/static/images/graaj6qf31ybav6a55n89eiakfm0mm2l.jpeg" class="category__image minimized">
                        </div>
                        <div class="date__info">
                            <p class="date__info-item">
                                30.05.2022
                            </p>
                        </div>
                        <div class="auto__desc">
                            <span class="auto_desc_under">Дилерский центр:</span> Самара
                        </div>
                        <p class="auto__desc">
                            <span class="auto_desc_under">Автомобиль:</span> EXEED TXL
                        </p>
                        <p class="category__desc">
                            Вежливый персонал. Хорошо оценили старую машину. Подобрали и заказали нужную комплектацию и цвет. Машина пришла в заданный период. Обязательно порекомендую знакомым и друзьям.
                        </p>
                    </li>
                    <li class="category__item">
                        <div class="image__wrapper">
                            <img alt="feedback" src="/local/templates/NewAsAvto/static/images/xqjrqlrsnlw5vqria24iyxj8pt1j1yu2.jpeg" class="category__image minimized">
                        </div>
                        <div class="date__info">
                            <p class="date__info-item">
                                28.05.2022
                            </p>
                        </div>
                        <div class="auto__desc">
                            <span class="auto_desc_under">Дилерский центр:</span> Самара
                        </div>
                        <p class="auto__desc">
                            <span class="auto_desc_under">Автомобиль:</span> HAVAL H9
                        </p>
                        <p class="category__desc">
                            Купил автомобиль который и хотел, порадовали скидки и профессионализм сотрудников
                        </p>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="popup_overlay"></div>
    <div class="popup__container">
        <form class="form title__popup__js  title__popup" id="popup__form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
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
                        <input type="phone" id="drive__phone" data-validate-field="tel" class="input__popup" name="phone" placeholder="Ваш телефон">
                    </div>
                </div>
                <div class="field__wrapper">
                    <div class="field_calendar">
                        <label for="drive__calendar" class="label__popup">Выберите день*</label>
                        <input type="date" name="datepicker" id="drive__datapicker" class="input__popup _req" placeholder="Нажмите">
                    </div>
                </div>
            </div>
            <div class="checkbox_popup">
                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
            </div>
            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="SUBJECT" value=" Заявка на Тест-драйв Coolray*">
            <div class="popup__btm__submit open_thanks_js">
                <button class="btn popup__btn open_thanks_js" type="submit">Отправить</button>
            </div>
        </form>
    </div>
    <div class="popup__container">
        <form id="popup__form" class="title__popup__js  title__popup" name="popupIn" enctype="multipart/form-data" method="POST">
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
                        <input type="phone" id="drive__phone" data-validate-field="tel" class="input__popup" name="phone" placeholder="Ваш телефон">
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
                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
            </div>
            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="SUBJECT" value=" Заявка на Тест-драйв Coolray*">
            <div class="popup__btm__submit">
                <button class="btn popup__btn open_thanks_js" type="submit">Отправить</button>
            </div>
        </form>
    </div>

    <!-- заявка -->
    <div class="estimate__container">
        <form class="form form__js estimate" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
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
                        <input type="phone" id="estimate__phone" name="phone" class="input__popup" data-validate-field="telephone" placeholder="Ваш телефон">
                    </div>
                </div>
                <div class="field_est">
                    <label for="input__text" class="label__popup">Ваш вопрос</label>
                    <textarea class="input__est" id="input__text" name="input-text" cols="5" rows="5" placeholder="Опишите Ваш вопрос"></textarea>
                </div>
            </div>
            <div class="checkbox_popup">
                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
            </div>
            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="SUBJECT" value=" Оставить заявку*">
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


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>