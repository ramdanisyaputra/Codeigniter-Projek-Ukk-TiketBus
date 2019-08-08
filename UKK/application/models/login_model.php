<?php
class Login_model extends CI_Model{
 
  function validate($email,$password){
    $this->db->where('user_email',$email);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tbl_users');
    return $result;
  }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

  function tampil_data(){
		return $this->db->get('tbl_users');
  }
  
function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}



function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}

function update_data($where,$data,$table){
  $this->db->where($where);
  $this->db->update($table,$data);
}	
}
 