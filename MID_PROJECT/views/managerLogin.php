<?php
    session_start();

    //initializing
   
    //$username = $_COOKIE['username'];
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
    $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<html lang="en">
<head>
    <title> Menu </title>
    <style>  
    td { vertical-align:top;}
    .center-fieldset {
            margin: 0 auto;
            text-align: center;
    }
   </style>
</head>
<body>
    <form method="POST" action="../controller/logincheck.php">
    <table border="1" align="center" width="70%" height="30%">
        <tr>
            <th colspan="2" align="right"><a href="managerSignUp.php">Sign Up</a></th>
        </tr>
        <tr>
            <td width="30%">
                <fieldset class="center-fieldset" style="width:50%;">
                    <legend>Login</legend>
                    <b>Username:</b> <input type="text" name="username" id="" value="<?php echo $username?>" /><br><br>
                    <b>Password:</b> <input type="password" name="password" id="" value="<?php echo $password?>" /><br>
                    <hr>
                    <input type="radio" name="rememberMe" value="rememberMe" /> Remember me<br><br>
                    <input type="submit" value="Submit" /><br><br>
                    <a href="forgetPass.php">Forgot password?</a>
                </fieldset>
            </td>
        </tr>
    </table>
</form>   
</body>
</html>










