<?php include 'header.php'; ?>
<!-- costumer login page  -->
<center>
    <form action="loginpage.php" method="post">
        <input type="email" name="em" placeholder="Enter Your Email" 
               class="form-control" style="width:30%" required/> <br/>

        <input type="password" name="pw" placeholder="Enter your passward" 
               class="form-control" style="width:30%" required/> <br/>

        <input type="submit" name="sub" value="login"
               class="btn btn-danger" style="width:30%" /> <br/>

    </form>
    <p>New User? <a href="signuppage.php">click her</a> </p>
    </br>
    <a href="adminlogin.php" ><button class="btn btn-danger" style="width:10% "> Admin </button></a>


</center>


<?php

if (isset($_POST ["sub"])){
$con = new mysqli("localhost", "root", "", "nutri");
$st = $con->prepare("select id from users where email=? and passward=?");
$st->bind_param("ss", $_POST["em"], $_POST["pw"]);
$st->execute();
$rs = $st->get_result();
if($rs->num_rows == 0){
echo '<script> alert("E-Mail already exist !!"); </script>';

}
 else {
$row=$rs->fetch_assoc();
$_SESSION["userid"]=$row["id"];
echo '<script> window.location="Homepage.php" </script>' ;
     
     
}
}
?>