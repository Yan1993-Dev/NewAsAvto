<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/catalogPageChangan.css");
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
<main>
    <div class="background">
        <div class="poster__container">
            <div class="title__poster">
                <div class="colors__poster">
                    <div class="color__poster">
                        <p class="title__poster__text">Кроссоверы и внедорожники Changan.</p>
                        <p class="title__desc__poster">Безопасность, проверенная временем.</p>
                    </div>
                </div>
            </div>
            <ul class="offer">
                <li class="offer__item">CS35PLUS</li>
                <li class="offer__item">CS55</li>
                <li class="offer__item">CS75FL</li>
            </ul>
        </div>
    </div>
    <div class="container_site">
        <div class="catalog__cont">
            <div class="title__cont">
                <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/CHANGAN.png" alt="" class="img__changan sub__title">
            </div>
            <ul class="catalog__list">
                <li class="catalog__item__li">
                    <a href="/changan/35/index.php" class="tabs__link__fl">
                        <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/35+.png" alt=""></div>
                        <div class="tabs__item__desc">
                            <h3 class="model_catalog__title">CHANGAN CS35PLUS</h3>
                            <p class="model_catalog__price">от 2 119 990 руб.</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item__li">
                    <a href="/changan/55/index.php" class="tabs__link__fl">
                        <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/changanCs55.png" alt=""></div>
                        <div class="tabs__item__desc">
                            <h3 class="model_catalog__title">CHANGAN CS55</h3>
                            <p class="model_catalog__price">от 1 361 990 руб.</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item__li">
                    <a href="/changan/75/index.php" class="tabs__link__fl">
                        <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/75FL.png" alt=""></div>
                        <div class="tabs__item__desc">
                            <h3 class="model_catalog__title">CHANGAN CS75FL</h3>
                            <p class="model_catalog__price">от 1 219 990 руб.</p>
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
                                    <option value="CHANGAN" class="input__traid-in">CHANGAN</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="input_traid" class="label__traid-in">Выберите модель</label>
                                <select name="choose_model" class="input__traid-in">
                                    <option value="s1" class="input__traid-in">CHANGAN CS35PLUS</option>
                                    <option value="s2" class="input__traid-in">CHANGAN CS55</option>
                                    <option value="s5" class="input__traid-in">CHANGAN CS75FL</option>
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
                        <input type="hidden" name="SUBJECT" value=" Заявка на Тест-драйв Changan*">
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
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/traid__in.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="#" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/first_pay.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/jolion.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/traid__in.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/first_pay.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/jolion.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/traid__in.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/first_pay.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/jolion.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/traid__in.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/first_pay.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/jolion.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/traid__in.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/first_pay.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/jolion.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content__stock">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="../static/images/traid__in.jpg" alt="" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
        </ul>
        <a href="#" id="loadMore">Посмотреть ещё</a>
    </div>
    </div>
    <div class="container_site">
        <p class="seo__title">Современные и одновременно доступные автомобили Changan у официального дилера «АсАвто».</p>
        <p class="seo__sub_title">Компания CHANGAN входит в «Большую четвёрку» автопроизводителей Китая. Компания была основана в 1862 году в городе Чунцин. На тот момент это была небольшая машиностроительная фабрика. В 1949 г. фабрика перешла в собственность государства. С 1958 по 1962 гг. компания производила компактные армейские внедорожники. В 1984 г. стартовало производство пассажирского транспорта. На данный момент помимо собственного производства, CHANGAN имеет совместное производство с рядом международных автомобильных брендов, таких как Mazda, Ford, Suzuki, PSA. В 2016 году совокупный объем производства и продаж составил более 3 миллионов единиц в год. По состоянию на июнь 2018 года было реализовано 17 миллионов автомобилей. Ежедневно более 8500 покупателей во всем мире приобретают продукцию CHANGAN.</p>
        <p class="seo__sub_title">Написание бренда имеет отдельное значение. В китайском языке CHANG означает «долговременный», AN – «безопасность». Таким образом, идею, лежащую в основе бренда CHANGAN, можно сформулировать следующим образом – «Безопасность, проверенная временем».</p>
        <p class="seo__list__title">В автосалонах «АсАвто» вы можете приобрести актуальные модели Changan:</p>
        <ul>
            <li class="seo__list-item">CS35PLUS. Городской компактный передне-приводный кроссовер, доступен с механической или автоматической КПП.</li>
            <li class="seo__list-item">CS55. Средне-размерный кроссовер с турбированным двигателем и элегантным дизайном.</li>
            <li class="seo__list-item">CS75FL. Полноприводный кроссовер с мощным двигателем, просторным салоном и вместительным багажником.</li>
        </ul>
        <p class="seo__list__title">Компания «АсАвто» предлагает выгодные условия покупки автомобилей Changan:</p>
        <ul>
            <li class="seo__list-item">программа Trade-in. Выкуп Вашего автомобиля по высокой стоимости и дополнительная скидка на новый Changan.</li>
            <li class="seo__list-item">кредитные программы Changan Finance. Сниженная процентная ставка, отложенный первый платёж, срок кредитования до 8 лет.</li>
        </ul>
        <p class="seo__text">Покупка Changan в «АсАвто» - это выгодно, удобно и безопасно.</p>
    </div>
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