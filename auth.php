<?php
    session_start();
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if($email=="admin@gmail.com" && $password=="jd")
        {
            $_SESSION['email']=$email;
            header("Location:home.php"); 
            
        }
        else
        {
            header("Location:index.php?error=incorrect email and password");
            
        }
    }
    else
    {
        echo "same not password...";
        
    }
?>