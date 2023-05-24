<?php 
  define('SERVER_PATH','../../private/server/');
  define('PUBLIC_PATH','../');
  require SERVER_PATH.'customer_data.php';
?>
<div class="topbar">
  <div class="toggle">
    <ion-icon name="menu-outline"></ion-icon>
  </div>

  <div class="profile">
    <h2>Welcome, <?php echo $results['username'] ?> !</h2>
  </div>

  <div class="dropdowns">
    <div class="notif_icon" onclick="toggleNotifi()">
      <div class="icon-container">
        <ion-icon name="notifications-outline"></ion-icon>
        <span>17</span>
      </div>
    </div>
    <div class="notifi-box" id="box">
      <h2>Notifications <span>17</span></h2>

      <div class="notifi-item">
        <div class="text">
          <h4>Elias Abdurrahman</h4>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text">
          <h4>John Doe</h4>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text">
          <h4>Emad Ali</h4>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text">
          <h4>Ekram Abu</h4>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text">
          <h4>Jane Doe LAST</h4>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text notif_see_more">
          <p>
            <a href="">
              <span>Show all notifications</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>