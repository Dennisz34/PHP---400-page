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
    <?php

    ?>
        <div class="container clearfix">
            <div class="form registration">
                <a class="logo" href="">
                    <img src="img/logo.png" alt="Logo" />
                </a>
                <form action="kayit.php" method="POST">
                    <p>
                        <label>First name<span>*</span></label>
                        <input type="text" name="ad" required>
                    </p>
                    <p>
                        <label>Last name<span>*</span></label>
                        <input type="text" name="soyad" required>
                    </p>
                    <p>
                        <label>Email address<span>*</span></label>
                        <input type="email" name="email" required>
                    </p>
                    <p>
                        <label>Password<span>*</span></label>
                        <input type="password" name="password1" required>
                    </p>

                    <p>
                        <label>Again password<span>*</span></label>
                        <input type="password" name="password2" required>
                    </p> 

                    <p>
                        <label>
                            <a href="index.php">Have an account</a>
                        </label>
                        <input type="submit" value="Signup" />
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
$VeriTabaniBaglantisi = null;
?>