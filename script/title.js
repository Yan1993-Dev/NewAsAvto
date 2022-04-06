var titleForm = document.querySelector('.title__popup');
var titleBtn = document.querySelector('.title__popup__js')
var overlay = document.querySelector('.popup_overlay')
var titleCloseBtn = titleForm.querySelector('.popup_drive__btn')

titleBtn.addEventListener('click', function(){
	titleForm.classList.add('opened');
	overlay.classList.add('join');

	titleCloseBtn.addEventListener('click', function(){
		titleForm.classList.remove('opened');
		overlay.classList.remove('join');
	})
})

overlay.addEventListener('click', function(){
	titleForm.classList.remove('opened');
	overlay.classList.remove('join');
})