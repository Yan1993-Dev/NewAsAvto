
let mobileMenu = document.querySelector('.mobile__header');
console.log(mobileMenu);
let openMenu = document.querySelector('.header__mobile_btn');
console.log(openMenu);
let menuClose = document.querySelector('.header__close__btn');
console.log(menuClose);

openMenu.addEventListener('click', function(){
  console.log('кнопка нажата');
	mobileMenu.classList.add('open');

	menuClose.addEventListener('click', function(){
		mobileMenu.classList.remove('open');
	})
})
