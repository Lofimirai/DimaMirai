let paragraph = document.querySelector("#POWER");
let person={

sname: 'Ярков',
name : 'Дмитрий',
postname : 'Витальевич',
occu : 'Студент',
deg : 'Среднее',
categjri : 'Первая',
edicushins : 'ГБПОУ ПКК ОНИКС',
distanchins : 'Информатика',
primi4anie : 'Примечание',

};

paragraph.innerHTML = "ФИО " + person.sname + ' ' + person.name + ' ' + person.postname +'<br>' 
+ "Должность " + person.occu +'<br>' 
+ "Уровень образования " + person.deg+'<br>' 
+ "Категория " + person.categjri +'<br>' 
+ "Образование " + person.edicushins +'<br>' 
+ "Дисциплина " + person.distanchins +'<br>' 
+ "Примечание " + person.primi4anie ;