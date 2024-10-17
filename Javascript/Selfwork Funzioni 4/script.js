
// let stringa = prompt('Digita ciò che vuoi, ti dirò se è un palindromo o no');

// let stringa_senza_spazi = stringa.replace(/\W/g, "");

// let stringa_capovolta = stringa_senza_spazi.split('').reverse().join('');

// if (stringa_senza_spazi==stringa_capovolta) {
//     console.log('Questa stringa è un palindromo');
    
// } else {
//     console.log('Questa stringa non è un palindromo');

// }


function stringaPalindroma(str){
    
    let str_senza_spazi = str.replace(/\W/g, "");

    let str_capovolta = str_senza_spazi.split('').reverse().join('');

    if(str_senza_spazi==str_capovolta){
        return true
    } else{
        return false
    }
}

let stringa = prompt('Digita ciò che vuoi, ti dirò se è un palindromo o no');

console.log(stringaPalindroma(stringa));




