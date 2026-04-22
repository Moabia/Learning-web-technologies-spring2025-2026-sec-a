<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td><b style="color:green;">X</b> Company</td>
            <td align="right">
                <a href="publicHome.php">Public Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <form method="post" action="registrationCheck.php" enctype="">
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name" value=""/> <br><br>
                        Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email" value=""/> <br><br>
                        User Name &nbsp;&nbsp;: <input type="text" name="username" value=""/> <br><br>
                        Password &nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="password" value=""/> <br><br>
                        Confirm Password : <input type="password" name="confirmpassword" value=""/> <br><br>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male"/> Male
                            <input type="radio" name="gender" value="Female"/> Female
                            <input type="radio" name="gender" value="Other"/> Other
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="text" name="dob_dd" value="" size="2"/> /
                            <input type="text" name="dob_mm" value="" size="2"/> /
                            <input type="text" name="dob_yyyy" value="" size="4"/> <i>(dd/mm/yyyy)</i>
                        </fieldset>
                        <br>
                        <input type="submit" name="submit" value="Submit"/>
                        <input type="reset" value="Reset"/>
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
