var navSlide = () => {
  var menu = document.querySelector('.menu');
  var nav = document.querySelector('.nav-links');

  menu.addEventListener('click',() => {
    nav.classList.toggle('nav-active');
  });
}

navSlide();
