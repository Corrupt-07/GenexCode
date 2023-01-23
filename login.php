<?php
include('config.php');
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    $query =  "SELECT * From genex_tble WHERE email = '$email' and password = '$pswd'";
    $records = mysqli_query($conn, $query);
    echo $query;
    $count = mysqli_num_rows($records);
    if ($count == 1) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: index.php");
    } else {
        echo
        "<script> alert('Your Login Name or Password is invalid');</script>";
    }

}


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
    <style>
        body{
            background-color: #ec5867;
        }
        .container{
            background-color: #fff;
            width: 40%;
            padding: 0;
        }
        .head,
        .form-top{
            padding: 20px;
            margin: 10px;
        }
        .btn-primary {
            width: 100%;
        }
        .form-down{
            display: flex;
            /* width: 100%; */
        }
        .form-btn-one,
        .form-btn-two{
            width: 100%;
        }
        button,
        .btn{
            border-radius: 0;
            border: none;
            padding: 10px;
        }

        .register-btn,
        .register-btn:hover{
            background-color: #a2a0a5;
        }

        .signin-btn,
        .signin-btn:hover{
            background-color: #3b3f42;
        }

        .form-control{
            border-width: 0 0 2px;
        }
        a,
        a:hover{
            color: #fff;
        }
        a:hover{
            text-decoration: none;
        }
        .fp,
        .fp:hover{
            color: black;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="head">
            <h3 style="margin-top: 20px;">Login</h3>
        </div>
        
            <form method="POST">
                <div class="form-top">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pswd" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group" style="text-align: center;">
                    <label class="form-check-label" for="exampleCheck1"><a href="#" class="fp">Forgot Your Password?</a></label>
                </div>
            </div>
                <div class="form-down">
                    <div class="form-btn-one">
                        <button type="submit" class="btn btn-primary register-btn"><a href="signup.php">Register</a></button>
                    </div>
                    <div class="form-btn-two">
                        <button type="submit" name="submit" class="btn btn-primary signin-btn">Signin</button>
                    </div>
                </div>
            </form>
       
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>