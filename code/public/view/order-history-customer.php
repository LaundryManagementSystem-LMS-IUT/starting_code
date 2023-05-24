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
  <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/style-customer.css" />
  <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/order-history-customer.css" />
  <link rel="icon" href="<?php echo PUBLIC_PATH ?>img/logo.png" />
  <!-- =========== Scripts =========  -->
  <script src="<?php echo PUBLIC_PATH ?>script/main-customer.js" defer></script>
  <script src="<?php echo PUBLIC_PATH ?>script/order-history-customer.js" defer></script>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
</head>

<body>
  <!-- side bar ---------------------------------->
  <div class="container">
  <?php require PUBLIC_PATH.'partials/navigation-customer.php' ?>

  <div class="main">
    <!-- navigation bar ---------------------------------->
    <?php require PUBLIC_PATH.'partials/header-customer.php' ?>
    <div class="table new-order-table">
      <div class="new-order">
        <div class="title">
          <h1>Add a new order</h1>
        </div>
        <div class="add-order-btn">
          <button class="add-order">
            Add Order
            <ion-icon name="add-circle-outline"></ion-icon>
          </button>
        </div>
      </div>

      <!-- new order form that is initially hidden ---------------------------------->

      <form class="add-order-form hidden">
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" required />
          <label for="">Customer Email</label>
        </div>

        <!--one item details-->
        <div class="item-details">
          <span class="item-name">Shirt</span>
          <span class="item-quantity">
            <div class="inputbox quantity-input">
              <input type="number" value="0" min="0" />
              <label for="">Quantity</label>
            </div>
            <div class="quantity-btns">
              <button class="add" type="button">+</button>
              <button class="subtract" type="button">-</button>
            </div>
          </span>
          <span class="item-wash-type">
            <select name="wash-type" class="wash-type-dropdown">
              <option class="wash-type-options" value="wash">Wash</option>
              <option class="wash-type-options" value="iron">Iron</option>
              <option class="wash-type-options" value="wash and iron">
                Wash & Iron
              </option>
              <option class="wash-type-options" value="wash and iron">
                Dry Wash
              </option>

            </select>
          </span>
        </div>
        <!-- end of one item details--------------------------------->

        <button class="place-order" type="submit">Place Order</button>
        <span class="cancel-order">Cancel</span>
      </form>
    </div>
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
            <div class="laundry-name">
              <span>Laundry Name</span>
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
            <div class="laundry-name">
              <span>ABC Laundry</span>
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
          <div class="orderDetails hidden">
            <div class="wrap-details header">
              <div class="name">
                <span>Item</span>
              </div>
              <div class="quantity">
                <span>Progress</span>
              </div>
            </div>
            <!--for each item----------------------------->
            <div class="wrap-details item">
              <div class="name">
                <span>Pants</span>
              </div>
              <div class="quantity">
                <span>
                  <span class="num">1</span>
                </span>
                /
                <span class="total-quantity"> 5</span>
              </div>
            </div>
            <!--one item ends----------------------------->

          </div>
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