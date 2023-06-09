<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE USER</title>
</head>
<body>
    
</body>
</html>
<?php 
include_once('navbar.php');error_reporting(E_ERROR | E_PARSE);

if($_SESSION['type']=='admin'){?>
<br>
<?php 
        if(isset($_POST['ID'])){
            $id=$_POST['ID'];
            $conn=new mysqli("localhost", "root", "", "essais");
            $sqlselect="SELECT * FROM USER WHERE iduser=$id";
            $resultat=$conn->query($sqlselect);
            $row=$resultat->fetch_assoc();

        if(mysqli_num_rows($resultat)==0){
            $error='ID INEXISTANT';
        }

        }
        
        if(isset($_POST['iduser2'])){
            $name=$_POST['name2'];
            $mail=$_POST['mail2'];
            $password=$_POST['password2'];
            $photo=$_POST['photo2'];
            $id=$_POST['iduser2'];
            $type=$_POST['type2'];

$conn=new mysqli("localhost", "root", "", "essais");
$sql="UPDATE `user` SET `name` = '$name', `email` = '$mail', `password` = '$password', `photo` = '$photo', `type` = '$type' WHERE `user`.`iduser` = $id";
$resultat2=$conn->query($sql);

echo "<h2>Changement effectué !</h2>";

        }
            ?>
<form action="updateUser.php" method="post">
    <?php 
    if(isset($error))
    echo "<div style='color:red;font-weight:bold;float:right;'>$error</div>";
    ?>
        <label for="ID">ID</label>
        <input type="text" name="ID" required>
        <input type="submit" Value="Confirm">
        </form>

        <br>
        <br>
        <br>
        <?php if(mysqli_num_rows($resultat)==1){
            echo "<form action='updateUser.php' method='post'>";
            echo "ID : <input type='text' name='iduser2' value={$row['iduser']} readonly /><br>";
            echo "Name : <input type='text' name='name2' value={$row['name']} required/><br>";
            echo "Mail : <input type='text' name='mail2' value={$row['email']} required/><br>";
            echo "Password : <input type='text' name='password2' value={$row['password']} required/><br>";
            echo "Photo : <input type='text' name='photo2' value={$row['photo']} /><br>";
            echo "Type :<select id='type' name='type2'>
            <option value='client'>Utilisateur client</option>
            <option value='employe'>Utilisateur Employe</option>
            <option value='admin'>Utilisateur Administrateur</option>
        </select>";
            echo "<input type='submit' value='Confirmer'/></form>";
        }
    
        ?>

<?php 
}
else{
    echo "<h2>Vous n'êtes pas autorisé!</h2>";
}
?>


