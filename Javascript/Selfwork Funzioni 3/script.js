function counter(n) {

        switch (true) {
            
            case (n>=0 && n<=9):
            console.log('numero composto da 1 cifra');
            
                break;
            
            case (n>=10 && n<=99):
                console.log('numero composto da 2 cifre');
                
                break;
                
            case (n>=100 && n<=999):
                console.log('numero composto da 3 cifre');
                    
                break;
            
            case (n>=1000 && n<=9999):
                console.log('numero composto da 4 cifre');
                
                break;
    
            case (n>9999):
            console.log('numero troppo grande');
            
                break;
            
            default:
                console.log('inserisci un numero intero positivo');
                break;
                
                
        }
            
}


let numero = prompt('Quale numero vuoi verificare?');


counter(numero);
