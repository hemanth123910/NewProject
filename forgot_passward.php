<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin page</title>

    <style>
    body{
        font-family: 'poppins', sans-serif;
        margin:0; padding: 0;
        box-sizing: none; border: none;
        text-decoration: none;
    }

    .form-container{
        text-align: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        padding-bottom: 60px;
        background: lightgoldenrodyellow;
    }

    .form-container form{
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 10px black(0,0,0,.1);
        background: lightgray;
        text-align: center;
        width: 500px;
    }

    .form-container form h3{
        font-size: 30px;
        text-transform: uppercase;
        margin-bottom: 10px;
        color: #333;
    }

    .form-container form input{
        width: 95%;
        padding:10px 15px;
        font-size: 17px;
        margin: 8px 0;
        background: #eee;
        border-radius: 10px;
    }

    option{
        background: #fff;
    }

    .btn{
        display: inline-block;
        padding:10px 30px;
        font-family: serif;
        font-size: 20px;
        background: black;
        color: lavender;
        margin:10px 15px;
    }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>FORGOT PASSWORD</h3>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="OTP" name="OTP" required placeholder="enter your OTP">
            <a href="hardwareteam_page.php" || href="employes_page.php" class="btn">login</a>
        </form>
    </div>
</body>    
</html>
