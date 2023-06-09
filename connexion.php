<?php
if(isset($_POST["email"])){
    $conn=new mysqli("localhost", "root", "", "essais");
    $mail=$_POST['email'];
    $pass=$_POST['password'];
    $sql="select * from user where email='$mail' and password='$pass'";
    $resultat=$conn->query($sql);
    if(mysqli_num_rows($resultat)==1){
        session_start();
        $row=$resultat->fetch_assoc();
        $_SESSION['type']=$row['type'];
        $_SESSION['name']=$row['name'];
        $_SESSION['password']=$row['password'];
        $_SESSION['email']=$mail;
        $_SESSION['iduser']=$row['iduser'];
        $_SESSION['photo']=$row['photo'];
        header('Location:http://www.localhost/projetPHP/navbar.php');
    }
    else{
        $error="Mail ou mot de passe incorrect";
    }
    $conn->close();
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
    <div>
    <h1>Login Page</h1>
    
    <form action="connexion.php" method="post">
    <?php 
    if(isset($error))
    echo "<div style='color:red;font-weight:bold;float:right;'>$error</div>";
    ?>
        <label for="email">E-Mail</label>
        <input type="email" name="email">

        <label for="password">Password</label>
        <input type="password" name="password">

        <input type="submit" Value="Login" class="loginbut">
</div>
    </form>
</body>
</html>
