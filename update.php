<?php

include 'koneksi.php';

$id = $_GET['edit'];

if(isset($_POST['update_menu'])){

   $menu_name = $_POST['menu_name'];
   $menu_price = $_POST['menu_price'];
   $menu_stock = $_POST['menu_stock'];
   $menu_image = $_FILES['menu_image']['name'];
   $menu_image_tmp_name = $_FILES['menu_image']['tmp_name'];
   $menu_image_folder = 'uploaded_img/'.$menu_image;
   
   if(empty($menu_name) || empty($menu_price) || empty($menu_stock) || empty($menu_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE tb_menu SET name='$menu_name', price='$menu_price', stock='$menu_stock',image='$menu_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($menu_image_tmp_name, $menu_image_folder );
         header('location:tambahmenu.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/tambahmenu.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM tb_menu WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="menu_name" value="<?php echo $row['name']; ?>" placeholder="enter the menu name">
      <input type="number" min="0" class="box" name="menu_price" value="<?php echo $row['price']; ?>" placeholder="enter the menu price">
      <input type="number" min="0" class="box" name="menu_stock" value="<?php echo $row['stock']; ?>" placeholder="enter the menu stock">
      <input type="file" class="box" name="menu_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update menu" name="update_menu" class="btn">
      <a href="tambahmenu.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>