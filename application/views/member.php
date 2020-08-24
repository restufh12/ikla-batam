<div class="heading-default heading-default heading-default_context_default" style="background-image: url(<?= base_url()?>assets/img/banner-member.jpg); background-repeat: no-repeat; background-size: 100%;">
  <div class="container">
    <div class="heading-default__title">Meet Our Member</div>
    <ul class="heading-default__breadcrumbs">
      <li class="heading-default__breadcrumb-item">
        <a class="heading-default__breadcrumb-link" href="#">Home</a>
      </li>
      <li class="heading-default__breadcrumb-item">Member</li>
    </ul>
    <br>  
  </div>
</div>  
    
<div class="team-block">
  <div class="container">
    <div class="team-block__body team-block__body" style="padding-bottom: 10px;">
      <div class="heading-group heading-group heading-group_centered">
        <div class="heading-group__text">anggota - anggota IKLA aktif dalam mengikuti kegiatan bersama guna meningkatkan hubungan sosial dan persaudaraan yang solid antar perantau Luak Agam yang berada di Kota Batam.
        </div>
      </div>

      <div class="masonry-large-block" style="border-bottom:0px;">
        <div class="container-fluid">
          <div id="load_data_member" class="row" style="height: 100% !important;text-align: center;"></div>
          <div style="text-align: center;margin-top: 30px;">
            <button class="btn btn-info" id="load_more_member" data-val="0">Load More
            <img style="display: none;padding-left: 10px;" id="loader_member" src="<?php echo base_url()?>assets/img/loadmore.gif"> 
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  

<!-- Modal Detail Member Home -->
<div class="modal fade" id="modalMemberDetailHome">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body-member-detail-home">
      </div>
    </div>
  </div>
</div>
