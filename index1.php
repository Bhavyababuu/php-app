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
                                    <a class="nav-link" href="index1" style="color:black;">Product</a>
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
                <div class="row">
                    <?php
                    // Check if a brand or category is set
                    $brand = isset($_GET['brand']) ? $_GET['brand'] : '';
                    $category = isset($_GET['cat']) ? $_GET['cat'] : ''; // Changed 'category' to 'cat'

                    // Prepare the query based on the selected brand or category
                    if ($brand) {
                        $q = "SELECT * FROM product WHERE brand='$brand'";
                    } elseif ($category) {
                        $q = "SELECT * FROM product WHERE cat='$category'";
                    } else {
                        $q = "SELECT * FROM product LIMIT 0,10";
                    }

                    $run = mysqli_query($link, $q);
                    while ($row = mysqli_fetch_array($run)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $img = $row['img'];
                        $brand = $row['brand'];
                        $price = $row['price'];

                    ?>
    <div class="card" style="width: 15rem; height: 25rem; margin: 10px;">
   <?php echo "<img src='admin/c/$img' class='card-img-top' alt='Card image cap' style='height: 200px; object-fit: cover;'>";?>
  <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between;">
    <h5 class="card-title" style="font-size: 18px; margin: 0;"><?php echo $name; ?></h5>
    <h5 class="card-title" style="font-size: 16px; margin: 0;"><?php echo $price; ?></h5>

    <a href="b.php?id=<?php echo $id; ?>" class="btn btn-primary" style="margin-top: 10px;">BUY NOW</a>
  </div>
</div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7HfUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
