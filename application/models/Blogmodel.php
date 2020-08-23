<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Blogmodel extends CI_Model{

	public function get_detail($RunNo)
	{
	    $hasil = $this->db->where('RunNo', $RunNo)->limit(1)->get('blogs');
	    if($hasil->num_rows() > 0){
	        return $hasil->row();
	    } else {
	        return array();
	    }
	} 
}