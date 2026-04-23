<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
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
                <form method="post" action="forgotPasswordCheck.php" enctype="">
                    <fieldset>
                        <legend>FORGOT PASSWORD</legend>
                        Enter Email: <input type="email" name="email" value=""/> <br><br>
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
