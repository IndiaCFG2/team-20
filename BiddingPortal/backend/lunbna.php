<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password1 = $_POST['password'];
        $district= $_POST['district'];
        $state= $_POST['state'];
        // echo $email;
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "codeforcure";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          // die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `dealers` ( `reg_id`, `email`, `password`, `district`,`state`) VALUES ( '$id', '$email', '$password1', '$district','$state');";
        $result = mysqli_query($conn, $sql);
 
        if($result){
        //   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //   <strong>Success!</strong> Your entry has been submitted successfully!
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">×</span>
        //   </button>
        // </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //   <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">×</span>
        //   </button>
        // </div>';
        }

      }
       
    //   header("Location: /MYFILE/ngo_login.php"); 

    }

    
?>
<!DOCTYPE html>
<html>
<head>
  
	<title>User Signin and Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/codeforcure/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>



  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <form action="/codeforcure/logindealer.php/"  method="post">
        <label>
          <span>Register Number</span>
          <input type="text" name="id">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password">
        </label>
       
        <button class="submit" type="submit" onSubmit="fpo.html" name="signup">Sign In</button>
      </form>
      
      <p class="forgot-pass"><a href="chngpassu.php" >Forgot Password ?</a></p>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <form  action="/codeforcure/lunbna.php/" method="post">
          <label>
            <span>Register Id</span>
          <input type="number" name="id">
          </label>
          <label>
            <span>Email</span>
            <input type="email" name="email">
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password">
          </label>
          <label>
            <span>Disrict</span>
            <input type="text" name ="district">
          </label>
          <label>
            <span>State</span>
            <input type="text" name ="state">
          </label>
          
                            <!-- <input type="submit" value="SignUp" class="btn  signUp_btn"> -->
                        
          <button type="submit" class="submit" name="signup1">Sign Up Now</button>
        </form>
      </div>
    </div>
  </div>
<script type="text/javascript" src="/codeforcure/script.js"></script>
</body>
</html>