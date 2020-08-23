<div class="heading-default heading-default heading-default_context_default" style="background-image: url(assets/img/banner-about.jpg); background-repeat: no-repeat; background-size: 100%;">
  <div class="container">
	<div class="heading-default__title">Our Blog</div>
	<ul class="heading-default__breadcrumbs">
	  <li class="heading-default__breadcrumb-item">
		<a class="heading-default__breadcrumb-link" href="<?php echo site_url('/') ?>">Home</a>
	  </li>
	  <li class="heading-default__breadcrumb-item">Blog</li>
	</ul>
	<br>  
  </div>
</div>  
<div class="single-post">
  <div class="container">
	<div class="row">
	  <div class="col-12 col-lg-8 offset-lg-2">
		<div class="single-post__header">
		  <a class="single-post__category" href="#"><?= $blogdetail->Kategori?></a>
		  <div class="single-post__date"><?= date('d/m/Y', strtotime($blogdetail->Tanggal));?></div>
		</div>
		<div class="single-post__title"><?= $blogdetail->Judul?></div>
		<div class="single-post__images row">
		  <div class="col-12">
			  <img alt="" class="single-post__image" src="<?= base_url('assets/upload/blog/'.$blogdetail->PhotoFile)?>"/>
		  </div>
		</div>  
		<div class="single-post__text">
		  <?= $blogdetail->Konten?>
		</div>
	  </div>
	</div>
  </div>
  <div class="masonry-large-block__loader"><a href="<?php echo site_url('/') ?>">Kembali</a></div>
  <br><br>	
</div>
  