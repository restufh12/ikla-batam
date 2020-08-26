<?php  
$vRunNoEvent = @$RunNoEvent;
$vUrlPost    = ($vRunNoEvent==""?'event/validation_save':'event/validation_update');
$vActionType = ($vRunNoEvent==""?'Create':'Update');
$vSaveCaption    = ($vRunNoEvent==""?'Create Event':'Update Event');
?>
<style type="text/css">
  main{
    background: linear-gradient(#950d21, #c91228, #950d21); /* Standard syntax */
    background: -webkit-linear-gradient(#950d21, #c91228, #950d21); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#950d21, #c91228, #950d21); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#950d21, #c91228, #950d21); /* For Firefox 3.6 to 15 */
  }
  .contact-block__input-text, .contact-block__input-textarea {
    color : #fff;
  }
  .contact-block__input-text, .contact-block__input-textarea {
    border-bottom: 1px solid #fff;
  }
  .contact-block__input-text:focus, .contact-block__input-textarea:focus {
    border-bottom: 1px solid #a47e59;
  }
  .contact-block__submit{
    color: #fff;
  }
</style>
<div class="heading-default heading-default heading-default_context_default" style="background-image: url(<?= base_url()?>assets/img/banner-event.jpg); background-repeat: no-repeat; background-size: 100%;">
  <div class="container">
    <div class="heading-default__title"><?= $vSaveCaption?></div>
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
		          <label style="color: #fff"><br>Judul</label>	
            </div>
        	<div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Judul" name="Judul" required placeholder="" type="text" value="<?= @$dataEvent->Judul?>" />
            </div>
        		<div class="col-12 col-sm-2">
        		  <label style="color: #fff"><br>Tanggal</label>	
            </div>
        	<div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Tanggal" name="Tanggal" required placeholder="" type="date" value="<?= @$dataEvent->Tanggal?>" />
            </div> 
        	<div class="col-12 col-sm-2">
        		  <label style="color: #fff"><br>Waktu</label>	
            </div>
        	<div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Waktu" name="Waktu" required placeholder="" type="time" value="<?= @$dataEvent->Waktu?>"/>
            </div>
        	<div class="col-12 col-sm-2">
        		  <label style="color: #fff"><br>Deskripsi</label>	
            </div>
        	<div class="col-12 col-sm-10">
              <textarea class="contact-block__input-textarea" id="Deskripsi" required name="Deskripsi" placeholder=""><?= @$dataEvent->Deskripsi?></textarea>
            </div>
        	<div class="col-12 col-sm-2">
        		  <label style="color: #fff"><br>Upload Lampiran</label>	
              <input id="LampiranOld" type="hidden" name="LampiranOld" value="<?= @$dataEvent->Lampiran?>">
            </div>
        	<div class="col-12 col-sm-10">
              <div class="file-loading">
                  <input id="Lampiran" type="file" name="Lampiran">
              </div>
            </div>
            

            <?php if($vRunNoEvent==""): ?>
            <div class="col-12 col-sm-2">
              <label style="color: #fff"><br>Mail To</label>  
            </div>
            <div class="col-12 col-sm-10" style="margin-top: 18px;">
              <select id="select2MailTo" name="MailTo[]" multiple="multiple" style="width: 100% !important;">
                <?php foreach ($arrMemberToSendEmail as $vMember) {
                  echo "<option value='".$vMember['Email']."'>".$vMember['Nama']." - ".$vMember['Email']."</option>";
                } ?>
              </select>
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