<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class AuthModel extends CI_Model{

	public function register($table, $data)
	{
	    return $this->db->insert($table, $data);
	}

	public function cek_login($Username)
	{
	    $hasil = $this->db->where('Username', $Username)->limit(1)->get('users');
	    if($hasil->num_rows() > 0){
	        return $hasil->row();
	    } else {
	        return array();
	    }
	} 
}