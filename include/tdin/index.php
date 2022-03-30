<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/traidIn.css");

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
<main>
            <div class="background">
                <div class="poster__container">
                    <div class="title__poster">
                        <div class="colors__poster">
                            <div class="color__poster">
                                <p class="title__poster__text">Обменяйте свой автомобиль на новый. Выгодно. Быстро. Безопасно.</p>
                                <p class="title__desc__poster">Trade-in - это удобный, выгодный и цивилизованный способ одновременно продать свой автомобиль и приобрести новый.</p>
                            </div>
                        </div>
                    </div>
                    <ul class="offer">
                        <li class="offer__item">Оценка автомобиля выше его рыночной стоимости</li>
                        <li class="offer__item">Скидка на новый автомобиль </li>
                        <li class="offer__item">Вы не остаётесь без автомобиля ни на минуту!</li>
                        <li class="offer__item">Юридически безопасно</li>
                    </ul>
                </div>
            </div>
            <div class="container_site">
                    <div class="title">
                        <h1 class="text__title" id="calculator">Заявка на Trade-in</h1>
                    </div>
                    <div class="container__descrip">
                        <div class="traid__in__position">
                            <section class="form_traid-in">
                                <h2 class="sub_title">
                                    Заполните форму
                                </h2>
                                <form class="form" enctype="multipart/form-data" action="/ajax/feedback.php" method="POST">
                                    <div class="field">
                                        <label for="input__manufacturer" class="label__traid-in">Марка вашего автомобиля</label>
                                        <input type="text" id="input__manufacturer" name="td-model" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                                    </div>
                                    <div class="field">
                                        <label for="input_traid" class="label__traid-in">Модель вашего автомобиля</label>
                                        <input type="text" id="input_traid" name="select-model" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
                                    </div>
                                    <div class="field">
                                        <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                        <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                    </div>
                                    <div class="field__wrapper">
                                        <div class="field">
                                            <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                            <input type="tel" id="calc__phone" name="phone" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                        </div>
                                    </div>
                                    <div class="checkbox_popup">
                                                Нажимая кнопку «Отправить», вы даете Согласие на обработку персональных данных
                                            </div>
                                            <input type="hidden" name="url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="SUBJECT" value=" Заявка на Trade-in*">
                                    <div class="popup__btn__flex">
                                        <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                                    </div>
                                </form>
                            </section>
                        </div>
                        <ul class="instructor__container">
                            <li><p class="title__est__top">Выполните 3 простых шага</p></li>
                            <div class="steps">
                                <li class="title__est number__est__one">Заполните все данные в форме рядом</li>
                            </div>
                            <div class="steps">
                                <li class="title__est number__est__two">Нажмите кнопку «Отправить»</li>
                            </div>
                            <div class="steps">
                                <li class="title__est number__est__three">Ответьте на звонок</li>
                                <li class="instructor__desc">В скором времени поступит звонок от специалиста отдела продаж, на который необходимо ответить.</li>
                            </div>
                        </ul>
                        </div>
                    </div>
                </div>
        </main>
        <section class="map">
            <div class="container">
                <div class="contacts_block">
                    <div class="title">Дилерские центры «АсАвто»</div>
                    <ul class="list_unstyled">
                        <li class="visible" data-coordinates='{"lat": 53.263619542243866, "lng": 50.26215135698404}'
                                data-center='{"lat": 53.263619542243866, "lng": 50.25}' data-zoom="14">
                                <div class="name">АсАвто на Алма-Атинской</div>
                                <div class="items">
                                    <div class="item addr">г. Самара, Алма-Атинская, 87</div>
                                    <div class="item tel"><a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a></div>
                                    <div class="item clock">Автосалон: 9:00 - 21:00</div>
                                    <div class="item clock">СТО: 8:00 - 20:00</div>
                                    <div class="item site"><a href="email:asavtomotors.ru@yandex.ru">asavtomotors.ru@yandex.ru</a></div>
                                </div>
                            </li>
                            <li data-coordinates='{"lat": 53.25195107740439, "lng": 50.36005176768642}' data-center='{"lat": 53.25195107740439, "lng": 50.346}'
                                data-zoom="14">
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
                            <li data-coordinates='{"lat": 53.578003950614864, "lng": 49.41344120138184}' data-center='{"lat": 53.578003950614864, "lng": 49.40}'
                                data-zoom="14">
                                <div class="name">АсАвто в пос.Тимофеевка (г. Тольятти)</div>
                                <div class="items">
                                    <div class="item addr">пос. Тимофеевка (г.Тольятти), ул. Солнечная, 1А</div>
                                    <div class="item tel"><a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a></div>
                                    <div class="item clock">Автосалон: 9:00 - 21:00</div>
                                    <div class="item clock">СТО: 8:00 - 20:00</div>
                                    <div class="item site"><a href="email:asavtomotors.ru@yandex.ru">asavtomotors.ru@yandex.ru</a></div>
                                </div>
                            </li>
                            <li  data-coordinates='{"lat": 51.557420, "lng": 46.066993}' data-center='{"lat": 51.557420, "lng": 46.052}' data-zoom="14">
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