

<!-- METHODE 3 avec post -->
 <?php 
require 'header.php' ?>



<form action="/jeu.php" method="POST">
 <div class="row">
    <div class="col">
       <div class="container mt-5">
             <div class="card">
        <div class="card-header text-danger">
        
        </div>
        <div class="card-body">
            <input type="checkbox" name="parfum[]"  value="fraise">fraise <br>
            <input type="checkbox" name="parfum[]"  value="vanille">vanille <br>
            <input type="checkbox" name="parfum[]"  value="chocolat">chocolat <br>
            <button type="submit" class="btn btn-success"> deviner</button>
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
 </div>
</form>