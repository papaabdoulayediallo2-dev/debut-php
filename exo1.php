<?php
/* 
Demande à l'utilisateur de rentrer une note ou de taper "fin"
chaque note est sauvegardee dans un tableau $notes (pensez $notes [])
à la fin on affiche le tableau de note sous forme de liste
 */
do{
    $note = readline("entre un note ou tape fin: ");
    if($note < 0 || $note > 20){
        echo "note invalide \n";
    }else{
        $notes[] = (float)$note;
    }
}while($note != 'fin');

foreach ($notes as $value) {
    echo "- $value \n";
}
print_r($notes);