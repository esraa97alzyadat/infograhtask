<?php include 'header.php'; ?>
<!-- admin login form  -->
<center>
    <form action="adminlogin.php" method="post">
        <input type="email" name="em" placeholder="Enter Your Email" 
               class="form-control" style="width:30%" required/> <br/>

        <input type="password" name="pw" placeholder="Enter your passward" 
               class="form-control" style="width:30%" required/> <br/>

        <input type="submit" name="sub1" value="login"
               class="btn btn-danger" style="width:30%" /> <br/>

    </form>


</center>


<?php

if (isset($_POST ["sub1"])){
$con = new mysqli("localhost", "root", "", "nutri");
$st = $con->prepare("select id from admin where email=? and passward=?");
$st->bind_param("ss", $_POST["em"], $_POST["pw"]);
$st->execute();
$rs = $st->get_result();
if($rs->num_rows == 0){
    echo '<script> alert("login faild"); </script>';   
}
 else {   
  
  $row=$rs->fetch_assoc();
    $_SESSION["userid"]=$row["id"];
    echo '<script> window.location="admin.php" </script>' ;
}
}
?>