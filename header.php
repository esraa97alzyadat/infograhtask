<?php session_start(); ?>
<!-- heder contain div and nav bar   -->
<html>
    <head>
        <meta name="viewport" content="width=device-width"> 
        <meta charset="UTF-8">
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/9dde82e821.js" crossorigin="anonymous"></script>
        <style>
            
            body {
                background-image: url('img/h4-bg-slider1.jpg')
            }
            #div1{
                background-color: #7DD681;
                padding-top: 10px;
                padding-bottom: 0;
                display: flex;
                padding-left: 30px;
                
            }
            #h1{
                font-size: 50;
                font-weight: bold ;
                font-family: tahoma;
                color:#172552;

            }         
            #p1{
                color:#7A7B7E; 
            }

            #ul1 li {
                     
                      margin: 1px;
                      font-weight: bold;  
                      font-family: tahoma;
                      padding-left: 10px;
                      overflow: hidden;
                      color:white;
            }
                  
            #mymenu {
                overflow: hidden;
                font-size: 16px;
                float: left;
                color: black;
                text-align: center;
                padding: 20px 20px;
                text-decoration: none;
                
	
            }
            #nav1{
                
                background-color: white;
                overflow: hidden;
                width: 1000px;
                margin: auto;
            }
            #div1 ul1 li4 {
                
                text-align: right;
            }  
            #side_menu  {
                                display:block;
                                color:black ;
                                text-decoration: none;
                                padding-bottom: 8px;
                                padding-top: 8px;
                                padding-left: 100px;
                                padding-right: 100px;
                                list-style-type: none;
                            }
            #side_menu li {
                display: inline-block;
                width:150;
                hight:100;
                font-size: 20;                
                color:black;
                font-weight: bold;
                            }
            
            #divphoto img {
                 display: block;
                 width: 300px;
                 height: 200px;
                 
                            }
        </style>
    </head>
    <body>   
        <!-- div for the location and sign in and sign up   -->
        <div id="div1">
        
            <ul class="nav navbar-nav" id='ul1'>
                <li id="li1"> <i class="fa-solid fa-phone"></i> +962798318183 </li>
                <li id="li2"> | </li>
               
               <li id="li3"> <i class="fa-solid fa-location-dot"></i> Marmora Road , Washington </li>
               <li> 
                   <?php 
                            if(!isset($_SESSION["userid"])){
                             echo' <li ><a href="loginpage.php" >SIGN IN</a></li>';
                             echo '<li><a href="signuppage.php" >SIGN UP</a></li>';}
                    ?>
       
                   <?php 
                            if (isset($_SESSION["userid"]))
                            echo '<a class="navbar-brand" href="signout.php">SIGN OUT</a>';
        
                   
                            ?>
                </li>
            </ul>
             
        </div>
    <!-- nav bar  -->
        <nav class="navbar navbar-default" id="nav1">
            <div class=" container ">
                <div class="navbar-header" >
                    <button class=" navbar-toggle" data-toggle="collapse"data-target="#mymenu"> 
                        <span class=" icon-bar"> </span>
                        <span class=" icon-bar"> </span>
                        <span class=" icon-bar"> </span>
                        
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="mymenu">

                    <ul class="nav navbar-nav" id="ul2" >
                        <li> <img class="logo" src="img/large_nutriyummy.png" alt="logo" style="width:100 ;hight:90"/></li>
                        <li style=" padding-left: 200px"> <a href="Homepage.php"> Home+ </a></li>
                        <li> <a href="about.php"> About </a></li>
                        <li> <a href="index.php"> Shop+ </a></li>
                        <li> <a href="complaints.php"> complaints </a></li>
                        
                        <li> <a href=""> News+ </a></li>
                        <li> <a href=""><i class="fa-solid fa-heart" ></a></i></li>
            <li> <a href="basket.php"><i class="fa-solid fa-basket-shopping" title="Basket"></a></i></li>
                        <li> <a href=""><i class="fa-solid fa-magnifying-glass" title="Search"></a></i></li>

                    </ul>
                </div>
            </div>
        </nav>
        </br></br>