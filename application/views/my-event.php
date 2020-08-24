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
        <a href="<?php echo site_url('event/buatevent') ?>" class="btn btn-success" role="button">Buat Event Baru</a>
      </div>
    </div>
    <br>
    
    <div class="row" id="load_data_event_member" style="height: 100% !important;"></div>
    <div style="text-align: center">
      <button class="btn btn-info" id="load_more_event_member" data-val="0">Load more
      <img style="display: none;padding-left: 10px" id="loader_event_member" src="<?php echo base_url()?>assets/img/loadmore.gif"> 
      </button>
    </div>	
  </div>
</div> 