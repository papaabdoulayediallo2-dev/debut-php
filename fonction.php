<?php

function bonjour($nom){
    echo "bonjour $nom";
}

function repondre_oui_non ($phrase) {
    while (true) {
             $reponse = readline($phrase ." - (o)ui/(n)on : ");
                if ($reponse === "o") {
                    return true;
                } elseif ($reponse === 'n') {
                return false;
            }
}
}

function demander_creneau ($phrase = 'Veuillez entrer un creneau') {
echo $phrase . "\n";
while (true) {
$ouverture = (int)readline('Heure d\'ouverture : ');
if ($ouverture >= 0 && $ouverture <= 23) {
break;
}
}
while (true) {
$fermeture = (int)readline('Heure de fermeture : ');
if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
break;
}
}
}