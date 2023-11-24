
const details = document.querySelector('details');


let showButton = document.querySelector('.show-button');
let hideButton = document.querySelector('.hide-button');
showButton.addEventListener('click', () => {
    details.open = true;
});
hideButton.addEventListener('click', () => {
    details.open = false;
});