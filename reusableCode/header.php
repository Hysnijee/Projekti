<body>
    <div class="header">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>
            <?php
                if(isset($_SESSION['role']) && $_SESSION['role'] == '1') {
                ?>
                <a href="../views/dashboard.php">
                <li>Dashboard</li>
                </a>
            <?php
            }
            ?>
            <li><a href="../components/logout.php">LogOut</a></li>
        </ul>
    </div>