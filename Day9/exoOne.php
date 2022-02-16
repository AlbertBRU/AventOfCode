<?php

$data = '21999432103987894921985678989287678967899899965678';

// On a une très grande chaine de caractères, qui à la base est un tableau de 100 lignes, chacunes composées de 100 caractère. Soit 10.000 char.
// Pour commencer, on boucle sur le petit tableau de l'exemple, moins de données a manipuler.
// On met la chaine de caractères entre crochet sinon c'est un très grand nombre.
// var_dump($data[0]);
// Ca nous sort bien le premier caractère.
// On récupère maintenant la longueur de chaine d'une ligne: 
$linelength = 10;

$highligtedCollect = [];

// si $i = 0 dans les boucles for, il faudra une boucle indépendante pour la 1ere et dernière ligne, à cause du fait que si on indique $data[-10], plutot que de renvoyer indéfini, il ira a reculon en partant de la fin de la chaine de caractère.

// On doit boucler chaque côté avant de boucler chaque ligne, les côtés du tableau ayant des propriétés que n'a pas la chaine de char.

// Il y aura 4 données à vérifier à la main correspondant aux 4 coins, on pourra faire 4 if sur la fin.
// On boucle donc sur la première ligne. On check a gauche a droite et en bas.

for ($i=1; $i < $linelength; $i++) { 
  // var_dump($data[$i]);
  if ($data[$i] < $data[$i-1] && $data[$i] < $data[$i+1] && $data[$i] < $data[$i+$linelength] ) {
    $spray = $data[$i]+1;
    array_push($highligtedCollect, $data[$i]);
    
    while ($data[$i-1] == $spray || $data[$i+1] == $spray || $data[$i+$linelength] == $spray || $data[$i-$linelength] == $spray) {
      if ($data[$i-1] == $spray ) {
        # code...
      }
    }
  }
}
// On boucle maintenant sur la dernière ligne du tableau on finit un coup avant le dernier char qu'on viendra checker à la main.
// On check a gauche a droite et en haut.
for ($i=(strlen($data)-$linelength); $i < strlen($data) -1; $i++) { 
  // var_dump($data[$i]);
  if ($data[$i] < $data[$i-1] && $data[$i] < $data[$i+1] && $data[$i] < $data[$i-$linelength] ) {
    array_push($highligtedCollect, $data[$i]);
  }
}
// Bouclons sur la première colonne. On check a droite, en bas et en haut.

for ($i=$linelength; $i < strlen($data) - $linelength ; $i+=$linelength) { 
  //  var_dump($data[$i]);
   if ($data[$i] < $data[$i-$linelength] && $data[$i] < $data[$i+$linelength] && $data[$i] < $data[$i+1] ) {
    array_push($highligtedCollect, $data[$i]);
  }
}

// Bouclons sur la dernière colonne.On check a gauche, en bas et en haut.
for ($i=($linelength*2-1); $i < strlen($data) -1 ; $i+=$linelength) { 
  //  var_dump($data[$i]);
   if ($data[$i] < $data[$i-$linelength] && $data[$i] < $data[$i+$linelength] && $data[$i] < $data[$i-1] ) {
    array_push($highligtedCollect, $data[$i]);
  }
}

// Maintenant on oublie pas de boucler à l'interieur
// Pour pas toucher les bords, on va faire un for dans un for
// Pour chaque ligne qui n'es pas la permière ni la dernière
for ($i=$linelength+1; $i < strlen($data) - $linelength; $i+=$linelength) { 
  // Alors on parcours la ligne...
  for ($index=$i; $index < $i+$linelength-2; $index++) { 
             var_dump($data[$index]);

    if ($data[$index] < $data[$index-1] && $data[$index] < $data[$index+1] && $data[$index]< $data[$index+$linelength] && $data[$index]< $data[$index-$linelength]) {
        //  var_dump($data[$index]);
      array_push($highligtedCollect, $data[$index]);
    }

  }
}


var_dump($highligtedCollect);

foreach ($highligtedCollect as $key => $value) {
  $highligtedCollect[$key] = $value+1;
}
var_dump($highligtedCollect);

$result = array_sum($highligtedCollect);
var_dump('le resultat est : '.$result);

//! Code à nettoyer