let changeColorBtn = document.querySelector('#changeColorBtn');

let boldTextBtn = document.querySelector('#boldFontBtn');

let disappearedTextBtn = document.querySelector('#disappearedTextBtn');

let paragrafi = document.querySelectorAll('p');


changeColorBtn.addEventListener('click', ()=>{
    paragrafi.forEach(paragrafo=>{

        let red = Math.floor(Math.random()*256)
        let green = Math.floor(Math.random()*256)
        let blue = Math.floor(Math.random()*256)

        paragrafo.style.color = `rgb(${red}, ${green}, ${blue})`
    });
});


boldFontBtn.addEventListener('click', ()=>{
    paragrafi.forEach(paragrafo=>{
        paragrafo.classList.toggle('boldFont')
    });
});

disappearedTextBtn.addEventListener('click', ()=>{
    paragrafi.forEach(paragrafo=>{
        paragrafo.classList.toggle('disappearedText')
    });
});

