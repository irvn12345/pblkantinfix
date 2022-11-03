<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>HOME PAGE KONSUMEN</title>
        <link rel="stylesheet" type="text/css" href="css/order.css">

        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@0;1&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed&family=Roboto:wght@100&family=Source+Serif+Pro:ital,wght@0,200;1,400&display=swap" rel="stylesheet">

    </head>
    
    <body>
        <header>
            <a href="#" class="logo">DTEO canteen</a>
            <ul class="navbar">
              <li><a href="home.php">HOME</a></li>
              <li><a href="keranjang.php"><i class='bx bx-cart'></i></a></li>
              <li><a href="checkout.php">CHECKOUT</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
            </ul>
  
          </header>
           <!--Warung Kantin-->
          <section class="menu" id="menu">
            <div class="heading">
              <h2>Order Makanan dan Minuman</h2><br>
            </div>
            <form role="form" method="POST" action="">
              <div class="box-body">

              <section class="konten">
                <div class="container">
                  <h1></h1>

              <div class="row">

                <?php $ambil = $conn->query("SELECT * FROM tb_menu"); ?>
                <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                <div class="col-md-3">
                  <div class="thumbnail">
                      <img src="uploaded_img/<?php echo $perproduk['image']; ?>" alt="">
                      <div class="caption">
                        <h3><?php echo $perproduk['name']; ?></h3>
                        <h5>Rp. <?php echo number_format($perproduk['price']); ?></h3>
                        <a href="beli.php?id=<?php echo $perproduk['id']; ?>" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            <?php }?>


        </div>
      </div>
</section>

              
    </body>
</html>