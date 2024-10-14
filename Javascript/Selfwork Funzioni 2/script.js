function numbers(n){
    for(let i = 1; i <= n; i ++){

        if (i%15 == 0) {

            console.log('fizzbuzz');
            
        } else if (i%5 == 0){
            
            console.log('Buzz');

        } else if (i%3 == 0){

            console.log('Fizz');
            

        } else {
            console.log(i);
            
        }
        
    }

}

let num = parseInt(prompt('Quanti numeri vuoi?'));

numbers(num);






