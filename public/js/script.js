const swiperCursos = new Swiper(".swiper-cursos", {
  direction: "horizontal",
  loop: true,
  slidesPerView: 5,
  spaceBetween: 0,
  navigation: {
    nextEl: ".nossos-cursos-btn-next",
    prevEl: ".nossos-cursos-btn-prev",
  },
  breakpoints: {
    1440: {
      slidesPerView: 5,
      spaceBetween: 0,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 0,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
    320: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
  },
});