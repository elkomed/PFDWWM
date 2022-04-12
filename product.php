<?php
include './nav.php';
require "./auth.php";

?>

 <div class="header1">
    
</div> 


<!-- <form method="GET">
<input type="search" name="s" placeholder="recherche un utilisateur">
<input type="submit" name=".....">

</form> -->


<ul class="page">
    <li id="1">Homme</li>
    <li id="2">Femme</li>
    <li id="3">Autres</li>
</ul>

<?php
require './bdd.php';

$req = $pdo->query('SELECT * FROM articles LIMIT 0,8 ');

while($data = $req->fetch()){

    echo '

<div class="row1">
  <div class="column1">
      <div class="card">
        <img src="'.$data->images.'" alt="" style="width:100%">
        <div class="container">
          <h2 class="marque">'.$data->modele.'</h2>
          <p class="prix">'.$data->prix.' €</p>
        </div>
      </div>
  </div>
</div>
';
}

$req = $pdo->query('SELECT * FROM articles LIMIT 8 OFFSET 16 ');

while($data = $req->fetch()){

    echo '

<div class="row2">
  <div class="column1">
      <div class="card">
        <img src="'.$data->images.'" alt="" style="width:100%">
        <div class="container">
          <h2 class="marque">'.$data->modele.'</h2>
          <p class="prix">'.$data->prix.' €</p>
        </div>
      </div>
  </div>
</div>
';
}

$req = $pdo->query('SELECT * FROM articles LIMIT 16 OFFSET 24 ');

while($data = $req->fetch()){

    echo '

<div class="row3">
  <div class="column1">
      <div class="card">
        <img src="'.$data->images.'" alt="" style="width:100%">
        <div class="container">
          <h2 class="marque">'.$data->modele.'</h2>
          <p class="prix">'.$data->prix.' €</p>
        </div>
      </div>
  </div>
</div>
';
}

$req = $pdo->query('SELECT * FROM articles LIMIT 24 OFFSET 40 ');

while($data = $req->fetch()){

    echo '

<div class="row4">
  <div class="column1">
      <div class="card">
        <img src="'.$data->images.'" alt="" style="width:100%">
        <div class="container">
          <h2 class="marque">'.$data->modele.'</h2>
          <p class="prix">'.$data->prix.' €</p>
        </div>
      </div>
  </div>
</div>
';
}


?>


<?php
include './footer.php';
?>

