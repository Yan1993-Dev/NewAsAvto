let modelTab = document.querySelectorAll('.sub__tabs__item')

modelTab.forEach(item => {
    item.addEventListener('click', () => {
        if(item.classList.contains('active')){
            item.classList.remove('active')
        } else { modelTab.forEach(tab => {
            tab.classList.remove('active')
        })
            item.classList.add('active')
        }
    })
})