const $forms = document.querySelectorAll('.form__js')
const $popup = document.querySelector('.thanks__popup')
const $closePopup = $popup.querySelector('.thanks_request__btn')
        $forms.forEach(item => {
                item.addEventListener('submit', (e) => {
                        e.preventDefault()
                        $popup.style.display = 'block'
                })
        })

        $closePopup.addEventListener('click', () => {
                $popup.style.display = 'none'
        })