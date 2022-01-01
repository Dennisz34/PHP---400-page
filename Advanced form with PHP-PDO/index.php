<?php
    require_once("baglan.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="container clearfix">
            <div class="form login">
                <a class="logo" href="">
                    <img src="img/logo.png" alt="Logo" />
                </a>
                <form action="giris.php" method="POST">
                    <p>
                        <label>Username or email address<span>*</span></label>
                        <input type="email" name="email" required>
                    </p>
                    <p>
                        <label>Password<span>*</span></label>
                        <input type="password" name="password" required>
                    </p>
                    <p>
                        <label>
                            <a href="pass-reset.php">Forgot password?</a>
                            <a href="registration.php">Create an account</a>
                            <a href="creditcard.php">Credit Card</a>
                        </label>
                        <input type="submit" value="Login" />
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
$VeriTabaniBaglantisi = null;
?>