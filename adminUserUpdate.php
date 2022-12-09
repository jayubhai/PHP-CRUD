<?php
    session_start();
    include_once 'conn.php';
    //echo $_SESSION['email'];
    if($_SESSION['email']!=null)
    {
        $id = $_GET['id'];
        $sql = "Select * from user where id =$id";
        // echo $sql;
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
            $data = mysqli_fetch_array($res);
        }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8  m-5 ">
                <table class="table table-bordered align-items-center">
                    <form role="form" method="POST">
                        <tr class="text-center">
                            <th colspan="2">Update your data</th>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td>
                                <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <input type="text" class="form-control" name="email" value="<?php echo $data['Email']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Mobile:</td>
                            <td>
                                <input type="text" class="form-control" name="phone" value="<?php echo $data['Phone']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td>
                                <input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>">
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan=2 class="text-center">
                                <button class="btn btn-success mr-4" name="reset">Reset</button>
                                <button class="btn btn-primary" name="update">Update</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>
</html>
<?php
        if(isset($_POST['update']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['phone'];
            $sql = "update user set name = '$name', Email = '$email', Phone='$phone' where id= '$id'";

            $res=mysqli_query($conn,$sql);
            if($res)
            {
            header("Location:adminuser.php");

            }
            else{
                echo"<script>alert('Something went worng...')</script>";
            }
        }  
    }
    else
    {
        header("Location:login.php");
    }
?>