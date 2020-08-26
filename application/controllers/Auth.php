<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('authmodel');
    }

	public function login()
	{
		$this->load->view('login');
    }
    
    public function register(){
        $data = array('container' => 'register');
		$this->load->view('templates/templates', $data);
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('auth/login');
        } else {

            $Username = htmlspecialchars($this->input->post('Username'));
            $Password = htmlspecialchars($this->input->post('Password'));


            // CEK KE DATABASE BERDASARKAN NO HP
            $cek_login = $this->authmodel->cek_login($Username);
                
            if($cek_login == FALSE)
            {
                $this->session->set_flashdata('loginerrors', "Username yang Anda masukan salah.");
                redirect('auth/login');
            } else {
                if($cek_login->VerifyYN=="0"){
                    $this->session->set_flashdata('loginerrors', "Akun ada belum diverifikasi,<br> silahkan hubungi admin.");
                    redirect('auth/login');
                    die();
                }

                if(password_verify($Password, $cek_login->Password)){
                    // if the username and password is a match
                    $this->session->set_userdata('RunNo', $cek_login->RunNo);
                    $this->session->set_userdata('Username', $cek_login->Username);
                    $this->session->set_userdata('Nama', $cek_login->Nama);
                    $this->session->set_userdata('LoginYN', "1");
                    $this->session->set_userdata('Level', $cek_login->Level);
                    $this->session->set_flashdata('loginsuccess', "1");
                    redirect('/');
                } else {
                    $this->session->set_flashdata('loginerrors', "Username atau Password yang Anda masukan salah.");
                    redirect('auth/login');
                }
            }
        }

    }

    public function proses_register()
    {
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('JenisKelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('NoHP', 'NoHP', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('Username', 'Username', 'required|is_unique[users.Username]');
        $this->form_validation->set_rules('Password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());

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
            $Username        = $this->input->post('Username');

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

            $this->session->set_flashdata($data);

            redirect('auth/register');
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
            $Password        = password_hash($this->input->post('Password'), PASSWORD_DEFAULT);

            if($PhotoFile!=""){
                $config['upload_path']          = './assets/upload/member';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['file_name']            = date('YmdHis')."_".$Username;
                $config['overwrite']            = true;
                $config['max_size']             = 1024; // 1MB

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
                'PhotoFile'       => $PhotoFileName,
                'Username'        => $Username,
                'Password'        => $Password
            ];

            $insert = $this->authmodel->register("users", $data);

            if($insert){
                $this->session->set_flashdata('msgnewmember', 'Registrasi Sukses');
                redirect('/');
            } else {
                $this->session->set_flashdata('msgnewmember', 'Registrasi Gagal');
                redirect('/');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
}
