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
    $ingredients = [];
    $total = 0;
    if (isset($_GET['parfum'])) {
        foreach ($_GET['parfum'] as $parfum) {
            if (isset($parfums[$parfum])) {
                $ingredients[] = [
                    'nom' => $parfum,
                    'prix' => $parfums[$parfum]
                ];
                $total += $parfums[$parfum];
            }
        }
    }
    if (isset($_GET['supplement'])) {
        foreach ($_GET['supplement'] as $supplement) {
            if (isset($supplements[$supplement])) {
                $ingredients[] = [
                    'nom' => $supplement,
                    'prix' => $supplements[$supplement]
                ];
                $total += $supplements[$supplement];
            }
        }
    }
    if (isset($_GET['cornet'])) {
        $cornet = $_GET['cornet'];
        if (isset($cornets[$cornet])) {
            $ingredients[] = [
                'nom' => $cornet,
                'prix' => $cornets[$cornet]
            ];
            $total += $cornets[$cornet];
        }
    }

    require 'header.php';
    require 'function.php' ?>


 <div class="row">
     <div class="col-md-6 ">
         <form action="/glace.php" method="GET">
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
                                         <?= checkbox('supplement', $supplement, $_GET) ?>
                                         <?= $supplement ?> - <?= $prix ?> FCFA
                                     </label>
                                 </div>
                             <?php endforeach ?>
                             
                         </div>
                         <div class="card-footer">
                             <!-- <h2>$_GET</h2>
                             <pre>
                            <?php var_dump($_GET) ?>
                            </pre>

                             <h2>$_POST</h2>
                             <pre>
                            <?php var_dump($_POST) ?>
                            </pre> -->
                            <button type="submit" class="btn btn-success"> composer ma glage</button>
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
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Ingrédient</th>
                             <th>Prix (FCFA)</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach ($ingredients as $ingredient): ?>
                             <tr>
                                 <td><?= $ingredient['nom'] ?></td>
                                 <td><?= $ingredient['prix'] ?></td>
                             </tr>
                         <?php endforeach ?>
                     </tbody>
                 </table>
             </div>
             <div class="card-footer">
                 <h3 class="text-dark">TOTAL: <span class="text-success"><?= $total ?> FCFA</span></h3>
             </div>

         </div>
     </div>
 </div>