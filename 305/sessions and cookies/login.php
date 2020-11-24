<style type="text/css">
    th
    {
        text-align: right;
    }

    h3
    {
        text-align: center;
    }

</style>

<table cellpadding="5" cellspacing="10" align="center">
    <h3>Login form using session and cookies with remember me </h3>
    <form method="post" action="validate.php">
        <tr><th>Email</th><td><input type="text" id="email" name="email"></td></tr>
        <tr><th>Password</th><td><input type="password" id="password"  name="password"></td></tr>
        <tr><td colspan="2" align="center"><input type="checkbox"
              name="remember" value="1">Remember Me</td></tr>
        <tr><td colspan="2" align="right"><input type="submit"
              name="login" value="Login"></td></tr>
    </form>
</table>

<?php
if (isset($_COOKIE['email']) and isset($_COOKIE['password']))
{
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    echo "<script>
            document.getElementById('email').value = '$email';
            document.getElementById('password').value ='$password';
          </script>" ;
}

?>