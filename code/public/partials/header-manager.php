<?php 
  define('SERVER_PATH','../../private/server/');
  define('PUBLIC_PATH','../');
  require SERVER_PATH.'manager_data.php';
?>
<div class="topbar">
  <div class="toggle">
    <ion-icon name="menu-outline"></ion-icon>
  </div>

  <div class="profile">
    <h2><?php echo 'Welcome '.$results['laundryname'].' manager' ?> </h2>
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
          <span>Elias Abdurrahman</span>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text">
          <span>John Doe</span>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text">
          <span>Emad Ali</span>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text">
          <span>Ekram Abu</span>
          <p>@lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="notifi-item">
        <div class="text">
          <span>Jane Doe LAST</span>
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