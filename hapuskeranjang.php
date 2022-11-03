<?php
session_start();
$id = $_GET["id"];
unset($_SESSION["keranjang"] [$id]);

echo "<script>alert('Food Or Drink Has Been Successfully Removed From Your Order');</script>";
echo "<script>location='keranjang.php';</script>";

?>