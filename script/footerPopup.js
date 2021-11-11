
let popupFooter = document.querySelector('.popup')
let openPopupFooter = document.querySelector('.footer__open__js')
let overlayFooter = document.querySelector('.popup_overlay')

openPopupFooter.addEventListener('click', function(){
	popupFooter.classList.add('popup_open');
	overlayFooter.classList.add('join');

	popupCloseBtn.addEventListener('click', function(){
		popupFooter.classList.remove('popup_open');
		overlayFooter.classList.remove('join')
	})
})

overlayFooter.addEventListener('click', function() {
	popupFooter.classList.remove('popup_open');
	overlayFooter.classList.remove('join')
})