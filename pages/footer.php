<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die(); // проверка
IncludeTemplateLangFile(__FILE__); // перевод файлов
?>
<footer>
    <div class="container_site">
        <div class="wrapper__footer">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/logoFooter.php"
                )
            ); ?>
            <a href="tel: +7 (846) 215-07-58" class="mobile_phone_btn hidden__adapt"><svg class="hidden__adapt" width="35" height="37" viewBox="0 0 35 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33.363 3.33006L26.928 0.854078C26.2288 0.585624 25.4647 0.947113 25.1171 1.70458L21.4824 9.71205C21.1644 10.4127 21.279 11.2863 21.7667 11.8396L25.324 15.9302C22.6374 21.3931 18.3225 25.718 13.1819 27.9257L10.3784 23.0905C9.99402 22.4282 9.28956 22.1442 8.64829 22.3913L1.31949 25.215C0.618709 25.4932 0.183646 26.3164 0.286732 27.1738L1.23996 35.0654C1.33943 35.8849 1.90327 36.5287 2.61654 36.6038C18.7818 38.3071 33.0254 24.2631 34.4107 5.19346C34.4712 4.36079 34.0375 3.58842 33.363 3.33006Z" fill="#47A0ED" />
                </svg>
            </a>
            <div class="adress">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footerMenu.php"
                    )
                ); ?>
            </div>
            <div class="wrapper__phone__footer">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footerPhone.php"
                    )
                ); ?>
                <a href="#" class="rev__phone__footer">
                    <p class="text__phone__footer footer__open__js">Заказать звонок</p>
                </a>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/workFooter.php"
                    )
                ); ?>

                <a class="back_to_top" title="Наверх"><svg class="arrow__up" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z" />
                    </svg></a>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=7f013289-5438-4a62-907e-2403a22c712e" type="text/javascript"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/index.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/app.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/button__up.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/tab.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/just-validate.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/inputmask.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/mail.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/burger.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/footerPopup.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/script.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/script/yMap.js"></script>

</html>