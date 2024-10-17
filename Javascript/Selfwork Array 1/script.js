
// array di partenza
let array = [3, 7, -2, 5, 8, 1, 2, 5, 6, -4, 12, 25];

console.log(array);


// array in ordine decrescente
let arrayDecrescente = array.map ((number)=> number);

arrayDecrescente = arrayDecrescente.sort((a, b)=> b - a);

console.log(arrayDecrescente);



// array in ordine crescente
let arrayCrescente = array.map ((number)=> number);

arrayCrescente = arrayCrescente.sort((a, b)=> a - b);

console.log(arrayCrescente);