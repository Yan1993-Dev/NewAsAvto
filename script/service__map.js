const sliders = document.querySelectorAll('.swiper-container');


sliders.forEach((el) => {
	let mySwiper = new Swiper (el, {
		slidesPerView: 1,
		spaceBetween: 10,
		loop: true,
		centerMode: true,
		observer: true,
		observeParents: true,
		
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