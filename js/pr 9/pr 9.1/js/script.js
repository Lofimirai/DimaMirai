
const $block = document.createElement('div');
 
$block.append();
$block.className = 'block';
document.body.append($block);
$block.classList.add('is-active');

let block1 = document.querySelector(".block");
let textqwe = document.createTextNode("Практика 1");
const tag = document.createElement('h1');
tag.appendChild(textqwe);
block1.appendChild(tag);

document.body.appendChild(block1);

