<?php
    session_start();
    include '../reusableCode/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../style/insertProduct.css">
</head>
<body>
    <div class="main">    
        <form action="" method="post">
            <h2>Insert Product</h2> 
            <label>Category</label>
            <input id="category" name='prod-category' type="text" placeholder="Category...">
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