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
  line-height: calc(18 / 12);
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
  line-height: calc(18 / 12);
  text-align: center;
}

.work__title {
  color: #a6a6a6;
}

.wrapper__phone {
  display: flex;
  flex-direction: column;
  padding-left: 20px;
}

.phone {
  font-size: 18px;
  line-height: calc(32 / 18);
  margin-top: -40px;
  margin-bottom: 10px;
  text-align: center;
  color: #000;
}

.rev__phone {
  padding-top: 5px;
  margin-bottom: 10px;
  background-color: #47a0ed;
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
  line-height: calc(24 / 16);
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
  background-color: #47a0ed;
}

.nav__item__link {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 20px;
  padding-right: 20px;
  margin-right: 25px;
  align-items: center;
  color: #fff;
  font-size: 18px;
  line-height: calc(33 / 18);
}

.checked__link {
  background-color: #2d7cc0;
}

.nav__item__link:hover {
  transition: 0.3s;
  background-color: #2d7cc0;
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
  background-color: #47a0ed;
  margin-top: 5px;
  margin-right: -20px;
  border-radius: 10px;
}
nav ul ul ul {
  position: absolute;
}

.background__poster {
  background-image: url(../local/templates/NewAsAvto/static/images/news__top.jpg);
  padding: 40px 40px 40px 40px;
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

.title {
  font-family: "TacticSans-Reg";
  src: url(../static/fonts/TacticSans-Reg.otf);
  margin-top: 50px;
  text-align: center;
  font-size: 24px;
  line-height: calc(28 / 24);
}

.title__poster__text {
  font-family: "TacticSans-Reg";
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

.title__poster__contain {
  font-family: "TacticSans-Reg";
  src: url(../static/fonts/TacticSans-Reg.otf);
  font-size: 24px;
  padding: 10px;
  border-radius: 10px;
  margin-top: 20px;
  margin-bottom: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: 29px;
  text-align: center;
  background-color: #dddddd;
}

.text__poster {
  font-family: "TacticSans-Reg";
  src: url(../static/fonts/TacticSans-Reg.otf);
  font-size: 24px;
  font-style: normal;
  font-weight: 600;
  line-height: 29px;
  text-align: center;
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

.main_title {
  font-family: "TacticSans-Reg";
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

.slider_title_one {
  text-align: center;
  margin-top: 50px;
  margin-bottom: 50px;
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
  flex-direction: row;
  justify-content: center;
}

.category__item {
  min-height: 270px;
  max-width: 280px;
  margin: 0 10px 100px 20px;
}

.category__image {
  width: 100%;
  margin-bottom: 30px;
  opacity: 1;
  transition: all 500ms ease;
}

.category__image:hover {
  opacity: 0.5;
}

.category__item:last-child {
  margin-right: 25px;
}

.date__info {
  display: flex;
  color: #ffffff;
  margin-bottom: 25px;
}

.date__info-item {
  background: #3482c6;
  padding: 2px;
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

.category__title__wrap {
  margin-bottom: 25px;
}

.category__desc {
  margin-bottom: 25px;
}

.category__info {
  font-weight: 600;
  color: #3482c6;
  border-bottom: 1px solid #3482c6;
  opacity: 1;
  transition: all 500ms ease;
}

.category__info:hover {
  opacity: 0.5;
}

.sale__est {
  margin-bottom: 50px;
}

.title__content__item {
  font-weight: 600;
  margin-bottom: 15px;
  color: #fff;
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

.content__item::before {
  content: url(../local/templates/NewAsAvto/static/icons/blue__arr.svg);
  margin-right: 5px;
}

.background__fos {
  padding: 40px 0;
  background-image: linear-gradient(
      black,
      transparent 80%,
      transparent 20%,
      black
    ),
    url(../local/templates/NewAsAvto/static/images/3_stocks__fos.jpg);
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
  background-color: #f8fafd;
  border: 1px solid rgba(52, 130, 198, 0.1);
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 10px;
}

.sub_title {
  font-family: "TacticSans-Reg";
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
  background: #ffffff;
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
  background: #ffffff;
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

.seo__title {
  font-family: "TacticSans-Reg";
  src: url(../static/fonts/TacticSans-Reg.otf);
  font-size: 24px;
  line-height: calc(45 / 24);
  margin-top: 100px;
  text-align: center;
  font-weight: 600;
  margin-bottom: 20px;
}

.seo__sub_title {
  font-size: 18px;
  line-height: calc(33 / 18);
  text-align: center;
  margin-bottom: 50px;
}

.seo__list__title {
  padding-left: 60px;
  padding-right: 60px;
  margin-bottom: 10px;
  font-size: 18px;
  line-height: calc(33 / 18);
}

.seo__list-item {
  padding-left: 95px;
  margin-bottom: 10px;
  font-size: 16px;
  line-height: calc(33 / 16);
}

.seo__list-item::before {
  content: url(../local/templates/NewAsAvto/static/icons/blue__arr.svg);
  margin-right: 5px;
}

.seo__text {
  font-size: 18px;
  line-height: calc(33 / 18);
  margin-bottom: 10px;
}

.wrapper__footer {
  display: flex;
  margin-top: 50px;
}

.info {
  margin-right: 10px;
}

.info__item__title {
  font-family: "TacticSans-Reg";
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
  line-height: calc(32 / 18);
  margin-top: -10px;
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

.rev__phone__footer {
  padding-top: 5px;
  margin-bottom: 10px;
  background-color: #47a0ed;
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
  line-height: calc(24 / 16);
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
  background-color: #f8fafd;
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
  font-family: "TacticSans-Reg";
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
  opacity: 0.5;
  z-index: 10;
}

.popup_drive__btn:focus {
  opacity: 0.3;
  z-index: 10;
}

.popup_overlay {
  display: none;
  background: #3482c6;
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
  width: 400px;
  height: 300px;
  top: 250px;
  position: fixed;
  border-radius: 10px;
  background-color: #3482c6;
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
  opacity: 0.5;
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
  opacity: 0.3;
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
    max-width: 1035px;
    padding: 0 50px;
  }

  .nav__item__link {
    margin-right: 25px;
    font-size: 16px;
  }
}

@media (min-width: 1020px) and (max-width: 1261px) {
  .container_site {
    max-width: 975px;
    padding: 0 20px;
  }

  .wrapper__menu {
    margin-right: 768px;
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
    line-height: calc(26 / 14);
  }

  .tabs__link__fl {
    margin-right: 40px;
  }

  .footer__section {
    margin-right: 25px;
  }
}

@media (min-width: 910px) and (max-width: 1020px) {
  .container_site {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .wrapper__menu {
    margin-right: 548px;
  }

  .adress {
    display: flex;
    align-items: center;
    text-align: center;
    font-size: 12px;
    line-height: calc(18 / 12);
    flex-direction: column;
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
    line-height: calc(20 / 12);
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

  .container__descrip {
    align-items: center;
    flex-direction: column;
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

  .flex__cont {
    justify-content: space-around;
  }

  .form_traid-in {
    width: 370px;
  }

  .slider_title_one {
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .category__item {
    margin: 0 10px 50px 20px;
  }

  .date__info-item {
    font-size: 12px;
  }

  .category__title {
    font-size: 14px;
  }

  .category__desc {
    font-size: 12px;
  }

  .category__info {
    font-size: 10px;
  }

  .category__image {
    margin-bottom: 10px;
  }

  .date__info {
    margin-bottom: 10px;
  }

  .category__title__wrap {
    margin-bottom: 10px;
  }

  .auto {
    height: 290px;
    max-width: 400px;
  }

  .auto__title {
    font-size: 14px;
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

  .input__traid-in {
    width: 305px;
  }

  .checkbox__personal {
    padding-left: 105px;
  }

  .popup__btn {
    font-size: 12px;
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
    line-height: calc(18 / 12);
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
    background: #47a0ed;
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
    color: #ffffff;
    font-size: 18px;
    line-height: calc(32 / 18);
  }

  .phone__mobile {
    font-size: 16px;
    line-height: calc(32 / 16);
    color: #fff;
  }

  .mobile_phone_btn {
    display: block;
  }

  .mob__phone {
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    background-color: #47a0ed;
    display: inline-block;
    color: #47a0ed;
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
    color: #47a0ed;
  }

  .work__title__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
    color: white;
  }

  .work__saloon__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
    color: white;
  }

  .work__tech__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
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

  .text__title {
    font-size: 16px;
  }

  .title__poster__text {
    font-size: 14px;
    line-height: calc(20 / 14);
  }

  .title__desc__poster {
    font-size: 12px;
    line-height: calc(18 / 12);
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

  .flex__cont {
    align-items: center;
    flex-direction: column;
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

  .slider_title_one {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .slider_title_one::after {
    width: 32%;
  }

  .category__item {
    margin: 0 10px 50px 5px;
  }

  .category__image {
    margin-bottom: 5px;
  }

  .date__info {
    margin-bottom: 5px;
  }

  .date__info-item {
    font-size: 12px;
  }

  .category__title {
    font-size: 14px;
  }

  .category__title__wrap {
    margin-bottom: 10px;
  }

  .category__desc {
    font-size: 12px;
    margin-bottom: 5px;
  }

  .category__info {
    font-size: 10px;
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
  }

  .form_traid-in {
    margin-top: 20px;
    width: 360px;
    height: 490px;
  }

  .sub_title {
    font-size: 18px;
  }

  .label__traid-in {
    font-size: 12px;
  }

  .input__traid-in {
    width: 240px;
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

  .popup__btn {
    font-size: 12px;
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

  .info {
    margin-right: 0px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: flex;
    flex-direction: column;
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
    line-height: calc(18 / 12);
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
    display: flex;
    flex-direction: column;
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
    background: #47a0ed;
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
    color: #ffffff;
    font-size: 18px;
    line-height: calc(32 / 18);
  }

  .phone__mobile {
    font-size: 16px;
    line-height: calc(32 / 16);
    color: #fff;
  }

  .mobile_phone_btn {
    display: block;
  }

  .mob__phone {
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    background-color: #47a0ed;
    display: inline-block;
    color: #47a0ed;
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
    color: #47a0ed;
  }

  .work__title__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
    color: white;
  }

  .work__saloon__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
    color: white;
  }

  .work__tech__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
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
    line-height: calc(22 / 14);
  }

  .title__desc__poster {
    font-size: 12px;
    line-height: calc(18 / 12);
  }

  .offer {
    margin-left: 0%;
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

  .flex__cont {
    align-items: center;
    flex-direction: column;
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

  .slider_title_one {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .slider_title_one::after {
    width: 32%;
  }

  .category__item {
    margin: 0 10px 50px 5px;
  }

  .category__image {
    margin-bottom: 5px;
  }

  .date__info {
    margin-bottom: 5px;
  }

  .date__info-item {
    font-size: 12px;
  }

  .category__title {
    font-size: 14px;
  }

  .category__title__wrap {
    margin-bottom: 10px;
  }

  .category__desc {
    font-size: 12px;
    margin-bottom: 5px;
  }

  .category__info {
    font-size: 10px;
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
  }

  .form_traid-in {
    margin-top: 20px;
    width: 360px;
    height: 490px;
  }

  .sub_title {
    font-size: 18px;
  }

  .label__traid-in {
    font-size: 12px;
  }

  .input__traid-in {
    width: 300px;
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

  .popup__btn {
    font-size: 12px;
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
    max-width: 315px;
    padding: 0 5px;
  }

  .adress {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    font-size: 12px;
    line-height: calc(18 / 12);
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
    background: #47a0ed;
    height: 100vh;
    width: 100%;
    padding: 30px;
    display: flex;
    justify-content: space-between;
  }

  .nav__item__link__mobile {
    color: #ffffff;
    font-size: 18px;
    line-height: calc(32 / 18);
  }

  .phone__mobile {
    font-size: 16px;
    line-height: calc(32 / 16);
    color: #fff;
  }

  .mobile_phone_btn {
    display: block;
  }

  .mob__phone {
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    background-color: #47a0ed;
    display: inline-block;
    color: #47a0ed;
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
    color: #47a0ed;
  }

  .work__title__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
    color: white;
  }

  .work__saloon__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
    color: white;
  }

  .work__tech__mobile {
    font-size: 16px;
    line-height: calc(24 / 16);
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
    line-height: calc(22 / 14);
  }

  .title__desc__poster {
    font-size: 12px;
    line-height: calc(18 / 12);
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

  .text__poster {
    font-size: 16px;
  }

  .sub_title {
    font-size: 20px;
  }

  .label__traid-in {
    font-size: 12px;
  }

  .slider_title_one::after {
    width: 30%;
  }

  .slider_title_one {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .category__item {
    margin: 0 10px 40px 10px;
  }

  .category__image {
    margin-bottom: 10px;
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
  }

  .category__desc {
    margin-bottom: 10px;
    font-size: 12px;
  }

  .category__info {
    font-size: 10px;
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

  .content__item {
    font-size: 12px;
  }

  .flex__cont {
    align-items: center;
    flex-direction: column;
  }

  .content_li {
    padding: 10px;
  }

  .form_traid-in {
    margin-top: 20px;
    width: 360px;
    height: 490px;
  }

  .input__traid-in {
    width: 245px;
    font-size: 12px;
    height: 40px;
  }

  .checkbox__personal {
    font-size: 12px;
    padding-left: 85px;
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
<main class="main">
      <div class="background__poster">
        <div class="poster__container">
          <div class="title__poster">
            <div class="colors__poster">
              <div class="color__poster">
                <p class="title__poster__text">
                  Актуальные новости компании «АсАвто» и мира китайских
                  автомобилей.
                </p>
                <p class="title__desc__poster">
                  Большая компания - множество событий и новостей. Следите за
                  ними и получайте интересную и важную информацию первыми!
                </p>
              </div>
            </div>
          </div>
          <ul class="offer">
            <li class="offer__item">Новости Группы компаний «АсАвто»</li>
            <li class="offer__item">Новости мира Chery</li>
            <li class="offer__item">Новости бренда EXEED</li>
            <li class="offer__item">Новости компании Geely</li>
            <li class="offer__item">Новости мира китайских автомобилей</li>
          </ul>
        </div>
      </div>
      <div class="container_site">
        <div class="title__poster__contain">
          <h1 class="text__poster" id="calculator">Новости нашей компании</h1>
        </div>
        <div class="category">
          <ul class="category__list">
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>

            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
            <li class="category__item">
              <a href="./news__card.html"
                ><img
                  class="category__image"
                  src="<?= SITE_TEMPLATE_PATH ?>/static/images/big.jpg"
                  alt=""
              /></a>
              <div class="date__info">
                <p class="date__info-item">18.08.2021</p>
              </div>
              <div class="category__title__wrap">
                <a href="./news__card.html" class="category__title"
                  >СТАРТ ПРОДАЖ КРОССОВЕРА CHERY TIGGO 4 В НОВЫХ
                  КОМПЛЕКТАЦИЯХ</a
                >
              </div>
              <p class="category__desc">
                24 мая 2021 года компании Chery Automobile Co., Ltd. и iFlytek
                CO., LTD. подписали рамочное соглашение об углублении
                стратегического взаимодействия в области разработки решений
                систем искусственного интеллекта (ИИ) для серийных автомобилей,
                совместной работе над беспилотными автомобилями и доведением их
                автономности до четвертого уровня.
              </p>
              <a href="./news__card.html" class="category__info"
                >Читать далее</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="background__fos">
        <div class="container_site">
          <div class="flex__cont">
            <div class="middle">
              <ul class="content_li">
                <li class="title__content__item">
                  Заинтересовала какая-то новость? Есть вопросы?
                </li>
                <li class="title__content__item">
                  Оставьте заявку на обратный звонок! Специалист отдела продаж
                  свяжется с Вами и ответит на все вопросы.
                </li>
              </ul>
            </div>
            <section class="form_traid-in">
              <h2 class="sub_title" id="calculator">
                Заявка на обратный звонок
              </h2>
              <form
                class="traid-in_calc form__js"
                action="mail.php"
                enctype="multipart/form-data"
                method="POST"
              >
                <input
                  type="hidden"
                  name="admin_mail[]"
                  value="taur.game@gmail.com"
                />
                <input
                  type="hidden"
                  name="admin_mail[]"
                  value="asavtomotors.ru@yandex.ru"
                />
                <div class="field">
                  <label for="calc__name" class="label__traid-in">Имя*</label>
                  <input
                    type="text"
                    id="calc__name"
                    name="name"
                    class="input__traid-in"
                    data-validate-field="name__traid"
                    placeholder="Ваше имя"
                  />
                </div>
                <div class="field__wrapper">
                  <div class="field">
                    <label for="calc__phone" class="label__traid-in"
                      >Телефон*</label
                    >
                    <input
                      type="tel"
                      id="calc__phone"
                      name="tel"
                      class="input__traid-in"
                      data-validate-field="tel__traid"
                      placeholder="Ваш телефон"
                    />
                  </div>
                  <div class="field">
                    <label for="drive__calendar" class="label__traid"
                      >Выберите день*</label
                    >
                    <input
                      type="date"
                      id="drive__datapicker"
                      class="input__traid-in _req"
                      placeholder="Нажмите"
                    />
                  </div>
                </div>
                <div class="checkbox__personal">
                  <input
                    id="calc__personal__inf"
                    type="checkbox"
                    class="checkbox__input"
                    checked
                    value="Receipt"
                    data-validate-field="traid__personal"
                  />
                  <label for="calc__personal__inf" class="checkbox__label"
                    >Согласие на обработку ПД</label
                  >
                </div>
                <div class="popup__btn__flex">
                  <button class="btn credit__btn open_thanks_js" type="submit">
                    Отправить
                  </button>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
      <div class="container_site">
        <p class="seo__title">
          Группа компаний «АсАвто» - организация, о которой говорят.
        </p>
        <p class="seo__text">
          За более чем 16 лет своей работы компания «АсАвто» зарекомендовала
          себя как надёжный партнёр в вопросах продаж и обслуживания
          автомобилей.
        </p>
        <p class="seo__text">
          Внушительный перечень автомобильных марок и разнообразие моделей
          является источником множества интересных новостей. От выходов новых
          моделей до получения международных премий, от сервисных кампаний до
          розыгрышей призов.
        </p>

        <p class="seo__list__title">
          На регулярной основе компания проводит клиентские мероприятия, такие
          как:
        </p>
        <ul>
          <li class="seo__list-item">
            экспонирования автомобилей в торговых центрах
          </li>
          <li class="seo__list-item">дни открытых дверей для жителей города</li>
          <li class="seo__list-item">презентации новых моделей автомобилей</li>
          <li class="seo__list-item">
            развлекательные мероприятия для своих клиентов с розыгрышами и
            подарками
          </li>
        </ul>
        <p class="seo__text">
          Следите за нашими новостями и принимайте участие в наших мероприятиях.
          Добро пожаловать в «АсАвто»!
        </p>
      </div>
    </main>
    <section class="map">
      <div class="container">
        <div class="contacts_block">
          <div class="title">Дилерские центры «АсАвто»</div>
          <ul class="list_unstyled">
            <li
              class="visible"
              data-coordinates='{"lat": 53.263619542243866, "lng": 50.26215135698404}'
              data-center='{"lat": 53.263619542243866, "lng": 50.25}'
              data-zoom="14"
            >
              <div class="name">АсАвто на Алма-Атинской</div>
              <div class="items">
                <div class="item addr">г. Самара, Алма-Атинская, 87</div>
                <div class="item tel">
                  <a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a>
                </div>
                <div class="item clock">Автосалон: 9:00 - 21:00</div>
                <div class="item clock">СТО: 8:00 - 20:00</div>
                <div class="item site">
                  <a href="email:asavtomotors.ru@yandex.ru"
                    >asavtomotors.ru@yandex.ru</a
                  >
                </div>
              </div>
            </li>
            <li
              data-coordinates='{"lat": 53.25195107740439, "lng": 50.36005176768642}'
              data-center='{"lat": 53.25195107740439, "lng": 50.346}'
              data-zoom="14"
            >
              <div class="name">АсАвто на Аэропортовском шоссе</div>
              <div class="items">
                <div class="item addr">г. Самара, Аэропортовское шоссе, 1Ж</div>
                <div class="item tel">
                  <a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a>
                </div>
                <div class="item clock">Автосалон: 9:00 - 21:00</div>
                <div class="item clock">СТО: 8:00 - 20:00</div>
                <div class="item site">
                  <a href="email:asavtomotors.ru@yandex.ru"
                    >asavtomotors.ru@yandex.ru</a
                  >
                </div>
              </div>
            </li>
            <li
              data-coordinates='{"lat": 53.137290, "lng": 50.179647}'
              data-center='{"lat": 53.139475, "lng": 50.167675}'
              data-zoom="14"
            >
              <div class="name">АсАвто на Южном шоссе</div>
              <div class="items">
                <div class="item addr">
                  г. Самара, Южное шоссе 12А, строение 4
                </div>
                <div class="item tel">
                  <a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a>
                </div>
                <div class="item clock">Автосалон: 9:00 - 20:00</div>
                <div class="item clock">СТО: 8:00 - 20:00</div>
                <div class="item site">
                  <a href="email:asavtomotors.ru@yandex.ru"
                    >asavtomotors.ru@yandex.ru</a
                  >
                </div>
              </div>
            </li>
            <li
              data-coordinates='{"lat": 53.578003950614864, "lng": 49.41344120138184}'
              data-center='{"lat": 53.578003950614864, "lng": 49.40}'
              data-zoom="14"
            >
              <div class="name">АсАвто в пос.Тимофеевка (г. Тольятти)</div>
              <div class="items">
                <div class="item addr">
                  пос. Тимофеевка (г.Тольятти), ул. Солнечная, 1А
                </div>
                <div class="item tel">
                  <a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a>
                </div>
                <div class="item clock">Автосалон: 9:00 - 21:00</div>
                <div class="item clock">СТО: 8:00 - 20:00</div>
                <div class="item site">
                  <a href="email:asavtomotors.ru@yandex.ru"
                    >asavtomotors.ru@yandex.ru</a
                  >
                </div>
              </div>
            </li>
            <li
              data-coordinates='{"lat": 51.557420, "lng": 46.066993}'
              data-center='{"lat": 51.557420, "lng": 46.052}'
              data-zoom="14"
            >
              <div class="name">ГК АсАвто, г. Саратов</div>
              <div class="items">
                <div class="item addr">г. Саратов, Соколовая гора, 4</div>
                <div class="item tel">
                  <a href="tel:+7(8846)215-00-07">8 (846) 215 00 07</a>
                </div>
                <div class="item clock">Автосалон: 9:00 - 20:00</div>
                <div class="item clock">СТО: 8:00 - 20:00</div>
                <div class="item site">
                  <a href="email:asavtomotors.ru@yandex.ru"
                    >asavtomotors.ru@yandex.ru</a
                  >
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div id="yamap"></div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>