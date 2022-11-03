<?php

include 'koneksi.php';
$ambil = $conn->query("SELECT * FROM tb_pembelian JOIN tb_pelanggan ON tb_pembelian.id_user=tb_pelanggan.id_user WHERE tb_pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
$get = $conn->query("SELECT * FROM tb_pembelian JOIN tb_pelanggan ON tb_pembelian.nama_Pelanggan=tb_pelanggan.nama_user");


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/pembelian.css">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>
<body>



<strong> <?php echo $detail['nama_pelanggan']; ?> </strong>
<p> 
    <?php echo $detail['telepon_pelanggan']; ?> <br>
    <?php echo $detail['email_pelanggan']; ?> 
</p>

<p>
    Date:<?php echo $detail['tanggal_pembelian']; ?> <br>
    Total:<?php echo $detail['total_pembelian']; ?> 
</p>

<div class="product-display">
      <table class="product-display-table">
 <thead>
          <tr>
            <th>No</th>
            <th>MENU NAME</th>
            <th>AMOUNT</th>
            <th>TOTAL</th>
            <th>GRAND TOTAL</th> 
          </tr>
 </thead>
 <tbody>
      <?php $nomor=1; ?>
      <?php $ambil=$conn->query("SELECT * FROM pembelian_menu JOIN tb_menu ON pembelian_menu.id_menu=tb_menu.id WHERE pembelian_menu.id_pembelian='$_GET[id]'"); ?> 
      <?php while($pecah = $ambil->fetch_assoc()){ ?>
          <tr>
          <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['name']; ?></td>
            <td><?php echo $pecah['price']; ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <td>
                <?php echo $pecah['price']*$pecah['jumlah']; ?>
            </td>
            
          </tr>
          <?php $nomor++; ?>
          <?php } ?>
     </tbody>
    </table>

    <div class="row">
      <div class="col-md-7">
        <div class="alert aletrt-info">
          <p>
            Payment Rp. <?php echo number_format($detail['total_pembelian']); ?> <strong> To Cashier. </strong> <br>
            <strong> OR BANK DTEO 081-945-233-417 An. Toni </strong>
          </p>
        </div>
    </div>
  </div>
  <script type="text/javascript">
          window.print();
          </script>

</body>
</html>

