
function sommaTiri(numeroTiri){
    let counter = 0;
    for(i=0; i<=numeroTiri; i++){
        
        counter = counter + Math.floor(Math.random() * (6 - 1) + 1);

    }

    return counter;
    

}

let numeroTiri = Number(prompt('quanti tiri volete effetuare?'));

let giocatoreN1 = sommaTiri(numeroTiri)

let giocatoreN2 = sommaTiri(numeroTiri);

    if(giocatoreN1 > giocatoreN2){
        
        console.log('giocatore 1 ha effettuato il punteggio maggiore, con un punteggio di ' + giocatoreN1);

        } else if (giocatoreN2 > giocatoreN1){

        console.log('giocatore 2 ha effettuato il punteggio maggiore, con un punteggio di ' + giocatoreN2);

        }else{

        console.log('Avete effettuato lo stesso punteggio: ' + giocatoreN1);
        
    }








