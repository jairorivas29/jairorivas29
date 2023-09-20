/*cerrar automaticamente al hacer click en cualquier lado navbar*/
document.addEventListener("click", function (event) {
  var navbar = document.querySelector("#navbarNav");
  if (navbar.classList.contains("show") && !navbar.contains(event.target)) {
    document.querySelector(".navbar-toggler").click();
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const logos = document.querySelectorAll(".client-logos img");

  logos.forEach((logo) => {
    logo.addEventListener("click", () => {
      logo.classList.toggle("enlarged");
    });
  });
});
