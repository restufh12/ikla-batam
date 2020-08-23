<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Eventmodel extends CI_Model{

	public function insertevent($table, $data)
	{
	    return $this->db->insert($table, $data);
	}

	public function homeevent(){
		$hasil = $this->db->limit(2)->get('events');
	    if($hasil->num_rows() > 0){
	        return $hasil->result_array();
	    } else {
	        return array();
	    }
	}

	public function get_detail($RunNo){
		$hasil = $this->db->where('RunNo', $RunNo)->limit(1)->get('events');
	    if($hasil->num_rows() > 0){
	        return $hasil->row();
	    } else {
	        return array();
	    }
	}

	public function fetch_data_event($page){
        $offset = 4*$page;
        $limit = 4;
        $sql = "SELECT * FROM events LIMIT $offset ,$limit";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}