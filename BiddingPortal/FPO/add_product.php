<?php
//if(!issset($_SESSION['logged_in']))
//  header("Location: ../../Frontend/login-signup/index.html");

session_start();
$servername = "localhost";
$uname = "root";
$password = "";
$database = "codeforcure";
// Create connection
$con = mysqli_connect($servername, $uname, $password,$database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//include("../db.php");
if(isset($_POST["submit"]))  
 {  
      $product_type = $_POST['type'];
      $product_name = $_POST['product_name'];
      $quantity = $_POST['quantity'];
      $price = $_POST['price'];
     $date_available = $_POST['available'];
      
      //$username = $_SESSION['user_email'];
      $username = "sakchilal@gmail.com";
      $query1 = "SELECT user_id from user WHERE email_id='$username' "; 
      $result = mysqli_query($con,$query1); 
      $result1 = mysqli_fetch_assoc($result);
      $userid = $result1["user_id"];

     // $userid = 2;
      $file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));  
      $query = "INSERT INTO product(user_id, product_name, product_type, quantity, price, availability_date, image) 
      VALUES ('$userid','$product_name','$product_type', '$quantity', '$price', '$date_available', '$file')";

      if(mysqli_query($con, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';
      }  
 }  

?>


<!DOCTYPE html>
<html>
<head>
  <title>JALJEEVIKA</title>
   <meta charset="utf-8">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!--<script src="index.js"></script>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="insertstyle.css">
 <link rel="stylesheet" type="text/css" href="insertstyle.css">
</head>
<body>
   <h1 class="animate__animated animate__bounce" height="30px">Jaljeevika</h1>

   <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
     <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="../../Frontend/fpomain.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="govt.html">Goverment Schemes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profile.html">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../BiddingPortal/FPO/dashboard.php">Add Product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../signout.php">Sign Out</a>
    </li>
  </ul>
  </nav>
<!--<div id="picture">
  <img src="https://img.freepik.com/free-photo/vegetable-rows-pepper-grow-field-farming-agriculture_72572-4.jpg?size=626&ext=jpg" alt="picture" width="1450" height="500">
</div>-->


<div>
  <br>
  <br>
<form  class="conatiner" method="post"  enctype="multipart/form-data">

     <div class="row">
      <div class="col-30">
        
      </div>
      <div class="col-60">
       <label for="Product Type">Product Type:</label>

   <select name="type" id="type">
    <option value="Seafood">Seafood</option>
   <option value="fruits">Fruits</option>
   <option value="vegetables">Vegetables</option>
   <option value="Poultry">Poultry</option>
   <option value="Pulses">Pulses</option>
   <option value="Cereals">Cereals</option>
  </select>
  
      </div>
    </div>
      
    <div class="row">
      <div class="col-30">
        <label for="Product">Product Name : </label>
      </div>
      <div class="col-60">
        <input type="text" id="product" name="product_name" placeholder="Product name.." required>
      </div>
    </div>


   <div class="row">
      <div class="col-30">
        <label for="quantity">Quantity(kg) : </label>
      </div>
      <div class="col-60">
        <input type="text" id="quantity" name="quantity" placeholder="Quantity.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-30">
        <label for="price"> Base price(Rs) : </label>
      </div>
      <div class="col-60">
        <input type="text" id="price" name="price" placeholder="Base price.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-30">
        <label for="price"> Availability Date : </label>
      </div>
      <div class="col-60">
        <input type="date" id="available" name="available" required>
      </div>
    </div>

      <div class="row">
      <div class="col-30">
        <label for="district">Insert Image : </label>
      </div>
      <div class="col-60">
      <input type="file" id="img" name="img">
      </div>
    </div>
         <div></div>
         <div>
          <P>             </P>
      <input type="submit" name="submit" value="Submit" style="text-align:center">
    </div>
  </div>
  </form>








</body>
</html>




<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#img').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  if
           {  
                var extension = $('#img').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#img').val('');  
                     return false;  
                }  
           }
           else  {
              alert(image_name);
           }
      });  
 });  
 </script>  