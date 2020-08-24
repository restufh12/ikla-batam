<div class="studio-intro-slide" style="background-image: url(<?= base_url()?>assets/img/banner-home.jpg)">
  <div class="Background">
    <canvas class="Background-canvas"></canvas>
  </div>
</div>

<div class="cards-block">
  <div class="cards-block__head">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 col-xl-5">
          <div class="cards-block__title">Apa itu <br>I.K.L.A Kota Batam?</div>
        </div>
        <div class="col-12 col-lg-6 offset-xl-1">
          <div class="cards-block__text" align="justify">Perantau Minangkabau yang berasal dari Luak Agam berdomisili di Kota Batam yang tergabung dalam Ikatan Keluarga Luak Agam atau biasa di sebut I.K.L.A. Didirikan oleh ... pada tahun ... dengan tujuan untuk meningkatkan hubungan sosial dan persaudaraan yang solid antar perantau Luak Agam yang berada di Kota Batam.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="masonry-large-block">
      <div class="container-fluid">
        <div class="masonry-large-block__grid row">

        	<?php foreach ($dataevent as $vdataevent) : ?>
          <div class="masonry-large-block__item col-12 col-sm-6 col-lg-4 col-xl-6">
            <a class="news-masonry-item" href="<?php echo site_url('event/detailevent/'.$vdataevent['RunNo']) ?>">
              <div class="news-masonry-item__content" style="height: 269px;">
                <div class="news-masonry-item__header">
                  <div class="news-masonry-item__category">Event</div>
                  <div class="news-masonry-item__date"><?= date('d/m/Y', strtotime($vdataevent['Tanggal']))?></div>
                </div>
                <div class="news-masonry-item__title"><?= $vdataevent['Judul']?></div>
                <div class="news-masonry-item__text"><?= strlen($vdataevent['Deskripsi']) > 130 ? substr($vdataevent['Deskripsi'],0,130)."..." : $vdataevent['Deskripsi'];?></div>
                <div class="news-masonry-item__continue">Continue
                  <span class="news-masonry-item__continue-icon icofont-rounded-right"></span>
                </div>
              </div>
            </a>
          </div>

        	<?php endforeach; ?>
        </div>
      </div>
      <div class="masonry-large-block__loader"><a href="<?php echo site_url('event') ?>">Lihat Lebih Banyak</a></div>
    </div>
</div>
<div class="parallax-block">
  <div class="parallax-block__image" data-rellax-percentage="0.5" data-rellax-speed="-3" style="background-image: url('<?= base_url()?>assets/gallery/video-image.jpg')"></div>
  <div class="container">
	<div class="parallax-block__inner">
	  <div class="parallax-block__subtitle heading-smallest">IKLA Batam Gelar Acara</div>
	  <div class="parallax-block__title-wrapper">
		<div class="parallax-block__title">"SILAHHTURRAHIM JO
		  <br/>
		  MAKAN BASAMO"
		</div>
		<div class="parallax-block__label">Play Video
		  <a class="parallax-block__play popup-video" href="https://www.youtube.com/watch?v=jRsSzukMHcA" target="_blank"></a>
		</div>
	  </div>
	</div>
  </div>
</div>

<div class="team-block">
  <div class="container">
	<div class="team-block__body team-block__body team-block__body_bordered">
	  <div class="heading-group heading-group heading-group_centered">
		<div class="heading-group__subtitle"><a href="<?php echo site_url('member') ?>">Lihat Lebih Banyak</a></div>
		<div class="heading-group__title">ANGGOTA-ANGGOTA I.K.L.A</div>
		<div class="heading-group__text">anggota - anggota IKLA aktif dalam mengikuti kegiatan bersama guna meningkatkan hubungan sosial dan persaudaraan yang solid antar perantau Luak Agam yang berada di Kota Batam.
		</div>
	  </div>
	  <div class="team-block__slider-wrapper">
		<div class="team-block__slider swiper-container">
		  <div class="swiper-wrapper">
				
				<?php foreach ($datamember as $vdatamember) : ?>
				<div class="team-block__slide swiper-slide">
				  <div class="team-block__image-wrapper">
				  <div style="height: 230px; width: 230px; overflow: hidden; ">
						<img style="border-radius: 50%; height: 230px; width: 230px;" alt="" src="<?= base_url('assets/upload/member/'.$vdatamember['PhotoFile'])?>"/>
					</div>
					<div class="team-block__hover">
					  <div class="socials">
					  	<?php  
					  	$vRunNo = $vdatamember['RunNo'];
					  	?>
						<button style="background-color: transparent;" class="socials__social icofont-eye-alt" title="Lihat Detail" onclick="fnShowDetailMemberFromHome('<?= $vRunNo?>')">
						  <div class="visually-hidden">Details</div>
						</bitton>
					  </div>
					</div>
				  </div>
				  <div class="team-block__person-name"><?= $vdatamember['Nama']?></div>
				  <div class="team-block__person-role"><?= $vdatamember['Suku']?> | <?= $vdatamember['Negara']?></div>
				  <div class="team-block__person-role"><?= $vdatamember['Pekerjaan']?> | <?= $vdatamember['Pendidikan']?></div>
				</div>
				<?php endforeach; ?>

		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>

<div class="studio-posts">
  <div class="heading-group heading-group heading-group_centered">
	<div class="heading-group__subtitle" style="color: #000">Blog</div>
	<div class="heading-group__title" style="color: #000">POSTINGAN TERBARU DARI BLOG KAMI</div>
  </div>
  <div class="posts">
	<div class="container">
	  <div class="row">
		<div class="posts__item col-12 col-lg-4">
		  <a class="posts__item-inner" href="<?php echo site_url('blog/detail/1') ?>">
			<img alt="" class="posts__image" src="<?= base_url()?>assets/gallery/studio-post-image-1.jpg"/>
			<span class="posts__item-content"><span class="posts__item-footer"><span class="posts__category">News</span><span class="posts__date">Nov 12, 2017</span></span><span class="posts__item-title">"Urang Agam" Bangun Rumah Gadang di Batam</span></span>
		  </a>
		</div>
		<div class="posts__item col-12 col-lg-4">
		  <a class="posts__item-inner" href="<?php echo site_url('blog/detail/2') ?>">
			<img alt="" class="posts__image" src="<?= base_url()?>assets/gallery/studio-post-image-2.jpg"/>
			<span class="posts__item-content"><span class="posts__item-footer"><span class="posts__category">News</span><span class="posts__date">Des 22, 2019</span></span><span class="posts__item-title">“Sudah Waktunya Warga IKLA Menunjukan Eksistensinya”</span></span>
		  </a>
		</div>
		<div class="posts__item col-12 col-lg-4">
		  <a class="posts__item-inner" href="<?php echo site_url('blog/detail/3') ?>">
			<img alt="" class="posts__image" src="<?= base_url()?>assets/gallery/studio-post-image-3.jpg"/>
			<span class="posts__item-content"><span class="posts__item-footer"><span class="posts__category">News</span><span class="posts__date">Des 22, 2019</span></span><span class="posts__item-title">Amsakar Ajak IKLA Bersinergi Bangun Batam</span></span>
		  </a>
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