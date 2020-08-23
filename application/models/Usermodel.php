<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Usermodel extends CI_Model{

	public function homemember(){
		$hasil = $this->db->where(array('Level' => 'Member', 'VerifyYN' => '1'))->limit(4)->get('users');
	    if($hasil->num_rows() > 0){
	        return $hasil->result_array();
	    } else {
	        return array();
	    }
	}

	public function get_detail_member($RunNo){
		$hasil = $this->db->where('RunNo', $RunNo)->limit(1)->get('users');
	    if($hasil->num_rows() > 0){
	        return $hasil->row();
	    } else {
	        return array();
	    }
	}

	public function get_all_member() {
        $this->datatables->select('RunNo,Nama,Username,Email, VerifyYN');
        $this->datatables->from('users');
        $this->datatables->where('Level', 'Member');
        $this->db->order_by('date_created', 'DESC');
        $this->datatables->add_column('view', '	<div style="display:inline-flex">
	        										<button title="Verifikasi" type="button" class="btn btn-success btn-sm verifikasi_record $2" data-runno="$1">
											          <i class="fas fa-user-check"></i>
											        </button>
											        &nbsp;
													<button title="Lihat" type="button" class="btn btn-primary btn-sm lihat_member" data-runno="$1">
											          <i class="fas fa-eye"></i>
											        </button>
											        &nbsp;
													<button title="Hapus" type="button" class="btn btn-danger btn-sm delete_member" data-runno="$1">
											          <i class="fas fa-trash-alt"></i>
											        </button>
											        </div>', 'RunNo, show_hide_memberverifikasi(VerifyYN)');
        return $this->datatables->generate();
  	}

  	public function set_verify_member($RunNo){
  		$this->db->trans_start();
  		$this->db->set('VerifyYN', '1');
		$this->db->where('RunNo', $RunNo);
		$this->db->update('users');
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
			return 0;
		} else {
			return 1;
		}
  	}

  	public function delete_member($RunNo){
  		$this->db->trans_start();
		$this->db->where('RunNo', $RunNo);
		$this->db->delete('users');
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
			return 0;
		} else {
			return 1;
		}
  	}

  	public function fetch_data_member($page){
        $offset = 3*$page;
        $limit = 3;
        $sql = "SELECT * FROM users WHERE VerifyYN='1' AND Level='Member' LIMIT $offset ,$limit";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}