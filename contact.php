<?php 
$creneaux = creneaux_html(CRENEAUX);
require_once 'function.php';
require 'header.php' ?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nobis reprehenderit sunt neque provident velit excepturi nihil at tenetur dolorem possimus nam unde labore laudantium facilis commodi, animi delectus corrupti.</p>
    </div>
    <div class="col-md-4">
        <?= $creneaux ?>
    </div>
</div>