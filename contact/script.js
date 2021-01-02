let modal = document.querySelector('.modal');
let modalClose = document.querySelector('.modal-close');
let overlay = document.querySelector('.overlay');
let modalBody = modal.querySelector('.modal-body');
function openModal() {
    modal.setAttribute('style', 'opacity: 1; pointer-events: all;');
    modalClose.setAttribute('style', 'opacity: 1; pointer-evetns: all; cursor: pointer;');
    overlay.style.display = "block";
}
function closeModal() {
    modal.forEach(element => {
        element.setAttribute('style', 'opacity: 0; pointer-events: none;');
    });
    modalClose.forEach(element => {
        element.setAttribute('style', 'opacity: 0; pointer-evetns: none;');
    });
    overlay.setAttribute('style', 'opacity: 0; pointer-events: none;');
}
window.addEventListener('click', function(event) {
    let element = event.target;
    console.log(element);
    if (element == overlay) {
        closeModal();
    } else if (element == modalClose) {
        closeModal();
    }
});
function validate() {
    console.log('hey, hello world');
    let fname = document.querySelector('#fname');
    let mobile = document.querySelector('#mobile');
    let email = document.querySelector('#email');
    let message = document.querySelector('#message');
    if (fname.value == "") {
        modalBody.innerHTML = "Mobile number is required and it should contain only numbers";
        openModal();
        alert("Username is invalid. Username must be filled.");
        return false;
    }
    if ((mobile.value.innerHTML == "") && (mobile.isNaN)) {
        modalBody.innerHTML = "Mobile number is required and it should contain only numbers";
        openModal();
    }
}
// if (email.value.charAt(email.length) != '@') {
//     modalBody.innerHTML = "Email is @ wrong. Please fill out this field";
//     openModal();
// }
