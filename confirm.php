<?php include 'header.php' ; ?>
<!-- confirm order   -->
<?php
    $con = new mysqli("localhost","root","","nutri");
    $st = $con->prepare("insert into bill(userid) values(?)");
    $st->bind_param("i", $_SESSION["userid"]);
    $st->execute();
    $billno=$con->insert_id ;
    $st2 = $con->prepare("select itemid ,qty from cart where userid=?");
    $st2->bind_param("i", $_SESSION["userid"]);
    $st2->execute();
    $rs2=$st2->get_result();
    while ($row2=$rs2->fetch_assoc()){
    $st3 = $con->prepare("insert into billdetails values(?,?,?)");
    $st3->bind_param("iii", $billno , $row2["itemid"],$row2["qty"]);
    $st3->execute(); 
        
    }
    $st4 = $con->prepare("delete from cart where userid=?");
    $st4->bind_param("i", $_SESSION["userid"]);
    $st4->execute();
    
?>
<center> 
    <p style="font-size:50px ; color: #0E17D3;font-weight: bold; ">Thank You For Using </br> Our Website</p> 
    <img src="img/vegtable.jpg" alt="" style="mix-blend-mode:multiply;width: 300px;hight:300px;"/>
</center> 


