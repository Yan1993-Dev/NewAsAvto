let popupFooter = document.querySelector('.popup__footer');
let openPopupFooter = document.querySelector('.open_popup_js__footer')
let overlayFooter = document.querySelector('.popup_overlay__footer')
let popupCloseBtnFooter = popupFooter.querySelector('.popup_drive__btn__footer')

openPopup.addEventListener('click', function(){
	popupFooter.classList.add('popup_open');
	overlayFooter.classList.add('join');
})

popupCloseBtnFooter.addEventListener('click', function(){
	popupFooter.classList.remove('popup_open');
	overlayFooter.classList.remove('join')
})

overlayFooter.addEventListener('click', function(){
	popupFooter.classList.remove('popup_open');
	overlayFooter.classList.remove('join')
})