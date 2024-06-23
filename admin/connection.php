<?php
$link = mysqli_connect('localhost', 'root', '', 'ecommerce');

if (!$link) {
    die('Connection failed: ' . mysqli_connect_error());
}
// echo 'Connected successfully';
?>
