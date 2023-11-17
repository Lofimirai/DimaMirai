let userVariableA = +prompt("Введите значение a");
let userVariableB = +prompt("Введите значение b");

let correctMessage = "верно";
let wrongMessage = "неверно";

if (userVariableA > 1 && userVariableA < 11 || userVariableB >= 6 && userVariableB < 14) {
    alert(correctMessage);
} else {
    alert(wrongMessage);
}