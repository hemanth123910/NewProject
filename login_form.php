<?php

$conn = mysqli_connect('localhost','root','','hemanthgroups');

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['passward']);

    
    $select = " SELECT * FROM hemanth_form WHERE email = '$email' && passward = '$pass' ";
    
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:softwareteam_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:hardwareteam_page.php');
        
        }

       
    }else{
        $error[] = 'incorrect email or password!';
    }

};


?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login form</title>
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
                background: url('d.jpg') no-repeat;
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
                color: gray;
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

            .form-btn{
                background: #fbd0d9;
                color: crimson;
                text-transform: capitalize;
                font-size: 20px;
                cursor: pointer;
            }
            .form-btn:hover{
                background: crimson;
                color: white;
            }

            p{
                margin-top: 10px;
                font-size: 20px;
                color: black;
            }

            a{
                color: crimson;
            }
        </style>
    
    </head>
    <body>
        
    <div class="form-container">
        <form action="" method="post">
            <h3>login now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="passward" required placeholder="enter your passward">
            <a href="forgot_passward.php">forgot_passward</a>
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>do you have an account?<a href="register_form.php">register now</a></p>
        </form>
    </div>
    </body>    
    </html>