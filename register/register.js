let prompt = document.querySelectorAll('.prompt');
let promptClose = document.querySelectorAll('.prompt-close');
let promptBody = document.querySelectorAll('.prompt-body');
let overlay = document.querySelector('.overlay');
function openprompt() {
    prompt.forEach(element => {
        element.setAttribute('style', 'opacity: 1; pointer-events: all;');
    });
    promptClose.forEach(element => {
        element.setAttribute('style', 'opacity: 1; pointer-evetns: all; cursor: pointer;');
    });
    overlay.style.display = "block";
    console.log('hey');
}
function closeprompt() {
    prompt.forEach(element => {
        element.setAttribute('style', 'opacity: 0; pointer-events: none;');
    });
    promptClose.forEach(element => {
        element.setAttribute('style', 'opacity: 0; pointer-evetns: none;');
    });
    overlay.setAttribute('style', 'opacity: 0; pointer-events: none;');
}
window.addEventListener('click', function(event) {
    let element = event.target;
    if (element == overlay) {
        closeprompt();
    } else if (element == promptClose) {
        closeprompt();
    }
});