<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login </title>
</head>
<body>
    <form action="1inc.php" method="POST">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130"> Nama </td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td width="130"> Email </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" name="btnLogin">
                    <input type="reset" value="Reset" name="reset">
                    <br><br>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>