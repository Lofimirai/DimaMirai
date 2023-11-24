let input = document.querySelector('input');
input.addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    console.log(input.value);
  }
});