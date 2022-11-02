<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/penjualweb.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@0;1&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed&family=Roboto:wght@100&family=Source+Serif+Pro:ital,wght@0,200;1,400&display=swap" rel="stylesheet">

    <title>SELLER HOME PAGE</title>
</head>

<body>

    <!--sisi kiri-->
    <div class="side-menu">
        <div class="food-name">
            <h1>SELLER PAGE</h1>
        </div>
        <ul>
            <li><a href="home.php"><i class="material-icons"></i>&nbsp; HOME PAGE</li>
            <li><a href="tambahmenu.php"><i class='bx bxs-dashboard'></i>&nbsp; MENU</li>
            <li><a href="pembelian.php"><i class="fas fa-file"></i></i>&nbsp; DATA TRANSACTION</li>
            <li><a href="login.php"><i class="fas fa-file"></i></i>&nbsp; LOGOUT</li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="food-name">
                    <h1>HOME</h1>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <div class="notif-case">
                        <img src="image/Notification.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>0</h1>
                        <h3>HUMANS</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/visitor.png" width="100px">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>0</h1>
                        <h3>ORDER</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/order.png" width="80px">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>0</h1>
                        <h3>ORDER PENDING</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/orderpending.png" width="70px">
                    </div>
                </div>
            </div>

</body>

</html>

