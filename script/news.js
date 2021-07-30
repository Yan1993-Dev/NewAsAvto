const slider = document.querySelector('.swiper-container_news');   
    let mySwiper = new Swiper('.swiper-container_news', {
        loop: true,
        slidesPerView:3,
        spaceBetween:10,
        lazy: true,
        autoplay: {
            delay: 3000,
        },

        breakpoints: {
            319: {
                slidesPerView: 1,
            },
            512: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
    },
        slideClass: 'swiper-slide_news',
		wrapperClass: 'swiper-wrapper_news',
    });