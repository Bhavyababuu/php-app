<?php
include("C:/wamp64/www/php_ecommerce/admin/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="nav" style="background-color:silver; display: flex; justify-content: space-between; align-items: center; padding: 10px; color:black;">
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
                                <a class="nav-link" href="ahome.php" style="color:black;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ip.php" style="color:black;">Add Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sell.php" style="color:black;">Sell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php" style="color:black;">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <h1 style="margin-left:450px;">Product insert</h1>
        <br><br><br>
        <form action="" method="post" enctype="multipart/form-data">

        <table class="table">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" placeholder="enter product name" class="form-control" required="required"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <select name="cat" class="form-control">
                        <option>laptop</option>
                        <option>camera</option>
                        <option>mobile</option>
                        <option>game</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>
                    <select name="brand" class="form-control">
                        <option>dell</option>
                        <option>hp</option>
                        <option>samsung</option>
                        <option>canon</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="img" class="form-control"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" placeholder="enter price" class="form-control" required="required"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="sub" class="btn btn-primary">Save</button></td>
            </tr>
        </table>
        </form>
        <?php
         if(isset($_POST['sub'])){
            $name = $_POST['name'];
            $cat = $_POST['cat'];
            $brand = $_POST['brand'];
            $price = $_POST['price'];
            $image = $_FILES['img']['name'];
            $image_tmp = $_FILES['img']['tmp_name'];

            if(move_uploaded_file($image_tmp, "c/$image")) {
                if(mysqli_query($link, "INSERT INTO product (name, cat, brand, price, img) VALUES ('$name', '$cat', '$brand', '$price', '$image')")) {
                    echo "<script>alert('Data Save')</script>";
                } else {
                    echo "<script>alert('Data not Save')</script>";
                }
            } else {
                echo "<script>alert('Failed to upload image')</script>";
            }
         }
        ?>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7HfUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
