<?php
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