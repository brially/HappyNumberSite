import TaskCollection  from './TaskCollection';
import  Task from './Task';


let names = ['John', 'Sandy'];

console.log(names);

function fire(bool){
    let foo = 'foo';
    if(bool){
        foo = 'bar';

        console.log(foo);

    }
    else {
        console.log(foo);
    }
}

fire(false);


new TaskCollection([new Task, new Task, new Task]).dump();

function defaultDisount(){
    return .10;
}

function applyDiscount(cost, discount = defaultDisount()){
    return cost - (cost * discount);
}


function sum(...numbers){
    return numbers.reduce((prev, current) => prev + current);
}
let name = 'Bar';

let template = `<div> class="Alert" <p>${name}</p> </div>`;


function getPerson(){
    let name = 'Brian';

    let age = 49;

    return {
        name,
        age,

        greet(){
            return `Hello, ${this.name}`
        }
    }
}


function greet({name, age}){
    console.log(`Hello, ${name}. You are ${age}`);
}

greet({
    name: 'Carey',
    age: 40
});

let tasks = new TaskCollection([new Task('Get Eggs'), new Task('Run Laundry'), new Task('Pick kids up')]).dump();


//Promise

var timer = function(length){

    return new Promise(function (resolve, reject){

        console.log('init Promise')

        setTimeout(function () {
            console.log('timeout done');
            resolve();
        }, length);

    });
};

timer(4000).then(() => alert('timer done'));



function *numbers(){

    console.log('begin');

    yield 1;

    console.log('resume 2')

    yield 2;
    console.log('resume 3')

    yield 3;

    console.log('resume 4')

}

function *range(start, end){
    while (start <= end){
        yield start;
        start++;
    }
}

for(let i of range(1,5)) console.log(i);

console.log([...range(1,5)]);