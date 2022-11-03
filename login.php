<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="css/loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@0;1&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed&family=Roboto:wght@100&family=Source+Serif+Pro:ital,wght@0,200;1,400&display=swap" rel="stylesheet">

</head>
<body>
   <div class="overlay"></div>
   <form action=" " method="post" class="box">
       <div class="header">
        <img src="image/logogin-removebg-preview.png" width="300px">
       </div>
       <div class="login-area">
           <input type="text" name="username" placeholder="Username" class="username">
            <input type="password" name="password" placeholder="Password" class="password">
            <input type="submit" name="login" value="login" class="submit">
            <div class="landing">
                <a href="landing.php"><i class='bx bxs-share'></i>&nbsp; Go to Landing Page</a>
       </div>
   </form> 
</body>
</html>
 <?php
 if(isset($_POST['login'])){
	 $user = $_POST['username'];
	 $pass = $_POST['password'];
	 $data_user = mysqli_query($conn, "SELECT * FROM user WHERE username= '$user' AND password = '$pass'");
	 $r = mysqli_fetch_array($data_user);
	 $username = $r['username'];
	 $password = $r['password'];
	 $level    = $r['level'];
	 if($r["level"]=="user")
	 {	
 
		 $_SESSION["username"]=$username;
 
		 echo "<script>alert('Login Succesfully, Welcome Customer!!!');</script>";
         echo "<script>location='home.php';</script>";
	 }
 
	 elseif($r["level"]=="admin")
	 {
 
		 $_SESSION["username"]=$username;
		 
		 echo "<script>alert('Login Succesfully, Welcome Admin!!!');</script>";
         echo "<script>location='adminpage.php';</script>";
	 }

	 elseif($r["level"]=="penjual")
	 {
		 $_SESSION["username"]=$username;
		 echo "<script>alert('Login Succesfully, Welcome Seller!!!');</script>";
         echo "<script>location='penjualpage.php';</script>";
	 }else
	 {
		echo "<script>alert('Wrong Username And Password Please Check Again!!!');</script>";
	 }
 
 }
 ?>
</body>
</html>





