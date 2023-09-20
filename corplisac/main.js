

/*cerrar automaticamente al hacer click en cualquier lado navbar*/
document.addEventListener("click", function (event) {
  var navbar = document.querySelector("#navbarNav");
  if (navbar.classList.contains("show") && !navbar.contains(event.target)) {
    document.querySelector(".navbar-toggler").click();
  }
});

/*pagination de slider*/

var swiper = new Swiper('.swiper-container', {
  loop: true,
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});













