let test = prompt("Введите значение test");
let correctMessage = "верно";
let wrongMessage = "неверно";

if (Boolean(+test) === true || test === true || test === "true") {
    alert(correctMessage);
} else if (Boolean(+test) === false || test === false || test === "false") {
    alert(wrongMessage);
} else {
    alert('Введено неверное значение');
}