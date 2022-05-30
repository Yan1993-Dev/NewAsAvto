<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/repair.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/service.css");
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
    <div class="background__poster">
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
            <li class="nav__bar__li"><a href="/remont-avtomobilya/index.php" class="nav__bar__item color__target">Ремонт автомобиля</a></li>
            <li class="nav__bar__li"><a href="/aktsii-servisa/index.php" class="nav__bar__item color__notarget">Акции сервиса</a></li>
            <li class="nav__bar__li"><a href="/skhema-proezda/index.php" class="nav__bar__item color__notarget">Схема проезда</a></li>
        </ul>
    </nav>
    <section class="section__tabs">
        <div class="tabs">
            <div class="tabs__nav">
                <button class="tabs__nav-btn" type="button" data-tab="#tab_1">Диагностика</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_2">Двигатель</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_3">Трансмиссия</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_4">Ходовая часть</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_5">Электро-оборудование</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_6">Общие работы</button>
            </div>
            <div class="tabs__content">
                <div class="tabs__item active" id="tab_1">
                    <table>
                        <tr class="bb">
                            <td class="top__title">Наименование работ</td>
                            <td class="price">Стоимость ₽*</td>
                            <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                            <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                            <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                            <td class="top__title">Максимальный размер скидок ₽*</td>
                            <td class="top__title">Минимальная цена ₽*</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Диагностика блока управления сканером + сброс ошибок (1- блок управления)</td>
                            <td class="price__item">570</td>
                            <td class="price__item">490</td>
                            <td class="price__item">376</td>
                            <td class="price__item">114</td>
                            <td class="price__item">308</td>
                            <td class="price__item">262</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Проверка свечей зажигания на стэнде за 4шт. со с/у (iridium/platinum)</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Регулировка угла наклона света фар</td>
                            <td class="price__item">380</td>
                            <td class="price__item">327 </td>
                            <td class="price__item">251 </td>
                            <td class="price__item">76 </td>
                            <td class="price__item">205 </td>
                            <td class="price__item">175 </td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена воздушного фильтра с очисткой корпуса фильтра</td>
                            <td class="price__item">380</td>
                            <td class="price__item">327 </td>
                            <td class="price__item">251 </td>
                            <td class="price__item">76 </td>
                            <td class="price__item">205 </td>
                            <td class="price__item">175 </td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Проверка углов установки колес</td>
                            <td class="price__item">1 140</td>
                            <td class="price__item">980 </td>
                            <td class="price__item">752 </td>
                            <td class="price__item">228 </td>
                            <td class="price__item">616 </td>
                            <td class="price__item">524 </td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Диагностика ДВС механическая (проверка компрессии, давления масла)</td>
                            <td class="price__item">1 900</td>
                            <td class="price__item">1 634</td>
                            <td class="price__item">1 254</td>
                            <td class="price__item">380 </td>
                            <td class="price__item">1 026</td>
                            <td class="price__item">874 </td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Диагностика ходовой части</td>
                            <td class="price__item">3 800</td>
                            <td class="price__item">3 268</td>
                            <td class="price__item">2 508</td>
                            <td class="price__item">760 </td>
                            <td class="price__item">2 052</td>
                            <td class="price__item">1 748</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Диагностика системы кондиционирования (с заправкой)</td>
                            <td class="price__item">1 330</td>
                            <td class="price__item">1 144</td>
                            <td class="price__item">878 </td>
                            <td class="price__item">266 </td>
                            <td class="price__item">718 </td>
                            <td class="price__item">612 </td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Проверка тепловых зазоров впускных/выпускных клапанов (двс 16-ти клапанный)</td>
                            <td class="price__item">2 280</td>
                            <td class="price__item">1 961</td>
                            <td class="price__item">1 505</td>
                            <td class="price__item">456 </td>
                            <td class="price__item">1 231</td>
                            <td class="price__item">1 049</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Проверка тепловых зазоров впускных/выпускных клапанов (двс 8-ми клапанный)</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304 </td>
                            <td class="price__item">821 </td>
                            <td class="price__item">699 </td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замер давления в топливной рампе при наличии порта</td>
                            <td class="price__item">570</td>
                            <td class="price__item">490</td>
                            <td class="price__item">376</td>
                            <td class="price__item">114</td>
                            <td class="price__item">308</td>
                            <td class="price__item">262</td>
                        </tr>
                    </table>
                </div>
                <div class="tabs__item" id="tab_2">
                    <table>
                        <tr class="bb">
                            <td class="top__title">Наименование работ</td>
                            <td class="price">Стоимость ₽*</td>
                            <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                            <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                            <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                            <td class="top__title">Максимальный размер скидок ₽*</td>
                            <td class="top__title">Минимальная цена ₽*</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">ГБЦ - Ремонт с полной разборкой, мойка.(снятой головки блока)</td>
                            <td class="price__item">13 110</td>
                            <td class="price__item">11 275</td>
                            <td class="price__item">8 653</td>
                            <td class="price__item">2 622</td>
                            <td class="price__item">7 079</td>
                            <td class="price__item">6 031</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">ДВС в сборе с КПП - с/у</td>
                            <td class="price__item">9 500</td>
                            <td class="price__item">8 170</td>
                            <td class="price__item">6 270</td>
                            <td class="price__item">1 900</td>
                            <td class="price__item">5 130</td>
                            <td class="price__item">4 370</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Двигатель разборка дефектовка(снят)</td>
                            <td class="price__item">15 200</td>
                            <td class="price__item">13 072</td>
                            <td class="price__item">10 032</td>
                            <td class="price__item">3 040</td>
                            <td class="price__item">8 208</td>
                            <td class="price__item">6 992</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Регулировка тепловых зазоров в клапанном механизме (8 клапанный без снятия р.вала)</td>
                            <td class="price__item">10 450</td>
                            <td class="price__item">8 987</td>
                            <td class="price__item">6 897</td>
                            <td class="price__item">2 090</td>
                            <td class="price__item">5 643</td>
                            <td class="price__item">4 807</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">КАПИТАЛЬНЫЙ РЕМОНТ 16 клапанный ДВС без фазовращателей, со снятием установкой</td>
                            <td class="price__item">47 500</td>
                            <td class="price__item">40 850</td>
                            <td class="price__item">31 350</td>
                            <td class="price__item">9 500</td>
                            <td class="price__item">25 650</td>
                            <td class="price__item">21 850</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">ДВС - капитальный ремонт 16 клапанный(без с/у, включая замену изношенных деталей)</td>
                            <td class="price__item">32 300</td>
                            <td class="price__item">27 778</td>
                            <td class="price__item">21 318</td>
                            <td class="price__item">6 460</td>
                            <td class="price__item">17 442</td>
                            <td class="price__item">14 858</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Картер масляный (поддон) ДВС, с/у</td>
                            <td class="price__item">1 900</td>
                            <td class="price__item">1 634</td>
                            <td class="price__item">1 254</td>
                            <td class="price__item">380</td>
                            <td class="price__item">1 026</td>
                            <td class="price__item">874</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Ремень ГРМ+ролики (комплекс), с/у</td>
                            <td class="price__item">5 700</td>
                            <td class="price__item">4 902</td>
                            <td class="price__item">3 762</td>
                            <td class="price__item">1 140</td>
                            <td class="price__item">3 078</td>
                            <td class="price__item">2 622</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Цепь ГРМ, с/у (комплекс)</td>
                            <td class="price__item">5 700</td>
                            <td class="price__item">4 902</td>
                            <td class="price__item">3 762</td>
                            <td class="price__item">1 140</td>
                            <td class="price__item">3 078</td>
                            <td class="price__item">2 622</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Регулировка тепловых зазоров впускных/выпускных клапанов со снятием р.валов</td>
                            <td class="price__item">10 450</td>
                            <td class="price__item">8 987</td>
                            <td class="price__item">6 897</td>
                            <td class="price__item">2 090</td>
                            <td class="price__item">5 643</td>
                            <td class="price__item">4 807</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Радиатор системы охлаждения ДВС, замена</td>
                            <td class="price__item">2 280</td>
                            <td class="price__item">1 961</td>
                            <td class="price__item">1 505</td>
                            <td class="price__item">456</td>
                            <td class="price__item">1 231</td>
                            <td class="price__item">1 049</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена охлаждающей жидкости (с промывкой системы)</td>
                            <td class="price__item">1 570</td>
                            <td class="price__item">1 350</td>
                            <td class="price__item">1 036</td>
                            <td class="price__item">314</td>
                            <td class="price__item">848</td>
                            <td class="price__item">722</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена водяного насоса</td>
                            <td class="price__item">2 280</td>
                            <td class="price__item">1 961</td>
                            <td class="price__item">1 505</td>
                            <td class="price__item">456</td>
                            <td class="price__item">1 231</td>
                            <td class="price__item">1 049</td>
                        </tr>
                    </table>
                </div>
                <div class="tabs__item" id="tab_3">
                    <table class="table__title">
                        <tr class="bb">
                            <td class="top__title">Наименование работ</td>
                            <td class="price">Стоимость ₽*</td>
                            <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                            <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                            <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                            <td class="top__title">Максимальный размер скидок ₽*</td>
                            <td class="top__title">Минимальная цена ₽*</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена масла и фильтра</td>
                            <td class="price__item">950</td>
                            <td class="price__item">817</td>
                            <td class="price__item">627</td>
                            <td class="price__item">190</td>
                            <td class="price__item">513</td>
                            <td class="price__item">437</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена масла в АКПП(без аппарата)</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена масла в ЗАДНЕМ/ПЕРЕДНЕМ мосту</td>
                            <td class="price__item">570</td>
                            <td class="price__item">490</td>
                            <td class="price__item">376</td>
                            <td class="price__item">114</td>
                            <td class="price__item">308</td>
                            <td class="price__item">262</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">КПП - разборка/cборка (КПП снята, вкл. регулировку преднатяга)</td>
                            <td class="price__item">9 880</td>
                            <td class="price__item">8 497</td>
                            <td class="price__item">6 521</td>
                            <td class="price__item">1 976</td>
                            <td class="price__item">5 335</td>
                            <td class="price__item">4 545</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">КПП механическая, снятие и установка</td>
                            <td class="price__item">4 750</td>
                            <td class="price__item">4 085</td>
                            <td class="price__item">3 135</td>
                            <td class="price__item">950</td>
                            <td class="price__item">2 565</td>
                            <td class="price__item">2 185</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Крестовина вала карданного, замена</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена переднего привода в сборе</td>
                            <td class="price__item">2 660</td>
                            <td class="price__item">2 288</td>
                            <td class="price__item">1 756</td>
                            <td class="price__item">532</td>
                            <td class="price__item">1 436</td>
                            <td class="price__item">1 224</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Сцепление в сборе - снятие и установка</td>
                            <td class="price__item">5 700</td>
                            <td class="price__item">4 902</td>
                            <td class="price__item">3 762</td>
                            <td class="price__item">1 140</td>
                            <td class="price__item">3 078</td>
                            <td class="price__item">2 622</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">АКПП снять установить</td>
                            <td class="price__item">8 550</td>
                            <td class="price__item">7 353</td>
                            <td class="price__item">5 643</td>
                            <td class="price__item">1 710</td>
                            <td class="price__item">4 617</td>
                            <td class="price__item">3 933</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена внутреннего ШРУС слева/справа(привод снят)</td>
                            <td class="price__item">2 280</td>
                            <td class="price__item">1 961</td>
                            <td class="price__item">1 505</td>
                            <td class="price__item">456</td>
                            <td class="price__item">1 231</td>
                            <td class="price__item">1 049</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена наружнего ШРУС слева/справа(привод снят)</td>
                            <td class="price__item">2 280</td>
                            <td class="price__item">1 961</td>
                            <td class="price__item">1 505</td>
                            <td class="price__item">456</td>
                            <td class="price__item">1 231</td>
                            <td class="price__item">1 049</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена шарнирного соединения карданного вала (снят)</td>
                            <td class="price__item">2 280</td>
                            <td class="price__item">1 961</td>
                            <td class="price__item">1 505</td>
                            <td class="price__item">456</td>
                            <td class="price__item">1 231</td>
                            <td class="price__item">1 049</td>
                        </tr>
                    </table>
                </div>
                <div class="tabs__item" id="tab_4">
                    <table class="table__title">
                        <tr class="bb">
                            <td class="top__title">Наименование работ</td>
                            <td class="price">Стоимость ₽*</td>
                            <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                            <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                            <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                            <td class="top__title">Максимальный размер скидок ₽*</td>
                            <td class="top__title">Минимальная цена ₽*</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Амортизатор передней подвески (1 шт.) - замена</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Дефектовка ходовой части</td>
                            <td class="price__item">380</td>
                            <td class="price__item">327</td>
                            <td class="price__item">251</td>
                            <td class="price__item">76</td>
                            <td class="price__item">205</td>
                            <td class="price__item">175</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Подрамник передней подвески, с/у</td>
                            <td class="price__item">4 750</td>
                            <td class="price__item">4 085</td>
                            <td class="price__item">3 135</td>
                            <td class="price__item">950</td>
                            <td class="price__item">2 565</td>
                            <td class="price__item">2 185</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Подшипник ступицы переднего колеса, замена</td>
                            <td class="price__item">2 470</td>
                            <td class="price__item">2 124</td>
                            <td class="price__item">1 630</td>
                            <td class="price__item">494</td>
                            <td class="price__item">1 334</td>
                            <td class="price__item">1 136</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Рычаг передней подвески (1шт.) - замена</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Ступица переднего колеса в сборе, с/у</td>
                            <td class="price__item">1 900</td>
                            <td class="price__item">1 634</td>
                            <td class="price__item">1 254</td>
                            <td class="price__item">380</td>
                            <td class="price__item">1 026</td>
                            <td class="price__item">874</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Амортизатор задней подвески (1 шт.), с/у</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Балка задняя снятие установка, разборка/сборка, прокачка тормозного контура</td>
                            <td class="price__item">7 600</td>
                            <td class="price__item">6 536</td>
                            <td class="price__item">5 016</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">4 104</td>
                            <td class="price__item">3 496</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Подшипник ступицы заднего колеса - замена</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Пружина задней подвески(балка) - замена</td>
                            <td class="price__item">1 900</td>
                            <td class="price__item">1 634</td>
                            <td class="price__item">1 254</td>
                            <td class="price__item">380</td>
                            <td class="price__item">1 026</td>
                            <td class="price__item">874</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Пружина задней подвески(многорычажная) - замена</td>
                            <td class="price__item">2 280</td>
                            <td class="price__item">1 961</td>
                            <td class="price__item">1 505</td>
                            <td class="price__item">456</td>
                            <td class="price__item">1 231</td>
                            <td class="price__item">1 049</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Насос ГУР - замена</td>
                            <td class="price__item">2 250</td>
                            <td class="price__item">1 935</td>
                            <td class="price__item">1 505</td>
                            <td class="price__item">456</td>
                            <td class="price__item">1 231</td>
                            <td class="price__item">1 049</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Насос ГУР - замена</td>
                            <td class="price__item">2 250</td>
                            <td class="price__item">1 935</td>
                            <td class="price__item">1 485</td>
                            <td class="price__item">450</td>
                            <td class="price__item">1 215</td>
                            <td class="price__item">1 035</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Рейка рулевая в сборе с регулировкой схождения - замена</td>
                            <td class="price__item">5 700</td>
                            <td class="price__item">4 902</td>
                            <td class="price__item">3 762</td>
                            <td class="price__item">1 140</td>
                            <td class="price__item">3 078</td>
                            <td class="price__item">2 622</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Развал схождение колес - регулировка</td>
                            <td class="price__item">1 710</td>
                            <td class="price__item">1 471</td>
                            <td class="price__item">1 129</td>
                            <td class="price__item">342</td>
                            <td class="price__item">923</td>
                            <td class="price__item">787</td>
                        </tr>
                    </table>
                </div>
                <div class="tabs__item" id="tab_5">
                    <table class="table__title">
                        <tr class="bb">
                            <td class="top__title">Наименование работ</td>
                            <td class="price">Стоимость ₽*</td>
                            <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                            <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                            <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                            <td class="top__title">Максимальный размер скидок ₽*</td>
                            <td class="top__title">Минимальная цена ₽*</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена свечей зажигания</td>
                            <td class="price__item">760</td>
                            <td class="price__item">654</td>
                            <td class="price__item">502</td>
                            <td class="price__item">152</td>
                            <td class="price__item">410</td>
                            <td class="price__item">350</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Высоковольтные провода (комплект) - с/у</td>
                            <td class="price__item">380</td>
                            <td class="price__item">327</td>
                            <td class="price__item">251</td>
                            <td class="price__item">76</td>
                            <td class="price__item">205</td>
                            <td class="price__item">175</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Генератор, с/у</td>
                            <td class="price__item">1 710</td>
                            <td class="price__item">1 471</td>
                            <td class="price__item">1 129</td>
                            <td class="price__item">342</td>
                            <td class="price__item">923</td>
                            <td class="price__item">787</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена ламп ближнего/дальнего света</td>
                            <td class="price__item">570</td>
                            <td class="price__item">490</td>
                            <td class="price__item">376</td>
                            <td class="price__item">114</td>
                            <td class="price__item">308</td>
                            <td class="price__item">262</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Трапеция очистителя лобового стекла, с/у</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Стартер, с/у</td>
                            <td class="price__item">1 520</td>
                            <td class="price__item">1 307</td>
                            <td class="price__item">1 003</td>
                            <td class="price__item">304</td>
                            <td class="price__item">821</td>
                            <td class="price__item">699</td>
                        </tr>
                    </table>
                </div>
                <div class="tabs__item" id="tab_6">
                    <table class="table__title">
                        <tr class="bb">
                            <td class="top__title">Наименование работ</td>
                            <td class="price">Стоимость ₽*</td>
                            <td class="top__title">Скидка для а/м от 3 до 5 лет ₽*</td>
                            <td class="top__title">Скидка для а/м старше 5 лет ₽*</td>
                            <td class="top__title">Скидка участникам Бонусной программы АсАвто ₽*</td>
                            <td class="top__title">Максимальный размер скидок ₽*</td>
                            <td class="top__title">Минимальная цена ₽*</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена масла в ДВС с заменой фильтра</td>
                            <td class="price__item">1 140</td>
                            <td class="price__item">980</td>
                            <td class="price__item">752</td>
                            <td class="price__item">228</td>
                            <td class="price__item">616</td>
                            <td class="price__item">524</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена воздушного фильтра(очистка корпуса)</td>
                            <td class="price__item">570</td>
                            <td class="price__item">490</td>
                            <td class="price__item">376</td>
                            <td class="price__item">114</td>
                            <td class="price__item">308</td>
                            <td class="price__item">262</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Замена салонного фильтра с проверкой</td>
                            <td class="price__item">570</td>
                            <td class="price__item">490</td>
                            <td class="price__item">376</td>
                            <td class="price__item">114</td>
                            <td class="price__item">308</td>
                            <td class="price__item">262</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Проверка уровней и состояние рабочих жидкостей</td>
                            <td class="price__item">570</td>
                            <td class="price__item">490</td>
                            <td class="price__item">376</td>
                            <td class="price__item">114</td>
                            <td class="price__item">308</td>
                            <td class="price__item">262</td>
                        </tr>
                        <tr class="bb">
                            <td class="left__title">Масло ГУР - замена (вкл. прокачку)</td>
                            <td class="price__item">1 140</td>
                            <td class="price__item">980</td>
                            <td class="price__item">752</td>
                            <td class="price__item">228</td>
                            <td class="price__item">616</td>
                            <td class="price__item">524</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="wrap__seo">
                <p class="seo__text__afterTable">* Стоимость может отличаться и зависит от текущей цены на расходные материалы и наличия дополнительных работ.</p>
                <p class="seo__text__afterTable">** Скидка предоставляется на автомобили, год выпуска которых старше 3 лет, но младше 5 лет</p>
                <p class="seo__text__afterTable">*** Скидка предоставляется на автомобили, год выпуска которых старше 5 лет</p>
                <p class="seo__text__afterTable">**** Указан максимальный размер скидки. Скидка участникам Бонусной программы АсАвто может составлять до 20% от итоговой суммы заказ-наряда. Для получения скидки владелец а/м должен быть подключен к Мобильному приложению АсАвто. Подробности уточняйте в отделе Сервиса АсАвто.</p>
                <p class="seo__text__afterTable">***** Максимальный размер скидок и минимальная цена складываются из действующих скидок и предложений. Не все акции и скидки суммируются. Подробности уточняйте в отделе Сервиса АсАвто</p>
            </div>
    </section>
    </div>
    <div class="background__fos">
        <div class="flex__cont">
            <div class="middle">
                <div class="repair__li">
                    <ul class="content_li">
                        <li class="title__content__item">Пришло время ремонтировать автомобиль? Мы быстро и качественно выполним все работы и предложим Вам выгодную цену!</li>
                        <li class="content__item">Наши СТО оснащены специализированным оборудованием</li>
                        <li class="content__item">Мы получаем запчасти напрямую от изготовителей</li>
                        <li class="content__item">Наши сотрудники специализируются на автомобилях китайского производства.</li>
                    </ul>
                </div>
            </div>
            <section class="form_traid-in">
                <h2 class="sub_title" id="calculator">
                    Заявка на ремонт
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
                            <input type="text" id="input__manufacturer" name="marka-re" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Модель</label>
                            <input type="text" id="input_traid" name="model-re" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
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
                    <input type="hidden" name="SUBJECT" value=" Заявка на ремонт*">
                    <div class="popup__btn__flex">
                        <button class="btn credit__btn open_thanks_js" type="submit">Отправить</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <div class="container_site">
        <p class="seo__title">Ремонт автомобиля в «АсАвто»</p>
        <p class="seo__sub_title">Ремонт автомобилей, тем более современных, это высокотехнологический процесс, который происходит с применением самого передового, дорогостоящего оборудования. Сервисные станции «АсАвто» оборудованы всем необходимым оборудованием для осуществления ремонта китайских автомобилей и не только. </p>
        <p class="seo__sub_title">Но самое главное - это то, что в «АсАвто» работают опытные мастера, знающие особенности профильных автомобилей и обладающие большим опытом работы с ними.
            Доверьте ремонт Вашего автомобиля нам!</p>

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