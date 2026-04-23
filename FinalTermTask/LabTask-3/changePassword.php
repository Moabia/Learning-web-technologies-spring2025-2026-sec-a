<?php
    session_start();
    if(!isset($_SESSION['loggedIn'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
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
                <form method="post" action="changePasswordCheck.php" enctype="">
                    <fieldset>
                        <legend>CHANGE PASSWORD</legend>
                        Current Password &nbsp;&nbsp;: <input type="password" name="currentpassword" value=""/> <br><br>
                        <font color="green">New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="newpassword" value=""/></font> <br><br>
                        <font color="red">Retype New Password : <input type="password" name="retypepassword" value=""/></font> <br><br>
                        <input type="submit" name="submit" value="Submit"/>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
</body>
</html>
