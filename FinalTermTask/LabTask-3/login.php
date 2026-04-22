<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
                <form method="post" action="loginCheck.php" enctype="">
                    <fieldset>
                        <legend>LOGIN</legend>
                        User Name : <input type="text" name="username" value=""/> <br><br>
                        Password &nbsp;: <input type="password" name="password" value=""/> <br><br>
                        <input type="checkbox" name="remember" value="yes"/> Remember Me <br><br>
                        <input type="submit" name="submit" value="Submit"/>
                        <a href="forgotPassword.php">Forgot Password?</a>
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
