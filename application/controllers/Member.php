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
    	$RunNo = $this->session->userdata('RunNo');
    	$this->load->model('usermodel');
    	$dataUser = $this->usermodel->get_detail_member($RunNo);
        $data = array('container' => 'member-update',
    				  'dataUser' => $dataUser);
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

    public function proses_update_member()
    {	
    	$RunNo = $this->session->userdata('RunNo');
    	$OriginalUsername = $this->session->userdata('Username');

    	if($this->input->post('Username') != $OriginalUsername) {
		   $is_unique =  '|is_unique[users.Username]';
		} else {
		   $is_unique =  '';
		}
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('JenisKelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('NoHP', 'NoHP', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('Username', 'Username', 'required'.$is_unique);

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('member/updateprofile/'.$RunNo);
        } else {
            
            $Nama            = $this->input->post('Nama');
            $JenisKelamin    = $this->input->post('JenisKelamin');
            $Alamat          = $this->input->post('Alamat');
            $Pekerjaan       = $this->input->post('Pekerjaan');
            $AlamatPekerjaan = $this->input->post('AlamatPekerjaan');
            $Suku            = $this->input->post('Suku');
            $NoHP            = $this->input->post('NoHP');
            $Email           = $this->input->post('Email');
            $Negara          = $this->input->post('Negara');
            $GolonganDarah   = $this->input->post('GolonganDarah');
            $Pendidikan      = $this->input->post('Pendidikan');
            $Hobi            = $this->input->post('Hobi');
            $NamaIstri       = $this->input->post('NamaIstri');
            $NamaAnak1       = $this->input->post('NamaAnak1');
            $NamaAnak2       = $this->input->post('NamaAnak2');
            $NamaAnak3       = $this->input->post('NamaAnak3');
            $NamaAnak4       = $this->input->post('NamaAnak4');
            $NamaAnak5       = $this->input->post('NamaAnak5');
            $NamaAnak6       = $this->input->post('NamaAnak6');
            $PhotoFile       = $_FILES['PhotoFile']; 
            $Username        = $this->input->post('Username');
            $PhotoFileOld    = $this->input->post('PhotoFileOld');

            if($PhotoFile!=""){
                $config['upload_path']          = './assets/upload/member';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['file_name']            = date('YmdHis')."_".$Username;
                $config['overwrite']            = true;
                $config['max_size']             = 1024; // 1MB

                if($PhotoFileOld!="" AND $PhotoFileOld!="default.png"){
                	if (file_exists('assets/upload/member/'.$PhotoFileOld)) {
                		unlink('assets/upload/member/'.$PhotoFileOld);
                	}
                }

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('PhotoFile')) {
                    $PhotoFileName = $this->upload->data("file_name");
                } else {
                    $PhotoFileName = "default.png";
                }
            }

            $data = [
                'Nama'            => $Nama,
                'JenisKelamin'    => $JenisKelamin,
                'Alamat'          => $Alamat,
                'Pekerjaan'       => $Pekerjaan,
                'AlamatPekerjaan' => $AlamatPekerjaan,
                'Suku'            => $Suku,
                'NoHP'            => $NoHP,
                'Email'           => $Email,
                'Negara'          => $Negara,
                'GolonganDarah'   => $GolonganDarah,
                'Pendidikan'      => $Pendidikan,
                'Hobi'            => $Hobi,
                'NamaIstri'       => $NamaIstri,
                'NamaAnak1'       => $NamaAnak1,
                'NamaAnak2'       => $NamaAnak2,
                'NamaAnak3'       => $NamaAnak3,
                'NamaAnak4'       => $NamaAnak4,
                'NamaAnak5'       => $NamaAnak5,
                'NamaAnak6'       => $NamaAnak6,
                'Username'        => $Username
            ];

            if($this->input->post('Password')!=""){
            	$Password  = password_hash($this->input->post('Password'), PASSWORD_DEFAULT);
            	$data += ['Password' => $Password];
            }

            if($PhotoFile!=""){
            	$data += ['PhotoFile' => $PhotoFileName];
            }

            $this->load->model('usermodel');
            $update = $this->usermodel->update_user($RunNo, $data);

            if($update=="1"){
                $this->session->set_flashdata('msgupdatemember', '1');
                redirect('/');
            } else {
                $this->session->set_flashdata('msgupdatemember', '0');
                redirect('/');
            }
        }
    }
}
