<?php include 'header.php'; ?>
<?php 
if($_GET["qty"]>1){
   $con = new mysqli("localhost", "root", "", "nutri");
    $st = $con->prepare("update cart set qty =qty-1 where smo=?");
    $st->bind_param("i", $_GET["smo"]);
    $st->execute();
}
else{
    $con = new mysqli("localhost", "root", "", "nutri");
    $st = $con->prepare("delete from cart  where smo=?");
    $st->bind_param("i", $_GET["smo"]);
    $st->execute();
}
echo '<script>window.location="index.php"</script>';
?>
