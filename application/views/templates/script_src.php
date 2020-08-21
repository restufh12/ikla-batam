<!--JS-->
<script src="<?= base_url()?>assets/js/polyfill.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.viewport.min.js"></script>
<script src="<?= base_url()?>assets/js/jQuerySimpleCounter.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>assets/js/animsition.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>assets/js/rellax.min.js"></script>
<script src="<?= base_url()?>assets/js/swiper.min.js"></script>
<script src="<?= base_url()?>assets/js/smoothscroll.js"></script>
<script src="<?= base_url()?>assets/js/svg4everybody.legacy.min.js"></script>
<script src="<?= base_url()?>assets/js/TweenMax.min.js"></script>
<script src="<?= base_url()?>assets/js/TimelineLite.min.js"></script>
<script src="<?= base_url()?>assets/js/typed.min.js"></script>
<script src="<?= base_url()?>assets/js/vivus.min.js"></script>

<!--Revolution JS-->
<script src="<?= base_url()?>assets/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!--Revolution Panorama Add-On JS-->
<script src="<?= base_url()?>assets/js/revolution-addons/panorama/three.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution-addons/panorama/revolution.addon.panorama.min.js"></script><!-- Revolution Slicey Add-On JS-->
<script src="<?= base_url()?>assets/js/revolution-addons/slicey/revolution.addon.slicey.min.js"></script>
<!-- Revolution Panorama extensions JS (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading)-->
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.video.min.js"></script>
<!--Theme JS-->
<script src="<?= base_url()?>assets/js/theme.js"></script>
<!-- Jquery Toast -->
<script src="<?= base_url()?>node_modules/jquery-toast-plugin/dist/jquery.toast.min.js"></script>


<script type="text/javascript" >
if (typeof $ == 'undefined') { var $ = jQuery; }
$(document).ready(function() {

	// ALERT NEW MEMBER -------------------------------------------------------------------------------
    let msgnewmember = "<?= $this->session->flashdata('msgnewmember')?>";
	if(msgnewmember=="Registrasi Sukses"){
	  $.toast({
	      heading: 'Success',
	      text: 'Registrasi member berhasil, data anda terlebih dahulu akan di verifikasi oleh admin.',
	      showHideTransition: 'slide',
	      icon: 'success',
	      position: 'bottom-right',
	      hideAfter: 10000
	  })
	}
	// --------------------------------------------------------------------------------------------------

	// ALERT LOGIN SUCCESS
	let loginsuccess = "<?= $this->session->flashdata('loginsuccess')?>";
	if(loginsuccess=="1"){
	  $.toast({
	      heading: 'Success',
	      text: 'Login Berhasil',
	      showHideTransition: 'slide',
	      icon: 'success',
	      position: 'bottom-right',
	      hideAfter: 5000
	  })
	}	

	// ALERT LOGOUT SUCCESS
	let logoutsuccess = "<?= $this->session->flashdata('logoutsuccess')?>";
	console.log(logoutsuccess)
	if(logoutsuccess=="1"){
	  $.toast({
	      heading: 'Success',
	      text: 'Logout Berhasil',
	      showHideTransition: 'slide',
	      icon: 'success',
	      position: 'bottom-right',
	      hideAfter: 5000
	  })
	}
});
</script>

