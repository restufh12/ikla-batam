<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data = array('container' => 'admin\dashboard');
		$this->load->view('templates\templates', $data);
	}
}