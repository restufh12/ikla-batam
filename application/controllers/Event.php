<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	public function index()
	{
		$data = array('container' => 'event');
		$this->load->view('templates\templates', $data);
    }
    
    public function detailevent(){
        $data = array('container' => 'detail-event');
		$this->load->view('templates\templates', $data);
    }

    public function myevent() {
        $this->cek_login();
        $data = array('container' => 'my-event');
		$this->load->view('templates\templates', $data);
    }
}
