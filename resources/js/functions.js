// BURGER
import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";

const iconMenu = document.querySelector('.icon-menu');
const menuBody = document.querySelector('.menu');
const burgerLink = document.querySelectorAll('.menu__item');

if (iconMenu) {

  iconMenu.addEventListener("click", function(e){
    document.body.classList.toggle("_lock");
    iconMenu.classList.toggle("_active");
    menuBody.classList.toggle("_active");

    if(document.body.style.position === 'fixed') {
        document.body.style.position = '';
    } else {
        document.body.style.position = 'fixed';
    }
  });
}

function closeBurgerMenu(){
  document.body.classList.remove("_lock");
  iconMenu.classList.remove("_active");
  menuBody.classList.remove("_active");
}


document.querySelectorAll('.menu__link').forEach(
  function(item){item.onclick = closeBurgerMenu;}
 );

burgerLink.forEach(function (link){
    link.addEventListener('click', function (data){
        document.body.classList.remove("_lock");
        iconMenu.classList.remove("_active");
        menuBody.classList.remove("_active");
        document.body.style.position = '';
    })
})

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'custom',
    renderCustom: function(swiper, current, total) {
      return `${current}<span> / </span>${total}`
    }
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});



function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
     change.target.classList.add('element-show');
    }
  });
}

let options = {
  threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.element-animation');

for (let elm of elements) {
  observer.observe(elm);
}
