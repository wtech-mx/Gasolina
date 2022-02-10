var burgerBtn = document.getElementById('burgerBtn');
var mobile = document.getElementById('mobile');
var demo1 = document.getElementById('demo1');
var demo2 = document.getElementById('demo2');
var demo3 = document.getElementById('demo3');

burgerBtn.addEventListener('click', function() {
  mobile.classList.toggle('navigation');
}, false);

function scrollToTop(){
  window.scrollTo({top: 0, behavior: 'smooth'});
}

burgerBtn.addEventListener("click", scrollToTop);

// burgerBtn.on('click', function(e) {
//   e.preventDefault();
//   $('html, body').animate({scrollTop:0}, '600');
// });
