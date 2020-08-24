<?php  
$vRunNoEvent = @$RunNoEvent;
$vUrlPost    = ($vRunNoEvent==""?'event/validation_save':'event/validation_update');
$vSaveCaption    = ($vRunNoEvent==""?'Create Event':'Update Event');
?>
<div class="heading-default heading-default heading-default_context_default" style="background-image: url(<?= base_url()?>assets/img/banner-event.jpg); background-repeat: no-repeat; background-size: 100%;">
  <div class="container">
    <div class="heading-default__title">Create Event</div>
    <ul class="heading-default__breadcrumbs">
      <li class="heading-default__breadcrumb-item">
        <a class="heading-default__breadcrumb-link" href="#">Home</a>
      </li>
      <li class="heading-default__breadcrumb-item">Account</li>
      <li class="heading-default__breadcrumb-item">My Event</li>
      <li class="heading-default__breadcrumb-item"><?= $vSaveCaption?></li>	
    </ul>
    <br>  
  </div>
</div>  
<div class="contact-block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12">
        <?php echo form_open_multipart($vUrlPost);?>
          <input type="hidden" name="RunNo" value="<?= $vRunNoEvent?>">
          <div class="row">
            <div class="col-12 col-sm-2">
		          <label><br>Judul</label>	
            </div>
        		<div class="col-12 col-sm-1">
        		  <label><br>:</label>	
            </div>  
            <div class="col-12 col-sm-9">
              <input class="contact-block__input-text" id="Judul" name="Judul" placeholder="" type="text" value="<?= @$dataEvent->Judul?>" />
            </div>
        		<div class="col-12 col-sm-2">
        		  <label><br>Tanggal</label>	
            </div>
        		<div class="col-12 col-sm-1">
        		  <label><br>:</label>	
            </div>  
            <div class="col-12 col-sm-9">
              <input class="contact-block__input-text" id="Tanggal" name="Tanggal" placeholder="" type="date" value="<?= @$dataEvent->Tanggal?>" />
            </div> 
        		<div class="col-12 col-sm-2">
        		  <label><br>Waktu</label>	
            </div>
        		<div class="col-12 col-sm-1">
        		  <label><br>:</label>	
            </div>  
            <div class="col-12 col-sm-9">
              <input class="contact-block__input-text" id="Waktu" name="Waktu" placeholder="" type="time" value="<?= @$dataEvent->Waktu?>"/>
            </div>
        		<div class="col-12 col-sm-2">
        		  <label><br>Deskripsi</label>	
            </div>
        		<div class="col-12 col-sm-1">
        		  <label><br>:</label>	
            </div>  
            <div class="col-12 col-sm-9">
              <textarea class="contact-block__input-textarea" id="Deskripsi" name="Deskripsi" placeholder=""><?= @$dataEvent->Deskripsi?></textarea>
            </div>
        		<div class="col-12 col-sm-2">
        		  <label><br>Upload Lampiran</label>	
            </div>
        		<div class="col-12 col-sm-1">
        		  <label><br>:</label>	
            </div>  
            <div class="col-12 col-sm-9">
              <div class="file-loading">
                  <input id="Lampiran" type="file" name="Lampiran">
              </div>
            </div>

            <?php if($vRunNoEvent==""): ?>
            <div class="col-12 col-sm-2">
              <label><br>Mail To</label>  
            </div>
            <div class="col-12 col-sm-1">
              <label><br>:</label>  
            </div>  
            <div class="col-12 col-sm-9">
              <textarea class="contact-block__input-textarea" id="MailTo" name="MailTo" placeholder=""></textarea>
            </div>
            <?php endif; ?>
		   
		        <div class="col-12">
              <button class="contact-block__submit"><?= $vSaveCaption?>
                <span class="contact-block__submit-icon icofont-caret-right"></span>
              </button>
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>