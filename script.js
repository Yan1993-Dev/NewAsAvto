let popup = document.querySelector('.popup')
let openPopup = document.querySelector('.open_popup_js')
let openTitlePopup = document.querySelector('.title__popup')
var overlay = document.querySelector('.popup_overlay')
let popupCloseBtn = popup.querySelector('.popup_drive__btn')
// спасибо за заявку
let forms = document.querySelectorAll('.form__js')
let popupTh = document.querySelector('.thanks__popup')
let closePopup = popupTh.querySelector('.thanks_request__btn')

openPopup.addEventListener('click', function(){
	popup.classList.add('popup_open')
	overlay.classList.add('join')

	popupCloseBtn.addEventListener('click', function(){
		popup.classList.remove('popup_open')
		overlay.classList.remove('join')
	})
})

forms.forEach(item => {
    item.addEventListener('submit', (e) => {
        e.preventDefault()
		popupTh.classList.add('thanks_open')
            })
    })

    closePopup.addEventListener('click', () => {
		popupTh.classList.remove('thanks_open')
		popup.classList.remove('popup_open')
		overlay.classList.remove('join')
    })

overlay.addEventListener('click', function(){
	popup.classList.remove('popup_open')
	overlay.classList.remove('join')
})

