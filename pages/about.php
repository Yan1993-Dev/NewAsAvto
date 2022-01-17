<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
?>
<body>
    <div class="container_site">
        <header class="header">
            <button class="header__mobile_btn">
                <svg width="79" height="69" viewBox="0 0 79 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="79" height="69" fill="#47A0ED"/>
                    <line x1="14" y1="14.5" x2="64" y2="14.5" stroke="black"/>
                    <line x1="14.012" y1="33.5" x2="64.012" y2="33.5" stroke="white" stroke-width="5"/>
                    <line x1="14.012" y1="50.5" x2="64.012" y2="50.5" stroke="white" stroke-width="5"/>
                    <line x1="14" y1="16.5" x2="64" y2="16.5" stroke="white" stroke-width="5"/>
                    </svg>
            </button>
                <div class="mobile__header">
                    <div class="mobile__header__container">
                        <nav class="nav__mobile">
                            <ul class="navigation__mobile">
                                <li class="nav__item__mobile"><a href="../pages/credit.html" class="nav__item__link__mobile">Кредит</a></li>
                                <li class="nav__item__mobile"><a href="../pages/traidIn.html" class="nav__item__link__mobile">Traid-in</a></li>
                                <li class="nav__item__mobile"><a href="../pages/stocks.html" class="nav__item__link__mobile">Акции</a></li>
                                <li class="nav__item__mobile"><a href="../pages/news.html" class="nav__item__link__mobile">Новости</a></li>
                                <li class="nav__item__mobile"><a href="../pages/service.html" class="nav__item__link__mobile">Сервис</a></li>
                                <li class="nav__item__mobile"><a href="../pages/feedback.html" class="nav__item__link__mobile">Отзывы</a></li>
                                <li class="nav__item__mobile"><a href="../pages/about.html" class="nav__item__link__mobile">О нас</a></li>
                                <li class="nav__item__mobile"><a href="../pages/contact.html" class="nav__item__link__mobile">Контакты</a></li>
                            </ul>
                            <div class="mobile__desc">
                                <a href="tel:+7(8846)215-00-07" class="phone__mobile"><img src="../static/icons/phoneMobile.svg" alt="" class="phone__icon">8 (846) 215 00 07</a>
                            <div class="work__detail__mobile">
                                <p class="work__title__mobile">График работы (без выходных)</p>
                                <p class="work__saloon__mobile">Автосалон: пн-вс 09:00-21:00</p>
                                <p class="work__tech__mobile">СТО: пн-вс 08:00-20:00</p>
                            </div>
                        </div>
                        </nav>
                        <button class="header__close__btn">
                            <svg width="58" height="43" viewBox="0 0 58 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="58" height="43" fill="#47A0ED"/>
                                <line y1="-2.5" x2="34.7626" y2="-2.5" transform="matrix(0.69484 0.719164 -0.69484 0.719164 15 9)" stroke="white" stroke-width="5"/>
                                <line y1="-2.5" x2="34.7512" y2="-2.5" transform="matrix(0.694846 -0.719159 0.694835 0.719169 18.0918 33.9917)" stroke="white" stroke-width="5"/>
                                </svg>
                        </button>
                    </div>
                </div>
                <div class="logo_container">
                    <a class="logo" href="../index.html"><img src="../static/images/logo.png" alt="company_logo" class="company__logo"></a>
                </div>
                <a href="tel: +7 (846) 215-07-58" class="mobile_phone_btn"><svg width="35" height="37" viewBox="0 0 35 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33.363 3.33006L26.928 0.854078C26.2288 0.585624 25.4647 0.947113 25.1171 1.70458L21.4824 9.71205C21.1644 10.4127 21.279 11.2863 21.7667 11.8396L25.324 15.9302C22.6374 21.3931 18.3225 25.718 13.1819 27.9257L10.3784 23.0905C9.99402 22.4282 9.28956 22.1442 8.64829 22.3913L1.31949 25.215C0.618709 25.4932 0.183646 26.3164 0.286732 27.1738L1.23996 35.0654C1.33943 35.8849 1.90327 36.5287 2.61654 36.6038C18.7818 38.3071 33.0254 24.2631 34.4107 5.19346C34.4712 4.36079 34.0375 3.58842 33.363 3.33006Z" fill="#47A0ED"/>
                    </svg>
                </a>
                <div class="adress hidden__adapt">
                    <ul class="addr__list hidden__adapt">
                        <li class="addr__item">г. Самара, Аэропортовское шоссе, 1Ж</li>
                        <li class="addr__item">г. Самара, ул. Алма-Атинская, 87</li>
                        <li class="addr__item">г. Самара, Южное шоссе 12а, строение 4</li>
                        <li class="addr__item">г. Самара, Карла-Маркса, 412Б (кузовной ремонт)</li>
                    </ul>
                    <ul class="addr__list hidden__adapt">
                        <li class="addr__item">пос. Тимофеевка (г. Тольятти), ул. Солнечная 1А</li>
                        <li class="addr__item">г. Саратов, Большая Сеченская, 8</li>
                        <li class="addr__item">г. Саратов, Соколовая гора, 4</li>
                    </ul>
                </div>
                <div class="wrapper__phone">
                    <a href="tel:+7(8846)215-00-07" class="phone"><img src="../static/icons/phone.svg" alt="phone" class="phone__icon">8 (846) 215 00 07</a>
                    <a href="#" class="rev__phone"><p class="text__phone open_popup_js">Заказать звонок</p></a>
                    <div class="work__detail">
                        <p class="work__title">График работы (без выходных)</p>
                        <p class="work__saloon">Автосалон: пн-вс 09:00-21:00</p>
                        <p class="work__tech">СТО: пн-вс 08:00-20:00</p>
                    </div>
                </div>
        </header>
    </div>
        <nav class="nav">
            <ul class="navigation">
                <li class="nav__item"><a href="../pages/catalogCars.html" class="nav__item__link">Новые авто</a>
                    <ul class="nav__nav">
                        <li class="nav__nav__item"><a href="../pages/catalogPageGeely.html" class="nav__nav__link">GEELY</a></li>
                        <li class="nav__nav__item"><a href="../pages/catalogPageHaval.html" class="nav__nav__link">HAVAL</a></li>
                        <li class="nav__nav__item"><a href="../pages/catalogPageChery.html" class="nav__nav__link">CHERY</a></li>
                        <li class="nav__nav__item"><a href="../pages/catalogPageExeed.html" class="nav__nav__link">EXEED</a></li>
                        <li class="nav__nav__item"><a href="../pages/catalogPageChangan.html" class="nav__nav__link">CHANGAN</a></li>
                        <li class="nav__nav__item"><a href="../pages/catalogPageFaw.html" class="nav__nav__link">FAW</a></li>
                        <li class="nav__nav__item"><a href="../pages/catalogPageJac.html" class="nav__nav__link">JAC</a></li>
                        <li class="nav__nav__item"><a href="../pages/catalogPageGWM.html" class="nav__nav__link">GWM Pickup</a></li>
                        <li class="nav__nav__item"><a href="../pages/catalogCars.html" class="nav__nav__link">Все автомобили</a></li>
                    </ul>
                    </li>
                <li class="nav__item"><a href="../pages/service.html" class="nav__item__link">Сервис</a></li>
                <li class="nav__item"><a href="../pages/stocks.html" class="nav__item__link">Акции</a></li>
                <li class="nav__item"><a href="../pages/credit.html" class="nav__item__link">Кредит</a></li>
                <li class="nav__item"><a href="../pages/traidIn.html" class="nav__item__link">Трейд-ин</a></li>
                <li class="nav__item"><a href="../pages/news.html" class="nav__item__link">Новости</a></li>
                <li class="nav__item"><a href="../pages/feedback.html" class="nav__item__link">Отзывы</a></li>
                <li class="nav__item"><a href="../pages/about.html" class="nav__item__link checked__link">О нас</a></li>
                <li class="nav__item"><a href="../pages/contact.html" class="nav__item__link">Контакты</a></li>
            </ul>
        </nav>
        <div class="background">
            <div class="poster__container">
                <div class="title__poster">
                    <div class="colors__poster">
                        <div class="color__poster">
                            <p class="title__poster__text">Команда профессионалов, преданных своему делу</p>
                            <p class="title__desc__poster">Приятно познакомиться, это - мы! Успех компании напрямую зависит от людей, формирующих команду. Мы формируем наш успех.</p>
                        </div>
                    </div>
                </div>
                <ul class="offer">
                    <li class="offer__item">Компания «АсАвто» более 16 лет на рынке</li>
                    <li class="offer__item">Уникальная система управления процессами</li>
                    <li class="offer__item">Высококвалифицированная команда</li>
                    <li class="offer__item">Стабильность и желание развиваться</li>
                </ul>
            </div>
        </div>
        <main>
            <div class="container_site">
                <section class="section__tabs">
                    <div class="tabs">
                        <div class="tabs__nav">
                            <label class="tabs__nav-btn active" for="main-tab-1">О компании</label>                     
                            <label class="tabs__nav-btn" for="main-tab-2">Наши сотрудники</label>                        
                            <label class="tabs__nav-btn" for="main-tab-3">Сертификаты</label>
                            <label class="tabs__nav-btn" for="main-tab-4">Достижения</label>
                          </div>
                          <input class="tab-radio" id="main-tab-1" name="main-group" type="radio" checked="checked">
                          <div class="tab-content">
                            <div class="sub-tabs-container">
                              <label class="sub__tabs__item__about" for="sub-tab-1"><p class="seo__title">Крупнейший официальный дилер китайских автомобилей в Поволжье Группа компаний «АсАвто»</p>
                                <p class="seo__sub_title">Группа компаний «АсАвто» - официальный дилер автомобильных марок Geely, Haval, Chery, EXEED, Changan, FAW, JAC, GWM в Самаре и Тольятти, также, компания имеет дилерские центры в г. Саратов и является крупнейшим официальным дилером китайских автомобилей в Поволжье. Помимо шоу-румов с широким ассортиментом новых автомобилей, клиентам компании доступен не менее широкий выбор автомобилей с пробегом с гарантией качества и юридической чистоты.</p>
                                <p class="seo__sub_title">Каждый дилерский центр включает в себя современную станцию технического обслуживания с полным набором современного оборудования, необходимого для качественного обслуживания и ремонта автомобилей профильных марок.</p>
                                <p class="seo__sub_title">Для клиентов компании действует «Бонусная программа АсАвто», участие в которой позволяет владельцам автомобилей экономить на техническом обслуживании и ремонте. Все новые автомобили, поступающие в автосалоны компании "АсАвто" проходят тщательную предпродажную подготовку, которая включает в себя более 100 операций. Каждый покупатель может быть уверен в качестве приобретаемого автомобиля.</p>
                                <p class="seo__sub_title">Мы озабочены уровнем удовлетворённости всех наших клиентов. Приобрели ли вы новый автомобиль или автомобиль с пробегом, доверили ли нам сервисное обслуживание или ремонт Вашего автомобиля - нам важно, чтобы Вы остались довольны.</p>
                                <p class="seo__title">Краткая история «АсАвто»</p>
                                <p class="seo__sub_title">2010 – Открывается Первый дилерский центр «АсАвто» в г. Тольятти!</p>
                                <p class="seo__sub_title">2010 – Компания занимается продажей автомобилей производства украинской корпорации «Богдан», Ижевского автомобильного завода, «ВАЗинтерсервис» и «Супер-Авто».</p>
                                <p class="seo__sub_title">2011 – Компания становится региональным представителем марки «Богдан» в России. На территориях компании в 4 городах располагаются региональные склады автомобилей «Богдан».</p>
                                <p class="seo__sub_title">2012 – Компания становится официальным дилером автомобилей марки FAW в Тольятти.</p>
                                <p class="seo__sub_title">2013 – Компания становится официальным дилером автомобилей марки LIFAN в Тольятти.</p>
                                <p class="seo__sub_title">2014 – Компания становится официальным региональным дилером автомобилей марки JAC в Поволжском Федеральном Округе.</p>
                                <p class="seo__sub_title">2015 – Компания открывает второй Дилерский центр «АсАвто» в г. Самара!</p>
                                <p class="seo__sub_title">2015 – Компания становится официальным дилером автомобилей марки CHERY и Brilliance.</p>
                                <p class="seo__sub_title">2016 – Компания становится официальным дилером автомобилей марки FOTON.</p>
                                <p class="seo__sub_title">2017 – Компания становится официальным дилером автомобилей марки Ravon и УАЗ.</p>
                                <p class="seo__sub_title">2018 – Компания открывает Новый кузовной цех в г. Тольятти.</p>
                                <p class="seo__sub_title">2019 – Компания становится официальным дилером автомобилей марки Changan.</p>
                                <p class="seo__sub_title">2019 – Компания открывает Комплекс из Двух Дилерских центров и ещё Один Кузовной сервис «АсАвто» в г. Самара!</p>
                                <p class="seo__sub_title">2020 – Компания становится официальным дилером автомобилей марки CHERYEXEED.</p>
                                <p class="seo__sub_title">2020 – Компания открывает Комплекс из Трёх Дилерских центров «АсАвто» в г. Саратов!</p>
                                <p class="seo__sub_title">2021 – Компания проводит ряд реконструкций действующих Дилерских центров, с целью упрочнения позиций и предоставления клиентам более качественного сервиса и услуг.</p>
                                <p class="seo__sub_title">2022 – Компания планирует открытие не менее 3 Дилерских центров в разных городах и добавление Новых брендов в портфель!</p>
                                </label>
                            </div>
                            </div>
                          </div>
                          <input class="tab-radio" id="main-tab-2" name="main-group" type="radio"/>
                          <div class="tab-content">
                              <div class="sub-tabs-container">
                              <label class="sub__tabs__item__about" for="sub-tab-111">
                                  <ul class="lead">
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/alekseeva.jfif" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Алексеева Евгения Владимировна</div>
                                                      <div class="lead__desc">Генеральный директор Группы компаний</div>
                                                      <a href="mailto:alekseeva@asavtomotors.ru" class="email__lead">alekseeva@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/volkova.jfif" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Волкова Ирина Ивановна</div>
                                                      <div class="lead__desc">Ассистент Генерального директора Группы компаний.</div>
                                                      <a href="mailto:info@asavtomotors.ru" class="email__lead">info@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/balashova.png" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Балашова Наталья Ивановна</div>
                                                      <div class="lead__desc">Руководитель клиентской службы</div>
                                                      <a href="mailto:nbalashova@asavtomotors.ru" class="email__lead">nbalashova@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/boldyrew.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Болдырев Сергей</div>
                                                      <div class="lead__desc">Региональный директор</div>
                                                      <a href="mailto:sboldyrev@asavtomotors.ru" class="email__lead">sboldyrev@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/rastopshiw.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Растопшин Андрей Иванович</div>
                                                      <div class="lead__desc">Директор по качеству и развитию процессов</div>
                                                      <a href="mailto:arastopshin@asavtomotors.ru" class="email__lead">arastopshin@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/erachenko.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Еращенко Антон Сергеевич</div>
                                                      <div class="lead__desc">Директор по Digital-маркетингу</div>
                                                      <a href="mailto:ase@asavtomotors.ru" class="email__lead">ase@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/alla.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Капустина Алла Александровна</div>
                                                      <div class="lead__desc">Руководитель направления Event-маркетинг</div>
                                                      <a href="mailto:market@asavtomotors.ru" class="email__lead">market@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/sharay.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Шарай Андрей Иванович</div>
                                                      <div class="lead__desc">Директор по развитию</div>
                                                      <a href="mailto:asharay@asavtomotors.ru" class="email__lead">asharay@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/ogay.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Огай Алексей</div>
                                                      <div class="lead__desc">Финансовый директор</div>
                                                      <a href="mailto:aogai@asavtomotors.ru" class="email__lead">aogai@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/dudnikova.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Дудникова Марина Ивановна</div>
                                                      <div class="lead__desc">Руководитель направления кредитования и страхования</div>
                                                      <a href="mailto:mdudnikova@asavtomotors.ru" class="email__lead">mdudnikova@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/doronin.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Доронин Дмитрий Иванович</div>
                                                      <div class="lead__desc">Технический директор</div>
                                                      <a href="mailto:ddoronin@asavtomotors.ru" class="email__lead">ddoronin@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/klimenko.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Клименко Игорь Иванович</div>
                                                      <div class="lead__desc">Директор по послепродажному обслуживанию</div>
                                                      <a href="mailto:iklimenko@asavtomotors.ru" class="email__lead">iklimenko@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="lead__list">
                                          <div class="lead__photo__list">
                                              <div class="lead__container">
                                                  <img src="../static/images/photo/markov.jpg" alt="photo__lead" class="photo__lead">
                                                  <div class="lead__container__desc">
                                                      <div class="lead__title">Марков Александр Иванович</div>
                                                      <div class="lead__desc">Руководитель отдела запасных частей</div>
                                                      <a href="mailto:amarkov@asavtomotors.ru" class="email__lead">amarkov@asavtomotors.ru</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                  <div class="test">
                                      <h1 class="text__title">ДЦ Тольятти</h1>
                                  </div>
                                  <div class="content__block">
                                      <div class="content__block__container">
                                          <img src="../static/images/tlt__tim.jpg" alt="" class="title__block__image">
                                          <div class="content__block__desc">
                                              <div class="content__adress">пос. Тимофеевка (г. Тольятти), ул. Солнечная 1А</div>
                                              <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                              <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                          </div>
                                      </div>
                                      <ul class="content__lead__container">
                                          <li class="block__lead">
                                              <img src="../static/images/photo/hil.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Хиль Ирина Ивановна</div>
                                                  <div class="lead__desc__block">Директор Дилерского центра</div>
                                                  <a href="mailto:ikhil@asavtomotors.ru" class="email__lead">ikhil@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/lowpatin.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Лопатин Александр</div>
                                                  <div class="lead__desc__block">Руководитель отдела продаж</div>
                                                  <a href="mailto:alopatin@asavtomotors.ru" class="email__lead">alopatin@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/dvornikow.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Дворников Никита Иванович</div>
                                                  <div class="lead__desc__block">Руководитель СТО</div>
                                                  <a href="mailto:ndvornikov@asavtomotors.ru" class="email__lead">ndvornikov@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="title">
                                      <h1 class="text__title">ДЦ Самара Север</h1>
                                  </div>
                                  <div class="content__block">
                                      <div class="content__block__container">
                                          <img src="../static/images/samara__nth.jpg" alt="" class="title__block__image">
                                          <div class="content__block__desc">
                                              <div class="content__adress">г. Самара, ул. Алма-Атинская 87</div>
                                              <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                              <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                          </div>
                                      </div>
                                      <ul class="content__lead__container">
                                          <li class="block__lead">
                                              <img src="../static/images/photo/vecher.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Вечер Ольга Ивановна</div>
                                                  <div class="lead__desc__block">Директор Дилерского центра</div>
                                                  <a href="mailto:Ovecher@asavtomotors.ru" class="email__lead">Ovecher@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/tuguzbaeva.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Тугузбаева Наиля Ивановна</div>
                                                  <div class="lead__desc__block">Руководитель отдела продаж</div>
                                                  <a href="mailto:ntuguzbaeva@asavtomotors.ru" class="email__lead">ntuguzbaeva@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/grishin.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Гришин Дмитрий Иванович</div>
                                                  <div class="lead__desc__block">Руководитель СТО</div>
                                                  <a href="mailto:Dgrihin@asavtomotors.ru" class="email__lead">Dgrihin@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="title">
                                      <h1 class="text__title">ДЦ Самара Восток</h1>
                                  </div>
                                  <div class="content__block">
                                      <div class="content__block__container">
                                          <img src="../static/images/samara__east.jpg" alt="" class="title__block__image">
                                          <div class="content__block__desc">
                                              <div class="content__adress">г. Самара, Аэропортовское шоссе 1Ж</div>
                                              <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                              <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                          </div>
                                      </div>
                                      <ul class="content__lead__container">
                                          <li class="block__lead">
                                              <img src="../static/images/photo/maks.jfif" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Иванов Максим </div>
                                                  <div class="lead__desc__block">Директор Дилерского центра</div>
                                                  <a href="mailto:ivanovm@asavtomotors.ru" class="email__lead">	ivanovm@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/sbrodowa.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Сбродова Евгения Ивановна</div>
                                                  <div class="lead__desc__block">Руководитель отдела продаж Chery</div>
                                                  <a href="mailto:esbrodova@asavtomotors.ru" class="email__lead">esbrodova@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/potroshkov.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Потрошков Михаил Иванович</div>
                                                  <div class="lead__desc__block">Руководитель отдела продаж Geely</div>
                                                  <a href="mailto:mpotroshkov@asavtomotors.ru" class="email__lead">mpotroshkov@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/varfolomey.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Варфоломеев Михаил</div>
                                                  <div class="lead__desc__block">Руководитель СТО</div>
                                                  <a href="mailto:mvarfolomeev@asavtomotors.ru" class="email__lead">mvarfolomeev@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="title">
                                      <h1 class="text__title">ДЦ Самара Юг</h1>
                                  </div>
                                  <div class="content__block">
                                      <div class="content__block__container">
                                          <img src="../static/images/samara__south.jpg" alt="" class="title__block__image">
                                          <div class="content__block__desc">
                                              <div class="content__adress">г. Самара, Южное шоссе 12а, строение 4</div>
                                              <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                              <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                          </div>
                                      </div>
                                      <ul class="content__lead__container">
                                          <li class="block__lead">
                                              <img src="../static/images/photo/belkin.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Белкин Антон Иванович</div>
                                                  <div class="lead__desc__block">Директор Дилерского центра</div>
                                                  <a href="mailto:abelkin@asavtomotors.ru" class="email__lead">abelkin@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/ulesov.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Улесов Виталий Иванович</div>
                                                  <div class="lead__desc__block">Руководитель отдела продаж</div>
                                                  <a href="mailto:vulesov@asavtomotors.ru" class="email__lead">vulesov@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/dvornikow.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Воробьёв Сергей Иванович</div>
                                                  <div class="lead__desc__block">Руководитель СТО</div>
                                                  <a href="mailto:svorobyev@asavtomotors.ru" class="email__lead">svorobyev@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="title">
                                      <h1 class="text__title">ДЦ Саратов</h1>
                                  </div>
                                  <div class="content__block">
                                      <div class="content__block__container">
                                          <img src="../static/images/saratow__chery.jpg" alt="" class="title__block__image">
                                          <div class="content__block__desc">
                                              <div class="content__adress">г. Саратов, Соколовая гора, 4</div>
                                              <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                              <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                          </div>
                                      </div>
                                      <ul class="content__lead__container">
                                          <li class="block__lead">
                                              <img src="../static/images/photo/zaharov.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Захаров Алексей Иванович</div>
                                                  <div class="lead__desc__block">Директор Дилерского центра</div>
                                                  <a href="mailto:azakharov@asavtomotors.ru" class="email__lead">azakharov@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/shatylov.jfif" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Шатилов Денис Ивановна</div>
                                                  <div class="lead__desc__block">Руководитель отдела продаж Chery</div>
                                                  <a href="mailto:dshatilov@asavtomotors.ru" class="email__lead">dshatilov@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/pytishev.jfif" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Пятышев Игорь Иванович</div>
                                                  <div class="lead__desc__block">Руководитель отдела продаж Geely</div>
                                                  <a href="mailto:ipyatyshev@asavtomotors.ru" class="email__lead">ipyatyshev@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                          <li class="block__lead">
                                              <img src="../static/images/photo/grishin.jpg" alt="" class="photo__lead">
                                              <div class="content__lead__block">
                                                  <div class="lead__title__block">Гришин Евгений Иванович</div>
                                                  <div class="lead__desc__block">Руководитель СТО</div>
                                                  <a href="mailto:Dgrihin@asavtomotors.ru" class="email__lead">Dgrihin@asavtomotors.ru</a>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </label>
                           
                          </div>
                        </div>
                      </div>
                        </div>
                        <input class="tab-radio" id="main-tab-3" name="main-group" type="radio"/>
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                            <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item__about" for="sub-tab3-1">
                                    <div class="category">
                                        <ul class="category__list">
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/sertif.jpg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/sertif___chery.jpg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/sertif__jac.jpg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/sertif__geely.jpg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/tm__chery.jpg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/best__chery__sale.jpeg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/sertif__d.jpeg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/sertif__haval.jpg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                            <li class="category__item content__lead__block">
                                                <div class="image__wrapper">
                                                    <img class="category__image minimized" src="../static/images/changan__sertif.jpg" alt="feedback">
                                                </div>
                                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                                            </li>
                                        </ul>
                                    </div>
                                </label>
                                
                            </div>  
                        </div>
                        <div class="container_site">
                            <input class="tab-radio" id="main-tab-4" name="main-group" type="radio"/>
                            <div class="tab-content">
                                <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item__about" for="sub-tab4-1">
                                    <p class="seo__title">Достижения компании</p>
                                    <p class="seo__sub_title">2010 - 2013 гг. – «АсАвто» является ключевым партнёром Украинского автомобилей бренда Bogdan. Региональные склады компании расположены в Тольятти, Краснодаре, Уфе и Перми. Две трети объема продаж автомобилей данного бренда в РФ приходилось на ГК «АсАвто»;</p>
                                    <p class="seo__sub_title">2013 г. – «АсАвто» становится третьим официальным дилером Lifan в городе Тольятти. В последствии став единственным и самым крупным оф. дилером Lifan в городе, доказав свое преимущество в честной конкурентной борьбе;</p>
                                    <p class="seo__sub_title">2014 г. – «АсАвто» становится региональным дилером автомобилей марки JAC в Приволжском федеральном округе. Менее чем за 6 месяцев общий объём продаж в регионе увеличивается в несколько раз.</p>
                                    <p class="seo__sub_title">2015 г. – «АсАвто» вошел в пятерку лучших дилеров по продажам Lifan в России. Ежегодные продажи автомобилей Lifan перевалили за 500 автомобилей в месяц;</p>
                                    <p class="seo__sub_title">2016 г. – «АсАвто» занимает лидирующие позиции в России по объему продаж Lifan;</p>
                                    <p class="seo__sub_title">2017 г. – «АсАвто» становится лучшим дилером по продаже автомобилей Lifan в России.</p>
                                    <p class="seo__sub_title">2018 г. – «АсАвто» получает награду «Лучший дилер по продажам» Chery в России.</p>
                                    <p class="seo__sub_title">2019 г. – «АсАвто» получает награду «Лучший дилер по продажам» и «Лучший дилерский Маркетинг» Chery в России.</p>
                                    <p class="seo__sub_title">2020 г. – «АсАвто» становится Лидером среди дилеров FAW по объему продаж, с долей в 12%, в России.</p>
                                    <p class="seo__sub_title">2020 г. – «АсАвто» занимает Третье место по объему продаж Chery, вслед за Московскими дилерам, в России.</p>
                                    <p class="seo__sub_title">2021 г. – «АсАвто» (ДЦ Самара, Аэропортовское ш.1ж) побеждает в номинации «Лучший Дилерский центр Geely 2020» в России.</p>
                                    <p class="seo__sub_title">Дальше – больше! Вперёд к Новым вершинам!</p></label>
                                </div>
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
        <footer>
            <div class="container_site">
                <div class="wrapper__footer">
                    <div class="footer__logo_container">
                        <a class="footer__logo" href="../index.html"><img src="../static/images/logo.png" alt="company_logo" class="footer__logo"></a>
                    </div>
                    <a href="tel: +7 (846) 215-07-58" class="mobile_phone_btn hidden__adapt"><svg class="hidden__adapt" width="35" height="37" viewBox="0 0 35 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.363 3.33006L26.928 0.854078C26.2288 0.585624 25.4647 0.947113 25.1171 1.70458L21.4824 9.71205C21.1644 10.4127 21.279 11.2863 21.7667 11.8396L25.324 15.9302C22.6374 21.3931 18.3225 25.718 13.1819 27.9257L10.3784 23.0905C9.99402 22.4282 9.28956 22.1442 8.64829 22.3913L1.31949 25.215C0.618709 25.4932 0.183646 26.3164 0.286732 27.1738L1.23996 35.0654C1.33943 35.8849 1.90327 36.5287 2.61654 36.6038C18.7818 38.3071 33.0254 24.2631 34.4107 5.19346C34.4712 4.36079 34.0375 3.58842 33.363 3.33006Z" fill="#47A0ED"/>
                        </svg>
                    </a>
                    <div class="adress">
                        <ul class="info">
                            <li class="info__item__title">Марки а/м</li>
                            <li><a href="../pages/catalogPageGeely.html" class="info__item">Geely</a></li>
                            <li><a href="../pages/catalogPageHaval.html" class="info__item">Haval</a></li>
                            <li><a href="../pages/catalogPageChery.html" class="info__item">Ghery</a></li>
                            <li><a href="../pages/catalogPageGWM.html" class="info__item">GWM</a></li>
                            <li><a href="../pages/catalogPageExeed.html" class="info__item">Exeed</a></li>
                            <li><a href="../pages/catalogPageChangan.html" class="info__item">Changan</a></li>
                            <li><a href="../pages/catalogPageFaw.html" class="info__item">Faw</a></li>
                            <li><a href="../pages/catalogPageJac.html" class="info__item">Jac</a></li>
                        </ul> 
                        <ul class="info">
                            <li class="info__item__title">Покупателям</li>
                            <li><a href="../pages/catalogCars.html" class="info__item">Новые авто</a></li>
                            <li><a href="../pages/service.html" class="info__item">Сервис</a></li>
                            <li><a href="../pages/stocks.html" class="info__item">Акции</a></li>
                            <li><a href="../pages/traidIn.html" class="info__item">Трейд-ин</a></li>
                        </ul>
                        <ul class="info">
                            <li class="info__item__title">Про компанию</li>
                            <li><a href="../pages/feedback.html" class="info__item">Отзывы</a></li>
                            <li><a href="../pages/news.html" class="info__item">Новости</a></li>
                            <li><a href="../pages/about.html" class="info__item">О нас</a></li>
                            <li><a href="../pages/contact.html" class="info__item">Контакты</a></li>
                        </ul>
                        <ul class="addr__list">
                            <li class="addr__item">г. Самара, Аэропортовское шоссе 1Ж</li>
                            <li class="addr__item">г. Самара, Южное шоссе 12а, строение 4</li>
                            <li class="addr__item">г. Самара, ул. Алма-Атинская 87</li>
                            <li class="addr__item">г. Самара, Карла-Маркса 412Б (кузовной ремонт)</li>
                            <li class="addr__item">пос. Тимофеевка (г. Тольятти), ул. Солнечная 1А</li>
                            <li class="addr__item">г. Саратов, Большая Сеченская, 8</li>
                            <li class="addr__item">г. Саратов, Соколовая гора, 4</li>
                        </ul>
                    </div>
                    <div class="wrapper__phone__footer">
                        <a href="tel:+7(8846)215-00-07" class="phone__footer"><img src="./static/icons/phone.svg" alt="" class="phone__icon">8 (846) 215 00 07</a>
                        <a href="#" class="rev__phone__footer"><p class="text__phone__footer footer__open__js">Заказать звонок</p></a>
                        <div class="work__detail">
                            <p class="work__title">График работы (без выходных)</p>
                            <p class="work__saloon">Автосалон: пн-вс 09:00-21:00</p>
                            <p class="work__tech">СТО: пн-вс 08:00-20:00</p>
                            <div class="copyright">
                                "2011 - 2022 © Группа компаний «АсАвто»"
                                <br>
                                "Продажа автомобилей в Самарской и Саратовской областях"
                            </div>
                        </div>
                        <a class="back_to_top" title="Наверх"><svg class="arrow__up" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z"/></svg></a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="popup_overlay"></div>
        <div class="popup__container">
            <form action="mail.php" id="popup__form" class="popup  form__js" name="popupIn" enctype="multipart/form-data" method="POST">
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
                <div class="popup__btm__submit">
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../script/just-validate.min.js"></script>
<script src="../script/inputmask.min.js"></script>
<script src="../script/zoom.js"></script>
<script src="../script/paint.js"></script>
<script src="../script/changeModel.js"></script>
<script src="../script/button__up.js"></script>
<script src="../script/burger.js"></script>
<script src="../script/popup.js"></script>
<script src="../script/footerPopup.js"></script>
<script src="../script/app.js"></script>
<script src="../script.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=7f013289-5438-4a62-907e-2403a22c712e" type="text/javascript"></script>
<script src="../script/yMap.js"></script>
</html>