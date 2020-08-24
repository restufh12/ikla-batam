<div class="heading-default heading-default heading-default_context_default" style="background-image: url(<?= base_url()?>assets/img/banner-event.jpg); background-repeat: no-repeat; background-size: 100%;">
  <div class="container">
    <div class="heading-default__title">Event Detail</div>
    <ul class="heading-default__breadcrumbs">
      <li class="heading-default__breadcrumb-item">
        <a class="heading-default__breadcrumb-link" href="#">Home</a>
      </li>
      <li class="heading-default__breadcrumb-item">Event</li>
    </ul>
    <br>  
  </div>
</div>   
<div class="single-post">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <div class="single-post__header">
          <div class="single-post__date">Tanggal : <?= date('d/m/Y', strtotime($eventdetail->Tanggal))?></div>
          <br>
          <div class="single-post__date">Waktu : <?= date('H:i:s', strtotime($eventdetail->Waktu))?></div>
        </div>
        <div class="single-post__title"><?= $eventdetail->Judul?></div>
        <div class="single-post__text">
          <?= $eventdetail->Deskripsi?>
        </div>
      </div>
    </div>
  </div>
  <div class="masonry-large-block__loader"><a href="<?php echo site_url('event') ?>">Back to event</a></div>	
</div>