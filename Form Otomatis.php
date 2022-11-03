<?php 
require_once 'koneksi.php';
    if (isset($_POST['submit'])) {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];
        $no_wa      = $_POST['nowa'];
        header("location:https://api.whatsapp.com/send?phone=6287781943230");
        
 $sql =  "INSERT INTO form (nama, email, massage) VALUES ('$name','$email','$message')";
        mysqli_query($conn, $sql);
    // } else{
    //     echo "
    //         <script>
    //             window.location=history.go(-1);
    //         </script>        
    //     ";

    // }
?>
<!-- $no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DPesan:%20$message "); -->

<!DOCTYPE html>
<html>
<head>
        <title>Form Bukti pembayaran<title>
   <meta charset=utf-8>
   <meta name=description content="">
   <meta name=viewport content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<style>
    section{
        text-align: center;
        float : left;
    }
</style>
<body>

<section  >
    <div class="container">
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
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <input type="hidden" name="nowa" value="6287781943230">

                    <button type="submit" name="submit" class="btn btn-primary"><a href= "https://api.whatsapp.com/send?phone=6287781943230">Send</a></button>
                    </form>

            </div>

        </div>
</div>
</section>


</body>
</html>
