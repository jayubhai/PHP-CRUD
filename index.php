<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/js/bootstrap.min.js" />
    <link rel="stylesheet" href="style.css" />
    <title>LOGIN PAGE</title>
</head>

<body style="background-color: rgb(78, 104, 219)">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="box_color card rounded">
                        <div class="card-body p-5">
                            <form class="m-3" action="auth.php" method="POST">
                                <img class="img-fluid" src="img/login.png" alt="" />
                                <p class="h3 text-center mb-4 text-dark">Login</p>
                                <?php
                                    if(isset($_GET['error']))
                                    {
                                        echo $_GET["error"];    
                                    }
                                ?>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" id="email" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" id="password" />
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" />
                                        Remember me
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">
                                    Submit
                                </button>

                                <p class="text-center mt-3">
                                    Don't have an account
                                    <a href="registretion.php"><b>Sign Up</b></a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
