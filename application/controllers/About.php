<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$data = array('container' => 'about');
		$this->load->view('templates/templates', $data);
	}

	public function send_mail_to_admin(){
		$config = $this->load->config('email');
        $from   = $this->config->item('smtp_user');

        $this->email->to('admin@iklabatam.com');
        $this->email->from($from, $this->input->post('Nama'));
        $this->email->subject($this->input->post('Subject'));

        $this->email->message($this->input->post('Pesan'));
        $result = $this->email->send();

        if($result){
            echo "1";
        } else {
            echo "0";
        }
	}
}
