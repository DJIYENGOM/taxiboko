<?php
include('../bd.php');
if(isset($_POST['connexion'])){
   $email=trim($_POST['email']); //trim permet de supprimer les espaces en debut et fin d'une chaine caractere
   $mdp=trim(md5($_POST['pasword']));
   $query="SELECT * FROM info WHERE email='".$email."' AND mot_de_pass='".$mdp."'"; // requete pour chercher les données de la base de donnée
   $statement=$conn->prepare($query); // preparation de la requete
   $statement->execute(); // execution de la requete
   $total_row=$statement->rowCount(); // conter le nombre de donné dans la base de donnée
   if($total_row==1){
       header("Location:accueil.php");
   }else{
       echo 'mot de passe incorrecte';
   }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class='interface1'>

 <div class='form'>
    <form action="" method="post">
    <p><b><h2>Inscription</h2></b></p>
    <p>Votre chauffeur en un clic !</p>
    <button class='facbok' type="submit">Continuer avec Facebook</button><br>

           <div class="line">
                <div class="div1"></div>
                <span class="ou">ou</span>
                <div class="div2"></div>
            </div>

    <label for=""> Email</label>
    <input type="email" name="email" id=""><br>
    <label for=""> Mot de passe</label>
    <input type="password" name="pasword" id=""><br>
    <div>
    <button class='inscrit' type="submit" name="connexion">Connexion</button>
    </div>
    Avez vous un compte? <a href="interface2.php">s'inscrire</a>
    </form>
 </div>

 

 
</div>
</body>
</html>