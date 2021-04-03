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
    <link rel="stylesheet" href="../style/insertCatalog.css">
</head>
<?php
    include('../reusableCode/header.php');
?>
<div class="main">
        <form action="../components/catalogLogic.php" method="post">
            <h2>Insert Catalog</h2> 
            <label>Name</label>
            <input id="name" name='c-name' type="text" placeholder="Name...">
            <label>Image Path</label>
            <input id="image" name='c-image' type="text" placeholder="Image Path...">
            <label>PDF Path</label>
            <input id="image" name='c-pdf' type="text" placeholder="PDF Path...">
            <input id="insert" class="submit" name='insert' type="submit" value="Insert">
        </form>
</div>
<?php 
    include('../reusableCode/footer.php');
?>
</body>
</html>