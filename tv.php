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

<div class="container-fluid">
    <div class="container-fluid" style="background-color:black; color:white;">
        <div class="container">
            <p class="text-right">E-mail: xxxxxx@gmail.com</p>
        </div>
    </div>
    <div class="container">
        <h1 style="font-style:italic;">MY SHOP</h1>
    </div>
    <div class="container">
        <div class="container" style="background:blue; color:white; padding-left: 0;">
            <div class="row">
                <div class="col-12 mymanu">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mystyle" aria-controls="mystyle" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mystyle">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php" style="color:white;">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color:white;">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color:white;">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color:white;">Help</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2" style="background:black; color:white;">
                <h1 class="text-center">Brands</h1>
                <div class="text-center">
                    <p class="mb-3"><a href="dell.php" style="color:white;">Dell</a></p>
                    <p class="mb-3"><a href="hp.php" style="color:white;">HP</a></p>
                    <p class="mb-3"><a href="samsung.php" style="color:white;">Samsung</a></p>
                    <p class="mb-3"><a href="canon.php" style="color:white;">Canon</a></p>
                </div>
                <h1 class="text-center">Category</h1>
                <div class="text-center">
                    <p class="mb-3"><a href="laptop.php" style="color:white;">Laptop</a></p>
                    <p class="mb-3"><a href="mobile.php" style="color:white;">Mobile</a></p>
                    <p class="mb-3"><a href="camera.php" style="color:white;">Camera</a></p>
                    <p class="mb-3"><a href="tv.php" style="color:white;">Tv

                    </a></p>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <?php
                     $d2="tv";
                     $q="select * from product where cat like '%$d2%'";
                     $run=mysqli_query($link,$q);
                       while($row=mysqli_fetch_array($run))
                       {
                        $id=$row['id'];
                        $name=$row['name'];

                        $img=$row['img'];
                        $brand=$row['brand'];


                    ?>
                    <div class="col-sm-4 mb-4 text-center">
                      <?php echo "<img src='admin/c/$img' class='img-fluid' alt='Product Image'>"; ?>
                      <h3 style="align:center;"> <?php echo $brand; ?> </h3>

                      <h3 style="align:center;"> <?php echo $name; ?> </h3>
                        <a href="b.php?id=<?php echo $id; ?>" class="btn btn-primary mt-2">Buy Now</a>
                    </div>
                    <?php 
                       }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="background-color:silver; color:white;">
        <h1 class="text-center">My Project HD</h1>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
