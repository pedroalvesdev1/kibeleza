$(document).ready(function(){
  $('.banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  fade: true,
  speed: 500
});

$('.galeria').slick({
  lazyLoad: 'ondemand',
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1900
});
});


document.querySelector(".abrirMenu").onclick = function(){
  document.documentElement.classList.add("menuAtivo");
}


document.querySelector(".fecharMenu").onclick = function(){
  document.documentElement.classList.add("menuInativo");
}
