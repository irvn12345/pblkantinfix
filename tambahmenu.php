<?php

include 'koneksi.php';

if(isset($_POST['add_product'])){

   $menu_name = $_POST['menu_name'];
   $menu_price = $_POST['menu_price'];
   $menu_stock = $_POST['menu_stock'];
   $menu_image = $_FILES['menu_image']['name'];
   $menu_image_tmp_name = $_FILES['menu_image']['tmp_name'];
   $menu_image_folder = 'uploaded_img/'.$menu_image;

   if(empty($menu_name) || empty($menu_price) ||  empty($menu_stock) || empty($menu_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO tb_menu(name, price, stock, image) VALUES('$menu_name', '$menu_price', '$menu_stock','$menu_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($menu_image_tmp_name, $menu_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM tb_menu WHERE id = $id");
   header('location:tambahmenu.php');
};

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
   <link rel="stylesheet" href="css/tambahmenu.css">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
   <div class="admin-product-form-container">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter menu name" name="menu_name" class="box">
         <input type="number" placeholder="enter menu price" name="menu_price" class="box">
         <input type="number" placeholder="enter menu stock" name="menu_stock" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="menu_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM tb_menu");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>No</th>
            <th>id menu</th>
            <th>menu name</th>
            <th>menu price</th>
            <th>menu stock</th>
            <th>image</th>
            <th>Action</th>
         </tr>
         </thead>
         <?php $nomor=1; ?>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $nomor ?></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td>Rp.<?php echo $row['price']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td>  
               <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="tambahmenu.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php $nomor++; ?>
      <?php } ?>
      </table>
   </div>
   <div class="landing">
                <a href="adminpage.php"><i class='bx bxs-share'></i>&nbsp; Back</a>

</div>


</body>
</html>