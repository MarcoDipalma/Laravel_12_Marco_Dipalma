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


let primoNumero = document.querySelector('#primoNumero');
let secondoNumero = document.querySelector('#secondoNumero');
let terzoNumero = document.querySelector('#terzoNumero');

let confirm = true;


function createInterval(n, element, time){
    let counter = 0;

    let interval = setInterval(()=>{
        if(counter<n){
            counter++
            element.innerHTML = counter;
        }else{
            clearInterval(interval)
        }

    },time);

    setTimeout(() => {
        confirm = true;
    }, 9000);

};



let observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if (entry.isIntersecting && confirm) {
            createInterval(100, primoNumero, 75);
            createInterval(200, secondoNumero, 40);
            createInterval(300, terzoNumero, 28);
            confirm = false
        }
    })

});

observer.observe(primoNumero);


let reviews = [
    {user : 'Matteo', desciption: 'Ottimo sito', rank: 5},
    {user : 'Giovanni', desciption: 'Sito inaffidabile', rank: 0},
    {user : 'Antonio', desciption: 'Ottimo, unica pecca la spedizione', rank: 3},
    {user : 'Anna', desciption: 'Sito niente male', rank: 4},
]

let swiperWrapper = document.querySelector('.swiper-wrapper');

reviews.forEach((recensione)=>{
    let div = document.createElement('div');
    div.classList.add('swiper-slide');
    div.innerHTML = `<div class="card-review">
                            <p class="lead text-center">${recensione.desciption}</p>
                            <p class="h4 text-center">${recensione.user}</p>
                            <div class="d-flex justify-content-center star">

                            </div>
                        </div>`;
                        swiperWrapper.appendChild(div);
});

let stars = document.querySelectorAll('.star');

stars.forEach((star,index)=>{
    for(let i =1; i<=reviews[index].rank; i++){
        let icon = document.createElement('i');
        icon.classList.add('fa-solid', 'fa-star');
        star.appendChild(icon);
    }

    let difference = 5 - reviews[index].rank;
    for(let i =1; i<=difference; i++){
        let icon = document.createElement('i');
        icon.classList.add('fa-regular', 'fa-star');
        star.appendChild(icon);
    }
});



// swiper

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,

    autoplay: {
        delay: 2500,
    }

  });