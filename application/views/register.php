<?php
  @$errors = $this->session->flashdata('errors');
?>
<div class="heading-default heading-default heading-default_context_default" style="background-image: url(<?= base_url()?>assets/img/banner-register.jpg); background-repeat: no-repeat; background-size: 100%;">
  <div class="container">
    <div class="heading-default__title">Create Account</div>
    <ul class="heading-default__breadcrumbs">
      <li class="heading-default__breadcrumb-item">
        <a class="heading-default__breadcrumb-link" href="#">Home</a>
      </li>
      <li class="heading-default__breadcrumb-item">Register</li>
    </ul>
    <br>  
  </div>
</div>  
<div class="contact-block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12">
          <?php echo form_open_multipart('auth/proses_register');?>
          <div class="row">
            <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Nama & Gelar Pusako</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['Nama']) ? 'error-field' : '')?>" id="Nama" required name="Nama" placeholder="" type="text" value="<?= $this->session->flashdata('Nama'); ?>"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Jenis Kelamin</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <div class="form-check-inline">
                <label class="form-check-label input-margin-bottom" style="color:#fff">
                  <br>
                  <input type="radio" class="form-check-input" name="JenisKelamin" value="L" required <?= ($this->session->flashdata('JenisKelamin') == "L"? "checked" : "")?> >Laki-Laki
                </label>
              </div>
              <div class="form-check-inline input-margin-bottom">
                <label class="form-check-label" style="color:#fff">
                  <br>
                  <input type="radio" class="form-check-input" name="JenisKelamin" value="P" <?= ($this->session->flashdata('JenisKelamin') == "P"? "checked" : "")?>>Perempuan
                  <?php if(isset($errors['JenisKelamin'])): ?>
                  &nbsp;
                  &nbsp;
                  &nbsp;
                  <span style="color: red;">*Pilih Jenis Kelamin</span>
                  <?php endif; ?>
                </label>
              </div>
            </div> 
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Alamat Rumah</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['Alamat']) ? 'error-field' : '')?>" id="Alamat" name="Alamat" required placeholder="" type="text"value="<?= $this->session->flashdata('Alamat'); ?>"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Pekerjaan</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['Pekerjaan']) ? 'error-field' : '')?>" id="Pekerjaan" name="Pekerjaan" required placeholder="" type="text" value="<?= $this->session->flashdata('Pekerjaan'); ?>"/>
            </div>  
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Alamat Pekerjaan</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['AlamatPekerjaan']) ? 'error-field' : '')?>" id="AlamatPekerjaan" name="AlamatPekerjaan" required placeholder="" type="text" value="<?= $this->session->flashdata('AlamatPekerjaan'); ?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Suku / Niniak Mamak</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['Suku']) ? 'error-field' : '')?>" id="Suku" name="Suku" placeholder="" required type="text" value="<?= $this->session->flashdata('Suku'); ?>"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>No. Hp / WA</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['NoHP']) ? 'error-field' : '')?>" id="NoHP" name="NoHP" placeholder="" required type="text" value="<?= $this->session->flashdata('NoHP'); ?>"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Email</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['Email']) ? 'error-field' : '')?>" id="Email" name="Email" placeholder="" required type="text" value="<?= $this->session->flashdata('Email'); ?>"/>
            </div>  
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Asal Nagari</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['Negara']) ? 'error-field' : '')?>" id="Negara" name="Negara" placeholder="" required type="text" value="<?= $this->session->flashdata('Negara'); ?>"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Golongan Darah</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['GolonganDarah']) ? 'error-field' : '')?>" id="GolonganDarah" name="GolonganDarah" placeholder="" type="text" value="<?= $this->session->flashdata('GolonganDarah'); ?>"/>
            </div>  
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Pendidikan</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['Pendidikan']) ? 'error-field' : '')?>" id="Pendidikan" name="Pendidikan" placeholder="" type="text" value="<?= $this->session->flashdata('Pendidikan'); ?>"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Hobi</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['Hobi']) ? 'error-field' : '')?>" id="Hobi" name="Hobi" placeholder="" type="text" value="<?= $this->session->flashdata('Hobi'); ?>"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Nama Istri</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['NamaIstri']) ? 'error-field' : '')?>" id="NamaIstri" name="NamaIstri" placeholder="" type="text" value="<?= $this->session->flashdata('NamaIstri'); ?>"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Nama Anak</label>	
            </div>
		   <div class="col-12 col-sm-5">
              <input class="contact-block__input-text <?= (isset($errors['NamaAnak1']) ? 'error-field' : '')?>" id="NamaAnak1" name="NamaAnak1" placeholder="Anak 1" type="text" value="<?= $this->session->flashdata('NamaAnak1'); ?>"/>
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text <?= (isset($errors['NamaAnak2']) ? 'error-field' : '')?>" id="NamaAnak2" name="NamaAnak2" placeholder="Anak 2" type="text"  value="<?= $this->session->flashdata('NamaAnak2'); ?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label><br></label>	
            </div>
		    <div class="col-12 col-sm-5">
              <input class="contact-block__input-text <?= (isset($errors['NamaAnak3']) ? 'error-field' : '')?>" id="NamaAnak3" name="NamaAnak3" placeholder="Anak 3" type="text" value="<?= $this->session->flashdata('NamaAnak3'); ?>"/>
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text <?= (isset($errors['NamaAnak4']) ? 'error-field' : '')?>" id="NamaAnak4" name="NamaAnak4" placeholder="Anak 4" type="text" value="<?= $this->session->flashdata('NamaAnak4'); ?>"/>
            </div>
		        <div class="col-12 col-sm-2">
		          <label><br></label>	
            </div>
		    <div class="col-12 col-sm-5">
              <input class="contact-block__input-text <?= (isset($errors['NamaAnak5']) ? 'error-field' : '')?>" id="NamaAnak5" name="NamaAnak5" placeholder="Anak 5" type="text" value="<?= $this->session->flashdata('NamaAnak5'); ?>"/>
            </div>
		        <div class="col-12 col-sm-5">
              <input class="contact-block__input-text <?= (isset($errors['NamaAnak6']) ? 'error-field' : '')?>" id="NamaAnak6" name="NamaAnak6" placeholder="Anak 6" type="text" value="<?= $this->session->flashdata('NamaAnak6'); ?>"/>
            </div> 
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Upload Foto</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input class="contact-block__input-text <?= (isset($errors['PhotoFile']) ? 'error-field' : '')?>" id="PhotoFile" name="PhotoFile" placeholder="" type="file"/>
            </div>
		    <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Username</label>	
            </div>
		    <div class="col-12 col-sm-10">
              <input autocomplete="false" class="contact-block__input-text <?= (isset($errors['Username']) ? 'error-field' : '')?>" required id="Username" name="Username" placeholder="Gunakan Nomor Hp / WA" type="text" value="<?= $this->session->flashdata('Username'); ?>"/>
              <?php if(isset($errors['Username']) AND $errors['Username']=="The Username field must contain a unique value."): ?>
                <span style="color:red">*Nomor ini sudah digunakan member lain.</span>
              <?php endif; ?>
            </div>  
		        <div class="col-12 col-sm-2">
		          <label style="color: #fff"><br>Password</label>	
            </div>
    		<div class="col-12 col-sm-10">
              <input autocomplete="new-password" class="contact-block__input-text <?= (isset($errors['Password']) ? 'error-field' : '')?>" id="Password" name="Password" placeholder="" type="password" required/>
            </div>    
		        <div class="col-12">
              <button type="submit" class="contact-block__submit">Submit
                <span class="contact-block__submit-icon icofont-caret-right"></span>
              </button>
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>