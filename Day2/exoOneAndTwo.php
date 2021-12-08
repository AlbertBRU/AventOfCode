<?php  // On récupère toutes les valeurs pour les stocker dans un tableau. A l'aide de la fonction de "remplacement" de VSCode, je met en place mon tableau. 
$depthAndMove = [ 
    'forward 8', 'down 9', 'up 4', 'down 8', 'down 3', 'down 3', 'down  2', 'forward  1', 'forward 4', 'down 5', 'up 7', 'forward  1', 'down  1', 'down 6', 'down 9', 'down 5', 'forward 5', 'forward 6', 'forward 4', 'down  2', 'down 8', 'forward 3', 'down 5', 'forward 6', 'up 7', 'up  2', 'forward  2', 'forward 4', 'forward  1', 'up 8', 'up 9', 'down 8', 'up 8', 'up 6', 'up  2', 'down 7', 'up 3', 'forward 8', 'forward 5', 'down 8', 'down 8', 'forward 5', 'down 3', 'down 4', 'down 5', 'down  2', 'up 7', 'down  1', 'forward 9', 'forward 9', 'up 6', 'down 5', 'up  1', 'down 8', 'up  1', 'forward  2', 'down 4', 'down 5', 'down  2', 'up 7', 'forward 9', 'up 8', 'down 3', 'up 6', 'down  2', 'up  2', 'forward 3', 'up  1', 'up  1', 'forward 9', 'down 3', 'down 5', 'up 7', 'down  1', 'up 5', 'up 5', 'up 7', 'down 9', 'down 3', 'up 3', 'forward 9', 'forward 7', 'up 9', 'down 3', 'down  2', 'up 8', 'forward 5', 'forward 9', 'down 5', 'down  2', 'down 9', 'down 6', 'down 6', 'up 3', 'forward 3', 'up 6', 'forward 9', 'down 3', 'down  2', 'forward 6', 'down 7', 'down  2', 'down 8', 'forward  2', 'forward 8', 'forward 4', 'forward  1', 'up 6', 'forward  2', 'forward 8', 'forward 5', 'forward 4', 'up  1', 'down 8', 'up 3', 'forward 8', 'forward 4', 'up 6', 'down  2', 'forward 6', 'forward 9', 'down  2', 'up 3', 'forward 8', 'down 6', 'up 4', 'down 7', 'up 3', 'forward 4', 'down 8', 'forward 5', 'forward  1', 'down 3', 'forward  1', 'forward 8', 'down 3', 'forward 4', 'forward  2', 'up 7', 'forward 6', 'forward 8', 'forward 6', 'down 5', 'down  2', 'down 8', 'down  2', 'down 9', 'down 5', 'down 3', 'down 8', 'up  1', 'forward  1', 'up 5', 'up  1', 'up 6', 'up 3', 'up  2', 'forward 5', 'forward 6', 'down 4', 'up 3', 'up 9', 'down  1', 'forward  1', 'forward 6', 'down 9', 'forward 5', 'forward 3', 'forward  2', 'down 7', 'down 5', 'down 8', 'forward 9', 'forward 4', 'down  2', 'up 9', 'down  1', 'forward 5', 'forward  1', 'forward 9', 'down 8', 'forward 5', 'down 8', 'forward 3', 'up 4', 'down 7', 'down 9', 'forward 3', 'forward 7', 'down 9', 'up 5', 'up 7', 'forward 8', 'down 3', 'down 9', 'down  1', 'forward 3', 'down  1', 'up 9', 'forward 6', 'down 9', 'forward  1', 'forward 5', 'down 6', 'up 7', 'forward 9', 'down 9', 'forward 6', 'down 3', 'up 6', 'up  2', 'up  1', 'up 9', 'down 9', 'forward 4', 'forward 6', 'up 7', 'forward  2', 'down 5', 'forward 7', 'down 5', 'forward 4', 'down 8', 'up 3', 'down  1', 'forward 5', 'down 5', 'up 6', 'down 6', 'forward 4', 'down 8', 'down 6', 'down 7', 'down 9', 'down 4', 'forward 5', 'down 8', 'down 7', 'forward 3', 'forward 5', 'up 8', 'down 4', 'down  1', 'up 6', 'up 9', 'down  2', 'down  2', 'up  1', 'up 7', 'forward  1', 'down  1', 'down 4', 'down 8', 'forward  1', 'forward 3', 'down 8', 'up 9', 'forward  1', 'down 6', 'forward 3', 'down 9', 'down  2', 'up 8', 'forward 5', 'up  1', 'forward 9', 'down 4', 'forward 3', 'up 6', 'up 4', 'down 9', 'down 8', 'down 3', 'forward 6', 'forward 6', 'down  1', 'down  2', 'down  2', 'down  2', 'up 7', 'down  2', 'forward 9', 'down 3', 'up 5', 'forward 9', 'up 5', 'forward  1', 'down  1', 'forward 7', 'down 8', 'down 9', 'down  1', 'forward 8', 'up  1', 'forward 8', 'down  1', 'forward 9', 'down 8', 'down  2', 'forward 4', 'up  2', 'down 7', 'forward 6', 'forward 6', 'forward 4', 'up 8', 'up  2', 'down 8', 'up 7', 'forward  2', 'forward 6', 'forward 3', 'up 5', 'forward 9', 'down 9', 'forward 6', 'up  2', 'down 6', 'forward 4', 'forward 5', 'down 3', 'up  2', 'forward 3', 'forward  2', 'up 7', 'down  1', 'up  1', 'up 8', 'down 4', 'forward 7', 'forward  2', 'up  2', 'down 4', 'forward 4', 'forward  2', 'forward  2', 'down 8', 'down  2', 'down  2', 'forward 6', 'up  2', 'up 9', 'down  1', 'down 7', 'forward 9', 'forward 4', 'up 8', 'forward  2', 'forward 5', 'down 3', 'down 6', 'down 4', 'forward 7', 'up  1', 'forward 7', 'down 8', 'up  2', 'down 8', 'forward 6', 'down 3', 'up 9', 'up 6', 'up 6', 'forward 5', 'forward  1', 'forward 3', 'forward 3', 'down 7', 'down 3', 'forward 8', 'forward  2', 'down 7', 'down  1', 'up 4', 'forward  2', 'forward  1', 'up 6', 'forward 9', 'up 4', 'forward 5', 'up 4', 'forward 3', 'down  1', 'forward 6', 'forward  2', 'down 3', 'down 7', 'forward 7', 'down 4', 'forward 6', 'down 8', 'forward 5', 'up 9', 'up 9', 'forward 4', 'forward 8', 'down 6', 'down 7', 'forward  1', 'up 4', 'forward 9', 'forward 7', 'forward  2', 'forward 6', 'up 4', 'forward 4', 'down 3', 'down  2', 'up 4', 'forward 4', 'forward 3', 'up 8', 'forward 8', 'down 9', 'forward 4', 'forward 6', 'forward 7', 'down 5', 'forward 6', 'down 3', 'up  2', 'down 4', 'forward  1', 'up 3', 'forward 4', 'down 7', 'down 9', 'down 6', 'up 7', 'down  2', 'down 5', 'forward 7', 'up 6', 'down  2', 'forward 4', 'down 9', 'up 8', 'forward 6', 'down 4', 'down 3', 'up 9', 'down 6', 'down 9', 'up 3', 'down  2', 'forward 3', 'down  1', 'forward  1', 'forward 5', 'down 7', 'forward  2', 'down 8', 'down 8', 'down 7', 'forward 5', 'forward 9', 'forward 9', 'forward  2', 'up 5', 'down  2', 'forward 3', 'down  2', 'forward 9', 'up  1', 'forward  1', 'up 6', 'down  1', 'forward 4', 'down 5', 'forward  2', 'up 7', 'up 4', 'up 3', 'forward 6', 'down 5', 'forward 6', 'down 6', 'forward 6', 'down  2', 'down 8', 'up 9', 'forward  2', 'down 4', 'forward 4', 'forward 9', 'up 9', 'down 4', 'up 7', 'down 6', 'up  2', 'up 7', 'down 5', 'down 6', 'down 8', 'down  1', 'forward 6', 'forward 6', 'forward 7', 'down 3', 'forward 3', 'forward 8', 'forward  1', 'forward  2', 'down 8', 'forward 6', 'down 6', 'forward 8', 'forward 3', 'forward 6', 'down 4', 'down  2', 'forward 4', 'forward 6', 'forward 8', 'down 3', 'down 3', 'down 4', 'up  1', 'forward 3', 'down  2', 'down 3', 'down 9', 'down 3', 'down 8', 'down  1', 'down 6', 'forward 5', 'down 5', 'down 7', 'up 3', 'forward 5', 'down 7', 'down 7', 'forward 6', 'down 6', 'up 6', 'forward  2', 'up 9', 'down 3', 'forward 3', 'forward 4', 'up 6', 'down 7', 'forward  1', 'up 8', 'forward 3', 'down  1', 'forward 6', 'forward 7', 'down 5', 'down 6', 'down 8', 'up 6', 'down 4', 'down 5', 'down  1', 'up  1', 'up 9', 'up 4', 'forward  2', 'down 5', 'down 7', 'forward 5', 'forward  2', 'up  1', 'down 7', 'up 6', 'forward 5', 'down 5', 'down 9', 'up 4', 'down 6', 'forward 8', 'down 5', 'forward 6', 'forward  1', 'forward 5', 'forward 4', 'down  2', 'down 7', 'up 7', 'down 9', 'down 7', 'up 4', 'down 3', 'up 9', 'forward 3', 'up  1', 'up 7', 'forward 4', 'forward 6', 'up  2', 'forward  2', 'forward 4', 'down 6', 'forward 4', 'forward 6', 'forward 9', 'forward 4', 'forward 8', 'up 9', 'up 4', 'forward  1', 'forward 3', 'down 5', 'down 4', 'up 6', 'up  2', 'forward 9', 'up 9', 'up  2', 'forward 6', 'down 5', 'up 7', 'forward 3', 'forward 4', 'down 5', 'up 8', 'forward 7', 'forward 3', 'up 5', 'down 7', 'down 6', 'forward 9', 'up  2', 'forward 5', 'down  2', 'down 9', 'forward  1', 'down 4', 'forward 3', 'up 9', 'down  2', 'up 5', 'down 8', 'forward  1', 'up 9', 'up 7', 'up  1', 'forward 7', 'forward  1', 'forward 7', 'down  2', 'up 6', 'forward 6', 'down  1', 'forward  1', 'down 7', 'down 9', 'forward 9', 'up 3', 'forward 3', 'down  1', 'forward  1', 'forward 9', 'down 7', 'forward  2', 'down 7', 'forward  2', 'forward 4', 'down 5', 'down 5', 'forward 5', 'down 9', 'down 4', 'forward 3', 'down 4', 'down 3', 'down 3', 'down  2', 'forward  1', 'up 8', 'forward  1', 'forward 5', 'forward  1', 'forward  2', 'forward 4', 'forward 6', 'forward 8', 'forward 7', 'down 5', 'up 6', 'forward 8', 'down 9', 'up 3', 'up  2', 'down 4', 'up  1', 'forward 6', 'up 6', 'forward 9', 'forward 3', 'down 3', 'down 5', 'forward 6', 'down 6', 'down 4', 'up 6', 'forward 4', 'up 8', 'down 4', 'down 8', 'down 3', 'down  1', 'down 6', 'down 7', 'down 8', 'down  2', 'down 5', 'forward 4', 'forward 6', 'forward 7', 'down  1', 'down 5', 'forward 9', 'down 6', 'forward 6', 'forward 7', 'forward 4', 'forward  2', 'forward  2', 'up 6', 'forward 9', 'up 6', 'down  1', 'forward 4', 'down  2', 'up 3', 'forward 5', 'up  1', 'forward 4', 'forward 4', 'up 4', 'down 7', 'down 5', 'up 4', 'forward 5', 'up 8', 'up 4', 'up  2', 'up 8', 'forward 6', 'down 9', 'down 8', 'down 4', 'down 4', 'up 9', 'forward 4', 'forward 5', 'forward 4', 'forward 9', 'down 7', 'down 4', 'down 3', 'down 7', 'forward 3', 'forward  1', 'down  1', 'forward 5', 'forward 6', 'down  1', 'forward 3', 'down 7', 'up 4', 'forward 4', 'forward 7', 'up  1', 'up 9', 'down 7', 'down 5', 'up 8', 'forward 3', 'forward 5', 'forward 3', 'down 6', 'down  1', 'down 9', 'up 9', 'forward 5', 'down  1', 'down  1', 'down 8', 'forward 8', 'up  2', 'down  1', 'down  2', 'down 6', 'down 3', 'forward 7', 'forward  1', 'down 4', 'up 9', 'down 7', 'down 6', 'down 9', 'forward 5', 'forward 4', 'forward 9', 'up 7', 'forward 5', 'down 6', 'forward 9', 'forward  2', 'forward 8', 'up 9', 'forward  2', 'down 8', 'up 8', 'down 8', 'down 8', 'forward  2', 'down  1', 'forward 5', 'down 4', 'up  2', 'forward 8', 'up 4', 'up 8', 'forward 4', 'forward 6', 'forward 6', 'forward 3', 'forward 5', 'forward 4', 'down 6', 'up 6', 'forward 7', 'up 3', 'down  1', 'down  1', 'down 9', 'forward 6', 'down 9', 'forward  2', 'down 7', 'down  2', 'down 5', 'forward 3', 'down 4', 'down 8', 'down 3', 'forward 6', 'up 9', 'forward  1', 'forward 4', 'forward 8', 'up 9', 'down 5', 'up 5', 'up 9', 'forward 6', 'up  2', 'forward 7', 'up 5', 'forward 8', 'forward 6', 'down  2', 'down 7', 'up 8', 'up 3', 'forward 4', 'forward  1', 'down 8', 'down 4', 'forward 6', 'forward 6', 'up 6', 'up 3', 'up 7', 'forward 6', 'up  2', 'down 8', 'forward  1', 'forward 3', 'down 3', 'forward 8', 'forward 5', 'forward 3', 'forward 9', 'down 6', 'forward 9', 'up 7', 'down 3', 'down 8', 'forward 4', 'down 9', 'up 8', 'up  1', 'forward  2', 'down  2', 'forward  1', 'down 8', 'forward 7', 'up 4', 'down  1', 'forward 8', 'down  2', 'forward 3', 'forward 9', 'down 7', 'up 4', 'up  2', 'forward  1', 'down  2', 'up 8', 'forward 4', 'down  1', 'forward 5', 'forward  1', 'down 5', 'forward  1', 'up  2', 'forward 6', 'down 5', 'down 8', 'down 3', 'down  2', 'forward  1', 'forward 5', 'down 8', 'down  1', 'forward 5', 'down 7', 'down 4', 'forward 5', 'down  1', 'down  1', 'forward 9', 'down 7', 'up 9', 'down 6', 'forward 4', 'up 8', 'forward 6', 'forward  1', 'up 6', 'forward 3', 'down 3', 'up 6', 'forward  2', 'down  2', 'forward 3', 'down  2', 'up 4', 'down 6', 'forward 4', 'down 6', 'down 4', 'up  2', 'down  2', 'up 5', 'up  2', 'down 9', 'down 5', 'forward  1', 'down 6', 'forward 4', 'forward 9', 'down  1', 'down 9', 'forward 3', 'forward 8', 'forward 9', 'down 4', 'down  1', 'up  1', 'up 7', 'down 5', 'down 3', 'down  2', 'down 8', 'forward 5', 'up  1', 'down 4', 'down 8', 'down 8', 'forward  1', 'down 5', 'forward 7', 'forward 9', 'forward 5', 'forward  2', 'down 9', 'up  1', 'down 6', 'down 5', 'forward 4', 'forward 3', 'down 4', 'down 3', 'down 8', 'forward 6', 'down  2', 'forward 7', 'down 7', 'forward 8', 'forward  1', 'forward 7', 'forward 8', 'forward 6', 
];

// EXO 1

$depth = 0;
$forward = 0;
foreach ($depthAndMove as $command) {
    // var_dump($command);
    if(strpos($command, 'forward') !== false ) {
        $lastChar = substr($command, -1);
        // var_dump($lastChar);
        $forward += $lastChar;
    } elseif (strpos($command, 'down') !== false ) {
        $lastChar = substr($command, -1);
        $depth += $lastChar;
    } elseif (strpos($command, 'up') !== false ) {
        $lastChar = substr($command, -1);
        $depth -= $lastChar;
    }
};
var_dump($forward);
var_dump($depth);

$finalResult = $forward * $depth;
var_dump($finalResult);

// EXO 2

$depthTwo = 0;
$forwardTwo = 0;
$aimTwo = 0;

foreach ($depthAndMove as $command) {

    // forward X does two things:
    if(strpos($command, 'forward') !== false ) {
        $lastChar = substr($command, -1);
        // It increases your horizontal position by X units.
        $forwardTwo += $lastChar;
        // It increases your depth by your aim multiplied by X.
        $depthTwo += $aimTwo * $lastChar;

    } 
    // down X increases your aim by X units.
    elseif (strpos($command, 'down') !== false ) {
        $lastChar = substr($command, -1);
        $aimTwo += $lastChar;
    } 
    // up X decreases your aim by X units.
    elseif (strpos($command, 'up') !== false ) {
        $lastChar = substr($command, -1);
        $aimTwo -= $lastChar;
    }
};

$finalResultTwo = $forwardTwo * $depthTwo;
var_dump($finalResultTwo);