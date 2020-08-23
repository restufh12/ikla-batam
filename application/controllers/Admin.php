<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->cek_login_admin();
	    $this->load->library('datatables'); //load library ignited-dataTable
	    $this->load->model('usermodel');
    }
    
	public function index()
	{
		$data = array('container' => 'admin/dashboard');
		$this->load->view('templates/templates', $data);
	}

	function get_member_json() { //data data produk by JSON object
	    header('Content-Type: application/json');
	    echo $this->usermodel->get_all_member();
	}

	function get_member_detail(){
		$RunNo = $this->input->post('RunNo');
		$User  = $this->usermodel->get_detail_member($RunNo);
		$data = array('user' => $User);
		$this->load->view('component/modal_member_detail', $data);
	}

	public function verify_member(){
		$RunNo = $this->input->post('RunNo');
		$Result  = $this->usermodel->set_verify_member($RunNo);
		echo $Result;
	}

	public function hapus_member(){
		$RunNo = $this->input->post('RunNo');
		$Result  = $this->usermodel->delete_member($RunNo);
		echo $Result;
	}
}
