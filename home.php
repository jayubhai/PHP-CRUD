<?php
    session_start();
    if($_SESSION['email']!=null)
    {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to my page.....!</h1>
    <a href="logout.php" class="btn btn-primary " >Logout</a>
</body>
</html>
<?php 
}
else
{
    header("Location:index.php");
    exit();
}

?>
