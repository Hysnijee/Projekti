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
            <label>Category</label>
            <input id="category" name='prod-category' type="text" placeholder="Category...">
            <label>Lower Category</label>
            <input id="lowercategory" name='prod-lowercategory' type="text" placeholder="Lower Category...">
            <label>Name</label>
            <input id="name" name='prod-name' type="text" placeholder="Name...">
            <label>Price</label>
            <input id="price" name='prod-price' type="text" placeholder="Price...">
            <label>Image Path</label>
            <input id="image" name='prod-image' type="text" placeholder="Image Path...">
            <input id="insert" class="submit" name='insert' type="submit" value="Insert">
        </form>
</div>
<?php 
    include('../reusableCode/footer.php');
?>
</body>
</html>