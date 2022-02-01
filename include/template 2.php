<nav class="nav">
    <ul class="navigation">
        <?php foreach ($arResult as $arItem) : ?>
            <?php if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <? if ($arItem["SELECTED"]) : ?>
                <li class="nav__item"><a href="<?= $arItem["LINK"] ?>" class="nav__item__link"><?= $arItem["TEXT"] ?></a>
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
            <? else : ?>
            <? endif ?>
        <?php endforeach; ?>
        <li class="nav__item"><a href="../pages/service.html" class="nav__item__link">Сервис</a></li>
        <li class="nav__item"><a href="../pages/stocks.html" class="nav__item__link">Акции</a></li>
        <li class="nav__item"><a href="../pages/credit.html" class="nav__item__link">Кредит</a></li>
        <li class="nav__item"><a href="../pages/traidIn.html" class="nav__item__link">Трейд-ин</a></li>
        <li class="nav__item"><a href="../pages/news.html" class="nav__item__link">Новости</a></li>
        <li class="nav__item"><a href="../pages/feedback.html" class="nav__item__link">Отзывы</a></li>
        <li class="nav__item"><a href="../pages/about.html" class="nav__item__link">О нас</a></li>
        <li class="nav__item"><a href="../pages/contact.html" class="nav__item__link">Контакты</a></li>
    </ul>
</nav>