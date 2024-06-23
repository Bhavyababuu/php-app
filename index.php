<?php  
// include("connection.php");
include("C:/wamp64/www/php_ecommerce/admin/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="nav" style="background-color:silver; display: flex; justify-content: space-between; align-items: center; padding: 10px;">
    <h1 style="font-style:italic; margin: 0;">MY SHOP</h1>
    <a href="admin/index.php" style="color: black; font-weight: bold; text-decoration: none;"><u>ADMIN LOGIN</u></a>
</div><br><br>
<div class="container">
    <div class="card" style="padding: 20px; width:500px; margin-left:300px; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
        <h1 style=" margin-left:130px;"  >User Login</h1>
        <br><br>
        <form action="" method="post">
            <table class="table">
                <tr>
                    <td>Enter Username</td>
                    <td><input type="text" name="user" placeholder="Enter username" class="form-control" required="required"></td>
                </tr>
                <tr>
                    <td>Enter Password</td>
                    <td><input type="password" name="pass" placeholder="Enter password" class="form-control" required="required"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;"><button type="submit" name="sub" class="btn btn-primary" style="float: right;">Login</button></td>
                </tr>
            </table>
        </form><br><br>
        <?php
        if(isset($_POST['sub'])) {
            $user = mysqli_real_escape_string($link, $_POST['user']);
            $pass = mysqli_real_escape_string($link, $_POST['pass']);

            // Using the correct column names
            $q = "SELECT * FROM user WHERE user = '$user' AND pass = '$pass'";
            $run = mysqli_query($link, $q);

            if ($row = mysqli_fetch_array($run)) {
                echo "Login successful! Welcome " . $row['user'];
            } else {
                echo "Invalid username or password.";
            }

            $u=$row['user'];
            $p=$row['pass'];
            if($user==$u&&$pass==$p){
                header("Location:index1.php");
            }

        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7HfUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
