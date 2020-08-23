<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('eventmodel');
		$this->load->model('usermodel');
		$dataevent  = $this->eventmodel->homeevent();
		$datamember = $this->usermodel->homemember();
		$data = array('container' => 'home',
					  'dataevent' => $dataevent,
					  'datamember' => $datamember);
		$this->load->view('templates/templates', $data);
	}

	public function get_member_detail_home(){
		$this->load->model('usermodel');
		$RunNo = $this->input->post('RunNo');
		$User  = $this->usermodel->get_detail_member($RunNo);
		$data = array('user' => $User);
		$this->load->view('component/modal_member_detail_home', $data);
	}
}
