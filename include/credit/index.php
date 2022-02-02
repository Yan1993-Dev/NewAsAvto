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
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
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
        display: -webkit-box;
        display: -ms-flexbox;
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
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
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
        position: relative;
    }

    .navigation {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #47A0ED;
    }

    .nav__item__link {
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
        margin-right: 30px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #fff;
        font-size: 18px;
        line-height: calc(33/18);
    }

    .checked__link {
        background-color: #2D7CC0;
    }

    .nav__item__link:hover {
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
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
        background-image: url(../local/templates/NewAsAvto/static/images/credit__new.jpg);
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

    .title {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        margin-top: 50px;
        text-align: center;
        font-size: 24px;
        line-height: calc(28/24);
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
        border: 1px solid;
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

    .section__tabs {
        display: flex;
        justify-content: center
    }

    .tabs {
        max-width: 1400px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-top: 30px;
    }

    .sub__tabs {
        max-width: 1200px;
        margin: 50px auto;
    }

    .tabs__nav {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .tabs__nav-btn {
        padding: 15px 30px;
        margin: 5px;
        width: 130px;
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

    .title__change {
        font-style: italic;
    }

    /* табы на css */

    label {
        cursor: pointer;
    }

    .label__traid-in {
        opacity: 0.7;
    }

    .color__js {
        background-color: #cce3fc;
        border-radius: 10px;
    }

    .sub-tabs-container {
        display: flex;
        text-align: center;
        justify-content: center;
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


    .active {
        background-color: #91cfeb81;
        transition: 0.8s;
    }

    .card__container {
        margin-top: 40px;
    }

    .card__list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .card__tactical {
        color: #fff;
    }

    .card__list__item {
        margin-bottom: 20px;
        border: 15px solid #6caeff;
        border-radius: 20px 20px 20px 20px;
        padding: 10px;
        height: 200px;
        width: 350px;
    }

    .card {
        text-align: center;
        border-radius: 15px;
    }

    .icon {
        text-align: left;
        width: 70px;
        height: 60px;
    }

    .credit__conditions__card__title {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 10px;
        text-align: right;
        color: black;
    }

    .card__item__desc {
        font-size: 14px;
        text-align: right;
        opacity: 0.8;
        color: black;
    }

    .card__desc {
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 29px;
        letter-spacing: 0em;
        text-align: center;
        padding-top: 20px;
    }

    .form_traid-in {
        width: 470px;
        height: 600px;
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
        width: 390px;
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
        width: 350px;
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
        padding-left: 65px;
    }

    .traid__btn {
        width: 312px;
        height: 57px;
        margin-top: 20px;
    }

    .popup__btn__flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .credit__btn {
        width: 312px;
        height: 57px;
        margin-top: 20px;
        letter-spacing: 1px;
    }

    .instructor__container {
        margin-left: 100px;
    }

    .special__est {
        display: flex;
        flex-direction: column;
        max-width: 500px;
    }

    .apply__list {
        display: flex;
    }

    .title__est__top {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        font-size: 24px;
        font-weight: 600;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .title__est {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        font-size: 18px;
        font-weight: 600;
        margin-top: 20px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .special__desc {
        font-size: 18px;
        line-height: calc(26/18);
    }

    .apply__list__item {
        display: flex;
        align-items: center;
        font-size: 14px;
        line-height: calc(20/14);
        font-weight: 500;
    }

    .allpy__list__img {
        margin-right: 20px;
        width: 75px;
    }

    .model__container {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .model__title {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
        font-size: 24px;
        text-align: center;
        font-weight: 600;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .container__model__view {
        display: flex;
        justify-content: space-around;
    }

    .model__visual__container {
        display: flex;
        flex-direction: column;
        margin-left: 155px;
    }

    .model__img {
        max-width: 400px;
        margin-bottom: 50px;
    }

    .model__list {
        display: flex;
        flex-direction: column;
    }

    .model__list__item {
        display: flex;
        align-items: center;
    }

    .icon__model {
        max-width: 75px;
    }

    .model__est {
        margin-left: 10px;
        font-size: 16px;
        line-height: calc(22/16);
        font-weight: 500;
    }

    .container__descrip {
        display: flex;
        justify-content: space-around;
    }

    .instructor__desc {
        font-size: 18px;
        margin-bottom: 10px;
        margin-top: 10px;
        line-height: calc(26/18);
    }

    .steps {
        display: flex;
        flex-direction: column;
    }

    .number__est__one {
        position: relative;
    }

    .number__est__one::before {
        content: '';
        background-image: url(../local/templates/NewAsAvto/static/icons/number__one.png);
        width: 35px;
        height: 35px;
        background-size: cover;
        position: absolute;
        margin-left: -45px;
    }

    .number__est__two {
        position: relative;
    }

    .number__est__two::before {
        content: '';
        background-image: url(../local/templates/NewAsAvto/static/icons/number__two.png);
        width: 35px;
        height: 35px;
        background-size: cover;
        position: absolute;
        margin-left: -45px;
    }

    .number__est__three {
        position: relative;
    }

    .number__est__three::before {
        content: '';
        background-image: url(../local/templates/NewAsAvto/static/icons/number__three.png);
        width: 35px;
        height: 35px;
        background-size: cover;
        position: absolute;
        margin-left: -45px;
    }

    .number__est__four {
        position: relative;
    }

    .number__est__four::before {
        content: '';
        background-image: url(../local/templates/NewAsAvto/static/icons/number__four.png);
        width: 35px;
        height: 35px;
        background-size: cover;
        position: absolute;
        margin-left: -45px;
    }

    .number__est {
        width: 50px;
        margin-right: 20px;
    }

    .banks {
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

    .bank__logo__content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }

    .bank__logo__item {
        align-items: center;
        margin-right: 10px;
    }

    .bank__container__card {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px;
        max-width: 210px;
    }

    .bank__logo {
        width: 100px;
    }

    .bank__title {
        margin-top: 20px;
        text-align: center;
        font-size: 14px;
        line-height: calc(16/14);
        color: #000;
        text-transform: uppercase;
    }

    .bank__license {
        text-align: center;
        color: #000;
        font-size: 12px;
        line-height: calc(18/12);
    }

    .logo__svg {
        width: 200px;
        height: 200px;
    }

    footer {
        background-color: #F8F8F8;
    }

    .wrapper__footer {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-top: 50px;
    }

    .info {
        margin-right: 10px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .info__item__title {
        font-family: 'TacticSans-Reg';
        src: url(../static/fonts/TacticSans-Reg.otf);
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
        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0);
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
        -ms-transform: translateY(4px);
        transform: translateY(4px);
        -webkit-transition-property: transform;
        -webkit-transition-property: -webkit-transform;
        transition-property: -webkit-transform;
        -o-transition-property: transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        -webkit-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .info__item:hover:before,
    .info__item:focus:before,
    .info__item:active:before {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
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
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
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

        .header__mobile_btn {
            display: none;
        }

        .header__close__btn {
            display: none;
        }

        .mobile__header {
            display: none;
        }

        .tabs__link__fl {
            margin-right: 40px;
        }

        .footer__section {
            margin-right: 25px;
        }
    }


    @media (min-width: 1024px) and (max-width: 1366px) {
        .container_site {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .adress {
            -ms-flex-wrap: nowrap;
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

        .choise__container {
            flex-direction: column-reverse;
            align-items: center;
        }

        .special__est {
            margin-bottom: 40px;
        }

        .footer__section {
            margin-right: 25px;
        }
    }


    @media (min-width: 910px) and (max-width: 1024px) {
        .container_site {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .adress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
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
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
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
            margin-bottom: 20px;
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
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
            z-index: 50;
            -webkit-transform: translateX(-1000px);
            -ms-transform: translateX(-1000px);
            transform: translateX(-1000px);
        }

        .open {
            -webkit-transform: translateX(0px);
            -ms-transform: translateX(0px);
            transform: translateX(0px);
        }

        .mobile__header__container {
            background: #47A0ED;
            height: 100vh;
            width: 100%;
            padding: 50px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
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
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .model_catalog__title {
            font-size: 16px;
            padding-bottom: 5px;
        }

        .model_catalog__price {
            font-size: 14px;
        }

        .choise__container {
            flex-direction: column-reverse;
            align-items: center;
        }

        .special__est {
            margin-bottom: 40px;
        }

        .title__poster__text {
            font-size: 18px;
        }

        .title__desc__poster {
            font-size: 16px;
        }

        .offer__item {
            font-size: 14px;
            padding: 15px;
            width: 290px;
        }

        .offer__rev {
            font-size: 14px;
        }

        .sub__tabs__item {
            font-size: 16px;
        }

        .container__model__view {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .model__visual__container {
            margin-left: 0px;
        }

        .title__est {
            font-size: 18px;
        }

        .special__desc {
            font-size: 14px;
        }


        .wrapper__footer {
            font-size: 12px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
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

        .adress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
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
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
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

        .header {
            margin-left: 100px;
            margin-bottom: 20px;
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
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
            z-index: 50;
            -webkit-transform: translateX(-1000px);
            -ms-transform: translateX(-1000px);
            transform: translateX(-1000px);
        }

        .open {
            -webkit-transform: translateX(0px);
            -ms-transform: translateX(0px);
            transform: translateX(0px);
        }

        .mobile__header__container {
            background: #47A0ED;
            height: 100vh;
            width: 100%;
            padding: 50px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
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
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .model_catalog__title {
            font-size: 16px;
            padding-bottom: 5px;
        }

        .model_catalog__price {
            font-size: 14px;
        }

        .choise__container {
            flex-direction: column-reverse;
            align-items: center;
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

        .special__est {
            margin-bottom: 40px;
        }

        .card__list {
            justify-content: center;
        }

        .wrapper__footer {
            font-size: 12px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
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
    }



    @media (min-width: 420px) and (max-width: 660px) {
        .container_site {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 2px;
        }

        .adress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
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

        .addr__list {
            text-align: center;
            margin-top: 10px;
        }

        .info {
            margin-right: 0px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
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
            margin-left: 30px;
        }

        .model_catalog__image {
            width: 130px;
            height: 100px;
        }

        .header {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 20px;
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
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
            z-index: 50;
            -webkit-transform: translateX(-1000px);
            -ms-transform: translateX(-1000px);
            transform: translateX(-1000px);
        }

        .open {
            -webkit-transform: translateX(0px);
            -ms-transform: translateX(0px);
            transform: translateX(0px);
        }

        .mobile__header__container {
            background: #47A0ED;
            height: 100vh;
            width: 100%;
            padding: 50px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
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

        .tabs__nav {
            flex-wrap: wrap;
        }

        .tabs__nav-btn {
            padding: 10px;
            margin: 10px;
        }

        .tab__img {
            width: 60px;
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
            width: 360px;
            height: 540px;
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

        .sub__content {
            margin-left: 0px;
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

        .flex {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .card__list {
            justify-content: center;
        }

        .card__item .icon {
            max-width: 20px;
            height: 20px;
        }

        .card__list__item {
            max-width: 200px;
            height: 200px;
            margin-right: 10px;
        }

        .credit__conditions__card__title {
            font-size: 12px;
        }

        .card__item__desc {
            font-size: 12px;
        }

        .special__desc {
            font-size: 12px;
        }

        .card__desc {
            font-size: 14px;
            line-height: calc(22/14);
        }

        .banks {
            font-size: 14px;
        }

        .bank__container__card {
            max-width: 150px;
        }

        .text__title {
            font-size: 14px;
        }

        .title__est {
            font-size: 16px;
            text-align: center;
        }

        .apply__list {
            flex-direction: column;
            justify-content: center;
        }

        .choise__container {
            flex-direction: column-reverse;
            align-items: center;
        }

        .special__est {
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
        }

        .wrapper__footer {
            font-size: 12px;
            flex-direction: column;
            align-items: center;
            margin-top: 480px;
        }

        .sub-tabs-container {
            flex-wrap: wrap;
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


    @media (min-width: 320px) and (max-width: 420px) {
        .container_site {
            max-width: 375px;
            margin: 0 auto;
            padding: 0 2px;
        }

        .adress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
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

        .addr__list {
            text-align: center;
            margin-top: 10px;
        }

        .info {
            margin-right: 0px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
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
            width: 115px;
            height: 100px;
        }

        .header {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            align-items: stretch;
            margin-bottom: 20px;
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
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
            z-index: 50;
            -webkit-transform: translateX(-1000px);
            -ms-transform: translateX(-1000px);
            transform: translateX(-1000px);
        }

        .open {
            -webkit-transform: translateX(0px);
            -ms-transform: translateX(0px);
            transform: translateX(0px);
        }

        .mobile__header__container {
            background: #47A0ED;
            height: 100vh;
            width: 100%;
            padding: 30px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
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

        .text__title {
            font-size: 14px;
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

        .model__visual__container {
            align-items: center;
            margin-left: 0px;
        }

        .model__img {
            max-width: 300px;
        }

        .steps {
            margin-left: 15%;
        }

        .apply__list {
            flex-direction: column;
            justify-content: center;
        }

        .choise__container {
            flex-direction: column-reverse;
            align-items: center;
        }

        .special__est {
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
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

        .title__est {
            font-size: 14px;
            text-align: center;
        }

        .form_traid-in {
            margin-top: 20px;
            width: 310px;
            height: 545px;
        }

        .sub__content {
            margin-left: 0px;
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
            width: 270px;
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

        .card__list {
            justify-content: center;
        }

        .card__list__item {
            margin-right: 0px;
        }

        .card__item .icon {
            max-width: 20px;
            height: 20px;
        }

        .card__list__item {
            max-width: 200px;
            height: 200px;
            margin-right: 10px;
        }

        .credit__conditions__card__title {
            font-size: 12px;
        }

        .card__item__desc {
            font-size: 12px;
        }

        .special__desc {
            font-size: 12px;
        }


        .card__desc {
            font-size: 14px;
            line-height: calc(22/14);
        }

        .banks {
            font-size: 14px;
        }

        .bank__container__card {
            max-width: 150px;
        }

        .text__title {
            font-size: 14px;
        }

        .title__est {
            font-size: 16px;
            text-align: center;
        }

        .apply__list {
            flex-direction: column;
            justify-content: center;
        }

        .choise__container {
            flex-direction: column-reverse;
            align-items: center;
        }

        .special__est {
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
        }

        .wrapper__footer {
            font-size: 12px;
            flex-direction: column;
            align-items: center;
            margin-top: 480px;
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

<main>
    <div class="background">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/credit__top.php"
            )
        ); ?>
    </div>
    <div class="container_site">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/credit__title.php"
            )
        ); ?>
        <div class="choise__container">
            <section class="section__tabs">
                <div class="tabs">
                    <div class="tabs__nav">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__geely.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__haval.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__chery.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__exeed.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__faw.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__changan.php"
                            )
                        ); ?>
                    </div>
                    <div class="model__container">
                        <!-- Tab Container -->
                        <input class="tab-radio" id="main-tab-1" name="main-group" type="radio">
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <label class="sub__tabs__item" for="sub-tab-1">ATLAS PRO</label>
                                <label class="sub__tabs__item" for="sub-tab-101">COOLRAY</label>
                                <label class="sub__tabs__item" for="sub-tab-103">TUGELLA</label>
                                <label class="sub__tabs__item" for="sub-tab-104">ATLAS</label>
                            </div>
                            <input class="tab-radio" id="sub-tab-1" name="sub-group" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__atlasPro.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <!-- Sub Tab -->
                            <input class="tab-radio" id="sub-tab-101" name="sub-group" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__coolray.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab-103" name="sub-group" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tugella.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab-104" name="sub-group" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__atlas.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-2" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <label class="sub__tabs__item" for="sub-tab-111">F7</label>
                                <label class="sub__tabs__item" for="sub-tab-122">F7X</label>
                                <label class="sub__tabs__item" for="sub-tab-133">JOLION</label>
                            </div>
                            <input class="tab-radio" id="sub-tab-111" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__f7.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab-122" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__f7x.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab-133" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__jolion.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-3" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item" for="sub-tab3-1">TIGGO 4</label>
                                <label class="sub__tabs__item" for="sub-tab3-2">TIGGO 7PRO</label>
                                <label class="sub__tabs__item" for="sub-tab3-3">TIGGO 8</label>
                                <label class="sub__tabs__item" for="sub-tab3-4">TIGGO 8PRO</label>
                            </div>
                            <input class="tab-radio" id="sub-tab3-1" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tiggo4.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab3-2" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tiggo7pro.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab3-3" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tiggo8.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab3-4" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__tiggo8pro.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-4" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item" for="sub-tab4-2">TXL FL</label>
                                <label class="sub__tabs__item" for="sub-tab4-3">TXL VX</label>
                            </div>
                            <input class="tab-radio" id="sub-tab4-2" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__txl.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab4-3" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__vx.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-5" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item" for="sub-tab5-1">BESTURN X80</label>
                                <label class="sub__tabs__item" for="sub-tab5-2">BESTURN X40</label>
                                <label class="sub__tabs__item" for="sub-tab5-3">BESTUNE T77</label>
                            </div>
                            <input class="tab-radio" id="sub-tab5-1" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__b80x.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab5-2" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__b40x.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab5-3" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__77t.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <input class="tab-radio" id="main-tab-6" name="main-group" type="radio" />
                        <div class="tab-content">
                            <div class="sub-tabs-container">
                                <!-- NOTE: due to id note below, remember to match the for-->
                                <label class="sub__tabs__item" for="sub-tab6-1">CS35PLUS</label>
                                <label class="sub__tabs__item" for="sub-tab6-2">CS55</label>
                                <label class="sub__tabs__item" for="sub-tab6-3">CS75FL</label>
                            </div>
                            <input class="tab-radio" id="sub-tab6-1" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__35.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab6-2" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="calc__phone" name="tel" class="input__traid-in" data-validate-field="tel__traid" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__55.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <input class="tab-radio" id="sub-tab6-3" name="sub-group2" type="radio">
                            <div class="sub-tab-content">
                                <div class="container__model__view">
                                    <section class="form_traid-in">
                                        <h2 class="sub_title">
                                            Заполните форму
                                        </h2>
                                        <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                            <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                            <div class="field">
                                                <label for="calc__name" class="label__traid-in">Ваше имя*</label>
                                                <input type="text" id="calc__name" name="name" class="input__traid-in" data-validate-field="name__traid" placeholder="Ваше имя">
                                            </div>
                                            <div class="field__wrapper">
                                                <div class="field">
                                                    <label for="calc__phone" class="label__traid-in">Телефон*</label>
                                                    <input type="tel" id="drive__phone" data-validate-field="tel" class="input__traid-in" name="tel" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="input__manufacturer" class="label__traid-in">Размер первоначального взноса</label>
                                                <input type="number" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Укажите сумму">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Срок кредита</label>
                                                <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите срок">
                                            </div>
                                            <div class="field">
                                                <label for="input_traid" class="label__traid-in">Комфортный ежемесячный платёж</label>
                                                <input type="number" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Укажите сумму">
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
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/credit__75.php"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    <div class="container_site">
        <div class="container__descrip">
            <div class="special__est">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__est.php"
                    )
                ); ?>
                <div class="apply__content">
                    <ul class="apply__list">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__est__time.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__est__cli.php"
                            )
                        ); ?>
                    </ul>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__instruct__desc.php"
                    )
                ); ?>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/credit__instruct.php"
                )
            ); ?>
        </div>
    </div>
    </div>
    </section>
    </div>
    <div class="container_site">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/credit__card.php"
            )
        ); ?>
        <div class="card__container">
            <ul class="card__list">
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__doc.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__age.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__city.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__reg.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__stage.php"
                            )
                        ); ?>
                    </li>
                </div>
                <div class="card__tactical">
                    <li class="card__list__item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/credit__inner.php"
                            )
                        ); ?>
                    </li>
                </div>
            </ul>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/credit__small.php"
                )
            ); ?>
        </div>
    </div>
    <div class="container_site">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/credit__bank.php"
            )
        ); ?>
        <ul class="bank__logo__content">
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__vtb.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__zenit.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__sovk.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__uni.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__fast.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__sete.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__loco.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__ural.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__souz.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__opt.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__expo.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__tinkoff.php"
                    )
                ); ?>
            </li>
            <li class="bank__logo__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/credit__euro.php"
                    )
                ); ?>
            </li>
        </ul>
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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>