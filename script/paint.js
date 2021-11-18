let tabBtn = document.querySelectorAll('.tabs__nav-btn')

tabBtn.forEach(item => {
    item.addEventListener('click', () => {
        if(item.classList.contains('active')){
            item.classList.remove('active')
        } else { tabBtn.forEach(tab => {
            tab.classList.remove('active')
        })
            item.classList.add('active')
        }
    })
})