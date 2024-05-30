<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            color: rgb(0, 0, 0);
            background-image: url('bgbuyNew.jpg');
        }
        .buyNow {
            opacity: 0.9;
            margin-left: 650px;
            width: 700px;
            height: 1010px;
            padding: 10px 10px;
            background: white;
            border: 4px solid rgba(255, 255, 255, 0.4);
            position: relative;
            top: 50px;
            right: 100px;
            border-radius: 40px;
        }
        .buyNow table {
            margin-left: 20px;
            border-collapse: separate;
            border-spacing: 0 10px;
            color: white;
        }
        .buyNow input {
            text-decoration: none;
        }
        .styled-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }
        .styled-table td {
            padding: 10px;
        }
        .styled-table input[type="text"],
        .styled-table input[type="email"],
        .styled-table input[type="number"],
        .styled-table input[type="date"],
        .styled-table select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
            font-size: 14px;
            color: #000000;
        }
        .styled-table input[type="radio"] {
            margin-right: 5px;
        }
        .styled-table input[type="text"]::placeholder,
        .styled-table input[type="email"]::placeholder,
        .styled-table input[type="number"]::placeholder,
        .styled-table input[type="date"]::placeholder {
            color: #000000;
        }
        .styled-table label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #000000;
        }
        .styled-table select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
            font-size: 14px;
            color: #333;
        }
        .styled-table select option {
            padding: 10px;
        }
        .radio-group {
            display: flex;
            align-items: center;
        }
        .radio-group label {
            margin-right: 15px;
        }
        .radio-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        .extraordinary-button {
            margin-left: 200px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #ff6f61, #ffca28);
            border: none;
            border-radius: 50px;
            padding: 15px 30px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .extraordinary-button::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            border-radius: 50%;
            z-index: -1;
            transform: translate(-50%, -50%) scale(0);
        }
        
        .extraordinary-button:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }
        
        .extraordinary-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
        }
    </style>
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
    <div class="buyNow">
        <h3 style="margin-left: 30px;margin-top:10px;font-family:Ancillary"> <i> Buy Now! </i></h3>
        <form action="#" class="form">
            <table style="width: 80%;" class="styled-table">
                <tr>
                    <td> <label>Full Name</label> </td>
                    <td> <input type="text" placeholder="Enter full name" required /> </td>
                </tr>
                <tr>
                    <td> <label>Email Address</label> </td>
                    <td><input type="text" placeholder="Enter email address" required /> </td>
                </tr>
                <tr>
                    <td> <label>Phone Number</label> </td>
                    <td> <input type="number" placeholder="Enter phone number" required />  </td>
                </tr>
                <tr>
                    <td><label>Birth Date</label></td>
                    <td><input type="date" placeholder="Enter birth date" required /></td>
                </tr>
                <tr>
                    <td><label>Plan</label></td>
                    <td>
                        <select name="plan">
                            <option value="None"> Select any one</option>
                            <option value="basic"> Basic </option>
                            <option value="gold"> Gold </option>
                            <option value="platinum"> Platinum</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Lifetime</label></td>
                    <td class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="check-free-trial" name="trial" checked />
                            <label for="check-free-trial">Free trial </label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="check-3months" name="trial" />
                            <label for="check-3months">3 Months</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="check-6months" name="trial" />
                            <label for="check-6months">6 Months</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> <label>Address</label> </td>
                    <td><input type="text" placeholder="Enter street address" required /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" placeholder="Enter street address line 2" required /></td>
                </tr>
                <tr>
                    <td> <label> Country</label> </td>
                    <td>
                        <select>
                            <option hidden>Country</option>
                            <option>America</option>
                            <option>Japan</option>
                            <option>India</option>
                            <option>Nepal</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <label> City </label> </td>
                    <td> <input type="text" placeholder="Enter your city" required /> </td>
                </tr>
                <tr>
                    <td> <label> Region </label></td>
                    <td><input type="text" placeholder="Enter your region" required /> </td>
                </tr>
                <tr>
                    <td> <label> Postal code </label></td>
                    <td><input type="number" placeholder="Enter postal code" required /></td>
                </tr>
            </table>
            <button class="extraordinary-button">Proceed to buy $1299</button>
        </form>
    </div>
</body>
</html>
