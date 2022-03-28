<?php include 'header.php' ; ?>
<!-- shop part  -->
<center>
<div>
    <center>
    <div>
        <ul id="side_menu">
 <?php
        $con = new mysqli("localhost", "root", "", "nutri");
        $st = $con->prepare("select distinct name from provitems");
        $st->execute();
        $rs = $st->get_result();
        while ($row=$rs->fetch_assoc())
                echo '<li><a href="?cat='.$row["name"].'">' . $row["name"].'</a></li>';
        ?>
        </ul> 
     
    </div>
     </center>
    <div style="display: block; color: black;font-size: 20px;font-weight: bold;">
    <?php 
    if(isset($_GET["cat"])){
     $con = new mysqli("localhost", "root", "", "nutri");
        $st = $con->prepare("select *  from provitems where name =?");
        $st->bind_param("s", $_GET["cat"]);
        $st->execute();
        $rs = $st->get_result();
        while ($row=$rs->fetch_assoc())
        {
        echo"<div>";
        echo '<div  id="divphoto"><img src="img/'.$row["photo"].'"/></div>';
        echo $row["name"].' &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ';
        echo $row["price"].'JD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ';
        echo '<a href="add_cart.php?itemid='.$row["id"].'" >ADD TO CART </a>';
        echo '</div>';
            
        }
        }
   
    ?>
  </div>
    
   </div>

