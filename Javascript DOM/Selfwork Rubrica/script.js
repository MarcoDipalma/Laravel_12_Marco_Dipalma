let btnShowContacts = document.querySelector("#btnShowContacts")
let btnAddContact = document.querySelector("#btnAddContact")
let btnEditContacts = document.querySelector("#btnEditContacts")


let nameInput = document.querySelector('#nameInput');
let phoneInput = document.querySelector('#phoneInput');


let tabContacts = document.querySelector("#tabContacts")


let check = false;


let rubrica = {
    listaContatti : [
        {contact_name : 'Giovanni', phone_number : 3333333333},
        {contact_name : 'Simone', phone_number : 3334444444},
        {contact_name : 'Gianna', phone_number : 3335555555},
    ],

    showContacts : function(){
        tabContacts.innerHTML = '';

        rubrica.listaContatti.forEach((contact)=>{
            let div = document.createElement('div');
            div.classList.add('card-contact');
            div.innerHTML = `
                <p class="lead"> ${contact.contact_name} </p>
                <p>${contact.phone_number}</p>
                <i class="fa-solid fa-trash icon"></i>
            `;
            
            tabContacts.appendChild(div);

        });
        
        // Icone
        let icon = document.querySelectorAll('.icon')

        icon.forEach((icon, i)=>{
            icon.addEventListener('click', ()=>{
                this.listaContatti.splice(i, 1);
                rubrica.showContacts();
            });

        });

    },


    addContact : function(newName, newNumber){
        this.listaContatti.push({contact_name : newName, phone_number : newNumber});

        rubrica.showContacts();

    },

    editContact : function(name, number){
        this.listaContatti.forEach((contatto)=>{

            if(contatto.contact_name == name){
                contatto.phone_number = number;

            }
        });
        
    },


};



btnShowContacts.addEventListener('click', ()=>{
    if(check==false){
        rubrica.showContacts();
        check=true;

        btnShowContacts.innerHTML='Nascondi contatti';

    } else{
        tabContacts.innerHTML = '';
        check = false;

        btnShowContacts.innerHTML='Mostra contatti';

    }

});


btnAddContact.addEventListener('click', ()=>{

    if(nameInput.value && phoneInput.value){

        rubrica.addContact(nameInput.value, phoneInput.value);
    
        if(check==false){
            check=true;
    
            btnShowContacts.innerHTML='Nascondi contatti';
    
        }
    
        nameInput.value = '';
        phoneInput.value = '';

    } else{
        alert('Riempi entrambi i campi');
    }
});


btnEditContacts.addEventListener('click', ()=>{
    if(nameInput != ''){
        rubrica.editContact(nameInput.value, phoneInput.value);

        if(check==false){
            rubrica.showContacts();
            check=true;
    
            btnShowContacts.innerHTML='Nascondi contatti';
    
        }

        nameInput.value = '';
        phoneInput.value = '';
    }
})