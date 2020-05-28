<?php
if (isset($_POST['firstname'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this db failed due to". mysqli_connect_error());
    }

    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $Email =$_POST['email'];
    $Password =$_POST['password'];

    $sql = "INSERT INTO `try1`.`test1`(`FirstName`, `LastName`, `Email`, `Password`, `Date`) VALUES ('$Firstname','$Lastname','$Email','$Password', current_timestamp());";

    if ($con -> query($sql) == true) {
    } else {
        echo "error $sql <br> $con->error";
    }
    $con->close();
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7108b832d3.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7108b832d3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <a class="navbar-brand" href="#">GYMHOLIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="sign.html">Sign In <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav> -->


        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="img/name.jpg" alt="">YMHOLIC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sigin.html">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- Login Form -->
        <div class="container-fluid row">
            <div class="col-lg-2"></div>
            <div class="col-lg-3 col-md-4 col-sm-12 main-frame-login">
                <div class="inner">
                    <div class="col-lg-12 user-img text-center">
                        <img src="img/face.png" alt=""><br>
                    </div>
                    <div>
                        <form>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="log_ID" id="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="log_PASS" id="">
                            </div>
                            <button type="button" class="btn btn-primary btn-block but-1">Login</button>
                            <div class="forget-button">
                                <a href="Forget.html"><button type="button" class="btn btn-danger btn-block but-2">Forget Password</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 "></div>
            <div class="col-lg-4 col-md-4 col-sm-12 "></div>
        </div>

    </body>

    </html>