const swiper = new Swiper('.mobile-services', {
  loop: true, // Enable loop mode
  pagination: {
    el: '.swiper-pagination',
    clickable: true, // Make the dots clickable
  },
  navigation: {
    nextEl: null, // Disable next arrow
    prevEl: null, // Disable previous arrow
  },
  autoplay: {
    delay: 4500, // Adjust the delay as needed
    disableOnInteraction: false,
  },
});
