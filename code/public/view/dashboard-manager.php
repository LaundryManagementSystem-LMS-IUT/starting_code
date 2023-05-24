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
  <title>Washify | Dashboard</title>
  <!-- ======= Styles ====== -->
  <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/dashboard-manager.css" />
  <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/style-manager.css" />
  <link rel="icon" href="<?php echo PUBLIC_PATH ?>img/logo.png" />
  <!-- =========== Scripts =========  -->
  <script src="<?php echo PUBLIC_PATH ?>script/main-manager.js" defer></script>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
</head>

<body>
  <!-- =============== Navigation ================ -->
  <div class="container">
  <?php require PUBLIC_PATH.'partials/navigation-manager.php' ?>

    <!-- ========================= Main ==================== -->
    <div class="main">
    <?php require PUBLIC_PATH.'partials/header-manager.php' ?>

      <!-- ======================= Cards ================== -->
      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">80</div>
            <div class="cardName">Orders</div>
          </div>

          <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div>
            <div class="numbers">$7,842</div>
            <div class="cardName">Earning</div>
          </div>

          <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
          </div>
        </div>
      </div>

      <!-- ================ Order Details List ================= -->
      <div class="wrapper">
        <div class="table">
          <div class="top-title">
            <h2>Recent Orders</h2>
          </div>
          <div class="first-line">
            <div class="wrap-input">
              <input type="number" min="0" placeholder="Search order ID..." class="search" />
              <!-- <button><ion-icon name="search-outline"></ion-icon></button> -->
            </div>
            <div class="view-more-orders">
              <button class="view-details" onclick="window.location.href='<?php echo PUBLIC_PATH ?>pages/orderHistory.html';">
                View Detailed History
              </button>
            </div>
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
                <div class="the-bar">
                  <!--this indicates 4 out of 10 cloth pieces completed---------------->
                  <span class="done hidden">4</span>
                  <span class="total hidden">10</span>
                  <div class="progress-done"></div>
                </div>

                <span class="progress-text"></span>
              </div>
              <div class="status">
                <span>Status</span>
              </div>
            </div>

            <!--ROW BEGINS-------------->
            <div class="wrap-item">
              <div class="id">
                <span>1</span>
              </div>
              <div class="payment">
                <span>Tk 1000</span>
              </div>
              <div class="progress">
                <div class="the-bar">
                  <!--this indicates 0 out of 10 cloth pieces completed--------------------->
                  <span class="done hidden">0</span>
                  <span class="total hidden">10</span>
                  <div class="progress-done"></div>
                </div>

                <span class="progress-text"></span>
              </div>
              <div class="status">
                <span class="status pending">Pending</span>
              </div>
            </div>

            <!--ROW ENDS--------------------->

            <!-- test loop --------------------  -->
            <div class="wrap-item">
              <div class="id">
                <span>2</span>
              </div>
              <div class="payment">
                <span>Tk 1000</span>
              </div>
              <div class="progress">
                <div class="the-bar">
                  <!--this indicates 13 out of 13 cloth pieces completed--------------------->
                  <span class="done hidden">13</span>
                  <span class="total hidden">13</span>
                  <div class="progress-done"></div>
                </div>

                <span class="progress-text"></span>
              </div>
              <div class="status">
                <span class="status completed">Completed</span>
              </div>
            </div>

            <div class="wrap-item">
              <div class="id">
                <span>3</span>
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
                <span class="status processing">Processing</span>
              </div>
            </div>

            <div class="wrap-item">
              <div class="id">
                <span>4</span>
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
                <span class="status processing">Processing</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>