require('./bootstrap');

require('alpinejs');

 // core version + navigation, pagination modules:
 import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';
 // import Swiper and modules styles
 import 'swiper/css';
 import 'swiper/css/navigation';
 import 'swiper/css/pagination';
 import 'swiper/css/autoplay';

 // configure Swiper to use modules
 Swiper.use([Navigation, Pagination, Autoplay]);

const swiper = new Swiper('.swiper1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 800,

    // Auto play
    autoplay: {
      delay:5000,
      disableOnInteraction: false,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  const swiper2 = new Swiper('.swiper2', {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // Breakpoints
    breakpoints: {
    "@.00": {
      slidesPerView: 3,
      spaceBetween: 5,
    },
    "@1.00": {
      slidesPerView: 4,
      spaceBetween: 20,
    }
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });