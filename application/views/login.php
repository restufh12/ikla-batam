<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN | IKLA KOTA BATAM</title>
	<link href="<?= base_url()?>assets/login/images/favicon.png" rel="shortcut icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url()?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url()?>assets/login/css/style.css">
    <link href="<?= base_url()?>node_modules/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet">
</head>
<body>

    <div class="main" style="padding: 75px 0 !important;">
		
        <!-- Sing in  Form -->
        <section class="sign-in" style="opacity: 0.9">
            <div class="container">
                <div class="signin-content" style="padding-top: 40px; padding-bottom: 40px !important;">
                    <div class="signin-image">
                        <figure><img src="<?= base_url()?>assets/login/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="javascript:history.back()" class="signup-image-link"><i class="zmdi zmdi-chevron-left"></i> Back to homepage</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form" action="<?php echo site_url('auth/proses_login') ?>">
                            <div class="form-group">
                                <label for="Username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Username" id="Username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="Password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="Password" id="Password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <a href="<?php echo site_url('auth/register') ?>" class="signup-image-link">Create an account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url()?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/login/js/main.js"></script>
    <script src="<?= base_url()?>node_modules/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<script type="text/javascript" >
if (typeof $ == 'undefined') { var $ = jQuery; }
$(document).ready(function() {
    // ALERT LOGIN ERROR  -------------------------------------------------------------------------------
    let loginerrors = "<?= $this->session->flashdata('loginerrors')?>";
    if(loginerrors!="" && loginerrors!="NULL"){
      $.toast({
          heading: 'Error',
          text: loginerrors,
          showHideTransition: 'slide',
          icon: 'error',
          position: 'top-right',
          hideAfter: 3000
      })
    }
    // --------------------------------------------------------------------------------------------------
});
</script>
