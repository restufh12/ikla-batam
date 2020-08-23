<style type="text/css">
	main{
		background: #FFFFFF !important;
	}
	.display-none{
		display: none;
	}
</style>
<div class="heading-default heading-default heading-default_context_default" style="background-image: url(<?= base_url()?>assets/img/home-banner5.jpg)">
  <div class="container">
	<div class="heading-default__title">Dashboard Member</div>
	<ul class="heading-default__breadcrumbs">
	  <li class="heading-default__breadcrumb-item">
		<a class="heading-default__breadcrumb-link" href="#">Home</a>
	  </li>
	  <li class="heading-default__breadcrumb-item">Account</li>
	</ul>
	<br>  
  </div>
</div>  
<div class="contact-block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12 table-responsive">
      	<table id="member-listing" class="table progress-table" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail Member -->
<div class="modal fade" id="modalMemberDetail">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detail Member</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body-member-detail">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnVerifikasiMember">Verifikasi</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>