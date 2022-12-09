<?php
    include('conn.php');
    session_start();
    //echo $_SESSION['email'];
    if($_SESSION['email']!=null)
    {   
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
    
    <center><h1>Registr user</h1></center><br>
     <!-- <?php echo $_SESSION['email']; ?>
    <a href="logout.php"><button >Logout </button></a> -->
     
    <div class="container">
       <div class="d-flex justify-content-around m-5">
           <form class="from-grop" action="adminuser.php" method="POST">
            <div class="d-inline-block">
                <label for="form-lable" >Sort by:</label>
            </div>
               <div class="d-inline-block">
                   <select name="cat" id="">
                       <option>.....select....</option>
                       <option value="name" >Name</option>
                       <option value="Email">email</option>
                   </select>
               </div>
               <div class="d-inline-block">
                   <button class="btn btn-dark ml-1" name="sort">Sort</button>
               </div>
            </form>
            <form class="from-grop" action="adminuser.php" method="POST">
                <div class="d-inline-block">
                    <label for="form-lable" >Name:</label>
                </div>
                <div class="d-inline-block">
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="d-inline-block">
                    <button class="btn btn-dark ml-1" name="search">Searching</button>
                </div>
            </form>
       </div> 
        

        
       
        <table class="table table-border table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th colspan=2>Manage</th>
            </tr>
            <?php

                if(isset($_POST['sort']))
                {
                     $greating=$_POST['cat'];
                     $query="select * from user order by $greating";
                }
                elseif(isset($_POST['search']))
                {
                    $serching=$_POST['name'];
                    $query="select * from user where name LIKE '%$serching%'";
                }
                else
                {
                    $query="select * from user";
                }
                // $query = "select * from user where id = '".$_SESSION['id']."'";
               // $query = "select * from user";

                $res = mysqli_query($conn,$query);
                if(mysqli_num_rows($res)>0){
                    // if($res){

                    while($data = mysqli_fetch_array($res)){
            
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['Email']; ?></td>
                <td><?php echo $data['Phone']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><a href="adminUserUpdate.php?id=<?php echo $data['id'];?>"><i class="fa fa-pencil" style="font: size 30px;">update</i></a></td> 
                <td><a class="btn" href="adminUserDelete.php?id=<?php echo $data['id'];?>"><i class="fa fa-trash" style="font-size:24px;color:red">Delete</a></i></td>
                
                
            </tr>
            <?php
                
                }
            }
            ?>
        </table>
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
    }
    else{
        header("Location:login.php");
    }
?>