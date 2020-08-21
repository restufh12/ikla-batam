<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index()
	{
		$data = array('container' => 'member');
		$this->load->view('templates\templates', $data);
    }
    
    public function updateprofile(){
        $data = array('container' => 'member-update');
		$this->load->view('templates\templates', $data);
    }
}
