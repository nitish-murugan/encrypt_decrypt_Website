<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body style="background-image: url('explore.jpg');background-repeat:no-repeat;background-size:cover;color:white">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
    <div class="container-fluid p-5">
        <div class="container-fluid p-5 text-center">
            <h1 style="line-height:70px">Types of encryption algorithms</h1>
            <p style="font-size: 18px;">There are two types of encryption algorithms: symmetric (also called shared key algorithm) and asymmetric (also known as public key algorithm).</p> 
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <h3><b>Symmetric encryption</b></h3>
                    <p style="line-height:40px;text-indent:60px;text-align:justify;">Symmetric encryption uses the same key for encryption and decryption. Because it uses the same key, symmetric encryption can be more cost effective for the security it provides. That said, it is important to invest more in securely storing data when using symmetric encryption.</p>
                </div>
                <div class="col-sm-6">
                    <img src="symmetric.jpg" width="450" height="300" style="margin-left: 80px;">
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
    
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3><b>Asymmetric encryption</b></h3>
                    <p style="line-height:40px;text-indent:60px;text-align:justify;">Asymmetric encryption uses two separate keys: a public key and a private key. Often a public key is used to encrypt the data while a private key is required to decrypt the data. The private key is only given to users with authorized access. As a result, asymmetric encryption can be more effective, but it is also more costly.</p>
                </div>
                <div class="col-sm-6">
                    <img src="asymmetric.jpg" width="450" height="300" style="margin-left: 80px;">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>