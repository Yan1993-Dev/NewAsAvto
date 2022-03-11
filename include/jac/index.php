<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/catalogPageJac.css");
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
<div class="background">
    <div class="poster__container">
        <div class="title__poster">
            <div class="colors__poster">
                <div class="color__poster">
                    <p class="title__poster__text">Легковые автомобили JAC.</p>
                    <p class="title__desc__poster">China Anhui Jianghuai Automobile Co., Ltd</p>
                </div>
            </div>
        </div>
        <ul class="offer">
            <li class="offer__item">JAC J7</li>
            <li class="offer__item">JAC S7</li>
            <li class="offer__item">JAC T6</li>
        </ul>
    </div>
</div>
<div class="container_site">
    <div class="catalog__cont">
        <div class="title__cont">
            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/JAC.png" alt="" class="img__title sub__title">
        </div>
        <ul class="catalog__list">
            <li class="catalog__item__li">
                <a href="/jac/s3/index.php" class="tabs__link__fl">
                    <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/s3.png" alt=""></div>
                    <div class="tabs__item__desc">
                        <h3 class="model_catalog__title">JAC S3</h3>
                        <p class="model_catalog__price">от 2 119 990 руб.</p>
                    </div>
                </a>
            </li>
            <li class="catalog__item__li">
                <a href="/jac/j7/index.php" class="tabs__link__fl">
                    <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/j7.png" alt=""></div>
                    <div class="tabs__item__desc">
                        <h3 class="model_catalog__title">JAC J7</h3>
                        <p class="model_catalog__price">от 1 361 990 руб.</p>
                    </div>
                </a>
            </li>
            <li class="catalog__item__li">
                <a href="/jac/s7/index.php" class="tabs__link__fl">
                    <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/s7.png" alt=""></div>
                    <div class="tabs__item__desc">
                        <h3 class="model_catalog__title">JAC S7</h3>
                        <p class="model_catalog__price">от 1 219 990 руб.</p>
                    </div>
                </a>
            </li>
            <li class="catalog__item__li">
                <a href="/jac/t6/index.php" class="tabs__link__fl">
                    <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/t6.png" alt=""></div>
                    <div class="tabs__item__desc">
                        <h3 class="model_catalog__title">JAC T6</h3>
                        <p class="model_catalog__price">от 2 699 990 руб.</p>
                    </div>
                </a>
            </li>
            <li class="catalog__item__li">
                <a href="/jac/s5/index.php" class="tabs__link__fl">
                    <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/s5.png" alt=""></div>
                    <div class="tabs__item__desc">
                        <h3 class="model_catalog__title">JAC S5</h3>
                        <p class="model_catalog__price">от 2 699 990 руб.</p>
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
                <form class="traid-in_calc form__js" enctype="multipart/form-data" method="POST">
                    <div class="field">
                        <label for="calc__name" class="label__traid-in">Имя*</label>
                        <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                    </div>
                    <div class="field__wrapper">
                        <div class="field">
                            <label for="calc__phone" class="label__traid-in">Телефон*</label>
                            <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Выберите марку</label>
                            <select name="DC" class="input__traid-in">
                                <option value="s3" class="input__traid-in">JAC</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Выберите модель</label>
                            <select name="DC" class="input__traid-in">
                                <option value="s1" class="input__traid-in">JAC S3</option>
                                <option value="s2" class="input__traid-in">JAC J7</option>
                                <option value="s5" class="input__traid-in">JAC S7</option>
                                <option value="s6" class="input__traid-in">JAC T6</option>
                                <option value="s7" class="input__traid-in">JAC S5</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="calc__phone" class="label__traid-in">Дилерский центр</label>
                            <select name="DC" class="input__traid-in">
                                <option value="s1" class="input__traid-in">г. Самара, Аэропортовское шоссе, 1Ж</option>
                                <option value="s2" class="input__traid-in">г. Самара, Южное шоссе 12А, строение 4</option>
                                <option value="s3" class="input__traid-in">г. Самара, Алма-Атинская, 87</option>
                                <option value="s3" class="input__traid-in">пос. Тимофеевка (г.Тольятти), ул. Солнечная, 1А</option>
                                <option value="s4" class="input__traid-in">г. Саратов, Соколовая гора, 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="checkbox__personal">
                        <input id="calc__personal__inf" type="checkbox" class="checkbox__input " checked value="Receipt" data-validate-field="traid__personal">
                        <label for="calc__personal__inf" class="checkbox__label">Согласие на обработку ПД</label>
                    </div>
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
    <p class="seo__title">Группа компаний «АсАвто» - официальный дилер легковых автомобилей JAC в Самаре, Тольятти и Саратове.</p>
    <p class="seo__list__title">Стильные и доступные по цене автомобили JAC в наличии и под заказ в дилерских центрах «АсАвто». Самые выгодные условия на покупку:</p>
    <ul>
        <li class="seo__list-item">седана J7,</li>
        <li class="seo__list-item">кроссовера S7,</li>
        <li class="seo__list-item">пикапа Т6.</li>
        <li class="seo__list-item">Tiggo 4;</li>
        <li class="seo__list-item">TXL.</li>
    </ul>
    <p class="seo__list__title">Для покупателей действуют и другие предложения:</p>
    <ul>
        <li class="seo__list-item">Программа Trade-In. Покупатель может сдать старый автомобиль и получить дополнительную скидку от стоимости нового авто. Чтобы получить оценку автомобиля, достаточно оставить заявку на этом сайте.</li>
        <li class="seo__list-item">Бронь автомобиля в режиме онлайн. Для того, чтобы зарезервировать выбранный автомобиль, не обязательно ехать в салон. Достаточно отправить заявку через данный сайт.</li>
        <li class="seo__list-item">Тест-драйв. Вы сможете лично оценить возможности понравившейся модели: поведение на дороге, возможности подвески и тормозной системы, уровень комфорта в салоне, мощность двигателя.</li>
        <li class="seo__list-item">Программы кредитования от крупных банков и страховых организаций. Для покупателей, которым не хватает собственных средств на покупку авто, разработаны специальные предложения: кредиты с пониженной ставкой и отсрочкой платежа, страховые программы на особых условиях.</li>
        <li class="seo__list-item">Для получения кредита не обязательно приезжать в салон, заявки принимаются через сайт компании. Чтобы получить займ достаточно двух документов.</li>
    </ul>
    <p class="seo__list__title">Покупка автомобиля в «АсАвто» – это:</p>
    <ul>
        <li class="seo__list-item">высокое качество обслуживания;</li>
        <li class="seo__list-item">персональный менеджер;</li>
        <li class="seo__list-item">бонусные программы для постоянных клиентов;</li>
        <li class="seo__list-item">гарантийное и постгарантийное обслуживание в собственном техническом центре;</li>
        <li class="seo__list-item">оригинальное оборудование, запчасти и инструменты;</li>
        <li class="seo__list-item">гарантия производителя на все автомобили;</li>
        <li class="seo__list-item">вся линейка автомобилей Chery в шоу-руме.</li>
    </ul>
    <p class="seo__text">На территории автосалона расположена уютная зона отдыха с детской комнатой, кофе и закусками.</p>
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