<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index()
	{
		$data = array('container' => 'contact');
		$this->load->view('templates\templates', $data);
    }
    
    public function faq(){
        echo "faq";
    }
}
