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
    margin-right: 30px;
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
  
.background {
    background-image: url(../local/templates/NewAsAvto/static/images/test__four.jpg);
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
    padding: 20px;
    margin-bottom: 10px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255);
    width: 390px;
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
  
.title__cont {
    display: flex;
    align-items: center;
}

.img__chery {
    max-width: 180px;
    height: 75px;
}


.catalog__list {
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

.background__fos {
    padding: 40px 0;
    background-image: linear-gradient(black,
    transparent 80%,
    transparent 20%,
    black), url(../local/templates/NewAsAvto/static/images/chery__fos.jpg);
    background-size: cover;
    background-position: center;
}

.flex__cont {
    display: flex;
    justify-content: space-between;
}

.form_traid-in {
    width: 470px;
    height: 615px;
    background-color: #F8FAFD;
    border: 1px solid rgba(52, 130, 198, 0.1);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    border-radius: 10px;
}

.title__cont {
    display: flex;
    align-items: center;
}

.sub_title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: 29px;
    text-align: center;
    padding-top: 20px;
}

.img__title {
    max-width: 160px;
    height: 50px;
    margin-right: 30px;
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
    display: flex;
    justify-content: center;
}

.credit__btn {
    width: 312px;
    height: 57px;
    margin-top: 20px;
}

.title__content__item {
    font-weight: 600;
    margin-bottom: 15px;
    color: #fff;
}

.content_li {
    max-width: 600px;
    padding: 50px ;
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

.sub__content__item::before {
    content: url(../local/templates/NewAsAvto/static/icons/blue__arr.svg);
    margin-right: 5px;
}

.sub__content {
    margin-left: 50px;
    background-color: rgba(0, 0, 0, 0.8);
    padding: 50px;
    -webkit-box-shadow: 0px 0px 100px 20px rgba(166, 166, 166, 0.36);
    -moz-box-shadow: 0px 0px 100px 20px rgba(166, 166, 166, 0.36);
    box-shadow: 0px 0px 100px 20px rgba(166, 166, 166, 0.36);
    border-radius: 10px;
}

.sub__content__item {
    font-size: 16px;
    line-height: calc(24/16);
    margin-bottom: 15px;
    color: #fff;
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

.flex {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
  
.content__stock {
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
    color: #000;
    padding: 0px 2px 2px 2px;
    font-weight: 300;
    font-size: 18px;
    line-height: calc(24/18);
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
  .btn__info:hover, .btn__info:focus, .btn__info:active {
    color: white;
  }
  .btn__info:hover:before, .btn__info:focus:before, .btn__info:active:before {
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
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    display: inline-block;
    vertical-align: middle;
    color: #000;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    position: relative;
    overflow: hidden;
    font-size: 20px;
    line-height: calc(24/20);
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
  .content__title:hover:before, .content__title:focus:before, .content__title:active:before {
    -webkit-transform: translateY(0);
    transform: translateY(0);
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
    content: url(../local/templates/NewAsAvto/static/icons/blue__arr.svg);
    margin-right: 5px;
}

.seo__text {
    font-size: 18px;
    line-height: calc(33/18);
    margin-bottom: 10px;
}


footer {
    background-color: #F8F8F8;
}

.wrapper__footer {
    display: flex;
    margin-top: 50px;
}

.info {
    margin-right: 10px;
    display: flex;
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

    .nav__item__link {
        font-size: 16px;
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

@media (min-width: 910px) and (max-width: 1024px) {
    .container_site {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
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

    .content_li {
        max-width: 495px;
        margin-right: 30px;
    }

    .form_traid-in {
        width: 370px;
        height: 610px;
    }

    .title {
        font-size: 20px;
    }

    .sub_title {
        font-size: 20px;
    }

    .label__traid-in {
        font-size: 14px;
    }

    .input__traid-in {
        font-size: 12px;
        width: 300px;
    }

    .checkbox__label {
        font-size: 14px;
    }

    .sub__title {
        margin-top: 30px;
        font-size: 14px;
    }

    .content__title {
        font-size: 14px;
    }

    .content__img {
        margin-top: 5px;
    }
    
    .btn__info {
        font-size: 14px;
    }

    #loadMore {
        font-size: 14px;
    }


    .background__credit {
        margin-top: 50px;
    }

    .checkbox__personal {
        padding-left: 125px;
    }

    .credit_calc {
        margin-right: 20px;
        width: 370px;
    }

    .credit__name {
        font-size: 14px;
    }

    .sub__content {
        width: 400px;
    }

    .input__credit {
        width: 300px;
    }
    
    .checkbox__credit {
        padding-left: 100px;
    }

    .credit__label {
        font-size: 14px;
    }
    
    .seo__title {
        font-size: 20px;
        margin-top: 50px;
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
        margin-top: 450px;
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


    .tabs__link__fl {
        margin-right: 25px;
        margin-bottom: 10px;
    }

    .header {
        margin-bottom: 10px;
        margin-left: 100px;
    }

    .nav {
        display: none;
    }

    .content_li {
        margin-right: 30px;
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

    .form_traid-in {
        width: 370px;
        height: 560px;
    }

    .sub_title {
        font-size: 18px;
    }

    .label__traid-in {
        font-size: 12px;
    }
    
    .input__traid-in {
        width: 245px;
        font-size: 12px;
        height: 40px;
    }

    .checkbox__personal {
        padding-left: 85px;
    }

    .checkbox__label {
        font-size: 12px;
    }

    .credit__btn {
        width: 230px;
        height: 40px;
    }
    
    .content_li {
        max-width: 410px;
        margin-right: 10px;
    }

    .title {
        margin-top: 30px;
        font-size: 20px;
    }

    .sub__title {
        margin-top: 30px;
        font-size: 14px;
    }

    .content__title {
        font-size: 14px;
    }

    .btn__info {
        font-size: 14px;
    }

    #loadMore {
        width: 180px;
        padding: 5px;
        font-size: 14px;
    }

    .content_li {
        padding: 20px;
    }

    .title__content__item {
        font-size: 14px;
        line-height: calc(22/14);
    }

    .content__item {
        font-size: 14px;
        line-height: calc(22/14); 
    }
    
    .sub__content {
        margin-left: 0px;
        padding: 20px;
    }

    .sub__content__item {
        font-size: 12px;
        line-height: calc(20/12);
    }

    .credit_calc {
        width: 370px;
        height: 495px;
        margin-right: 20px;
    }

    .credit__name {
        font-size: 18px;
    }

    .credit__name {
        font-size: 12px;
    }

    .field__credit {
        padding-right: 30px;
    }

    .input__credit {
        font-size: 12px;
        height: 40px;
        width: 260px;
    }

    .checkbox__credit {
        font-size: 12px;
        padding-left: 110px;
    }
    
    .traid__btn {
        width: 270px;
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
        width: 150px;
        height: 100px;
    }

    .tabs__link__fl {
        margin-right: 25px;
        margin-bottom: 10px;
    }

    .header {
        margin-bottom: 10px;
        margin-left: 55px;
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


    .tabs__nav-btn {
        padding: 5px 5px; 
    }

    .tabs__link__fl {
        margin-right: 20px;
    }

    .flex__cont {
        align-items: center;
        flex-direction: column;
    }

    .form_traid-in {
        margin-top: 20px;
        width: 360px;
        height: 560px;
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
        flex-direction: column;
    }

    .content__stock {
        width: 100%;
    }

    .model_catalog__title {
        font-size: 14px;
    }

    .tabs__item__fl {
        justify-content: center;
    }

    .title {
        margin-top: 30px;
        font-size: 20px;
    }

    .sub__title {
        font-size: 14px;
        margin-top: 20px;
    }

    .sub__content__item {
        font-size: 16px;
    }

    .content__title {
        font-size: 16px;
    }

    .btn__info {
        font-size: 14px;
    }

    #loadMore {
        font-size: 14px;
        padding: 5px;
    }

    .background__credit {
        margin-top: 50px;
    }
    
    .credit_calc {
        width: 370px;
        height: 495px;
        margin-bottom: 20px;
    }

    .credit__name {
        font-size: 18px;
    }

    .credit__name {
        font-size: 12px;
    }

    .field__credit {
        padding-right: 30px;
    }

    .input__credit {
        font-size: 12px;
        height: 40px;
        width: 285px;
    }

    .checkbox__credit {
        font-size: 12px;
        padding-left: 110px;
    }
    
    .traid__btn {
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
        width: 150px;
        height: 100px;
    }
    .tabs__link__fl {
        margin-right: 25px;
        margin-bottom: 10px;
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


    .header {
        margin-bottom: 10px;
        margin-left: 20px;
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

    .tabs__nav-btn {
        padding: 5px 5px; 
    }

    .tabs__link__fl {
        margin-right: 20px;
    }

    .flex__cont {
        align-items: center;
        flex-direction: column;
    }

    .form_traid-in {
        margin-top: 20px;
        width: 360px;
        height: 560px;
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
        width: 245px;
        font-size: 12px;
        height: 40px;
    }

    .title {
        margin-top: 30px;
        font-size: 20px;
    }

    .sub__title {
        font-size: 14px;
        margin-top: 25px;
    }

    .credit_calc {
        width: 275px;
        height: 495px;
        margin-bottom: 20px;
    }

    .credit__name {
        font-size: 12px;
    }

    .field__credit {
        padding-left: 20px;
    }

    .input__credit {
        width: 230px;
    }

    .checkbox__credit {
        padding-top: 15px;
        padding-left: 50px;
        font-size: 12px;
    }

    .traid__btn {
        width: 230px;
        height: 35px;
    }

    .sub__content__item {
        font-size: 14px;
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

    .content__title {
        font-size: 14px;
    }

    .btn__info {
        font-size: 14px;
    }

    .content__img {
        margin-top: 10px;
    }

    #loadMore {
        margin: 15px auto;
        padding: 5px;
        font-size: 14px;
    }

    .background__credit {
        margin-top: 50px;
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

    .flex {
        flex-direction: column;
    }

    .content__stock {
        width: 100%;
    }

    .model_catalog__title {
        font-size: 14px;
    }

    .model_catalog__price {
        font-size: 14px;
    }

    .tabs__item__fl {
        justify-content: center;
    }

    .wrapper__footer {
        font-size: 12px;
        flex-direction: column;
        align-items: center;
        margin-top: 450px;
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
            <div class="background">
                <div class="poster__container">
                    <div class="title__poster">
                        <div class="colors__poster">
                            <div class="color__poster">
                                <p class="title__poster__text">Chery - Fun to drive!</p>
                                <p class="title__desc__poster">Подберите автомобиль для себя, своей семьи и путешествий.</p>
                            </div>
                        </div>
                    </div>
                    <ul class="offer">
                        <li class="offer__item">Гарантия до 7 лет или 200 000 км. пробега</li>
                        <li class="offer__item">Австрийские двигатели ACTECO</li>
                        <li class="offer__item">Максимальный набор "зимнмих опций"</li>
                        <li class="offer__item">Семиместная конфигурация салона</li>
                    </ul>
                </div>
            </div>
            <div class="container_site">
                <div class="catalog__cont">
                    <div class="title__cont">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/CHERY.png" alt="" class="img__chery sub__title">
                    </div>
                    <ul class="catalog__list">
                        <li class="catalog__item__li"> 
                            <a href="./tiggo4/index.php" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tiggo4__tabs.png" alt=""></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 4</h3>
                                    <p class="model_catalog__price">от 1 124 900 руб.</p>
                                </div>
                            </a>
                        </li>
                        <li class="catalog__item__li">
                            <a href="../pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/7pro.png" alt=""></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 7pro</h3>
                                    <p class="model_catalog__price">от 1 719 900 руб.</p>
                                </div>
                            </a>
                        </li>
                        <li class="catalog__item__li">
                            <a href="../pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/8pro.png" alt=""></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 8</h3>
                                    <p class="model_catalog__price">от 1 401 990 руб.</p>
                                </div>
                            </a>
                        </li>
                        <li class="catalog__item__li">
                            <a href="../pages/card__auto.html" class="tabs__link__fl">
                                <div class="model_catalog__image"><img src="<?= SITE_TEMPLATE_PATH ?>/static/images/ultimate.png" alt=""></div>
                                <div class="tabs__item__desc">
                                    <h3 class="model_catalog__title">tiggo 8pro</h3>
                                    <p class="model_catalog__price">от 1 609 900 руб.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="background__fos">
                <div class="container_site">
                    <div class="flex__cont">
                        <div class="middle">
                            <ul class="content_li">
                                <li class="title__content__item">Тест-драйв - это отличная возможность попробовать автомобиль на дороге. Парк тестовых автомобилей наших дилерских центров действительно большой.</li>
                                <li class="content__item">Заполните форму записи на тест-драйв</li>
                                <li class="content__item">С Вами свяжется менеджер нашей компании для подтверждения даты и времени</li>
                                <li class="content__item">Приезжайте в назначенное время и испытывайте автомобиль!</li>
                            </ul>
                        </div>
                        <section class="form_traid-in">
                            <h2 class="sub_title" id="calculator">
                                Запись на Тест-драйв
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
                                        <label for="input_traid" class="label__traid-in">Выберите марку</label>
                                        <select name="DC" class="input__traid-in">
                                            <option value="s3" class="input__traid-in">CHERY</option>
                                           </select>
                                    </div>
                                    <div class="field">
                                        <label for="input_traid" class="label__traid-in">Время записи</label>
                                        <select name="DC" class="input__traid-in">
                                            <option value="s1" class="input__traid-in">TIGGO 4</option>
                                            <option value="s2" class="input__traid-in">TIGGO 7 PRO</option>
                                            <option value="s5" class="input__traid-in">TIGGO 8</option>
                                            <option value="s6" class="input__traid-in">TIGGO 8 PRO</option>
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
                <h2 class="title" id="exterier">Акции</h2>
                <div class="container_site">
                    <p class="sub__title">Получите набор преимуществ при покупке нового автомобиля! Привлекательные условия кредитования с возможностью выбрать индивидуальные условия, дополнительные выгоды при использовании программы Trade-in, дополнительные скидки, бонусы и подарки. Мы делаем всё, чтобы покупка автомобиля в наших автосалонах была максимально выгодной и приятной для Вас!</p>
                    <ul class="flex">
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="#" class="btn__info">Узнать больше</a>
                              </div>
                        </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                          <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="" class="content__img">
                          <div class="content__btn">
                            <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                          </div>
                        </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                          <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="" class="content__img">
                          <div class="content__btn">
                            <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                          </div>
                        </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                        </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/first_pay.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/jolion.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                      <li class="content__stock">
                          <a href="./stock__page.html"><p class="content__title">Скидка по Traid-in</p>
                              <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/traid__in.jpg" alt="" class="content__img">
                              <div class="content__btn">
                                <a href="./stock__page.html" class="btn__info">Узнать больше</a>
                              </div>
                    </a>
                    </li>
                    </ul>
                    <a href="#" id="loadMore">Посмотреть ещё</a>
                </div>
            </div>
            <div class="container_site">
                <p class="seo__title">Эксклюзивный официальный дилер Chery в Самарской и Саратовской областях</p>
                <p class="seo__sub_title">Компания Chery Automobile Co., Ltd была основана в 1997 году по инициативе мэрии города Уху китайской провинции Аньхой, акционерами выступили пять государственных компаний и холдингов этой провинции. До сих пор 90% акций принадлежат государству.</p>
                <p class="seo__sub_title">В состав Chery Automobile входят 6 автомобильных заводов и 11 сборочных производств по всему миру. Компания также создала лабораторию для проведения собственных НИОКР и тестирования совместно с американской компанией MTS Systems — мировым лидером в тестировании автомобилей. Продукты и исследования MTS Systems используются такими компаниями как Mercedes-Benz, General Motors, Ford, Volkswagen, Boeing и Airbus.</p>
                <p class="seo__sub_title">Компания «АсАвто» является ЭКСКЛЮЗИВНЫМ официальным дилером автомобилей марки Chery в Самарской и Саратовской областях. За покупкой и обслуживанием Chery  - только в «АсАвто»!</p>
                <p class="seo__text">Кроссоверы Chery пользуются большой популярностью в России, продажи растут из года в год. Владельцы отмечают следующие преимущества автомобилей:</p>
                <ul>
                    <li class="seo__list-item">высокий уровень комфорта,</li>
                    <li class="seo__list-item">динамичные и современные двигатели,</li>
                    <li class="seo__list-item">богатую комплектацию и обилие опций даже в базовых комплектациях,</li>
                    <li class="seo__list-item">адаптацию автомобилей к российским условиям, в частности наличие «зимнего пакета»: обогревов сидений, руля, ветрового стекла,</li>
                    <li class="seo__list-item">высокую надёжность в целом и отличную стойкость кузова к коррозии.</li>
                </ul>
                <p class="seo__text">Недорогую стоимость технического обслуживания,
                    Компания «АсАвто» предлагает к покупке актуальные модели Chery:</p>
                <ul>
                    <li class="seo__list-item">Tiggo 4. Компактный кроссовер с просторным салоном и набором smart-опций. Доступен как с МКПП, так и с АКПП. </li>
                    <li class="seo__list-item">Tiggo 7PRO. Цифровая зона управления с тремя дисплеями - главная особенность интерьера кроссовера.</li>
                    <li class="seo__list-item">Tiggo 8. Семиместный салон автомобиля открывает широкие возможности его использования, а мощный и экономичный двигатель сделает каждую поездку приятной и безопасной.</li>
                    <li class="seo__list-item">Tiggo 8PRO. Роскошный интерьер с семью сиденьями сочетается с продвинутыми опциями: адаптивный круиз-контроль, панорамная сдвижная крыша и, разумеется, фирменный «зимний пакет» Chery.</li>
                </ul>
                <p class="seo__text">Любой автомобиль Chery можно приобрести по программе Trade-in, обменяв свой автомобиль на новый. Предусмотрены дополнительные скидки.</p>
                <p class="seo__text">Широкий выбор кредитных программ позволят выгодно купить кроссоверы Tiggo даже без первоначального взноса и сроком до 8 лет.</p>
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