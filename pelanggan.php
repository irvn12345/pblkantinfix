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
   <link rel="stylesheet" href="css/pelanggan.css">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>
<body>
  

<div class="product-display">
      <table class="product-display-table">
 <thead>
          <tr>
            <th>No</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Action</th> 
          </tr>
 </thead>
      <tbody>
      <?php $nomor=1; ?>
      <?php $ambil=$conn->query("SELECT * FROM tb_pelanggan"); ?>
      <?php $ambil=$conn->query("SELECT * FROM tb_pelanggan JOIN user ON tb_pelanggan.id_user=user.id_user"); ?>
      <?php while($pecah = $ambil->fetch_assoc()){ ?>
          <tr>
          <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_user']; ?></td>
            <td><?php echo $pecah['email_pelanggan']; ?></td>
            <td><?php echo $pecah['telepon_pelanggan']; ?></td>
            <td>
                <a href="" class="fas fa-trash">Delete</a>
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php } ?>
     </tbody>
    </table>
      </div>
      <div class="landing">
                <a href="adminpage.php"><i class='bx bxs-share'></i>&nbsp; Back</a>

</body>
</html>
     

    

      