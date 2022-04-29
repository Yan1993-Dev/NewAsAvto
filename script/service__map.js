const slidersMap = document.querySelectorAll('.swiper-container_map');


slidersMap.forEach((el) => {
	let mySwiper = new Swiper (el, {
		slidesPerView: 1,
		spaceBetween: 10,
		slideClass:'swiper-slide',
		wrapperClass: 'swiper-wrapper__map',
		loop: true,
		centerMode: true,
		observer: true,
		observeParents: true,
		pagination: {
			el: '.swiper-pagination_map',
			clickable: true,
			type: 'bullets',
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