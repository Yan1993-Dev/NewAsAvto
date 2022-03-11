<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/service.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/service__map.css");
?>


<nav class="nav">
    <ul class="navigation">
        <li class="nav__item"><a href="../novye-avto/index.php" class="nav__item__link">Новые авто</a>
            <ul class="nav__nav">
                <li class="nav__nav__item"><a href="../geely/index.php" class="nav__nav__link">GEELY</a></li>
                <li class="nav__nav__item"><a href="../haval/index.php" class="nav__nav__link">HAVAL</a></li>
                <li class="nav__nav__item"><a href="../chery/index.php" class="nav__nav__link">CHERY</a></li>
                <li class="nav__nav__item"><a href="../exeed/index.php" class="nav__nav__link">EXEED</a></li>
                <li class="nav__nav__item"><a href="../changan/index.php" class="nav__nav__link">CHANGAN</a></li>
                <li class="nav__nav__item"><a href="../faw/index.php" class="nav__nav__link">FAW</a></li>
                <li class="nav__nav__item"><a href="../jac/index.php" class="nav__nav__link">JAC</a></li>
                <li class="nav__nav__item"><a href="../gwm/index.php" class="nav__nav__link">GWM Pickup</a></li>
                <li class="nav__nav__item"><a href="../novye-avto/index.php" class="nav__nav__link">Все автомобили</a></li>
            </ul>
        </li>
        <li class="nav__item"><a href="../servis/index.php" class="nav__item__link">Сервис</a></li>
        <li class="nav__item"><a href="../aktsii/index.php" class="nav__item__link">Акции</a></li>
        <li class="nav__item"><a href="../kredit/index.php" class="nav__item__link">Кредит</a></li>
        <li class="nav__item"><a href="../treyd-in/index.php" class="nav__item__link">Трейд-ин</a></li>
        <li class="nav__item"><a href="../novosti/index.php" class="nav__item__link">Новости</a></li>
        <li class="nav__item"><a href="../otzyvy/index.php" class="nav__item__link">Отзывы</a></li>
        <li class="nav__item"><a href="../o-nas/index.php" class="nav__item__link">О нас</a></li>
        <li class="nav__item"><a href="../kontakty/index.php" class="nav__item__link">Контакты</a></li>
    </ul>
</nav>
<main>
    <div class="background">
        <div class="poster__container">
            <div class="title__poster">
                <div class="colors__poster">
                    <div class="color__poster">
                        <p class="title__poster__text">Сервисные станции компании «АсАвто»</p>
                        <p class="title__desc__poster">Качество и доступность - главные приоритеты работы наших СТО. Доверьте нам Ваш автомобиль!</p>
                    </div>
                </div>
            </div>
            <ul class="offer">
                <li class="offer__item">Высококвалифицированные специалисты</li>
                <li class="offer__item">Специализированное оборудование</li>
                <li class="offer__item">Гарантийное и постгарантийное обслуживание</li>
                <li class="offer__item">Бонусная программа «АсАвто» - экономьте деньги!</li>
            </ul>
        </div>
    </div>
    <nav class="nav__bar">
        <ul class="nav__bar__ul">
            <li class="nav__bar__li"><a href="/servis/index.php" class="nav__bar__item color__notarget">Техническое обслуживание</a></li>
            <li class="nav__bar__li"><a href="/remont-avtomobilya/index.php" class="nav__bar__item color__notarget">Ремонт автомобиля</a></li>
            <li class="nav__bar__li"><a href="/aktsii-servisa/index.php" class="nav__bar__item color__notarget">Акции сервиса</a></li>
            <li class="nav__bar__li"><a href="/skhema-proezda/index.php" class="nav__bar__item color__target">Схема проезда</a></li>
        </ul>
    </nav>
    </div>
    </div>
    <div class="container_site">
        <div class="maps__title">
            <section class="map__wrapper">
                <h2 class="map__title">ДЦ Самара Восток</h2>
                <div class="wrapper__map">
                    <div class="wrapper__inner">
                        <div class="slider-container">
                            <div class="swiper-container__map">
                                <div class="swiper-wrapper__map">
                                    <div class="swiper-slide card">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/aeroport.png" class="category__image" alt="">
                                    </div>
                                    <div class="swiper-slide card">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/serv__aero.png" class="category__image" alt="">
                                    </div>
                                    <div class="swiper-slide card">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/serv__door.png" class="category__image" alt="">
                                    </div>
                                    <div class="swiper-slide card">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/serv__resep.png" class="category__image" alt="">
                                    </div>
                                </div>
                                <div class="swiper-pagination_one"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper__info">
                        <div class="vertical">
                            <div class="content__block__desc">
                                <div class="content__adress">г. Самара, Аэропортовское шоссе 1Ж</div>
                                <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                            </div>
                            <ul class="map__list">
                                <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/yandex_maps_logo.png" class="icon__map" alt=""><a href="https://yandex.ru/maps/-/CCUqE6cBlB" class="map__list__link">Построить маршрут в Яндекс.Картах</a></li>
                                <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/google_maps_logo.png" class="icon__map" alt=""><a href="https://goo.gl/maps/xk3xNoibT2NThpeA8" class="map__list__link">Построить маршрут в Картах Google</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <section>
            <h2 class="map__title">ДЦ Самара Юг</h2>
            <div class="wrapper__map">
                <div class="slider_wrapper">
                    <div class="slider-container">
                        <div class="swiper-container__map">
                            <div class="swiper-wrapper__map">
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/south__street.jpg" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/south__saloon.jpg" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/south__door.jpg" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/south__recept.jpg" class="category__image" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination_one"></div>
                        </div>
                    </div>
                </div>
                <div class="wrapper__info">
                    <div class="vertical">
                        <div class="content__block__desc">
                            <div class="content__adress">г. Самара, Южное шоссе 12а, строение 4</div>
                            <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                            <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                        </div>
                        <ul class="map__list">
                            <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/yandex_maps_logo.png" class="icon__map" alt=""><a href="https://yandex.ru/maps/-/CCUyaCwExB" class="map__list__link">Построить маршрут в Яндекс.Картах</a></li>
                            <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/google_maps_logo.png" class="icon__map" alt=""><a href="https://goo.gl/maps/AxFoZyDPhrAvSh4y9" class="map__list__link">Построить маршрут в Картах Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2 class="map__title">ДЦ Самара Север</h2>
            <div class="wrapper__map">
                <div class="slider_wrapper">
                    <div class="slider-container">
                        <div class="swiper-container__map">
                            <div class="swiper-wrapper__map">
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/alma.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/alma__salon.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/alma__door.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/alma__saloon.png" class="category__image" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination_one"></div>
                        </div>
                    </div>
                </div>
                <div class="wrapper__info">
                    <div class="vertical">
                        <div class="content__block__desc">
                            <div class="content__adress">г. Самара, ул. Алма-Атинская 87</div>
                            <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                            <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                        </div>
                        <ul class="map__list">
                            <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/yandex_maps_logo.png" class="icon__map" alt=""><a href="https://yandex.ru/maps/-/CCUqE6WDDB" class="map__list__link">Построить маршрут в Яндекс.Картах</a></li>
                            <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/google_maps_logo.png" class="icon__map" alt=""><a href="https://goo.gl/maps/7aLSV4FsiwuyFiMB9" class="map__list__link">Построить маршрут в Картах Google</a></li>
                        </ul>
                    </div>
                </div>
        </section>
        <section>
            <h2 class="map__title">ДЦ Тольятти</h2>
            <div class="wrapper__map">
                <div class="slider_wrapper">
                    <div class="slider-container">
                        <div class="swiper-container__map">
                            <div class="swiper-wrapper__map">
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tlt.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tlt__asavto.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tlt__door.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tlt__recept.png" class="category__image" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination_one"></div>
                        </div>
                    </div>
                </div>
                <div class="wrapper__info">
                    <div class="vertical">
                        <div class="content__block__desc">
                            <div class="content__adress">пос. Тимофеевка (г. Тольятти), ул. Солнечная 1А</div>
                            <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                            <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                        </div>
                        <ul class="map__list">
                            <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/yandex_maps_logo.png" class="icon__map" alt=""><a href="https://yandex.ru/maps/-/CCUqE6W43B" class="map__list__link">Построить маршрут в Яндекс.Картах</a></li>
                            <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/google_maps_logo.png" class="icon__map" alt=""><a href="https://goo.gl/maps/nmoTfWMAK1cPsrFVA" class="map__list__link">Построить маршрут в Картах Google</a></li>
                        </ul>
                    </div>
                </div>
        </section>
        <section>
            <h2 class="map__title">ДЦ Саратов</h2>
            <div class="wrapper__map">
                <div class="slider_wrapper">
                    <div class="slider-container">
                        <div class="swiper-container__map">
                            <div class="swiper-wrapper__map">
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/saratov.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/saratov__saloon.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/saratov__door.png" class="category__image" alt="">
                                </div>
                                <div class="swiper-slide card">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/saratov__recept.png" class="category__image" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination_one"></div>
                        </div>
                    </div>
                </div>
                <div class="wrapper__info">
                    <div class="vertical">
                        <div class="content__block__desc">
                            <div class="content__adress">г. Саратов, Соколовая гора, 4</div>
                            <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                            <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                        </div>
                        <ul class="map__list">
                            <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/yandex_maps_logo.png" class="icon__map" alt=""><a href="https://yandex.ru/maps/-/CCUqE6f69C" class="map__list__link">Построить маршрут в Яндекс.Картах</a></li>
                            <li class="map__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/google_maps_logo.png" class="icon__map" alt=""><a href="https://g.page/asavto-saratov?share" class="map__list__link">Построить маршрут в Картах Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    </div>
    </div>
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