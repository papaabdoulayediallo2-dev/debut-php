 <?php
    // Checkbox
    $parfums = [
        'fraise' => 2500,
        'chocolat' => 3500,
        'Vanille' => 1500
    ];
    //Radio
    $cornets = [
        'pot' => 1200,
        'cornet' => 2200,
    ];
    //checkbox
    $supplements = [
        'pepite de chocolate' => 650,
        'chantilly' => 350
    ];
    require 'header.php';
    require 'function.php' ?>


 <div class="row">
     <div class="col-md-6 ">
         <form action="/jeu.php" method="GET">
             <div class="col">
                 <div class="container mt-5">
                     <div class="card">
                         <div class="card-header">
                             <h2 class="text-center text-primary"> composer votre Glace</h2>
                         </div>
                         <div class="card-body">
                             <!-- parfum -->
                             <h2 class="text-warning">Choississez un parfum </h2>
                             <?php foreach ($parfums as $parfum => $prix) : ?>
                                 <div class="checkbox">
                                     <label>
                                         <?= checkbox('parfum', $parfum, $_GET) ?>
                                         <?= $parfum ?> - <?= $prix ?> FCFA
                                     </label>
                                 </div>
                             <?php endforeach ?>
                             <!-- cornets -->
                             <h2 class="text-warning">Choississez un Cornet </h2>
                             <?php foreach ($cornets as $cornet => $prix) : ?>
                                 <div class="checkbox">
                                     <label>
                                         <?= radio('cornet', $cornet, $_GET) ?>
                                         <?= $cornet ?> - <?= $prix ?> FCFA
                                     </label>
                                 </div>
                             <?php endforeach ?>
                             <!-- supplement -->
                             <h2 class="text-warning">Choississez des supplements </h2>
                             <?php foreach ($supplements as $supplement => $prix) : ?>
                                 <div class="checkbox">
                                     <label>
                                         <?= checkbox('supplements', $supplement, $_GET) ?>
                                         <?= $supplement ?> - <?= $prix ?> FCFA
                                     </label>
                                 </div>
                             <?php endforeach ?>
                             <button type="submit" class="btn btn-success"> composer ma glage</button>
                         </div>
                         <div class="card-footer">
                             <h2>$_GET</h2>
                             <pre>
                    <?php var_dump($_GET) ?>
                    </pre>

                             <h2>$_POST</h2>
                             <pre>
                    <?php var_dump($_POST) ?>
                    </pre>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </div>
     <div class="col-md-5 mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Votre glace</h2>
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
 </div>