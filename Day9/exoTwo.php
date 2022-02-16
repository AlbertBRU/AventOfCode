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
$pits = [];

