<?php

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
      $product_type = $_POST['ptype'];
      $product_name = $_POST['pname'];
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
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
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
  <title>CODE FOR CURE</title>
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
 <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
   <h1 class="animate__animated animate__bounce" height="30px">CODE FOR CURE</h1>

   <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
     <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Goverment Schemes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">View Products</a>
    </li>
  </ul>
  </nav>
<div id="picture">
  <img src="https://img.freepik.com/free-photo/vegetable-rows-pepper-grow-field-farming-agriculture_72572-4.jpg?size=626&ext=jpg" alt="picture" width="1450" height="500">
</div>
<br>
   <div> <p>There is a need to connect farmers to a value-chain as this will help them in becoming agri-entrepreneurs, Agriculture and Farmers Welfare Secretary, SK Pattanayak today said while speaking at a conference on ‘Development of Linkages for Sustainability of FPOs’ organised by FICCI and Small Farmers Agribusiness Consortium (SFAC) in New Delhi today.
“FPO (Farmer Producer Organization) Scheme is one of the opportunities in the hands of the farmers to connect to a value-chain and enhance their income and empower themselves. Credit needs to reach farmers to ensure they follow successful business models,” said Pattanayak. The online platform for connecting FPOs with potential farmers was also launched on the occasion.
He added that technology has made it possible to connect farmers to the market thereby reducing the clout of middlemen. “The SFAC e-platform will help connect farmers to consumers for trading whereas eNAM (e-National Agriculture Market) connects the farmers with market in an organised wholesale market. There will be no middlemen and this will augment farmers’ income,” the top bureaucrat in the Agriculture Ministry said.</p>
<p>
Highlighting the significance of FPOs, Prof. Ramesh Chand, Member, NITI Aayog said, “There is a need to diversify agriculture from low-value to high-value crop — better price realisation for farmers is needed and small farmers can take advantage of futures trading, curb black-marketing and help in value addition and processing.”</p>
<p> “The motive behind the launch of the FPO Buyer E-interface is to improve market linkages by integrating the value chain, increasing market accessibility and enabling small holders to attract and negotiate with larger buyer and grow their business. There is a need to encourage and handhold farmers. With this portal, we hope to plug the information gap between FPOs and organised buyers.”</p>
<p>The e-interface is launched with the objective of helping farmers get the right price for their produce and aid them in doubling their income. The FPO Buyer E-interface is a first of its kind portal dedicated to connect FPOs with potential buyers and other stakeholders. It will also help the FPOs to get better prices and get greater exposure to their produce. SFAC will act as a facilitator to link both the stakeholders on a single platform.
In order to address the credit needs of Farmer Producer Companies (FPCs), SFAC and State Bank of India also signed an agreement for comprehensive growth and financing of FPOs. SBI would be the preferred banker for FPO financing in the states of West Bengal, Karnataka and Madhya Pradesh.</p></div>
<div>
<form  class="conatiner" method="post" enctype="multipart/form-data" >
    <div class="row">
      <div class="col-30">
        <label for="fname"> Product Type : </label>
      </div>
      <div class="col-60">
        <input type="text" id="ptype" name="ptype" placeholder="Product type" required/>
      </div>
    </div>

    <div class="row">
      <div class="col-30">
        <label for="fname"> Product Name : </label>
      </div>
      <div class="col-60">
        <input type="text" id="pname" name="pname" placeholder="Product name" required/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-30">
        <label for="quantity">Quantity: </label>
      </div>
      <div class="col-60">
        <input type="quantity" id="quantity" name="quantity" placeholder="Quantity" required/>
      </div>
    </div>

    <div class="row">
      <div class="col-30">
        <label for="price">Price: </label>
      </div>
      <div class="col-60">
        <input type="price" id="price" name="price" placeholder="Price: " required />  
       </div>
      </div>

    <div class="row">
      <div class="col-30">
        <label for="Date of availability">Date of availablity: </label>
      </div>
      <div class="col-60">
        <input type="date" id="available" name="available" placeholder="Date of availability: " required/>
      </div>
    </div>

      <div class="row">
      <div class="col-30">
        <label for="image">Insert Image: </label>
      </div>
      <div class="col-60">
      <p>  </p><input type="file" name="image" id="image"/>
      </div>
    </div>
         <div></div>
         <div>
      <input type="submit" name="submit" value="Submit" id="submit"/>
    </div>
  </form>
</div>

</body>
</html>

<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  if
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }
           else  {
              alert(image_name);
           }
      });  
 });  
 </script>  