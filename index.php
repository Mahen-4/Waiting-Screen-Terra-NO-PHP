<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=waitingterra","root","");

$error = "";
 ?>
 <style type="text/css"> #error{opacity: 0;} </style><?php
if(isset($_POST['envoyer'])){
  ?> <style type="text/css"> #error{opacity: 1;} </style> <?php
  if(!empty($_POST['city'])){
    $error = "ERREUR !";
  }
  else{
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND $_POST['region'] !== "Votre Region"){
      $nom = htmlspecialchars($_POST['nom']);
      $prenom = htmlspecialchars($_POST['prenom']);
      $region = htmlspecialchars($_POST['region']);
      $insertData = $bdd->prepare('INSERT INTO waitingList (nom,prenom,region) VALUES(?,?,?)');
      $insertData->execute(array($nom,$prenom,$region));
      $error = "Préinscription Validé ! ";
    }
    else{
      $error = "Veuillez remplir tous les champs !";
    }
  }
}

?>





<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Waiting Screen Terra</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div id="error"><?php echo $error; ?></div>

  <div id="light">
		<div id="lineh1"></div>
		<div id="lineh2"></div>
		<div id="lineh3"></div>
		<div id="lineh4"></div>
	</div>

  <img src="./images/Logo Terra bleu3.png" id="logoTerra"/>

  <div id="circles">
      <div class="cercleO" id="cercle0">Transmettre</div>
      <div class="cercleO" id="cercle1">Sensibiliser</div>
      <div class="cercleO" id="cercle2">Informer</div>
      <div class="cercleO" id="cercle3">Eduquer</div>
  </div>

  <div class="scrolldown">
    <div class="chevron"></div>
    <div class="chevron"></div>
    <div class="chevron"></div>
  </div>

  <div class="wrapper">
    <p>Terra propose : </p>
    <div class="words">
      <span>Anthropologie & civilisation<img src="./images/Anthropologie & civilisation.png" /></span>
      <span>Géographie, la terre & la vie de la planète<img src="./images/Géographie, la terre & la vie de la planète.png" /></span>
      <span>L'exploration et les Grandes Découvertes<img src="./images/L'exploration et les Grandes Découvertes.png" /></span>
      <span>L'univers<img src="./images/L'univers.png" /></span>
    </div>
  </div>

  <div id="comite_banner">
    <p>Comité éthique & scientifique</p>
    <img src="./images/logoTerraEcrie.png" alt="" height="70"/>
  </div>

  <div id="comite">
    <div class="card">
      <div class="card-image etienne"></div>
      <h1>Étienne Ghys</h1>
    </div>
    <div class="card">
      <div class="card-image isabelle"></div>
      <h1>Isabelle Chuine</h1>
    </div>
    <div class="card">
      <div class="card-image francoise"></div>
      <h1>Françoise Combes</h1>
    </div>
    <div class="card">
      <div class="card-image herve"></div>
      <h1>Hervé Le Treut</h1>
    </div>
    <div class="card">
      <div class="card-image eric"></div>
      <h1>Éric Westhof</h1>
    </div>
    <div class="card">
      <div class="card-image alfredo"></div>
      <h1>Alfredo PENA-VEGA</h1>
    </div>
    <div class="card">
      <div class="card-image cheikh"></div>
      <h1>Cheikh Kane</h1>
    </div>
    <div class="card">
      <div class="card-image emma"></div>
      <h1>Emma Haziza</h1>
    </div>
    <div class="card">
      <div class="card-image barbara"></div>
      <h1>Barbara Kan-Waechter</h1>
    </div>
    <div class="card">
      <div class="card-image jacques"></div>
      <h1>Jacques Séguéla</h1>
    </div>
    <div class="card">
      <div class="card-image cherif"></div>
      <h1>Chérif Rahmani</h1>
    </div>
    <div class="card">
      <div class="card-image stephane"></div>
      <h1>Stéphane Dugast</h1>
    </div>
    <div class="card">
      <div class="card-image gerard"></div>
      <h1>Gérard Civet</h1>
    </div>
    <div class="card">
      <div class="card-image marie"></div>
      <h1>Marie-Sophie Lelouch</h1>
    </div>
    <div class="card">
      <div class="card-image pascal"></div>
      <h1>Pascal Légitimus</h1>
    </div>
  </div>

  <div id="mvmTerra">
    <p>Rejoignez le mouvement Terra avec le <b>#Terranaute</b> sur tous les réseaux sociaux</p>
    <img src="./images/icons/twitter.webp" alt="" height="60"/>
    <img src="./images/icons/facebook.webp" alt="" height="60"/>
    <img src="./images/icons/instawebp.webp" alt="" height="60"/>
  </div>

  <h1 id="citation">"Le changement climatique est une manière de réfléchir au Monde que nous ne voulons plus
    et surtout à celui que nous voulons construire demain".<br><br><b> François MOTTIER (Fondateur de TERRA)</b></h1>


  <div id="canvasThree">

    <form method="POST" action="">
      <input type="text" placeholder="Nom" name="nom"/>
      <input type="text" placeholder="Prénom" name="prenom"/>
      <select name="region">
        <option value="Votre Region">Votre Région</option>
        <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
        <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
        <option value="Bretagne">Bretagne</option>
        <option value="Centre-Val de Loire">Centre-Val de Loire</option>
        <option value="Corse">Corse</option>
        <option value="Grand Est">Grand Est</option>
        <option value="Hauts-de-France">Hauts-de-France</option>
        <option value="Île-de-France">Île-de-France</option>
        <option value="Normandie">Normandie</option>
        <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
        <option value="Occitanie">Occitanie</option>
        <option value="Pays de la Loire">Pays de la Loire</option>
        <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
      </select>
      <input type="text" id="city" name="city"/>
      <input type="submit" value="Se préinscrire" name="envoyer" id="envoyer">
    </form>
  </div>

    <script src="js/three.js"></script>
    <script src="js/index.js"></script>
    <script src="js/textAnim.js"></script>
  </body>
</html>
