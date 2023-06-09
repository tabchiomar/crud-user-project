<h1>Deconnecté !</h1>
<?php 
 
session_start();
session_destroy();
header('Location:http://www.localhost/projetPHP/connexion.php');
?>

