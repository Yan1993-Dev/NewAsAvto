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
                    "PATH" => "/include/tiggo8pro__title.php"
                )
            ); ?>
        </section>
        <div class="slider_wrapper">
            <div class="slider-container">
                <div class="swiper-container__title">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tiggo8PRO_blue.jpg" alt=""></div>
                    </div>
                    <div class="swiper_pagination">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/tiggo8PRO_blue.svg" alt="" class="slider_img_title">
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
                            <label for="input__manufacturer" class="label__traid-in">Марка вашего автомобиля</label>
                            <input type="text" id="input__manufacturer" name="td-model" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Модель вашего автомобиля</label>
                            <input type="text" id="input_traid" name="select-tradein" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
                        </div>
                    </div>
                    <div class="checkbox_popup">
                        Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                    </div>
                    <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="SUBJECT" value=" Заявка на Trade-in Tiggo 8*">
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
                    <input type="hidden" name="SUBJECT" value=" Заявка на Кредит Tiggo 8Pro*">
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
                "PATH" => "/include/tiggo8pro__sl1.php"
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
                "PATH" => "/include/tiggo8pro__sl2.php"
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
                "PATH" => "/include/tiggo8pro__sl4.php"
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
                "PATH" => "/include/tiggo8pro__sl5.php"
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
                    <td>1.6T 7DCT PREMIUM (SPEEDLINE)</td>
                    <td class="pcs equipment_item_old_price">3 339 900 руб.</td>
                    <td class="cur equipment_item_new_price">2 919 900 руб.</td>
                    <td>в кредит за 11 990 руб/мес <br> или меньше!</td>
                    <td class="per"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></td>
                </tr>
                <tr class="fold">
                    <td colspan="7">
                        <div class="fold-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Дизайн</td>
                                    </tr>
                                    <tr>
                                        <td>18-дюймовые алюминиевые литые диски</td>
                                    </tr>
                                    <tr>
                                        <td>Окраска металлик (на выбор)</td>
                                    </tr>
                                    <tr>
                                        <td>Рейлинги на крыше</td>
                                    </tr>
                                    <tr>
                                        <td>Расширители колесных арок</td>
                                    </tr>
                                    <tr>
                                        <td>Выхлопная система с двумя патрубками</td>
                                    </tr>
                                    <tr>
                                        <td>Задний спортивный спойлер</td>
                                    </tr>
                                    <tr>
                                        <td>Светодиодные фары основного света</td>
                                    </tr>
                                    <tr>
                                        <td>Передние светодиодные ходовые огни</td>
                                    </tr>
                                    <tr>
                                        <td>Передние противотуманные фары</td>
                                    </tr>
                                    <tr>
                                        <td>Динамические указатели поворота</td>
                                    </tr>
                                    <tr>
                                        <td>Светодиодные задние фонари</td>
                                    </tr>
                                    <tr>
                                        <td>Боковые зеркала с электрической регулировкой, обогревом, повторителями поворотов</td>
                                    </tr>
                                    <tr>
                                        <td>Электропривод складывания зеркал</td>
                                    </tr>
                                    <tr>
                                        <td>Пороги с подсветкой спереди</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Безопасность 5 ★  C-NCAP</td>
                                    </tr>
                                    <tr>
                                        <td>Эра Глонасс</td>
                                    </tr>
                                    <tr>
                                        <td>Иммобилайзер - электронное противоугонное устройство</td>
                                    </tr>
                                    <tr>
                                        <td>Задние датчики парковки</td>
                                    </tr>
                                    <tr>
                                        <td>Камера заднего вида (с системой динамической разметки)</td>
                                    </tr>
                                    <tr>
                                        <td>Система мониторинга давления и температуры в шинах (TMPS)</td>
                                    </tr>
                                    <tr>
                                        <td>Антиблокировочная тормозная система (ABS)</td>
                                    </tr>
                                    <tr>
                                        <td>Система стабилизации курсовой устойчивости (ESP)</td>
                                    </tr>
                                    <tr>
                                        <td>Электронный регулятор тормозных сил (EBD)</td>
                                    </tr>
                                    <tr>
                                        <td>Система помощи при экстренном торможении (HBA)</td>
                                    </tr>
                                    <tr>
                                        <td>Система помощи при старте в гору (HHC)</td>
                                    </tr>
                                    <tr>
                                        <td>Система помощи при спуске с горы (HDC)</td>
                                    </tr>
                                    <tr>
                                        <td>Антипробуксовочная система (TCS)</td>
                                    </tr>
                                    <tr>
                                        <td>Система контроля крутящего момента (DTC)</td>
                                    </tr>
                                    <tr>
                                        <td>Система снижения вероятности опрокидывания (RMF)</td>
                                    </tr>
                                    <tr>
                                        <td>Датчик превышения заданной скорости</td>
                                    </tr>
                                    <tr>
                                        <td>Подушки безопасности водителя и переднего пассажира</td>
                                    </tr>
                                    <tr>
                                        <td>Боковые передние подушки безопасности</td>
                                    </tr>
                                    <tr>
                                        <td>Шторки безопасности</td>
                                    </tr>
                                    <tr>
                                        <td>Шторки безопасности</td>
                                    </tr>
                                    <tr>
                                        <td>Передние ремни безопасности с регулировкой по высоте</td>
                                    </tr>
                                    <tr>
                                        <td>Передние ремни безопасности с преднатяжителями</td>
                                    </tr>
                                    <tr>
                                        <td>Ремни безопасности 2-го ряда с преднатяжителем и огр.усилия</td>
                                    </tr>
                                    <tr>
                                        <td>Ремни безопасности 3-го ряда с функцией блокировки</td>
                                    </tr>
                                    <tr>
                                        <td>Система удержания детских кресел Isofix для задних сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Блокировка замков задних дверей от открывания детьми (детский замок)</td>
                                    </tr>
                                    <tr>
                                        <td>Функция автоматического включения фар при вождении в темное время (датчик света)</td>
                                    </tr>
                                    <tr>
                                        <td>Функция автоматического включения работы дворников при дожде (датчик дождя)</td>
                                    </tr>
                                    <tr>
                                        <td>Функция отсрочки выключения фар (Follow me home)</td>
                                    </tr>
                                    <tr>
                                        <td>Задний стеклоочиститель</td>
                                    </tr>
                                    <tr>
                                        <td>Уменьшенное запасное колесо</td>
                                    </tr>
                                    <tr>
                                        <td>Газовые упоры капота</td>
                                    </tr>
                                    <tr>
                                        <td>Система кругового обзора (HD-камера)</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Управление</td>
                                    </tr>
                                    <tr>
                                        <td>Круиз-контроль</td>
                                    </tr>
                                    <tr>
                                        <td>Режим Sport/Eco mode</td>
                                    </tr>
                                    <tr>
                                        <td>Электрический усилитель рулевого управления</td>
                                    </tr>
                                    <tr>
                                        <td>Электрический ручной стояночный тормоз с функцией AutoHold</td>
                                    </tr>
                                    <tr>
                                        <td>Бесключевой доступ и запуск двигателя кнопкой (ключ в кармане)</td>
                                    </tr>
                                    <tr>
                                        <td>Центральный замок с дистанционным управлением</td>
                                    </tr>
                                    <tr>
                                        <td>Дистанционное управление открытием двери багажника и открытие кнопкой из салона</td>
                                    </tr>
                                    <tr>
                                        <td>Электропривод двери багажника (открытие багажника без помощи рук)</td>
                                    </tr>
                                    <tr>
                                        <td>Напоминание об усталости водителя</td>
                                    </tr>
                                    <tr>
                                        <td>Индикатор расхода топлива и напоминания о ТО</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Комфорт</td>
                                    </tr>
                                    <tr>
                                        <td>Система дистанционного запуска двигателя и прогрева салона</td>
                                    </tr>
                                    <tr>
                                        <td>Обогрев передних сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Обогрев сидений 2-го ряда</td>
                                    </tr>
                                    <tr>
                                        <td>Обогрев рулевого колеса</td>
                                    </tr>
                                    <tr>
                                        <td>Обогрев лобового стекла</td>
                                    </tr>
                                    <tr>
                                        <td>Обогрев форсунок стеклоомывателя</td>
                                    </tr>
                                    <tr>
                                        <td>Кожаная отделка сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Премиальный дизайн интерьера Tiggo 8 PRO Premium</td>
                                    </tr>
                                    <tr>
                                        <td>Водительское сиденье с электрической регулировкой в 6-ти направлениях</td>
                                    </tr>
                                    <tr>
                                        <td>Водительское сиденье с электрической регулировкой поясничного упора</td>
                                    </tr>
                                    <tr>
                                        <td>Пассажирское сиденье с механической регулировкой в 4-х направлениях</td>
                                    </tr>
                                    <tr>
                                        <td>Карманы в передних сидениях</td>
                                    </tr>
                                    <tr>
                                        <td>Сиденья 2-го ряда с механической продольной регулировкой</td>
                                    </tr>
                                    <tr>
                                        <td>Сиденья 2-го ряда с механической регулировкой угла наклона спинки</td>
                                    </tr>
                                    <tr>
                                        <td>Складная спинка сидений 2-го ряда в соотношении 1/3-2/3 (в ровный пол)</td>
                                    </tr>
                                    <tr>
                                        <td>Складная спинка сидений 3-го ряда в соотношении 1/2-1/2 (в ровный пол)</td>
                                    </tr>
                                    <tr>
                                        <td>Подголовники всех сидений с регулировкой по высоте</td>
                                    </tr>
                                    <tr>
                                        <td>Климат-контроль, 2 зоны</td>
                                    </tr>
                                    <tr>
                                        <td>Система улучшенной фильтрации воздуха в салоне (фильтр N95)</td>
                                    </tr>
                                    <tr>
                                        <td>Дефлекторы для 2-го ряда</td>
                                    </tr>
                                    <tr>
                                        <td>Многофункциональное кожаное рулевое колесо</td>
                                    </tr>
                                    <tr>
                                        <td>Рулевая колонка с регулировкой в 4-х направлениях (по вылету и углу наклона)</td>
                                    </tr>
                                    <tr>
                                        <td>Передние и задние электростеклоподъемники с защитой от защемления, авто</td>
                                    </tr>
                                    <tr>
                                        <td>Передний центральный подлокотник с охлаждаемой ёмкостью для хранения</td>
                                    </tr>
                                    <tr>
                                        <td>Подлокотник 2-го и 3-го рядов сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Потолочные светодиодные светильники для 1,2,3 ряда сидений</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="save_title">Технологии и мультимедиа</td>
                                    </tr>
                                    <tr>
                                        <td>Беспроводная зарядка для смартфона</td>
                                    </tr>
                                    <tr>
                                        <td>Большой сенсорный емкостный дисплей 12.3"</td>
                                    </tr>
                                    <tr>
                                        <td>Цветной экран с бортовым компьютером в панели приборов 12.3"</td>
                                    </tr>
                                    <tr>
                                        <td>Боковая панель управления климат-контролем 8"</td>
                                    </tr>
                                    <tr>
                                        <td>Доступ к навигации, видео-файлам, интернет через смартфон на экране автомобиля(Android/Apple)</td>
                                    </tr>
                                    <tr>
                                        <td>Радио</td>
                                    </tr>
                                    <tr>
                                        <td>8 динамиков</td>
                                    </tr>
                                    <tr>
                                        <td>3 USB-разъема (2 спереди + 1 сзади)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr class="view">
                    <td>1.6T 7DCT FLAGSHIP (DREAMLINE)</td>
                    <td class="pcs equipment_item_old_price">3 469 900 руб.</td>
                    <td class="cur equipment_item_new_price">3 049 900 руб</td>
                    <td>в кредит за 11 990 руб/мес <br> или меньше!</td>
                    <td class="per"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></td>
                </tr>
                <tr class="fold">
                    <td colspan="7">
                        <div class="fold-content">
                            <p class="save_title_additionally">В дополнение к комплектации 1.6T 7DCT PREMIUM (SPEEDLINE):</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Темно-коричневый цвет отделки сидений</td>
                                    </tr>
                                    <tr>
                                        <td>Передние датчики парковки</td>
                                    </tr>
                                    <tr>
                                        <td>Система кругового обзора 360⁰ (HD-камера)</td>
                                    </tr>
                                    <tr>
                                        <td>Система мониторинга слепых зон</td>
                                    </tr>
                                    <tr>
                                        <td>Память настроек зеркал</td>
                                    </tr>
                                    <tr>
                                        <td>Память настроек сиденья водителя</td>
                                    </tr>
                                    <tr>
                                        <td>Пассажирское сиденье с электрической регулировкой в 4-х направлениях</td>
                                    </tr>
                                    <tr>
                                        <td>Подсветка в солнцезащитном козырьке водителя и пассажира</td>
                                    </tr>
                                    <tr>
                                        <td>Электрохромное зеркало заднего вида</td>
                                    </tr>
                                    <tr>
                                        <td>Функция авто-отпотевания стекла</td>
                                    </tr>
                                    <tr>
                                        <td>Хромированная отделка педалей</td>
                                    </tr>
                                    <tr>
                                        <td>Панорамная крыша с люком и шторкой</td>
                                    </tr>
                                    <tr>
                                        <td>Цветная сенсорная боковая панель управления климат-контролем 8"</td>
                                    </tr>
                                    <tr>
                                        <td>8 динамиков</td>
                                    </tr>
                                    <tr>
                                        <td>Система Start-Stop</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr class="view">
                    <td>1.6T 7DCT ULTIMATE (HIGHLINE)</td>
                    <td class="pcs equipment_item_old_price">3 589 900 руб.</td>
                    <td class="cur equipment_item_new_price">3 169 900 руб</td>
                    <td>в кредит за 11 990 руб/мес <br> или меньше!</td>
                    <td class="per"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></td>
                </tr>
                <tr class="fold">
                    <td colspan="7">
                        <div class="fold-content">
                            <p class="save_title_additionally">В дополнение к комплектации 1.6T 7DCT FLAGSHIP (DREAMLINE):</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Предупреждение о покидании полосы LDW</td>
                                    </tr>
                                    <tr>
                                        <td>Ассистент удержания в полосе LKA</td>
                                    </tr>
                                    <tr>
                                        <td>Ассистент движения в пробках TJA</td>
                                    </tr>
                                    <tr>
                                        <td>Адаптивный круиз-контроль ACC</td>
                                    </tr>
                                    <tr>
                                        <td>Система предупреждения о фронтальном столкновении FCW</td>
                                    </tr>
                                    <tr>
                                        <td>Система автономного экстренного торможения AEB</td>
                                    </tr>
                                    <tr>
                                        <td>Система распознавания дорожных знаков SLA</td>
                                    </tr>
                                    <tr>
                                        <td>Предупреждение при опасности при открытии дверей DOW</td>
                                    </tr>
                                    <tr>
                                        <td>Предупреждение о заднем перекрестном столкновении RCTA</td>
                                    </tr>
                                    <tr>
                                        <td>Автоматическое переключение ближнего/дальнего света IHC</td>
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
                        28 апреля в нашем дилерском центре «Самара Восток»  прошла презентация долгожданного CHERY TIGGO 8 PRO MAX
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
            <input type="hidden" name="SUBJECT" value=" Заявка на Тест-драйв Tiggo8Pro*">
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


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>