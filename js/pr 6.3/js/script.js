let userVariableA = +prompt("Введите значение a");
let userVariableB = +prompt("Введите значение b");

let correctMessage = userVariableA + userVariableB;
let wrongMessage = userVariableA - userVariableB;

if (userVariableA <= 1 && userVariableB >= 3) {
    alert(correctMessage);
} else {
    alert(wrongMessage);
}