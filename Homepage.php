<?php include 'header.php' ; ?>
<!-- home page contain 2 div  -->

    <div id="div3" class="container-fluid text-center">

        <div class="raw">
            <div class="col-sm-6" >
                <img src="img/veg1.jpg" alt="" style="width:800px; Height:600px; mix-blend-mode:multiply; "/>
          <?php 
        if (isset($_SESSION["userid"]))
            echo '<a class="navbar-brand" href="signout.php">SIGN OUT</a>';
        
        ?>
            </div>
            </br></br> 
            <div class="col-sm-6" style=" text-align: center">
                <h1 id='h1'> Fresh & Healthy <br> Organic Vegetables </h1></br>
                <p id='p1'> Our Store Offers You always fresh vegetables all year round</br> ,buy from a wide range of high quality organic vegetables</p>
                </br>
                <a href="index.php"> <button class='btn btn-danger' style="font-weight: bold;"> Shopnow </button></a> <a href="ourservices.php"><button class='btn btn-danger' style="font-weight: bold;">  Our Services </button></a>
                
            </div>
        </div>
    </div> 

</body>
</html>
