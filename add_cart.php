<?php include 'header.php'; ?>
<!-- add cart php section  -->
<?php
if(!isset($_SESSION["userid"]))
    echo '<script>window.location="loginpage.php" </script>';
else{
    $qty=1;
    $con = new mysqli("localhost","root","","nutri");
    $st = $con->prepare("select * from cart where userid=? and itemid=?");
    $st->bind_param("ii", $_SESSION["userid"],$_GET["itemid"]);
    $st->execute();
    $rs=$st->get_result();
    if ($rs->num_rows==0){
    $st2 = $con->prepare("insert into cart(userid,itemid,qty) values(?,?,?)");
    $st2->bind_param("iii", $_SESSION["userid"],$_GET["itemid"],$qty);
    $st2->execute();
    }
  else{ 
    $st3 = $con->prepare("update cart set qty=qty+1 where userid=? and itemid=?");
    $st3->bind_param("ii", $_SESSION["userid"],$_GET["itemid"]);
    $st3->execute();
  }
  echo '<script> window.location="index.php"</script>';
}
?>

