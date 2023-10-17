<?php
include('../bd.php');   

if(isset($_POST['inscrire'])){
   $nom=($_POST['nom']);
   $prenom=($_POST['prenom']);
   $telephone=($_POST['telephone']);
   $email=($_POST['email']);
   $mdp=(md5($_POST['password']));

$sql= ('INSERT INTO `info`( `prenom`, `nom`, `email`, `mot_de_pass`, `telephone`) VALUES(?,?,?,?,?)');
$statement=$conn->prepare($sql);
$statement->execute(array($prenom,$nom,$email,$mdp,$telephone));
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class=form>
    <form action="" method="post">
    <p><b><h2>Bienvenue</h2></b></p>
    <p>Fanalisez votre inscription en rempliçant les information manquantes </p><br>

    <div class='nom_pre'>
    <label for="">Prenom</label>
    <input type="text" name="prenom" id=""><br>
    <label for="">Nom</label>
    <input type="text" name="nom" id=""><br>
    </div>
    <label for="">Email</label>
    <input type="email" name="email" id=""><br>
    <label for="">Mot de passe</label>
    <input type="password" name="password" id=""><br>
    <label for="">confirmer le mot de passe</label>
    <input type="password" name="password" id=""><br>

    <label for="">Téléphone</label>
    <p>+221</p>
    <input type="text" name="telephone" id=""><br>
    <a href="">Ajoutez un code promo</a>
    <button class='inscrit' type="submit" name="inscrire">S'inscrire</button>
    </form>
 </div>
</body>
</html>