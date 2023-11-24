let firstButton = document.querySelector('.first-button');
let secondButton = document.querySelector('.second-button');
firstButton.addEventListener('click', () => {
  console.log('Нажата первая кнопка');
});
secondButton.addEventListener('click', () => {
  console.log('Нажата вторая кнопка');
});