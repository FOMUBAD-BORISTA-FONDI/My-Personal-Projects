let btnAdd = document.querySelector('button');
let table = document.querySelector('table');


let numberInput = document.querySelector('#number');
let departureInput = document.querySelector('#departure');
let arrivalInput = document.querySelector('#arrival');
let timeInput = document.querySelector('#time');
let dateInput = document.querySelector('#date');

btnAdd.addEventListener('click', () =>{
    let number = numberInput.value;
    let departure = departureInput.value;
    let arrival = arrivalInput.value;
    let time = timeInput.value;
    let date = dateInput.value;


    let template = `
        <tr>
            <td>${number}</td>
            <td>${departure}</td>
            <td>${arrival}</td>
            <td>${time}</td>
            <td>${date}</td>
            
        </tr>`;      

    table.innerHTML += template;
});