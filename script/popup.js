// popup

let popup = document.querySelector('.popup')
let openPopup = document.querySelector('.open_popup_js')
let openTitlePopup = document.querySelector('.open_popup_js__title')
let overlay = document.querySelector('.popup_overlay')
let popupCloseBtn = popup.querySelector('.popup_drive__btn', '.popup__btn')

openPopup.addEventListener('click', function(){
	popup.classList.add('popup_open');
	overlay.classList.add('join');

	popupCloseBtn.addEventListener('click', function(){
		popup.classList.remove('popup_open');
		overlay.classList.remove('join')
	})
})

openTitlePopup.addEventListener('click', function(){
	popup.classList.add('popup_open');
	overlay.classList.add('join');

	popupCloseBtn.addEventListener('click', function(){
		popup.classList.remove('popup_open');
		overlay.classList.remove('join')
	})
})

overlay.addEventListener('click', function() {
	popup.classList.remove('popup_open');
	overlay.classList.remove('join')
})