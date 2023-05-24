<?php 
define('SERVER_PATH','../../private/server/');
define('PUBLIC_PATH','../');
session_start();
error_reporting(0);
$error=$_SESSION['error'];
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/login.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
    <link rel="icon" href="<?php echo PUBLIC_PATH ?>img/logo.png" />
    <title>Washify | Login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo SERVER_PATH ?>login.php" method="POST">
                    <h2>Login</h2>
                    <div style="display:<?php empty($error)?"none":"block" ?>" id="confirmErrorPassword" class="errorBox"><?php echo $error ?></div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required id="email" name="email" autocomplete="off">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" required autocomplete="off">
                        <label for="">Password</label>
                    </div>
                    <!-- <div class="remember">
                        <label for=""><input type="checkbox">Remember Me!</label> 
                    </div> -->
                    <button type="submit" name="submit" id="submit" on-click="()=>{document.getElementById('submit').disabled=true}">Log in</button>
                    <div class="register">
                        <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>