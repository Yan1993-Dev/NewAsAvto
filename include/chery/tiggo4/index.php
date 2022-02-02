<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Крупнейший официальный дилер китайских авто в Самаре, Тольятти и Саратове");
?>

<style>
.container_site {
    max-width: 1600px;
    margin: 0 auto;
    padding: 0 195px;
}

.btn {
    display: inline-block;
    color: #fff;
    font-size: 14px;
    line-height: 17px;
    background: #009bd8;
    width: 208px;
    height: 38px;
    border: 0;
    border-radius: 10px;
    cursor: pointer;
}

.header {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    margin-top: 45px;
    margin-bottom: -45px;
}

.header__mobile_btn {
    display: none;
}

.header__close__btn {
    display: none;
}

.mobile__header {
    display: none;
}

.company__logo {
    max-width: 217px;
    height: 123px;
}

.mobile_phone_btn {
    display: none;
}

.adress {
    display: flex;
    font-size: 12px;
    line-height: calc(18/12);
}

.addr__item {
    margin-right: 10px;
    margin-bottom: 10px;
}

.addr__item::before {
    content: url(../local/templates/NewAsAvto/static/icons/Vector.svg);
    margin-right: 5px;
}

.work__detail {
    font-size: 12px;
    line-height: calc(18/12);
    text-align: center;
}

.work__title {
    color: #A6A6A6;
}

.wrapper__phone {
    display: flex;
    flex-direction: column;
    padding-left: 20px;
}

.phone {
    font-size: 18px;
    line-height: calc(32/18);
    margin-top: -40px;
    margin-bottom: 10px;
    text-align: center;
    color: #000;
}

.rev__phone {
    padding-top: 5px;
    margin-bottom: 10px;
    background-color: #47A0ED;
    display: inline-block;
    color: #fff;
    font-size: 14px;
    line-height: 17px;
    background: #009bd8;
    width: 208px;
    height: 38px;
    border: 0;
}

.phone__icon {
    max-width: 18px;
    height: 18px;
    margin-right: 15px;
    margin-bottom: -3px;
}

.text__phone {
    font-size: 16px;
    line-height: calc(24/16);
    text-align: center;
}

.nav {
  margin-top: 50px;
}

.navigation {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background-color: #47A0ED;
}

.nav__item__link {
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    margin-right: 15px;
    align-items: center;
    color: #fff;
    font-size: 18px;
    line-height: calc(33/18);
}

.nav__item__link:hover {
    transition: 0.3s;
    background-color: #2D7CC0;
}

/* стили для выпадающего списка */
nav ul li {
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
  nav ul li:hover > ul {
    display: block;
    z-index: 20;
  }
  nav ul li {
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
  nav ul li a {
    display: block;
    text-transform: uppercase;
    z-index: 20;
  }
  nav ul ul {
    display: none;
    position: absolute;
    margin-top: -10px;
  }
  nav ul ul li {
    float: none;
    position: relative;
  }
  nav ul ul li a {
    color: #fff;
    padding: 10px;
    background-color: #47A0ED;
    margin-top: 5px;
    margin-right: -20px;
    border-radius: 10px;
  }
  nav ul ul ul {
    position: absolute;
  }

  .checked__link {
    background-color: #2D7CC0;
}

.cat__list{
    display: flex;
    justify-content: flex-end;
    margin-bottom: -100px;
}

.cat__list__item {
    display: flex;
    align-items: center;
    text-align: center;
    margin-top: 20px;
}

.cat__list__inner {
    font-size: 14px;
    color: #000;
    border-bottom: 1px solid #000;
}

.ar__right {
    padding-right: 10px;
}

.main_title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    font-size: 58px;
    font-style: normal;
    font-weight: 600;
    line-height: 70px;
    letter-spacing: 0em;
    text-align: left;
    margin-top: 70px;
    padding-bottom: 40px;
}

.sub_text {
    font-family: 'Noto Sans';
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 31px;
    letter-spacing: 0em;
    text-align: left;
    margin-top: 10px;
}

.sub_text_wrapper {
    font-family: 'Noto Sans';
    font-style: normal;
    margin-top: 15px;
}

.btn {
    font-family: 'Noto Sans';
}

.text_color {
    color: #18a0fb;
}

.wrapper__tdr {
    margin-top: 10px;
    text-align: left;
}

.slider-container {
    margin-top: -270px;
    margin-left: 540px;
    overflow: hidden;
}

.img_slider {
    text-align: center;
}

.swiper-pagination-bullet {
    border: 1px solid white;
    background: white;
}

.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
    margin-top: 40px;
    width: 15.85px;
    height: 15.85px;
}

.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet-active {
    background: #202020;
    -webkit-transform: matrix(1, 0, 0, -1, 0, 0);
        -ms-transform: matrix(1, 0, 0, -1, 0, 0);
            transform: matrix(1, 0, 0, -1, 0, 0);
}

.swiper-container {
	padding-bottom: 50px;
}

.swiper_pagination {
    text-align: center;
}

.slider_img_title {
    padding-right: 16px;
    max-width: 100%;
    max-height:  100%;
}

.text_slide {
    text-align: center;
}

/* второй слайдер */

.slider-container_one {
    overflow: hidden;
    width: 100%;
    margin-top: 60px;
}

.swiper-wrapper_one {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    width: 100%;
    height: 100%;
}

.card_one {
    -ms-flex-negative: 0;
        flex-shrink: 0;
}

.swiper-pagination_one {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    text-align: center;
    margin-right: 10px;
    border-radius: 0px;
    width: 15px;
    height: 15px;
    -webkit-transform: matrix(1, 0, 0, -1, 0, 0);
        -ms-transform: matrix(1, 0, 0, -1, 0, 0);
            transform: matrix(1, 0, 0, -1, 0, 0);
}

.slider_title_one {
    font-size: 24px;
    padding: 10px;
    background-color: #DDDDDD;
    text-align: center;
    font-style: normal;
    font-weight: 600;
    line-height: 29px;
    border-radius: 10px;
    text-transform: uppercase;
    margin-top: 20px;
}

.slider_title_two {
    font-size: 24px;
    padding: 10px;
    background-color: #DDDDDD;
    text-align: center;
    font-style: normal;
    font-weight: 600;
    line-height: 29px;
    border-radius: 10px;
    text-transform: uppercase;
}

/* третий слайдер */

.slider_title_three {
    font-size: 24px;
    padding: 10px;
    background-color: #DDDDDD;
    text-align: center;
    font-style: normal;
    font-weight: 600;
    line-height: 29px;
    border-radius: 10px;
    text-transform: uppercase;
}

/* пятый слайдер */

.slider_title_sale {
    font-size: 24px;
    padding: 10px;
    background-color: #DDDDDD;
    text-align: center;
    font-style: normal;
    font-weight: 600;
    line-height: 29px;
    border-radius: 10px;
    text-transform: uppercase;
    margin-top: 140px;
}

.swiper-pagination_one {
    text-align: center;
}

/* слайдеры новостей и отзывов */

.slider_title_news {
    font-size: 24px;
    padding: 10px;
    background-color: #DDDDDD;
    text-align: center;
    font-style: normal;
    font-weight: 600;
    line-height: 29px;
    border-radius: 10px;
    text-transform: uppercase;
}

.news__sub__title {
    font-family: 'TacticSans-Reg';
    font-style: bold;
    font-weight: bold;
    font-size: 18px;
    line-height: 22px;
    color: #000;
    font-weight: 600;
    opacity: 1;
    transition: all 500ms ease;
}

.news__sub__title:hover {
    opacity: 0.5;
}

.category__info {
    font-weight: 600;
    color: #3482C6;
    border-bottom: 1px solid #3482C6;
    opacity: 1;
    transition: all 500ms ease;
}

.category__info:hover {
    opacity: 0.5;
}

.news__cont {
    padding-bottom: 15px;
}

.slider-container_news {
    overflow: hidden;
    width: 100%;
    margin-top: 60px;
}

.swiper-wrapper_news {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
}

.swiper-slide_news {
    -ms-flex-negative: 0;
        flex-shrink: 0;
}


.slider-container_feedback {
    overflow: hidden;
    width: 100%;
    margin-top: 60px;
}

.category__image {
    width: 150px;
    margin-bottom: 30px;
    opacity: 1;
    transition: all 500ms ease-in-out;
}

.category__image:hover {
    opacity: 0.5;
}

.swiper-wrapper_feedback {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
}

.swiper-slide_feedback {
    -ms-flex-negative: 0;
        flex-shrink: 0;
}

.feedback {
    margin-top: 100px;
}

.slider_title_feedback {
    font-size: 24px;
    padding: 10px;
    background-color: #DDDDDD;
    text-align: center;
    font-style: normal;
    font-weight: 600;
    line-height: 29px;
    border-radius: 10px;
    text-transform: uppercase;
}

.feedback_sub-title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    font-style: bold;
    font-weight: bold;
    font-size: 18px;
    line-height: 22px;
}

.feedback_head {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    margin-top: 15px;
}

.feedback_text {
    margin-top: 31px;
    margin-bottom: 100px;
}

/* общие стили для слайдеров */

.swiper-pagination_one  {
    margin-top: 40px;
}

.swiper-pagination-bullet .swiper-pagination-bullet-active {
    background-color: #202020;
    -webkit-transform: matrix(1, 0, 0, -1, 0, 0);
        -ms-transform: matrix(1, 0, 0, -1, 0, 0);
            transform: matrix(1, 0, 0, -1, 0, 0);
}


/* слайдеры закончились */

.news_img {
    max-width: 378px;
    max-height: 378px;
}

.card {
    width: 557px;
    height: 326px;
}


.sub_title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: 29px;
    letter-spacing: 0em;
    text-align: center;
    padding-top: 40px;
}

.field {
    padding-left: 30px;
    padding-top: 15px;
    display: inline-block;
}

.input__traid-in{
    width: 380px;
    height: 45px;   
    background: #FFFFFF;
    border: 1px solid rgba(52, 130, 198, 0.05);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    -webkit-box-shadow: 4px 6px 10px rgba(110, 185, 241, 0.1);
            box-shadow: 4px 6px 10px rgba(110, 185, 241, 0.1);
    border-radius: 5px;
    padding-left: 10px;
}

.checkbox__personal {
    padding-top: 15px;
    padding-left: 180px;
}

.popup__btn__flex {
    display: flex;
    justify-content: center;
}

.traid__btn {
    width: 312px;
    height: 57px;
    margin-top: 25px;
}

.credit__btn {
    width: 312px;
    height: 57px;
    margin-top: 25px;
}

.form_wrapper {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: center;
    margin-top: -140px;
}

.form_traid-in {
    margin-top: 130px;
    width: 440px;
    height: 560px;
    top: 808px;
    background-color: #eff5ff;
    border: 1px solid rgba(52, 130, 198, 0.3);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    border-radius: 10px;
}

.credit_calc {
    margin-left: 20px;
    margin-top: 130px;
    width: 440px;
    height: 560px;
    top: 808px;
    background-color: #eff5ff;
    border: 1px solid rgba(52, 130, 198, 0.3);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    border-radius: 10px;
}

/* аккордион */

.equip {
    margin-top: 100px;
}

.equipment_to_title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    margin-left: 50px;
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 29px;
}

.equipment_item_comp {
    margin-right: 53px;
}

.equipment_item_price {
    margin-right: 69px;
}

.save_title_additionally {
    margin-top: 25px;
    font-weight: bold;
    font-size: 24px;
}

.equipment_item_price_adapt {
    display: none;
}

.equipment_item_new_adapt {
    display: none;
}

.equipment_item_model {
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 33px;
    letter-spacing: 0em;
    text-align: left;
    
}
.equipment_item_old_price {
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 25px;
    letter-spacing: 0em;
    text-align: left;
    -webkit-text-decoration-line: line-through;
            text-decoration-line: line-through;
}

.equipment_item_new_price {
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 33px;
    letter-spacing: 0em;
    text-align: left;
}

.equipment_item_credit_price {
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #3482C6;
}

.accordion__control {
	background-color: transparent;
	cursor: pointer;
    border: none;
}

.equipment_title_two {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    border: 1px solid rgba(52, 130, 198, 0.1);
    background: #F8FAFD;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    padding-top: 15px;
    padding-bottom: 15px;
    border-radius: 10px;
}

.accordion__content {
	max-height: 0;
	opacity: 0;
	overflow: hidden;
	will-change: max-height;
	-webkit-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
	-webkit-box-sizing: content-box;
	        box-sizing: content-box;
}

.accordion {
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    -webkit-tap-highlight-color: transparent;
    margin-bottom: -35px;
}


.accordion__title {
	font-weight: bold;
	font-size: 1.17em;
}

.accordion__icon {
    margin-left: 10px;
	-webkit-transition: -webkit-transform 0.3s ease-out;
	transition: -webkit-transform 0.3s ease-out;
	-o-transition: transform 0.3s ease-out;
	transition: transform 0.3s ease-out;
	transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
}

.equipment_item_credit_btn {
    height: 41px;
    width: 208px;
    padding-top: 10px;
    color: #fff;
    background: #009bd8;
    -webkit-box-shadow: 0px 0px 20px rgba(52, 130, 198, 0.4);
            box-shadow: 0px 0px 20px rgba(52, 130, 198, 0.4);
    cursor: pointer;
    border-radius: 10px;
    text-align: center;
}

.open .accordion__icon {
	-webkit-transform: rotate(180deg);
	    -ms-transform: rotate(180deg);
	        transform: rotate(180deg);
}

.open .accordion__content {
	opacity: 1;
}

/* стили контента аккордеона */

.save_title_additionally {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    margin-left: 17px;
    padding: 17px;
}

.save_title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    margin-left: 35px;
    margin-top: 25px;
    padding: 17px;
}

.save, .design, .comfort {
    line-height: 25px;
    margin-left: 35px;
    padding: 17px;
}

.design_title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    margin-left: 35px;
    padding: 17px;
}

.design {
    margin-left: 35px;
    padding: 17px;
}

.comfort_title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    margin-left: 35px;
    padding: 17px;
}

.comfort {
    margin-left: 35px;
}

.equipment_item_adapt {
    display: none;
}

/* стили кнопки аккордеона */

.wrapper__est {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.estimate_btn__js {
    margin-top: 55px;
    position: absolute;
}

/* попап тест драйв */

.popup {
    display: none;
    height: 547px;
    max-width: 530px;
    top: 100px;
    position: fixed;
    border-radius: 10px;
    background-color: #F8FAFD;
    border: 1px solid rgba(52, 130, 198, 0.1);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    border-radius: 10px;
    z-index: 10;
}

.popup__container {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.popup_cont {
    margin-top: -30px;
}

.popup_open {
    display: block;
    z-index: 10;
}

.field_name  {
    margin-left: 85px;
    z-index: 10;
}

.field_phone {
    margin-top: 15px;
    margin-left: 85px;
    z-index: 10;
}

.popup_drive {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    text-align: center;
    padding-top: 30px;
    margin-bottom: 70px;
    z-index: 10;
    font-size: 24px;
    line-height: 29px;
}

.input__popup {
    display: block;
    width: 330px;
    height: 45px;
    background: rgb(255, 255, 255);
    border: 1px solid rgba(52, 130, 198, 0.05);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    -webkit-box-shadow: rgb(110 185 241 / 10%) 4px 6px 10px;
            box-shadow: rgb(110 185 241 / 10%) 4px 6px 10px;
    border-radius: 5px;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 19px;
    z-index: 10;
}

.label__popup {
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 19px;
    z-index: 10;
    margin-right: 100px;
}

.field_calendar {
    margin-top: 15px;
    margin-left: 85px;
    z-index: 10;
}

.popup__btn {
    width: 241px;
    height: 57px;
    margin-top: 25px;    
    z-index: 10;
    border-radius: 10px;
}

.popup__btm__submit {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.popup_drive__btn { 
    width: 19px;
    height: 19px;
    background-color: transparent;
    background-image: url(../local/templates/NewAsAvto/static/icons/X.svg);
    background-position: center;
    background-repeat: no-repeat;
    border: none;
    margin-left: 466px;
    margin-right: 15px;
    padding-bottom: 27px;
    z-index: 10;
}

.popup_drive__btn:hover {
    opacity: .5;
    z-index: 10;
}

.popup_drive__btn:focus {
    opacity: .3;
    z-index: 10;
}

.popup_overlay {
    display: none;
    background: #3482C6;
    opacity: 0.5;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
}

.popup_overlay.join {
    display: block;
    z-index: 10;
}

.checkbox_popup {
    text-align: right;
    margin-right: 15px;
    margin-top: 20px;
}

.title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    margin-top: 50px;
    text-align: center;
    font-size: 24px;
    line-height: calc(28/24);
}


.title__popup {
    display: none;
    height: 547px;
    max-width: 530px;
    top: 100px;
    position: fixed;
    border-radius: 10px;
    background-color: #F8FAFD;
    border: 1px solid rgba(52, 130, 198, 0.1);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    border-radius: 10px;
    z-index: 10;
}

.title__popup.opened {
    display: block;
}

/* попап для заявки */


/* скрытый попап */
.estimate {
    display: none;
    height: 547px;
    max-width: 530px;
    top: 100px;
    position: fixed;
    background-color: #F8FAFD;
    border: 1px solid rgba(52, 130, 198, 0.1);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    border-radius: 10px;
    z-index: 10;
}
 /* заголовок попапа */
.popup_request {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    text-align: center;
    margin-bottom: 60px;
}

/* кнопка закрытия попапа */
.popup_request__btn {
    width: 19px;
    height: 19px;
    background-color: transparent;
    background-image: url(../local/templates/NewAsAvto/static/icons/X.svg);
    background-position: center;
    background-repeat: no-repeat;
    border: none;
    margin-left: 480px;
    margin-right: 15px;
    padding-bottom: 27px;
    z-index: 10;
    cursor: pointer;
}

/* размытие кнопки закрытия */
.popup_request__btn:hover {
    opacity: .5;
    z-index: 10;
}

/* класс открытия попапа в js */

.estimate__container {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.estimate_open {
    display: block;
    z-index: 11;
}


/* эффект нажатия на кнопку закрытия */
.popup_request__btn:focus {
    opacity: .3;
    z-index: 10;
}

/* расположение кнопки отправки на попапе */
.popup_req__js {
    width: 241px;
    height: 57px;
    margin-top: 25px;
    z-index: 10;
}

.wrapper__submit-est {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

/* стили для заголовка формы с текстом */
.field_est {
    margin-top: 15px;
    margin-left: 85px;
}

/* стили для формы текста в попапе */
.input__est {
    width: 330px;
    height: 51px;
    background: rgb(255, 255, 255);
    border: 1px solid rgba(52, 130, 198, 0.05);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    -webkit-box-shadow: rgb(110 185 241 / 10%) 4px 6px 10px;
            box-shadow: rgb(110 185 241 / 10%) 4px 6px 10px;
    border-radius: 5px;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 19px;
}




/* валидация форм */
.js-validate-error-label {
    display: none;
}


/* окно об отправке формы, что всё успешно */

.thanks {
    display: none;
    Width: 400px;
    Height: 300px;
    top: 250px;
    position: fixed;
    border-radius: 10px;
    background-color:#3482C6;
    color: #fff;
    border: 1px solid rgba(52, 130, 198, 0.1);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    border-radius: 10px;
    z-index: 15;
}


.thanks__container {
    display: -webkit-box;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.thanks_request__btn {
    width: 19px;
    height: 19px;
    background-color: transparent;
    background-image: url(../local/templates/NewAsAvto/static/icons/X__white.svg);
    background-position: center;
    background-repeat: no-repeat;
    border: none;
    margin-left: 355px;
    padding-bottom: 27px;
    z-index: 15;
    cursor: pointer;
}

.thanks_title {
    text-align: center;
    font-size: 18px;
    margin-top: 10%;
    margin-bottom: 40px;
}

.thanks_request__btn:hover {
    opacity: .5;
    z-index: 10;
}

.thanks_app {
    text-align: center;
    font-size: 16px;
}

/* стили для открытия попапа */

.thanks_open {
    display: block;
    z-index: 60;
}

.thanks_request__btn:focus {
    opacity: .3;
    z-index: 15;
}

.back_to_top {
    position: fixed;
    bottom: 80px;
    right: 100px;
    z-index: 5;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 30px;
    background: #009bd8;
    color: #444;
    cursor: pointer;
    border-radius: 15px;
    display: none;
  }

  .arrow__up {
      margin-top: 10px;
  }
  
  .back_to_top:hover {
    background: #e9ebec;
  }
  
  .back_to_top-show {
    display: block;
  }

  
.wrapper__footer {
    display: flex;
    margin-top: 50px;
}

.info {
    margin-right: 10px;
}

.info__item__title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
}

.maps {
    margin-top: 50px;
}

.footer__logo {
    max-width: 159px;
    height: 79px;
    margin-right: 20px;
}

.wrapper__phone__footer {
    display: flex;
    flex-direction: column;
    padding-left: 20px;
    align-items: center;
}

.phone__footer {
    font-size: 18px;
    line-height: calc(32/18);
    margin-top: -10px;
    margin-bottom: 10px;
    text-align: center;
    color: #000;
}

.rev__phone__footer {
    padding-top: 5px;
    margin-bottom: 10px;
    background-color: #47A0ED;
    display: inline-block;
    color: #fff;
    font-size: 14px;
    line-height: 17px;
    background: #009bd8;
    width: 208px;
    height: 38px;
    border: 0;
}

.text__phone__footer {
    font-size: 16px;
    line-height: calc(24/16);
    text-align: center;
}


.info__item {
    color: #000;
    cursor: pointer;
}

.info__item {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    position: relative;
    overflow: hidden;
  }
  .info__item:before {
    content: "";
    position: absolute;
    z-index: -1;
    left: 0;
    right: 0;
    bottom: 0;
    background: #2098D1;
    height: 4px;
    -webkit-transform: translateY(4px);
    transform: translateY(4px);
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
  }
  .info__item:hover:before, .info__item:focus:before, .info__item:active:before {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

.info__item {
    color: #000;
    cursor: pointer;
}



@media (min-width: 1240px) and (max-width: 1340px) {
    .container_site {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 100px;
    }
    
    .adress {
        flex-wrap: nowrap;
        margin-left: 15px;
    }

    .header__mobile_btn {
        display: none;
    }

    .header__close__btn {
        display: none;
    }

    .mobile__header {
        display: none;
    }

    .nav__item__link {
        margin-right: 5px;
        font-size: 14px;
        line-height: calc(26/14);
    }

    .tabs__link__fl {
        margin-right: 40px;
    }

    .footer__section {
        margin-right: 25px;
    }

    .container__sub {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 100px;
    }

    .wrapper__menu {
        margin-right: 853px;
        margin-top: 26px;
    }

    .equipment_to_title {
        font-size: 20px;
    }

    .equipment_item_comp {
        margin-right: 14px;
    }
}

@media (min-width: 1023px) and (max-width: 1240px) {
    .container_site {
        max-width: 890px;
        margin: 0 auto;
        padding: 0 10px;
    }

    .container__sub {
        max-width: 1024px;
        margin: 0 auto;
        padding: 0 10px;
    }
    
    
    .adress {
        flex-wrap: nowrap;
    }

    .work__detail {
        font-size: 12px;
    }

    .header__mobile_btn {
        display: none;
    }

    .header__close__btn {
        display: none;
    }

    .phone {
        font-size: 14px;
    }

    .addr__item {
        font-size: 10px;
    }

    .nav__item__link {
        font-size: 12px;
        line-height: calc(20/12);    
        margin-right: 10px;
        padding-right: 20px;
        padding-left: 20px;
    }

    .adapt {
        display: none;
    }
    
    .wrapper__checkbox:checked ~ .wrapper__menu {
        right: -157px;
    }

    .wrapper__menu {
        margin-right: 743px;
    }

    .wrapper__button {
        margin-left: 30px;
    }

    .adress {
        padding-left: 20px;
    }

    .nav_item-link {
        margin-right: 30px;
    }

    .main_title {
        font-size: 55px;
    }
    .sub_text {
        font-size: 16px;
    }
    .slider-container {
        margin-left: 450px;
    }

    .form_traid-in {
        width: 460px;
        height: 560px;
    }

    .input__traid-in {
        max-width: 350px;
    }
    
    .credit_calc {
        width: 455px;
        height: 560px;
    }

    .traid__btn {
        margin-top: 30px;
    }
    
    .checkbox__personal {
        padding-left: 150px;
    }

    .credit__btn  {
        margin-top: 30px;
    }

    .equipment_item_model {
        font-size: 22px;
    }
    .equipment_item_old_price {
        font-size: 16px;
    }
    .equipment_item_new_price {
        font-size: 22px;
    }
}

@media (min-width:769px) and (max-width: 1023px) {
    .container_site {
        max-width: 710px;
        margin: 0 auto;
        padding: 0px 10px;
    }

    .adress {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-size: 12px;
        line-height: calc(18/12);
    }

    .info__item__title {
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .footer__logo {
        margin-right: 0;
    }

    .hidden__adapt {
        display: none;
    }

    .addr__list {
        text-align: center;
        margin-top: 10px;
    }

    .info {
        margin-right: 0px;
    }

    .wrapper__phone__footer {
        padding-left: 0px;
    }

    .phone__footer {
        margin-top: 10px;
    }

    .info__item {
        text-align: center;
    }

    .phone {
        display: none;
    }

    .rev__phone {
        display: none;
    }

    .work__detail {
        display: none;
    }

    .company__logo {
        max-width: 185px;
        height: 75px;
        margin-right: 0px;
    }

    .model_catalog__image {
        width: 150px;
        height: 100px;
    }

    .tabs__link__fl {
        margin-right: 25px;
        margin-bottom: 10px;
    }

    .header {
        margin-left: 100px;
    }

    .nav {
        display: none;
    }

    .mobile_phone_btn {
        display: block;
        margin-top: 15px;
    }
    
    .header__mobile_btn {
        display: block;
        background: transparent;
        border: none;
        width: 50px;
        height: 50px;
    }

    .header__mobile_btn:hover {
        opacity: 0.5;
    }

    .header__close__btn {
        display: block;
        background: transparent;
        border: none;
        width: 50px;
        height: 50px;
    }
    
    .header__close__btn:hover {
        opacity: 0.5;
    }

    .mobile__header {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transition: 0.4s;
        z-index: 50;
        transform: translateX(-1030px);
    }

    .open {
        transform: translateX(0px);
    }

    .mobile__header__container {
        background: #47A0ED;
        height: 100vh;
        width: 100%;
        padding: 50px;
        display: flex;
        justify-content: space-between;
    }

    .nav__item__link__mobile {
        color: #FFFFFF;
        font-size: 18px;
        line-height: calc(32/18);
    }

    .phone__mobile {
        font-size: 16px;
        line-height: calc(32/16);
        color: #fff;
    }

    .mobile_phone_btn {
        display: block;
    }

    .mob__phone {
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: #47A0ED;
        display: inline-block;
        color: #47A0ED;
        font-size: 14px;
        line-height: 17px;
        background: #fff;
        width: 208px;
        height: 38px;
        border: 0;
        display: block;
    }

    .cat__list {
        margin-top: 40px;
        margin-bottom: -40px;
    }

    .mob__text {
        text-align: center;
        color: #47A0ED;
    }

    .work__title__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        color: white;
    }

    .work__saloon__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        color: white;
    }

    .work__tech__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        margin-bottom: 20px;
        color: white;
    }

    .mobile__desc {
        display: flex;
        flex-direction: column;
    }
    
    .container__sub {
        max-width: 915px;
        margin: 0 auto;
        padding: 0px 10px;
    }

    .wrapper__checkbox:checked ~ .wrapper__menu {
        right: 42px;
    }
    
    .nav {
        margin-bottom: -20px;
    }

    .deck::before {
        display: none;
    }

    .deck::after {
        display: block;
        margin-top: -18px;
    }

    .header {
        margin-bottom: -20px;
    }

    .wrapper__menu {
        margin-right: 363px;
        margin-top: 26px;
    }

    .phone_wrapper {
        margin-left: 95px;
    }

    .nav_item-link {
        font-size: 16px;
        margin-right: 28px;
    }

    .main_title {
        font-size: 42px;
        margin-top: 0px;
    }
    .sub_text {
        font-size: 14px;
        line-height: 20px;
    }

    .slider-container {
        margin-top: -246px;
        margin-left: 340px;
    }

    .slider_img_title {
        padding-right: 5px;
    }

    .img_slider {
        max-width: 405px;
        height: 237px;
    }

    .slider_img_title {
        max-width: 8%;
    }

    .popup {
        top: 10%;
    }

    .form_wrapper {
        margin-left: 0px;
    }

    .form_traid-in {
        width: 338px;
        height: 540px;
    }

    .credit_calc {
        width: 338px;
        height: 540px;
    }

    .sub_title {
        font-size: 20px;
        padding-top: 15px;
    }

    .field {
        padding-left: 15px;
        padding-top: 15px;
    }

    .label__traid-in {
        font-size: 12px;
    }

    .input__traid-in {
        font-size: 12px;
        max-width: 290px;
    }

    .checkbox__personal {
        padding-left: 90px;
    }

    .credit__btn {
        margin-top: 30px;
        height: 50px;
    }

    .traid__btn {
        margin-top: 30px;
        height: 50px;
    }

    .slider_title_two {
        margin-top: 50px;
    }

    .equipment_item_comp {
        margin-right: 34px;
    }

    .equipment_title_two {
        padding: 11px 11px 11px 11px; 
    }

    .equipment_item_price {
        display: none;
    }

    .equipment_item_old_price {
        text-align: right;
    }

    .equipment_item_new_price {
        font-size: 18px;
    }

    .equipment_item_credit_price  {
        font-size: 12px;
        text-align: center;
    }

    .credit__item {
        text-align: center;
    }

    .equipment_to_title {
        font-size: 20px;
        margin-left: 5px;
    }

    .equipment_item_model {
        font-size: 20px;
    }

    .equipment_item_credit_btn {
        height: 35px;
        width: 175px;
        padding-top: 8px;
    }

    .save_title, .design_title, .comfort_title {
        margin-left: -10px;
        margin-top: 15px;
    }

    .save_title_additionally {
        margin-left: 5px;
        margin-top: 15px;
        font-size: 18px;
    }

    .save, .design, .comfort {
        margin-left: -5px;
        line-height: 25px;
    }

    .estimate {
        height: 550px;
    }

    .input__est {
        height: 120px;
    }

    .popup_request {
        margin-bottom: 50px;
    }

    .thanks {
        Width: 525px;
        Height: 400px;
    }

    .thanks_title {
        margin-top: 20%;
    }

    .thanks_request__btn {
        margin-left: 476px;
    }

    .footer__section {
        margin-right: 1px;
    }

    .footer__title {
        text-align: center;
    }

    .footer__list__item {
        text-align: center;
    }

    .wrapper__footer {
        font-size: 12px;
        flex-direction: column;
        align-items: center;
        font-size: 12px;
        flex-direction: column;
        align-items: center;
        margin-left: 55px;
    }

    .footer__section {
        margin-right: 1px;
    }

    .footer__title {
        text-align: center;
    }

    .footer__list__item {
        text-align: center;
    }
}

@media (min-width: 423px) and (max-width: 769px) {

    .container_site {
        max-width: 648px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .container__sub {
        max-width: 648px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .adress {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-size: 12px;
        line-height: calc(18/12);
    }

    .footer__logo {
        margin-right: 0;
    }

    .hidden__adapt {
        display: none;
    }

    .addr__list {
        text-align: center;
        margin-top: 10px;
    }

    .info {
        margin-right: 0px;
    }

    .info__item__title {
        margin-top: 10px;
        text-align: center;
    }

    .info__item {
        text-align: center;
    }

    .wrapper__phone__footer {
        padding-left: 0px;
    }

    .phone {
        display: none;
    }
    .rev__phone {
        display: none;
    }

    .work__detail {
        display: none;
    }

    .company__logo {
        max-width: 185px;
        height: 75px;
        margin-right: 30px;
    }

    .model_catalog__image {
        width: 150px;
        height: 100px;
    }

    .tabs__link__fl {
        margin-right: 25px;
        margin-bottom: 10px;
    }

    .header {
        justify-content: center;
    }

    .nav {
        display: none;
    }

    .mobile_phone_btn {
        display: block;
        margin-top: 10px;
    }
    
    .header__mobile_btn {
        display: block;
        background: transparent;
        border: none;
        margin-right: 30px;
        width: 50px;
        height: 50px;
    }

    .header__mobile_btn:hover {
        opacity: 0.5;
    }

    .header__close__btn {
        display: block;
        background: transparent;
        border: none;
        width: 50px;
        height: 50px;
    }
    
    .header__close__btn:hover {
        opacity: 0.5;
    }

    .mobile__header {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transition: 0.4s;
        z-index: 50;
        transform: translateX(-1000px);
    }

    .open {
        transform: translateX(0px);
    }

    .mobile__header__container {
        background: #47A0ED;
        height: 100vh;
        width: 100%;
        padding: 50px;
        display: flex;
        justify-content: space-between;
    }

    .nav__item__link__mobile {
        color: #FFFFFF;
        font-size: 18px;
        line-height: calc(32/18);
    }

    .phone__mobile {
        font-size: 16px;
        line-height: calc(32/16);
        color: #fff;
    }

    .mobile_phone_btn {
        display: block;
    }

    .cat__list {
        margin-top: 40px;
        margin-bottom: -70px;
    }

    .mob__phone {
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: #47A0ED;
        display: inline-block;
        color: #47A0ED;
        font-size: 14px;
        line-height: 17px;
        background: #fff;
        width: 208px;
        height: 38px;
        border: 0;
        display: block;
    }

    .mob__text {
        text-align: center;
        color: #47A0ED;
    }

    .work__title__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        color: white;
    }

    .work__saloon__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        color: white;
    }

    .work__tech__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        margin-bottom: 20px;
        color: white;
    }


    .deck::before {
        display: none;
    }

    .deck::after {
        display: block;
    }

    .deck {
        display: block;
    }

    
    .wrapper__tdr {
        text-align: left;
    }

    .header_inner {
        -ms-flex-pack: distribute;
            justify-content: space-around;
    }
    
    .company_logo {
        width: 100%;
        width: 88px;
        height: 51px;
    }

    .menu__item {
        -webkit-transform: translate(0px, 10%);
            -ms-transform: translate(0px, 10%);
                transform: translate(0px, 10%);
        opacity: 0;
        visibility: visible;
        pointer-events: none;
        -webkit-transition: all 0,3 ease 0s;
        -o-transition: all 0,3 ease 0s;
        transition: all 0,3 ease 0s;
    }

    .catalog__menu {
        display: none;
    }

    .burger__wrapper {
        display: block;
        width: 100%;
        height: 100%;
        background-size: cover; 
    }

    .wrapper {
        display: block;
      }
    
    .wrapper__checkbox {
        display: none; 
    }
      
      .wrapper__checkbox:checked ~ .wrapper__menu {
        right: -30px;
    }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(1) {
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        top: 8px; 
    }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(2) {
        opacity: 0; }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(3) {
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-deg);
        top: -6px; }
      
      .wrapper__button {
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 46px;
        height: 41px;
        background: #3482C6;
        position: absolute;
        top: 30px;
        right: 25px;
        cursor: pointer;
        z-index: 15; 
    }
      
      .wrapper__button-line {
        display: block;
        width: 30px;
        height: 3px;
        border-radius: 5px;
        background: #FFFFFF;
        margin: 4px 0;
        position: relative;
        -webkit-transition: all .1s linear 0.2s;
        -o-transition: all .1s linear 0.2s;
        transition: all .1s linear 0.2s; }
      
      .wrapper__menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 282px;
        height: 440px;
        background: rgba(0, 0, 0, 0.8);
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-start;
        padding: 100px 40px 40px;
        -webkit-transition: right 0.4s;
        -o-transition: right 0.4s;
        transition: right 0.4s;
        margin-right: 22px;
        margin-top: 20px;
    }
      
    .wrapper__menu-link {
        font-size: 18px;
        line-height: 20px;
        color: #fff;
        text-transform: uppercase;
        text-decoration: none;
        margin-bottom: 30px;
        padding: 5px 10px;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear; 
    }

    .wrapper__menu-link:hover {
          padding-right: 20px; 
    }

    .phone_wrapper {
        margin-left: 10px;
        padding-right: 0px;
    }

    .icon_dot {
        margin-right: 0;
    }

    .nav {
        padding-top: 35px;
    }

    .nav_item-link {
        font-size: 14px;
    }

    .main_wrapper {
        margin-left: 12px;
    }

    .main_title {
        font-size: 42px;
        padding-bottom: 15px;
        margin-top: 30px;
    }
    .sub_text {
        font-size: 14px;
        line-height: 17px;
        margin-top: 10px;
    }

    .slider-container {
        margin-left: 10px;
        margin-top: 8px;
    }

    .img_slider {
        width: 358.8px;
        height: 210px;
    }

    .swiper_pagination {
        text-align: center;
    }

    .slider_img_title {
        padding-right: 3px;
    }

    .form_wrapper {
        align-items: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
                margin-top: 10px;
    }

    .form_traid-in {
        margin-top: 0px;
        max-width: 395px;
        height: 520px;
    }

    .popup {
        position: fixed;
        height: 475px;
    }

    .popup_drive {
        margin-left: 0px;
        padding-top: 5px;
        font-size: 16px;
    }

    .wrapper__tdr {
        margin-top: 10px;
    }

    .popup_drive__btn {
        margin-left: 300px;
    }

    .input__popup {
        max-width: 300px;
        padding-left: 11px;
    }

    .input__est {
        padding-left: 11px;
    }

    .field_name,
    .field_phone,
    .field_calendar {
        margin-left: 25px;
    }

    .checkbox_popup {
        margin-top: -85px;
    }

    .credit_calc {
        margin-left: 0px;
        margin-top: 60px;
        max-width: 395px;
        height: 525px;
    }

    .traid__btn {
        width: 300px;
        height: 45px;
        margin-left: 32px;
        border-radius: 10px;
    }

    .sub_title {
        font-size: 18px;
        line-height: 22px;
        padding-top: 25px;
    }
 
    .label__traid-in {
        font-size: 12px;
        line-height: 16px;
    }

    .input__traid-in {
        max-width: 330px;
        padding-left: 11px;
    }

    .checkbox__personal {
        padding-left: 50px;
    }
    
    .checkbox__label {
        font-size: 14px;
        line-height: 19px;
    }

    .credit__btn {
        width: 280px;
        height: 50px;
        margin-top: 30px;
        margin-left: 3px;
        border-radius: 10px;
    }

    .traid__btn {
        width: 280px;
        height: 50px;
        margin-top: 30px;
        margin-left: 3px;
        border-radius: 10px;
    }

    .slider_title_one {
        font-size: 18px;
        text-align: center;
        line-height: 36px;
    }

    .slider_title_two {
        font-size: 18px;
        line-height: 36px;
    }

    .slider_title_three {
        font-size: 18px;
        line-height: 36px;
    }

    .slider-buttons_one {
        display: none;
    }
    
    .text_slide {
        font-size: 12px;
        line-height: 20px;
    }

    .slider-buttons {
        display: none;
    }

    .equipment_to_title {
        display: none;
    }

    .equip {
        margin-top: 50px;
    }

    /* стили аккордеона */
    
    .equipment_item_adapt {
        display: block;
    }

    .equipment_item_price_adapt {
        display: inline-block;
        margin-top: 5px;
    }

    .equipment_item_new_adapt {
        display: inline-block;
    }

    .compl {
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .equipment_item_credit_btn {
        border-radius: 10px;
        margin-top: 23px;
    }

    .equipment_item, .accordion__icon_adapt{
        position: absolute;
        margin-top: 225px;
        left: 50%;
        margin-left: -15px;
    }

    .save, .design, .comfort {
        font-size: 14px;
        line-height: 24px;
        margin-left: 5px;
    }

    .save_title {
        font-size: 16px;
        margin-left: 5px;
        margin-top: 10px;
    }

    .design_title {
        font-size: 16px;
        margin-left: 5px;
    }

    .comfort_title {
        font-size: 16px;
        margin-left: 5px;
    }

    .save_title_additionally {
        font-size: 14px;
        margin-left: 5px;
        margin-top: 15px;
    }

    .equipment_title_two {
        display: block;
        margin-bottom: 20px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 11px 11px 50px 11px;
    }

    .equipment_item_model {
        font-size: 18px;
        -webkit-box-align: right;
            -ms-flex-align: right;
                align-items: right;
    }
    
    .equipment_item_old_price{
        font-size: 16px;
    }

    .equipment_item_new_price {
        font-size: 18px;
    }

    .equipment_item_new_adapt {
        margin-top: 9px;
    }

    .equipment_item_credit_price {
        margin-top: 20px;
        text-align: center;
    }

    .credit__item {
        text-align: center;
    }

    .estimate_btn__js {
        margin-top: 40px;
        border-radius: 10px;
    }

    .popup_request {
        font-size: 18px;
        padding-bottom: 10px;
    }

    .label__popup {
        font-size: 12px;
    }

    .slider_title_sale {
        font-size: 18px;
        margin-top: 120px;
        text-align: center;
    }

    .estimate {
        width: 314px;
        height: 520px;
        top: 15%;
    }

    .news {
        overflow: hidden;
        margin-top: 40px;
    }

    .popup_request__btn {
        margin-left: 279px;
    }

    .popup_cont {
        margin-top: -70px;
    }

    .field_est {
        margin-left: 25px;
    }

    .title__popup {
        height: 465px;
    }

    .popup__btn {
        width: 220px;
        height: 35px;
    }

    .input__est, 
    .input__popup {
        max-width: 285px;
        font-size: 12px;
    }

    .input__est {
        height: 80px;
    }

    .popup_req__js {
        margin-top: 20px;
    }

    .checkbox_popup {
        margin-top: 25px;
        margin-left: 45px;
    }

    .news__slider {
        margin-top: 20px;
        margin-bottom: 30px;
        margin-left: 20px;
    }

    .slider-container_one {
        margin-top: 20px;
    }
    
    .slider_title_news {
        font-size: 18px;
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        text-transform: uppercase;
    }

    .slider_title_feedback {
        font-size: 18px;
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    .feedback {
        margin-top: 20px;
    }

    .slider-container_news {
        margin-top: 10px;
    }

    .slider-container_feedback {
        margin-top: 10px;
    }

    .news_title {
        font-size: 30px;
        line-height: 36px;
    }

    .news_container {
        margin-top: 40px;
    }

    .news__cont {
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    }

    .feedback_title {
        font-size: 30px;
        line-height: 36px;
        margin-top: 1px;
    }
    .feedback_container {
        margin-left: 30px;
    }

    .thanks {
        Width: 400px;
        Height: 402px;
    }

    .thanks_request__btn {
        margin-left: 350px;
    }
    
    .wrapper__footer {
        font-size: 12px;
        flex-direction: column;
        align-items: center;
        margin-top: 480px;
    }

    .footer__section {
        margin-right: 1px;
    }

    .footer__title {
        text-align: center;
    }

    .footer__list__item {
        text-align: center;
    }
}

@media (min-width: 373px) and (max-width: 423px) {
    .container_site {
        max-width: 360px;
        margin: 0 auto;
        padding: 0px 5px;
    }

    .container__sub {
        max-width: 360px;
        margin: 0 auto;
        padding: 0px 5px;
    }

    
    .adress {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-size: 12px;
        line-height: calc(18/12);
    }

    .footer__logo {
        margin-right: 0;
    }

    .hidden__adapt {
        display: none;
    }

    .addr__list {
        text-align: center;
        margin-top: 10px;
    }

    .info {
        margin-right: 0px;
    }

    .info__item__title {
        margin-top: 10px;
        text-align: center;
    }

    .info__item {
        text-align: center;
    }

    .wrapper__phone__footer {
        padding-left: 0px;
    }

    .phone {
        display: none;
    }
    .rev__phone {
        display: none;
    }

    .work__detail {
        display: none;
    }

    .company__logo {
        max-width: 185px;
        height: 75px;
        margin-right: 0px;
    }

    .model_catalog__image {
        width: 150px;
        height: 100px;
    }

    .header {
        margin-left: 20px;
    }

    .nav {
        display: none;
    }

    .mobile_phone_btn {
        display: block;
        margin-top: 10px;
    }
    
    .header__mobile_btn {
        display: block;
        background: transparent;
        border: none;
        width: 50px;
        height: 50px;
    }

    .header__mobile_btn:hover {
        opacity: 0.5;
    }

    .header__close__btn {
        display: block;
        background: transparent;
        border: none;
        width: 50px;
        height: 50px;
    }
    
    .header__close__btn:hover {
        opacity: 0.5;
    }

    .mobile__header {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transition: 0.4s;
        z-index: 50;
        transform: translateX(-1000px);
    }

    .open {
        transform: translateX(0px);
    }

    .mobile__header__container {
        background: #47A0ED;
        height: 100vh;
        width: 100%;
        padding: 30px;
        display: flex;
        justify-content: space-between;
    }

    .nav__item__link__mobile {
        color: #FFFFFF;
        font-size: 18px;
        line-height: calc(32/18);
    }

    .phone__mobile {
        font-size: 16px;
        line-height: calc(32/16);
        color: #fff;
    }

    .mobile_phone_btn {
        display: block;
    }

    .mob__phone {
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: #47A0ED;
        display: inline-block;
        color: #47A0ED;
        font-size: 14px;
        line-height: 17px;
        background: #fff;
        width: 208px;
        height: 38px;
        border: 0;
        display: block;
    }

    .mob__text {
        text-align: center;
        color: #47A0ED;
    }

    .work__title__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        color: white;
    }

    .work__saloon__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        color: white;
    }

    .work__tech__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        margin-bottom: 20px;
        color: white;
    }

    .cat__list {
        margin-top: 40px;
        margin-bottom: -70px;
    }

    .deck::before {
        display: none;
    }

    .deck::after {
        display: block;
    }

    .deck {
        display: block;
    }

    
    .wrapper__tdr {
        text-align: left;
    }

    .header_inner {
        margin-left: 0px;
    }

    .slider-container_news {
        margin-top: 15px;
    }

    .slider-container_feedback {
        margin-top: 5px;
    }
    
    .company_logo {
        width: 100%;
        width: 88px;
        height: 51px;
    }

    .menu__item {
        -webkit-transform: translate(0px, 10%);
            -ms-transform: translate(0px, 10%);
                transform: translate(0px, 10%);
        opacity: 0;
        visibility: visible;
        pointer-events: none;
        -webkit-transition: all 0,3 ease 0s;
        -o-transition: all 0,3 ease 0s;
        transition: all 0,3 ease 0s;
    }

    .catalog__menu {
        display: none;
    }

    .burger__wrapper {
        display: block;
        width: 100%;
        height: 100%;
        background-size: cover; 
    }

    .wrapper {
        display: block;
      }
    
    .wrapper__checkbox {
        display: none; 
    }
      
      .wrapper__checkbox:checked ~ .wrapper__menu {
        right: -1080px;
    }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(1) {
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        top: 8px; 
    }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(2) {
        opacity: 0; }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(3) {
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-deg);
        top: -6px; }
      
      .wrapper__button {
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 46px;
        height: 41px;
        background: #3482C6;
        position: absolute;
        top: 20px;
        right: 5px;
        cursor: pointer;
        z-index: 15; 
    }
      
      .wrapper__button-line {
        display: block;
        width: 30px;
        height: 3px;
        border-radius: 5px;
        background: #FFFFFF;
        margin: 4px 0;
        position: relative;
        -webkit-transition: all .1s linear 0.2s;
        -o-transition: all .1s linear 0.2s;
        transition: all .1s linear 0.2s; }
      
      .wrapper__menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 282px;
        height: 440px;
        background: rgba(0, 0, 0, 0.8);
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-start;
        padding: 100px 40px 40px;
        -webkit-transition: right 0.4s;
        -o-transition: right 0.4s;
        transition: right 0.4s;
        margin-top: 20px;
    }
      
      .wrapper__menu-link {
        font-size: 18px;
        line-height: 20px;
        color: #fff;
        text-transform: uppercase;
        text-decoration: none;
        margin-bottom: 30px;
        padding: 5px 10px;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear; 
    }

    .wrapper__menu-link:hover {
        padding-right: 20px; 
    }


    .phone_wrapper {
        margin-left: 1px;
    }

    .icon_dot {
        margin-right: 0;
    }

    .nav {
        padding-top: 30px;
    }

    .nav_item-link {
        margin-top: 1px;
        font-size: 10px;
        margin-right: 12px;
    }
    .main_wrapper {
        margin-left: 12px;
    }

    .main_title {
        font-size: 40px;
        margin-top: 5px;
        padding-bottom: 15px;
    }
    .sub_text {
        font-size: 14px;
        line-height: 17px;
    }

    .slider-container {
        margin-left: 10px;
        margin-top: 8px;
    }

    .img_slider {
        width: 358.8px;
        height: 210px;
    }

    .swiper_pagination {
        text-align: center;
    }

    .slider_img_title {
        padding-right: 3px;
    }
    
    .form_wrapper {
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
    }

    .form_traid-in {
        margin-top: 130px;
        width: 335px;
        height: 520px;
    }

    .popup {
        width: 314px;
        height: 520px;
        position: fixed;
        top: 80px;
    }

    .popup_drive {
        margin-left: 0px;
        padding-top: 5px;
        font-size: 16px;
    }

    .popup_drive__btn {
        margin-left: 280px;
    }

    .input__popup, .input__est {
        width: 300px;
        padding-left: 11px;
        
    }

    .field_name,
    .field_phone,
    .field_calendar {
        margin-left: 25px;
    }

    .checkbox_popup {
        margin-top: -85px;
    }

    .credit_calc {
        margin-top: 50px;
        width: 330px;
        height: 525px;
    }

    .traid__btn {
        width: 300px;
        height: 45px;
        margin-left: 15px;
        margin-top: 20px;
        border-radius: 10px;
    }

    .sub_title {
        font-size: 18px;
        line-height: 22px;
        padding-top: 25px;
    }
 
    .label__traid-in {
        font-size: 12px;
        line-height: 16px;
    }

    .input__traid-in {
        width: 270px;
        padding-left: 11px;
    }

    .checkbox__personal {
        padding-left: 100px;
    }
    
    .checkbox__label {
        font-size: 14px;
        line-height: 19px;
    }

    .credit__btn {
        width: 280px;
        height: 50px;
        margin-top: 30px;
        margin-left: 24px;
        border-radius: 10px;
    }

    .slider-container_one {
        margin-top: 20px;
    }

    .slider_title_one {
        text-align: center;
        font-size: 26px;
        line-height: 36px;
    }

    .slider_title_two {
        margin-top: 50px;
        font-size: 26px;
        line-height: 36px;
        margin-bottom: 15px;
    }

    .slider_title_three {
        font-size: 26px;
        line-height: 36px;
        margin-top: 50px;
    }

    .slider-buttons_one {
        display: none;
    }
    
    .text_slide {
        font-size: 12px;
        line-height: 20px;
    }

    .slider-buttons {
        display: none;
    }

    .equipment_to_title {
        display: none;
    }

    .equip {
        margin-top: 50px;
    }

    /* стили аккордеона */

    .equipment_item_adapt {
        display: block;
        margin-top: 8px;
    }

    .equipment_item_price_adapt {
        display: inline-block;
        margin-top: 5px;
    }

    .equipment_item_new_adapt {
        display: inline-block;
    }

    .compl {
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .equipment_item_credit_btn {
        border-radius: 10px;
        margin-top: 23px;
    }

    .equipment_item, .accordion__icon_adapt{
        position: absolute;
        -webkit-margin-top: 275px;
        margin-top: 270px; 
        left: 45%;
    }

    .save, .design, .comfort {
        font-size: 14px;
        line-height: 20px;
        margin-left: -11px;
    }

    .save_title {
        margin-left: -10px;
        font-size: 14px;
        margin-top: 20px;
    }

    .design_title {
        margin-left: -10px;
        font-size: 14px;
        margin-top: 20px;
    }

    .comfort_title {
        margin-left: -10px;
        font-size: 14px;
        margin-top: 20px;
    }

    .save_title_additionally {
        font-size: 14px;
        margin-left: -10px;
        margin-top: 15px;
    }

    .equipment_title_two {
        display: block;
        margin-left: 15px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        padding-bottom: 40px;
        padding: 11px 30px 50px 19px;
    }

    .equipment_item_model {
        font-size: 18px;
    }
    
    .equipment_item_old_price{
        font-size: 16px;
        text-align: right;
    }

    .equipment_item_new_price {
        font-size: 18px;
    }

    .equipment_item_new_adapt {
        margin-top: 9px;
    }

    .equipment_item_credit_price {
        margin-top: 20px;
        text-align: center;
    }

    .credit__item {
        text-align: center;
    }

    .estimate_btn__js {
        margin-top: 40px;
        border-radius: 10px;
    }

    .slider_title_sale {
        margin-top: 90px;
        text-align: center;
    }

    .estimate {
        width: 314px;
        height: 520px;
    }

    .news {
        overflow: hidden;
        margin-top: -10px;
    }

    .popup_request__btn {
        margin-left: 279px;
    }

    .popup_request {
        margin-bottom: 90px;
    }

    .popup_cont {
        margin-top: -70px;
    }

    .field_est {
        margin-left: 25px;
    }

    .input__est {
        height: 80px;
    }

    .popup_req__js {
        margin-top: 20px;
    }

    .checkbox_popup {
        margin-top: 25px;
        margin-left: 45px;
    }

    .news__slider {
        margin-top: 20px;
        margin-bottom: 30px;
        margin-left: 20px;
    }
    
    .slider_title_news {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        text-transform: uppercase;
    }

    .slider_title_feedback {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        text-transform: uppercase;
        margin-bottom: 15px;
        margin-top: -50px;
    }

    .news_title {
        font-size: 30px;
        line-height: 36px;
    }

    .news_container {
        margin-top: 40px;
    }

    .news__cont {
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    }

    .feedback_title {
        font-size: 30px;
        line-height: 36px;
        margin-top: 1px;
    }
    .feedback_container {
        margin-left: 30px;
    }

    .line_title_feedback {
        width: 105px;
        height: 3px;
        left: 250px;
        margin-top: 15px;
    }

    .thanks {
        Width: 330px;
        Height: 310px;
    }

    .thanks_request__btn {
        margin-left: 290px;
    }

    .footer__section {
        margin-right: 1px;
    }

    .footer__title {
        text-align: center;
    }

    .footer__list__item {
        text-align: center;
    }

    
    .wrapper__footer {
        font-size: 12px;
        flex-direction: column;
        align-items: center;
        margin-top: 480px;
    }

    .footer__section {
        margin-right: 1px;
    }

    .footer__title {
        text-align: center;
    }

    .footer__list__item {
        text-align: center;
    }
}


@media (min-width: 320px) and (max-width: 373px) {
    .container_site {
        max-width: 319px;
        margin: 0 auto;
        padding: 0 10px;
    }

    .container__sub {
        max-width: 319px;
        margin: 0 auto;
        padding: 0 10px;
    }

    .adress {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-size: 12px;
        line-height: calc(18/12);
    }

    .footer__logo {
        margin-right: 0;
    }

    .hidden__adapt {
        display: none;
    }

    .addr__list {
        text-align: center;
        margin-top: 10px;
    }

    .info {
        margin-right: 0px;
    }

    .info__item__title {
        margin-top: 10px;
        text-align: center;
    }

    .info__item {
        text-align: center;
    }

    .wrapper__phone__footer {
        padding-left: 0px;
    }

    .phone {
        display: none;
    }
    .rev__phone {
        display: none;
    }

    .work__detail {
        display: none;
    }

    .company__logo {
        max-width: 185px;
        height: 75px;
        margin-right: 0px;
    }

    .model_catalog__image {
        width: 150px;
        height: 100px;
    }

    .header {
        margin-left: 20px;
    }

    .nav {
        display: none;
    }

    .mobile_phone_btn {
        display: block;
        margin-top: 5px;
    }
    
    .header__mobile_btn {
        display: block;
        background: transparent;
        border: none;
        width: 50px;
        height: 50px;
    }

    .header__mobile_btn:hover {
        opacity: 0.5;
    }

    .header__close__btn {
        display: block;
        background: transparent;
        border: none;
        width: 50px;
        height: 50px;
    }
    
    .header__close__btn:hover {
        opacity: 0.5;
    }

    .mobile__header {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transition: 0.4s;
        z-index: 50;
        transform: translateX(-1000px);
    }

    .open {
        transform: translateX(0px);
    }

    .mobile__header__container {
        background: #47A0ED;
        height: 100vh;
        width: 100%;
        padding: 30px;
        display: flex;
        justify-content: space-between;
    }

    .nav__item__link__mobile {
        color: #FFFFFF;
        font-size: 18px;
        line-height: calc(32/18);
    }

    .phone__mobile {
        font-size: 16px;
        line-height: calc(32/16);
        color: #fff;
    }

    .mobile_phone_btn {
        display: block;
    }

    .mob__phone {
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: #47A0ED;
        display: inline-block;
        color: #47A0ED;
        font-size: 14px;
        line-height: 17px;
        background: #fff;
        width: 208px;
        height: 38px;
        border: 0;
        display: block;
    }

    .mob__text {
        text-align: center;
        color: #47A0ED;
    }

    .cat__list {
        margin-top: 10px;
        margin-bottom: -70px;
    }

    .work__title__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        color: white;
    }

    .work__saloon__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        color: white;
    }

    .work__tech__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        margin-bottom: 20px;
        color: white;
    }

    .deck::before {
        display: none;
    }

    .deck::after {
        display: block;
    }

    .btn {
        font-size: 12px;
        width: 185px;
        height: 30px;
    }
    
    .wrapper__tdr {
        margin-top: 15px;
        text-align: left;
    }

    .deck {
        display: block;
    }

    .header {
        margin-bottom: -10px;
    }

    .main_title {
        padding-bottom: 5px;
    }

    .second {
        margin-bottom: -15px;
    }

    .menu__item {
        -webkit-transform: translate(0px, 10%);
            -ms-transform: translate(0px, 10%);
                transform: translate(0px, 10%);
        opacity: 0;
        visibility: visible;
        pointer-events: none;
        -webkit-transition: all 0,3 ease 0s;
        -o-transition: all 0,3 ease 0s;
        transition: all 0,3 ease 0s;
    }

    .catalog__menu {
        display: none;
    }

    .burger__wrapper {
        display: block;
        width: 100%;
        height: 100%;
        background-size: cover; 
    }

    .wrapper {
        display: block;
      }
    
    .wrapper__checkbox {
        display: none; 
    }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(1) {
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        top: 8px; 
    }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(2) {
        opacity: 0; }
      
      .wrapper__checkbox:checked ~ .wrapper__button .wrapper__button-line:nth-child(3) {
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-deg);
        top: -6px; }
      
      .wrapper__button {
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 46px;
        height: 41px;
        background: #3482C6;
        position: absolute;
        top: 20px;
        right: 5px;
        cursor: pointer;
        z-index: 15; 
    }
      
      .wrapper__button-line {
        display: block;
        width: 30px;
        height: 3px;
        border-radius: 5px;
        background: #FFFFFF;
        margin: 4px 0;
        position: relative;
        -webkit-transition: all .1s linear 0.2s;
        -o-transition: all .1s linear 0.2s;
        transition: all .1s linear 0.2s; }
      
      .wrapper__menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 282px;
        height: 380px;
        background: rgba(0, 0, 0, 0.8);
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-start;
        padding: 100px 40px 40px;
        -webkit-transition: right 0.4s;
        -o-transition: right 0.4s;
        transition: right 0.4s;
        margin-right: -30px;
        margin-top: 20px;
    }
      
      .wrapper__menu-link {
        font-size: 12px;
        line-height: 10px;
        color: #fff;
        text-transform: uppercase;
        text-decoration: none;
        margin-bottom: 30px;
        padding: 5px 10px;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear; 
    }

    .wrapper__menu-link:hover {
        padding-right: 20px; 
    }
    
    .phone_wrapper {
        font-size: 12px;
        margin-left: 2px;
    }

    .company__logo {
        width: 80px;
        height: 50px;
    }

    .nav_item-link {
        margin-right: 5px;
        font-size: 10px;
    }

    .main_title {
        font-size: 32px;
        margin-top: 10px;
    }

    .form_wrapper {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
                margin-top: 10px;
    }

    .sub_text {
        font-size: 14px;
        line-height: 22px;
    }

    .sub_text_wrapper {
        margin-top: 0px;
    }

    .title__popup {
        height: 465px;
    }

    .popup {
        width: 290px;
        height: 500px;
        top: 80px;
    }

    .popup_drive {
        margin-left: 0px;
        padding-top: 10px;
        margin-bottom: 45px;
        font-size: 16px;
    }

    .label__popup {
        font-size: 12px;
    }

    .input__popup {
        font-size: 12px;
        max-width: 240px;
    }

    .checkbox__drive {
        font-size: 12px;    
    }

    .popup_drive__btn {
        margin-left: 250px;
    }

    .field_name {
        margin-left: 22px;
    }

    .field_phone {
        margin-left: 22px;
    }

    .field_calendar {
        margin-left: 22px;
    }

    .checkbox_popup {
        margin-left: 35px;
        margin-top: 10px;
    }

    .popup__btn {
        width: 240px;
        height: 32px;
        margin-top: 25px;
    }

    .slider-container {
        margin-left: 25px;
        margin-top: 8px;
    }

    .img_slider {
        width: 270px;
        height: 168px;
    }

    .swiper_pagination {
        text-align: center;
    }

    .slider_img_title {
        padding-right: 1px;
        max-width: 10%;
    }

    .form_traid-in {
        margin-top: -50px;
        height: 525px;
    }

    .credit_calc {
        margin-left: 0px;
        margin-top: 40px;
    }

    .slider-container_one {
        margin-top: 25px;
    }

    .traid__btn {
        width: 240px;
        height: 32px;
        margin-left: 20px;
    }

    .sub_title {
        font-size: 20px;
    }

    .field {
        padding-left: 5px;
    }

    .label__traid-in {
        font-size: 10px;
    }
    
    .input__traid-in {
        font-size: 10px;
    }

    .checkbox__personal {
        padding-left: 25px;
    }

    .slider_title_two {
        margin-top: 25px;
    }

    .credit__btn {
        width: 240px;
        height: 32px;
        margin-left: 0px;
        margin-top: 25px;
    }

    .slider_title_one {
        font-size: 20px;
        margin-top: 20px;
    }

    .text_slide {
        font-size: 12px;
    }

    .equipment_to_title {
        display: none;
    }
    
    .equipment_item_adapt {
        margin-top: 16px;
        font-size: 16px;
        display: block;
        margin-right: 5px;
    }


    .equipment_item_new_adapt {
        display: inline-block;
    }

    .compl {
        display: -webkit-box;
        display: -moz-flex;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .equipment_item_credit_btn {
        height: 32px;
        width: 182px;
        padding-top: 6px;
        border-radius: 10px;
        margin-top: 23px;
    }

    .equipment_item, .accordion__icon_adapt{
        position: absolute;
        margin-top: 220px;
        left: 47%;
        margin-left: 0px;
    }

    .equipment_item_credit_price {
        font-size: 10px;
        text-align: center;
    }
    
    .credit__item {
        text-align: center;
    }

    .save, .design, .comfort {
        font-size: 14px;
        line-height: 20px;
        margin-left: -10px;
    }

    .design_title {
        font-size: 16px;
        margin-left: -10px;
    }

    .save_title_additionally {
        font-size: 14px;
        margin-left: -10px;
        margin-top: 30px;
        margin-bottom: -40px;
    }

    .save_title {
        font-size: 16px;
        margin-left: -10px;
        margin-top: 30px;
    }

    .comfort_title {
        margin-left: -10px;
        font-size: 16px;
    }

    .equip {
        margin-top: 20px;
    }

    .equipment_title_two {
        display: block;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        padding-bottom: 40px;
        padding: 11px 19px 50px 19px;
    }

    .equipment_item_model {
        font-size: 16px;
        margin-top: 6px;
        text-align: right;
    }

    
    .equipment_item_price_adapt {
        font-size: 14px;
        display: inline-block;
        margin-top: 5px;
    }
    
    .equipment_item_old_price{
        font-size: 16px;
        text-align: right;
    }

    .equipment_item_new_price {
        font-size: 14px;
        font-weight: 600;
        text-align: right;
    }

    .equipment_item_new_adapt {
        font-size: 14px;
        margin-top: 9px;
        text-align: right;
    }

    .equipment_item_credit_price {
        text-align: center;
        margin-top: 20px;
    }

    .credit__item {
        text-align: center;
    }

    .estimate {
        width: 288px;
        height: 475px;
    }

    .line_title_sale {
        width: 112px;
        left: 219px;
    }

    .popup_request {
        margin-left: 30px;
        margin-bottom: 40px;
    }

    .popup_request__btn {
        margin-left: 250px;
    }

    .field_est {
        margin-left: 20px;
    }

    .input__est {
        width: 240px;
        height: 60px;
    }

    .popup_req__js {
        margin-top: 20px;
    }

    .slider_title_two {
        font-size: 20px;
    }

    .slider_title_three {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .news {
        margin-top: 35px;
    }

    .feedback {
        margin-top: 35px;
    }

    .thanks {
        Width: 300px;
        Height: 292px;
        top: 150px;
        position: fixed;
    }

    .thanks_request__btn {
        margin-left: 260px;
    }

    .wrapper__footer {
        font-size: 12px;
        flex-direction: column;
        align-items: center;
        margin-top: 480px;
    }

    .footer__section {
        margin-right: 1px;
    }

    .footer__title {
        text-align: center;
    }

    .footer__list__item {
        text-align: center;
    }
}

</style>

<nav class="nav">
            <ul class="navigation">
                <li class="nav__item"><a href="../pages/catalogCars.html" class="nav__item__link checked__link">Новые авто</a>
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
                <li class="nav__item"><a href="../pages/about.html" class="nav__item__link">О нас</a></li>
                <li class="nav__item"><a href="../pages/contact.html" class="nav__item__link">Контакты</a></li>
            </ul>
        </nav>
    <main>
        <div class="container_site">
            <ul class="cat__list">
                <li class="cat__list__item"><img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/arrowL.svg" alt=""><img src="../static/icons/arrowL.svg" alt="" class="ar__right"><a href="../pages/catalogCars.html" class="cat__list__inner">Назад в каталог</a></li>
            </ul>
            <section class="title">
                <div class="main_wrapper">
                    <h1 class="main_title">
                        Chery Tiggo 4
                    </h1>
                    <p class="sub_text">От 1 124 900 руб.</p>
                    <div class="sub_text_wrapper">
                        <p class="sub_text">В кредит за <span class="text_color"> 11 990 р/месяц</span> или меньше!</p>
                        <p class="sub_text second">Подарок: <span class="text_color">5000</span> бонусных рублей!</p>
                        <div class="wrapper__tdr">
                            <button class="btn title__popup__js">
                                Записаться на Тест-драйв
                            </button>
                        </div>
                    </div>
                    
                </div>
            </section>
            <div class="slider_wrapper">
                <div class="slider-container">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/platinum_tiggo4.jpg" src="#" alt="">
                            </div>

                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/w_tiggo4.jpg"  alt=""></div>

                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/white_tiggo4.jpg" alt=""></div>

                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/red_tiggo4.jpg" alt=""></div>

                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/w_tiggo4.jpg" alt=""></div>

                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/white_tiggo4.jpg" alt=""></div>

                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/red_tiggo4.jpg" alt=""></div>

                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/w_tiggo4.jpg" alt=""></div>

                            <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/white_tiggo4.jpg" alt=""></div>

                        </div>
                        <div class="swiper_pagination">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control.svg" alt="" class="slider_img_title">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_black.svg" alt="" class="slider_img_title">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_grey.svg" alt="" class="slider_img_title">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_red.svg" alt="" class="slider_img_title">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control.svg" alt="" class="slider_img_title">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_black.svg" alt="" class="slider_img_title">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_grey.svg" alt="" class="slider_img_title">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/icons/slider_control_red.svg" alt="" class="slider_img_title">
                        </div>
                    </div>
                </div>
            </div>
        <div class="form_wrapper">
            <section class="form_traid-in">
                <h2 class="sub_title" id="calculator">
                    Заявка на Trade-in
                </h2>
                <form class="traid-in_calc form__js" action="" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                    <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
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
                            <label for="input__manufacturer" class="label__traid-in">Марка</label>
                            <input type="text" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                        </div>
                        <div class="field">
                            <label for="input_traid" class="label__traid-in">Модель</label>
                            <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
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
            <section class="credit_calc">
                <h2 class="sub_title" id="">
                    Заявка на расчёт кредита
                </h2>
                <form class="credit_calc_wp  form__js" action="" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                    <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                    <div class="field">
                        <label for="credit__name" class="label__traid-in">Имя*</label>
                        <input type="text" id="credit__name" name="name" class="input__traid-in" data-validate-field="credit__name" placeholder="Ваше имя">
                    </div>
                    <div class="field__wrapper">
                        <div class="field">
                            <label for="credit__form__phone" class="label__traid-in">Телефон*</label>
                            <input type="tel" id="credit__form__phone" name="tel" class="input__traid-in" data-validate-field="tel__credit" placeholder="Ваш телефон">
                        </div>
                        <div class="field">
                            <label for="input__initial" class="label__traid-in">Первый взнос</label>
                            <input type="text" id="input__initial" class="input__traid-in" placeholder="Сумма первого взноса">
                        </div>
                        <div class="field">
                            <label for="credit__time" class="label__traid-in">Срок</label>
                            <input type="text" id="credit__time" class="input__traid-in" placeholder="Срок кредита">
                        </div>
                    </div>
                    <div class="checkbox__personal">
                        <input id="credit__personal__inf" type="checkbox" class="checkbox__input " checked value="Receipt" data-validate-field="credit__personal">
                        <label for="credit__personal__inf" class="checkbox__label">Согласие на обработку ПД</label>
                    </div>
                    <div class="popup__btn__flex">
                        <button class="btn traid__btn open_thanks_js" type="submit">Отправить</button>
                    </div>
                </form>
            </section>
        </div>
        </section>
        </div>
        <div class="container_site">
            <div class="exterier" id="exterier"></div>
            <div class="line_exter">
                <h2 class="slider_title_one">Экстерьер</h2>
            </div>
                <div class="slider-container_one">
                    <div class="swiper-container_one">
                        <div class="swiper-wrapper_one">
                            <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/exterier.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                            <p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                                современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                                
                                стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                                
                                фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                                 фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                                хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
        и, даже спортивный вид.</p>
                            </div>
                            <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/exterier.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                                современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                                
                                стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                                
                                фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                                 фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                                хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
        и, даже спортивный вид.</p>
        </div>
                            <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/exterier.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                                современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                                
                                стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                                
                                фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                                 фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                                хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
        и, даже спортивный вид.</p>
        </div>
                            <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/exterier.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                                современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                                стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                                фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                                 фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                                хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
        и, даже спортивный вид.</p>
                        </div>
                        </div>
                        <div class="swiper-pagination_one swiper-pagination-custom"></div>
                    </div>
                </div>
        </div>
        <div class="container_site">
            <div class="interier" id="interier"></div>
            <div class="line__inter">
                <h2 class="slider_title_two">Интерьер</h2>
            </div>
            <div class="slider-container_one">
                <div class="swiper-container_one">
                    <div class="swiper-wrapper_one">
                        <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/interier.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                            современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                            стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                            фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                             фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                            хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
    и, даже спортивный вид.</p>
                            </div>
                        <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/interier.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                            современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                            стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                            фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                             фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                            хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
    и, даже спортивный вид.</p>
                            </div>
                        <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/interier.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                            современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                            
                            стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                            
                            фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                             фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                            хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
    и, даже спортивный вид.</p>
    </div>
                        <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/interier.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                            современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                            
                            стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                            
                            фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                             фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                            хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
    и, даже спортивный вид.</p>
    </div>
                    </div>
                    <div class="swiper-pagination_one"></div>
                </div>
            </div>                
        </div>

        <div class="container_site">
            <div class="line__complect">
                <h2 class="slider_title_three">комфорт и опции</h2>
            </div>
            <div class="slider-container_one">
                        <div class="swiper-container_one">
                            <div class="swiper-wrapper_one">
                                <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/interier_one.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                                    современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                                    
                                    стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                                    
                                    фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                                    фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                                    хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
            и, даже спортивный вид.</p></div>
                                <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/interier_one.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                                    современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                                    
                                    стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                                    
                                    фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                                    фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                                    хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
            и, даже спортивный вид.</p></div>
                                <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/interier_one.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                                    современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                                    
                                    стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                                    
                                    фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                                    фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                                    хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
            и, даже спортивный вид.</p></div>
                                <div class="swiper-slide_one card_one"><img data-src="<?= SITE_TEMPLATE_PATH ?>/static/images/interier_one.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div><p class="text_slide">Chery Tiggo 4 сочетает в себе классические формы кроссовера и 
                                    современные дизайнерские решения. Правильные пропорции кузова позволяют получить подтянутый и 
                                    
                                    стремительный силуэт автомобиля сбоку, массивные фары с небольшим прищуром в совокупности с крупной решеткой радиатора, обилием хрома и 
                                    
                                    фальш-воздухозаборниками в нижней части бампера завершают основательный и солидный образ автомобиля. Задняя часть Tiggo 4 может похвастать крупными светодиодными
                                    фонарями сложной ступенчатой формы, вместе с массивным бампером с раздвоенными решетками фальш-выхлопа, 
                                    хромированными декоративными элементами и спойлером пятой двери задняя часть кроссовера имеет подтянутый,
            и, даже спортивный вид.</p></div>
                            </div>
                            <div class="swiper-pagination_one"></div>
                        </div>
        </div>
        </div>
        <div class="container_site">
            <div id="complictation"></div>
            <div class="equip">
                <div class="equipment_wrapper">
                    <ul class="equipment_to_title">
                        <li class="equipment_item_comp">Комплектации</li>
                        <li class="equipment_item_price">Цена</li>
                        <li class="equipment_item_final">Финальная цена</li>
                    </ul>
                </div>
                <div class="ex ex-3">
                    <ul class="accordion__list">
                        <li class="accordion">
                            <button class="accordion__control" aria-expanded="false"></button>
                                <span class="accordion__title">
                                    <ul class="equipment_title_two">
                                        <li class="equipment_item accordion__icon"><svg max-width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5951 0L9.71873 6.79892L2.84234 0L0.72998 2.09312L9.71873 11L18.7075 2.09312L16.5951 0Z" fill="black"/>
                                            </svg></li>
                                        <div class="compl">
                                            <li class="equipment_item_adapt">Комплектация</li>
                                            <li class="equipment_item_model">1,5 МТ Base</li>
                                        </div>
                                        <div class="compl">
                                            <li class="equipment_item_price_adapt">Цена</li>
                                            <li class="equipment_item_old_price">1 129 900 руб.</li>
                                        </div>
                                        <div class="compl">
                                            <li class="equipment_item_new_adapt">Финальная цена</li>
                                            <li class="equipment_item_new_price">1 124 900 руб</li>
                                        </div>
                                        <li class="equipment_item_credit_price">в кредит за 11 990 руб/мес или меньше!</li>
                                        <li class="credit__item"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></li>
                                    </ul>
                                </span>
                            <div class="accordion__content" aria-hidden="true">
                                <h3 class="save_title">Безопасность</h3>
                                <ul class="save">
                                    <li class="save_item">Сталь BENTELER</li>
                                    <li class="save_item">Оцинкованный кузов</li>
                                    <li class="save_item">Гарантия 5 лет</li>
                                    <li class="save_item">Эра Глонасс</li>
                                    <li class="save_item">Иммобилайзер - электронное противоугонное устройство</li>
                                    <li class="save_item">Задние датчики парковки</li>
                                    <li class="save_item">Система мониторинга давления и температуры в шинах (TMPS)</li>
                                </ul>
                                <h3 class="design_title">Дизайн</h3>
                                <ul class="design">
                                    <li class="design_item">16-дюймовые алюминиевые литые диски</li>
                                    <li class="design_item">Рейлинги на крыше</li>
                                    <li class="design_item">Окраска металлик (на выбор)</li>
                                    <li class="design_item">Окраска зеркал и ручек в цвет кузова</li>
                                    <li class="design_item">Расширители колесных арок</li>
                                    <li class="design_item">Скрытая выхлопная труба</li>
                                </ul>
                                <h3 class="comfort_title">Комфорт</h3>
                                <ul class="comfort">
                                    <li class="comfort_item">Обогрев передних сидений</li>
                                    <li class="comfort_item">Тканевая отделка сидений</li>
                                    <li class="comfort_item">Водительское сиденье с мех. регулировкой в 6 напр. (продольная, по высоте, наклону спинки)</li>
                                    <li class="comfort_item">Пассажирское сиденье с механической регулировкой в 4-х направлениях</li>
                                    <li class="comfort_item">Складная спинка сидения второго ряда в соотношении 1/3-2/3</li>
                                    <li class="comfort_item">3 задних подголовника, регулируемые по высоте</li>
                                    <li class="comfort_item">Электрический кондиционер</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion">
                            <button class="accordion__control" aria-expanded="false"></button>
                                <span class="accordion__title">
                                    <ul class="equipment_title_two">
                                        <li class="equipment_item accordion__icon"><svg max-width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5951 0L9.71873 6.79892L2.84234 0L0.72998 2.09312L9.71873 11L18.7075 2.09312L16.5951 0Z" fill="black"/>
                                            </svg></li>
                                            <div class="compl">
                                                <li class="equipment_item_adapt">Комплектация</li>
                                                <li class="equipment_item_model">1,5 МТ Base</li>
                                            </div>
                                            <div class="compl">
                                                <li class="equipment_item_price_adapt">Цена</li>
                                                <li class="equipment_item_old_price">1 129 900 руб.</li>
                                            </div>
                                            <div class="compl">
                                                <li class="equipment_item_new_adapt">Финальная цена</li>
                                                <li class="equipment_item_new_price">1 124 900 руб</li>
                                            </div>
                                            <li class="equipment_item_credit_price">в кредит за 11 990 руб/мес или меньше!</li>
                                            <li class="credit__item"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></li>
                                    </ul>
                                </span>
                            <div class="accordion__content" aria-hidden="true">
                                <p class="save_title_additionally">В дополнение к комплектации 1,5 MT Base:</p>
                                <h3 class="save_title">Безопасность</h3>
                                <ul class="save">
                                    <li class="save_item">Сталь BENTELER</li>
                                    <li class="save_item">Оцинкованный кузов</li>
                                    <li class="save_item">Гарантия 5 лет</li>
                                    <li class="save_item">Эра Глонасс</li>
                                    <li class="save_item">Иммобилайзер - электронное противоугонное устройство</li>
                                    <li class="save_item">Задние датчики парковки</li>
                                    <li class="save_item">Система мониторинга давления и температуры в шинах (TMPS)</li>
                                </ul>
                                <h3 class="design_title">Дизайн</h3>
                                <ul class="design">
                                    <li class="design_item">16-дюймовые алюминиевые литые диски</li>
                                    <li class="design_item">Рейлинги на крыше</li>
                                    <li class="design_item">Окраска металлик (на выбор)</li>
                                    <li class="design_item">Окраска зеркал и ручек в цвет кузова</li>
                                    <li class="design_item">Расширители колесных арок</li>
                                    <li class="design_item">Скрытая выхлопная труба</li>
                                </ul>
                                <h3 class="comfort_title">Комфорт</h3>
                                <ul class="comfort">
                                    <li class="comfort_item">Обогрев передних сидений</li>
                                    <li class="comfort_item">Тканевая отделка сидений</li>
                                    <li class="comfort_item">Водительское сиденье с мех. регулировкой в 6 напр. (продольная, по высоте, наклону спинки)</li>
                                    <li class="comfort_item">Пассажирское сиденье с механической регулировкой в 4-х направлениях</li>
                                    <li class="comfort_item">Складная спинка сидения второго ряда в соотношении 1/3-2/3</li>
                                    <li class="comfort_item">3 задних подголовника, регулируемые по высоте</li>
                                    <li class="comfort_item">Электрический кондиционер</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion">
                            <button class="accordion__control" aria-expanded="false"></button>
                           <span class="accordion__title">
                                    <ul class="equipment_title_two">
                                        <li class="equipment_item accordion__icon"><svg max-width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5951 0L9.71873 6.79892L2.84234 0L0.72998 2.09312L9.71873 11L18.7075 2.09312L16.5951 0Z" fill="black"/>
                                            </svg></li>
                                            <div class="compl">
                                                <li class="equipment_item_adapt">Комплектация</li>
                                                <li class="equipment_item_model">1,5 МТ Base</li>
                                            </div>
                                            <div class="compl">
                                                <li class="equipment_item_price_adapt">Цена</li>
                                                <li class="equipment_item_old_price">1 129 900 руб.</li>
                                            </div>
                                            <div class="compl">
                                                <li class="equipment_item_new_adapt">Финальная цена</li>
                                                <li class="equipment_item_new_price">1 124 900 руб</li>
                                            </div>
                                            <li class="equipment_item_credit_price">в кредит за 11 990 руб/мес или меньше!</li>
                                            <li class="credit__item"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></li>
                                    </ul>
                                </span>
                            <div class="accordion__content" aria-hidden="true">
                                <p class="save_title_additionally">В дополнение к комплектации 1,5 MT Comfort:</p>
                                <h3 class="save_title">Безопасность</h3>
                                <ul class="save">
                                    <li class="save_item">Сталь BENTELER</li>
                                    <li class="save_item">Оцинкованный кузов</li>
                                    <li class="save_item">Гарантия 5 лет</li>
                                    <li class="save_item">Эра Глонасс</li>
                                    <li class="save_item">Иммобилайзер - электронное противоугонное устройство</li>
                                    <li class="save_item">Задние датчики парковки</li>
                                    <li class="save_item">Система мониторинга давления и температуры в шинах (TMPS)</li>
                                </ul>
                                <h3 class="design_title">Дизайн</h3>
                                <ul class="design">
                                    <li class="design_item">16-дюймовые алюминиевые литые диски</li>
                                    <li class="design_item">Рейлинги на крыше</li>
                                    <li class="design_item">Окраска металлик (на выбор)</li>
                                    <li class="design_item">Окраска зеркал и ручек в цвет кузова</li>
                                    <li class="design_item">Расширители колесных арок</li>
                                    <li class="design_item">Скрытая выхлопная труба</li>
                                </ul>
                                <h3 class="comfort_title">Комфорт</h3>
                                <ul class="comfort">
                                    <li class="comfort_item">Обогрев передних сидений</li>
                                    <li class="comfort_item">Тканевая отделка сидений</li>
                                    <li class="comfort_item">Водительское сиденье с мех. регулировкой в 6 напр. (продольная, по высоте, наклону спинки)</li>
                                    <li class="comfort_item">Пассажирское сиденье с механической регулировкой в 4-х направлениях</li>
                                    <li class="comfort_item">Складная спинка сидения второго ряда в соотношении 1/3-2/3</li>
                                    <li class="comfort_item">3 задних подголовника, регулируемые по высоте</li>
                                    <li class="comfort_item">Электрический кондиционер</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion">
                            <button class="accordion__control" aria-expanded="false"></button>
                                <span class="accordion__title">
                                    <ul class="equipment_title_two">
                                        <li class="equipment_item accordion__icon"><svg max-width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5951 0L9.71873 6.79892L2.84234 0L0.72998 2.09312L9.71873 11L18.7075 2.09312L16.5951 0Z" fill="black"/>
                                            </svg></li>
                                            <div class="compl">
                                                <li class="equipment_item_adapt">Комплектация</li>
                                                <li class="equipment_item_model">1,5 МТ Base</li>
                                            </div>
                                            <div class="compl">
                                                <li class="equipment_item_price_adapt">Цена</li>
                                                <li class="equipment_item_old_price">1 129 900 руб.</li>
                                            </div>
                                            <div class="compl">
                                                <li class="equipment_item_new_adapt">Финальная цена</li>
                                                <li class="equipment_item_new_price">1 124 900 руб</li>
                                            </div>
                                            <li class="equipment_item_credit_price">в кредит за 11 990 руб/мес или меньше!</li>
                                            <li class="credit__item"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></li>
                                    </ul>
                                </span>
                            <div class="accordion__content" aria-hidden="true">
                                <p class="save_title_additionally">В дополнение к комплектации 1,5 MT Comfort:</p>
                                <h3 class="save_title">Безопасность</h3>
                                <ul class="save">
                                    <li class="save_item">Сталь BENTELER</li>
                                    <li class="save_item">Оцинкованный кузов</li>
                                    <li class="save_item">Гарантия 5 лет</li>
                                    <li class="save_item">Эра Глонасс</li>
                                    <li class="save_item">Иммобилайзер - электронное противоугонное устройство</li>
                                    <li class="save_item">Задние датчики парковки</li>
                                    <li class="save_item">Система мониторинга давления и температуры в шинах (TMPS)</li>
                                </ul>
                                <h3 class="design_title">Дизайн</h3>
                                <ul class="design">
                                    <li class="design_item">16-дюймовые алюминиевые литые диски</li>
                                    <li class="design_item">Рейлинги на крыше</li>
                                    <li class="design_item">Окраска металлик (на выбор)</li>
                                    <li class="design_item">Окраска зеркал и ручек в цвет кузова</li>
                                    <li class="design_item">Расширители колесных арок</li>
                                    <li class="design_item">Скрытая выхлопная труба</li>
                                </ul>
                                <h3 class="comfort_title">Комфорт</h3>
                                <ul class="comfort">
                                    <li class="comfort_item">Обогрев передних сидений</li>
                                    <li class="comfort_item">Тканевая отделка сидений</li>
                                    <li class="comfort_item">Водительское сиденье с мех. регулировкой в 6 напр. (продольная, по высоте, наклону спинки)</li>
                                    <li class="comfort_item">Пассажирское сиденье с механической регулировкой в 4-х направлениях</li>
                                    <li class="comfort_item">Складная спинка сидения второго ряда в соотношении 1/3-2/3</li>
                                    <li class="comfort_item">3 задних подголовника, регулируемые по высоте</li>
                                    <li class="comfort_item">Электрический кондиционер</li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion">
                            <button class="accordion__control" aria-expanded="false"></button>
                                <span class="accordion__title">
                                    <ul class="equipment_title_two">
                                        <div class="accordion__icon-adapt">
                                            <li class="equipment_item accordion__icon"><svg max-width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5951 0L9.71873 6.79892L2.84234 0L0.72998 2.09312L9.71873 11L18.7075 2.09312L16.5951 0Z" fill="black"/>
                                                </svg></li>
                                        </div>
                                            <div class="compl">
                                                <li class="equipment_item_adapt">Комплектация</li>
                                                <li class="equipment_item_model">1,5 МТ Base</li>
                                            </div>
                                            <div class="compl">
                                                <li class="equipment_item_price_adapt">Цена</li>
                                                <li class="equipment_item_old_price">1 129 900 руб.</li>
                                            </div>
                                            <div class="compl">
                                                <li class="equipment_item_new_adapt">Финальная цена</li>
                                                <li class="equipment_item_new_price">1 124 900 руб</li>
                                            </div>
                                            <li class="equipment_item_credit_price">в кредит за 11 990 руб/мес или меньше!</li>
                                            <li class="credit__item"><a class="equipment_item_credit_btn btn" href="#calculator">Рассчитать кредит</a></li>
                                    </ul> 
                                </span>
                            <div class="accordion__content" aria-hidden="true">
                                <p class="save_title_additionally">В дополнение к комплектации 1,5 CVT Comfort:</p>
                                <h3 class="save_title">Безопасность</h3>
                                <ul class="save">
                                    <li class="save_item">Сталь BENTELER</li>
                                    <li class="save_item">Оцинкованный кузов</li>
                                    <li class="save_item">Гарантия 5 лет</li>
                                    <li class="save_item">Эра Глонасс</li>
                                    <li class="save_item">Иммобилайзер - электронное противоугонное устройство</li>
                                    <li class="save_item">Задние датчики парковки</li>
                                    <li class="save_item">Система мониторинга давления и температуры в шинах (TMPS)</li>
                                </ul>
                                <h3 class="design_title">Дизайн</h3>
                                <ul class="design">
                                    <li class="design_item">16-дюймовые алюминиевые литые диски</li>
                                    <li class="design_item">Рейлинги на крыше</li>
                                    <li class="design_item">Окраска металлик (на выбор)</li>
                                    <li class="design_item">Окраска зеркал и ручек в цвет кузова</li>
                                    <li class="design_item">Расширители колесных арок</li>
                                    <li class="design_item">Скрытая выхлопная труба</li>
                                </ul>
                                <h3 class="comfort_title">Комфорт</h3>
                                <ul class="comfort">
                                    <li class="comfort_item">Обогрев передних сидений</li>
                                    <li class="comfort_item">Тканевая отделка сидений</li>
                                    <li class="comfort_item">Водительское сиденье с мех. регулировкой в 6 напр. (продольная, по высоте, наклону спинки)</li>
                                    <li class="comfort_item">Пассажирское сиденье с механической регулировкой в 4-х направлениях</li>
                                    <li class="comfort_item">Складная спинка сидения второго ряда в соотношении 1/3-2/3</li>
                                    <li class="comfort_item">3 задних подголовника, регулируемые по высоте</li>
                                    <li class="comfort_item">Электрический кондиционер</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="wrapper__est">
            <button class="btn estimate_btn__js">
                Оставить заявку
            </button>
        </div>
        </section> 
        </div>
        <div class="container_site">
            <div class="line__sale">
                <h2 class="slider_title_sale">акции</h2>
            </div>
            <div class="slider-container_one">
                    <div class="swiper-container_one">
                        <div class="swiper-wrapper_one">
                            <div class="swiper-slide_one card_one"><img data-src="../static/images/trade-in.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></div>
                            <div class="swiper-slide_one card_one"><img data-src="../static/images/trade-in.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></div>
                            <div class="swiper-slide_one card_one"><img data-src="../static/images/trade-in.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></div>
                            <div class="swiper-slide_one card_one"><img data-src="../static/images/trade-in.png" src="#" alt="" class="img_slider_one swiper-lazy"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></div>
                        </div>
                        <div class="swiper-pagination_one"></div>
                    </div> 
            </div>
        </div>
        <div class="container_site">
            <section class="news">
                <div class="line"> 
                    <h2 class="slider_title_news">Новости</h2>
                </div>
                <div class="slider-container_news">
                    <div class="swiper-container_news">
                        <div class="swiper-wrapper_news">
                            <div class="swiper-slide_news">
                                <a href="../pages/news__card.html" class="category__image"><img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt=""> <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></a>
                                <div class="news_content">
                                    <a href="../pages/news__card.html"><div class="news__sub__title">Chery и iFlytek углубили всестороннее
                                        стратегическое сотрудничество</div></a>
                                        <p class="news__cont">24 мая 2021 года компании Chery Automobile Co., Ltd. 
                                            и iFlytek CO., LTD. подписали рамочное соглашение об углублении 
                                            стратегического взаимодействия в области разработки решений систем 
                                            искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе 
                                            над беспилотными автомобилями и доведением их автономности до четвертого 
                                            уровня.</p>
                                    <a href="../pages/news__card.html" class="category__info">Читать больше</a>
                                </div>
                            </div>
                          <div class="swiper-slide_news">      
                            <a href="../pages/news__card.html" class="category__image"><img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt=""> <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></a>
                              <div class="news_content">
                                <a href="./pages/news__card.html" class="category__info"><div class="news__sub__title">Chery и iFlytek углубили всестороннее
                                        стратегическое сотрудничество</div></a>
                                        <p class="news__cont">24 мая 2021 года компании Chery Automobile Co., Ltd. 
                                            и iFlytek CO., LTD. подписали рамочное соглашение об углублении 
                                            стратегического взаимодействия в области разработки решений систем 
                                            искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе 
                                            над беспилотными автомобилями и доведением их автономности до четвертого 
                                            уровня.</p>
                                    <a href="./pages/news__card.html" class="category__info">Читать больше</a>
                                </div>
                            </div>
                          <div class="swiper-slide_news">       
                            <a href="./pages/news__card.html" class="category__image"><img data-src="../static/images/big.jpg" src="#" class="swiper-lazy" alt=""> <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></a>
                              <div class="news_content">
                                <a href="./pages/news__card.html"><div class="news__sub__title">Chery и iFlytek углубили всестороннее
                                    стратегическое сотрудничество</div></a>
                                        <p class="news__cont">24 мая 2021 года компании Chery Automobile Co., Ltd. 
                                            и iFlytek CO., LTD. подписали рамочное соглашение об углублении 
                                            стратегического взаимодействия в области разработки решений систем 
                                            искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе 
                                            над беспилотными автомобилями и доведением их автономности до четвертого 
                                            уровня.</p>
                                    <a href="./pages/news__card.html" class="category__info">Читать больше</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
        <div class="container_site">
            <section class="feedback">
                <div class="line__feedback">
                    <h2 class="slider_title_feedback">Отзывы</h2> 
                </div>
                    <div class="slider-container_feedback">
                        <div class="swiper-container_feedback">
                            <div class="swiper-wrapper_feedback">
                                <div class="swiper-slide_feedback">
                                    <img data-src="../static/images/big.jpg" src="#" class="swiper-lazy"  alt=""> <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                                    <div class="feedback_head">
                                    <div class="feedback_sub-title">
                                        Роман Лесной
                                    </div>
                                    </div>
                                        <p class="feedback_text">
                                            24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное соглашение 
                                            об углублении стратегического взаимодействия в области разработки решений систем искусственного интеллекта 
                                            (ИИ) для серийных автомобилей, 
                                            совместной работе над беспилотными автомобилями и доведением их автономности до четвертого уровня.
                                        </p>
                                </div>
                              <div class="swiper-slide_feedback">
                                <img data-src="../static/images/big.jpg" src="#" class="swiper-lazy"  alt=""> <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                                <div class="feedback_head">
                                    <div class="feedback_sub-title">
                                        Роман Лесной
                                    </div>
                                </div>
                                    <p class="feedback_text">
                                        24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное соглашение 
                                        об углублении стратегического взаимодействия в области разработки решений систем искусственного интеллекта 
                                        (ИИ) для серийных автомобилей, 
                                        совместной работе над беспилотными автомобилями и доведением их автономности до четвертого уровня.
                                    </p>
                                </div>
                              <div class="swiper-slide_feedback">              
                                <img data-src="../static/images/big.jpg" src="#" class="swiper-lazy"  alt=""> <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                                <div class="feedback_head">
                                    <div class="feedback_sub-title">
                                        Роман Лесной
                                    </div>
                                </div>
                                    <p class="feedback_text">
                                        24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное соглашение 
                                        об углублении стратегического взаимодействия в области разработки решений систем искусственного интеллекта 
                                        (ИИ) для серийных автомобилей, 
                                        совместной работе над беспилотными автомобилями и доведением их автономности до четвертого уровня.
                                    </p></div>
                            </div>
                          </div>
                        </div>
            </section>
        </div>
        <div class="popup_overlay"></div>
        <div class="popup__container">
            <form action="" id="popup__form" class="popup  form__js" name="popupIn" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                <button class="popup_drive__btn" type="button" aria-label="Close button"></button>
                <h2 class="popup_drive">Тест драйв</h2>
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
        <div class="popup__container">
            <form action="" id="popup__form" class="title__popup__js  title__popup" name="popupIn" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                <button class="popup_drive__btn popup_drive__btn__js" type="button" aria-label="Close button"></button>
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
        
        <!-- заявка -->
        <div class="estimate__container">
                <form action=""  class="estimate  form__js" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                    <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                    <button class="popup_request__btn" type="button" aria-label="Close button"></button>
                    <h2 class="popup_request">Оставить заявку</h2>
                    <div class="popup_cont">
                        <div class="field_name">
                            <label for="estimate__name" class="label__popup">Имя*</label>
                            <input type="text" id="estimate__name" name="name" class="input__popup" data-validate-field="name__est" placeholder="Ваше имя">
                        </div>
                        <div class="field__wrapper">
                            <div class="field_phone">
                                <label for="estimate__phone" class="label__popup">Телефон*</label>
                                <input type="tel" id="estimate__phone" name="tel" class="input__popup" data-validate-field="telephone" placeholder="Ваш телефон">
                            </div>
                        </div>
                        <div class="field_est">
                            <label for="input__text" class="label__popup">Ваш вопрос</label>
                            <textarea class="input__est" id="input__text" cols="5" rows="5" placeholder="Опишите Ваш вопрос"></textarea>
                        </div>
                    </div>
                    <div class="checkbox_popup">
                        <input id="check-drive" type="checkbox" class="checkbox__input " checked value="drive" data-validate-field="estimate__personal">
                        <label for="check-drive" class="checkbox__drive">Согласие на обработку ПД</label>
                    </div>
                    <div class="wrapper__submit-est">
                        <button class="btn popup_req__js open_thanks_js" type="submit">Отправить</button>
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