<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('blogmodel');
    }

	public function detail($RunNo="")
	{
		$blogdetail = $this->blogmodel->get_detail($RunNo);
		$data = array('container'  => 'blog-detail',
					  'blogdetail' => $blogdetail);
		$this->load->view('templates/templates', $data);
	}
}
