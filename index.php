<?php


// <!-- SELFWORK PHP 01

// esercizio 1

// Definisci 4 variabili:
// Integer
// Float
// String
// Boolean
// A schermo, fai comparire il tipo di dato delle varie variabili.
// Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione. -->


$Integer= 10;
$String= "Ciao";
$Float= 4.4;
$Boolean= true;

var_dump($Integer,$String,$Float,$Boolean);

define("INTEGER", $Integer);
define("STRING", $String);
define("FLOAT", $Float);
define("BOOLEAN", $Boolean);

var_dump(INTEGER,STRING,FLOAT,BOOLEAN);

// <!-- esercizio 2

// Date le seguenti variabili:
// correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco hai sete? Perche' hai bevuto tutto.“ -->

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = $text2;
$text7 = 'bevuto';
$text8 = "tutto";

echo $text1 . " " . $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8;

// <!-- esercizio 3

// Dati i seguenti array:
// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “E possa la Fortuna essere sempre a vostro favore!“.
// HINT:

// Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc. -->

$words1 = [
    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
        'oscura', 'era', 89, ['mezzo', 'E'],
        'ritrovai', 'per'
    ],
    'diritta'
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['Fortuna']
    ],
    'fine'=>'!'
];

$results=    $words1[6][3][1] . " " . $words2["elemento2"] . " " . "la" . " " . $words2["elemento3"][3][0] . " " . $words1[2] . " " . $words1[5] . " " . "a" . " " . $words1[0] . " " . $words2["elemento3"][2];

echo $results;


// <!-- esercizio 4

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// es.

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Mirco', 'surname' => 'Carpo', 'gender' => 'male'],
  ['name' => 'Marta', 'surname' => 'Trota', 'gender' => 'female'],

];

foreach ($users as $user) {
    if ($user["gender"] == "male") {
        var_dump("Buongiorno Sig. {$user['name']} {$user['surname']}");
    } elseif ($user["gender"] == "female") {
        var_dump("Buongiorno Sig.ra {$user['name']} {$user['surname']}");
    } else {
        var_dump("Buongiorno {$user['name']} {$user['surname']}");
    }
};


// <!-- esercizio 5

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array -->
$arrayNumber = [2,2,3,4,5,6,7,8,9];
$count = 0;
$tot = 0;

for ($i=0; $i < count($arrayNumber); $i++) { 
    if ($arrayNumber[$i] % 2 == 0) {
        
        $count++;
        $tot=$tot+$arrayNumber[$i];
        
    }

};
$media = $tot / $count;

echo $media;


// <!-- esercizio 6

// Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// se multiplo di 5 stampare “JAVASCRIPT”;
// se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

    for ($i=1; $i <= 100; $i++) { 
        
        if ($i % 3 == 0 && $i % 5 == 0) {
           echo "HACKADEMY\n";
        } elseif ($i % 5 == 0){
           echo "JAVASCRIPT\n";
        } elseif ($i % 3 == 0){
           echo "PHP\n";
        } else {
           echo $i . "\n";
        }
    };



// PUSHATE TUTTO GITHUB IN UNA REPO CHIAMATA php_01_vostronome_vostrocognome -->