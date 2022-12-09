<?php

    $host="localhost";
    $password="";
    $uname="root";
    $dbname="php_crud_ip";

    $conn = mysqli_connect($host,$uname,$password,$dbname);
    if(!$conn)
    {
        die("Error : ".mysqli_error());
    }
    else
    {
        
        //echo "Connection Successfully.......!";
    }

?>
