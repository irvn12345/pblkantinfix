<?php
include 'koneksi.php';
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

<div class="product-display">
      <table class="product-display-table">
 <thead>
          <tr>
            <th>No</th>
            <th>Customer Name</th>
            <th>Date</th>
            <th>Total</th>
            <th>Action</th> 
          </tr>
 </thead>
      <tbody>
        <?php
      if(isset($_GET['finish'])){
   $id = $_GET['finish'];
   mysqli_query($conn, "DELETE FROM tb_pembelian WHERE id_pembelian = $id");
   echo "<script>alert('Order Has Been Completed');</script>";
   echo "<script>location='pembelian.php';</script>";
};
?>
      <?php $nomor=1; ?>
      <?php $ambil=$conn->query("SELECT * FROM tb_pembelian"); ?>
      <?php while($pecah = $ambil->fetch_assoc()){ ?>
          <tr>
          <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_pelanggan']; ?></td>
            <td><?php echo $pecah['tanggal_pembelian']; ?></td>
            <td>Rp.<?php echo $pecah['total_pembelian']; ?></td>
            <td>
                <a href="detail.php?id=<?php echo $pecah['id_pembelian'];?>" class='bx bxs-detail'>detail</a>
                <a href="pembelian.php?finish=<?php echo $pecah['id_pembelian']; ?>" <i class='bx bxs-check-square'>finish</i></a>
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php } ?>
     </tbody>
    </table>
      </div>
      <div class="landing">
                <a href="adminpage.php"><i class='bx bxs-share'></i>&nbsp; Back</a>
      </div>

</body>
</html>
     

    
   
