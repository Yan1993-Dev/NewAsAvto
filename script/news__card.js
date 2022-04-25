const sliders = document.querySelectorAll('.swiper-container');


sliders.forEach((el) => {
	let mySwiper = new Swiper (el, {
		slidesPerView: 3,
		spaceBetween: 10,
		loop: true,
		centerMode: true,
		observer: true,
		observeParents: true,
        pagination: {
			el: '.swiper-pagination',
			clickable: true,
			type: 'bullets',
		},
        autoplay: {
            delay: 3000,
        },
		
		breakpoints: {
            319: {
                slidesPerView: 1,
            },
            512: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            }},
		keyboard: {
			enabled: true
		},
	})
})