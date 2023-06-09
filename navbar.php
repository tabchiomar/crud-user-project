<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <nav class="navbar">
    <div class="nav-content">
    <ul>
        <li><a href="http://www.localhost/projetPHP/allUser.php">AllUser</a></li>
        <li><a href="http://www.localhost/projetPHP/deleteUser.php">deleteUser</a></li>
        <li><a href="http://www.localhost/projetPHP/addUser.php">addUser</a></li>
        <li><a href="http://www.localhost/projetPHP/updateUser.php">updateUser</a></li>
        <li><a href="http://www.localhost/projetPHP/disconnect.php">Disconnect</a></li>
    </ul>
</div>
</nav>
</head>
<body>
    
</body>
</html>

<style>
:root{
    --background:rgb(229, 231, 235);
}
body{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    display:grid;
    justify-content: center;
	align-items: center;
    width:100%;
}
    a{
        color:darkblue;
        text-decoration:none;
        background-color:none;
    }
    nav ul{
        margin:0;
        display:flex;
    }
    nav li{
        list-style:none;
        padding:10px 40px 10px 30px;
        margin-right :0;
        justify-content:center;
        align-items:center;

    }
    nav{
        background-color:var(--background);
        width:670px;
        justify-content:center;
        align-items:center;
    }
    li:hover{
        border: 1px solid;
    }
</style>

<?php 
session_start();
if(!isset($_SESSION['password'])){
    header('Location:http://www.localhost/projetPHP/connexion.php');
}

?>