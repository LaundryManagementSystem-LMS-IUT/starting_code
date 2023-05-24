<?php
define('SERVER_PATH', '../../private/server/');
define('PUBLIC_PATH', '../');
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Washify | Orders</title>
  <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/style-manager.css" />
  <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/order-history-manager.css" />
  <link rel="icon" href="<?php echo PUBLIC_PATH ?>img/logo.png" />
  <!-- =========== Scripts =========  -->
  <script src="<?php echo PUBLIC_PATH ?>script/main-manager.js" defer></script>
  <script src="<?php echo PUBLIC_PATH ?>script/order-history-manager.js" defer></script>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
</head>

<body>
  <!-- side bar ---------------------------------->
  <div class="container">
  <?php require PUBLIC_PATH.'partials/navigation-manager.php' ?>

  <div class="main">
    <!-- navigation bar ---------------------------------->
    <?php require PUBLIC_PATH.'partials/header-manager.php' ?>

    <!-- new order bar ---------------------------------->

    <!-- Order History table  --------------------------->

    <div class="wrapper">
      <div class="table">
        <div class="top-title">
          <h2>Orders</h2>
        </div>
        <div class="wrap-input">
          <input type="number" placeholder="Search order ID..." class="search" />
        </div>
        <div class="wrap-content">
          <div class="wrap-title">
            <div class="id">
              <span>ID</span>
            </div>
            <div class="payment">
              <span>Payment</span>
            </div>
            <div class="progress">
              <span>Progress</span>
            </div>
            <div class="status">
              <span>Status</span>
            </div>
          </div>

          <!--ROW BEGINS----------------------------------------->
          <div class="wrap-item">
            <div class="id">
              <span>1</span>
            </div>
            <div class="payment">
              <span>Tk 1000</span>
            </div>
            <div class="progress">
              <div class="the-bar">
                <!--this indicates 4 out of 10 cloth pieces completed--------------------->
                <span class="done hidden">4</span>
                <span class="total hidden">10</span>
                <div class="progress-done"></div>
              </div>

              <span class="progress-text"></span>
            </div>
            <div class="status">
              <span class="status completed">Completed</span>
            </div>
          </div>
          <!--expandable part--------------------->
          <form class="orderDetails hidden">
            <div class="wrap-details header">
              <div class="name">
                <span>Item Name</span>
              </div>
              <div class="quantity">
                <span>Item Quantity</span>
              </div>
              <button class="edit-details" type="button">Edit</button>
            </div>
            <!--for each item----------------------------->
            <div class="wrap-details item">
              <div class="name">
                <span>Pants</span>
              </div>
              <div class="quantity">
                <span>
                  <button class="minus hidden" type="button">-</button>
                  <span class="num">1</span>
                  <button class="plus hidden" type="button">+</button>
                </span>
                /
                <span class="total-quantity"> 5</span>
              </div>
            </div>
            <!--one item ends----------------------------->

            <!--Status change-------------------->
            <div class="wrap-details item">
              <div>STATUS</div>
              <div class="status-change">
                <select name="statuses" class="statuses-dropdown" disabled>
                  <option class="status-options" value="processing">
                    Processing
                  </option>
                  <option class="status-options" value="completed">
                    Completed
                  </option>
                  <option class="status-options" value="pending">
                    Pending
                  </option>
                </select>
              </div>
            </div>

            <button class="save-changes hidden" type="submit">
              Save Changes
            </button>
          </form>
          <!--ROW ENDS------------------------------------------------------>

          <!-- page navigation --------------------------------------->
          <ul class="wrap-pagination">
            <li class="number">«</li>
            <li class="number selected">1</li>
            <li class="number">2</li>
            <li class="number">3</li>
            <li class="number">4</li>
            <li class="number">»</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>