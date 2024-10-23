let nome= 'Matteo';
let telefono = '333322242';

let rubrica = {
    contacts: [
        {nome: 'Nicola', telefono: '3331111111'},
        {nome: 'Lorenzo', telefono: '3332222222'},
        {nome: 'Paola', telefono: '3333333333'},
        {nome: 'Jenny', telefono: '3334444444'}
    ],
    
    mostraContatti : function(){
        this.contacts.forEach(contatto => {
            console.log(`${contatto.nome}: ${contatto.telefono}`);
        })
    },

    mostraUnContatto : function(nomeDaMostrare){
        let contatto = this.contacts.find(contatto => contatto.nome == nomeDaMostrare);

        if(contatto){
            console.log(`Contatto \n ${contatto.nome}: ${contatto.telefono}`);
            
        } else{
            console.log('contatto non trovato');
            
        }
    },

    elimina_aggiungi_Contatto: function(name, numero){
        let contatto = this.contacts.find(contatto => contatto.nome == name);

        let i = this.contacts.indexOf(contatto);
        if(contatto){
            this.contacts.splice(i,1);
            console.log('Contatto '+ name + ' eliminato'); 
            this.mostraContatti();
        } else {
            this.contacts.push({nome: name, telefono : numero});
            console.log('Contatto ' + name + ' aggiunto');
            this.mostraContatti();            
        }

    },

    modificaContatto : function(name, mod){
        let contatto = this.contacts.find(contatto => contatto.nome == name);
        if (contatto){
            console.log('Contatto '+ name + ' modificato');
            contatto.telefono = mod;
            this.mostraContatti();
            
        } else {
            console.log('contatto non trovato');
            this.mostraContatti();
            
        }

    }

  }

// rubrica.mostraContatti();
// rubrica.mostraUnContatto('Nicola');
// rubrica.elimina_aggiungi_Contatto(nome, telefono);
// rubrica.modificaContatto('Lorenzo', '3422333333')

