const slider__title = document.querySelectorAll('.swiper-container__title');


slider__title.forEach((el) => {
	let mySwiper = new Swiper (el, {
		slidesPerView: 1,
		spaceBetween: 10,
		loop: false,
		centerMode: true,
		observer: true,
		observeParents: true,
		autoplay: false,
		keyboard: {
			enabled: true,
		},
		pagination: {
			el: '.swiper_pagination',
			clickable: true,
			type : 'custom',
			bulletClass:'slider_img_title',
		  },
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	})
})
