<body>
    <div class="header">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="catalogs.php">Catalog</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>
            <?php
                if(isset($_SESSION['role']) && $_SESSION['role'] == '1') {
                ?>
                <li><a href="../views/dashboard.php">Dashboard</a></li>
            <?php
            }
            ?>
            <li><a href="../components/logout.php">LogOut</a></li>
        </ul>
    </div>