<?php
    session_start();
    if(!isset($_SESSION['loggedIn'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td><b style="color:green;">X</b> Company</td>
            <td align="right">
                Logged in as <a href="viewProfile.php"><?php echo $_SESSION['loggedUser']?></a> |
                <a href="logout.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td width="20%" valign="top">
                <b>Account</b><hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="viewProfile.php">View Profile</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                    <li><a href="changeProfilePicture.php">Change Profile Picture</a></li>
                    <li><a href="changePassword.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td>
            <td valign="top">
                <b>Welcome <?php echo $_SESSION['loggedUser']?></b>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
</body>
</html>
