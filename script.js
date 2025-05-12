


// menu open button
const menuOpenButton= document.querySelector('#menu-open-button');
const menuCloseButton=document.querySelector('#menu-close-button');
const navLinks = document.querySelectorAll('.nav-link');
menuOpenButton.addEventListener('click', () =>{
    //create a class of show-mobile-menu
 document.body.classList.toggle("show-mobile-menu");   
});

// menu close button
menuCloseButton.addEventListener('click', ()=>
menuOpenButton.click());
navLinks.forEach(link => {
 link.addEventListener('click', () =>menuOpenButton.click());

});

// Initialize Swiper
const swiper = new Swiper('.slider-wrapper', {
  loop: true,
  spaceBetween: 25,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //Responsive breakPoints
  breakpoints:{
    0: {
slidesPerView: 1
    },
    768: {
slidesPerView: 2
    },
    1024: {
      slidesPerView: 3
    }
  }

});