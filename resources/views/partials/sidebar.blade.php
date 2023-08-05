<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        RT
      </a>
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        REZEKY TIME
      </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class="{{ Request::is('/') ? 'active' : '' }}  ">
          <a href="./">
            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="{{ Request::is('tabless') ? 'active' : '' }}  ">
          <a href="./tabless">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Table List</p>
          </a>
        </li>
        <li>
          <a href="./user.html">
            <i class="now-ui-icons users_single-02"></i>
            <p>User Profile</p>
          </a>
        </li>
        <li class="active-pro">
          <a href="./upgrade.html">
            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
            <p>Upgrade to PRO</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel" id="main-panel">
   