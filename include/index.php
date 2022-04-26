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
        content: url(../static/icons/Vector.svg);
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

    .nav__bar {
        margin-top: 50px;
    }

    .nav__bar__ul {
        display: flex;
        justify-content: center;
        border-bottom: rgba(0, 0, 0, 0.1) solid 1px;
    }

    .nav__bar__li {
        margin-right: 20px;
        padding-bottom: 30px;
    }

    li.nav__bar__li:last-child {
        margin-right: 0px;
    }

    .nav__bar__item {
        color: #fff;
        padding: 20px;
    }

    .nav__bar__item:hover {
        background-color: #C4C4C4;
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


    .background__poster {
        background-image: url(../static/images/service__new.jpg);
        padding: 40px 40px 100px 40px;
        margin-top: -2px;
        background-size: cover;
        background-position: 50% 70%;
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

    .title__tabs {
        margin-top: 50px;
        text-align: center;
    }

    .tabs {
        max-width: 1200px;
        margin: 30px auto;
    }

    .sub__tabs {
        max-width: 1200px;
        margin: 50px auto;
    }

    .tabs__nav {
        display: flex;
        justify-content: center;
    }

    .tabs__nav-btn {
        padding: 15px 30px;
        font-size: 20px;
        background-color: #fff;
        border: 0;
        cursor: pointer;
    }

    button .tabs__nav-btn:active {
        background-color: #000;
    }

    .sub__tabs__item {
        display: inline-block;
        padding: 20px;
        font-size: 20px;
        background-color: #fff;
        border-radius: 10px;
        border: 0;
    }

    .sub__tabs__item:hover {
        transition: 0.3s;
        background-color: #ddd;
    }

    .tabs__nav-btn:last-child {
        border-right: none;
    }

    .tabs__nav-btn:hover {
        transition: 0.3s;
        background-color: #ddd;
        border-radius: 10px;
    }

    .tabs__nav-btn.active {
        background-color: #cafdff;
        border-radius: 10px;
    }

    .tabs__nav-btn:checked {
        background-color: #2098D1;
    }

    .sub__tab__link {
        margin-bottom: 20px;
    }

    .sub__tabs__nav {
        display: flex;
        justify-content: center;
    }

    .sub__nav-btn {
        padding: 15px 30px;
        font-size: 20px;
        line-height: calc(38/20);
        background-color: #fff;
        border: 0;
        border-right: 1px solid #ddd;
        cursor: pointer;
    }

    .sub__nav-btn:last-child {
        border-right: none;
    }

    .sub__nav-btn:hover {
        transition: 0.3s;
        background-color: #ddd;
    }

    .table__scroll {
        overflow-x: scroll;
    }

    .tabs__content {
        text-align: center;
        background-color: #fff;
    }

    .tabs__item {
        overflow-y: auto;
    }

    .table__title {
        font-size: 16px;
        line-height: calc(30/16);
        margin-bottom: 10px;
    }

    .bb {
        border-bottom: 2px solid black;
    }

    .top__title {
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    .left__title {
        font-size: 14px;
        line-height: calc(28/14);
        padding-top: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
    }

    .price {
        font-size: 14px;
        line-height: calc(28/14);
        text-align: center;
        margin-left: 20px;
        padding-right: 20px;
        border-bottom: 1px solid #ddd;
    }

    .top__title {
        font-size: 14px;
    }

    .price__item {
        background: #fff;
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        font-size: 14px;
        line-height: calc(28/14);
        min-width: 100px;
        white-space: normal;
    }

    .tabs__item {
        display: none;
    }

    .tabs__item__fl {
        display: flex;
        flex-wrap: wrap;
    }

    .tabs__link__fl {
        display: flex;
        flex-direction: column;
        margin-right: 50px;
        margin-bottom: 20px;
        padding: 5px;
    }

    .tabs__link__fl:hover {
        transition: 0.3s;
        background-color: #ddd;
    }

    .model_catalog__image {
        width: 200px;
        height: 130px;
    }

    .tabs__item__desc {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin-top: 20px;
    }

    .model_catalog__title {
        font-size: 20px;
        line-height: calc(24/20);
        color: #000;
        text-transform: uppercase;
    }

    .model_catalog__price {
        color: #000;
        font-size: 18px;
        line-height: calc(32/18);
    }

    .tabs__item.active {
        display: block;
    }

    .tab__img {
        width: 290px;
        flex-shrink: 0;
    }

    .img__nav {
        display: flex;
    }

    .content__item {
        font-size: 16px;
        line-height: calc(24/16);
    }

    /* табы на css */

    label {
        cursor: pointer;
    }

    .color__js {
        background-color: #cce3fc;
        border-radius: 10px;
    }

    .sub-tabs-container {
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .tab-radio {
        display: none;
    }

    /* Tabs behaviour, hidden if not checked/clicked */
    .sub-tab-content,
    .tab-content {
        display: none;
    }

    .tab-radio:checked+.tab-content {
        display: block;
    }

    .tab-radio:checked+.sub-tab-content {
        display: block;
    }

    .color__target {
        background-color: #47A0ED;
        border-radius: 10px;
    }

    .color__notarget {
        background-color: #C4C4C4;
        border-radius: 10px;
    }

    .sub-tab-content {
        width: 1024px;
    }

    table {
        width: 100%;
    }

    /* Tabs Content */
    .tab-content {
        padding: 10px;
    }

    .content_li {
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

    .title__content__item {
        font-weight: 600;
        margin-bottom: 15px;
        color: #fff;
    }

    .content__item::before {
        content: url(../static/icons/blue__arr.svg);
        margin-right: 5px;
    }

    .background__fos {
        padding: 40px 0;
        background-image: url(../static/images/service__fos.jpg);
        background-size: cover;
        background-position: center;
    }

    .flex__cont {
        display: flex;
        justify-content: space-between;
    }

    .form_traid-in {
        width: 470px;
        height: 670px;
        background-color: #F8FAFD;
        border: 1px solid rgba(52, 130, 198, 0.1);
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 10px;
    }

    .sub_title {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        font-size: 18px;
        font-style: normal;
        font-weight: 600;
        line-height: calc(24/18);
        letter-spacing: 0em;
        text-align: center;
        padding-top: 20px;
    }

    .field {
        padding-left: 30px;
        padding-top: 5px;
        display: inline-block;
    }

    .label__traid-in {
        font-family: 'Noto Sans', sans-serif;
        font-size: 12px;
        line-height: calc(18/12);
    }

    .input__traid-in {
        font-family: 'Noto Sans', sans-serif;
        font-size: 12px;
        line-height: calc(18/12);
        width: 410px;
        height: 40px;
        background: #FFFFFF;
        border: 1px solid rgba(52, 130, 198, 0.05);
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-box-shadow: 4px 6px 10px rgba(110, 185, 241, 0.1);
        box-shadow: 4px 6px 10px rgba(110, 185, 241, 0.1);
        border-radius: 5px;
        padding-left: 10px;
    }

    .input__nearby {
        max-width: 140px;
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

    .input__date {
        max-width: 94px;
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

    .input__varieble {
        max-width: 94px;
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

    .title__content__item {
        font-weight: 600;
    }

    .repair__li {
        max-width: 500px;
    }

    .content__item {
        margin-bottom: 15px;
        color: #fff;
    }

    .sub__content__item {
        font-size: 16px;
        line-height: calc(24/16);
        margin-bottom: 15px;
        color: #fff;
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

    .title {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        margin-top: 50px;
        text-align: center;
        font-size: 24px;
        line-height: calc(28/24);
    }


    .sub__title {
        margin-top: 50px;
        align-items: center;
        text-align: center;
        margin-bottom: 30px;
        font-size: 18px;
        line-height: calc(33/18);
    }

    .seo__title {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        font-size: 24px;
        line-height: calc(45/24);
        margin-top: 100px;
        text-align: center;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .seo__sub_title {
        font-size: 18px;
        line-height: calc(33/18);
        text-align: center;
        margin-bottom: 50px;
    }

    .seo__list__title {
        padding-left: 60px;
        padding-right: 60px;
        margin-bottom: 10px;
        font-size: 18px;
        line-height: calc(33/18);
    }

    .seo__list-item {
        padding-left: 95px;
        margin-bottom: 10px;
        font-size: 16px;
        line-height: calc(33/16);
    }

    .seo__list-item::before {
        content: url(../static/images/blue__arr.svg);
        margin-right: 5px;
    }

    .seo__text__afterTable {
        font-size: 10px;
        line-height: calc(18/10);
        margin-bottom: 10px;
    }

    .seo__text {
        font-size: 18px;
        line-height: calc(33/18);
        margin-bottom: 10px;
    }

    .container__img {
        margin-top: 20px;
        margin-bottom: 550px;
        position: relative;
    }

    .container__img>img {
        position: absolute;
    }

    .rect {
        position: absolute;
        margin-top: 310px;
        margin-left: 160px;
        padding-left: 80px;
        padding-right: 80px;
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: #fff;
        border-radius: 10px;
        border: 1px solid;
        z-index: 10;
    }

    .triangle-down {
        margin-top: 393px;
        margin-left: 255px;
        position: absolute;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-top: 30px solid rgb(73, 73, 73);
        z-index: 15;
    }

    .safeguard {
        position: absolute;
        text-align: center;
        text-transform: uppercase;
        margin-top: 140px;
        margin-left: 240px;
        padding-left: 80px;
        padding-right: 80px;
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: #fff;
        border-radius: 10px;
        border: 1px solid;
        z-index: 10;
    }

    .triangle-down__safeguard {
        margin-top: 305px;
        margin-left: 945px;
        position: absolute;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-top: 30px solid rgb(73, 73, 73);
        z-index: 15;
    }

    .term {
        position: absolute;
        text-align: center;
        text-transform: uppercase;
        margin-top: 410px;
        margin-left: 480px;
        padding-left: 80px;
        padding-right: 80px;
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: #fff;
        border-radius: 10px;
        border: 1px solid;
        z-index: 10;
    }

    .triangle-down__term {
        margin-top: 108px;
        margin-left: 466px;
        position: absolute;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-bottom: 30px solid rgb(73, 73, 73);
        z-index: 15;
    }

    .waaay {
        position: absolute;
        text-align: center;
        text-transform: uppercase;
        margin-top: 222px;
        margin-left: 750px;
        padding-left: 80px;
        padding-right: 80px;
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: #fff;
        border-radius: 10px;
        border: 1px solid;
        z-index: 10;
    }

    .triangle-down__waaay {
        margin-top: 379px;
        margin-left: 630px;
        position: absolute;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-bottom: 30px solid rgb(73, 73, 73);
        z-index: 15;
    }

    .ally {
        position: absolute;
        text-align: center;
        text-transform: uppercase;
        margin-top: 105px;
        margin-left: 1035px;
        padding-left: 80px;
        padding-right: 80px;
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: #fff;
        border-radius: 10px;
        border: 1px solid;
        z-index: 10;
    }

    .triangle-down__ally {
        margin-top: 73px;
        margin-left: 1138px;
        position: absolute;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-bottom: 30px solid rgb(73, 73, 73);
        z-index: 15;
    }

    .way__item {
        margin-top: 35px;
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
        margin-top: 550px;
    }

    .footer__logo {
        max-width: 159px;
        height: 79px;
        margin-right: 20px;
    }

    .wrapper__phone__footer {
        display: flex;
        flex-direction: column;
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


    .text__phone__footer {
        font-size: 16px;
        line-height: calc(24/16);
        text-align: center;
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
        background-image: url(../static/icons/X.svg);
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
    text-align: center;
    margin-right: 15px;
    margin-top: 20px;
    font-size: 12px;
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
        background-image: url(../static/icons/X__white.svg);
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

    .thanks__content {
        margin-top: 65px;
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

        .header__mobile_btn {
            display: none;
        }

        .header__close__btn {
            display: none;
        }
    }

    @media (min-width: 1024px) and (max-width: 1366px) {
        .container_site {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
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
            font-size: 12px;
            line-height: calc(20/12);
            margin-right: 10px;
            padding-right: 5px;
        }

        .sub-tab-content {
            overflow-x: scroll;
        }
    }

    @media (min-width: 910px) and (max-width: 1024px) {
        .container_site {
            max-width: 935px;
            padding: 0 20px;
        }

        .wrapper__menu {
            margin-right: 548px;
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
            padding-right: 5px;
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

        .sub-tab-content {
            overflow-x: scroll;
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

        .label__traid-in {
            font-size: 12px;
        }

        .input__traid-in {
            max-width: 300px;
            font-size: 12px;
            height: 40px;
        }

        .checkbox__personal {
            padding-left: 85px;
        }

        .seo__sub_title {
            font-size: 14px;
            margin-bottom: 30px;
        }

        .seo__list__title {
            padding-left: 45px;
            font-size: 14px;
        }

        .seo__list-item {
            padding-left: 65px;
            padding-bottom: 15px;
            font-size: 14px;
        }

        .wrapper__footer {
            font-size: 12px;
            flex-direction: column;
            align-items: center;
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

    @media (min-width: 660px) and (max-width: 910px) {
        .container_site {
            max-width: 700px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hidden__adapt {
            display: none;
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

        .header {
            margin-bottom: 10px;
            margin-left: 100px;
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
            padding: 50px;
            display: flex;
            justify-content: space-between;
        }

        .mobile_phone_btn {
            display: block;
            margin-top: 15px;
        }

        .nav__item__link__mobile {
            color: #FFFFFF;
            font-size: 18px;
            line-height: calc(32/18);
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

        .phone__mobile {
            font-size: 16px;
            line-height: calc(32/16);
            color: #fff;
        }

        .text__title {
            font-size: 16px;
        }

        .title__poster__text {
            font-size: 14px;
            line-height: calc(20/14);
        }

        .title__desc__poster {
            font-size: 12px;
            line-height: calc(18/12);
        }

        .offer__item {
            width: 290px;
            padding: 15px;
            font-size: 12px;
        }

        .offer__rev {
            font-size: 12px;
            padding: 15px;
            width: 290px;
            height: 50px;
        }

        .tabs__nav-btn {
            padding: 10px 20px;
            margin: 0px;
            width: 110px;
        }

        .sub__tabs__item {
            font-size: 14px;
        }

        .container__model__view {
            justify-content: center;
            flex-direction: column;
            margin-top: 20px;
        }

        .model__visual__container {
            margin-left: 0px;
        }

        .container__descrip {
            align-items: center;
            flex-direction: column;
        }

        .title__est {
            font-size: 16px;
        }

        .special__desc {
            font-size: 14px;
        }


        .nav {
            display: none;
        }

        .nav__bar {
            margin-top: 10px;
        }


        .title__tabs {
            margin-top: 20px;
        }

        .tabs {
            margin-top: 20px;
        }

        .nav__bar__ul {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            text-align: center;
        }

        .nav__bar__li {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav__bar__item {
            padding: 10px;
        }

        .sub-tab-content {
            overflow-x: scroll;
        }

        .tabs__nav {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            text-align: center;
        }

        .tabs__nav__btn {
            text-transform: uppercase;
        }

        .flex__cont {
            align-items: center;
            flex-direction: column;
        }

        .content_li {
            margin-bottom: 20px;
        }

        .form_traid-in {
            margin-left: 5px;
            width: 370px;
            height: 645px;
        }

        .sub_title {
            font-size: 18px;
        }

        .input__traid-in {
            max-width: 310px;
            font-size: 12px;
            height: 40px;
        }

        .label__traid-in {
            font-size: 12px;
        }

        .checkbox__personal {
            padding-left: 120px;
        }

        .checkbox__label {
            font-size: 12px;
        }

        .credit__btn {
            width: 285px;
            height: 40px;
        }


        .seo__title {
            font-size: 20px;
            margin-top: 50px;
        }

        .seo__sub_title {
            font-size: 14px;
        }

        .seo__list__title {
            padding-left: 25px;
            padding-right: 30px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .seo__list-item {
            padding-left: 50px;
            font-size: 14px;
        }

        .seo__text {
            font-size: 14px;
        }

        .wrapper__footer {
            font-size: 12px;
            flex-direction: column;
            align-items: center;
            margin-top: 500px;
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

        .info__item__title {
            margin-top: 10px;
            text-align: center;
        }

        .info__item {
            text-align: center;
        }

        .addr__list {
            text-align: center;
            margin-top: 10px;
        }
    }

    @media (min-width: 420px) and (max-width: 660px) {
        .container_site {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 20px;
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

        .header {
            margin-bottom: 10px;
            margin-left: 50px;
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

        .sub-tab-content {
            overflow-x: scroll;
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

        .mobile_phone_btn {
            display: block;
            margin-top: 15px;
        }

        .nav__item__link__mobile {
            color: #FFFFFF;
            font-size: 18px;
            line-height: calc(32/18);
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

        .phone__mobile {
            font-size: 16px;
            line-height: calc(32/16);
            color: #fff;
        }

        .nav {
            display: none;
        }

        .nav__bar {
            margin-top: 10px;
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

        .offer__item {
            padding: 10px;
            font-size: 12px;
        }

        .title__tabs {
            margin-top: 20px;
        }

        .tabs {
            margin-top: 20px;
        }

        .tabs__nav-btn {
            padding: 10px 10px;
        }

        .tabs__nav-btn {
            font-size: 14px;
        }

        .nav__bar__ul {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 2fr 1fr;
            text-align: center;
        }

        .nav__bar__li {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 0px;
            padding-bottom: 0px;
        }

        .nav__bar__item {
            padding: 10px;
            padding: 10px;
            max-width: 175px;
            height: 65px;
            text-align: center;
            display: flex;
            align-items: center;
        }

        .tabs__nav {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            text-align: center;
        }

        .tabs__nav__btn {
            text-transform: uppercase;
        }

        .content_li {
            margin-bottom: 20px;
        }

        .form_traid-in {
            margin-left: 5px;
            width: 360px;
            height: 645px;
        }

        .sub_title {
            font-size: 18px;
        }

        .label__traid-in {
            font-size: 12px;
        }

        .flex__cont {
            align-items: center;
            flex-direction: column;
        }

        .input__traid-in {
            width: 295px;
            font-size: 12px;
            height: 40px;
        }

        .checkbox__personal {
            padding-left: 90px;
        }

        .checkbox__label {
            font-size: 12px;
        }

        .credit__btn {
            width: 265px;
            height: 40px;
        }

        .seo__title {
            font-size: 18px;
            margin-top: 50px;
        }

        .seo__sub_title {
            font-size: 16px;
        }

        .seo__list__title {
            padding-left: 1px;
            padding-right: 1px;
            font-size: 14px;
        }

        .seo__list-item {
            padding-left: 20px;
            font-size: 14px;
        }

        .seo__text {
            font-size: 14px;
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

        .info__item__title {
            margin-top: 10px;
            text-align: center;
        }

        .info__item {
            text-align: center;
        }

        .addr__list {
            text-align: center;
            margin-top: 10px;
        }
    }


    @media (min-width: 320px) and (max-width: 420px) {
        .container_site {
            max-width: 350px;
            margin: 0 auto;
            padding: 0 20px;
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

        .tabs__link__fl {
            margin-right: 25px;
            margin-bottom: 10px;
        }

        .header {
            margin-bottom: 10px;
            margin-left: 20px;
        }

        .nav {
            display: none;
        }

        .header {
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

        .mobile_phone_btn {
            display: block;
            margin-top: 15px;
        }

        .nav__item__link__mobile {
            color: #FFFFFF;
            font-size: 18px;
            line-height: calc(32/18);
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

        .phone__mobile {
            font-size: 16px;
            line-height: calc(32/16);
            color: #fff;
        }

        .poster__container {
            flex-direction: column;
        }

        .colors__poster {
            margin-bottom: 20px;
        }

        .offer {
            align-items: center;
            margin-left: 0%;
        }

        .tabs__nav {
            flex-wrap: wrap;
        }

        .container__descrip {
            flex-direction: column;
            align-items: center;
        }

        .sub-tabs-container {
            flex-wrap: wrap;
        }

        .model__container {
            flex-wrap: wrap;
            flex-direction: row;
        }

        .container__model__view {
            flex-direction: column;
            justify-content: center;
        }

        .sub__tabs__item {
            font-size: 16px;
        }

        .title__poster__text {
            font-size: 14px;
            line-height: calc(22/14);
        }

        .title__desc__poster {
            font-size: 12px;
            line-height: calc(18/12);
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

        .tab__img {
            width: 70px;
        }

        .nav__bar__ul {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            text-align: center;
        }

        .title__tabs {
            margin-top: 20px;
        }

        .tabs {
            margin-top: 20px;
        }

        .tabs__nav-btn {
            padding: 10px 15px;
            font-size: 14px;
        }

        .nav__bar__li {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 0px;
        }

        .sub__tabs__item {
            padding: 10px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .nav__bar__item {
            padding: 10px;
            margin-right: 0px;
            max-width: 150px;
            font-size: 14px;
        }

        .tabs__nav {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            text-align: center;
        }

        .tabs__nav__btn {
            text-transform: uppercase;
        }

        .sub-tab-content {
            overflow-x: scroll;
        }

        .flex__cont {
            align-items: center;
            flex-direction: column;
        }

        .content_li {
            margin-bottom: 20px;
        }

        .form_traid-in {
            width: 285px;
            height: 645px;
        }

        .sub_title {
            font-size: 16px;
        }

        .label__traid-in {
            font-size: 12px;
        }

        .field {
            padding-left: 20px;
        }

        .input__traid-in {
            width: 230px;
            font-size: 12px;
            height: 40px;
        }

        .checkbox__personal {
            padding-left: 90px;
        }

        .checkbox__label {
            font-size: 12px;
        }

        .credit__btn {
            width: 245px;
            height: 40px;
        }

        .seo__title {
            font-size: 16px;
            margin-top: 50px;
        }

        .seo__sub_title {
            font-size: 14px;
        }

        .seo__list__title {
            padding-left: 1px;
            padding-right: 1px;
            font-size: 14px;
        }

        .seo__list-item {
            padding-left: 25px;
            font-size: 14px;
        }

        .seo__text {
            font-size: 14px;
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

        .wrapper__phone__footer {
            padding-left: 0px;
        }
    }
</style>
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
            <li class="nav__bar__li"><a href="./service.html" class="nav__bar__item color__target">Техническое обслуживание</a></li>
            <li class="nav__bar__li"><a href="./repair.html" class="nav__bar__item color__notarget">Ремонт автомобиля</a></li>
            <li class="nav__bar__li"><a href="./service__stock.html" class="nav__bar__item color__notarget">Акции сервиса</a></li>
            <li class="nav__bar__li"><a href="./service__map.html" class="nav__bar__item color__notarget">Схема проезда</a></li>
        </ul>
    </nav>
    <section class="section__tabs">
    </section>
    </div>
    </div>
    <div class="container_site">
        <section class="section__tabs">
            <div class="tabs">
                <div class="tabs__nav">
                    <button class="tabs__nav-btn" type="button" id="geely"><label for="main-tab-1"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/GEELY.png" class="tab__img" alt="marka"></label></button>
                    <button class="tabs__nav-btn" type="button" id="Haval"><label for="main-tab-2"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/HAVAL.png" class="tab__img" alt="marka"></label></button>
                    <button class="tabs__nav-btn" type="button" id="chery"><label for="main-tab-3"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/CHERY.png" class="tab__img" alt="marka"></label></button>
                    <button class="tabs__nav-btn" type="button" id="Exeed"><label for="main-tab-4"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/EXEED.png" class="tab__img" alt="marka"></label></button>
                    <button class="tabs__nav-btn" type="button" id="Faw"><label for="main-tab-5"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/FAW2.png" class="tab__img" alt="marka"></label></button>
                    <button class="tabs__nav-btn" type="button" id="Changan"><label for="main-tab-6"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/CHANGAN.png" class="tab__img" alt="marka"></label></button>
                </div>
                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-1" name="main-group" type="radio" checked="checked">
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <label class="sub__tabs__item" for="sub-tab-1">ATLAS</label>
                        <label class="sub__tabs__item" for="sub-tab-2">COOLRAY</label>
                        <label class="sub__tabs__item" for="sub-tab-3">TUGELLA</label>
                        <label class="sub__tabs__item" for="sub-tab-4">EMGRAND X7</label>
                        <label class="sub__tabs__item" for="sub-tab-5">GS</label>
                        <label class="sub__tabs__item" for="sub-tab-6">ATLAS PRO</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab-1" name="sub-group" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика 9405098548968723460 Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидкости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab-2" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">59-04938856327629-73492- для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-3" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">апзушгкше734752=70949032= для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-4" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">хклпзвкозпошзфвокшпзйуокшзойъйьждь0384093475896348745672679- для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-5" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">вапдловыащпрщохвыаршщпщвырхшашщы для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <input class="tab-radio" id="sub-tab-6" name="sub-group" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title"> для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <input class="tab-radio" id="main-tab-2" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <label class="sub__tabs__item" for="sub-tab2-1">F7</label>
                        <label class="sub__tabs__item" for="sub-tab2-2">F7X</label>
                        <label class="sub__tabs__item" for="sub-tab2-3">JOLION</label>
                    </div>
                    <input class="tab-radio" id="sub-tab2-1" name="sub-group2" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab2-2" name="sub-group2" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-3" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item" for="sub-tab3-1">TIGGO 4</label>
                        <label class="sub__tabs__item" for="sub-tab3-2">TIGGO 7PRO</label>
                        <label class="sub__tabs__item" for="sub-tab3-3">TIGGO 8</label>
                        <label class="sub__tabs__item" for="sub-tab3-4">TIGGO 8PRO</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-1" name="sub-group3" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диа Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab3-2" name="sub-group3" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-4" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item" for="sub-tab4-1">TXL</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab4-1" name="sub-group4" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-5" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item" for="sub-tab5-1">BESTURN X80</label>
                        <label class="sub__tabs__item" for="sub-tab5-2">BESTURN X40</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab5-1" name="sub-group5" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab5-2" name="sub-group5" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Container -->
                <input class="tab-radio" id="main-tab-6" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <!-- NOTE: due to id note below, remember to match the for-->
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-1">S3</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-2">S5</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-3">J7</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-4">S7</label>
                        <label class="sub__tabs__item tabs__nav-btn" for="sub-tab6-5">T6</label>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab6-1" name="sub-group6" type="radio" checked="checked">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sub Tab -->
                    <input class="tab-radio" id="sub-tab6-2" name="sub-group6" type="radio">
                    <div class="sub-tab-content">
                        <table class="table__scroll">
                            <caption class="table__title">Диагностика для Вас</caption>
                            <tr class="bb">
                                <td class="top__title"></td>
                                <td class="price">Стоимость*</td>
                                <td class="top__title">Скидка для а/м от 3 до 5 лет*</td>
                                <td class="top__title">Скидка для а/м старше 5 лет*</td>
                                <td class="top__title">Скидка участникам Бонусной программы АсАвто*</td>
                                <td class="top__title">Максимальный размер скидок*</td>
                                <td class="top__title">Минимальная цена*</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена масла и фильтра</td>
                                <td class="price__item">2000</td>
                                <td class="price__item">280</td>
                                <td class="price__item">680</td>
                                <td class="price__item">400</td>
                                <td class="price__item">944</td>
                                <td class="price__item">1056</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Снятие/установка защиты картера</td>
                                <td class="price__item">300</td>
                                <td class="price__item">42</td>
                                <td class="price__item">102</td>
                                <td class="price__item">60</td>
                                <td class="price__item">141,6</td>
                                <td class="price__item">158,4</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена воздушного фильтра ДВС</td>
                                <td class="price__item">500</td>
                                <td class="price__item">70</td>
                                <td class="price__item">170</td>
                                <td class="price__item">100</td>
                                <td class="price__item">236</td>
                                <td class="price__item">264</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена свечей зажигания</td>
                                <td class="price__item">1500</td>
                                <td class="price__item">210</td>
                                <td class="price__item">510</td>
                                <td class="price__item">300</td>
                                <td class="price__item">708</td>
                                <td class="price__item">792</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена охлаждающей жидкости</td>
                                <td class="price__item">3000</td>
                                <td class="price__item">420</td>
                                <td class="price__item">1020</td>
                                <td class="price__item">600</td>
                                <td class="price__item">1416</td>
                                <td class="price__item">1584</td>
                            </tr>
                            <tr class="bb">
                                <td class="left__title">Замена жидгости ГУР</td>
                                <td class="price__item">2500</td>
                                <td class="price__item">350</td>
                                <td class="price__item">850</td>
                                <td class="price__item">500</td>
                                <td class="price__item">1180</td>
                                <td class="price__item">1320</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="wrap__seo">
                <p class="seo__text__afterTable">* Стоимость может отличаться и зависит от текущей цены на расходные материалы и наличия дополнительных работ.</p>
                <p class="seo__text__afterTable">** Скидка предоставляется на автомобили, год выпуска которых старше 3 лет, но младше 5 лет</p>
                <p class="seo__text__afterTable">*** Скидка предоставляется на автомобили, год выпуска которых старше 5 лет</p>
                <p class="seo__text__afterTable">**** Указан максимальный размер скидки. Скидка участникам Бонусной программы АсАвто может составлять до 20% от итоговой суммы заказ-наряда. Для получения скидки владелец а/м должен быть подключен к Мобильному приложению АсАвто. Подробности уточняйте в отделе Сервиса АсАвто.</p>
                <p class="seo__text__afterTable">***** Максимальный размер скидок и минимальная цена складываются из действующих скидок и предложений. Не все акции и скидки суммируются. Подробности уточняйте в отделе Сервиса АсАвто</p>
            </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="background__fos">
        <div class="container_site">
            <div class="flex__cont">
                <div class="middle">
                    <div class="repair__li">
                        <ul class="content_li">
                            <li class="title__content__item">Запишитесь на плановое ТО заранее в удобный день и время!</li>
                            <li class="content__item">Участвуйте в Бонусной программе «АсАвто» и оплачивайте часть стоимости бонусами!</li>
                            <li class="content__item">Получайте скидку на автоработы для автомобилей старше 3 лет</li>
                            <li class="content__item">Доверьте обслуживание Вашего автомобиля профессионалам!</li>
                        </ul>
                    </div>
                </div>
                <section class="form_traid-in">
                    <h2 class="sub_title" id="calculator">
                        Заявка на ТО
                    </h2>
                    <form class="traid-in_calc form__js" enctype="multipart/form-data" method="POST">
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
                            <div class="field">
                                <label for="input__manufacturer" class="label__traid-in">Дата записи</label>
                                <input type="date" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Нажмите">
                            </div>
                            <div class="field">
                                <label for="input_traid" class="label__traid-in">Время записи</label>
                                <select name="DC" class="input__traid-in">
                                    <option value="s1" class="input__traid-in">08:00</option>
                                    <option value="s2" class="input__traid-in">09:00</option>
                                    <option value="s5" class="input__traid-in">10:00</option>
                                    <option value="s6" class="input__traid-in">11:00</option>
                                    <option value="s7" class="input__traid-in">12:00</option>
                                    <option value="s8" class="input__traid-in">13:00</option>
                                    <option value="s9" class="input__traid-in">14:00</option>
                                    <option value="s10" class="input__traid-in">15:00</option>
                                    <option value="s11" class="input__traid-in">16:00</option>
                                    <option value="s12" class="input__traid-in">17:00</option>
                                    <option value="s13" class="input__traid-in">18:00</option>
                                    <option value="s14" class="input__traid-in">19:00</option>
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
    <div class="container_site">
        <p class="seo__title">Техническое обслуживание в «АсАвто»</p>
        <p class="seo__sub_title">Техническое обслуживание автомобиля (сокращённо — ТО) представляет собой комплекс мер, направленных на поддержание работоспособности всех технических узлов и агрегатов автомобиля, а также на снижение вероятности внезапного выхода из строя узлов и деталей автомобиля и продление срока службы автомобиля в целом. Важно понимать, что каждый автомобиль необходимо регулярно обслуживать согласно рекомендациям, указанным в руководстве по сервисному обслуживанию (сервисной книжке).
            Группа компаний «АсАвто» - официальный дилер китайских автомобилей. Все сотрудники станций технического обслуживания регулярно проходят обучение и повышение квалификации в том числе с участием представителей заводов-изготовителей. Тем самым поддерживается высокая культура работы и стабильное качество выполняемых работ. </p>
        <p class="seo__text">Регулярно обсуживаясь в АсАвто и участвуя в Бонусной программе Вы экономите деньги на каждом последующем прохождении ТО. </p>
    </div>
    <div class="popup_overlay"></div>
    <div class="popup__container">
        <form id="popup__form" class="popup  form__js" name="popupIn" enctype="multipart/form-data" method="POST">
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