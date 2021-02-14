const prev = document.querySelector(".prev");
const next = document.querySelector(".next");

const track = document.querySelector(".track");
console.log(track);
let carousalWidth = document.querySelector(".carousal-container").offsetWidth;

window.addEventListener('resize', () => {
    carousalWidth = document.querySelector(".carousal-container").offsetWidth;
})

let index = 0;

next.addEventListener('click', () => {
    index ++;
    prev.classList.add('show');
    track.style.transform = 'translateX(-' + index * carousalWidth + 'px)';

    let numImg = $('.card-container').siblings().length;

    console.log(numImg);

    var trackWidth = 250 * numImg;
    if (trackWidth - (index * carousalWidth) < carousalWidth) {
      next.classList.add('hide');
    }
})

prev.addEventListener('click', () => {
    index --;
    next.classList.remove('hide');

    if (index === 0){
      prev.classList.remove('show');
    }

    track.style.transform = 'translateX(-' + index * carousalWidth + 'px)';
})