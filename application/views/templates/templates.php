<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/link_rel.php')?>

<body class="page">
  <?php $this->load->view('templates/svg_sprites.php')?>
  
  <div class="page__inner animsition">
    
    <?php $this->load->view('templates/header.php')?>
  	
    <main>

      <?php $this->load->view($container)?>
      
    </main>
  	
    <?php $this->load->view('templates/footer.php')?>
    
  </div>

  <?php $this->load->view('templates/script_src.php')?>
</body>

</html>
