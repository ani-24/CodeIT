let searchIcon = document.querySelector('.search-icon');
let searchbar = document.querySelector('#search-box');
let searchBtn = document.querySelector('.search-btn');
let searchArea = document.querySelector('.search-area');
let overlay = document.querySelector('.overlay');
let notAval = document.querySelectorAll('.not-available');
function openSearch() {
    if (searchArea.classList.contains('active')) {
        searchArea.classList.remove('active');
        searchIcon.style.left = "0";
    } else {
        searchArea.classList.add('active');
        searchIcon.style.left = "95%";
    }
}
searchIcon.addEventListener('click', function() {
    openSearch();
});
function search() {
    cards.forEach(element => {
        let searchLen = searchbar.value.length;
        if (searchbar.value.toLowerCase() != element.dataset.tag.slice(0, searchLen)) {
            element.style.display = "none";
            if (element.classList.contains('found')) {
                element.classList.remove('found');
            }
            let found = document.querySelectorAll('.found');
            if (found.length = 0) {
                cards.forEach(element => {
                    element.style.display = "inline-block";
                });
            }
            if (searchbar.value == "") {
                cards.forEach(element => {
                    element.style.display = "inline-block";
                });
            }
        } else {
            element.style.display = "inline-block";
            element.classList.add('found');
        }
    });
}
let cards = document.querySelectorAll('.card');
searchBtn.addEventListener('click', function() {
    search();
});
searchbar.addEventListener('keyup', function () {
    search();
});
notAval.forEach(element => {
    element.addEventListener('click', () => {
        alert('Sorry... The content is unavailable at the moment');
    })
})