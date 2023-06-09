
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
<?php 
include_once('navbar.php');
if(isset($_POST['ID'])){
$id=$_POST['ID'];
$conn=new mysqli("localhost", "root", "", "essais");
$sqlselect="SELECT * FROM USER WHERE iduser=$id";
$sql="DELETE FROM USER WHERE iduser=$id";
if(mysqli_num_rows($conn->query($sqlselect))==0)
$error='ID inexistant';
else{
$resultat=$conn->query($sql);
echo "<h2>Utilisateur ID $id supprimé !</h2>";
}
}

if($_SESSION['type']=='admin'){
    ?>  <div>
    <h1>Delete User</h1>
    
    <form action="deleteUser.php" method="post">
    <?php 
    if(isset($error))
    echo "<div style='color:red;font-weight:bold;float:right;'>$error</div>";
    ?>
        <label for="ID">ID</label>
        <input type="text" name="ID">
        <input type="submit" Value="Delete">
        </div>
        <style>
            
        </style>
<?php
}
if($_SESSION['type']!='admin'){
    echo "<h2>Vous n'êtes pas autorisé!</h2>";
}
?>
</body>
</html>




