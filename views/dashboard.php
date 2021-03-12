<?php
    include_once '../components/simpleUser.php';
    require_once '../components/userMapper.php';
    $mapper =  new UserMapper();
    $users = $mapper->getAllUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/dashboard.css">
</head>
    <?php
        include('../reusableCode/header.php');
    ?>
    <div class="main">
        <table>
            <thead>
                <tr class="first-row">
                    <td colspan="5">Users List </td>
                </tr>
                <tr class="second-row">
                    <td>Name</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($users as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['fullname']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><a href=<?php echo "../views/edit.php?id=" . $user['userid'];
                                    ?>>Edit</td>
                        <td><a href=<?php echo "../logicComponents/deleteUser.php?id=" . $user['userid'];
                                    ?>>Delete</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php 
        include('../reusableCode/footer.php');
    ?>
</body>
</html>