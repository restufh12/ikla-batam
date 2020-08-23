<header class="header header_white header_fixed ">
  <div class="header__container">
    <div class="header__wrapper container-fluid">
    <div class="header__inner">
      <a class="logo header__logo" href="<?php echo site_url() ?>"><img src="<?= base_url()?>assets/gallery/logo-ikla.png" width="50px" /> IKLA KOTA BATAM</a>
      <button class="header__menu-button" type="button">
      <span class="header__menu-button-inner"></span>
      </button>
    </div>
    </div>
    <div class="header-fixed">
    <div class="header-fixed__bottom container">
      <ul class="top-menu header-fixed__menu">
      <li class="top-menu__menu-item <?= ($container=='home'?'menuactive':'')?>">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="<?php echo site_url() ?>">Home</a>
        </div>
      </li>
      <li class="top-menu__menu-item <?= ($container=='about'?'menuactive':'')?>">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="<?php echo site_url('about') ?>">About</a>
        </div>
      </li>
      <li class="top-menu__menu-item <?= ($container=='event'?'menuactive':'')?>">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="<?php echo site_url('event') ?>">Event</a>
        </div>
      </li>
      <li class="top-menu__menu-item <?= ($container=='member'?'menuactive':'')?>">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="<?php echo site_url('member') ?>">Member</a>
        </div>
      </li>
      <li class="top-menu__menu-item <?= ($container=='contact'?'menuactive':'')?>">
        <div class="dropdown">
        <a class="dropdown__trigger top-menu__menu-link" href="<?php echo site_url('contact') ?>">Contact</a>
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

    <?php if($this->session->userdata('LoginYN')!="1"): ?>
    <!-- if No Login -->
    <div class="menu-panel__locales" style="margin-bottom: 40px !important;">
      <div class="menu-panel__locale link"><a class="menu-panel__locale link" href="<?php echo site_url('auth/register') ?>">Register</a></div>
      <div class="menu-panel__locale link"><a class="menu-panel__locale link" href="<?php echo site_url('auth/login') ?>">Login</a></div>
    </div>
    <?php endif; ?>

    <?php if($this->session->userdata('LoginYN')=="1"): ?>
    <div class="menu-panel__locales" style="margin-bottom: 40px !important;">
      <div class="menu-panel__locale link">Hallo, <?= ($this->session->userdata('Level')=="Admin"?"Administrator" : $this->session->userdata('Nama'))?></div><br>
    </div>
    <?php endif; ?>

    <div class="menu-panel__menu">
      
	  <?php if($this->session->userdata('LoginYN')=="1"): ?>
	  <!-- If Login Admin -->
	  <div class="menu-panel__menu-item">
		<a class="menu-panel__menu-link collapsed" data-toggle="collapse" href="#submenu2">Account</a>
		<div class="menu-panel__menu-list collapse" id="submenu2">
		  <div class="menu-panel__bottom-submenu">

        <?php if($this->session->userdata('Level')=="Admin"): ?>
  			<div class="menu-panel__submenu-item">
  			  <a class="menu-panel__submenu-link" href="<?php echo site_url('admin') ?>">Dashboard Member</a>
  			</div>
        <?php endif; ?>

  			<div class="menu-panel__submenu-item">
  			  <a class="menu-panel__submenu-link" href="<?php echo site_url('member/updateprofile') ?>">Update My Profile</a>
  			</div>
  			<div class="menu-panel__submenu-item">
  			  <a class="menu-panel__submenu-link" href="<?php echo site_url('event/myevent') ?>">My Event</a>
  			</div>

		  </div>
		</div>
	  </div>
	  <!-- endif -->
	  <?php endif; ?>
		
	  <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link <?= ($container=='home'?'menuactiveright':'')?>" data-toggle="collapse" href="<?php echo site_url() ?>">Home</a>
      </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link <?= ($container=='about'?'menuactiveright':'')?>" data-toggle="collapse" href="<?php echo site_url('about') ?>">About</a>
      </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link <?= ($container=='event'?'menuactiveright':'')?>" data-toggle="collapse" href="<?php echo site_url('event') ?>">Event</a>
      </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link <?= ($container=='member'?'menuactiveright':'')?>" data-toggle="collapse" href="<?php echo site_url('member') ?>">Member</a>
      </div>
      <div class="menu-panel__menu-item">
      <a class="menu-panel__menu-link <?= ($container=='contact'?'menuactiveright':'')?>" data-toggle="collapse" href="<?php echo site_url('contact') ?>">Contact</a>
      </div>
    </div>
    <div class="menu-panel__footer">
      <br><br>
		
	  <?php if($this->session->userdata('LoginYN')=="1"): ?>
	  <!-- If Login Admin -->	
      <div class="menu-panel__locales">
        <a class="menu-panel__locale link" href="<?php echo site_url('auth/logout') ?>"><div class="menu-panel__locale link"><i class="icofont-sign-out"></i> Logout</div></a>
      </div> 
    <?php endif; ?>		
		
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