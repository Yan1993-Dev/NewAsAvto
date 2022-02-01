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
  .info__item:hover:before, .info__item:focus:before, .info__item:active:before {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
        transform: translateY(0);
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
  
.background {
    background-image: url(../local/templates/NewAsAvto/static/images/td__new.jpg);
    padding: 40px 40px 100px 40px;
    margin-top: -2px;
    background-size: cover;
    background-position: 60% 60%;
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

.card {
    text-align: center;
}

.card__list__item {
    margin-bottom: 20px;
    background-color: #6caeff;
    border-radius: 15px;
    padding: 15px;
    height: 200px;
    width: 350px;
}

.icon {
    text-align: left;
    width: 80px;
    height: 80px;
}

.credit__conditions__card__title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
    text-align: right;
}

.card__item__desc {
    font-size: 14px;
    text-align: right;
    opacity: 0.8;
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

.container__descrip {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.instructor__desc {
    font-size: 16px;
    line-height: calc(24/16);
    
}

.traid__in__position {
    display: flex;
    justify-content: center;
    align-items: center;
}

.steps {
    display: flex;
    flex-direction: column;
    width: 390px;
}

.number__est__one {
    position: relative;
}

.number__est__one::before {
    content: '';
    background-image: url(../local/templates/NewAsAvto/static/images/number__one.png);
    width: 35px;
    height: 35px;
    top: -5px;
    background-size: cover;
    position: absolute;
    margin-left: -45px;
}

.number__est__two {
    position: relative;
}

.number__est__two::before {
    content: '';
    background-image: url(../local/templates/NewAsAvto/static/images/number__two.png);
    width: 35px;
    height: 35px;
    top: -5px;
    background-size: cover;
    position: absolute;
    margin-left: -45px;
}

.number__est__three {
    position: relative;
}

.number__est__three::before {
    content: '';
    background-image: url(../local/templates/NewAsAvto/static/images/number__three.png);
    width: 35px;
    height: 35px;
    top: -5px;
    background-size: cover;
    position: absolute;
    margin-left: -45px;
}

.number__est__four {
    position: relative;
}

.number__est__four::before {
    content: '';
    background-image: url(../local/templates/NewAsAvto/static/images/number__four.png);
    width: 35px;
    height: 35px;
    margin: auto;
    top: -5px;
    background-size: cover;
    position: absolute;
    margin-left: -45px;
}

.number__est {
    width: 50px;
    margin-right: 20px;
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
    margin-bottom: 20px;
}

.form_traid-in {
    width: 470px;
    height: 540px;
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

.input__traid-in{
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
    padding-left: 212px;
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

    .container__descrip {
        align-items: center;
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

    .title__est {
        font-size: 18px;
    }

    .instructor__desc {
        font-size: 14px;
    }

    .form_traid-in {
        width: 325px;
    }

    .input__traid-in {
        width: 270px;
    }
    
    .checkbox__personal {
        padding-left: 80px;
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
        color: white;
        line-height: calc(24/16);
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
    

    .card__list {
        justify-content: center;
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

    .instructor__desc {
        font-size: 14px;
        text-align: center;
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
                                <form class="traid-in_calc form__js" action="mail.php" enctype="multipart/form-data" method="POST">
                                    <input type="hidden" name="admin_mail[]" value="taur.game@gmail.com">
                                    <input type="hidden" name="admin_mail[]" value="asavtomotors.ru@yandex.ru">
                                    <div class="field">
                                        <label for="input__manufacturer" class="label__traid-in">Марка вашего автомобиля</label>
                                        <input type="text" id="input__manufacturer" class="input__traid-in" data-validate-field="man__traid" placeholder="Марка автомобиля">
                                    </div>
                                    <div class="field">
                                        <label for="input_traid" class="label__traid-in">Модель вашего автомобиля</label>
                                        <input type="text" id="input_traid" class="input__traid-in" data-validate-field="model__traid" placeholder="Модель автомобиля">
                                    </div>
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