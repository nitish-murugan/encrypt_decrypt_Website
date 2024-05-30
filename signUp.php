<?php
$registered = 0;
$userexists = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'server.php';
    $username = $_POST['emailAddress'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phonenumber = $_POST['phonenumber'];
    $sql = "SELECT * FROM userdata WHERE username='$username'";
    $result = mysqli_query($con,$sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
            echo "<script>alert('User already exists. Please login') </script>";
        }
        else{
            $sql = "INSERT INTO userdata(username,password,firstname,lastname,phonenumber) VALUES('$username','$password','$fname','$lname','$phonenumber')";
            $result = mysqli_query($con,$sql);
            if($result){
                echo "<script>alert('Congrats! You are successfully signed in') </script>";
                $registered = 1;
            }
            else{
                die(mysqli_error($con));
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleSignup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Signup</title>
    <script>
        function formValidation(){
            let x = document.forms["formsignup"]["password"].value;
            let y = document.forms["formsignup"]["repassword"].value;
            if(x != y){
                alert("Password does not match!!");
                return false;
            }
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="logo.jpg" class="rounded" width="40px" height="40px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productPage.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginPage.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signUp.php">Signup</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5 pt-5 d-flex justify-content-center align-items-center">
        <div class="wrapper">
            <form action="signUp.php" method="post" name="formsignup" onsubmit="return formValidation()">
                <h1>Signup</h1>
                <div class="input-box">
                    <input type="text" name="emailAddress" placeholder="E-mail Address" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-box">
                    <input type="password" name="repassword" placeholder="Re-type password" required>
                </div>
                <p> <u> <i> Personal Details </i> </u> </p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-box">
                            <input type="name" name="fname" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-box">
                            <input type="name" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-box">
                        <input type="number" name="phonenumber" placeholder="Phone number" required>
                    </div>
                </div>
                <button type="submit" class="btn">Signup</button>
                <div class="register-link">
                    <p>Already have an account? <a href="loginPage.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
