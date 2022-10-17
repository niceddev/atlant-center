// BURGER
import Swiper from "swiper";

const iconMenu = document.querySelector('.icon-menu');
const menuBody = document.querySelector('.menu');

if (iconMenu) {

  iconMenu.addEventListener("click", function(e){
    document.body.classList.toggle("_lock");
    iconMenu.classList.toggle("_active");
    menuBody.classList.toggle("_active");
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
