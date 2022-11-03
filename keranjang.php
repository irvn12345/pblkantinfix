<?php
session_start();
include 'koneksi.php';
//echo "<pre>";
//print_r($_SESSION['keranjang']);
//echo "</pre>";

if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang']))
{
  echo "<script>alert('Wow Your Order Cart Is Empty. Please Buy Food Or Drink!!!');</script>";
  echo "<script>location='order.php';</script>";

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>HOME PAGE KONSUMEN</title>
        <link rel="stylesheet" type="text/css" href="css/keranjang.css">

        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@0;1&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed&family=Roboto:wght@100&family=Source+Serif+Pro:ital,wght@0,200;1,400&display=swap" rel="stylesheet">

    </head>
    
    <body>
        <header>
            <a href="#" class="logo"></a>
            <ul class="navbar">
            </ul>
  
          </header>

          
<div class="product-display">
      <table class="product-display-table">
        <h1>Food And Drink You Ordered</h1>
 <thead>
          <tr>
            <th>No</th>
            <th>Menu Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th> 
            <th>Action</th> 
          </tr>
 </thead>
      <tbody>
        <?php $nomor=1; ?>
        <?php foreach ($_SESSION['keranjang'] as $id => $jumlah): ?>
        <!--menampilakan menu yg sedan diperulangkan bedasarkan id-->
        <?php 
        $ambil = $conn->query("SELECT * FROM tb_menu WHERE id='$id'");
        $pecah = $ambil->fetch_assoc();
        $totalprice = $pecah["price"]*$jumlah;
        //echo "<pre>";
        //print_r($pecah);
        //echo "</pre>";

        ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah["name"]; ?></td>
            <td>Rp. <?php echo number_format($pecah["price"]); ?></td>
            <td><?php echo $jumlah; ?></td>
            <td>Rp. <?php echo number_format($totalprice); ?></td>
            <td>
            <a href="hapuskeranjang.php?id=<?php echo $id ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php endforeach ?>   
     
     </tbody>
    </table>
    <div class="landing">
                <a href="order.php" class='btn btn-default'>&nbsp; Go To Order</a>
                <a href="checkout.php" class='btn btn-primary'>&nbsp; Checkout</a>
                <a href="home.php" class='btn btn-primary'>&nbsp; Back</a>

      </div>
      
</body>
</html>