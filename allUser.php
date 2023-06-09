<?php 

include_once('navbar.php');
$conn=new mysqli("localhost", "root", "", "essais");
$sqladmin="select photo from user where type='admin'";
$sqlemploye="select photo from user where type='employe'";
$sqlclients="select photo from user where type='client'";
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allUser</title>
</head>
<body>
    <section><h2>Catégorie Admin</h2>
    <form name="formauto" action="singleUser.php" method="post">
        <input type="hidden" id="inputmail" name="link">
    </form>
    <?php 
    $resadmin=$conn->query($sqladmin);
    $rows = array();
    while($row1=$resadmin->fetch_row()){
        array_push($rows,$row1[0]);
    }
    $js_array=json_encode($rows);
    ?>
    <img class="arrow" src="https://previews.123rf.com/images/martialred/martialred1507/martialred150700543/42561813-gauche-fl%C3%A8che-directionnelle-ic%C3%B4ne-plat-pour-les-applications-et-sites-web.jpg" alt="" style=height:200px;>
    <img id="show" src="<?php echo $rows[0];?>" alt="" style="height:300px;">
    <img class="arrow" src="https://previews.123rf.com/images/martialred/martialred1507/martialred150700545/42561691-juste-%C3%A0-c%C3%B4t%C3%A9-fl%C3%A8che-directionnelle-ic%C3%B4ne-plat-pour-les-applications-et-sites-web.jpg" alt="" style=height:200px;>

    <script>
    var js_array=JSON.parse('<?php echo $js_array;?>');
       
	let TabImg=document.getElementById('show');
    let TabArrow=document.getElementsByClassName("arrow");
    let indice=0;
    function next(){
        indice++;
        if(indice==js_array.length)
        indice=0;  
    TabImg.src=js_array[indice];
    }
    function previous(){
        indice--;
        if(indice==-1)
        indice = js_array.length - 1;  
    TabImg.src=js_array[indice];
    }
    TabArrow[1].onclick=next;
    TabArrow[0].onclick=previous;
    function onimg(){
        document.getElementById('inputmail').value=TabImg.src;
        document.formauto.submit();
    }
    TabImg.onclick=onimg;

    
    </script>

    </section>
    <section><h2>Catégorie Employés</h2>
    
    <?php 
    $resemploye=$conn->query($sqlemploye);
    $rowemp = array();
    while($row2=$resemploye->fetch_row()){
        array_push($rowemp,$row2[0]);
    }
    $js_emp=json_encode($rowemp);
    ?>
    <img class="arrow2" src="https://previews.123rf.com/images/martialred/martialred1507/martialred150700543/42561813-gauche-fl%C3%A8che-directionnelle-ic%C3%B4ne-plat-pour-les-applications-et-sites-web.jpg" alt="" style=height:200px;>
    <img id="show2" src="<?php echo $rowemp[0];?>" alt="" style="height:300px;">
    <img class="arrow2" src="https://previews.123rf.com/images/martialred/martialred1507/martialred150700545/42561691-juste-%C3%A0-c%C3%B4t%C3%A9-fl%C3%A8che-directionnelle-ic%C3%B4ne-plat-pour-les-applications-et-sites-web.jpg" alt="" style=height:200px;>

    <script>
            var js_emp=JSON.parse('<?php echo $js_emp;?>');
        
        let TabImg2=document.getElementById('show2');
        let indice2=0;
    let TabArrow2=document.getElementsByClassName("arrow2");
    function next2(){
        indice2++;
        if(indice2==js_emp.length)
        indice2=0;  
    TabImg2.src=js_emp[indice2];
    }
    function previous2(){
        indice2--;
        if(indice2==-1)
        indice2 = js_emp.length - 1;  
    TabImg2.src=js_emp[indice2];
    }
    TabArrow2[1].onclick=next2;
    TabArrow2[0].onclick=previous2;
    function onimg2(){
        document.getElementById('inputmail').value=TabImg2.src;
        document.formauto.submit();
    }
    TabImg2.onclick=onimg2;

    </script>
    </section>

    <section>
        <h2>Catégorie Clients</h2>
    <?php 
    $resclients=$conn->query($sqlclients);
    $rowclients=array();
    while($row3=$resclients->fetch_row()){
        array_push($rowclients,$row3[0]);
    }
    $js_clt=json_encode($rowclients);
    ?>
        <img class="arrow3" src="https://previews.123rf.com/images/martialred/martialred1507/martialred150700543/42561813-gauche-fl%C3%A8che-directionnelle-ic%C3%B4ne-plat-pour-les-applications-et-sites-web.jpg" alt="" style=height:200px;>
    <img id="show3" src="<?php echo $rowclients[0];?>" alt="" style="height:300px;">
    <img class="arrow3" src="https://previews.123rf.com/images/martialred/martialred1507/martialred150700545/42561691-juste-%C3%A0-c%C3%B4t%C3%A9-fl%C3%A8che-directionnelle-ic%C3%B4ne-plat-pour-les-applications-et-sites-web.jpg" alt="" style=height:200px;>

<script>
    var js_clt=JSON.parse('<?php echo $js_clt;?>');
    let TabImg3=document.getElementById('show3');
        let indice3=0;
    let TabArrow3=document.getElementsByClassName("arrow3");
    function next3(){
        indice3++;
        if(indice3==js_clt.length)
        indice3=0; 
    TabImg3.src=js_clt[indice3];
    }
    function previous3(){
        indice3--;
        if(indice3==-1)
        indice3 = js_clt.length - 1;  
    TabImg3.src=js_clt[indice3];
    }
    TabArrow3[1].onclick=next3;
    TabArrow3[0].onclick=previous3;
    function onimg3(){
        document.getElementById('inputmail').value=TabImg3.src;
        document.formauto.submit();
    }
    TabImg3.onclick=onimg3;
    
    </script>
    </section>

</body>
</html>

