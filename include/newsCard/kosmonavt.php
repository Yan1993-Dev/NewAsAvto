<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/news__card.css");
?>
<nav class="nav">
    <ul class="navigation">
        <li class="nav__item"><a href="../index.php" class="nav__item__link">Новые авто</a>
            <ul class="nav__nav">
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">GEELY</a></li>
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">HAVAL</a></li>
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">CHERY</a></li>
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">EXEED</a></li>
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">CHANGAN</a></li>
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">FAW</a></li>
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">JAC</a></li>
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">GWM Pickup</a></li>
                <li class="nav__nav__item"><a href="../index.php" class="nav__nav__link">Все автомобили</a></li>
            </ul>
        </li>
        <li class="nav__item"><a href="../index.php" class="nav__item__link">Сервис</a></li>
        <li class="nav__item"><a href="../index.php" class="nav__item__link">Акции</a></li>
        <li class="nav__item"><a href="../index.php" class="nav__item__link">Кредит</a></li>
        <li class="nav__item"><a href="../index.php" class="nav__item__link">Трейд-ин</a></li>
        <li class="nav__item"><a href="../index.php" class="nav__item__link">Новости</a></li>
        <li class="nav__item"><a href="../index.php" class="nav__item__link">Отзывы</a></li>
        <li class="nav__item"><a href="../index.php" class="nav__item__link">О нас</a></li>
        <li class="nav__item"><a href="../index.php" class="nav__item__link">Контакты</a></li>
    </ul>
</nav>
<main>
    <div class="container_site">
        <h1 class="title__news">Космонавт Антон Шкаплеров – герой автомобильного бренда EXEED</h1>
        <div>
            <div class="title__image">
                <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/foqmrqyevolw83ivij4d9i0e8a9odv4p.jpg" alt="title" class="title__img">
            </div>
            <div class="news__date">
                <p class="news__date-info">18.08.2021</p>
            </div>
            <div class="news__desc">
                <p class="news__desc-text">Автомобильный бренд EXEED в преддверии старта продаж флагманской модели — внедорожника VX — снял видеоисторию «Как превратить мечты в реальность?» с участием космонавта-испытателя Антона Шкаплерова.</p>
                <p class="news__desc-text">Мечта и упорная работа помогли Антону Шкаплерову добиться большего и преодолеть границы человеческих возможностей. А стремление выйти за рамки привычного помогло инженерам EXEED создать новый внедорожник VX.</p>
                <p class="news__desc-text">Китайский бренд EXEED предоставил возможность российскому космонавту-испытателю одному из первых испытать внедорожник VX. Герой был выбран на основе тождественных стремлений стран — Россия и Китая — в покорении и освоении космоса.</p>
                <p class="news__desc-text">Видеоролик «Как превратить мечты в реальность?» основан на личной истории успеха Антона. В детстве ему часто снились сны о полёте и это невероятное ощущение, состояние, когда кажется, что буквально всё тебе под силу, стало для Антона мечтой. Стремясь и преодолевая, он шёл к мечте, чтобы взлететь выше других. Напор и приложенные Антоном усилия соответствуют духу продуктов автомобильного бренда EXEED.</p>
                <p class="news__desc-text">«Видеоисторией бренда EXEED и Антона Шкаплерова мы хотим показать людям, что невозможное возможно, что любая мечта, пусть даже самая невероятная, может стать реальностью. И как реальность может превзойти даже самые дерзкие мечты. Верьте в себя и позвольте себе достичь большего», — прокомментировал директор по развитию бренда EXEED в России Геннадий Баранов.</p>
            </div>
        </div>
    </div>
    <div class="background__fos">
        <div class="container_site">
            <div class="flex__cont">
                <div class="middle">
                    <ul class="content_li">
                        <li class="title__content__item">Заинтересовала какая-то новость? Есть вопросы? </li>
                        <li class="title__content__item">Оставьте заявку на обратный звонок! Специалист отдела продаж свяжется с Вами и ответит на все вопросы.
                        </li>
                    </ul>
                </div>
                <section class="form_traid-in">
                    <h2 class="sub_title" id="calculator">
                        Заявка на обратный звонок
                    </h2>
                    <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                        <div class="field">
                            <label for="calc__name" class="label__traid-in">Имя*</label>
                            <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя" />
                        </div>
                        <div class="field__wrapper">
                            <div class="field">
                                <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон" />
                            </div>
                            <div class="field">
                                <label for="drive__calendar" class="label__traid">Выберите день*</label>
                                <input type="date" id="drive__datapicker" name="datepicker" class="input__traid-in _req" placeholder="Нажмите" />
                            </div>
                        </div>
                        <div class="checkbox_popup">
                            Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                        </div>
                        <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                        <input type="hidden" name="SUBJECT" value=" Заявка на Обратный звонок из Новостей*">
                        <div class="popup__btn__flex">
                            <button class="btn credit__btn open_thanks_js" type="submit">
                                Отправить
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <div class="container_site">
        <h2 class="slider_title_one">Другие наши новости</h2>
    </div>
    <div class="container_site">
        <div class="slider_wrapper">
            <div class="slider-container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="category__image"><img src="../static/images/big.jpg" class="news__card category__image" alt=""></a>
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="category__image"><img src="../static/images/big.jpg" class="news__card category__image" alt=""></a>
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="category__image"><img src="../static/images/big.jpg" class="news__card category__image" alt=""></a>
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="../static/images/big.jpg" alt="" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="../static/images/big.jpg" alt="" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="../static/images/big.jpg" alt="" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="../static/images/big.jpg" alt="" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="../static/images/big.jpg" alt="" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="../static/images/big.jpg" alt="" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
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