document.addEventListener('DOMContentLoaded', () => {

  const sliders = document.querySelectorAll('.product-carousel');
  const prevBtn = document.querySelectorAll('button.prev-btn');
  const nextBtn = document.querySelectorAll('button.next-btn');

  let i = 0;
  sliders.forEach(slider => {
    const tnsSlider = tns({
      container: slider,
      items: 1,
      slideBy: 1,
      speed: 500,
      autoplay: false,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      prevButton: prevBtn[i],
      nextButton: nextBtn[i],
      nav: false,
      autoplayButtonOutput: false,
      responsive: {
        576: {
          items: 2
        },
        992: {
          items: 4
        }
      }
    });
    i++;
  });

});