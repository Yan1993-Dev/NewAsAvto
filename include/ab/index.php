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

  .title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    margin-top: 15px;
    margin-bottom: 35px;
    text-align: center;
    font-size: 24px;
    line-height: calc(28/24);
}

  
.background {
    background-image: url(../local/templates/NewAsAvto/static/images/about__new.jpg);
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


.categoty {
    margin-top: 50px;
}

.category__list {
    display: -webkit-flex;
    display: -webkit-box;
    display: -moz-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.category__image {
    width: 150px;
    opacity: 1;
    transition: all 500ms ease-in-out;
}

.category__image:hover {
    opacity: 0.5;
}


/* зум изображения */

.minimized {
    width: 300px;
    cursor: pointer;
    border: 1px solid #FFF;
  }
  .minimized:hover {
    border: 1px solid yellow;
  }
  /* увеличенная картинка */
  #magnify {
    display: none;
    position: fixed;
    max-width: 800px;
    height: auto;
    z-index: 9999;
  }
  #magnify img {
    width: 55%;
  }
  /* затемняющий фон */
  #overlay {
    display: none;
    background: #000;
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: 0.5;
    z-index: 9990;
  }
  /* кнопка закрытия */
  #close-popup {
    width: 30px;
    height: 30px;
    background: #FFFFFF;
    border: 1px solid #AFAFAF;
    border-radius: 15px;
    cursor: pointer;
    position: absolute;
    top: 15px;
    right: 15px;
  }
  #close-popup i {
    width: 30px;
    height: 30px;
    background: url(https://codernote.ru/files/cross.png) no-repeat center center;
    background-size: 16px 16px;
    display: block;
  }
  @keyframes rota {
   25% { transform: rotate(360deg); }
  }
  #close-popup:hover {
    animation: rota 4s infinite normal;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
  }

.category__item {
    min-height: 270px;
    max-width: 280px;
    margin: 0px 25px 0px 10px;
    position: relative;
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
    text-align: center;
    padding: 15px 30px;
    margin: 5px;
    width: 230px;
    background-color: #fff;
    border: 0;
    cursor: pointer;
    font-size: 20px;
}

button .tabs__nav-btn:active {
    background-color: #000;
}

.sub__tabs__item__about {
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

  .tab-radio:checked + .tab-content {
    display: block;
  }

  .tab-radio:checked + .sub-tab-content {
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

.lead {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.lead__list {
    display: flex;
    flex-direction: column;
    margin-bottom: 40px;
    padding: 5px;
}

.lead__container {
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 300px;
    height: 300px;
    margin-bottom: 30px;
}

.photo__lead {
    border-radius: 10px;
    max-width: 250px;
    height: 250px;
}

.lead__container__desc {
    display: flex;
    align-items: center;
    flex-direction: column;
    margin-top: 20px;
}

.lead__title {    
    font-size: 16px;
    line-height: calc(20/16);
    color: #000;
    text-transform: uppercase;
    text-align: center;
}

.lead__desc {
    color: #000;
    font-size: 14px;
    line-height: calc(24/14);
    text-align: center;
}

.email__lead {
    color: black;
    font-size: 14px;
    margin-top: 5px;
}

.content__block__container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.content__block__desc {
    display: flex;
    flex-direction: column;
}

.content__adress {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    color: #000;
    font-size: 20px;
    line-height: calc(32/20);
    margin-bottom: 10px;
}

.content__adress::before {
    content: '';
    display: inline-block;
    width: 13px;
    height: 13px;
    margin-left: -23px;
    margin-right: 10px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    vertical-align: middle;
    background-image: url(../local/templates/NewAsAvto/static/images/map.svg);
}

.content__tel {
    color: #000;
    font-size: 18px;
    line-height: calc(28/18);
    margin-bottom: 10px;
}

.content__tel::before {
    content: '';
    background-image: url(../local/templates/NewAsAvto/static/images/phone.svg);
    display: inline-block;
    width: 13px;
    height: 13px;
    margin-left: -23px;
    margin-right: 10px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    vertical-align: middle;
}

.email__block {
    color: #000;
    font-size: 18px;
    line-height: calc(28/18);
}

.email__block::before {
    content: '';
    background-image: url(../local/templates/NewAsAvto/static/icons/envelopes.png);
    display: inline-block;
    width: 13px;
    height: 13px;
    margin-left: -23px;
    margin-right: 10px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    vertical-align: middle;
}

.content__lead__container {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.content__lead__block {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.lead__title__block {
    color: #000;
    font-size: 16px;
    line-height: calc(28/16);
    margin-bottom: 10px;
    border-bottom: 1px solid;
}

.lead__desc__block {
    color: #000;
    font-size: 14px;
    line-height: calc(26/14);
    margin-bottom: 10px;
}

.title__block__image {
    border-radius: 10px;
    max-width: 710px;
    height: 300px;
    margin-right: 50px;
}

.seo__title {
    font-family: 'TacticSans-Reg';
    src: url(../static/fonts/TacticSans-Reg.otf);
    font-size: 24px;
    line-height: calc(45/24);
    text-align: center;
    font-weight: 600;
    margin-bottom: 20px;
}

.seo__sub_title {
    font-size: 18px;
    line-height: calc(33/18);
    text-align: center;
    margin-bottom: 25px;
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


/* стили для открытия попапа */

.thanks_open {
    display: block;
    z-index: 60;
}

.thanks_request__btn:focus {
    opacity: .3;
    z-index: 15;
}

@media (min-width: 1395px) and (max-width: 1510px) {
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

@media (min-width: 1024px) and (max-width: 1395px) {
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

    .input__traid-in {
        width: 350px;
    }

    .checkbox__personal {
        padding-left: 140px;
    }

    .content_li {
        margin-right: 40px;
    }

    .input__traid-in {
        width: 395px;
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
        font-size: 10px;
        line-height: calc(20/12);    
        margin-right: 10px;
        padding-right: 20px;
        padding-left: 20px;
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

    .flex__cont {
        justify-content: space-around;
    }

    .content__adress {
        font-size: 16px;
    }

    .content__tel {
        font-size: 16px;
    }

    .email__block {
        font-size: 16px;
    }

    .title__block__image {
        max-width: 480px;
        height: 265px;
        margin-right: 10px;
    }

    .photo__lead {
        max-width: 200px;
        height: 200px;
    }

    .lead__title__block {
        color: #000;
        font-size: 14px;
        line-height: calc(28/18);
        margin-bottom: 0px;
    }

    .lead__desc__block {
        color: #000;
        text-align: center;
        font-size: 14px;
        line-height: calc(26/16);
        margin-bottom: 0px;
    }    
    
    .seo__title {
        font-size: 20px;
        margin-top: 50px;
    }

    .seo__sub_title {
        font-size: 14px;
        margin-bottom: 30px;
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

    .tabs__link__fl {
        margin-right: 25px;
        margin-bottom: 10px;
    }

    .header {
        margin-left: 100px;
        margin-bottom: 10px;
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

    .lead__container {
        margin-bottom: 10px;
    }

    .content__lead__container {
        flex-wrap: wrap;
    }

    .lead__list {
        margin-bottom: 10px;
    }

    .photo__lead {
        width: 140px;
        height: 140px;
    }

    .block__lead {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 10px;
    }

    .lead__title__block {
        font-size: 12px;
        text-align: center;
        margin-bottom: 0px;
    }

    .lead__desc__block {
        text-align: center;
        font-size: 12px;
        margin-bottom: 0px;
    }

    .email__lead {
        font-size: 12px;
    }

    .title__block__image {
        max-width: 440px;
        height: 200px;
        margin-right: 30px;
    }

    .content__adress {
        font-size: 12px;
    }

    .content__tel {
        font-size: 12px;
    }

    .email__block {
        font-size: 12px;
    }

    .seo__title {
        font-size: 20px;
        margin-top: 50px;
    }

    .seo__sub_title {
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
        margin-left: 55px;
        margin-bottom: 10px;
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

    .offer__item {
        width: 320px;
    }
    
    .tabs__nav {
        flex-wrap: wrap;
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

    .content__block__container {
        align-items: center;
        flex-direction: column;
    }

    .lead__container {
        margin-bottom: -20px;
    }
    
    .seo__title {
        font-size: 18px;
        margin-top: 50px;
    }

    .seo__sub_title {
        font-size: 16px;
    }

    .block__lead {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 10px;
    }

    .lead__title__block {
        font-size: 12px;
        margin-bottom: 0px;
    }

    .lead__desc__block {
        font-size: 12px;
        margin-bottom: 0px;
    }

    .email__lead {
        font-size: 12px;
    }

    .content__adress {
        font-size: 18px;
    }

    .content__tel {
        font-size: 16px;
    }

    .email__block {
        font-size: 16px;
    }

    .content__lead__container {
        flex-wrap: wrap;
        align-items: center;
    }

    .photo__lead {
        width: 150px;
        height: 150px;
    }
    
    .offer {
        margin-left: 0%;
    }

    .offer__item {
        padding: 10px;
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

    .header {
        margin-left: 20px;
        margin-bottom: 10px;
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
    }

    .work__tech__mobile {
        font-size: 16px;
        line-height: calc(24/16);
        margin-bottom: 20px;
    }

    .text__title {
        font-size: 16px;
    }

    .lead__container {
        margin-bottom: 0px;
    }

    .lead__list {
        margin-bottom: 0px;
    }

    .photo__lead {
        width: 140px;
        height: 140px;
    }

    .content__block__container {
        flex-direction: column;
    }

    .title {
        margin-top: 0px;
    }

    .title__block__image {
        max-width: 415px;
        height: 150px;
        margin-right: 0px;
    }

    .content__adress {
        font-size: 12px;
    }

    .content__tel {
        font-size: 12px;
    }

    .email__block {
        font-size: 12px;
    }

    .content__lead__container {
        flex-wrap: wrap;
    }

    .block__lead {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 10px;
    }

    .lead__title__block {
        font-size: 12px;
        margin-bottom: 0px;
    }

    .lead__desc__block {
        font-size: 12px;
        margin-bottom: 0px;
    }

    .email__lead {
        font-size: 12px;
        margin-bottom: 0px;
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

    .sub__tabs__item__about {
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

    .seo__title {
        font-size: 16px;
        margin-top: 50px;
    }

    .seo__sub_title {
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

</style>

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
                            <label class="sub__tabs__item__about" for="sub-tab-1">
                                <p class="seo__title">Крупнейший официальный дилер китайских автомобилей в Поволжье Группа компаний «АсАвто»</p>
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
                <input class="tab-radio" id="main-tab-2" name="main-group" type="radio" />
                <div class="tab-content">
                    <div class="sub-tabs-container">
                        <label class="sub__tabs__item__about" for="sub-tab-111">
                            <ul class="lead">
                                <li class="lead__list">
                                    <div class="lead__photo__list">
                                        <div class="lead__container">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/alekseeva.jfif" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/volkova.jfif" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/balashova.png" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/boldyrew.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/rastopshiw.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/erachenko.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/alla.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/sharay.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/ogay.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/dudnikova.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/doronin.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/klimenko.jpg" alt="photo__lead" class="photo__lead">
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
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/markov.jpg" alt="photo__lead" class="photo__lead">
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
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/tlt__tim.jpg" alt="" class="title__block__image">
                                    <div class="content__block__desc">
                                        <div class="content__adress">пос. Тимофеевка (г. Тольятти), ул. Солнечная 1А</div>
                                        <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                        <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                    </div>
                                </div>
                                <ul class="content__lead__container">
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/hil.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Хиль Ирина Ивановна</div>
                                            <div class="lead__desc__block">Директор Дилерского центра</div>
                                            <a href="mailto:ikhil@asavtomotors.ru" class="email__lead">ikhil@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/lowpatin.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Лопатин Александр</div>
                                            <div class="lead__desc__block">Руководитель отдела продаж</div>
                                            <a href="mailto:alopatin@asavtomotors.ru" class="email__lead">alopatin@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/dvornikow.jpg" alt="" class="photo__lead">
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
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/samara__nth.jpg" alt="" class="title__block__image">
                                    <div class="content__block__desc">
                                        <div class="content__adress">г. Самара, ул. Алма-Атинская 87</div>
                                        <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                        <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                    </div>
                                </div>
                                <ul class="content__lead__container">
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/vecher.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Вечер Ольга Ивановна</div>
                                            <div class="lead__desc__block">Директор Дилерского центра</div>
                                            <a href="mailto:Ovecher@asavtomotors.ru" class="email__lead">Ovecher@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/tuguzbaeva.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Тугузбаева Наиля Ивановна</div>
                                            <div class="lead__desc__block">Руководитель отдела продаж</div>
                                            <a href="mailto:ntuguzbaeva@asavtomotors.ru" class="email__lead">ntuguzbaeva@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/grishin.jpg" alt="" class="photo__lead">
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
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/samara__east.jpg" alt="" class="title__block__image">
                                    <div class="content__block__desc">
                                        <div class="content__adress">г. Самара, Аэропортовское шоссе 1Ж</div>
                                        <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                        <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                    </div>
                                </div>
                                <ul class="content__lead__container">
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/maks.jfif" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Иванов Максим </div>
                                            <div class="lead__desc__block">Директор Дилерского центра</div>
                                            <a href="mailto:ivanovm@asavtomotors.ru" class="email__lead"> ivanovm@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/sbrodowa.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Сбродова Евгения Ивановна</div>
                                            <div class="lead__desc__block">Руководитель отдела продаж Chery</div>
                                            <a href="mailto:esbrodova@asavtomotors.ru" class="email__lead">esbrodova@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/potroshkov.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Потрошков Михаил Иванович</div>
                                            <div class="lead__desc__block">Руководитель отдела продаж Geely</div>
                                            <a href="mailto:mpotroshkov@asavtomotors.ru" class="email__lead">mpotroshkov@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/varfolomey.jpg" alt="" class="photo__lead">
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
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/samara__south.jpg" alt="" class="title__block__image">
                                    <div class="content__block__desc">
                                        <div class="content__adress">г. Самара, Южное шоссе 12а, строение 4</div>
                                        <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                        <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                    </div>
                                </div>
                                <ul class="content__lead__container">
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/belkin.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Белкин Антон Иванович</div>
                                            <div class="lead__desc__block">Директор Дилерского центра</div>
                                            <a href="mailto:abelkin@asavtomotors.ru" class="email__lead">abelkin@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/ulesov.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Улесов Виталий Иванович</div>
                                            <div class="lead__desc__block">Руководитель отдела продаж</div>
                                            <a href="mailto:vulesov@asavtomotors.ru" class="email__lead">vulesov@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/dvornikow.jpg" alt="" class="photo__lead">
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
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/saratow__chery.jpg" alt="" class="title__block__image">
                                    <div class="content__block__desc">
                                        <div class="content__adress">г. Саратов, Соколовая гора, 4</div>
                                        <div class="content__tel"><a href="tel:+78462151228" class="content__tel">+7 (8462) 15-12-28</a></div>
                                        <a href="mailto:asavtomotors.ru@yandex.ru" class="email__block">asavtomotors.ru@yandex.ru</a>
                                    </div>
                                </div>
                                <ul class="content__lead__container">
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/zaharov.jpg" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Захаров Алексей Иванович</div>
                                            <div class="lead__desc__block">Директор Дилерского центра</div>
                                            <a href="mailto:azakharov@asavtomotors.ru" class="email__lead">azakharov@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/shatylov.jfif" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Шатилов Денис Ивановна</div>
                                            <div class="lead__desc__block">Руководитель отдела продаж Chery</div>
                                            <a href="mailto:dshatilov@asavtomotors.ru" class="email__lead">dshatilov@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/pytishev.jfif" alt="" class="photo__lead">
                                        <div class="content__lead__block">
                                            <div class="lead__title__block">Пятышев Игорь Иванович</div>
                                            <div class="lead__desc__block">Руководитель отдела продаж Geely</div>
                                            <a href="mailto:ipyatyshev@asavtomotors.ru" class="email__lead">ipyatyshev@asavtomotors.ru</a>
                                        </div>
                                    </li>
                                    <li class="block__lead">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/images/photo/grishin.jpg" alt="" class="photo__lead">
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
        <input class="tab-radio" id="main-tab-3" name="main-group" type="radio" />
        <div class="tab-content">
            <div class="sub-tabs-container">
                <!-- NOTE: due to id note below, remember to match the for-->
                <label class="sub__tabs__item__about" for="sub-tab3-1">
                    <div class="category">
                        <ul class="category__list">
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif.jpg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif___chery.jpg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif__jac.jpg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif__geely.jpg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/tm__chery.jpg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/best__chery__sale.jpeg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif__d.jpeg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/sertif__haval.jpg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                            <li class="category__item content__lead__block">
                                <div class="image__wrapper">
                                    <img class="category__image minimized" src="<?= SITE_TEMPLATE_PATH ?>/static/images/changan__sertif.jpg" alt="feedback">
                                </div>
                                <div class="category__title__wrap lead__title__block">Дилерский центр: Самара</div>
                            </li>
                        </ul>
                    </div>
                </label>

            </div>
        </div>
        <div class="container_site">
            <input class="tab-radio" id="main-tab-4" name="main-group" type="radio" />
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
                        <p class="seo__sub_title">Дальше – больше! Вперёд к Новым вершинам!</p>
                    </label>
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