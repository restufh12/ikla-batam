
<div class="heading-default heading-default heading-default_context_default" style="background-image: url(<?= base_url()?>assets/img/banner-member.jpg); background-repeat: no-repeat; background-size: 100%;">
  <div class="container">
    <div class="heading-default__title">Update Profile</div>
    <ul class="heading-default__breadcrumbs">
	  <li class="heading-default__breadcrumb-item">
		<a class="heading-default__breadcrumb-link" href="#">Home</a>
	  </li>
	  <li class="heading-default__breadcrumb-item">Account</li>
	  <li class="heading-default__breadcrumb-item">Profile</li>
	</ul>
    <br>  
  </div>
</div>  
<div class="contact-block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12">
        <?php echo form_open_multipart('member/proses_update_member');?>
          <div class="row">
            <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Nama & Gelar Pusako</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Nama" name="Nama" placeholder="" required type="text" value="<?= $dataUser->Nama?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Jenis Kelamin</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <div class="form-check-inline">
                <label class="form-check-label input-margin-bottom" style="color:#fff">
                  <br>
                  <input type="radio" class="form-check-input" name="JenisKelamin" value="L" required <?= ($dataUser->JenisKelamin == "L" ? "checked" : "") ?>>Laki-Laki
                </label>
              </div>
              <div class="form-check-inline input-margin-bottom">
                <label class="form-check-label" style="color:#fff">
                  <br>
                  <input type="radio" class="form-check-input" name="JenisKelamin" value="P" <?= ($dataUser->JenisKelamin == "P" ? "checked" : "") ?>>Perempuan
                </label>
              </div>
            </div> 
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Alamat Rumah</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Alamat" name="Alamat" required placeholder="" type="text" value="<?= $dataUser->Alamat?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Pekerjaan</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Pekerjaan" name="Pekerjaan" required placeholder="" type="text" value="<?= $dataUser->Pekerjaan?>"/>
            </div>  
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Alamat Pekerjaan</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="AlamatPekerjaan" name="AlamatPekerjaan" placeholder="" type="text" value="<?= $dataUser->AlamatPekerjaan?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Suku / Niniak Mamak</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Suku" name="Suku" placeholder="" required type="text" value="<?= $dataUser->Suku?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>No. Hp / WA</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="NoHP" name="NoHP" placeholder="" required type="text" value="<?= $dataUser->NoHP?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Email</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Email" name="Email" placeholder="" required type="text" value="<?= $dataUser->Email?>"/>
            </div>  
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Asal Nagari</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Negara" name="Negara" placeholder="" type="text" value="<?= $dataUser->Negara?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Golongan Darah</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="GolonganDarah" name="GolonganDarah" placeholder="" type="text" value="<?= $dataUser->GolonganDarah?>"/>
            </div>  
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Pendidikan</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Pendidikan" name="Pendidikan" placeholder="" type="text" value="<?= $dataUser->Pendidikan?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Hobi</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="Hobi" name="Hobi" placeholder="" type="text" value="<?= $dataUser->Hobi?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Nama Istri/Suami</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input class="contact-block__input-text" id="NamaIstri" name="NamaIstri" placeholder="" type="text" value="<?= $dataUser->NamaIstri?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Nama Anak</label>	
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text" id="NamaAnak1" name="NamaAnak1" placeholder="Anak 1" type="text" value="<?= $dataUser->NamaAnak1?>"/>
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text" id="NamaAnak2" name="NamaAnak2" placeholder="Anak 2" type="text" value="<?= $dataUser->NamaAnak2?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label><br></label>	
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text" id="NamaAnak3" name="NamaAnak3" placeholder="Anak 3" type="text" value="<?= $dataUser->NamaAnak3?>"/>
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text" id="NamaAnak4" name="NamaAnak4" placeholder="Anak 4" type="text" value="<?= $dataUser->NamaAnak4?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label><br></label>	
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text" id="NamaAnak5" name="NamaAnak5" placeholder="Anak 5" type="text" value="<?= $dataUser->NamaAnak5?>"/>
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text" id="NamaAnak6" name="NamaAnak6" placeholder="Anak 6" type="text" value="<?= $dataUser->NamaAnak6?>"/>
            </div> 
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Upload Foto</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <?php  
              if($dataUser->PhotoFile=="" OR $dataUser->PhotoFile=="default.png"){
                $imagesrc = base_url()."assets/upload/member/default.png";
              } else {
                $imagesrc = base_url()."assets/upload/member/".$dataUser->PhotoFile;
              }
              ?>
              <img src="<?= $imagesrc?>" class="img-thumbnail" style="height:200px;margin: 20px 0px;">
              <input class="contact-block__input-text" id="PhotoFile" name="PhotoFile" placeholder="" type="file"/>
              <input class="contact-block__input-text" id="PhotoFileOld" name="PhotoFileOld" placeholder="" type="hidden" value="<?= $dataUser->PhotoFile?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Username</label>	
            </div>
		        <div class="col-12 col-sm-10">
              <input autocomplete="false" class="contact-block__input-text" required id="Username" name="Username" placeholder="Gunakan Nomor Hp / WA" type="text" value="<?= $dataUser->Username?>"/>
            </div>  
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>New Password</label>	
            </div>
    		    <div class="col-12 col-sm-10">
              <input autocomplete="new-password" class="contact-block__input-text" id="Password" name="Password" placeholder="" type="password" value=""/>
            </div>    
		        <div class="col-12">
              <button type="submit" class="contact-block__submit">Update
                <span class="contact-block__submit-icon icofont-caret-right"></span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>