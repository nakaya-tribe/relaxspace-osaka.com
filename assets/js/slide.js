document.addEventListener("DOMContentLoaded", function () {
  // topBannerSwiper
  const topBannerSwiper = new Swiper(".topBannerSwiper", {
    loop: true,
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 12,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".topBannerswiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
        centeredSlides: false,
      },
    },
  });

  // topNewSwiper
  const topNewSwiper = new Swiper(".topNewSwiper", {
    loop: true,
    speed: 800,
    slidesPerView: 2.2,
    spaceBetween: 24,
    centeredSlides: false,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".topNewswiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
        centeredSlides: true,
      },
    },
  });
});
