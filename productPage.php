<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleProduct.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
    <div class="packages">
        <table style="width:80%" border="1" >
            <tr>
                <th> <center> Content</center> </th>
                <th> <center> Basic</center> </th>
                <th> <center> Gold</center> </th>
                <th> <center> Premium</center> </th>
            </tr>
            <tr>
                <td> <center> AES-256 Encryption </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
            </tr>
            <tr>
                <td> <center> Secured Folders </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
            </tr>
            <tr>
                <td> <center> Cloud Storage Awareness </center> </td>
                <td> <center>  <img src="wrong.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
            </tr>
            <tr>
                <td> <center> Mobile Encryption </center> </td>
                <td> <center>  <img src="wrong.jpg" width="30" height="30"> </center> </td>
                <td> <center>  <img src="wrong.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
            </tr>
            <tr>
                <td> <center> Password Generator </center> </td>
                <td> <center>  <img src="wrong.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="wrong.jpg" width="30" height="30"> </center> </td>
                <td> <center> <img src="tick.jpg" width="30" height="30"> </center> </td>
            </tr>
            <tr>
                <td> <center> Price </center> </td>
                <td> <center> $599  </center> </td>
                <td> <center> $899 </center> </td>
                <td> <center> $1299 </center> </td>
            </tr>
        </table>
    </div>
    <div class="space">
    </div>
    <div class="container">
        <h3 style="font-family: Sitka Heading Semibold;margin-left:50px;margin-bottom:30px"> <u> Our Products </u> </h3>
        <ul class="os-list">
            <li><a href="buynowBasic.php"><img src="productImage.jpeg" alt="image cannot be displayed" width="250" height="250">
            <p>Basic Package </p></a></li>
            <li><a href="buynowGold.php"><img src="productImage.jpeg" alt="image cannot be displayed" width="250" height="250">
            <p>Gold Package</p></a></li>
            <li><a href="buynowPlatinum.php"><img src="productImage.jpeg" alt="image cannot be displayed" width="250" height="250">
            <p>Platinum Package</p></a></li>
        </ul>
    </div>
</body>
</html>