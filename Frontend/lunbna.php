<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password1 = $_POST['password'];
        $district= $_POST['district'];
        $state= $_POST['state'];
        $type=$_POST['type'];
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
       $insert_query = "INSERT INTO address(district,state,address_type) VALUES ('$district','$state',0)";
        mysqli_query($conn, $insert_query);
        $query1 = "SELECT address_id, address_type from address where district='$district' and state='$state'";
        $result2 = mysqli_query($conn, $query1);
        $result11 = mysqli_fetch_assoc($result2);
        $address_id = $result11["address_id"];

        $sql = "INSERT INTO `user` ( `user_type`, `password`,`name` , `phone_no`,`email_id`,`address_id`)
         VALUES ( '$type','$password1','$name','987654310', '$email','$address_id');";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          header("Location: ../login-signup/index.php");
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

 