<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal_2</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .header {
            background-color: navy;
            color: white;
            font-size: 40px;
            text-align: center;
            padding: 5px;
        }
        .form-container {
            margin: 5px;
        }
        input[type=text], input[type=password] {
            width: 300px;
            height: 25px;
            font-size: 16px;
            margin-bottom: 10px;
            margin-left: 20px;
        }
        input[type=password] {
            width: 300px;
            height: 25px;
            font-size: 16px;
            margin-bottom: 10px;
            margin-left: 23px;
        }
        input[type=submit] {
            font-size: 16px;
            padding: 5px 10px;
            margin-left: 124px;
        }
        .footer {
            margin-top: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="header">Login</div>
    <form class="form-container" action="result_2.php" method="POST">
        Username &emsp;&emsp;
        <input type="text" name="username"><br>
        Password &emsp;&emsp;
        <input type="password" name="password"><br>
        <input type="submit" value="login">
    </form>
    <hr>
    <div class="footer">
        @UKM2014<br>
        Name-NRP&copy;
    </div>
</body>
</html>
