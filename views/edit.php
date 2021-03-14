<?php
    session_start();
    include '../reusableCode/header.php';
    include_once '../components/userMapper.php';
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];
        $mapper = new UserMapper();
        $user = $mapper->getUserByID($userId);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="../style/edit.css">
</head>
<body>
    <div class='main'>
        <form class="mainForm" action="../components/editUser.php" method="get">
                <input class="form-element" type="text" style="display:none;" value=<?php echo $userId; ?> name="id" />
                <label class="form-element" for="">Name:</label>
                <input class="form-element" type="text" name='name' class="input" placeholder="name..." value=<?php echo $user['name']; ?> />
                <label class="form-element" for="">Last Name:</label>
                <input class="form-element" type="text" name='lastname' class="input" placeholder="lastname..." value=<?php echo $user['lastname']; ?> />
                <label class="form-element" for="">Username:</label>
                <input class="form-element" type="text" name='username' class="input" placeholder="username..." value=<?php echo $user['username']; ?> />
                <label class="form-element" for="">Email:</label>
                <input class="form-element" type="text" name='email' class="input" placeholder="email..." value=<?php echo $user['email']; ?> />
                <label class="form-element" for="">City:</label>
                <input class="form-element" type="text" name='city' class="input" placeholder="city..." value=<?php echo $user['city']; ?> />
                <label class="form-element" for="">Address:</label>
                <input class="form-element" type="text" name='address' class="input" placeholder="address..." value=<?php echo $user['address']; ?> />
                <input class="form-element submit" id="submit" type="submit" name='login-button' class="input submit" value="Edit" />
        </form>
    </div>
    <?php
        include('../reusableCode/footer.php');
    ?>
</body>

