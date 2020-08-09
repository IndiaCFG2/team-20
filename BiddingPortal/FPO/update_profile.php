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
 	  $email_id = $_POST['email'];
      $name = $_POST['name'];
      $ph_number = $_POST['contact'];
      $district = $_POST['district'];
      $state = $_POST['state'];
      
      $query1 = "SELECT address_id, address_type from address where district='$district' and state='$state'";
      $address_id=0;
      if($result = mysqli_query($con,$query1)){
      	//address already available
      	$result11 = mysqli_fetch_assoc($result);
      	$type = $result11['address_type'];
      	$address_id = $result11["address_id"];
      	if($type!=0 && $type!=2)
      		mysqli_query($con, "UPDATE TABLE address set address_type=2 where address_id='$address_id'")
      }
      else{
      	//address not available
      	$insert_query = "INSERT INTO address(district,state,address_type) VALUES ('$district','$state',0)";
      	mysqli_query($con, $insert_query);
      	$result2 = mysqli_query($con, $query1);
      	$result11 = mysqli_fetch_assoc($result);
      	$address_id = $result11["address_id"];
      }

      $query="UPDATE user set address_id='$address_id', name='$name',phone_no='$ph_number' where email_id='$email_id'";
      if(mysqli_query($con, $query))  
      {  
           echo '<script>alert("Profile Updated Successfully")</script>';  
         //  header("Location: ../../Frontend/login-signup/fpomain.html");
      }
  }
?>