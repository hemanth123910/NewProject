<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--Here is a definition of UTF-8: UTF-8 (U from Universal Character Set + Transformation Format—8-bit)-->
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <!--content=”IE=edge” ensures that IE uses the latest available rendering engine to render a web page, helping to ensure compatibility with modern web standards and features-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin page</title>

    <style>
    body{
        font-family: 'poppins', sans-serif;
        margin:0; padding: 0;
        box-sizing: none; border: none;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 50vh;
        background: url('c.jpg') no-repeat;
        background-size: cover;
        background-position: center;
    }

    .container{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        padding-bottom: 60px;
    }

    .container .content{
        text-align: center;
    }

    
    h3{
        font-family: "Times New Roman", Times, serif;
        font-style: italic;
        font-size: 20px;
        color: black;
    }

    h3 span{
        background: crimson;
        color: black;
        border-radius: 5px;
        padding:0 15px;
    }

    h1{
        font-family: "Times New Roman", Times, Monospace;
        font-style: oblique;
        font-size: 30px;
        color: black;
    }

    h1 span{
        color: crimson;
    }

    p{
        font-family: "Times New Roman", Times, Monospace;
        font-style: oblique;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .container .content .btn{
        display: inline-block;
        padding:10px 30px;
        font-family: serif;
        font-size: 20px;
        background: black;
        color: lavender;
        margin:0 5px;
    }
    
    </style>
        
    </head>
    <body>
        
    <div class="container">
       
        <div class="content">
            <h3>HI,<span>employee's</span></h3>
            <h1>WELCOME HEMANTH GROUP'S<span></span></h1>
            <p>login OR register new employee's list</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
        </div>
    </div>
    </body>
</html>
