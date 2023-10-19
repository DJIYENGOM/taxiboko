<?php
session_start();    
if (isset( $_SESSION['id'])){
echo 'bonjour vous etes bien connecté';
}
else{
    header("Location: interface1.php");
}
?>

<a href="deconnection.php">Déconnecter</a>