<?php
    session_start();
    if(!isset($_SESSION['loggedIn'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
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
                <form method="post" action="editProfileCheck.php" enctype="">
                    <fieldset>
                        <legend>EDIT PROFILE</legend>
                        Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name" value="<?php echo $_SESSION['user']['name']?>"/> <br><br>
                        Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email" value="<?php echo $_SESSION['user']['email']?>"/> <br><br>
                        Gender &nbsp;&nbsp;&nbsp;&nbsp;:
                            <input type="radio" name="gender" value="Male" <?php if($_SESSION['user']['gender']=='Male') echo 'checked';?>/> Male
                            <input type="radio" name="gender" value="Female" <?php if($_SESSION['user']['gender']=='Female') echo 'checked';?>/> Female
                            <input type="radio" name="gender" value="Other" <?php if($_SESSION['user']['gender']=='Other') echo 'checked';?>/> Other
                        <br><br>
                        Date of Birth : <input type="text" name="dob" value="<?php echo $_SESSION['user']['dob']?>"/> <i>(dd/mm/yyyy)</i> <br><br>
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
