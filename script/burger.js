let mobileMenu = document.querySelector('.mobile__header');
let openMenu = document.querySelector('.header__mobile_btn');
let menuClose = document.querySelector('.header__close__btn');

openMenu.addEventListener('click', function(){
	mobileMenu.classList.add('open');

	menuClose.addEventListener('click', function(){
		mobileMenu.classList.remove('open');
	})
})
