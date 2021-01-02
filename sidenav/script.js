let menuBar = document.querySelector('.menu_bar');
let sidenav = document.querySelector('.sidenav');

function closeSidenav() {
  sidenav.classList.remove('showSidenav');
  overlay.setAttribute('style', 'opacity: 0; pointer-events: none;');
}
function openSidenav() {
  sidenav.classList.add('showSidenav');
  overlay.setAttribute('style', 'opacity: 1; pointer-events: all;');
}
menuBar.addEventListener('click', () => {
  openSidenav();
});
window.addEventListener('click', function(event) {
  let element = event.target;
  if (element == overlay) {
    closeSidenav();
  } else if (element == sidenav) {
    openSidenav();
  }
});