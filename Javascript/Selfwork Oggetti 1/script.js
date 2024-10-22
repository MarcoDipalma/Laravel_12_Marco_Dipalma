let persona = {
    'nome' : 'Marco',
    'cognome' : 'Dipalma',
    'età' : 21,
    saluta : function() {
        console.log('Ciao, io sono ' + this.nome); 
    }
}

persona.saluta();
