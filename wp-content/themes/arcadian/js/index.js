"use strict";

// Welcome Slider
var swiperWelcome = new Swiper('.Swiper-welcome', {
  loop: true,
  grabCursor: true,
  autoplay: {
    delay: 5000
  },
  slidesPerView: 'auto',
  pagination: {
    el: '.SwiperPagination-welcomeSlider',
    clickable: true,
    bulletClass: 'SwiperPagination_bullet',
    bulletActiveClass: 'SwiperPagination_bullet-active'
  }
}); // Animation

new WOW().init();
//# sourceMappingURL=index.js.map
