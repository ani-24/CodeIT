let headerText = document.querySelector('.headerText');
let scrollbarIndicator = document.querySelector('.scrollbar-indicator');
let bg = document.querySelector('#home');
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        headerText.classList.add('animate');
    }, 400);
})
window.addEventListener('scroll', function () {
    let scroll = scrollY;
    let scrollPercent = scroll / (document.body.scrollHeight - window.innerHeight) * 100;
    scrollbarIndicator.style.width = scrollPercent + '%';
    bg.style.backgroundPositionY = scroll * 0.5 + 'px';
});
let overlay = document.querySelector('.overlay');