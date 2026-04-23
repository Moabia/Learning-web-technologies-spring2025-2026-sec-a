<?php
    session_start();
    if(!isset($_SESSION['loggedIn'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Profile</title>
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
                <fieldset>
                    <legend>PROFILE</legend>
                    <?php if($_SESSION['user']['picture'] != ''){ ?>
                        <img src="<?php echo $_SESSION['user']['picture']?>" width="80" height="80"/> <br>
                    <?php }else{ ?>
                        <img src="default.png" width="80" height="80"/> <br>
                    <?php } ?>
                    <a href="changeProfilePicture.php">Change</a> <br><br>
                    Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $_SESSION['user']['name']?> <br><hr>
                    Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $_SESSION['user']['email']?> <br><hr>
                    Gender &nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $_SESSION['user']['gender']?> <br><hr>
                    Date of Birth :<?php echo $_SESSION['user']['dob']?> <br><hr>
                    <a href="editProfile.php">Edit Profile</a>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
</body>
</html>
