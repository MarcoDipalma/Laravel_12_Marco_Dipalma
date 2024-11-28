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


fetch('./annunci.json').then((response)=>response.json()).then((data)=>{
    
    data.sort((a,b)=> a.price - b.price);

    let radioWrapper = document.querySelector('#radioWrapper');
    let cardWrapper = document.querySelector('#cardWrapper');


    function createCategories(){
        
        let categories = data.map((annuncio)=>annuncio.category);

        // let uniqueCategories = []; 

        // categories.forEach((categories)=> {
        //     if(!uniqueCategories.includes(category)){
        //         uniqueCategories.push(category);
        //     }
        // });

        // Set(): restituisce un nuovo oggetto di tipo Set con soli valori univoci

        let uniqueCategories = Array.from(new Set(categories));

        uniqueCategories.forEach((category)=>{
            let div = document.createElement('div');
            div.classList.add('form-check');
            div.innerHTML = `
                    <input class="form-check-input" type="radio" name="categories" id="${category}">
                    <label class="form-check-label" for="${category}">
                    ${category}
                    </label>
                    `;

                    radioWrapper.appendChild(div);
                    
        });

    }
    
    createCategories();


    function truncateName(string){
        if(string.length > 15){
            return string.split(' ')[0] +'...'
        }else{
            return string;
        }
    }



    function createCard(array){
        cardWrapper.innerHTML = '';
        array.forEach((annuncio, i)=>{
            let div = document.createElement('div');
            div.classList.add('card-custom');
            div.innerHTML = `
                <img src="https://picsum.photos/${300+i}" alt="immaine casuale" class="img-fluid imgCard">
                <p class="h2" title="${annuncio.name}">${truncateName(annuncio.name)}</p>
                <p class="h4">${annuncio.category}</p>
                <p class="lead"">€${annuncio.price}</p>
                <p class="lead">Stato: ${annuncio.type}</p>
            `;

            cardWrapper.appendChild(div);
            
            
        });
    }

    createCard(data);

    let radioButtons = document.querySelectorAll('.form-check-input');


    function filterByCategory(array){

        let categoria = Array.from(radioButtons).find((button)=>button.checked).id;

        console.log(categoria);
        

        if(categoria != 'All'){
            
            let filtered = array.filter((annuncio)=>annuncio.category == categoria);

            // console.log(filtered);
                        
            return filtered;
        }else{
            return array;
        }
        
    };


    radioButtons.forEach((btn)=>{
        btn.addEventListener('click', ()=>{
            setPriceInput(filterByCategory(data));
            globalFilter();
        });
    })


    let priceInput = document.querySelector('#priceInput');
    let priceValue = document.querySelector('#priceValue');

    function setPriceInput(array){

        let prices = array.map((annuncio)=> +annuncio.price);

        prices.sort((a, b)=> a - b);

        let maxPrices = Math.ceil( prices.pop());

        priceInput.max = maxPrices;
        priceInput.value = maxPrices;

        priceValue.innerHTML= '€ ' + maxPrices;
        
    }
    
    setPriceInput(filterByCategory(data));


    function filterByPrice(array){
        let filtered = array.filter((annuncio)=> +annuncio.price <= priceInput.value);

        return filtered ;
    }

    priceInput.addEventListener('input', ()=>{
        priceValue.innerHTML = '€ ' + priceInput.value;
        globalFilter();
    })


    let wordInput = document.querySelector('#wordInput');

    function filterByWord(array){
        let filtered = array.filter((annuncio)=>annuncio.name.toLowerCase().includes(wordInput.value.toLowerCase()));
        return filtered;
    }

    wordInput.addEventListener('input', ()=>{
        globalFilter();
    })


    function globalFilter(){
        let filteredByCategory = filterByCategory(data);
        let filteredByPrice = filterByPrice(filteredByCategory);
        let filteredByWord = filterByWord(filteredByPrice);
        
        createCard(filteredByWord);

    }


});