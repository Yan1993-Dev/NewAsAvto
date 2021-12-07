var estimate = document.querySelector('.title__popup');
var estimateBtn = document.querySelector('.title__popup__js')
var overlay = document.querySelector('.popup_overlay')
var estimateCloseBtn = estimate.querySelector('.popup_drive__btn__js')

estimateBtn.addEventListener('click', function(){
	estimate.classList.add('opened');
	overlay.classList.add('join');

	estimateCloseBtn.addEventListener('click', function(){
		estimate.classList.remove('opened');
		overlay.classList.remove('join');
	})
})

overlay.addEventListener('click', function(){
	estimate.classList.remove('opened');
	overlay.classList.remove('join');
})