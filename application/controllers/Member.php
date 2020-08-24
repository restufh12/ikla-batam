<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index()
	{
		$data = array('container' => 'member');
		$this->load->view('templates/templates', $data);
    }
    
    public function updateprofile(){
    	$this->cek_login();
        $data = array('container' => 'member-update');
		$this->load->view('templates/templates', $data);
    }

    public function fetch_member(){
    	$this->load->model('usermodel');
        $page = $_GET['page'];
        $data = $this->usermodel->fetch_data_member($page);
        $output = '';
        foreach($data as $row){
			$vMemberRunNo    = $row->RunNo;
			$vMemberPhotoUrl = base_url('assets/upload/member/'.$row->PhotoFile);

            $output .= '
            <div class="team-block__slide" style="padding: 30px;margin: 0 auto;">
				<div class="team-block__image-wrapper">
					<div style="height: 230px; width: 230px; overflow: hidden; ">
					<img style="border-radius: 50%; height: 230px; width: 230px;" alt="" src="'.$vMemberPhotoUrl.'"/>
				</div>
				<div class="team-block__hover">
				  <div class="socials">
					<button style="background-color: transparent;" class="socials__social icofont-eye-alt" title="Lihat Detail" onclick="fnShowDetailMemberFromHome('.$vMemberRunNo.')">
					  <div class="visually-hidden">Details</div>
					</bitton>
				  </div>
				</div>
				</div>
				<div class="team-block__person-name">'.$row->Nama.'</div>
				<div class="team-block__person-role">'.$row->Suku.' | '.$row->Negara.'</div>
				<div class="team-block__person-role">'.$row->Pekerjaan.' | '.$row->Pendidikan.'</div>
			</div>';
        }
        echo $output;
    }
}
