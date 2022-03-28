<?php include 'header.php'; ?>
<!-- sign up page page  -->
<center>
    <form action="signuppage.php" method="post">
    <input type="email" name="em" placeholder="Your E-Mail" 
           class="form-control" style="width:30%" required /><br/>
    
    <input type="password" name="pw" placeholder="Your Password" 
           class="form-control" style="width:30%" required /><br/>
    
    <input type="password" name="cp" placeholder="Confirm Password" 
           class="form-control" style="width:30%" required /><br/>
    
    <input type="text" name="nm" placeholder="Your Name" 
           class="form-control" style="width:30%" required /><br/>
    
    <input type="text" name="mb" placeholder="Your Mobile" 
           class="form-control" style="width:30%" required /><br/>
    
    <input type="submit" name="sub" value="Sign Up"
           class="btn btn-danger" style="width:30%"  /><br/>
    </form>
    <?php
    if(isset($_POST["sub"]))
    {
        if($_POST["pw"] != $_POST["cp"])
            echo '<script> alert("Password Not Match"); </script>';
        else{
            if(strlen($_POST["pw"]) < 6)
                echo '<script> alert("Password Min Chars is 6"); </script>';
            else{
                $con = new mysqli("localhost","root","","nutri");
                $st = $con->prepare("select id from users where email=?");
                $st->bind_param("s", $_POST["em"]);
                $st->execute();
                $rs = $st->get_result();
                if($rs->num_rows > 0){
                    echo '<script> alert("E-Mail already exist !!"); </script>';
                }
                else{
                    $con = new mysqli("localhost","root","","nutri");
                    $st = $con->prepare("insert into users(email,passward,name,mobile) values(?,?,?,?)");
                    $st->bind_param("ssss", $_POST["em"],$_POST["pw"],$_POST["nm"],$_POST["mb"]);
                    $st->execute();
                    $_SESSION ["userid"]=$con->insert_id ;
                    echo  '<script> window.location="Homepage.php"; </script>';
                }
            }
        }
    }

?>
