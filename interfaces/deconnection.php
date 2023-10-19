<?php
session_start();    
if (isset( $_SESSION['id'])){

    session_destroy();
echo 'vous etez bien déconnecté'."<br>";
}
?>
<a href="interface1.php">reconnecter</a> 
