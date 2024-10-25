let bowling = {
    'players': [
        {name: 'Livio', scores: []},
        {name: 'Paola', scores: []},
        {name: 'Filippo', scores: []},
        {name: 'Giuseppe', scores: []}
    ],

    addScores: function(){
        this.players.forEach(giocatore => {
            for(i=0;i<10;i++){
                giocatore.scores.push(Math.floor(Math.random() * (10 - 1 +1) + 1))
            }
        })

        console.log(this.players);
        
    },
    
    addPlayer: function(nome){
        let newPlayer = {name: nome, scores: []}
        for(i=0;i<10;i++){
            newPlayer.scores.push(Math.floor(Math.random() * (10 - 1 +1) + 1))
        }
        this.players.push(newPlayer);
        console.log('Nuovo giocatore: ' + nome);
        
        console.log(this.players);
    },

    resultPlayers: function(){
        this.players.forEach(giocatore => {
            let tot = giocatore.scores.reduce((acc, n) => acc + n);
            giocatore.totale = tot;            
        })
        this.players.sort((a, b)=> b.totale - a.totale)
    },

    win: function(){
        let winner = this.players[0];
        console.log('Il vincitorie è ' + winner.name + ' con ' + winner.totale);
        
    },

    classifica: function(){
        console.log('\nCLASSIFICA:');
        this.players.forEach(giocatore=>{
            console.log(giocatore.name + ': ' + giocatore.totale + ' punti');
            
        })        
    }
}


bowling.addScores();

bowling.addPlayer('Riccardo');

bowling.resultPlayers();

bowling.win();

bowling.classifica();