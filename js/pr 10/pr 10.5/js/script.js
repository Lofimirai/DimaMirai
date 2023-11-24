let input = document.querySelector('input');
input.addEventListener('focus', () => {
  input.style.backgroundColor = 'white';
});
input.addEventListener('blur', () => {
  input.style.backgroundColor = 'white';
});

let qwe = document.querySelector('.qwe');
qwe.addEventListener('focus', () => {
  qwe.style.backgroundColor = 'blue';
});
qwe.addEventListener('blur', () => {
  qwe.style.backgroundColor = 'blue';
});

let zxc = document.querySelector('.zxc');
zxc.addEventListener('focus', () => {
  zxc.style.backgroundColor = 'red';
});
zxc.addEventListener('blur', () => {
  zxc.style.backgroundColor = 'white';
});