<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{


    $name = $_POST['email'];
    // $age=$_POST['age'];
    // $email = $_POST['email'];
    $password1 = $_POST['password'];
    // $phonenumber= $_POST['phone_number'];
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
            // echo "Connection was successful<br>";
        }

        $sql = "SELECT * FROM `dealers`";
        $result = mysqli_query($conn, $sql);

        // Find the number of records returned
        $num = mysqli_num_rows($result);
        echo $num;
        echo " records found in the DataBase<br>";
        // Display the rows returned by the sql query
        echo $name;
        echo $password1;
        if($num> 0){
            while($row = mysqli_fetch_assoc($result)){
                // echo var_dump($row);
               echo $row['email'];
               echo $row['password'];
            
                if($row['email']==$name && $row['password']==$password1)
                {
                    echo "***";
                    header("Location: /codeforcure/index.php");
                }
                // echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
                // echo "<br>";
            }
        }
}
?>