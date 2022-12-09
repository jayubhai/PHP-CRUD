<?php
    include 'conn.php';
    session_start();
    $email = $_POST["email"];
    $password = $_POST["password"];
      
    {
        if($email=="admin@gmail.com" && $password=="jd")
        {
            $_SESSION['email']=$email;
            header("Location:adminuser.php"); 
            
        } 
        else
        {
            $sql = "select * from user where Email='$email' and password='$password'";
            $res = mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($res);
             if(is_array($row))
             {
                    $_SESSION['email']=$email;
                    header("Location:home.php"); 
             }
        }   
      
    } 
    
?>