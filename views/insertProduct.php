<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/insertProduct.css">
</head>
<?php
    include('../reusableCode/header.php');
?>
<div class="main">
        <form action="../components/productLogic.php" method="post">
            <h2>Insert Product</h2> 
            <label>Name</label>
            <input id="name" name='p-name' type="text" placeholder="Name...">
            <label>Category</label>
            <input id="category" name='p-category' type="text" placeholder="Name...">
            <label>Lower Category</label>
            <input id="lowercategory" name='p-lowercategory' type="text" placeholder="Name...">
            <label>Price</label>
            <input id="price" name='p-price' type="text" placeholder="Price...">
            <label>Image Path</label>
            <input id="imagepath" name='p-image' type="text" placeholder="Image Path...">
            <input id="insert" class="submit" name='insert-product' type="submit" value="Insert">
        </form>
</div>
<?php 
    include('../reusableCode/footer.php');
?>
</body>
</html>