<?php 
define('SERVER_PATH', '../../private/server/');
?>
<div class="navigation">
  <ul>
    <li>
      <a onclick="window.location.href='';">
        <span class="icon">
          <img src="<?php echo PUBLIC_PATH ?>img/logo.png" />
        </span>
        <span class="title">
          <h2>Washify</h2>
        </span>
      </a>
    </li>

    <li>
      <a onclick="window.location.href='<?php echo PUBLIC_PATH ?>view/dashboard-customer.php';">
        <span class="icon">
          <ion-icon name="home-outline"></ion-icon>
        </span>
        <span class="title">Dashboard</span>
      </a>
    </li>

    <li>
      <a onclick="window.location.href='<?php echo PUBLIC_PATH ?>view/order-history-customer.php';">
        <span class="icon">
          <ion-icon name="people-outline"></ion-icon>
        </span>
        <span class="title">Order History</span>
      </a>
    </li>

    <li>
      <a onclick="window.location.href='';">
        <span class="icon">
          <ion-icon name="chatbubble-outline"></ion-icon>
        </span>
        <span class="title">Notifications</span>
      </a>
    </li>

    <li>
      <a onclick="window.location.href='';">
        <span class="icon">
          <ion-icon name="settings-outline"></ion-icon>
        </span>
        <span class="title">Account Settings</span>
      </a>
    </li>

    <li>
    <a onclick="window.location.href='<?php echo SERVER_PATH ?>logout.php';">
        <span class="icon">
          <ion-icon name="log-out-outline"></ion-icon>
        </span>
        <span class="title">Sign Out</span>
      </a>
    </li>
  </ul>
</div>