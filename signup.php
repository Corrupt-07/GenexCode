<?php
include('config.php');
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $repswd = $_POST['repswd'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    if ($pswd != $repswd) {
        echo "<script> alert('PASSWORD DOES NOT MATCH');</script>";
    } else {
        $query = "INSERT INTO genex_tble (email,password,fname,lname,gender,country) 
          VALUES('$email','$pswd','$fname','$lname','$gender','$country')";
          echo $query;
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            echo '<script>alert("Signup successfully")</script>';
        } else {
            echo '<script>alert("Signuo not successfully")</script>';
        }
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Signup Form</title>
  <style>
    body {
      background-color: #e8e8e8;
    }

    .main-container {
      background-color: #fff;
      padding: 20px;
      width: 50%;
      
    }

    .color-head{
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .head-title-color {
      background-color: #ecb82a;
      height: 7px;
      width: 50%;
      
    }

    .btn-primary,
    .btn-primary:hover{
      background-color: #ecb82a;
      border: none;
    }
  </style>
</head>

<body>
  <div class="container my-4">
  <div class="color-head">
    <div class="head-title-color"></div>
  </div>
  <div class="container main-container">

    <div class="title-head">
      <h2 style="text-align: center;">Responsive Resgieration Form</h2>
    </div>
    <form method="POST">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-envelope"
                aria-hidden="true"></i></span>
          </div>
          <input type="text" class="form-control" name="email" id="inputAddress" placeholder="Email" required>
        </div>

      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-key"
                aria-hidden="true"></i></span>
          </div>
          <input type="password" name="pswd" class="form-control" id="inputAddress" placeholder="Password" required>
        </div>

      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-key"
                aria-hidden="true"></i></span>
          </div>
          <input type="password" class="form-control" name="repswd" id="inputAddress2" placeholder="Re-Type Password" required>
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-user"
                  aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" name="fname" id="inputEmail4" placeholder="First Name" required>
          </div>

        </div>
        <div class="form-group col-md-6">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-user"
                  aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" name="lname" id="inputPassword4" placeholder="Last Name" required>
          </div>

        </div>
      </div>

      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" value="Male" name="gender" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline1">Male</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" value="Female" name="gender" class="custom-control-input" required>
        <label class="custom-control-label" for="customRadioInline2">Female</label>
      </div>

      <div class="form-group my-2">
        <select id="inputState" name="country" class="form-control" required>
          <option selected>Select a country</option>
          <option value="india">India</option>
          <option value="england">England</option>
        </select>
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" required>
          <label class="form-check-label" for="gridCheck">
            I agree with terms and condition
          </label>
        </div>
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            I want to recive the newsletter
          </label>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary form-control">Register</button>
      </div>



    </form>
  </div>
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