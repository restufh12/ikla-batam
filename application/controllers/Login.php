<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
    }
    
    public function register(){
        $data = array('container' => 'register');
		$this->load->view('templates\templates', $data);
    }

    public function logout(){
        echo "logout";
    }
}
