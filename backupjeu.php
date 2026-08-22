<!-- Methode 1 -->
<!-- Methode 1 -->
<!-- <?php 
$adeviner = 150;
require 'header.php' ?>
<form action="/jeu.php" method="GET">
 <div class="row">
    <div class="col">
       <div class="container mt-5">
             <div class="card">
        <div class="card-header text-danger">
            NOMBRE A DEVINER
        </div>
        <div class="card-body">
            <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?php if(isset($_GET['chiffre'])) { echo htmlentities($_GET['chiffre']); } ?>" >
            <button type="submit" class="btn btn-success"> deviner</button>
        </div>
        <div class="card-footer">
           <?php if(isset($_GET['chiffre'])): ?>
                <?php if($_GET['chiffre'] > $adeviner) : ?>
                    VOTRE chiffre est trop grand
                <?php elseif ($_GET['chiffre'] < $adeviner) : ?>
                        VOTRE chiffre est trop petit
                <?php else: ?>
                    BRAVO
                <?php endif; ?>
            <?php endif; ?>
        </div>
        </div>
       </div>
    </div>
 </div>
</form> -->
<!-- METHODE 2 -->
<!-- <?php 
$adeviner = 150;
$error = null;
$succes = null;
$value = null;
if(isset($_GET['chiffre'])){
    if (($_GET['chiffre'] > $adeviner)) {
        $error = "chiffre trop grand";
    }elseif($_GET['chiffre'] < $adeviner){
        $error = "chiffre trop petit";
    }else{
        $succes = "BRAVO ! vous avez deviner le chiffre <strong> $adeviner </strong>";
    }
    $value = (int)$_GET['chiffre'];
}

require 'header.php' ?>



<form action="/jeu.php" method="GET">
 <div class="row">
    <div class="col">
       <div class="container mt-5">
             <div class="card">
        <div class="card-header text-danger">
            NOMBRE A DEVINER
        </div>
        <div class="card-body">
            <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?php echo $value ?>" >
            <button type="submit" class="btn btn-success"> deviner</button>
        </div>
        <div class="card-footer">
            <?php if($error): ?>
                <div class="alert alert-danger">
                    <?php echo $error ?>
                </div>
            <?php elseif($succes): ?>
                <div class="alert alert-success">
                    <?php echo $succes ?>
                </div>
            <?php endif; ?>     
         </div>
        </div>
       </div>
    </div>
 </div>
</form> -->