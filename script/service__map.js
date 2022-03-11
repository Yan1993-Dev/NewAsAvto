const sliders = document.querySelectorAll('.swiper-container__map');


sliders.forEach((el) => {
	let mySwiper__map = new Swiper (el, {
		slidesPerView: 1,
		spaceBetween: 10,
		wrapperClass: 'swiper-wrapper__map',
		loop: true,
		centerMode: true,
		observer: true,
		observeParents: true,
		pagination: {
			el: '.swiper-pagination_one',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		  },
		
		breakpoints: {
            319: {
                slidesPerView: 1,
            },
            512: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1,
            }},
		keyboard: {
			enabled: true
		},
	})
})