<?php 
include_once('navbar.php');
if(isset($_POST['link'])){
$link=$_POST['link'];

$conn = new mysqli('localhost','root','','essais');
$sql='select * from user where photo="'.$link.'"';
$resultat=$conn->query($sql);
$row=$resultat->fetch_assoc();
echo '<br><br><br>';
echo '<div class="all"><img src="'.$row['photo'].'" alt="" style="height:300px;">';
?>

<div class="container">
    <h2><?php echo $row['type'] .' : ID '. $row['iduser'] ; ?></h2>
    Nom : <?php echo $row['name']; ?> <br>
    Mail : <?php echo $row['email']; ?><br>
</div>
</div>

<style>
    .all{
        display:flex;
    }
    .container{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        align-items:center;
        justify-content:center;
        padding:10px;
        width:300px;
        height:200px;
        border:solid 1px black;
        background-color:rgb(229, 231, 235);
        color:darkblue;
        box-shadow: 4px 4px 7px lightgray;
        border-radius:5px;
        margin:40px;
    }

</style>
<?php 
}
?>

