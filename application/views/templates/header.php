<header class="header header_white header_fixed ">
  <div class="header__container">
    <div class="header__wrapper container-fluid">
    <div class="header__inner">
      <a class="logo header__logo" href="index.php"><img src="<?= base_url()?>assets/gallery/logo-ikla.png" width="50px" /> IKLA KOTA BATAM</a>
      <button class="header__menu-button" type="button">
      <span class="header__menu-button-inner"></span>
      </button>
    </div>
    </div>
    <div class="header-fixed">
    <div class="header-fixed__bottom container">
      <ul class="top-menu header-fixed__menu">
      <li class="top-menu__menu-item">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="index.php">Home</a>
        </div>
      </li>
      <li class="top-menu__menu-item">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="about.php">About</a>
        </div>
      </li>
      <li class="top-menu__menu-item">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="event.php">Event</a>
        </div>
      </li>
      <li class="top-menu__menu-item">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="member.php">Member</a>
        </div>
      </li>
      <li class="top-menu__menu-item">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="contact.php">Contact</a>
        </div>
      </li>
      </ul>
    </div>
    </div>
  </div>
  <div class="header__overlay"></div>
  <div class="menu-panel header__menu">
    <div class="menu-panel__inner">
    <button class="header__menu-button header__menu-button_fixed" type="button">
      <span class="header__menu-button-inner"></span>
    </button>

    <!-- if No Login -->
    <div class="menu-panel__locales">
      <div class="menu-panel__locale link"><a href="register.php">Register</a></div>
      <div class="menu-panel__locale link"><a href="login.php">Login</a></div>
    </div>

    <!-- If Login Admin -->
    <div class="menu-panel__locales">
      <div class="menu-panel__locale link">Hallo, Administrator</div><br>
    </div>

    <!-- if Login member -->
    <div class="menu-panel__locales">
      <div class="menu-panel__locale link">Hallo, Ghea Lutfiana</div><br>
    </div>

    <div class="menu-panel__menu">
      <div class="menu-panel__menu-item">
            <a class="menu-panel__menu-link collapsed" data-toggle="collapse" href="#submenu2">Account</a>
            <div class="menu-panel__menu-list collapse" id="submenu2">
              <div class="menu-panel__bottom-submenu">

                <!-- If Login Admin -->
                <div class="menu-panel__submenu-item">
                  <a class="menu-panel__submenu-link" href="dashboard-member.php">Dashboard Member</a>
                </div>
                <!-- endif -->
                
                <div class="menu-panel__submenu-item">
                  <a class="menu-panel__submenu-link" href="update_profile.php">Update My Profile</a>
                </div>
                <div class="menu-panel__submenu-item">
                  <a class="menu-panel__submenu-link" href="my-event.php">My Event</a>
                </div>
              </div>
            </div>
          </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link" data-toggle="collapse" href="index.php">Home</a>
      </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link" data-toggle="collapse" href="about.php">About</a>
      </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link" data-toggle="collapse" href="event.php">Event</a>
      </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link" data-toggle="collapse" href="member.php">Member</a>
      </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link" data-toggle="collapse" href="contact.php">Contact</a>
      </div>
    </div>
    <div class="menu-panel__footer">
      <br><br>
      <div class="menu-panel__locales">
        <div class="menu-panel__locale link"><i class="icofont-sign-out"></i> Logout</div>
      </div> 
      <div class="menu-panel__bottom">
      <div class="menu-panel__copyright">&copy; 2020
        <strong>IKLABATAM.</strong>
        All Rights Reserved.
      </div>
      </div>
    </div>
    </div>
  </div>
</header>