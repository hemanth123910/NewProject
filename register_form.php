<?php

$conn = mysqli_connect('localhost','root','','hemanthgroups');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['passward']);
    $cpass = md5($_POST['cpassward']);
    $user_type = $_POST['user_type'];
    
    $select = " SELECT * FROM hemanth_form WHERE email = '$email' && passward = '$pass' ";
    
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';

    }else{

        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO hemanth_form(name, email, passward, user_type)VALUES('$name', '$email', '$pass',
            '$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }

};


?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>register form</title>
        <style>
            body{
                font-family: 'poppins', sans-serif;
                margin:0; padding: 0;
                box-sizing: none; border: none;
                text-decoration: none;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 10vh;
                background: url('e.jpg') no-repeat;
                background-size: cover;
                background-position: center;
            }

            .form-container{
                text-align: center;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px;
                padding-bottom: 60px;
            }

            .form-container form{
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 5px 10px black(0,0,0,.1);
                text-align: center;
                width: 500px;
            }
            .form-container form h3{
                font-size: 30px;
                text-transform: uppercase;
                margin-bottom: 10px;
                color: #333;
            }
            
            .form-container form input,
            .form-container form select{
                width: 100%;
                padding:15px 15px;
                font-size: 17px;
                margin: 10px 0;
                border-radius: 10vh;
                background: ghostwhite;
            }

            option{
                background: #fff;
            }

            .form-btn{
                background: #fbd0d9;
                color: crimson;
                text-transform: capitalize;
                font-size: 20px;
                cursor: pointer;
            }
            .form-btn:hover{
                background: crimson;
                color: #fff;
            }

            p{
                margin-top: 10px;
                font-size: 20px;
                color: black;
            }

            a{
                color: skyblue;
            }

            .form-container form .error-msg{
                margin:10px 0;
                display: block;
                background: crimson;
                color: #fff;
                border-radius: 5px;
                font-size: 20px;
                padding:10px;
            } 
        </style>
    
    </head>
    <body>
        
    <div class="form-container">
        <form action="" method="post">
            <h3>register now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="passward" required placeholder="enter your passward">
            <input type="password" name="cpassward" required placeholder="confirm your passward">
            <select name="user_type">
                <option value="user">software</option>
                <option value="admin">hardware</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account?<a href="login_form.php">login now</a></p>
        </form>
    </div>
    </body>    
    </html>