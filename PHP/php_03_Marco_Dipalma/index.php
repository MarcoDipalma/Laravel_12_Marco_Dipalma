<?php

// $

$words1 = [
    'vostro',
    67,
    'essere',
    'colle ',
    'mi ',
    'sempre',
  [
    'oscura',
    'era ',
    89,
    [
    'mezzo ',
     'E'
    ],
  'ritrovai ',
  'per '
  ],
  'diritta '
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
      'Virgilio',
      'Favore',
      'favore',
      ['fortuna']
    ],
   'fine' => '!'
  ];

  $words3 = [
    'Nel ',
    'di ',
    'cammin ',
    'nostra ',
    'vita ',
    'una ',
    'selva ',
    ', ',
    "che' ",
    'la ',
    'via ',
    'smarrita'
  ];


// Stringa finale : “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“

echo $words3[0].$words1[6][3][0].$words3[1].$words3[2].$words3[1].$words3[3].$words3[4].$words1[4].$words1[6][4].$words1[6][5].$words3[5].$words3[6].$words1[6][0].$words3[7].$words3[8].$words3[9].$words1[7].$words3[10].$words1[6][1].$words3[11];



?>