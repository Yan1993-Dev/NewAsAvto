<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/catalogPageGWM.css");
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

<div class="background">
    <div class="poster__container">
        <div class="title__poster">
            <div class="colors__poster">
                <div class="color__poster">
                    <p class="title__poster__text">GWM Wingle 7</p>
                    <p class="title__desc__poster">Выносливый пикап для решения важных задач.</p>
                </div>
            </div>
        </div>
        <ul class="offer">
            <li class="offer__item">Прочная рамная конструкция</li>
            <li class="offer__item">Экономичный дизельный двигатель</li>
            <li class="offer__item">Грузоподъёмность 975 кг</li>
            <li class="offer__item">Комфорт на уровне легкового автомобиля</li>
        </ul>
    </div>
</div>
<div class="container_site">
    <div class="catalog__cont">
        <div class="title__cont">
            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/gw.png" alt="" class="img__gw sub__title">
        </div>
        <ul class="catalog__list">
            <li class="catalog__item__li">
                <a href="/gwm/wingle/index.php" class="tabs__link__fl">
                    <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/wingle.png" alt=""></div>
                    <div class="tabs__item__desc">
                        <h3 class="model_catalog__title">GWM Wingle 7</h3>
                        <p class="model_catalog__price">от 2 999 000 руб.</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="background__fos">
    <div class="container_site">
        <div class="flex__cont">
            <div class="middle">
                <ul class="content_li">
                    <li class="title__content__item">Тест-драйв - это отличная возможность попробовать автомобиль на дороге. Парк тестовых автомобилей наших дилерских центров действительно большой.</li>
                    <li class="content__item">Заполните форму записи на тест-драйв</li>
                    <li class="content__item">С Вами свяжется менеджер нашей компании для подтверждения даты и времени</li>
                    <li class="content__item">Приезжайте в назначенное время и испытывайте автомобиль!</li>
                </ul>
            </div>
            <section class="form_traid-in">
                <h2 class="sub_title" id="calculator">
                    Запись на Тест-драйв
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
                            <label for="input_traid" class="label__traid-in">Выберите марку</label>
                            <select name="choose_marka" class="input__traid-in">
                                <option value="GWM" class="input__traid-in">GWM</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Выберите модель</label>
                            <select name="choose_model" class="input__traid-in">
                                <option value="GWM WINGLE 7" class="input__traid-in">GWM WINGLE 7</option>
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
                        <input type="hidden" name="SUBJECT" value=" Заявка на Тест-драйв GWM*">
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
    <p class="sub__title">Получите набор преимуществ при покупке нового автомобиля! Привлекательные условия кредитования с возможностью выбрать индивидуальные условия, дополнительные выгоды при использовании программы Trade-in, дополнительные скидки, бонусы и подарки. Мы делаем всё, чтобы покупка автомобиля в наших автосалонах была максимально выгодной и приятной для Вас!</p>
    <ul class="flex">
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
                    <p class="content__title">Авторассрочка 0/0/30</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/RassrochkaZero30.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="../aktsii/avtorassrochka-0-0-18/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="../aktsii/haval-direct/index.php">
                    <p class="content__title">HAVAL DIRECT ставка от 0,99%</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/havalDIrect.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="../aktsii/haval-direct/index.php" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="../aktsii/kredit-bez-pervogo-vznosa/index.php">
                    <p class="content__title">Кредит без первого взноса</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/CreditZeroLX.jpg" alt="stock" class="content__img">
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
</div>
<div class="container_site">
    <p class="seo__title">Официальный дилер GWM Wingle 7 в Самаре - Группа компаний «АсАвто».</p>
    <p class="seo__sub_title">Когда впереди много важных целей, нужен тот, на кого действительно можно положиться. Дизельный турбированный двигатель, полноприводная трансмиссия, просторный салон и кузов. Встречайте GWM Wingle 7. Надежный и выносливый пикап. Ему можно доверить самые тяжелые задачи и быть уверенным в результате.</p>
    <p class="seo__list__title">GWM Wingle 7 можно приобрести, воспользовавшись следующими программами:</p>
    <ul>
        <li class="seo__list-item">Trade-in</li>
        <li class="seo__list-item">Автокредит</li>
        <li class="seo__list-item">Лизинг</li>
    </ul>
    <p class="seo__text">Для консультации по программам покупки оставьте заявку на сайте. Менеджеры отдела продаж ответят на все вопросы и подберут индивидуальную программу покупки автомобиля.</p>
</div>
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