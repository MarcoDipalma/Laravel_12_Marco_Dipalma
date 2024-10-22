let array = [3, 5, 10, 2, 8];

let somma = array.reduce((acc,n)=> acc + n);

let media = somma / array.length;

let min = array.filter( (n) => n < media);

let max = array.filter((n)=> n > media);

console.log('La media è: '+media);

console.log('I valori minori della media sono: ' + min);
console.log('I valori maggiori della media sono: ' + max);