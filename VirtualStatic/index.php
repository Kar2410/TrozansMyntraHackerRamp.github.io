

<!DOCTYPE html>


 <style >
   body{
    margin: 0px;
    padding: 0px;
   }
 </style>


<meta charset="utf-8">
<title>Team Trozen</title>
<link rel="stylesheet" href="static_files/resources/sakura.css" type="text/css">
<link rel="stylesheet" href="static_files/resources/try_on_style.css">
<script type="text/javascript" src="static_files/resources/try_on_data.js"></script>
<script type="text/javascript" src="static_files/resources/try_on.js"></script>



<?php

session_start();

include("../includes/db.php");
include("../functions/functions.php");







?>





<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto" rel="stylesheet">
  <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Team Trozans</title>
  <link href="../styles/bootstrap.min.css" rel="stylesheet">
  <link href="../styles/backend.css" rel="stylesheet">
  <link href="../styles/style.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>





 <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
          }
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Register</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Sign In</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Logout</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="../index.php" style="text-decoration: none;">
            <h2>TEAM TROZANS</h2>
            <!-- <img class="logo__img" src="images/logo.png" alt="Avenue fashion logotype" width="237" height="19"> -->
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="../shop.php">
                <h4>Mens</h4>
               
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="../shop.php">
                <h4>Womens</h4>
               
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="../shop.php">
                 <h4>Shop</h4>
              </a>
            </li>

      

          </ul>
        </nav>
      </div>
    </div>
  </header>






<!-- <h1>TEAM: TROZEN </h1><br>
<h2>Static Model Of Our Project</h2> -->
<!-- <h1 >Target &nbsp; &nbsp; &nbsp;Model Reference  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Result </h1> -->
<!-- <h1  style="margin-right: -50px;">Model Reference </h1>
<h1 style="margin-right: -600px;">Result </h1> -->
<div class="main" style="margin-top:-150px">
  <div id="model" class="choice" ><div id="container" style="border: solid;">
    <label>
      <input type="radio" value="small" name="garment" onclick="display('model0')" class="hidden-radio" checked="checked">
      <img class="interpolatedResult" id="model0" src="static_files/resources/target/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed1332.png" />
  </label>
  </div><div class="title"  style="font-weight: 700;">Person</div></div>
<div id="garment" class="choice" ><div id="container" style="border: solid;">

  <label >
    <input type="radio" value="small" name="garment" onclick="display('static_files/resources/interpolated/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed133243bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed7025full_loss.png')" class="hidden-radio"/>
    <img class="interpolatedResult" id="garment1" src="static_files/resources/reference/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed7025.png" />
  </label>
  <label >
    <input type="radio" value="small" name="garment" onclick="display('static_files/resources/interpolated/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed13324UQpqcAjsHiFirwQKBSAAu_54xdjdeF6ZkYdoYyd5wrzn_seed1538full_loss.png')" class="hidden-radio"/>
    <img class="interpolatedResult" id="garment2" src="static_files/resources/reference/4UQpqcAjsHiFirwQKBSAAu_54xdjdeF6ZkYdoYyd5wrzn_seed1538.png" />
  </label>
  <label >
    <input type="radio" value="small" name="garment" onclick="display('static_files/resources/interpolated/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed13323Av9tJFg7NhpyTuaBpLfHP_355a3Xwt28BSF2jRuXEDSf_seed1573full_loss.png')" class="hidden-radio"/>
    <img class="interpolatedResult" id= "garment3" src="static_files/resources/reference/3Av9tJFg7NhpyTuaBpLfHP_355a3Xwt28BSF2jRuXEDSf_seed1573.png" />
  </label>



  </div><div class="title" style="font-weight: 700;" >Shirts</div></div>
<div id="pants" class="choice"  ><div id="container" style="border: solid; margin-top: -165px ;">
  <label >
    <input type="radio" value="small" name="garment" onclick="display('static_files/resources/interpolated/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed13322wwXujx9s3XSaGFHWFR7fb_TJxfmXyLz9qWnHxdyC5nMD_seed1531full_loss.png')" class="hidden-radio">
    <img class="interpolatedResult" id= "pants0" src="static_files/resources/reference/2wwXujx9s3XSaGFHWFR7fb_TJxfmXyLz9qWnHxdyC5nMD_seed1531.png" />
  </label>
  <label >
    <input type="radio" value="small" name="garment" onclick="display('static_files/resources/interpolated/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed13322yKyxqvHjNgrNkfYwPDbLY_cixikSMXZ7kaTKavQMJxaD_seed5405.png')" class="hidden-radio"/>
    <img class="interpolatedResult" id="pants1" src="static_files/resources/reference/2yKyxqvHjNgrNkfYwPDbLY_cixikSMXZ7kaTKavQMJxaD_seed5405.png" />
  </label>
  <label >
    <input type="radio" value="small" name="garment" onclick="display('static_files/resources/interpolated/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed13322wwXujx9s3XSaGFHWFR7fb_TJxfmXyLz9qWnHxdyC5nMD_seed8037full_loss.png')" class="hidden-radio"/>
    <img class="interpolatedResult" id= "pants2" src="static_files/resources/reference/2wwXujx9s3XSaGFHWFR7fb_TJxfmXyLz9qWnHxdyC5nMD_seed8037.png" />
  </label>
  </div><div class="title" style="font-weight: 700;" >Pants</div></div>
<div id="output" class="output">
  <div id="container" style="border-radius: 1130px; border-style: solid;">
  <div id="imageResult" class="relResult">  <img id="interpolatedResult" onmouseover="hover('interpolatedResult')" onmouseout="noHover('interpolatedResult')" src="" /></div>
  <div id="modelResult" class="relResult">  <img id="modelBigImage" onmouseover="hover('modelBigImage')" onmouseout="noHover('modelBigImage')" src="static_files/resources/target/43bX93WjTb8Z4w2aHVTujo_o4XzSw3Sqkr9hvNGt8tTfb_seed1332.png" /></div>
  </div>
  <div class="outputTitle"  style="font-weight: 700;">Result</div>
  </div>
</div>
<div>

</div>


