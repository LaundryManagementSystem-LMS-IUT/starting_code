<?php 
define('SERVER_PATH','../../private/server/');
define('PUBLIC_PATH','../');
session_start();
error_reporting(0);
$root_path='../../';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/login.css">
    <title>Washify | Registration</title>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/bootstrap.css" />
    <link rel="icon" href="<?php echo PUBLIC_PATH ?>img/logo.png" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo SERVER_PATH ?>laundry-register.php" method="POST">
                    <h2>Laundry Registration</h2>
                    <div class="inputbox">
                        <ion-icon name="home-outline"></ion-icon>
                        <input type="text" required autocomplete="off"  id="laundry_name" name="laundry_name" >
                        <label for="">Laundry Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="map-outline"></ion-icon>
                        <input type="text" required autocomplete="off"  id="address" name="address" >
                        <label for="">Address</label>
                    </div>
                    <button type="submit" name="submit" id="submit" on-click="()=>{document.getElementById('submit').disabled=true}">Register</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>