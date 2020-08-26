<div class="heading-default heading-default heading-default_context_default" style="background-image: url(<?= base_url()?>assets/img/banner-event.jpg); background-repeat: no-repeat; background-size: 100%;">
  <div class="container">
    <div class="heading-default__title">My Event</div>
    <ul class="heading-default__breadcrumbs">
      <li class="heading-default__breadcrumb-item">
        <a class="heading-default__breadcrumb-link" href="#">Home</a>
      </li>
      <li class="heading-default__breadcrumb-item">Account</li>
      <li class="heading-default__breadcrumb-item">My Event</li>	
    </ul>
    <br>  
  </div>
</div>  
    
<div class="masonry-large-block">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <a href="<?php echo site_url('event/buatevent') ?>" class="btn btn-success btn-lg" role="button"><i class="fas fa-plus-circle"></i> Buat Event Baru</a>
      </div>
    </div>
    <br>
    
    <div class="row" id="load_data_event_member" style="height: 100% !important;"></div>

    <br>
    <div style="text-align: center">
      <button class="btn contact-block__load" id="load_more_event_member" data-val="0"><i class="fas fa-chevron-circle-down"></i> Lihat Lebih Banyak
      <img style="display: none;padding-left: 10px" id="loader_event_member" src="<?php echo base_url()?>assets/img/loadmore.gif"> 
      </button>
    </div>	
  </div>
</div> 

<!-- The Modal -->
<div class="modal" id="modalSendMailTo">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Mail To</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12" style="margin: 10px 0px;">
            <input type="hidden" id="ModalRunNoEventValue">
            <select id="select2MailTo" name="MailTo[]" multiple="multiple" style="width: 100% !important">
              <?php foreach ($arrMemberToSendEmail as $vMember) {
                echo "<option value='".$vMember['Email']."'>".$vMember['Nama']." - ".$vMember['Email']."</option>";
              } ?>
            </select>
          </div>
        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="far fa-times-circle"></i> Cancel</button>
        <button type="button" class="btn btn-success" onclick="fnSendingEmail()"><i class="far fa-paper-plane"></i> Send</button>
      </div>

    </div>
  </div>
</div>
