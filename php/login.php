<?php   
session_start();   
    include('db.php');  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
      
        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION["loggedin"] = "true";
            // header("Location: ../flight.html");
            header("Location: flight_booking.php");
            // exit();
        }  
        else{  
            header("Location ../form.php");
            exit();
        }     
?>  