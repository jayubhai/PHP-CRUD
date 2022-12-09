<?php
    include('conn.php');
    $name =$_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    

    if($_POST['submit'])
    {
        $query = "insert into user values('$name','$email','$phone','$password')";
        $res = mysqli_query($conn,$query);
        if($res>0)
        {
        echo "Registretion successfully....";
        }
        else
        {
            echo "Error".mysqli_Error($conn);
        }
    }

?>