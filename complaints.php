<?php include 'header.php'; ?>
<!--user send complaints from here  -->
<center>
    <form action="complaints.php" method="post">
    <p style="font-size: 20px; font-weight: bold;"> Enter Your Name</p>
    
    <input type="text"  name="name" placeholder="Enter Your Name" class="form-control" style="width:20%"/>
    </br>
    <p style="font-size: 20px; font-weight: bold;"> Enter Your Comoplaints</p>
    <input type="text"  name="comp" placeholder="Enter Your Complaints" class="form-control" style="width:60%;hight:60%"/>
    </br></br>
    <input type="submit" name="sub" value="Send"
               class="btn btn-danger" style="width:10%" /> <br/>
</form>
</center>
<?php 

if (isset($_POST ["sub"])){
$con = new mysqli("localhost", "root", "", "nutri");
$st = $con->prepare("insert into comp(name,text) values(?,?)");
$st->bind_param("ss", $_POST["name"], $_POST["comp"]);
$st->execute();
}

?>