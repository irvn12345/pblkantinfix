<?php
session_start();


// mendapatkan id produk url
$id = $_GET['id'];

// jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1
if(isset($_SESSION['keranjang'][$id]))
{
    $_SESSION['keranjang'][$id] += 1;
}
// selain itu (belum ada di keranjang), maka produk itu dianggap dibeli 1
else
{
    $_SESSION['keranjang'][$id] = 1;
}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre";

//menuju halaman keranjang
echo "<script>alert('Your Food Or Drink Has Been Ordered');</script>";
echo "<script>location='keranjang.php';</script>";


?>