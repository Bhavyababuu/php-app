<?php
include("C:/wamp64/www/php_ecommerce/admin/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="nav" style="background-color:silver; display: flex; justify-content: space-between; align-items: center; padding: 10px;color:black;">
        <h1 style="font-style:italic; margin: 0;">MY SHOP</h1>
        <div class="row">
            <div class="col-12 mymanu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mystyle" aria-controls="mystyle" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mystyle">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php" style="color:black;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index1.php" style="color:black;">Product</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php" style="color:black;">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php" style="color:black;">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="row" style="margin: 0;">
        <div class="col-sm-2" style="background:black; color:white; padding: 10px;">
            <h1 class="text-center" style="font-size: 24px;">Brands</h1>
            <div class="text-center" style="font-size: 18px;">
                <p class="mb-3"><a href="index.php?brand=Dell" style="color:white;">Dell</a></p>
                <p class="mb-3"><a href="index.php?brand=HP" style="color:white;">HP</a></p>
                <p class="mb-3"><a href="index.php?brand=Samsung" style="color:white;">Samsung</a></p>
                <p class="mb-3"><a href="index.php?brand=Canon" style="color:white;">Canon</a></p>
            </div>
            <h1 class="text-center" style="font-size: 24px;">Category</h1>
            <div class="text-center" style="font-size: 18px;">
                <p class="mb-3"><a href="index.php?cat=Laptop" style="color:white;">Laptop</a></p>
                <p class="mb-3"><a href="index.php?cat=Mobile" style="color:white;">Mobile</a></p>
                <p class="mb-3"><a href="index.php?cat=Camera" style="color:white;">Camera</a></p>
                <p class="mb-3"><a href="index.php?cat=Tv" style="color:white;">Tv</a></p>
            </div>
        </div>
        <div class="col-sm-10" style="padding: 10px;">
            <form action="" method="post" style="padding: 20px; background-color: #f8f9fa; border-radius: 5px;">
                <h1 class="text-center" style="font-size: 36px; margin-bottom: 20px;">Contact Us</h1>
                <table class="table">
                    <tr>
                        <td>Enter the Name</td>
                        <td><input type="text" name="u1" placeholder="Enter the name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Enter Email</td>
                        <td><input type="text" name="mail" placeholder="Enter the address" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Enter the number</td>
                        <td><input type="text" name="num" placeholder="Enter the number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Enter the Message</td>
                        <td><input type="text" name="msg" placeholder="Enter the message" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button name="sub" class="btn btn-primary">Contact</button></td>
                    </tr>
                </table>
            </form>

            <?php
            if (isset($_POST['sub'])) {
                $u1 = $_POST['u1'];
                $mail = $_POST['mail'];
                $num = $_POST['num'];
                $msg = $_POST['msg'];

                $query = "INSERT INTO contact (uname, email, msg, num) 
                          VALUES ('$u1', '$mail', '$msg', '$num')";

                if (mysqli_query($link, $query)) {
                    echo "<script>alert('Data saved successfully');</script>";
                } else {
                    echo "<script>alert('Data not saved');</script>";
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
