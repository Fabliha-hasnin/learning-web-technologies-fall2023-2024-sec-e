<?php
require_once('../controller/sessioncheck.php');
if (isset($_SESSION['flag'])) {
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Menu</title>
        <link rel="stylesheet" href="../event(js)/managerCSS/managerMenu.css" />
    </head>

    <body>
         <div id="container">
            <div id="header">
                <h1>Collaborative task management</h1>
                <p>Logged in as <?php echo $_SESSION['user']['username']?> | <a href="../controller/logout.php">Logout</a></p>
            </div>

            <div id="sidebar">
                <h3>Accounts</h3>
                <hr>
                <ul>
                    <li><a href="./managerDashboard.php">Dashboard</a></li>
                    <li><a href="./setTask.php">Set task</a></li>
                    <li><a href="./viewprojects.php">View projects</a></li>
                    <!-- <li><a href="./currentWork.php">Current work</a></li> -->
                    <li><a href="./manageTeam.php">Manage team</a></li>
                    <li><a href="./viewprof.php">View profile</a></li>
                    <li><a href="./editprof.php">Edit profile</a></li>
                    <!-- <li><a href="./changeprofpic.php">Change profile photo</a></li> -->
                    <li><a href="./changepass.php">Change password</a></li>
                </ul>
            </div>

            <div id="main-content">
                <p>Welcome <?php echo $_SESSION['user']['username']?></p>
            </div>
            </div>
        

        <div id="footer" align="center">
            Copyright © 2023
        </div>
    </body>

    </html>
    <?php
} else {
    header('location: ./managerLogin.php');
}
?>
