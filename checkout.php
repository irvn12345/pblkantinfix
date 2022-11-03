<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];
        $no_wa      = $_POST['nowa'];
        header("location:https://api.whatsapp.com/send?phone$no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DPesan:%20$message ");
        
 $sql =  "INSERT INTO form (nama, email, massage) VALUES ('$name','$email','$message')";
        mysqli_query($conn, $sql);
    }
    // } else{
    //     echo "
    //         <script>
    //             window.location=history.go(-1);
    //         </script>        
    //     ";

    // }
?>
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
        <link rel="stylesheet" type="text/css" href="css/keranjang.css">

        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@0;1&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed&family=Roboto:wght@100&family=Source+Serif+Pro:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
    
    <body style="background-color: rgb(255, 183, 43);">
        <header>
            <a href="#" class="logo"></a>
           
  
          </header>

          <div class="product-display">
      <table class="product-display-table">
        
 <thead>
          <tr>
            <th>No</th>
            <th>Menu Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th> 
        
          </tr>
 </thead>
      <tbody>
        <?php $nomor=1; ?>
        <?php $totalbelanja = 0; ?>
        <?php foreach ($_SESSION["keranjang"] as $id => $jumlah) :?>
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
          </tr>
          <?php $totalbelanja+=$totalprice; ?>
          <?php $nomor++; ?>
          <?php endforeach ?>   
     </tbody>
     <tfoot>
        <tr>
            <th colspan="4">Grand Total</th>
            <th>Rp. <?php echo number_format($totalbelanja) ?></th>
        </tr>
     </tfoot>
    </table>
    
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <p>User :  <input type="text" readonly value="<?php echo $_SESSION["username"] ?>"></p>
                   
             </div>

        </div>
          </div>   
                 </div>    
        <button class="btn btn-primary" name="checkout">Checkout</button>
        <a href="keranjang.php" class='btn btn-primary'>&nbsp; Back</a>

        <?php
        if (isset($_POST["checkout"]))
        {
          $nama_pelanggan = $_SESSION["username"];
          $tanggal_pembelian = date("Y-m-d");
          $total_pembelian = $totalbelanja;

          // 1. menyimpan data ke tabel
          $conn->query("INSERT INTO tb_pembelian (nama_pelanggan, tanggal_pembelian, total_pembelian) VALUES ('$nama_pelanggan', '$tanggal_pembelian', '$total_pembelian')");

          $id_pembelian_new = $conn->insert_id;

          foreach ($_SESSION["keranjang"] as $id_menu => $jumlah)
          {
            $conn->query("INSERT INTO pembelian_menu (id_pembelian, id_menu, jumlah) VALUES ('$id_pembelian_new', '$id_menu', '$jumlah')");
          }

          // mengkosongkan keranjang belanja
          unset($_SESSION['keranjang']);

          // tampilan dialihkan ke halaman nota, nota dari pembelian barusan  
          echo "<script>alert('Succesful Purchase!!!');</script>";
          echo "<script>location='nota.php?id=$id_pembelian_new';</script>";
        }

        ?>

</div>
<section style="background-color: white;>
    <div class="form">
        <br><br>
        <h3>Form Bukti Pembayaran</h3>
        <br><br>

        <div class="row">
            <div class="col-6">
                <form action="" method="POST" target="_blank">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" name="email" placeholder="name@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <input type="hidden" name="nowa" value="6283119534645">

                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                    </form>

            </div>

        </div>
</div>
</section>
      <p>lalalala</p>
</body>
</html>
