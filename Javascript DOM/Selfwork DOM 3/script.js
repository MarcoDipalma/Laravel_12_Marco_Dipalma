let startBtn = document.querySelector('.startBtn');
let pauseBtn = document.querySelector('.pauseBtn');
let stopBtn = document.querySelector('.stopBtn');

let counterInput = document.querySelector('#counterInput');
let timer = document.querySelector('#timer');


let interval;
let counter;
let remaingSeconds = 0;


startBtn.addEventListener('click', ()=>{
    clearInterval(interval);
    counter = counterInput.value;

    if(remaingSeconds != 0){
        counter = remaingSeconds;
    }

    interval = setInterval(() => {
        if(counter<0){
            clearInterval(interval);
            timer.innerHTML = '0'
        }else{
            timer.innerHTML=counter
            counter --
        }
    }, 1000)
});

pauseBtn.addEventListener('click', ()=>{
    clearInterval(interval);
    remaingSeconds = counter;

});


stopBtn.addEventListener('click', ()=>{
    counterInput.value = '';
    clearInterval(interval);
    timer.innerHTML = '0';
});