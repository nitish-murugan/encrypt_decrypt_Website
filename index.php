<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleHome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Encrypter & Decrypter</title>
    <script>
        function cryption() {
            let radios = document.getElementsByName('enbox');
            let selectedValue;
            for (let i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    selectedValue = radios[i].value;
                    break;
                }
            }
            let textInput = document.getElementById('text').value;
            let result;
            if (selectedValue === 'encrypt') {
                result = encryptText(textInput); 
            } else if (selectedValue === 'decrypt') {
                result = decryptText(textInput); 
            }
            document.getElementById('resultArea').value = result;
        }

        function reverseString(str) {
            return str.split('').reverse().join('');
        }

        function encryptText(text) {
            let binTxt = "";
            for(let i=0;i<text.length;i++){
                let temp = "";
                let decTxt = text.charCodeAt(i);
                let dec = parseInt(decTxt);
                while(dec>0){
                    temp+=String(parseInt(dec%2));
                    dec = parseInt(dec/2);
                }
                if(temp.length < 8){
                    for(let i=temp.length;i<8;i++){
                        temp+="0";
                    }
                }
                binTxt += reverseString(temp)
            }
            return binTxt;
        }

        function decryptText(text) {
            if (!/^[01]+$/.test(text)) {
                return "Enter only numbers";
            }
            let loop = parseInt(text.length/8);
                let start = 0;
                let end = 8;
                let deTxt = "";
                for(let i=0;i<loop;i++){
                    let power = 0;
                    let temp = parseInt(text.slice(start,end));
                    console.log(temp);
                    let dec = 0;
                    while(temp > 0){
                        dec += parseInt(temp%10) * Math.pow(2,power);
                        power++;
                        temp = parseInt(temp/10);
                    }
                    start+=8;
                    end+=8;
                    deTxt+=String.fromCharCode(dec);
                }
                return deTxt;
        }
        function copyToClipboard() {
            var textToCopy = document.getElementById("resultArea");
            textToCopy.select();
            textToCopy.setSelectionRange(0, 99999);

            navigator.clipboard.writeText(textToCopy.value).then(function() {
                alert("Copied to clipboard: " + textToCopy.value);
            }, function(err) {
                console.error("Could not copy text: ", err);
            });
        }
    </script>
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
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <h1 style="font-family: Dauphin;margin-top:110px;color:white"><span style="color:orangered;">En</span>crypter & <span style="color: orangered;">De</span>crypter</h1>
                <h3 style="font-family: Gill Sans MT;text-align: justify;line-height:50px;text-indent: 70px;color:white"> This online tool is used to convert the human readable text to non-readable form. Also, it converts the non-readable text to human-readable form. This online tool is free of cost!</h3>
            </div>
            <div class="col-sm-6">
                <div class="encryptBox">
                    <div class="radioButton" style="margin-left:12px;">
                        <label class="radioText" style="color:white"> 
                            <input type="radio" value="encrypt" name="enbox" checked>
                            Encrypt the text 
                            <span></span>
                        </label>
                        <label class="radioText" style="color:white"> 
                            <input type="radio" value="decrypt" name="enbox">
                            Decrypt the text
                            <span></span>
                        </label>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="text" id="text" placeholder="Enter the text" required>
                    </div>
                    <div class="submitButton">
                        <button type="submit" class="convertSubmit" onclick="cryption()">Convert</button>
                    </div>
                    <div class="resultContainer">
                        <textarea id="resultArea" class="result-box" placeholder="Encrypted / Decrypted text" readonly></textarea>
                    </div>
                    <div>
                        <button class="copy-btn" onclick="copyToClipboard()">Copy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
