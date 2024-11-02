<!DOCTYPE html>
<html>
<head>
    
    <title>Payment Success</title>
    <style>

    body{
        background-color: #e4ffe4;
    }

        .container {
            width: 100vh;
            height: 50vh;
            margin: 0 auto;
            padding: 50px;
            border: green solid 10px;
            border-radius: 20px;
            background-color: #e4ffe4;
        }

        h1 {
            text-align: center;
            font-size: 50px;
        }

        .success-message {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
            color: black;
        }

        .back-to-home {
            text-align: center;
            margin-top: 30px;
        }

        .back-to-home a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .back-to-home a:hover {
            text-decoration: underline;
        }

        img{
            width: 200px;
        }
    </style>
</head>
<body>
<center><a href="index.php">
                    <img src="assets/img/logo/logo.png" alt="LOGO" >
                </a></center><br><br>
    <div class="container">
        <h1>Payment Success</h1>
        <div class="success-message">
            <p>Your payment was successful. Thank you for your purchase!</p>
        </div>
        <div class="back-to-home">
            <a href="index.php">Back to Home</a>
        </div>
    </div>
</body>
</html>
