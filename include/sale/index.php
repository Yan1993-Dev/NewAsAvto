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

    .phone__icon {
        max-width: 18px;
        height: 18px;
        margin-right: 15px;
        margin-bottom: -3px;
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
        margin-right: 30px;
        align-items: center;
        color: #fff;
        font-size: 18px;
        line-height: calc(33/18);
    }

    .checked__link {
        background-color: #2D7CC0;
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

    nav ul li:hover>ul {
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


    .background {
        background-image: url(../local/templates/NewAsAvto/static/images/stock__top.jpg);
        padding: 40px 40px 100px 40px;
        margin-top: -2px;
        background-size: cover;
        background-position: 50% 60%;
    }

    .poster__container {
        display: flex;
        margin-top: 30px;
        justify-content: space-around;
    }

    .colors__poster {
        background-color: rgba(151, 178, 250, 0.8);
        padding: 20px;
        border-radius: 10px;
    }

    .title__poster__text {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 29px;
        margin-bottom: 20px;
    }

    .title__desc__poster {
        font-size: 18px;
    }

    .offer {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-left: 10%;
    }

    .offer__item {
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 10px;
        background-color: rgba(255, 255, 255);
        width: 390px;
        font-size: 18px;
        text-align: center;
    }

    .text__title {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        font-size: 24px;
        padding: 10px;
        border-radius: 10px;
        margin-top: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: 29px;
        text-align: center;
        background-color: #DDDDDD;
    }

    .offer__rev {
        text-align: center;
        padding: 22px;
        border-radius: 10px;
        display: inline-block;
        color: #fff;
        font-size: 18px;
        line-height: 17px;
        background: #009bd8;
        width: 300px;
        height: 60px;
    }

    .title {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        margin-top: 50px;
        margin-bottom: 50px;
        text-align: center;
        font-size: 24px;
        line-height: calc(28/24);
    }

    .flex {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .content {
        height: 100%;
        width: 45%;
        text-align: center;
        margin: 5px;
        display: none;
    }

    .content__btn {
        display: flex;
        justify-content: flex-end;
    }

    .btn__info {
        color: #000;

        padding: 0px 2px 2px 2px;
        font-weight: 300;
    }

    .btn__info {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        position: relative;
        -webkit-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
    }

    .btn__info:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #2098D1;
        -webkit-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .btn__info:hover,
    .btn__info:focus,
    .btn__info:active {
        color: white;
    }

    .btn__info:hover:before,
    .btn__info:focus:before,
    .btn__info:active:before {
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
    }

    #loadMore {
        width: 200px;
        color: #fff;
        display: block;
        text-align: center;
        margin: 20px auto;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid transparent;
        background-color: #009bd8;
        transition: .3s;
    }

    #loadMore:hover {
        color: blue;
        background-color: #fff;
        border: 1px solid blue;
        text-decoration: none;
    }

    .noContent {
        color: #000 !important;
        background-color: transparent !important;
        pointer-events: none;
    }

    .content__title {
        display: inline-block;
        vertical-align: middle;
        color: #000;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        position: relative;
        overflow: hidden;
    }

    .content__img {
        margin-top: 20px;
        opacity: 1;
        transition: all 500ms ease-in-out;
    }

    .content__img:hover {
        opacity: 0.5;
    }

    .content__title:before {
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

    .content__title:hover:before,
    .content__title:focus:before,
    .content__title:active:before {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }


    .wrap__form {
        display: flex;
        justify-content: flex-end;
    }

    .news__style {
        height: 350px;
        max-width: 453px;
        background-color: #F8FAFD;
        border: 1px solid rgba(52, 130, 198, 0.1);
        box-sizing: border-box;
        border-radius: 10px;
        z-index: 10;
    }

    .news__title {
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }


    .wrap__form {
        display: flex;
        justify-content: flex-end;
    }

    .auto {
        height: 350px;
        max-width: 453px;
        background-color: #F8FAFD;
        border: 1px solid rgba(52, 130, 198, 0.1);
        box-sizing: border-box;
        border-radius: 10px;
        z-index: 10;
    }

    .auto__title {
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .background__fos {
        padding: 40px 0;
        background-image: linear-gradient(black,
                transparent 80%,
                transparent 20%,
                black), url(../local/templates/NewAsAvto/static/images/3_stocks__fos.jpg);
        background-size: cover;
        background-position: center;
    }

    .title__content__item {
        font-weight: 600;
        margin-bottom: 15px;
        color: #fff;
    }

    .content_li {
        max-width: 450px;
        padding: 50px;
        background-color: rgba(0, 0, 0, 0.8);
        -webkit-box-shadow: 0px 0px 100px 20px rgba(166, 166, 166, 0.36);
        -moz-box-shadow: 0px 0px 100px 20px rgba(166, 166, 166, 0.36);
        box-shadow: 0px 0px 100px 20px rgba(166, 166, 166, 0.36);
        border-radius: 10px;
    }

    .content__item {
        margin-bottom: 15px;
        color: #fff;
    }

    .content__item::before {
        content: url(../local/templates/NewAsAvto/static/icons/blue__arr.svg);
        margin-right: 5px;
    }

    .flex__cont {
        display: flex;
        justify-content: space-between;
    }

    .form_traid-in {
        width: 470px;
        height: 450px;
        background-color: #F8FAFD;
        border: 1px solid rgba(52, 130, 198, 0.1);
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 10px;
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
        padding-top: 20px;
    }

    .field {
        padding-left: 30px;
        padding-top: 15px;
        display: inline-block;
    }

    .input__traid-in {
        width: 410px;
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

    .field__credit {
        padding-left: 30px;
        padding-top: 15px;
        display: inline-block;
    }

    .input__credit {
        width: 335px;
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

    .checkbox__credit {
        padding-top: 20px;
        padding-left: 138px;
    }

    .checkbox__personal {
        padding-top: 20px;
        padding-left: 212px;
    }

    .traid__btn {
        width: 312px;
        height: 57px;
        margin-top: 20px;
    }

    .popup__btn__flex {
        display: flex;
        justify-content: center;
    }

    .credit__btn {
        width: 312px;
        height: 57px;
        margin-top: 20px;
    }

    .line_exter {
        max-width: 1200px;
        position: relative;
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slider-container {
        overflow: hidden;
    }


    .slider_title_one {
        margin-top: 100px;
        margin-bottom: 100px;
        text-align: center;
    }

    .slider_title_one::after {
        content: '';
        display: block;
        position: absolute;
        z-index: 5;
        top: calc(51% - 1.5px);
        width: 35%;
        left: 0;
        height: 3px;
        background-color: #009bd8;
    }

    .news__card {
        margin-bottom: 15px;
    }

    .date__info {
        display: flex;
        color: #FFFFFF;
        margin-bottom: 25px;
    }

    .date__info-item {
        background: #3482C6;
        padding: 2px;
    }

    .category__image {
        min-width: 150px;
        max-height: 250px;
        margin-bottom: 30px;
        opacity: 1;
        transition: all 500ms ease-in-out;
    }

    .category__image:hover {
        opacity: 0.5;
    }

    .category__title__wrap {
        margin-bottom: 15px;
    }

    .category__title {
        color: #000;
        font-weight: 600;
        opacity: 1;
        transition: all 500ms ease;
    }

    .category__title:hover {
        opacity: 0.5;
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

    .info__item:hover:before,
    .info__item:focus:before,
    .info__item:active:before {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }


    .info__item {
        color: #000;
        cursor: pointer;
    }


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

    .field_name {
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


    .thanks {
        display: none;
        Width: 400px;
        Height: 300px;
        top: 250px;
        position: fixed;
        border-radius: 10px;
        background-color: #3482C6;
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


    @media (min-width: 1366px) and (max-width: 1510px) {
        .container_site {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 50px;
        }
    }


    @media (min-width: 1261px) and (max-width: 1366px) {
        .container_site {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav__item__link {
            font-size: 14px;
        }
    }

    @media (min-width: 1020px) and (max-width: 1261px) {
        .container_site {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .wrapper__menu {
            margin-right: 768px;
        }

        .title__image {
            display: flex;
            justify-content: center;
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
    }

    @media (min-width: 920px) and (max-width: 1020px) {
        .container_site {
            max-width: 940px;
            padding: 0 20px;
        }

        .wrapper__menu {
            margin-right: 548px;
        }

        .adress {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            font-size: 12px;
            line-height: calc(18/12);
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
            margin-right: 5px;
            padding-right: 18px;
            padding-left: 18px;
        }

        .model_catalog__title {
            font-size: 16px;
            padding-bottom: 12px;
        }

        .model_catalog__price {
            font-size: 14px;
        }

        .mobile__header {
            display: none;
        }

        .tabs__link__fl {
            margin-right: 40px;
        }

        .flex__cont {
            justify-content: space-around;
        }

        .form_traid-in {
            width: 370px;
        }

        .title {
            font-size: 22px;
            line-height: 26px;
            margin-top: 20px;
            padding-bottom: 20px;
        }

        .auto {
            height: 290px;
            max-width: 400px;
        }

        .auto__title {
            font-size: 14px;
            margin-bottom: -5px;
        }

        .label__popup {
            font-size: 12px;
        }

        .field_name {
            margin-bottom: 5px;
        }

        .input__popup {
            font-size: 12px;
        }

        .field_phone {
            margin-bottom: 5px;
        }

        .field_calendar {
            margin-bottom: 5px;
        }

        .input__traid-in {
            width: 305px;
        }

        .checkbox__personal {
            padding-left: 105px;
        }

        .popup__btn {
            font-size: 12px;
        }

        .slider_title_one {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .slider_title_one::after {
            width: 27%;
        }

        .date__info {
            margin-bottom: 10px;
        }

        .date__info-item {
            font-size: 10px;
        }

        .category__title {
            color: #000;
            font-size: 14px;
        }

        .category__desc {
            font-size: 12px;
        }

        .wrapper__footer {
            font-size: 12px;
            flex-direction: column;
            align-items: center;
            margin-top: 480px;
        }

        .footer__logo {
            margin-right: 0px;
            margin-bottom: 10px;
        }

        .wrapper__phone__footer {
            padding-left: 0px;
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

    @media (min-width: 414px) and (max-width: 920px) {
        .container_site {
            padding: 0 20px;
        }

        .wrapper__menu {
            margin-right: 100px;
        }

        .adress {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            font-size: 12px;
            line-height: calc(18/12);
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

        .info__item__title {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .footer__logo {
            margin-right: 0;
        }

        .input__traid-in {
            width: 280px;
            font-size: 12px;
            height: 40px;
        }

        .credit__btn {
            width: 230px;
            height: 40px;
        }

        .checkbox__personal {
            padding-left: 90px;
        }

        .hidden__adapt {
            display: none;
        }

        .addr__list {
            text-align: center;
            margin-top: 10px;
        }

        .wrapper__phone__footer {
            padding-left: 0px;
        }

        .header {
            margin-bottom: 10px;
            justify-content: center;
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
            margin-right: 35px;
            width: 50px;
            height: 50px;
        }

        .company__logo {
            max-width: 185px;
            height: 75px;
            margin-right: 20px;
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

        .mobile__desc {
            display: flex;
            flex-direction: column;
        }

        .model_catalog__title {
            font-size: 16px;
            padding-bottom: 5px;
        }

        .model_catalog__price {
            font-size: 14px;
        }


        .offer__item {
            padding: 10px;
            font-size: 12px;
        }

        .offer__rev {
            font-size: 12px;
            max-width: 200px;
            padding: 16px;
            height: 50px;
        }

        .poster__container {
            flex-direction: column;
        }

        .colors__poster {
            margin-bottom: 10px;
        }

        .title__poster__text {
            font-size: 14px;
            line-height: calc(22/14);
        }

        .title__desc__poster {
            font-size: 12px;
            line-height: calc(18/12);
        }

        .offer {
            margin-left: 0%;
        }

        .text__title {
            font-size: 16px;
        }

        .tabs__nav {
            flex-wrap: wrap;
        }

        .flex__cont {
            align-items: center;
            flex-direction: column;
        }

        .form_traid-in {
            margin-top: 20px;
            width: 360px;
            height: 490px;
        }

        .content_li {
            margin-bottom: 50px;
        }

        .info__item__title {
            margin-top: 10px;
            text-align: center;
        }

        .info__item {
            text-align: center;
        }

        .phone__footer {
            margin-top: 10px;
        }

        .footer__logo {
            margin-right: 0;
        }

        .title {
            font-size: 20px;
            line-height: 24px;
            margin-top: 20px;
            padding-bottom: 10px;
        }

        .news__desc-title {
            font-size: 14px;
        }

        .content {
            width: 100%;
        }

        .checkbox_popup {
            margin-bottom: 5px;
        }

        .slider_title_one {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .slider_title_one::after {
            width: 13%;
        }

        .date__info {
            margin-bottom: 10px;
        }

        .date__info-item {
            font-size: 12px;
        }

        .category__title__wrap {
            margin-bottom: 10px;
        }

        .category__title {
            font-size: 14px;
            color: #000;
        }

        .category__desc {
            font-size: 12px;
        }

        .auto__desc {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .wrap__form {
            justify-content: center;
        }

        .station__form {
            margin-top: 20px;
        }

        .auto {
            height: 290px;
            max-width: 400px;
        }

        .auto__title {
            font-size: 14px;
            margin-bottom: -5px;
        }

        .label__popup {
            font-size: 12px;
        }

        .field_name {
            margin-bottom: 5px;
        }

        .input__popup {
            font-size: 12px;
        }

        .field_phone {
            margin-bottom: 5px;
        }

        .field_calendar {
            margin-bottom: 5px;
        }

        .checkbox__drive {
            font-size: 12px;
        }

        .label__popup {
            margin-right: 230px;
        }

        .popup__btn {
            font-size: 12px;
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


    @media (min-width: 320px) and (max-width: 414px) {
        .container_site {
            padding: 0 5px;
        }

        .adress {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
            line-height: calc(18/12);
        }

        .footer__logo {
            margin-right: 0;
        }

        .hidden__adapt {
            display: none;
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

        .nav {
            display: none;
        }

        .mobile_phone_btn {
            display: block;
            margin-top: 15px;
        }

        .header {
            margin-bottom: 10px;
            margin-left: 30px;
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

        .nav {
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

        .offer__item {
            padding: 10px;
            font-size: 12px;
        }

        .offer__rev {
            font-size: 12px;
            max-width: 200px;
            padding: 16px;
            height: 50px;
        }

        .poster__container {
            flex-direction: column;
        }

        .colors__poster {
            margin-bottom: 10px;
        }

        .title__poster__text {
            font-size: 14px;
            line-height: calc(22/14);
        }

        .title__desc__poster {
            font-size: 12px;
            line-height: calc(18/12);
        }

        .offer {
            margin-left: 0%;
        }

        .text__title {
            font-size: 16px;
        }

        .tabs__nav {
            flex-wrap: wrap;
        }


        .container__model__view {
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .model__visual__container {
            align-items: center;
            margin-left: 0px;
            margin-top: 30px;
        }

        .form_traid-in {
            margin-top: 20px;
            width: 310px;
            height: 490px;
        }

        .model__img {
            width: 250px;
        }

        .container__descrip {
            align-items: center;
            flex-direction: column;
        }

        .instructor__container {
            display: flex;
            flex-direction: column;
        }

        .steps {
            padding-left: 15%;
        }

        .sub_title {
            font-size: 18px;
        }

        .label__traid-in {
            font-size: 12px;
        }

        .input__traid-in {
            width: 295px;
            font-size: 12px;
            height: 40px;
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


        .slider_title_one::after {
            width: 30%;
        }

        .title {
            font-size: 16px;
            line-height: 40px;
            margin-top: 25px;
            padding-bottom: 10px;
        }

        .content {
            width: 100%;
        }

        .title__image {
            margin-top: 5px;
        }

        .news__desc-title {
            font-size: 14px;
        }

        .auto__title {
            font-size: 14px;
        }

        .label__popup {
            margin-right: 155px;
        }

        .input__popup {
            max-width: 250px;
            width: 250px;
        }

        .slider_title_one {
            font-size: 18px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .slider_title_one::after {
            width: 12%;
        }

        .date__info-item {
            font-size: 12px;
        }

        .category__title {
            color: #000;
            font-size: 14px;
        }

        .category__desc {
            font-size: 12px;
        }

        .date__info {
            margin-bottom: 10px;
        }


        .wrap__form {
            justify-content: center;
        }

        .auto {
            max-width: 300px;
        }

        .auto__title {
            font-size: 14px;
        }

        .popup_cont {
            margin-left: 20px;
        }

        .label__popup {
            font-size: 12px;
        }

        .input__popup {
            font-size: 12px;
        }

        .label__popup {
            margin-right: 160px;
        }

        .input__popup {
            width: 250px;
        }

        .checkbox__drive {
            font-size: 12px;
        }

        .btn {
            font-size: 12px;
        }

        .flex__cont {
            align-items: center;
            flex-direction: column;
        }

        .content_li {
            margin-bottom: 20px;
        }

        .content__item {
            font-size: 14px;
        }

        .input__traid-in {
            max-width: 250px;
            font-size: 12px;
            height: 40px;
        }

        .checkbox__personal {
            font-size: 14px;
            padding-left: 85px;
        }

        .credit__btn {
            width: 245px;
            height: 40px;
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

<main class="main">
    <div class="background">
        <div class="poster__container">
            <div class="title__poster">
                <div class="colors__poster">
                    <div class="color__poster">
                        <p class="title__poster__text">Акции и Специальные предложения</p>
                        <p class="title__desc__poster">Сделайте покупку нового авто еще приятнее, используя акционные условия в автосалонах «АсАвто»</p>
                    </div>
                </div>
            </div>
            <ul class="offer">
                <li class="offer__item">Актуальные предложения</li>
                <li class="offer__item">Скидки по программе Trade-in</li>
                <li class="offer__item">Выгодные кредитные программы</li>
                <li class="offer__item">Подарки и преимущества</li>
            </ul>
        </div>
    </div>
    <div class="container_site">
        <div class="title">
            <h1 class="text__title" id="calculator">Акции и предложения</h1>
        </div>
        <ul class="flex">
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="#" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
            <li class="content">
                <a href="./stock__page.html">
                    <p class="content__title">Скидка по Traid-in</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="stock" class="content__img">
                    <div class="content__btn">
                        <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                    </div>
                </a>
            </li>
        </ul>
        <a href="#" id="loadMore">Посмотреть ещё</a>
    </div>
    </div>

    <div class="background__fos">
        <div class="container_site">
            <div class="flex__cont">
                <div class="middle">
                    <ul class="content_li">
                        <li class="title__content__item">На выбор доступно множество акций и специальных предложений. Вас что-то заинтересовало или есть вопрос? </li>
                        <li class="title__content__item">Оставьте заявку на обратный звонок! Специалист отдела продаж свяжется с Вами и ответит на все вопросы. </li>
                    </ul>
                </div>
                <section class="form_traid-in">
                    <h2 class="sub_title" id="calculator">
                        Заявка на обратный звонок
                    </h2>
                    <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
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
                                <label for="drive__calendar" class="label__traid">Выберите день*</label>
                                <input type="date" id="drive__datapicker" class="input__traid-in _req" placeholder="Нажмите">
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
    <div class="container_site">
        <div class="line_exter">
            <h2 class="slider_title_one" id="exterier">Новости</h2>
        </div>
    </div>
    <div class="container_site">
        <div class="slider_wrapper">
            <div class="slider-container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card">
                            <a href="../pages/news__card.html" class="category__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" class="news__card category__image" alt="news"></a>
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
                            <a href="../pages/news__card.html" class="category__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" class="news__card category__image" alt="news"></a>
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
                            <a href="../pages/news__card.html" class="category__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" class="news__card category__image" alt="news"></a>
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" alt="news" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" alt="news" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" alt="news" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" alt="news" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" alt="news" class="news__card category__image">
                            <div class="date__info">
                                <p class="date__info-item">18.08.2021</p>
                            </div>
                            <div class="category__title__wrap"><a href="./news__card.html" class="category__title">СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ КОМПЛЕКТАЦИЯХ</a></div>
                            <p class="category__desc">24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek CO., LTD. подписали рамочное
                                соглашение об углублении стратегического взаимодействия в области разработки решений
                                систем искусственного интеллекта (ИИ) для серийных автомобилей, совместной работе над беспилотными автомобилями и
                                доведением их автономности до четвертого уровня.</p>
                        </div>

                        <div class="swiper-slide card"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg" alt="news" class="news__card category__image">
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
    </div>
    </div>
    </div>

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