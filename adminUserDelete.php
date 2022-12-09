<?php
    session_start();
    include_once 'conn.php';
    //echo $_SESSION['email'];
    if($_SESSION['email']!=null)
    {
        $id = $_GET['id'];
        $sql = "Delete from user where id =$id";
        // echo $sql;
        $res = mysqli_query($conn,$sql);
        if($res){
            header("Location:adminUser.php");
        }
        else{
            echo "<script>alert('Something went wrong...!!')</script>";
        }
    }
    else{
        header("Location:../index.php");
        exit();
    }
?>

