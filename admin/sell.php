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
        <br><br>
        <h1 style="margin-left:450px;">Sell book list</h1><br><br>
        <table class="table">
          <tr>
            <th>Product Name</th>
            <th>Brand</th>
            <th>Cat</th>
            <th>Price</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Mobile no</th>
            <th>Pincode</th>



         </tr>   
         
         <?php
         $q="select * from sell";
         $run=mysqli_query($link,$q);
         while($row=mysqli_fetch_array($run))
         {
            $pname=$row['pname'];
            $brand=$row['brand'];
            $cat=$row['cat'];
            $price=$row['price'];
            $name=$row['name'];
            $add=$row['add'];
            $city=$row['city'];
            $state=$row['state'];
            $mno=$row['mno'];
            $pin=$row['pin'];
            ?>
    <tr>
        <td><?php echo$pname;  ?></td>
        <td><?php echo$brand;  ?></td>
        <td><?php echo$cat;  ?></td>
        <td><?php echo$price;  ?></td>
        <td><?php echo$name;  ?></td>
        <td><?php echo$add;  ?></td>
        <td><?php echo$city;  ?></td>
        <td><?php echo$state;  ?></td>
        <td><?php echo$mno;  ?></td>
        <td><?php echo$pin;  ?></td>

        <?php
         }
         ?>
        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7HfUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
