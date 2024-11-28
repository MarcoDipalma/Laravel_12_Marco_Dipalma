let navbar = document.querySelector('#navbar');
let navLink = document.querySelectorAll('.nav-link');
let logo = document.querySelector('.logo')
let collapse = document.querySelector('#collapse');
let dropdown = document.querySelector('#dropdown');

let check = false;


window.addEventListener('scroll', ()=>{
    if (window.scrollY > 0) {
        navbar.classList.remove('bg-w');
        navbar.classList.add('bg-b');
        collapse.classList.remove('bg-w');
        collapse.classList.add('bg-b');
        navbar.style.height= '60px';
        logo.style.width= '40px';
        navLink.forEach((link)=>{
            link.classList.remove('text-b');
            link.classList.add('text-w');
        });
        logo.src = 'http://127.0.0.1:5500/media/mezzaLunaBianca.png';
        dropdown.style.color = 'var(--white)'
    }else{
        navbar.classList.remove('bg-b');
        navbar.classList.add('bg-w');
        collapse.classList.remove('bg-b');
        collapse.classList.add('bg-w');
        navbar.style.height= '100px';
        logo.style.width= '60px';
        navLink.forEach((link)=>{
            link.classList.remove('text-w');
            link.classList.add('text-b');
        });
        logo.src = 'http://127.0.0.1:5500/media/mezzaLunaNera.png';
        dropdown.style.color = 'var(--black)'

    }
});

dropdown.addEventListener('click', ()=>{
    if(check==false){
        dropdown.style.transform = 'rotate(180deg)';
        check = true;
    } else {
        dropdown.style.transform = 'rotate(0deg)';
        check = false;
    }
});


let opener = document.querySelector('.opener');
let iconOpener = document.querySelector('#iconOpener');
let circle = document.querySelector('.circle');

let teachers = [
    {name: 'Matteo', description: 'Docente Frontend di Hackademy 69', url: 'https://picsum.photos/3001'},
    {name: 'Marco', description: 'Docente Frontend e responsabile Hackademy', url: 'https://picsum.photos/302'},
    {name: 'Nicola', description: 'Docente Frontend', url: 'https://picsum.photos/303'},
    {name: 'Davide', description: 'Docente Backend', url: 'https://picsum.photos/304'},
];

teachers.forEach((docente)=>{
    let div = document.createElement('div');
    div.classList.add('moved');
    div.style.backgroundImage = `url(${docente.url})`;
    circle.appendChild(div);

})


let movedDivs = document.querySelectorAll('.moved');

let flipCard = document.querySelector('.flip-card');

let cardWrapper = document.querySelector('#cardWrapper');

let openerCheck = false;


opener.addEventListener('click', ()=>{
    if(openerCheck==false){
        iconOpener.classList.remove('fa-eye');
        iconOpener.classList.add('fa-eye-slash');
        movedDivs.forEach((moved, i)=>{
            let angle = (360 * i) / movedDivs.length ;
            moved.style.transform=`rotate(${angle}deg) translate(150px) rotate(-${angle}deg)`;
        });

        openerCheck=true;

    } else{
        openerCheck = false; 
        iconOpener.classList.remove('fa-eye-slash');
        iconOpener.classList.add('fa-eye');
        movedDivs.forEach((moved, i)=>{
            let angle = (360 * i) / movedDivs.length ;
            moved.style.transform=`rotate(0deg) translate(0px)`;
        });

        cardWrapper.innerHTML = '';
    
    }

});


let cardName = document.querySelector('#cardName');
let cardDescription = document.querySelector('#cardDescription');


movedDivs.forEach((moved, i)=>{
    moved.addEventListener('click', ()=>{

        let docente = teachers[i];

        cardWrapper.innerHTML = '';

        let div = document.createElement('div');
        div.classList.add('flip-card');
        div.innerHTML = `
                    <div class="inner">
                        <div class="inner-face"></div>
                        <div class="inner-back">
                            <p id="cardName" class="h4">${docente.name}</p>
                            <p id="cardDescription" class="lead">${docente.description}</p>
                        </div>
                    </div>
        `;

        cardWrapper.appendChild(div);

        
        let innerFace = document.querySelector('.inner-face');
        innerFace.style.backgroundImage = `url(${docente.url})`;
        
    })
})