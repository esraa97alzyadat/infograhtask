<?php include 'header.php'; ?>
<?php 

    $con = new mysqli("localhost", "root", "", "nutri");
    $st = $con->prepare("delete  from admin  where name=?");
    $st->bind_param("i", $_GET["name"]);
    $st->execute();

echo '<script>window.location="admin.php"</script>';
?>

