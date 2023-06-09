<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add USER</title>
</head>
<body>
    
</body>
</html>
<?php 
include_once('navbar.php');
if(isset($_POST['name'],$_POST["email"],$_POST["password"],$_POST["photo"],$_POST["type"])){
$name=$_POST['name'];
$email=$_POST["email"];
$password=$_POST['password'];
$photo=$_POST['photo'];
$type=$_POST['type'];
$conn=new mysqli("localhost", "root", "", "essais");
$sqlselect="SELECT * FROM USER WHERE email='$email'";
$sql="INSERT INTO `user` (`iduser`, `name`, `email`, `password`, `photo`, `type`) VALUES (NULL, '$name', '$email', '$password', '$photo', '$type')";
$result=$conn->query($sqlselect);
if(mysqli_num_rows($result)==1){
    $error="E-MAIL EXISTANT";
}
else{
    $resultat=$conn->query($sql);
    $error="Ajouté!";
}
}
else {
    $error="Tout les champs sont obligatoires!";
}

if($_SESSION['type']=='admin'){
    ?>  <div>
    <h1>Add User</h1>
    
    <form action="addUser.php" method="post">
    <?php 
    if(isset($error))
    echo "<div style='color:red;font-weight:bold;float:right;'>$error</div>";
    ?>  <table>
        <tr><th><label for="name">Nom</label></th>
        <th><input type="text" name="name" required></th>
        <tr><th><label for="email">Email</label></th>
        <th><input type="text" name="email" required></th>
        <tr><th><label for="password">Password</label></th>
        <th><input type="password" name="password" required></th>
        <tr><th><label for="photo">URL Photo</label></th>
        <th><input type="url" name="photo" required></th>
        <tr><th><label for="type">Type</label></th>
        <th><select name="type">
                    <option value="client">Utilisateur client</option>
                    <option value="employe">Utilisateur Employe</option>
                    <option value="admin">Utilisateur Administrateur</option>
                </select></th>
            <tr><th></th><th><input id="submit" type="submit" Value="Add"></th><th></th></tr>
        </table>
        
        </div>
        <style>
            table{
                justify-content:center;
                align-items:center;
                display:flex;
            }
        input{
            width:300px;
        }
        #submit{
            width:200px;
        }
        </style>
<?php
}
if($_SESSION['type']!='admin'){
    echo "<h2>Vous n'êtes pas autorisé!</h2>";
}
?>

<?php  ?>