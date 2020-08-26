<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Eventmodel extends CI_Model{

	public function insertevent($table, $data)
	{
	    return $this->db->insert($table, $data);
	}

	public function updateevent($RunNo, $data){
		$this->db->trans_start();
		$this->db->where('RunNo', $RunNo);
    	$this->db->update('events', $data);
    	$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
			return 0;
		} else {
			return 1;
		}
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

		$this->db->select('*');
		$this->db->from('events');
		$this->db->join('users', 'events.UserRunNo = users.RunNo');
	    $this->db->where('events.RunNo',$RunNo);
	    $this->db->limit(1);
	    $hasil = $this->db->get();


	    if($hasil->num_rows() > 0){
	        return $hasil->row();
	    } else {
	        return array();
	    }
	}

	public function fetch_data_event($page){
        $offset = 9*$page;
        $limit = 9;
        $sql = "SELECT * FROM events ORDER BY RunNo DESC LIMIT $offset ,$limit";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    public function fetch_data_event_member($page){
    	$UserRunNo = $this->session->userdata('RunNo');
    	$Level = $this->session->userdata('Level');
    	if($Level=="Admin"){
    		$WhereFilter = "";
    	} else {
    		$WhereFilter = " AND UserRunNo = '$UserRunNo'";
    	}
    	$offset = 3*$page;
        $limit = 3;
        $sql = "SELECT * FROM events WHERE RunNo <> '' $WhereFilter ORDER BY RunNo DESC LIMIT $offset ,$limit";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    public function delete_event($RunNo){
  		$this->db->trans_start();
		$this->db->where('RunNo', $RunNo);
		$this->db->delete('events');
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
			return 0;
		} else {
			return 1;
		}
  	}
}