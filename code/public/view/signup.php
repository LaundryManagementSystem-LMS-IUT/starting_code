<?php 
define('SERVER_PATH','../../private/server/');
define('PUBLIC_PATH','../');
session_start();
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/registration.css">
    <title>Washify | Registration</title>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH; ?>css/bootstrap.css" />
    <link rel="icon" href="<?php echo PUBLIC_PATH ?>img/logo.png" />
    <script src="<?php echo PUBLIC_PATH; ?>script/signup.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo SERVER_PATH ?>signup.php" method="POST">
                    <h2>Registration</h2>
                            <div class="btn-group">
                            <input type="radio" class="btn-check" checked name="userSelection" id="userSelection1" value="Laundry_Manager">
                            <label class="btn btn-outline-primary" for="userSelection1">Laundry Manager</label>
                            <input type="radio" class="btn-check" name="userSelection" id="userSelection2" value="Laundry_User">
                            <label class="btn btn-outline-primary" for="userSelection2">Customer</label>
                          </div>
                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="text" required autocomplete="off"  id="name" name="name" >
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="text" pattern="[01]{2}[3-9]{1}[0-9]{8}"  id="phone" name="phone"  required autocomplete="off">
                        <label for="">Phone Number</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email" name="email"  required autocomplete="off">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" onchange="passwordValidator()" id="password" name="password" required autocomplete="off">
                        <label for="">Password</label>
                    </div>
                    <div style="display:none" id="errorPassword" class="errorBox"></div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" onchange="confirmPasswordValidator()" id="confirmPassword" name="confirmPassword" required autocomplete="off">
                        <label for="">Re-enter password</label>
                    </div>
                    <div style="display:none" id="confirmErrorPassword" class="errorBox"></div>
                    <button type="submit" name="submit" value="submit" disabled="false" id="buttonRegister"  on-click="()=>{document.getElementById('buttonRegister').disabled=true}">Register</button>
                    <div class="login">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>