let array = [3, 5, 10, 2, 8];

let copiaArray = array.map((number)=> number);

let somma = copiaArray.reduce((acc, n)=> (acc + n));

let media = (somma / copiaArray.length);


let min = [];
let max = [];

for( let i=0; i<copiaArray.length; i++){
    if (copiaArray[i]<media) {
        min.push(copiaArray[i])        
    } else{
        max.push(copiaArray[i])
    }
}

console.log(copiaArray);


console.log('La media è: '+media);

console.log('I valori minori della media sono: ' + min);
console.log('I valori maggiori della media sono: ' + max);

