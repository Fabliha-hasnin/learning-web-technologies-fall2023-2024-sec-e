<?php
    session_start();
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
    $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<html lang="en">
<head>
    <title> LOGIN </title>
    <script src="../event(js)/logincheck.js"></script>
    <style>  
    td { vertical-align:top;}
    .center-fieldset {
            margin: 0 auto;
            text-align: center;
    }
   </style>
</head>
<body>
<form method="POST" action="../controller/logincheck.php" onsubmit="return getInfo()">
    <table border="1" align="center" width="70%" height="30%">
        <tr>
            <td width="30%">
                <fieldset class="center-fieldset" style="width:50%;">
                    <legend>Login</legend>
                    <b>Username:</b> <input type="text" name="username" id="username" value="<?php echo $username?>" /><br><br>
                    <b>Password:</b> <input type="password" name="password" id="password" value="<?php echo $password?>" /><br>
                    <hr>
                    <input type="radio" name="rememberMe" value="rememberMe" /> Remember me<br><br>
                    <input type="submit" name="submit" value="Submit" onclick="getInfo()"/><br>
                </fieldset>
            </td>
        </tr>
    </table>
</form>   
</body>
</html>