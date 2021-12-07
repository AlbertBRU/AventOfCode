<?php 

//http://localhost/AventOfCode/Day%206/exoOneAndTwo.php

$baseFish = [2,5,2,3,5,3,5,5,4,2,1,5,5,5,5,1,2,5,1,1,1,1,1,5,5,1,5,4,3,3,1,2,4,2,4,5,4,5,5,5,4,4,1,3,5,1,2,2,4,2,1,1,2,1,1,4,2,1,2,1,2,1,3,3,3,5,1,1,1,3,4,4,1,3,1,5,5,1,5,3,1,5,2,2,2,2,1,1,1,1,3,3,3,1,4,3,5,3,5,5,1,4,4,2,5,1,5,5,4,5,5,1,5,4,4,1,3,4,1,2,3,2,5,1,3,1,5,5,2,2,2,1,3,3,1,1,1,4,2,5,1,2,4,4,2,5,1,1,3,5,4,2,1,2,5,4,1,5,5,2,4,3,5,2,4,1,4,3,5,5,3,1,5,1,3,5,1,1,1,4,2,4,4,1,1,1,1,1,3,4,5,2,3,4,5,1,4,1,2,3,4,2,1,4,4,2,1,5,3,4,1,1,2,2,1,5,5,2,5,1,4,4,2,1,3,1,5,5,1,4,2,2,1,1,1,5,1,3,4,1,3,3,5,3,5,5,3,1,4,4,1,1,1,3,3,2,3,1,1,1,5,4,2,5,3,5,4,4,5,2,3,2,5,2,1,1,1,2,1,5,3,5,1,4,1,2,1,5,3,5,2,1,3,1,2,4,5,3,4,3];

// On va stocker le nombre de poissons la dedans en fonction de leur maturité
// Avec ces solutions, on évite l'itération d'un tableau qui va dépasser les 97 millions d'entrées, et on s'occupera de 10 entrées seulement
$array = array(
  0 => 0,
  1 => 0,
  2 => 0,
  3 => 0,
  4 => 0,
  5 => 0,
  6 => 0,
  7 => 0,
  8 => 0,
);

foreach ($baseFish as $key => $value) {
  
  for ($i=0; $i < 9; $i++) { 
    if ($value == $i) {
      $array[$i] += 1;
    }
  }
}

// var_dump($array);

// $array[8] = $array[4];

// var_dump($array);


for ($d=0; $d < 256 ; $d++) {
  // var_dump($array);

  $numOfZ = $array[0];
  // La valeur de droite passe sa valeur à la valeur de gauche
  // C'est la phase de maturation.
  $array[0] = $array[1];
  $array[1] = $array[2];
  $array[2] = $array[3];
  $array[3] = $array[4];
  $array[4] = $array[5];
  $array[5] = $array[6];
  $array[6] = $array[7];
  $array[7] = $array[8];

  // Les adultes a 0 viendront repasser leur courbe de croissance à partir de 6
  $array[6] += $numOfZ;
  // et pondront un oeuf qui donnera au prochain tour un 7
  $array[8] = $numOfZ;
}

var_dump(array_sum($array));



// $d équivaut à une journée. Les nouveaux poissons seront poussés dans le tableau à la fin de la journée, afin de ne pas grandir au passage dans le foreach.

// for ($d=0; $d < 256 ; $d++) { 
//   // var_dump("after " . $d . " days");
//   // var_dump($baseFish);

//   // Au début de chaque journée on reset le compteur de nouveau poisson à 0.
//   $newFish = 0;

//   foreach ($baseFish as $key => $fish) {
//     // Si le poisson à plus d'un jour avant de se dédoubler, alors on retire un jour...
//     if ($fish > 0) {
//       $baseFish[$key] -= 1;
//     }
//     // Sinon, le poisson retourne à son état initial et produira un nouveau poisson en fin de journée.
//     else {
//       $baseFish[$key] = 6;
//       $newFish += 1;
//     }
//   };
//   // A la fin de la journée, on pousse tous les nouveaux poissons dans le tableau
//   for ($i=0; $i < $newFish; $i++) { 
//     array_push($baseFish, 8);
//   };
  
// };
// var_dump(count($baseFish));