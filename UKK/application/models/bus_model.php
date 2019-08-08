<?php
class Bus_model extends CI_Model{
    function tampil_data(){
      $this->db->select('*');
      $this->db->from('tb_bus');
      $this->db->join('tb_berangkat', 'tb_berangkat.id_kberangkat = tb_bus.id_kberangkat');
      $this->db->join('tb_tujuan', 'tb_tujuan.id_tujuan= tb_bus.id_tujuan');
      $query = $this->db->get();
      return $query->result();
    }

    function join($aktif){
      $this->db->select('*');
      $this->db->from('tb_bus');
      $this->db->join('tb_berangkat','tb_berangkat.id_kberangkat=tb_bus.id_kberangkat');
      $this->db->join('tb_tujuan','tb_tujuan.id_tujuan=tb_bus.id_tujuan');
      $this->db->where($aktif);
      $query = $this->db->get();
      return $query->result();
    }

    function ambil(){
      $query = $this->db->query('SELECT * FROM tb_berangkat');
      return $query->result();
    }
    function ambil2(){
      $query = $this->db->query('SELECT * FROM tb_tujuan');
      return $query->result();
    }
    
    function input_data($data,$table){
		$this->db->insert($table,$data);
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