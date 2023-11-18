let paragraph = document.querySelector("#POWER");
let person = {

    sname: 'Ярков',
    name: 'Димас',
    postname: 'Витальевич',
    occu: 'Студент',
    deg: ['Среднее профессиональное', ' Высшее', ' Дополнительное профессиональное'],
    categjri: 'Первая',
    edicushins: 'ГБПОУ ПКК ОНИКС',
    distanchins: ['Информатика', 'Математика', 'Физика'],
    note: '',

};

let distanchinsPointText = '';
for (let index = 0; index < person.deg.length; index++) {
    distanchinsPointText = distanchinsPointText + "<li>" + person.deg[index] + "</li>";
}

paragraph.innerHTML = '<h2>' + person.sname + ' ' + person.name + ' ' + person.postname + '</h2>' + "<i>" + 
"Должность: " + "</i>" + person.occu + '<br>' + "<i>" + 
"Уровень образования: " + "</i>" + person.deg + '<br>' + "<i>" + 
"Категория: " + "</i>" + person.categjri + '<br>' + "<i>" + 
"Образование: " + "</i>" + person.edicushins + '<br>' + "<i>" + 
"Дисциплина: " + "</i>" + "<ul>" + distanchinsPointText + "</ul>" + '<br>';

paragraph.innerHTML = paragraph.innerHTML + "<i>" + "Примечание: " + "</i>" + person.note;

function getRandomColorValue() {
    return Math.floor(Math.random() * 255);
}

let coloresdPointDrop = document.querySelectorAll(`li`);

for (let index = 0; index < person.deg.length; index++) {

    let point = coloresdPointDrop[index];

    let red = getRandomColorValue();
    let green = getRandomColorValue();
    let blue = getRandomColorValue();

    point.style.color = `rgb(${red}, ${green}, ${blue})`;
}